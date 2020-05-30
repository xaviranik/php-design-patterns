<?php

namespace App;

use App\Contracts\Observer;

class LogHandler implements Observer {

    public function handle()
    {
        var_dump("Logging the event");
    }
}