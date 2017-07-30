<?php

	namespace Helpers;

	use Helpers\interfaces\IDatabaseType;

	abstract class Database implements IDatabaseType
	{
		const HOST     = "50.87.144.13";
		const DB_NAME  = "sablrcrm_test";
		const USERNAME = "sablrcrm_287f_cg";
		const PASSWORD = "W#(!8l=&%@Na";

		protected $connection;

		protected function hasConnection()
		{
			$hasConnection = false;

			if($this->connection != null)
			{
				$hasConnection = true;
			}

			return $hasConnection;
		}
	}