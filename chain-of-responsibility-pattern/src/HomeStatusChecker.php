<?php

namespace App;

abstract class HomeStatusChecker
{

    protected $successor;

    public abstract function check(HomeStatus $home);

    public function succeedWith(HomeStatusChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if($this->successor)
        {
            $this->successor->check($home);
        }
    }
}
