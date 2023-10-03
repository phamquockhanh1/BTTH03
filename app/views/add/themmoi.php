<!-- Trang thêm mới bài hát -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Mới Bài Hát</title>
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
                    <a class="nav-link" href="/app/views/add/themmoi.php">Thêm Mới Bài Hát</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <!-- Form thêm mới bài hát -->
        <h2>Thêm Mới Bài Hát</h2>
        <form>
            <div class="form-group">
                <label for="tenBaiHat">Tên Bài Hát</label>
                <input type="text" class="form-control" id="tenBaiHat" name="tenBaiHat" placeholder="Nhập tên bài hát">
            </div>
            <div class="form-group">
                <label for="caSi">Ca Sĩ</label>
                <input type="text" class="form-control" id="caSi" name="caSi" placeholder="Nhập tên ca sĩ">
            </div>
            <div class="form-group">
                <label for="theLoai">Thể Loại</label>
                <select class="form-control" id="theLoai" name="theLoai">
                    <!-- Dữ liệu thể loại sẽ được lặp và hiển thị ở đây -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Mới</button>
        </form>
    </div>
</body>
</html>
