<?php
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
class ConNguoi
{
    public $name;
    public $address;
    public $yearold;
    public $email;
    public $phone;
    // tạo phương thức set cho các thuộc tính trên
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function setYearold($yearold)
    {
        $this->yearold = $yearold;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    // tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
    public function tinhTuoi()
    {
        return date('Y') - $this->yearold;
    }
    // tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
    public function print()
    {
        echo "Ho ten: " . $this->name . "\n";
        echo "Dia chi: " . $this->address . "\n";
        echo "Tuoi: " . $this->tinhTuoi() . "\n";
        echo "Email: " . $this->email . "\n";
        echo "SDT: " . $this->phone . "\n";
    }
};

//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
class HocSinh extends ConNguoi
{
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    // tạo phương thức set cho các thuộc tính trên
    public function setDiemToan($diemToan)
    {
        $this->diemToan = $diemToan;
    }
    public function setDiemLy($diemLy)
    {
        $this->diemLy = $diemLy;
    }
    public function setDiemHoa($diemHoa)
    {
        $this->diemHoa = $diemHoa;
    }
    //tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
    public function avg()
    {
        return round(($this->diemToan + $this->diemLy + $this->diemHoa) / 3, 2);
    }
    //tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
    // hoten,diachi,tuoi,email,sdt,điểm TB
    public function print()
    {
        parent::print();
        echo "Diem toan: " . $this->diemToan . "\n";
        echo "Diem ly: " . $this->diemLy . "\n";
        echo "Diem hoa: " . $this->diemHoa . "\n";
        echo "Diem trung binh: " . $this->avg();
    }
}

//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
class GiangVien extends ConNguoi
{
    public $luongCB;
    public $soGioDay;
    // tạo phương thức set cho các thuộc tính trên
    public function setLuongCB($luongCB)
    {
        $this->luongCB = $luongCB;
    }
    public function setSoGioDay($soGioDay)
    {
        $this->soGioDay = $soGioDay;
    }
    // tạo phương thức tính tổng lương = luongCB *soGioDay
    public function tongLuong()
    {
        return $this->luongCB * $this->soGioDay;
    }
    //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
    // hoten,diachi,tuoi,email,sdt,tổng lương
    public function print()
    {
        parent::print();
        echo "Luong co ban: " . $this->luongCB . "\n";
        echo "So gio day: " . $this->soGioDay . "\n";
        echo "Tong luong: " . $this->tongLuong();
    }
}

$conNguoi1 = new ConNguoi();
$conNguoi1->setName('ABC');
$conNguoi1->setAddress('Ha Noi');
$conNguoi1->setYearold(2004);
$conNguoi1->setEmail('thanhlvph39393@fpt.edu.vn');
$conNguoi1->setPhone('0987654321');
$conNguoi1->print();
echo "\n____________________________\n";
$hocSinh1 = new HocSinh();
$hocSinh1->setName('Thay Trung');
$hocSinh1->setAddress('Ha Noi');
$hocSinh1->setYearold(1999);
$hocSinh1->setEmail('ABC.gomeo.com');
$hocSinh1->setPhone('0987654321');
$hocSinh1->setDiemToan(9);
$hocSinh1->setDiemLy(9);
$hocSinh1->setDiemHoa(8);
$hocSinh1->print();
echo "\n____________________________\n";
$giangVien1 = new GiangVien();
$giangVien1->setName('Thay Trung');
$giangVien1->setAddress('Ha Noi');
$giangVien1->setYearold(1999);
$giangVien1->setEmail('ABC.gomeo.com');
$giangVien1->setPhone('0987654321');
$giangVien1->setLuongCB(100000);
$giangVien1->setSoGioDay(200);
$giangVien1->print();

