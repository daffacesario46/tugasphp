<?php
class Mahasiswa {
    //member1 - variabel
    public $nim;
    public $nama;
    public $kuliah;
    public $matakuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    //member2 ( special method) - constructor
    public function __construct($nim, $nama, $kuliah, $matakuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->hitungGradePredikat();
        $this->hitungStatus();
    }

    public function hitungGradePredikat() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
            $this->predikat = 'Sangat memuaskan';
        } else if ($this->nilai >= 70) {
            $this->grade = 'B';
            $this->predikat = 'Memuaskan';
        } else if ($this->nilai >= 60) {
            $this->grade = 'C';
            $this->predikat = 'Cukup';
        } else if ($this->nilai >= 50) {
            $this->grade = 'D';
            $this->predikat = 'Kurang';
        } else if ($this->nilai >= 40) {
            $this->grade = 'E';
            $this->predikat = 'Sangat Kurang';
        }
    }

    public function hitungStatus() {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}
?>
