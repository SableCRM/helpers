<?php

	namespace Helpers;

	use Helpers\interfaces\IDatabaseType;

	class Connection
	{
		public static function connection(IDatabaseType $database)
		{
			return $database->getConnection();
		}
	}