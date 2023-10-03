<?php
class QuanLyBaiHatService {
    private $baiHatArray = [];

    public function __construct($baiHatData) {
        // Khởi tạo dữ liệu bài hát từ mảng
        $this->baiHatArray = $baiHatData;
    }

    // Lấy danh sách bài hát từ dữ liệu mẫu
    public function layDanhSachBaiHat() {
        return $this->baiHatArray;
    }

    // Thêm bài hát mới vào dữ liệu mẫu
    public function themBaiHat($tenBaiHat, $caSi, $idTheLoai) {
        $baiHatId = count($this->baiHatArray) + 1;
        $newBaiHat = ['id' => $baiHatId, 'tenBaiHat' => $tenBaiHat, 'caSi' => $caSi, 'idTheLoai' => $idTheLoai];
        $this->baiHatArray[] = $newBaiHat;
        return $newBaiHat;
    }

    // Xóa bài hát từ dữ liệu mẫu dựa trên ID
    public function xoaBaiHat($baiHatId) {
        foreach ($this->baiHatArray as $key => $baiHat) {
            if ($baiHat['id'] == $baiHatId) {
                unset($this->baiHatArray[$key]);
                return true;
            }
        }
        return false;
    }

    // Cập nhật thông tin bài hát trong dữ liệu mẫu
    public function capNhatBaiHat($baiHatId, $tenBaiHat, $caSi, $idTheLoai) {
        foreach ($this->baiHatArray as &$baiHat) {
            if ($baiHat['id'] == $baiHatId) {
                $baiHat['tenBaiHat'] = $tenBaiHat;
                $baiHat['caSi'] = $caSi;
                $baiHat['idTheLoai'] = $idTheLoai;
                return true;
            }
        }
        return false;
    }
}
?>
