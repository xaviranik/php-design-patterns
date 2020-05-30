<?php

namespace App\Contracts;

interface Subject {
    
    public function attach($observable);
    public function detach($index);
    public function notify();
    
}