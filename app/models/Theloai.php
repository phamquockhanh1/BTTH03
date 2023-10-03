<?php 
// theloai models
class TheLoai {
    private $id;
    private $tenTheLoai;

    public function __construct($id, $tenTheLoai) {
        $this->id = $id;
        $this->tenTheLoai = $tenTheLoai;
    }

    public function getId() {
        return $this->id;
    }

    public function getTenTheLoai() {
        return $this->tenTheLoai;
    }
}


?>