<?php

	namespace Helpers;

	class mysqli extends Database
	{
		public function __construct()
		{
			if(!$this->hasConnection())
			{
				$this->connection = new \mysqli(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
			}
		}

		public function getConnection()
		{
			return $this->connection;
		}
	}