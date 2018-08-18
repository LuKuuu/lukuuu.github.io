<?php
// ------ THESE SETTINGS MUST BE MANUALLY COMPLETED (AND NEVER DISCLOSED) ------

// Database settings
define("C_DB_NAME", 'i4843717_mc1');				// Logical database name on that server (most common like: cpanelusername_databasename)
define("C_DB_USER", 'i4843717_mc1');				// Database username (most common like: cpanelusername_username)
define("C_DB_PASS", 'W.4AfEZ0VEg1qQDjC6r68');					// Database user's password
// We recommend you keep the names below
define("C_DB_HOST", 'localhost');			// Hostname of your MySQL server (most common "localhost", but sometimes "mysql.domain.com")
define("C_DB_PORT", '');					// Database listening port (MySQL default 3306, leave empty; MariaDB default 3307 - check your server configuration)
define("C_DB_TYPE", 'mysqli');				// SQL server type ("mysqli", "mysql", "mariadb", "pgsql" or "odbc") define('C_DB_PREFIX', 'mc_');
define("C_DB_DRIVER", 'mysql');				// Database driver only for PDO ("firebird", "mysql", "odbc", "oci", "pgsql", "sqlite", etc)
define("C_BAN_TBL", C_DB_PREFIX.'ban_users');			// Name of the table where banished users are stored
define("C_CFG_TBL", C_DB_PREFIX.'config');			// Name of the table where configuration settings are stored (if enabled)
define("C_LRK_TBL", C_DB_PREFIX.'lurkers');			// Name of the table where data about lurkers are stored (if enabled)
define("C_MSG_TBL", C_DB_PREFIX.'messages');			// Name of the table where messages are stored
define("C_REG_TBL", C_DB_PREFIX.'reg_users');			// Name of the table where registered users are stored
define("C_STS_TBL", C_DB_PREFIX.'stats');				// Name of the table where statistics data is stored (if enabled)
define("C_USR_TBL", C_DB_PREFIX.'users');				// Name of the table where user names are stored

// ------ THESE SETTINGS MUST NOT BE CHANGED ------

ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors',0); //set to 1 for debugging purposes only
ini_set('log_errors',1);
#mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //uncomment for debugging purposes only

if(C_DB_TYPE == "mysqli" || C_DB_TYPE == "mariadb"){
	if(C_DB_TYPE == "mysqli") $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect(C_DB_HOST.(C_DB_PORT != "" && C_DB_PORT != "3306" ? ":".C_DB_PORT : ""), C_DB_USER, C_DB_PASS, C_DB_NAME)) or die ('<center>Error: Could Not Connect To Database: '.mysqli_connect_error());
	elseif(C_DB_TYPE == "mariadb") $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect(C_DB_HOST, C_DB_USER, C_DB_PASS, C_DB_NAME, (C_DB_PORT != "" ? C_DB_PORT : "3306"))) or die ('<center>Error: Could Not Connect To Database: '.mysqli_connect_error());
	mysqli_query($conn, "SET CHARACTER SET utf8");
	mysqli_query($conn, "SET NAMES 'utf8'");
#	((bool)mysqli_query($conn, "USE " . constant('C_DB_NAME')));
	$query = "SELECT * FROM ".C_CFG_TBL."";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
}
elseif(C_DB_TYPE == "pdo"){
	$conn = new PDO("".C_DB_DRIVER.":host=".C_DB_HOST.";port=".C_DB_PORT.";dbname=".C_DB_NAME.";charset=utf8", C_DB_USER, C_DB_PASS);
	if( version_compare(PHP_VERSION, '5.3.6', '<') ) $conn->query("SET NAMES 'utf8'");
	$query = "SELECT * FROM ".C_CFG_TBL."";
	$result = $conn->query($query);
	$row = $result->fetch(PDO::FETCH_ASSOC);
}
else{
	$conn = mysql_connect(C_DB_HOST.(C_DB_PORT != "" && C_DB_PORT != "3306" ? ":".C_DB_PORT : ""), C_DB_USER, C_DB_PASS) or die ('<center>Error: Could Not Connect: " '.mysql_error());
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET NAMES 'utf8'");
	mysql_select_db(C_DB_NAME) or die ('<center>Error: Could Not Connect To Database: '.mysql_error());
	$query = "SELECT * FROM ".C_CFG_TBL."";
	$result = mysql_query($query);
	$row = mysql_fetch_assoc($result);
}

while(list($name,$value) = each($row))
{
	$$name = $value;
};

