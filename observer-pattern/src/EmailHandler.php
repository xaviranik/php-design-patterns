<?php

namespace App;

use App\Contracts\Observer;

class EmailHandler implements Observer {
    
    public function handle()
    {
        var_dump("Email the logged in user");
    }
}