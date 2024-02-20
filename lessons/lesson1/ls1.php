<?php

/**
 * Lesson 1: On tap kien thuc PHP basic
 * Date: 2024-02-01
 * Author: Le Van Thanh
 * Description:
 * 
 * Summary:
 * - Khai bao bien - variable
 * - Toan tu - operator
 */

// Khai bao bien
$fullname;
$fullname2 = "Le Van Thanh";

/**
 * Toan tu
 * So hoc: + - * / %
 * So sanh: > < >= <= == === != !==
 * Logic: && || !
 * Gan gia tri: = += -= *= /= %=
 * Tang giam gia tri: ++ --
 **/

// Mảng là một kiểu dữ liệu đặc biệt cho phép bạn lưu trữ nhiều giá trị trong một biến duy nhất. Mỗi giá trị trong mảng được gọi là một phần tử, và mỗi phần tử có một chỉ số (hoặc khóa) duy nhất để truy cập.
$students = ["Thanh", "Huong", "Huy", "Hieu", "Hoa"];

$students2 = [
    "name" => "Thanh",
    "age" => 20,
    "address" => "Ha Noi",
    "phone" => "0123456789"
];

/**
 * Khai bao mot mang so nguyen co 10 phan tu
 * Hien thi tat ca gia tri co trong phan tu bang 2 cach for hoac foreach
 * Tinh tong cac gia tri co trong mang
 */


$integer = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// Hien thi bang for
echo "Hien thi bang for <br>";
for ($i = 0; $i < count($integer); $i++) {
    echo $integer[$i] . "<br>";
}
// Hien thi bang foreach
echo "Hien thi bang foreach <br>";
foreach ($integer as $key => $value) {
    echo $value . "<br>";
}
// Tinh tong cac gia tri co trong mang
echo "Tong cac phan tu trong mang <br>";
$sumArr = 0;
foreach ($integer as $key => $value) {
    $sumArr += $value;
}
echo $sumArr;


// Mang 2 chieu
$food = [
    "name" => "Banh mi",
    "price" => 20000,
    "ingredients" => "Thit"
]; 

$testKey = [
    "name" => "Banh mi",
    10 => null,
    "price" => 20000,
    'check'
];

var_dump($testKey);

foreach ($food as $key => $value) {
    echo $key . " - " . $value . "...........";
}