$query_bot = "SELECT username,avatar,colorname FROM ".C_REG_TBL." WHERE email='bot@bot.com'";
$query_quote = "SELECT username,avatar,colorname FROM ".C_REG_TBL." WHERE email='quote@quote.com'";
if(C_DB_TYPE == "mysqli" || C_DB_TYPE == "mariadb"){
	$result_bot = mysqli_query($conn, $query_bot);
	list($BOT_NAME, $BOT_AVATAR, $BOT_FONT_COLOR) = mysqli_fetch_row($result_bot);

	$result_quote = mysqli_query($conn, $query_quote);
	list($QUOTE_NAME, $QUOTE_AVATAR, $QUOTE_FONT_COLOR) = mysqli_fetch_row($result_quote);
	@((is_null($___mysqli_res = mysqli_close($conn))) ? false : $___mysqli_res);
}
elseif(C_DB_TYPE == "pdo"){
	$result_bot = $conn->query($query_bot);
	list($BOT_NAME, $BOT_AVATAR, $BOT_FONT_COLOR) = $result_bot->fetch(PDO::FETCH_ASSOC);
	$result_bot->closeCursor();

	$result_quote = $conn->query($query_quote);
	list($QUOTE_NAME, $QUOTE_AVATAR, $QUOTE_FONT_COLOR) = $result_quote->fetch(PDO::FETCH_ASSOC);
	$result_quote->closeCursor();
	$conn = null;
}
else{
	$result_bot = mysql_query($query_bot);
	list($BOT_NAME, $BOT_AVATAR, $BOT_FONT_COLOR) = mysql_fetch_row($result_bot);

	$result_quote = mysql_query($query_quote);
	list($QUOTE_NAME, $QUOTE_AVATAR, $QUOTE_FONT_COLOR) = mysql_fetch_row($result_quote);
	@mysql_close($conn);
}

define("C_SUPPORT_PAID", 0);
define("C_SEARCH_PAID", 0);

// Cleaning settings for messages and usernames
define("C_MSG_DEL", $MSG_DEL);
define("C_USR_DEL", $USR_DEL);
define("C_CHAT_BOOT", $CHAT_BOOT);
define("C_REG_DEL", $REG_DEL);

// Language settings
define("C_LANGUAGE", $LANGUAGE);
define("C_MULTI_LANG", $MULTI_LANG);
define("C_ENGLISH_FORMAT", $ENGLISH_FORMAT);
define("C_FLAGS_3D", $FLAGS_3D);

// Registration of users
define("C_ALLOW_REGISTER", $ALLOW_REGISTER);
define("C_REQUIRE_REGISTER", $REQUIRE_REGISTER);
define("C_REQUIRE_NAMES", $REQUIRE_NAMES);
define("C_EMAIL_PASWD", $EMAIL_PASWD);
define("C_EMAIL_USER", $EMAIL_USER);
define("C_PASS_LENGTH", $PASS_LENGTH);
define("C_ADMIN_NOTIFY", $ADMIN_NOTIFY);
define("C_ADMIN_NAME", $ADMIN_NAME);
define("C_ADMIN_EMAIL", $ADMIN_EMAIL);
define("C_CHAT_URL", stripos($CHAT_URL,"http://") !== false ? $CHAT_URL : "./");

// Security and restrictions
define("C_SHOW_ADMIN", $SHOW_ADMIN);
define("C_SHOW_DEL_PROF", $SHOW_DEL_PROF);
define("C_VERSION", $VERSION);
define("C_BANISH", $BANISH);
define("C_NO_SWEAR", $NO_SWEAR);
define("C_SWEAR_EXPR", $SWEAR_EXPR);
define("C_SAVE", $SAVE);

// Messages enhancements
define("C_USE_SMILIES", $USE_SMILIES);
define("C_HTML_TAGS_KEEP", $HTML_TAGS_KEEP);
define("C_HTML_TAGS_SHOW", $HTML_TAGS_SHOW);

// Default display settings
define("C_TMZ_OFFSET", $TMZ_OFFSET);
define("C_MSG_ORDER", $MSG_ORDER);
define("C_MSG_NB", $MSG_NB);
define("C_MSG_REFRESH", $MSG_REFRESH);
define("C_SHOW_TIMESTAMP", $SHOW_TIMESTAMP);
define("C_NOTIFY", $NOTIFY);
define("C_WELCOME", $WELCOME);

// Room Skin mod by Ciprian
define("C_SKIN", $USE_SKIN);

// Proposed (default) rooms and reserved names for private rooms
define("ROOM1", $ROOM1);
define("ROOM2", $ROOM2);
define("ROOM3", $ROOM3);
define("ROOM4", $ROOM4);
define("ROOM5", $ROOM5);
define("ROOM6", $ROOM6);
define("ROOM7", $ROOM7);
define("ROOM8", $ROOM8);
define("ROOM9", $ROOM9);

