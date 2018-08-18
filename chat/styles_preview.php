<?php
// Get the names and values for vars sent by index.lib.php
// Get the names and values for vars sent by index.lib.php
if (isset($_GET))
{
	while(list($name,$value) = each($_GET))
	{
		$$name = $value;
	};
};

// Get the names and values for post vars
if (isset($_POST))
{
	while(list($name,$value) = each($_POST))
	{
		$$name = $value;
	};
};
// Fix some security holes
if (!isset($ChatPath)) $ChatPath = "";
if (!is_dir('./'.substr($ChatPath, 0, -1))) exit();
if (isset($L) && !is_dir("./${ChatPath}localization/".$L)) exit();
#if (ereg("SELECT|UNION|INSERT|UPDATE",$_SERVER["QUERY_STRING"])) exit();  //added by Bob Dickow for extra security NB Kludge
if (preg_match("/SELECT|UNION|INSERT|UPDATE/i",$_SERVER["QUERY_STRING"])) exit();  //added by Bob Dickow for extra security NB Kludge
error_reporting (E_ERROR | E_PARSE);

include_once("./skins/style$no.php");
require_once("./${ChatPath}localization/".$L."/localized.chat.php");
?>
<html>
<head>
<title><?php echo($no." - ".$SKIN_NAME); ?></title>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=<?php echo($Charset); ?>">
<LINK REL="stylesheet" HREF="skins/style<?php echo($no.".css.php?Charset=${Charset}&medium=${FontSize}&FontName=".urlencode($FontName)) ?>" TYPE="text/css">
</head>

<body class="frame"><center>
	<P class="title" align=center>
		<?php echo($no." - ".$SKIN_NAME); ?>
	<TABLE align=center BORDER=0 CELLPADDING=3 CLASS=<?php echo(($no != 7 && $no != 11) ? "table" : "frame"); ?>>
		<TH COLSPAN=2 CLASS="tabtitle">Table Sample</TH>
			<tr>
				<td width=50% CLASS="tabtitle" align=center>Messages frame</td>
				<td CLASS="tabtitle" align=center>Other frames</td>
			</tr>
			<tr>
				<td width=50% class="msg" class="mesframePreview">Default message sample</td>
				<td class="framePreview"><a href=#>Link sample</a></td>
			</tr>
			<tr>
				<td class="msg2" class="mesframePreview">Highlighted text sample</td>
				<td class="framePreview"><a href=#>Room name sample</a></td>
			</tr>
			<tr>
				<td class="msg" class="mesframePreview"><a href=# class="sender">User sample</a></td>
				<td class="framePreview"><a href=# class="sender">Sender sample</a></td>
			</tr>
			<tr>
				<td class="notify" class="mesframePreview">Notify sample</td>
				<td class="framePreview"><div class=success>Success sample</div></td>
			</tr>
			<tr>
				<td class="notify2 class="mesframePreview"">Announcement sample</td>
				<td class="framePreview"><div class="small">Small text sample</div></td>
			</tr>
</table>
<div align="right" class="small"><span style="font-size: 5pt">&nbsp;</span></div>
			<INPUT TYPE="text" SIZE="30" MAXLENGTH="30" VALUE="Input Box sample"><br />
			<SELECT>
				<OPTION VALUE="" selected>Select box sample</OPTION>
				<OPTION VALUE="">Value 1 sample</OPTION>
				<OPTION VALUE="">Value 2 sample</OPTION>
				</SELECT><br />
			<INPUT TYPE="submit" VALUE="Button sample">
<br /><div align="right" class="small"><?php echo(sprintf(L_SKINS_COPY,$SKIN_DATE,$SKIN_BY)); ?></div>
<P>
</center>
</body>
</html>