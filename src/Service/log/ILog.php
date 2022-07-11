<?php

namespace App\Service\log;

interface  ILogger
{ 
    public function info($message = '');
    public function debug($message = '');    
    public function error($message = '');  
}