<?php
/*
 * @Date         : 2022-03-02 14:49:25
 * @LastEditors  : Jack Zhou <jack@ks-it.co>
 * @LastEditTime : 2022-03-02 17:22:16
 * @Description  : 
 * @FilePath     : /recruitment-php-code-test/tests/App/DemoTest.php
 */

namespace Test\App;

use PHPUnit\Framework\TestCase;
use App\App\Demo;
use App\Service\AppLogger;
Use App\Util\HttpRequest;
use App\Service\Common;
 
class DemoTest extends TestCase {

    
    /**
     * @group failing
     * Tests the api edit form
     */
    // public function test_foo() {
    //     echo "---222222-test_foo--\r\n";
    // }

    public function test_get_user_info() {
        $log = new  AppLogger(); 
        $req = new  HttpRequest(); 
        $myDemo = new Demo($log,$req);
        $data = $myDemo->get_user_info();
        echo "\n ntest_get_user_info title= ".$data['username']."\n";
    }  
     

    public function test_2() {
        $res =  Common::checkStatusCallback("FD58585",903); 
        echo "\n checkStatusCallback====$res\n";
    }  
}