<?php

	namespace Helpers\classes;

	class DBResult
	{
		private $results;

		public function runQuery(\PDOStatement $sql, array $params = [])
		{
			$sql->execute($params);
			$this->hasResults($sql);
		}

		private function hasResults(\PDOStatement $sql)
		{
			$this->results = false;

			if($sql->rowCount() > 0)
			{
				try
				{
					$this->results = $sql->fetchAll(\PDO::FETCH_OBJ);
				}
				catch(\Exception $e)
				{
					$this->results = $sql->rowCount();
				}
			}
		}

		public function getResult()
		{
			return $this->results;
		}
	}