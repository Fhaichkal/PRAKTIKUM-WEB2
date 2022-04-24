<?php
class Matakuliah extends CI_Controller{
    // method index
    public function index(){
        $this->load->model('matakuliah_model', 'mtkl1');

        // buat object 1 dan nilainya
        $this->mtkl1->id=1;
        $this->mtkl1->nama='PemWeb';
        $this->mtkl1->sks='3';
        $this->mtkl1->kode='PW2';

        // simpan object yg dibuat ke array
        $list_mtkl = [$this->mtkl1];
        // siapkan data untuk dikirim kedalam view, diambil dari object yg disimpan dalam array
        $data['list_mtkl'] = $list_mtkl;
        // render data dan kirim data ke view
        $this->load->view('matakuliah/index', $data);
    }
}
?>