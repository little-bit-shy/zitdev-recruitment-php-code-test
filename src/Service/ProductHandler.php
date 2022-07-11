<?php

namespace App\Service;

class ProductHandler
{
    private $products = [
        [
            'id' => 1,
            'name' => 'Coca-cola',
            'type' => 'Drinks',
            'price' => 10,
            'create_at' => '2021-04-20 10:00:00',
        ],
        [
            'id' => 2,
            'name' => 'Persi',
            'type' => 'Drinks',
            'price' => 5,
            'create_at' => '2021-04-21 09:00:00',
        ],
        [
            'id' => 3,
            'name' => 'Ham Sandwich',
            'type' => 'Sandwich',
            'price' => 45,
            'create_at' => '2021-04-20 19:00:00',
        ],
        [
            'id' => 4,
            'name' => 'Cup cake',
            'type' => 'Dessert',
            'price' => 35,
            'create_at' => '2021-04-18 08:45:00',
        ],
        [
            'id' => 5,
            'name' => 'New York Cheese Cake',
            'type' => 'Dessert',
            'price' => 40,
            'create_at' => '2021-04-19 14:38:00',
        ],
        [
            'id' => 6,
            'name' => 'Lemon Tea',
            'type' => 'Drinks',
            'price' => 8,
            'create_at' => '2021-04-04 19:23:00',
        ],
    ];

    // 計算商品總金額
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $price = $product['price'] ?: 0;
            $totalPrice += $price;
        }
        return  $totalPrice;
    }
    // 把商品以金額排序（由大至小），並篩選商品類種是 “dessert” 的商品
    public function getProcuct()
    {
        $newList = [];
        $price = [];
        foreach ($this->products as $v) {
            if ($v["type"] == "Dessert") {
                $newList[] = $v;
                $price[] = $v["price"];
            } 
        }
        array_multisort($price,SORT_DESC,$newList); 
        return $newList;
    }
    // 转换时间戳
    public function getTimestamp()
    { 
        foreach ($this->products as &$v) { 
            $v["create_at"] =strtotime($v["create_at"]);
        }
        return $this->products;
    } 
}