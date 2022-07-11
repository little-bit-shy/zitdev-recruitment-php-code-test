<?php

namespace Test\Service;

use PHPUnit\Framework\TestCase;
use App\Service\ProductHandler;

/**
 * Class ProductHandlerTest
 */
class ProductHandlerTest extends TestCase
{  
    public function testGetTotalPrice()
    { 
        $prod = new ProductHandler(); 
        $totalPrice = $prod->getTotalPrice() ;  
        echo "\n 总价格 =: $totalPrice \n"; 
        $this->assertEquals(143, $totalPrice);
    }
    public function testGetProcuct()
    {  
        $prod = new ProductHandler(); 
        $getProcuct = $prod->getProcuct(); 
        echo "\n GetProcuct 数量等于 = ".sizeof($getProcuct). "\n";
        foreach ($getProcuct as $v) {
            echo "\n name = ". $v["name"]  ." , price = " . $v["price"]  . "\n";
        }  
    }

    public function testGetTimestamp()
    {  
        $prod = new ProductHandler(); 
        $getProcuct = $prod->getTimestamp(); 
        echo "\n testGetTimestamp 数量等于 = ".sizeof($getProcuct). "\n";
        foreach ($getProcuct as $v) {
            echo "\n name = ". $v["name"]  ." , create_at = " . $v["create_at"]  . "\n";
        }
      
    }

}