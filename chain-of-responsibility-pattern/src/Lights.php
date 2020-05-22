<?php

namespace App;

use Exception;

class Lights extends HomeStatusChecker {

    public function check(HomeStatus $home)
    {
        if (! $home->lightsOff) {
            throw new Exception("Lights are on.");
        }

        $this->next($home);
    }
}
