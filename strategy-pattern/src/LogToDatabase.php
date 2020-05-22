<?php

namespace App;

use App\Contracts\Logger;

class LogToDatabase implements Logger {

	public function log($data)
	{
		var_dump("Log the data to the database");
	}
}
