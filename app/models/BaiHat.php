<?php 
class BaiHat {
    private $id;
    private $tenBaiHat;
    private $caSi;
    private $idTheLoai;

    public function __construct($id, $tenBaiHat, $caSi, $idTheLoai) {
        $this->id = $id;
        $this->tenBaiHat = $tenBaiHat;
        $this->caSi = $caSi;
        $this->idTheLoai = $idTheLoai;
    }

    public function getId() {
        return $this->id;
    }

    public function getTenBaiHat() {
        return $this->tenBaiHat;
    }

    public function getCaSi() {
        return $this->caSi;
    }

    public function getIdTheLoai() {
        return $this->idTheLoai;
    }
}

?>