<?php

namespace App;

use Exception;

class Alarm extends HomeStatusChecker {

    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn) {
            throw new Exception("Alarm is off.");
        }

        $this->next($home);
    }
}
