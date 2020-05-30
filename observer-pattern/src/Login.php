<?php

namespace App;

use App\Contracts\Observer;
use App\Contracts\Subject;
use Exception;

class Login implements Subject {
    
    protected $observers = [];

    public function attach($observable)
    {
        if(is_array($observable))
        {
            return $this->attachObservable($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach($this->observers as $observer)
        {
            $observer->handle();
        }
    }

    public function loginUser()
    {
        // Perform the login
        //
        $this->notify();
    }

    private function attachObservable($observable)
    {
        foreach ($observable as $observer) 
        {
            if (!$observer instanceof Observer) 
            {
                throw new Exception;
            }
            $this->attach($observer);
        }
    }
}