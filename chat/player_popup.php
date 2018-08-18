<?php
// Get the names and values for vars sent to player_popup.php
if (isset($_GET))
{
	while(list($name,$value) = each($_GET))
	{
		$$name = $value;
	};
};
if (isset($_POST))
{
	while(list($name,$value) = each($_POST))
	{
		$$name = $value;
	};
};

// Fix a security hole
if (isset($L) && !is_dir("./localization/".$L)) exit();
#if (ereg("SELECT|UNION|INSERT|UPDATE",$_SERVER["QUERY_STRING"])) exit();  //added by Bob Dickow for extra security NB Kludge
if (preg_match("/SELECT|UNION|INSERT|UPDATE/i",$_SERVER["QUERY_STRING"])) exit();  //added by Bob Dickow for extra security NB Kludge

// Added for Skin mod
if (isset($_COOKIE["CookieRoom"]) && !isset($R)) $R = urldecode($_COOKIE["CookieRoom"]);
if (!isset($R)) $skin = "skins/style1";

require("config/config.lib.php");
require("lib/release.lib.php");
if (!isset($L) || $L == "") $L = C_LANGUAGE;
require("localization/".$L."/localized.chat.php");
require("localization/".$L."/localized.admin.php"); //to see if needed
if (file_exists("./localization/${L}/localized.config.php")) require_once("./localization/${L}/localized.config.php");
elseif (file_exists("./localization/english/localized.config.php"))
{
	require_once("./localization/english/localized.config.php");
}

header("Content-Type: text/html; charset=${Charset}");

// avoid server configuration for magic quotes
if(function_exists('set_magic_quotes_runtime') && version_compare(PHP_VERSION, '5.3.0') < 0) set_magic_quotes_runtime(0);
else ini_set("magic_quotes_runtime", 0);
// Can't turn off magic quotes gpc so just redo what it did if it is on.
if (get_magic_quotes_gpc()) {
	foreach($_GET as $k=>$v)
		$_GET[$k] = stripslashes($v);
	foreach($_POST as $k=>$v)
		$_POST[$k] = stripslashes($v);
	foreach($_COOKIE as $k=>$v)
		$_COOKIE[$k] = stripslashes($v);
}

// For translations with an explicit charset (not the 'x-user-defined' one)
if (!isset($FontName)) $FontName = "";
if (!$_POST["src"]) $src = C_WMP_STREAM;
if ($_POST["srcu"] != "") { $src = $_POST["srcu"]; $srcu = ""; }