$PUBLIC_ROOMS = $EN_ROOM1 ? ($RES_ROOM1 ? ROOM1." [R], " : ROOM1.", ") : "";
$PUBLIC_ROOMS .= $EN_ROOM2 ? ($RES_ROOM2 ? ROOM2." [R], " : ROOM2.", ") : "";
$PUBLIC_ROOMS .= $EN_ROOM3 ? ($RES_ROOM3 ? ROOM3." [R], " : ROOM3.", ") : "";
$PUBLIC_ROOMS .= $EN_ROOM4 ? ($RES_ROOM4 ? ROOM4." [R], " : ROOM4.", ") : "";
$PUBLIC_ROOMS .= $EN_ROOM5 ? ($RES_ROOM5 ? ROOM5." [R], " : ROOM5.", ") : "";
$PUBLIC_DISP_ROOMS = trim($PUBLIC_ROOMS,", ");
$PUBLIC_ROOMS = trim(str_replace(" [R]","",$PUBLIC_ROOMS),", ");
$PRIVATE_ROOMS = $EN_ROOM6 ? ROOM6.", " : "";
$PRIVATE_ROOMS .= $EN_ROOM7 ? ROOM7.", " : "";
$PRIVATE_ROOMS .= $EN_ROOM8 ? ROOM8.", " : "";
$PRIVATE_ROOMS .= $EN_ROOM9 ? ROOM9.", " : "";
$PRIVATE_ROOMS = trim($PRIVATE_ROOMS,", ");
$DefaultChatRooms = explode(", ", $PUBLIC_ROOMS);
if ($PUBLIC_DISP_ROOMS != $PUBLIC_ROOMS) $DefaultDispChatRooms = explode(", ", $PUBLIC_DISP_ROOMS);
if ($PRIVATE_ROOMS == "") $DefaultPrivateRooms = NULL;
else $DefaultPrivateRooms = explode(", ", $PRIVATE_ROOMS);

// Profanity filter disabled for following rooms - by Ciprian
define("C_NO_SWEAR_ROOM1", $SWEAR1);
define("C_NO_SWEAR_ROOM2", $SWEAR2);
define("C_NO_SWEAR_ROOM3", $SWEAR3);
define("C_NO_SWEAR_ROOM4", $SWEAR4);

// For Bob Dickow's multi/split smiley's in help popup modification:
define("SMILEY_COLS", $SMILEY_COLS);
define("SMILEY_COLS_POP", $SMILEY_COLS_POP);

// Sound for users entering Chat.
define("ALLOW_ENTRANCE_SOUND", $ALLOW_ENTRANCE_SOUND);
define("ENTRANCE_SOUND", $ENTRANCE_SOUND);
define("WELCOME_SOUND", $WELCOME_SOUND);
if ($ALLOW_ENTRANCE_SOUND == "3")
{
	if($ENTRANCE_SOUND != "")
	{
		define("L_ENTER_SND", "<EMBED SRC=\"".$ENTRANCE_SOUND."\" VOLUME=\"30\" HIDDEN=\"true\" AUTOSTART=\"true\" LOOP=\"false\" NAME=\"Hello\" MASTERSOUND><NOEMBED><BGSOUND SRC=\"".$ENTRANCE_SOUND."\" LOOP=1></NOEMBED></EMBED>");
	}
	if($WELCOME_SOUND != "")
	{
		define("L_WELCOME_SND", "<EMBED SRC=\"".$WELCOME_SOUND."\" VOLUME=\"30\" HIDDEN=\"true\" AUTOSTART=\"true\" LOOP=\"false\" NAME=\"Welcome\" MASTERSOUND><NOEMBED><BGSOUND SRC=\"".$WELCOME_SOUND."\" LOOP=1></NOEMBED></EMBED>");
	}
}
elseif ($ALLOW_ENTRANCE_SOUND == "2" && $WELCOME_SOUND != "")
{
	define("L_ENTER_SND", "");
	define("L_WELCOME_SND", "<EMBED SRC=\"".$WELCOME_SOUND."\" VOLUME=\"30\" HIDDEN=\"true\" AUTOSTART=\"true\" LOOP=\"false\" NAME=\"Welcome\" MASTERSOUND><NOEMBED><BGSOUND SRC=\"".$WELCOME_SOUND."\" LOOP=1></NOEMBED></EMBED>");
}
elseif ($ALLOW_ENTRANCE_SOUND == "1" && $ENTRANCE_SOUND != "")
{
	define("L_ENTER_SND", "<EMBED SRC=\"".$ENTRANCE_SOUND."\" VOLUME=\"30\" HIDDEN=\"true\" AUTOSTART=\"true\" LOOP=\"false\" NAME=\"Hello\" MASTERSOUND><NOEMBED><BGSOUND SRC=\"".$ENTRANCE_SOUND."\" LOOP=1></NOEMBED></EMBED>");
	define("L_WELCOME_SND", "");
}
else
{
	define("L_ENTER_SND", "");
	define("L_WELCOME_SND", "");
}

