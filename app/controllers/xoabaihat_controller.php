<?php
require_once './app/services/QuanLyBaiHat.php';

if (isset($_GET['id'])) {
    $idBaiHat = $_GET['id'];
    $service = new QuanLyBaiHatService();
    $service->xoaBaiHat($idBaiHat);
    
    header("Location: baihat_controller.php");
    exit();
} else {
    echo "Lỗi: Không tìm thấy bài hát để xóa.";
}
?>