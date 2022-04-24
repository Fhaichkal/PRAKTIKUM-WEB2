<?php
class Mahasiswa_model extends CI_Model{
    // buat property atau variable
    public $id, $nama, $nim, $gender, $tmp_lahir, $ipk;

    // buat method atau function
    public function predikat(){
        // contoh penggunaan ternary operator
        $predikat = ($this->ipk >= 3.75)? "Cumlaude" : "Baik";
        return $predikat;
    }
}
?>