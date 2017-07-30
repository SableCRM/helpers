<?php

	namespace Helpers\classes;

	use CristianPontes\ZohoCRMClient\Response\Record;
	use CristianPontes\ZohoCRMClient\ZohoCRMClient;

	class Deal
	{
		private $deal;
		private $zohoApi;

		public function __construct($companyId)
		{
			$auth = new CRMAuth();
			$auth->setCompanyId($companyId);

			$this->zohoApi = new ZohoCRMClient("Potentials", $auth->getAuth());
		}

		private function setDeal($dealId)
		{
			$this->deal = $this->zohoApi->getRecordById($dealId)
				->withEmptyFields()
				->request();
		}

		public function getDeal($dealId):Record
		{
			$this->setDeal($dealId);

			return $this->deal[1];
		}
	}