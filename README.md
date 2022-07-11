# recruitment-php-code-test

## 步骤

```shell
composer install 

运行测试所有代码 

./vendor/bin/phpunit ./tests



============================================================
Common.php 的优化

geoHelperAddress：
strpos($coordinate,',')和explode(',', $coordinate)，简化为保留一个即可，这种写法浪费算力了
return返回值尽量保持同一类型

checkStatusCallback：
调整为完全基于数据驱动，兼容性较高
$code_arr = [
    '900' => [
        'return' => 1,
    ],
    '901' => [
        'code' => 1,
    ],
    '902' => [
        'code' => 2,
    ],
    '903' => [
        'code' => 3,
    ],
    '909' => [
        'return' => 0,
    ],
    '915' => [
        'return' => 0,
    ],
    '916' => [
        'return' => 0,
    ]
];

if (isset($code_arr[$status])) {
    if (isset($code_arr[$status]['return'])) {
        if ($code_arr[$status]['return'] == 0) {
            infoLog('checkStatusCallback backend code is ' + $status);
        }
        return $code_arr[$status]['return'];
    } else {
        return $order_id . '-' . $code_arr[$status]['code'];
    }
}