// Buzz Sound command.
define("ALLOW_BUZZ_SOUND", $ALLOW_BUZZ_SOUND);
define("BUZZ_SOUND", $BUZZ_SOUND);
if ($ALLOW_BUZZ_SOUND && $BUZZ_SOUND != "") define("L_BUZZ_SND", "<EMBED SRC=\"".$BUZZ_SOUND."\" VOLUME=\"30\" HIDDEN=\"true\" AUTOSTART=\"true\" LOOP=\"false\" NAME=\"Buzz\" MASTERSOUND><NOEMBED><BGSOUND SRC=\"".$BUZZ_SOUND."\" LOOP=1></NOEMBED></EMBED>");
else define("L_BUZZ_SND", "");

// Enable different Topics for each room, defined in topic.php.
// If set to 0, it will use the global topic defined there.
define ("TOPIC_DIFF", $TOPIC_DIFF);

// Away command user status update.
define("C_UPDTUSRS", "<!-- UPDTUSRS //-->");

// Show tutorial link on the welcome page
define ("C_SHOW_TUT", $SHOW_TUT);

// Info on first page mod by Ciprian
define("C_SHOW_INFO", $SHOW_INFO);
define("SET_CMDS", $SET_CMDS);
define("CMDS", $CMDS);
define("SET_MODS", $SET_MODS);
define("MODS", $MODS);
define("SET_BOT", $SET_BOT);

// Room command by Ciprian
define("ROOM_SAYS", $ROOM_SAYS);

// Demote control level by Ciprian
define("C_DEMOTE_MOD", $DEMOTE_MOD);

// Private message popup mod by Ciprian
define("C_ENABLE_PM", $ENABLE_PM);
define("C_PRIV_POPUP", $PRIV_POPUP);

// Chat Etiquete by Ealdwulf&Emma-Kate from http://wizardtales.net/chat
define("SHOW_ETIQ_IN_HELP", $SHOW_ETIQ_IN_HELP);

// Show logo on top of thefirst page
define ("C_SHOW_LOGO", $SHOW_LOGO);
define ("C_LOGO_IMG", $LOGO_IMG);
define ("C_LOGO_OPEN", $LOGO_OPEN);
define ("C_LOGO_ALT", $LOGO_ALT);
define ("APP_LOGO", "<A HREF='".$LOGO_OPEN."' TITLE='".$LOGO_ALT."' onMouseOver=\"window.status='".C_LOGO_ALT."'; return true\" TARGET=_blank><IMG SRC='".$LOGO_IMG."' BORDER=0 ALT='".$LOGO_ALT."'></A>");		// Application logo image

// Show private rooms selection box on first page
define ("C_SHOW_PRIV", $SHOW_PRIV);
define ("C_SHOW_PRIV_MOD", $SHOW_PRIV_MOD);
define ("C_SHOW_PRIV_USR", $SHOW_PRIV_USR);

// Show owner's name on bottom of the first page
define ("C_SHOW_OWNER", $SHOW_OWNER);

// Show counter on bottom of the first page
define ("C_SHOW_COUNTER", $SHOW_COUNTER);
define ("C_INSTALL_DATE", $INSTALL_DATE);

// Color Input Box Mod by Ciprian - power color filters activation - default "yes".
define("COLOR_FILTERS", $COLOR_FILTERS);
define("COLOR_CA", $COLOR_CA);
define("COLOR_CA1", $COLOR_CA1);
define("COLOR_CA2", $COLOR_CA2);
define("COLOR_CM", $COLOR_CM);
define("COLOR_CM1", $COLOR_CM1);
define("COLOR_CM2", $COLOR_CM2);

// Color Input Box Mod by Ciprian - allow guests to use colors - default "yes".
define("COLOR_ALLOW_GUESTS", $COLOR_ALLOW_GUESTS);

