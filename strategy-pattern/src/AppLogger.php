<?php

namespace App;

use App\Contracts\Logger;
use App\LogToFile;

class AppLogger
{
	
	public function log($data, Logger $logger = null)
	{
		$logger = $logger ?: new LogToFile;
		$logger->log($data);
	}
}