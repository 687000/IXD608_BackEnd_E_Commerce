<?
	function MYSQLAuth(){
		return [
			"localhost",//localhost
			"AdminUser",//database user name
			"testpassword",//database user password
			"ixd608_store"//database name
		];
	}
	//php data object
	function PDOAuth(){
		return [
			"mysql:host=localhost;dbname=ixd608_store",//localhost and database name
			"AdminUser",//database user name
			"testpassword",//database user password
			[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
		];
	}	
?>