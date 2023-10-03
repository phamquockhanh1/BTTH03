<?php
// File: chinhsua.php

// Hiển thị dữ liệu bài hát
foreach ($baiHatArray as $baiHat) {
    echo "ID: " . $baiHat['id'] . "<br>";
    echo "Tên bài hát: <input type='text' name='ten_bai_hat' value='" . $baiHat['ten_bai_hat'] . "'><br>";
    echo "Nghệ sĩ: <input type='text' name='nghe_si' value='" . $baiHat['nghe_si'] . "'><br>";
    echo "Thể loại: <input type='text' name='the_loai' value='" . $baiHat['the_loai'] . "'><br>";
    echo "<hr>";
}

// Cập nhật thông tin bài hát
if (isset($_POST['cap_nhat'])) {
    foreach ($baiHatArray as $baiHat) {
        $id = $baiHat['id'];
        $tenBaiHat = $_POST['tenBaiHat'];
        $ngheSi = $_POST['caSi'];
        $theLoai = $_POST['idTheLoai'];

        // Thực hiện câu truy vấn cập nhật thông tin bài hát
        // ...
        // Code xử lý truy vấn cập nhật dữ liệu bài hát
        // ...

        echo "Thông tin bài hát đã được cập nhật.";
    }
}
?>