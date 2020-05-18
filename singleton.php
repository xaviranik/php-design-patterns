<?php

class Database
{
	public static $instance;

	public static function getInstance()
	{
		if(Database::$instance == null)
		{
			return Database::$instance = new Database();
		}
		return $instance;
	}

	private function __construct()
	{
		echo "DB Init";
	}

	public function query()
	{
		echo "SELECT * FROM table_name";
	}
}

$db = Database::getInstance();
$db->query();