// Horizontal alignment for cells topic
$CellAlign = ($Align == "right" ? "RIGHT" : "LEFT");
?>
<!DOCTYPE html>
<HTML dir="<?php echo(($Align == "right") ? "RTL" : "LTR"); ?>">
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=<?php echo($Charset); ?>">
<TITLE><?php echo(A_CONFCONTENT_335a." - ".((C_CHAT_NAME != "") ? C_CHAT_NAME : APP_NAME)); ?></TITLE>
<LINK REL="stylesheet" HREF="<?php echo($skin.".css.php?Charset=${Charset}&medium=${FontSize}&FontName=".urlencode($FontName)); ?>" TYPE="text/css">
<LINK REL="stylesheet" href="plugins/html5player/media-player.css?v=<?php echo time(); ?>" TYPE="text/css" />
<SCRIPT SRC="plugins/html5player/media-player.js"></SCRIPT>
</HEAD>
<BODY CLASS="frame" onLoad="if (window.focus) window.focus();">
<CENTER>
	<TABLE BORDER=0 CLASS="table">
	<TR>
		<TH CLASS="tabtitle"><?php echo(A_CONFCONTENT_335a); ?></TH>
	</TR>
	</TABLE>
	<TABLE width=100% cellpadding="0" cellspacing="0">
	<TR valign="top">
	<TD><br />
	<div id='media-player' style='position:relative; width:203px;'>
		<video id='media-video' autoplay>
			<source src='<?php echo($src); ?>' type='video/mp4'>
			<source src='<?php echo($src); ?>' type='video/ogg'>
			<source src='<?php echo($src); ?>' type='video/webm'>
			<source src='<?php echo($src); ?>' type='video/x-flv'>
			<source src='<?php echo($src); ?>' type='video/x-matroska'>
			<source src='<?php echo($src); ?>' type='video/x-motion-jpeg'>
			<source src='<?php echo($src); ?>' type='video/3gpp'>
			<source src='<?php echo($src); ?>' type='audio/ogg'>
			<source src='<?php echo($src); ?>' type='audio/webm'>
			<source src='<?php echo($src); ?>' type='audio/aac'>
			<source src='<?php echo($src); ?>' type='audio/mp4'>
			<source src='<?php echo($src); ?>' type='audio/mpeg'>
			<source src='<?php echo($src); ?>' type='audio/wav'>
			<source src='<?php echo($src); ?>' type='audio/wave'>
			<source src='<?php echo($src); ?>' type='audio/flac'>
			<source src='<?php echo($src); ?>' type='audio/mpegurl'>
			<source src='<?php echo($src); ?>' type='audio/x-mpegURL'>
			<source src='<?php echo($src); ?>' type='audio/x-wav'>
			<source src='<?php echo($src); ?>' type='audio/3gpp'>
			<source src='<?php echo($src); ?>' type='application/ogg'>
			<source src='<?php echo($src); ?>' type='application/vnd.apple.mpegurl'>
			<source src='<?php echo($src); ?>' type='application/x-mpegURL'>
			<source src='<?php echo($src); ?>' type='application/x-mpegurl'>
			<source src='<?php echo($src); ?>' type='application/dash+xml'>
			<source src='<?php echo($src); ?>' type='application/x-shockwave-flash'>
			<source src='<?php echo($src); ?>'>
			<object type="application/x-shockwave-flash" data="plugins/html5player/media-player.swf?videoUrl=<?php echo($src); ?>&autoPlay=true&allowfullscreen=true&allowscriptaccess=always">
				<param name="media" value="plugins/html5player/media-player.swf?videoUrl=<?php echo($src); ?>&autoPlay=true&allowfullscreen=true&allowscriptaccess=always">
			</object>
	   </video>
		<div id='media-controls'>
			<progress id='progress-bar' class='progress' min='0' max='100' value='0'>0% played</progress>
			<button id='replay-button' class='replay' title='replay' onclick='replayVideo();'>Replay</button>
			<button id='play-pause-button' class='play' title='play' onclick='togglePlayPause();'>Play</button>
			<button id='stop-button' class='stop' title='stop' onclick='stopPlayer();'>Stop</button>
			<button id='volume-inc-button' class='volume-plus' title='increase volume' onclick='changeVolume("+");'>Increase volume</button>
			<button id='volume-dec-button' class='volume-minus' title='decrease volume' onclick='changeVolume("-");'>Decrease volume</button>
			<button id='mute-button' class='mute' title='mute' onclick='toggleMute("true");'>Mute</button>
			<button id='full-screen-button' class='full-screen' title='full-screen'>Full-Screen</button>
		</div>
 		<div id='media-play-list'>
			<h2>Play list</h2>
			<ul id='play-list'>
				<li><span class='play-item' onclick='loadVideo("http://www.ioncannon.net/examples/vp8-webm/big_buck_bunny_480p.webm");'>Big Buck Bunny (WebM media)</span></li>
				<li><span class='play-item' onclick='loadVideo("http://vjs.zencdn.net/v/oceans.mp4");'>Oceans (mp4 video)</span></li>
				<li><span class='play-item' onclick='loadVideo("http://d2zihajmogu5jn.cloudfront.net/elephantsdream/ed_hd.mp4");'>Elephant's Dream (mp4 video)</span></li>
				<li><span class='play-item' onclick='loadVideo("http://techslides.com/demos/sample-videos/small.ogv");'>Tech snap (ogg video)</span></li>
			</ul>
		</div>
	</div>
	</TD>
	</TR>
	</TABLE>
	<TABLE align="left" cellpadding="0" cellspacing="0">
		<TR valign="top">
			<TD align="left">
			<form method="post" action="player_popup.php?<?php echo("L=".$L."&src=".$src."&srcu=".$srcu); ?>" autocomplete="" target="_self" />
			<br />
				<select name="src" onchange='this.form.submit(); document.getElementById("srcu").value = ""'>
					<option hidden="true" disabled selected>Select a format</option>
					<option value="http://live.romanticfm.ro:9123/radiozu.aacp"<?php if($src == "http://live.romanticfm.ro:9123/radiozu.aacp"){ echo " selected"; } ?>>Radio Zu Live (aac audio stream)</option>
					<option value="http://vjs.zencdn.net/v/oceans.mp4"<?php if($src == "http://vjs.zencdn.net/v/oceans.mp4"){ echo " selected"; } ?>>Oceans (mp4 video)</option>
					<option value="http://d2zihajmogu5jn.cloudfront.net/elephantsdream/ed_hd.mp4"<?php if($src == "http://d2zihajmogu5jn.cloudfront.net/elephantsdream/ed_hd.mp4"){ echo " selected"; } ?>>Elephant's Dream (mp4 video)</option>
					<option value="http://www.ioncannon.net/examples/vp8-webm/big_buck_bunny_480p.webm"<?php if($src == "http://www.ioncannon.net/examples/vp8-webm/big_buck_bunny_480p.webm"){ echo " selected"; } ?>>Big Buck Bunny (WebM media)</option>
					<option value="http://techslides.com/demos/sample-videos/small.ogv"<?php if($src == "http://techslides.com/demos/sample-videos/small.ogv"){ echo " selected"; } ?>>Tech snap (ogg video)</option>
					<option value="http://cdn3.viblast.com/streams/hls/airshow/playlist.m3u8"<?php if($src == "http://cdn3.viblast.com/streams/hls/airshow/playlist.m3u8"){ echo " selected"; } ?>>Airshow (HLS/m3u8 video)</option>
					<option value="http://nasatv-lh.akamaihd.net/i/NASA_101@319270/master.m3u8"<?php if($src == "http://nasatv-lh.akamaihd.net/i/NASA_101@319270/master.m3u8"){ echo " selected"; } ?>>NASA TV Live (HLS/m3u8 video)</option>
					<option value="http://content.jwplatform.com/manifests/vM7nH0Kl.m3u8"<?php if($src == "http://content.jwplatform.com/manifests/vM7nH0Kl.m3u8"){ echo " selected"; } ?>>Manifest (HLS/m3u8 video)</option>
					<option value="http://cdn3.viblast.com/streams/dash/vod-bunny/SNE_DASH_CASE3B_SD_REVISED.mpd"<?php if($src == "http://cdn3.viblast.com/streams/dash/vod-bunny/SNE_DASH_CASE3B_SD_REVISED.mpd"){ echo " selected"; } ?>>Big Buck Bunny (Apple mpd media)</option>
					<option value="https://s3.amazonaws.com/_bc_dml/example-content/sintel_dash/sintel_vod.mpd"<?php if($src == "https://s3.amazonaws.com/_bc_dml/example-content/sintel_dash/sintel_vod.mpd"){ echo " selected"; } ?>>Test (Apple mpd media)</option>
					<option value="http://dash.edgesuite.net/dash264/TestCases/2a/qualcomm/1/MultiResMPEG2.mpd"<?php if($src == "http://dash.edgesuite.net/dash264/TestCases/2a/qualcomm/1/MultiResMPEG2.mpd"){ echo " selected"; } ?>>MultiRes (Apple mpd media)</option>
				</select>
			</TD>
		</TR>
