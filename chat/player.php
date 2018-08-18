<?php
// Get the names and values for vars sent by index.lib.php
if (isset($_GET))
{
	while(list($name,$value) = each($_GET))
	{
		$$name = $value;
	};
};
// Fix a security hole
if (isset($L) && !is_dir("./localization/".$L)) exit();
// Added for Skin mod
if (isset($_COOKIE["CookieRoom"])) $R = urldecode($_COOKIE["CookieRoom"]);

require("./config/config.lib.php");
require("./localization/languages.lib.php");
require("./localization/".$L."/localized.chat.php");

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
?>
<!DOCTYPE html>
<HTML dir="<?php echo(($Align == "right") ? "RTL" : "LTR"); ?>">
<HEAD>
<TITLE>MediaPlayer frame</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=<?php echo($Charset); ?>">
<LINK REL="stylesheet" HREF="<?php echo($skin.".css.php?Charset=${Charset}&medium=${FontSize}&FontName=".urlencode($FontName)); ?>" TYPE="text/css" />
<LINK REL="stylesheet" href="plugins/html5player/media-player.css?v=<?php echo time(); ?>" TYPE="text/css" />
<SCRIPT SRC="plugins/html5player/media-player.js"></SCRIPT>
</head>
<body CLASS="frame" topmargin="0" leftmargin="0" marginwidth="0" marginheight="0">
<center>
<table width=100% cellpadding="0" cellspacing="0">
<tr valign="bottom">
<td>
	<div id='media-player'>
		<video id='media-video'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='video/mp4'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='video/webm'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='video/ogg'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='video/x-flv'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='video/x-matroska'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='video/x-motion-jpeg'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/mp4'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/mpeg'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/webm'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/ogg'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/wav'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/wave'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/aac'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/flac'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/mpegurl'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/x-mpegURL'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/x-wav'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='audio/3gpp'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='application/ogg'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='application/vnd.apple.mpegurl'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='application/x-mpegURL'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='application/x-mpegurl'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='application/dash+xml'>
			<source src='<?php echo(C_WMP_STREAM); ?>' type='application/x-shockwave-flash'>
			<source src='<?php echo(C_WMP_STREAM); ?>'>
			<object type="application/x-shockwave-flash" data="plugins/html5player/media-player.swf?videoUrl=<?php echo(C_WMP_STREAM); ?>&autoPlay=true&allowfullscreen=true&allowscriptaccess=always">
				<param name="media" value="plugins/html5player/media-player.swf?videoUrl=<?php echo(C_WMP_STREAM); ?>&autoPlay=true&allowfullscreen=true&allowscriptaccess=always">
			</object>
	   </video>
		<div id='media-controls'>
			<progress id='progress-bar' class='progress' min='0' max='100' value='0'>0% played</progress>
			<button id='replay-button' class='replay' title='replay' onclick='replayVideo();'>Replay</button>
			<button id='play-pause-button' class='play' title='play' onclick='togglePlayPause();'>Play</button>
			<button id='stop-button' class='stop' title='stop' onclick='stopPlayer();'>Stop</button>
			<button id='volume-inc-button' class='volume-plus' title='increase volume' onclick='changeVolume("+");'>Increase volume</button>
			<button id='volume-dec-button' class='volume-minus' title='decrease volume' onclick='changeVolume("-");'>Decrease volume</button>
			<button id='mute-button' class='mute' title='mute' onclick='toggleMute("false");'>Mute</button>
			<button id='full-screen-button' class='full-screen' title='full-screen'>Full-Screen</button>
		</div>
	</div>
</td>
</tr>
</table>
</center>
</body>
</html>
<?php
?>