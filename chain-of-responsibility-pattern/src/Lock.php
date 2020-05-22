<?php

namespace App;

use Exception;

class Lock extends HomeStatusChecker {

    public function check(HomeStatus $home)
    {
        if (!$home->locked) 
        {
            throw new Exception("Doors are open.");
        }

        $this->next($home);
    }
}
