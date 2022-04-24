<?php
class Dosen extends CI_Controller{
    // membuat method dosen
    public function index(){
        $this->load->model('dosen_model', 'dsn1');

        // buat objek model 1 dan nilainya
        $this->dsn1->id=1;
        $this->dsn1->nidn='011';
        $this->dsn1->pendidikan='S1';

        $this->load->model('dosen_model', 'dsn2');

        // buat object 2 dan nilainya
        $this->dsn2->id=2;
        $this->dsn2->nidn='012';
        $this->dsn2->pendidikan='S2';

        $this->load->model('dosen_model', 'dsn3');
        // buat object 3 dan nilainya
        $this->dsn3->id=3;
        $this->dsn3->nidn='013';
        $this->dsn3->pendidikan='S3';

        // simpan object yg dibuat ke array
        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        // siapkan data untuk dikirim kedalam view, diambil dari object yg disimpan dalam array
        $data['list_dsn'] = $list_dsn;
        // render data dan kirim data ke view
        $this->load->view('dosen/index', $data);
    }
}
?>