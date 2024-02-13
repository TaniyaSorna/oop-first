<?php

// 01 object creat function
// class Car
// {
//     public $name = 'Hello world';
//     function name()
//     {
//         return 'Tata' . PHP_EOL;
//     }
// }
// $carDatails = new Car();
// // echo $carDatails->name();
// echo $carDatails->name;

//02 constructor function
// class Car
// {
//     public function __construct()
//     {
//         echo 'Hello constructor';
//     }
// }
// new Car();

// 03 constructor (+)
// class Car
// {
//     public function __construct($a, $b)
//     {
//         echo $a + $b;
//     }
// }
// new Car(10, 7);

//04 constructor (name)
// class Car
// {
//     public function __construct($name)
//     {
//         echo $name;
//     }
// }
// new Car('Shorna');

//05 object (information)
// class Info
// {
//     public $name;
//     public $age;
// }
// $obj = new Info();
// echo $obj->name = 'Tania' . PHP_EOL;
// echo $obj->age = 20;

//06 (extends) 
// class Father
// {
//     public function info()
//     {
//         echo 'i am from father';
//     }
// }

// class Son extends Father
// {
//     public function info()
//     {
//         echo 'i am from Son';
//     }
// }
// $son = new Son();
// $son->info();

// (extends for final)
// final class Father
// {
//     public function info()
//     {
//         echo 'i am from father';
//     }
// }
// $obj = new Father();
// $obj->info();

// class Son extends Father
// {
//     public function info()
//     {
//         echo 'i am from Son';
//     }
// }
// $son = new Son();
// $son->info();

// (extends for abstract)
// abstract class Father
// {
//     public function info()
//     {
//         echo 'i am from father';
//     }
// }

// class Son extends Father
// {
//     public function info()
//     {
//         echo 'i am from Son';
//     }
// }
// $son = new Son();
// $son->info();

//(static for single function)
class Info
{
    public static function show()
    {
        echo 'hello world';
    }
}
// $obj = new Info();
// $obj->show();  //object
// Info::show();  //static

class Father
{
    public function info()
    {
        echo 'i am from father' . PHP_EOL;
    }
}
class Son extends Father
{
    public function info()
    {
        parent::info();
        echo 'i am from Son';
    }
}

// $son = new Son();
// $son->info();

//(static for duble function)
class information
{
    public static $name = 'Tania Shorna';
    public static function show()
    {
        echo self::$name;
    }
}
// $obj = new information();
// $obj->show();

//(for this)
class informations
{
    public $name = 'Tania Shorna';
    public function show()
    {
        // echo $this->name;
        echo $this->name = "Shorna";  //override
    }
}
$obj = new informations();
$obj->show();
