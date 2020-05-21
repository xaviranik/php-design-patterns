<?php

namespace App;

use App\Contracts\Logger;

class LogToWebService implements Logger {

	public function log($data)
	{
		var_dump("Log the data to a web service");
	}
}
