<?php

// File: BaiHatController.php

class BaiHatController {
    public function chinhsua() {
        // Kết nối đến cơ sở dữ liệu
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "quanlybaihat";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        // Truy vấn dữ liệu bài hát
        $sql = "SELECT * FROM BaiHat";
        $result = $conn->query($sql);

        // Đổ dữ liệu vào một mảng
        $baiHatArray = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $baiHatArray[] = $row;
            }
        }

        // Gọi view để hiển thị dữ liệu bài hát
        require_once 'path_to_view/chinhsua.php';
    }
}
?>
