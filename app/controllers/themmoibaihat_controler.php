<?php
require_once './app/services/QuanLyBaiHat.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenBaiHat = $_POST['tenBaiHat'];
    $caSi = $_POST['caSi'];
    $idTheLoai = $_POST['idTheLoai'];

    $service = new QuanLyBaiHatService();
    $service->themBaiHat($tenBaiHat, $caSi, $idTheLoai);
    
    header("Location: baihat_controller.php");
    exit();
}

include './app/views/add/themmoi.php';
?>