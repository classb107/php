<?php
include('Class/BanHoc.php');
include('Class/HocSinh.php');
include('Class/PhongHoc.php');
$danhSachBan = [];
for ($i=1; $i<15;$i++) {
    $Ho = ['Nguyen', 'Tran', 'Vo', 'Ton', 'Ly'];
    $Ten = ['Nga', 'Huyen', 'Anh', 'Nam', 'Hung', 'Hiep'];
    $hoTen = $Ho[rand(0,4)] . ' '. $Ten[rand(0,5)];
    $tuoi = rand(15,50);
    $sdt = rand(1000000,9999990);
    $sinhVien = new HocSinh($hoTen,$tuoi,$sdt);
    $danhSachBan[] = new BanHoc($i,1,1,1,$sinhVien);
}

$phonghoc = new PhongHoc('A202',15,$danhSachBan);
$phonghoc->mota();
echo "<pre>";
print_r($phonghoc);
?>