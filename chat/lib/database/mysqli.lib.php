<?php
class DB
{
    var $Host = C_DB_HOST;		    // Hostname of our mysql server
    var $Database = C_DB_NAME;		// Logical database name on that server
    var $User = C_DB_USER;		    // Database user
    var $Password = C_DB_PASS;		// Database user's password
    var $Port = C_DB_PORT;			// Database host listening port
    var $Link_ID = 0;				// Result of mysqli_connect()
    var $Query_ID = 0;				// Result of most recent mysqli_query()
    var $Record    = array();		    // Current mysqli_fetch_array()-result
    var $Row;						// Current row number
    var $Errno = 0;				    // Error state of query
    var $Error = "";

    function halt($msg)
    {
		echo("</TD></TR></TABLE><B>Database error:</B> $msg<br />\n");
		echo("<B>MySQLi error</B>: $this->Errno ($this->Error)<br />\n");
		die("Session halted.");
    }

    function connect()
    {
		if(!$this->Link_ID)
		{
		    $this->Link_ID = ($GLOBALS["___mysqli_ston"] = mysqli_connect($this->Host.($this->Port != "" && $this->Port != "3306" ? ":".$this->Port : ""),  $this->User,  $this->Password));
		    mysqli_query($GLOBALS["___mysqli_ston"], "SET CHARACTER SET utf8");
		    mysqli_query($GLOBALS["___mysqli_ston"], "SET NAMES 'utf8'");
		    if (!$this->Link_ID)
		    {
				$this->halt("Link_ID === false, connect failed");
		    }
		    else
			{
				$SelectResult = ((bool)mysqli_query( $this->Link_ID, "USE " . $this->Database));
				if(!$SelectResult)
				{
					$this->Errno = ((is_object($this->Link_ID)) ? mysqli_errno($this->Link_ID) : (($___mysqli_res = mysqli_connect_errno()) ? $___mysqli_res : false));
					$this->Error = ((is_object($this->Link_ID)) ? mysqli_error($this->Link_ID) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
					$this->halt("cannot select database <I>".$this->Database."</I>");
				}
			}
		}
    }

    function query($Query_String)
    {
		if(!$this->Link_ID) $this->connect();
#		$Query = mysqli_prepare($this->Link_ID, $Query_String);
		$this->Query_ID = mysqli_query($this->Link_ID, $Query_String);
		$this->Row = 0;
		$this->Errno = ((is_object($this->Link_ID)) ? mysqli_errno($this->Link_ID) : (($___mysqli_res = mysqli_connect_errno()) ? $___mysqli_res : false));
		$this->Error = ((is_object($this->Link_ID)) ? mysqli_error($this->Link_ID) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
		if (!$this->Query_ID)
		{
		    $this->halt("Invalid SQL: ".$Query_String);
		}
		return $this->Query_ID;
		mysqli_free_result($this->Query_ID);
    }

    function next_record()
    {
		$this->Record = mysqli_fetch_array($this->Query_ID);
		$this->Row += 1;
		$this->Errno = ((is_object($this->Link_ID)) ? mysqli_errno($this->Link_ID) : (($___mysqli_res = mysqli_connect_errno()) ? $___mysqli_res : false));
		$this->Error = ((is_object($this->Link_ID)) ? mysqli_error($this->Link_ID) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false));
		return $this->Record;
		if (is_array($this->Record))
		{
			mysqli_free_result($this->Query_ID);
		}
    }

    function num_rows()
    {
		return mysqli_num_rows($this->Query_ID);
    }

    function affected_rows()
    {
		return mysqli_affected_rows($this->Link_ID);
    }

    function optimize($tbl_name)
    {
		if(!$this->Link_ID) $this->connect();
		$this->Query_ID = mysqli_query($this->Link_ID, "OPTIMIZE TABLE $tbl_name");
    }

    function truncate($tbl_name)
    {
		if(!$this->Link_ID) $this->connect();
		$this->Query_ID = mysqli_query($this->Link_ID, "TRUNCATE TABLE $tbl_name");
    }

    function repair($tbl_name)
    {
		if(!$this->Link_ID) $this->connect();
		$this->Query_ID = mysqli_query($this->Link_ID, "REPAIR TABLE $tbl_name");
    }

    function clean_results()
    {
		if(is_resource($this->Query_ID))
		{
			mysqli_free_result($this->Query_ID);
		}
    }
		
    function close()
    {
		if(gettype($this->Link_ID) == "resource") ((is_null($___mysqli_res = mysqli_close($this->Link_ID))) ? false : $___mysqli_res);
    }
}
?>