<?php
	if($src != ""){
	?>
		<TR valign="top">
			<TD align="left">
				 Currently loaded url:<br /><font style="background-color:#FFFFFF;"><?php echo($src); ?></font><br />
			</TD>
		</TR>
<?php
	}
?>
		<TR valign="top">
			<TD align="left">
				<br /><input type="text" name="srcu" id="srcu" value="<?php echo($srcu); ?>" size="40">&nbsp;<input type="submit" name="Submit" value="Load your media source" />
			</TD>
		</TR>
		<TR valign="top">
			<TD align="center">
				<br /><INPUT TYPE="submit" NAME="Close" VALUE="<?php echo(L_REG_25); ?>" onClick='self.close(); return false;'>
			</TD>
		</TR>
	</TABLE>
</form>
</CENTER><br />
<P align="right"><div align="right"><span dir="LTR" style="font-weight: 600; color:#FFD700; font-size: 7pt">
&copy; 2016<?php echo((date('Y')>"2016") ? "-".date('Y') : ""); ?> - by <a href="mailto:<?php echo(PLUS_DEVELOPER_EMAIL); ?>?subject=phpMychat%20Plus%20feedback" onMouseOver="window.status='<?php echo(sprintf(L_CLICKS,L_LINKS_6,L_AUTHOR)); ?>.'; return true;" title="<?php echo(sprintf(L_CLICKS,L_LINKS_6,L_AUTHOR)); ?>" target=_blank><?php echo(PLUS_DEVELOPER); ?></a></span></div>
</BODY>
</HTML>
<?php
?>