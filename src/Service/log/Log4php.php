<?php

namespace App\Service\log;
use App\Service\log\ILogger;
class Log4php implements  ILogger
{ 
    private $logger;

    public function __construct( )
    {
         $this->logger = \Logger::getLogger("Log"); 
    }

    public function info($message = '')
    {
        echo "\n---log4php info ------------";
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        $this->logger->error($message);
    }
}