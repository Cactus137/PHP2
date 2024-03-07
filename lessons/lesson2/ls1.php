<?php
//Hàm

//Hàm dùng để chứa một đoạn code dùng để thực hiện một chức năng hoặc một công việc cụ thể nhằm giúp có thể tái tạo code và giúp code ngắn gọn

// Ham co chua tham so
function halo($name) {
    return "Halo " . $name . "<br>My name is Cactus"; 
} 

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// function checkInt($number) {
//     if ($number%2==0) {
//         echo "day la so chan";
//     }else {
//         echo "day la so le";
//     }
// }

// foreach ($arr as $key => $value) {
//     echo $value . "-" . checkInt($value);
// }


// Xay dung hang co tham so va khong tra ve gia tri. Truyen vao ham nhung tham so sau: ten, nam sinh, que quan, so dien thoai, so chung minh thu. Hien thi nhung thong tin sau: ten, tuoi, que quan, so dien thoai, so chung minh thu

function printInf($name, $year, $address, $phone, $id) {
    echo "Ten: " . $name . "<br>";
    $date = date("Y");
    $year = $date - $year;
    echo "Tuoi" . $year . "<br>";
    echo "Que quan: " . $address . "<br>";
    echo "So dien thoai: " . $phone . "<br>";
    echo "So chung minh thu: " . $id . "<br>";
}

printInf("Cactus", 1999, "Ha Noi", "0123456789", "123456789");