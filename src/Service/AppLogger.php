<?php

namespace App\Service;

use App\Service\log\Log4php;
use App\Service\log\ThinkLog;


class AppLogger
{
    const TYPE_LOG4PHP = 'log4php';
    const TYPE_THINKLOG = 'thinkLog';

    private static $log4php = null;
    private static $thinkLog = null;


    private $logger;


    public function __construct($type = self::TYPE_LOG4PHP)
    {
        switch ($type) {
            case self::TYPE_LOG4PHP:
                $this->create2log4php();
                break;
            case self::TYPE_THINKLOG:
                $this->create2thinkLog();
                break;
            default:
                $this->create2log4php();
        }
    }

    public function create2log4php(){
        if (empty(self::$log4php)) {
            self::$log4php = new Log4php();
        }
        $this->logger = self::$log4php;
    }

    public function create2thinkLog(){
        if (empty(self::$thinkLog)) {
            self::$thinkLog = new ThinkLog();
        }
        $this->logger = self::$thinkLog;
    }

    public function info($message = '')
    {
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