// ------ THESE IS A WEB STANDARD - SETTINGS MUST NOT BE CHANGED!!! (it will show the 16 web-safe standard colors on the Color Help Page)------
define("COLOR_LIST", "<P style=\"background-color:tan; color:black;\">[ <SPAN style=\"color:aqua\">aqua</SPAN> - <SPAN style=\"color:black\">black</SPAN> - <SPAN style=\"color:blue\">blue</SPAN> - <SPAN style=\"color:fuchsia\">fuchsia</SPAN> - <SPAN style=\"color:gray\">gray</SPAN> - <SPAN style=\"color:green\">green</SPAN> - <SPAN style=\"color:lime\">lime</SPAN> - <SPAN style=\"color:maroon\">maroon</SPAN> ]<br />[ <SPAN style=\"color:navy\">navy</SPAN> - <SPAN style=\"color:olive\">olive</SPAN> - <SPAN style=\"color:purple\">purple</SPAN> - <SPAN style=\"color:red\">red</SPAN> - <SPAN style=\"color:silver\">silver</SPAN> - <SPAN style=\"color:teal\">teal</SPAN> - <SPAN style=\"color:white\">white</SPAN> - <SPAN style=\"color:yellow\">yellow</SPAN> ]</P>");

// ------ THIS IS THE LIST OF COLORS DISPLAYED IN YOUR DROP-DOWN LIST. IF YOU KNOW OR WANT MORE, JUST ADD THEM HERE ------
define("COLORLIST", '"","black","dimgray","gray","darkgray","silver","lightgrey","gainsboro","whitesmoke","ghostwhite","white","slategray","lightslategray","midnightblue","navy","darkblue","darkslateblue","mediumblue","blue","steelblue","royalblue","cornflowerblue","dodgerblue","deepskyblue","lightskyblue","skyblue","lightsteelblue","lightblue","powderblue","paleturquoise","lightcyan","aliceblue","azure","mintcream","darkslategray","cadetblue","teal","darkcyan","lightseagreen","darkturquoise","mediumturquoise","turquoise","aqua","cyan","mediumaquamarine","aquamarine","darkolivegreen","olive","olivedrab","darkkhaki","darkgreen","green","forestgreen","seagreen","mediumseagreen","darkseagreen","mediumspringgreen","springgreen","palegreen","honeydew","limegreen","lime","lightgreen","lawngreen","chartreuse","greenyellow","yellowgreen","indigo","purple","darkmagenta","darkviolet","darkorchid","mediumorchid","orchid","violet","plum","thistle","blueviolet","mediumpurple","slateblue","mediumslateblue","lavender","mediumvioletred","magenta","fuchsia","deeppink","palevioletred","hotpink","lightpink","pink","mistyrose","lavenderblush","maroon","darkred","firebrick","crimson","red","orangered","tomato","indianred","lightcoral","salmon","darksalmon","lightsalmon","coral","darkorange","orange","sandybrown","darkgoldenrod","goldenrod","gold","yellow","khaki","palegoldenrod","lemonchiffon","cornsilk","lightgoldenrodyellow","beige","lightyellow","ivory","rosybrown","saddlebrown","brown","sienna","chocolate","peru","tan","burlywood","wheat","navajowhite","peachpuff","moccasin","bisque","blanchedalmond","papayawhip","antiquewhite","linen","oldlace","seashell","floralwhite","snow"');

// Classic short list - comment the above line and uncomment below to use the standard version list (also customizable)
#define("COLORLIST", '"","Black","Red","Green","Blue","Purple","Darkred","Darkgreen","Darkblue","Maroon","Aqua","Darkorange"');

/* backup colorlist (to revert to default)
define("COLORLIST", '"","black","dimgray","gray","darkgray","silver","lightgrey","gainsboro","whitesmoke","ghostwhite","white","slategray","lightslategray","midnightblue","navy","darkblue","darkslateblue","mediumblue","blue","steelblue","royalblue","cornflowerblue","dodgerblue","deepskyblue","lightskyblue","skyblue","lightsteelblue","lightblue","powderblue","paleturquoise","lightcyan","aliceblue","azure","mintcream","darkslategray","cadetblue","teal","darkcyan","lightseagreen","darkturquoise","mediumturquoise","turquoise","aqua","cyan","mediumaquamarine","aquamarine","darkolivegreen","olive","olivedrab","darkkhaki","darkgreen","green","forestgreen","seagreen","mediumseagreen","darkseagreen","mediumspringgreen","springgreen","palegreen","honeydew","limegreen","lime","lightgreen","lawngreen","chartreuse","greenyellow","yellowgreen","indigo","purple","darkmagenta","darkviolet","darkorchid","mediumorchid","orchid","violet","plum","thistle","blueviolet","mediumpurple","slateblue","mediumslateblue","lavender","mediumvioletred","magenta","fuchsia","deeppink","palevioletred","hotpink","lightpink","pink","mistyrose","lavenderblush","maroon","darkred","firebrick","crimson","red","orangered","tomato","indianred","lightcoral","salmon","darksalmon","lightsalmon","coral","darkorange","orange","sandybrown","darkgoldenrod","goldenrod","gold","yellow","khaki","palegoldenrod","lemonchiffon","cornsilk","lightgoldenrodyellow","beige","lightyellow","ivory","rosybrown","saddlebrown","brown","sienna","chocolate","peru","tan","burlywood","wheat","navajowhite","peachpuff","moccasin","bisque","blanchedalmond","papayawhip","antiquewhite","linen","oldlace","seashell","floralwhite","snow"');
*/

