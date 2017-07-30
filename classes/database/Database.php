<?php

	namespace Helpers\classes\database;

	use Helpers\classes\DBResult;
	use Helpers\pdo;

	class Database
	{
		protected $dbConn;
		protected $dbResult;
		protected $companyId;

		public function __construct()
		{
			$this->dbConn   = (new pdo())->getConnection();
			$this->dbResult = new DBResult();
		}

		public function setCompanyId($companyId)
		{
			$this->companyId = $companyId;

			return $this;
		}
	}