<?php

	namespace Helpers\interfaces;

	interface IDatabaseResult
	{
		function getValue(array $result);

		function getValues(array $result);
	}