// ------ THESE SETTINGS MUST NOT BE CHANGED WITHOUT EXPERTISE !!! ------
if (C_SKIN)
{
$Room = stripslashes($R);
if (strcmp(stripslashes($R), ROOM8) == 1)
{
	if (strcasecmp(stripslashes($R), ROOM8) == 0)
	{
		if ($R != ucfirst(ROOM8)) $Room = ucfirst($R);
		elseif (ucfirst(stripslashes($R)) == ROOM8) $Room = ROOM8;
		else $Room = strtolower($R);
	}
}
if (strcasecmp(ucfirst(stripslashes($R)), ROOM8) == 0) $Room = ROOM8;
if (strcmp(stripslashes($R), ROOM9) == 1)
{
	if (strcasecmp(stripslashes($R), ROOM9) == 0)
	{
		if ($R != ucfirst(ROOM9)) $Room = ucfirst($R);
		else $Room = strtolower($R);
	}
}
if (strcasecmp(ucfirst(stripslashes($R)), ROOM9) == 0) $Room = ROOM9;
	switch ($Room)
	{
		default:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN1."";
			include("${ChatPath}skins/style".$ROOM_SKIN1.".php");
		}
		break;
		case ROOM2:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN2."";
			include("${ChatPath}skins/style".$ROOM_SKIN2.".php");
		}
		break;
		case ROOM3:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN3."";
			include("${ChatPath}skins/style".$ROOM_SKIN3.".php");
		}
		break;
		case ROOM4:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN4."";
			include("${ChatPath}skins/style".$ROOM_SKIN4.".php");
		}
		break;
		case ROOM5:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN5."";
			include("${ChatPath}skins/style".$ROOM_SKIN5.".php");
		}
		break;
		case ROOM6:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN6."";
			include("${ChatPath}skins/style".$ROOM_SKIN6.".php");
		}
		break;
		case ROOM7:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN7."";
			include("${ChatPath}skins/style".$ROOM_SKIN7.".php");
		}
		break;
		case ROOM8:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN8."";
			include("${ChatPath}skins/style".$ROOM_SKIN8.".php");
		}
		break;
		case ROOM9:
		{
			$skin = "${ChatPath}skins/style".$ROOM_SKIN9."";
			include("${ChatPath}skins/style".$ROOM_SKIN9.".php");
		}
		break;
	}
}
else						//default style if Room Skin mod is disabled
{
	if ($ROOM_SKIN1 == "") $ROOM_SKIN1 = "1";
	$skin = "${ChatPath}skins/style".$ROOM_SKIN1."";
	include("${ChatPath}skins/style".$ROOM_SKIN1.".php");
}

// For Bob Dickow's QuickNotes modification
// Comment the lines below to disable the quick menu for any of those mentioned
$dropdownmsga = explode("|",$QUICKA);	//administrators
$dropdownmsgm = explode("|",$QUICKM);	//moderators
$dropdownmsg = explode("|",$QUICKU);	//users

// Colored names in users list.
define("COLOR_NAMES", $COLOR_NAMES);

// Avatars system Start.
define("C_USE_AVATARS", $USE_AVATARS);			// Is Avatar version? 0 for NO:: 1 for yes.
define("C_NUM_AVATARS", $NUM_AVATARS);			// 54. 1 default avatar plus 53 custom ones. Use '0'
												// to turn off the avatar system. You may have
												// any number of custom avatars available, just put
												// the total number of custom avatars +1 in this define.

define("C_AVA_RELPATH", $AVA_RELPATH);			// Absolute path to default avatar
define("C_DEF_AVATAR", $DEF_AVATAR);
define("C_AVA_WIDTH", $AVA_WIDTH);
define("C_AVA_HEIGHT", $AVA_HEIGHT);
define("C_AVA_PROFBUTTON", $AVA_PROFBUTTON);	// show, (0=no show) click button for profile popup

