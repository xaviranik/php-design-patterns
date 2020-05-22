<?php

require_once "vendor/autoload.php";

use App\Alarm;
use App\HomeStatus;
use App\Lights;
use App\Lock;


$lock = new Lock();
$lights = new Lights();
$alarm = new Alarm();

$lock->succeedWith($lights);
$lights->succeedWith($alarm);

$lock->check(new HomeStatus);