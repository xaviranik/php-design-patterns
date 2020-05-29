<?php

namespace App\Facades;

use App\Database;
use App\Logger;
use App\Template;

class LogTemplateFacade
{

    public static function logTemplate($params = null)
    {
        $data = Database::getData();
        $template = Template::createTemplate($data);
        $logger = Logger::log($template);
    }
}
