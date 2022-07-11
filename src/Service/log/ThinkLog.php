<?php

namespace App\Service\log;
use App\Service\log\ILogger;
use think\facade\Log; 
 
class ThinkLog implements  ILogger 
{
  
    private $logger2;

    public function __construct()
    {        
        Log::init([
            'default'	=>	'file',
            'channels'	=>	[
                'file'	=>	[
                    'type'	=>	'file',
                    'path'	=>	'./logs/',
                ],
            ],
        ]);
        
    }

    public function info($message = '')
    {
        $message = strtoupper($message);
        echo "\n---thinklog info ----转大写 ".$message;   
        Log::info($message);
    }

    public function debug($message = '')
    {
        Log::debug($message);
    }

    public function error($message = '')
    {
         Log::error($message);
    }
}