<?php

class SinhVien
{
    // Thuộc tính
    public $maSV;
    public $tenSV;
    public $gioiTinh;
    public $ngaySinh;
    public $queQuan;
    public $soDienThoai;

    // Phương thức 
    // GET
    public function getMaSV()
    {
        return $this->maSV;
    }
    public function getTenSV()
    {
        return $this->tenSV;
    }
    public function getGioiTinh()
    {
        return $this->gioiTinh;
    }
    public function getNgaySinh()
    {
        return $this->ngaySinh;
    }
    public function getQueQuan()
    {
        return $this->queQuan;
    }
    public function getSoDienThoai()
    {
        return $this->soDienThoai;
    }
    // SET
    public function setMaSV($maSV)
    {
        $this->maSV = $maSV;
    }
    public function setTenSV($tenSV)
    {
        $this->tenSV = $tenSV;
    }
    public function setGioiTinh($gioiTinh)
    {
        $this->gioiTinh = $gioiTinh;
    }
    public function setNgaySinh($ngaySinh)
    {
        $this->ngaySinh = $ngaySinh;
    }
    public function setQueQuan($queQuan)
    {
        $this->queQuan = $queQuan;
    }
    public function setSoDienThoai($soDienThoai)
    {
        $this->soDienThoai = $soDienThoai;
    }

    public function yearOld()
    {
        $year = date('Y', strtotime($this->ngaySinh));
        return (date('Y') - $year) . " tuổi";
    }
    public function getAllSV()
    {
        $arrSV = array(
            $this->maSV,
            $this->tenSV,
            $this->gioiTinh,
            $this->ngaySinh,
            $this->queQuan,
            $this->soDienThoai
        );
        return $arrSV;
    }
    // Magic function có tham số
    // Class co bao nhieu thuoc tinh thi phai truyen vao bay nhieu bien
    public function __construct($maSV, $tenSV, $gioiTinh, $ngaySinh, $queQuan, $soDienThoai)
    {
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->queQuan = $queQuan;
        $this->soDienThoai = $soDienThoai;
    }
};

// Khởi tạo đối tượng 
$sv1 = new SinhVien('PH00001', 'Le Van Thanh', 'Nam', '2004-07-13', 'Phu Tho', '0256845233');
// $sv1 = new SinhVien();
// $sv1->setMaSV('PH00001');
$sv1->setTenSV('Thanh');
// $sv1->setGioiTinh('Nam');
// $sv1->setNgaySinh('2004-07-13');
// $sv1->setQueQuan('Phu Tho');
// $sv1->setSoDienThoai('0256845233');


// Gọi phương thức

// echo $sv1->getTenSV();
// echo "<br>";
// echo $sv1->getMaSV();
// echo "<br>";
// echo $sv1->getGioiTinh();
// echo "<br>";
// echo $sv1->getNgaySinh();
// echo "<br>";
// echo $sv1->getQueQuan();
// echo "<br>";
// echo $sv1->getSoDienThoai();
// echo "<br>";
foreach ($sv1->getAllSV() as $key => $value) {
    echo $value . "<br>";
}
echo $sv1->yearOld();
