<?php
class DB
{
	var $Host = C_DB_HOST;			// Hostname of our PDO server
	var $Database = C_DB_NAME;		// Logical database name on that server
	var $User = C_DB_USER;			// Database user
	var $Password = C_DB_PASS;		// Database user's password
    var $Port = C_DB_PORT;			// Database host listening port
    var $Type = C_DB_DRIVER;		// Database PDO driver
	var $Link_ID = 0;				// Result of connect()
	var $Query_ID = 0;				// Result of most recent query()
	var $Record	= array();			// Current fetch_array()-result
	var $Row;						// Current row number
	var $Errno = 0;					// Error state of query
	var $Error = "";
	var $Num = 0;

	function halt($msg)
	{
		echo("</TD></TR></TABLE><B>Database error:</B> $msg<br />\n");
		echo("<B>PDO error</B>: $this->Errno ($this->Error)<br />\n");
		die("Session halted.");
	}

	function connect()
	{
		if(!$this->Link_ID)
		{
			$this->Link_ID = new PDO($this->Type.":host=".$this->Host.($this->Port != "" ? ";port=".$this->Port : "").";dbname=".$this->Database."", $this->User, $this->Password);
			$this->Link_ID->query("SET CHARACTER SET utf8");
			$this->Link_ID->query("SET NAMES 'utf8'"); 
			if (!$this->Link_ID)
			{
				$this->halt("Link_ID === false, connect failed");
			}
			$error = $this->Link_ID->errorInfo();
			if (!is_null($error[2])) {
				$this->Errno = $error[1];
				$this->Error = $error[2];
				$this->halt("cannot select database <I>".$this->Database."</I>");
			}
		}
	}

	function query($Query_String)
	{
		if(!$this->Link_ID) $this->connect();
#		if(gettype($this->Link_ID) == "resource") $this->Query_ID = $this->Link_ID->query($this->Link_ID->quote($Query_String));
		$this->Query_ID = $this->Link_ID->query($Query_String);
		$this->Row = 0;
		$error = $this->Link_ID->errorInfo();
		if (!is_null($error[2])) {
				$this->Errno = $error[1];
				$this->Error = $error[2];
		}
		if (!$this->Query_ID)
		{
			$this->halt("Invalid statement: ".$Query_String);
		}
#		$this->Query_ID->closeCursor();
#		$this->Link_ID = null;
	}

	function next_record()
	{
		$this->Record = $this->Query_ID->fetch(PDO::FETCH_ASSOC);
		if (!is_array($this->Record)) $this->Query_ID->closeCursor();
		else
		{
			$this->Row += 1;
			if (!is_null($error[2])) {
				$this->Errno = $error[1];
				$this->Error = $error[2];
			}
		}
		return $this->Record;
	}

	function num_rows()
	{
#			return count($this->Query_ID);
#			return count($this->Query_ID->fetchAll());
			return $this->Query_ID->rowCount();
#			return $this->Num;
#			return count($this->Query_ID->fetchColumn());
	}

	function affected_rows()
	{
#		return mysql_affected_rows($this->Link_ID);
		return $this->Query_ID->fetchColumn();
	}

	function optimize($tbl_name)
	{
		if(!$this->Link_ID) $this->connect();
		$this->Query_ID = $this->Link_ID->query("OPTIMIZE TABLE $tbl_name");
	}

	function truncate($tbl_name)
	{
		if(!$this->Link_ID) $this->connect();
		$this->Query_ID = $this->Link_ID->query("TRUNCATE TABLE $tbl_name");
	}

	function repair($tbl_name)
	{
		if(!$this->Link_ID) $this->connect();
		$this->Query_ID = $this->Link_ID->query("REPAIR TABLE $tbl_name");
	}

	function clean_results()
	{
		$this->Query_ID->closeCursor();
	}

	function close()
	{
		$this->Link_ID = null;
	}
}
?>