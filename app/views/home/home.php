<?php
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

// Đóng kết nối
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Bài Hát</title>
    <!-- Sử dụng Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Quản Lý Bài Hát</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/app/views/edit/chinhsua.php">Danh Sách Bài Hát</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/app/views/add/themmoi.php">Thêm Mới Bài Hát</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4 bg-success">
        <!-- Hiển thị danh sách các bài hát từ CSDL -->
        <h2>Danh Sách Các Bài Hát</h2>
        <!-- Bảng hiển thị danh sách bài hát -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Bài Hát</th>
                    <th scope="col">Ca Sĩ</th>
                    <th scope="col">Thể Loại</th>
                    <th scope="col">Tùy Chọn</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dữ liệu danh sách bài hát được lặp và hiển thị ở đây -->
                <!-- Mỗi dòng sẽ hiển thị thông tin bài hát và liên kết để chỉnh sửa hoặc xóa -->
                <?php foreach ($baiHatArray as $baiHat) : ?>
            <tr>
                <th scope="row"><?php echo $baiHat['id']; ?></th>
                <td><?php echo $baiHat['tenBaiHat']; ?></td>
                <td><?php echo $baiHat['caSi']; ?></td>
                <td><?php echo $baiHat['idTheLoai']; ?></td>
                <td>
                    <!-- Liên kết để chỉnh sửa hoặc xóa -->
                    <a href="/app/views/edit/chinhsua.php?id=<?php echo $baiHat['id']; ?>">Chỉnh Sửa</a>
                    |
                    <a href="'/app/controllers/xoabaihat_controller.php' id=<?php echo $baiHat['id']; ?>">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
            
        </table>
    </div>
</body>
</html>
