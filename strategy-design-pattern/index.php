<?php

require_once "vendor/autoload.php";


(new App\AppLogger)->log("Some data here", new App\LogToWebService);
(new App\AppLogger)->log("Some data here");