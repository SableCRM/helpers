<?php

	namespace Helpers;

	class pdo extends Database
	{
		const DSN = "mysql:dbname=".self::DB_NAME."; host=".self::HOST;

		public function __construct()
		{
			if(!$this->hasConnection())
			{
				$this->connection = new \PDO(self::DSN, self::USERNAME, self::PASSWORD);

				$this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			}
		}

		public function getConnection()
		{
			return $this->connection;
		}
	}