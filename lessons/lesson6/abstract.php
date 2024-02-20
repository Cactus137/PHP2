<?php

// abstract class animals
// {
//     /**
//      * Mot class duoc coi la truu tuong khi: 
//      * - Class do chua phuong thuc truu tuong
//      * - Class truu tuong khong the khoi tao
//      * Nhung van co phuong thuc va thuoc tinh nhu mot class binh thuong
//      */

//      abstract public function run();
// }

// class people extends animals
// {
//     public function run()
//     {
//         echo "Run by 2 legs\n";
//     }
// }

// $peopleOne = new people();
// $peopleOne->run();



/**
 * Tao ra class truu tuong hinh tron, vuong, chu nhat.
 * - Tinh chu vi dien tich cua cac hinh
 */

abstract class Shape
{
    abstract public function perimeter();
    abstract public function superficie();
}

class Square extends Shape
{
    public $a;
    public function perimeter()
    {
        return 4 * $this->a;
    }

    public function superficie()
    {
        return pow($this->a, 2);
    }
}
class Rectangle extends Shape
{
    public $a;
    public $b;
    public function perimeter()
    {
        return ($this->a + $this->b) * 2;
    }

    public function superficie()
    {
        return $this->a * $this->b;
    }
}

class Circle extends Shape
{
    public $r;
    public function perimeter()
    {
        return 2 * pi() * $this->r;
    }
    public function superficie()
    {
        return pi() * pow($this->r, 2);
    }
}

$square = new Square();
$square->a = 5;
echo "Chu vi hinh chu nhat co canh la: " . $square->perimeter() . "<br>";
echo "Dien tich hinh vuong co canh la: " . $square->superficie() . "<br>";
echo "<br>";
$rectangle = new Rectangle();
$rectangle->a = 4;
$rectangle->b = 6;
echo "Chu vi hinh chu nhat la: " . $rectangle->perimeter() . "<br>";
echo "Dien tich hinh chu nhat la: " . $rectangle->superficie() . "<br>";
echo "<br>";
$circle = new Circle();
$circle->r = 5; 
echo "Chu vi hinh tron la: " . round($circle->perimeter(), 2) . "<br>";
echo "Dien tich hinh tron la: " . round($circle->superficie(), 2) . "<br>";