define("MAX_DICES", $MAX_DICES);				// Maximum number of die per throw; change as you see fit
define("MAX_ROLLS", $MAX_ROLLS);				// Maximum number of rolls per die; change as you see fit

define("C_BOT_CONTROL", $BOT_CONTROL);			// enable/disable bot
define("C_BOT_NAME", $BOT_NAME);				// The Name of your ProjectE Bot (Will change later)
define("C_BOT_FONT_COLOR", $BOT_FONT_COLOR);	// Font color BOT text will be.
define("C_BOT_AVATAR", $BOT_AVATAR);			// avatar of the bot
define("C_BOT_HELLO", $BOT_HELLO);				// The hello text bot will post to the room.
define("C_BOT_BYE", $BOT_BYE);					// The bye text bot will post to the room.
define("C_BOT_PUBLIC", $BOT_PUBLIC);			// Enable/Disable public conversations with bot in the room/rooms.

// Set the maximum size for resizing posted pictures using /img command
define("MAX_PIC_SIZE", $MAX_PIC_SIZE);

// Set the order of sorting the users in the rooms' lists
define("C_USERS_SORT_ORD", $USERS_SORT_ORD);

// Enable generation of log files
define("C_CHAT_LOGS", $CHAT_LOGS);

// Full admin Logs dir name
define("C_LOG_DIR", $LOG_DIR);
define("C_SHOW_LOGS_USR", $SHOW_LOGS_USR);

// Enable Lurking mod by Ciprian (people can monitor public conversations and events in the chat without loging in)
define("C_CHAT_LURKING", $CHAT_LURKING);
define("C_SHOW_LURK_USR", $SHOW_LURK_USR);

// Banishment by IP or username
define("C_BAN_IP", $BAN_IP);

// Registration/Login Characters allowed in usernames
$REG_CHARS = "[^".$REG_CHARS_ALLOWED;
$REG_CHARS .= $REG_CHARS."]{1,}";
define("REG_CHARS_ALLOWED", $REG_CHARS);

// Registration/Login Characters allowed in usernames
define("EXIT_LINK_TYPE", $EXIT_LINK_TYPE);

// Enable/disable Chat extras page in admin link
define("C_CHAT_EXTRAS", $CHAT_EXTRAS);

// Display the worldtimes in status bar
define("C_WORLDTIME", $WORLDTIME);

// Enable/disable the update check feature in cpanel
define("UPD_CHECK", $UPD_CHECK);

// Random Quote mod by Ciprian
define("C_QUOTE", $QUOTE);
define("C_QUOTE_TIME", $QUOTE_TIME);
define("C_QUOTE_COLOR", $QUOTE_COLOR);
define("C_QUOTE_PATH", $QUOTE_PATH);
define("C_QUOTE_NAME", $QUOTE_NAME);
define("C_QUOTE_AVATAR", $QUOTE_AVATAR);
define("C_QUOTE_FONT_COLOR", $QUOTE_FONT_COLOR);

// Ghost control mod by Ciprian
define("C_HIDE_ADMINS", $HIDE_ADMINS);
define("C_HIDE_MODERS", $HIDE_MODERS);

// Last configuration by Ciprian
define("C_LAST_SAVED_ON", $LAST_SAVED_ON);
define("C_LAST_SAVED_BY", $LAST_SAVED_BY);

// PHP-Nuke / phpBB integration by TPS
#define("C_CHAT_SYSTEM", $CHAT_SYSTEM);
#define("C_NUKE_BB_PATH", $NUKE_BB_PATH);

// Added for owner personalizations to all the languages by Ciprian
if(is_dir("./${ChatPath}localization/_owner/") && file_exists("./${ChatPath}localization/_owner/owner.php")) include("./${ChatPath}localization/_owner/owner.php");

// Added for Original Language names by Ciprian
if(file_exists("./${ChatPath}localization/langnames.lib.php")) include("./${ChatPath}localization/langnames.lib.php");

// Public Name of your chat server as you wish to be known on the web - by Ciprian
define("C_CHAT_NAME", $CHAT_NAME);

// Display genders - by Ciprian
define("C_DISP_GENDER", $DISP_GENDER);

// Ghost usernames - by Ciprian
$SPECIALGHOSTS = str_replace(",","','",$SPECIAL_GHOSTS);
$SPECIALGHOSTS = str_replace(","," AND username != ",$SPECIALGHOSTS);
define("C_SPECIAL_GHOSTS", "'".$SPECIALGHOSTS."'");

