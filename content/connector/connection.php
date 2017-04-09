<?php
	class Connector{
		public static function DBConnection(){
			$usuario = "root";
			$pass = "";
			$host = "localhost";
			$dbname = "smarthousepanel";
			$mdb = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $usuario, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			return $mdb;
		}
	}
?>