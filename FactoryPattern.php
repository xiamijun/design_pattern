<?php
//简单工厂模式

//抽象类
abstract class Product{
    abstract function getName();
}

class ProductA extends Product{
    public function getName()
    {
        echo 'I am ProductA';
    }
}

class ProductB extends Product{
    public function getName()
    {
        echo 'I am ProductB';
    }
}

class ProductFactory{
    static function create($name){
        switch($name){
            case 'A':
                return new ProductA();
            break;
            case 'B':
                return new ProductB();
            break;
        }
    }
}

$product=ProductFactory::create('A');
$product->getName();