<?php
//单例模式

class Singleton{
    private static $instance=null;
    private function __construct()
    {
    }
    public static function getInstance(){
        if(self::$instance==null){
            return new Singleton();
        }
        return self::getInstance();
    }
    public function printString(){
        echo '单例模式';
    }
}

$class=Singleton::getInstance();
$class->printString();
