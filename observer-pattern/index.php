<?php

require_once "vendor/autoload.php";

use App\EmailHandler;
use App\LogHandler;
use App\Login;


$login = new Login;

// Attach the observers
$login->attach(new LogHandler)->attach(new EmailHandler);

// Or
$login->attach([
    new LogHandler,
    new EmailHandler,
]);

$login->loginUser();