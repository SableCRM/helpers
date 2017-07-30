<?php

	namespace Helpers\classes;

	use Helpers\classes\database\Database;

	class CRMAuth extends Database
	{
		private $auth;

		private function setAuth()
		{
			$sql = $this->dbConn->prepare("SELECT ZOHO_AUTH_ID FROM sablrcrm_test.ZOHO_USER WHERE ZOHO_USER.COMPANY_ID = :COMPANY_ID");

			$this->dbResult->runQuery($sql, [":COMPANY_ID" => $this->companyId]);

			$this->auth = $this->dbResult->getResult()[0]->ZOHO_AUTH_ID;
		}

		public function getAuth()
		{
			$this->setAuth();

			return $this->auth;
		}
	}