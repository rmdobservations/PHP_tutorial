<?php
// 
//mysql -u rose -p
//Enter password: 


//mysql> CREATE USER 'rose3'@'localhost' IDENTIFIED BY 'Password1';
// where password is MEDIUM 
// phpmyadmin gave me a hassle with this.
// no privaleges. Still in mysql as rose, give rose3 privaleges
 // GRANT CREATE, ALTER, DROP, INSERT, UPDATE, DELETE, SELECT, REFERENCES, RELOAD on *.* TO 'rose'@'localhost' WITH GRANT OPTION;
// If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class DB {

	protected static $con;
// magic method, use PDO instead of mysqli 
	private function __construct() {

		try {

			self::$con = new PDO('mysql:host=localhost;port=3306;dbname=php_tutorial', 'rose','twiawomteG2#');
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

		} catch (PDOException $e) {
			echo "Could not connect to database. Rose"; exit;
		}

	}


	public static function getConnection() {

		if (!self::$con) {
			new DB();
		}

		return self::$con;
	}
}

?>
