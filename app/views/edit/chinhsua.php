<?php
// Include file services và controller

define('SERVICE_PATH', 'D:\XAMPP\htdocs\BTTH03\app\services');
define('VIEW_PATH', 'D:\XAMPP\htdocs\BTTH03\app\views');

require_once SERVICE_PATH . '\QuanLyBaiHat.php';
require_once VIEW_PATH . '\edit\chinhsua.php';

// Khởi tạo dịch vụ và controller
$service = new QuanLyBaiHatService($baiHatdata);
$controller = new BaiHatController($service);

// Kiểm tra xem có dữ liệu bài hát cần chỉnh sửa không
if (isset($_GET['id'])) {
    $baiHatId = $_GET['id'];
    $baiHat = $controller->layBaiHatTheoId($baiHatId);

    // Xử lý khi người dùng gửi biểu mẫu chỉnh sửa
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tenBaiHat = $_POST['tenBaiHat'];
        $caSi = $_POST['caSi'];
        $idTheLoai = $_POST['idTheLoai'];

        // Gọi phương thức cập nhật thông tin bài hát trong controller
        $result = $controller->capNhatBaiHat($baiHatId, $tenBaiHat, $caSi, $idTheLoai);

        if ($result) {
            // Chuyển hướng hoặc thông báo thành công
            header('Location: index.php'); // Chuyển hướng về trang danh sách bài hát
            exit();
        } else {
            $error_message = "Có lỗi xảy ra khi cập nhật thông tin bài hát.";
        }
    }
} else {
    // Nếu không có ID bài hát, bạn có thể thực hiện xử lý bổ sung tại đây
    // Ví dụ: Hiển thị thông báo lỗi hoặc chuyển hướng về trang danh sách bài hát
}
?>


<!-- Trang chỉnh sửa thông tin bài hát -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Bài Hát</title>
    <!-- Sử dụng Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Quản Lý Bài Hát</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/app/views/home/home.php">Danh Sách Bài Hát</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/app/views/add/themmoi.php">Chỉnh Sửa Bài Hát</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <!-- Form chỉnh sửa thông tin bài hát -->
        <h2>Chỉnh Sửa Bài Hát</h2>
        <form>
            <div class="form-group">
                <label for="tenBaiHat">Tên Bài Hát</label>
                <input type="text" class="form-control" id="tenBaiHat"name="tenBaiHat" placeholder="Nhập tên bài hát">
                </div>
            <div class="form-group">
                <label for="caSi">Ca Sĩ</label>
                <input type="text" class="form-control" id="caSi" name="caSi" placeholder="Nhập tên ca sĩ">
            </div>
            <div class="form-group">
                <label for="idTheLoai">Thể Loại</label>
                <!-- Đây có thể là một select box để chọn thể loại từ danh sách -->
                <!-- Ví dụ: -->
                <select class="form-control" id="idTheLoai" name="idTheLoai">
                    <option value="1">Nhạc Pop</option>
                    <option value="2">Nhạc Rock</option>
                    <!-- Thêm các option khác tương ứng với danh sách thể loại -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
</body>
</html>