// Index page body layout - by Ciprian
define("C_FILLED_LOGIN", $FILLED_LOGIN);

// Background image on login page - by Ciprian
define("C_BACKGR_IMG", $BACKGR_IMG);
define("C_BACKGR_IMG_PATH", $BACKGR_IMG_PATH);

// Popup posted links protection - by Alex & Ciprian
define("C_POPUP_LINKS", $POPUP_LINKS);

// Italicize power usernames - by Ciprian
define("C_ITALICIZE_POWERS", $ITALICIZE_POWERS);

// Email greeting closure in Admin4 sheet - by Ciprian
define("C_MAIL_GREETING", $MAIL_GREETING);

// Days to keep unread PMs in the database - by Ciprian
define("C_PM_KEEP_DAYS", $PM_KEEP_DAYS);

// Allow users to delete their own PMs from the database - by Ciprian
define("C_ALLOW_PM_DEL", $ALLOW_PM_DEL);

// It counts logins of registered users to chat (returning users) - by Ciprian
define("C_LOGIN_COUNTER", $LOGIN_COUNTER);

// Gravatars system - by Ciprian (details on www.gravatars.com)
define("ALLOW_GRAVATARS", $ALLOW_GRAVATARS);
define("GRAVATARS_CACHE", $GRAVATARS_CACHE);
define("GRAVATARS_CACHE_EXPIRE", $GRAVATARS_CACHE_EXPIRE);
define("GRAVATARS_RATING", $GRAVATARS_RATING);
define("GRAVATARS_DYNAMIC_DEF", $GRAVATARS_DYNAMIC_DEF);
define("GRAVATARS_DYNAMIC_DEF_FORCE", $GRAVATARS_DYNAMIC_DEF_FORCE);

// Uploader mod - by Ciprian
define("C_ALLOW_UPLOADS", $ALLOW_UPLOADS);

// Statistics mod - by Ciprian
define("C_EN_STATS", $EN_STATS);

// Video posting mod - by Ciprian
define("C_ALLOW_VIDEO", $ALLOW_VIDEO);
define("C_VIDEO_WIDTH", $VIDEO_WIDTH);
define("C_VIDEO_HEIGHT", $VIDEO_HEIGHT);

// Birthday mod - by Ciprian
define("C_REQUIRE_BDAY", $REQUIRE_BDAY);
define("C_BDAY_EMAIL", $SEND_BDAY_EMAIL);
define("C_BDAY_TIME", $SEND_BDAY_TIME);
define("C_BDAY_INTVAL", $SEND_BDAY_INTVAL);
define("C_BDAY_PATH", $SEND_BDAY_PATH);

// MediaPlayer add-on by Ciprian
define("C_EN_WMPLAYER", $EN_WMPLAYER);
define("C_WMP_STREAM", $WMP_STREAM);

// Open/Close Schedule add-on by Ciprian
define("C_OPEN_ALL_BEG", $OPEN_ALL_BEG);
define("C_OPEN_ALL_END", $OPEN_ALL_END);
define("C_OPEN_SUN_BEG", $OPEN_SUN_BEG);
define("C_OPEN_SUN_END", $OPEN_SUN_END);
define("C_OPEN_MON_BEG", $OPEN_MON_BEG);
define("C_OPEN_MON_END", $OPEN_MON_END);
define("C_OPEN_TUE_BEG", $OPEN_TUE_BEG);
define("C_OPEN_TUE_END", $OPEN_TUE_END);
define("C_OPEN_WED_BEG", $OPEN_WED_BEG);
define("C_OPEN_WED_END", $OPEN_WED_END);
define("C_OPEN_THU_BEG", $OPEN_THU_BEG);
define("C_OPEN_THU_END", $OPEN_THU_END);
define("C_OPEN_FRI_BEG", $OPEN_FRI_BEG);
define("C_OPEN_FRI_END", $OPEN_FRI_END);
define("C_OPEN_SAT_BEG", $OPEN_SAT_BEG);
define("C_OPEN_SAT_END", $OPEN_SAT_END);

// Colors and Tags for chat text by Ciprian
define("C_ALLOW_TEXT_COLORS", $ALLOW_TEXT_COLORS);
define("C_TAGS_POWERS", $TAGS_POWERS);

// MathJax LaTeX formulas rendering in chat by Ciprian
define("C_ALLOW_MATH", $ALLOW_MATH);
define("C_SRC_MATH", $SRC_MATH);

// GeoIP Country flags Mod based on MaxMind GeoIPLite2 by Ciprian
define("C_USE_FLAGS", $USE_FLAGS);
define("C_SHOW_FLAGS", $SHOW_FLAGS);
?>