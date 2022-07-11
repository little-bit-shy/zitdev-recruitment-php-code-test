<?php
/*
 * @Date         : 2022-03-02 14:49:25
 * @LastEditors  : Jack Zhou <jack@ks-it.co>
 * @LastEditTime : 2022-03-02 17:22:16
 * @Description  : 
 * @FilePath     : /recruitment-php-code-test/tests/App/DemoTest.php
 */

namespace Test\App;

use mysql_xdevapi\Exception;
use PHPUnit\Framework\TestCase;
use App\App\Demo;
use App\Service\AppLogger;
use App\Util\HttpRequest;
use App\Service\Common;

class DemoTest extends TestCase
{


    /**
     * @group failing
     * Tests the api edit form
     */
    // public function test_foo() {
    //     echo "---222222-test_foo--\r\n";
    // }

    public function test_get_user_info()
    {
        $log = new  AppLogger();
        $req = new  HttpRequest();
        $myDemo = new Demo($log, $req);
        try {
            $data = $myDemo->get_user_info();
        }catch (\Exception $exception){
            $data = null;
        }
        $this->assertNotEquals(null, $data, '接口请求失败');
        $this->assertArrayHasKey('id', $data, '数据返回不合法');
        $this->assertArrayHasKey('username', $data, '数据返回不合法');
        $username = $data['username'];
        echo "\n get_user_info====$username\n";
    }


    public function test_2()
    {
        $res = Common::checkStatusCallback("FD58585", 903);
        echo "\n checkStatusCallback====$res\n";
        $this->assertTrue(true);
    }
}