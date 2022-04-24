 <?php
 class Mahasiswa extends CI_Controller{
    // membuat method index 
    public function index(){
        $this->load->model('mahasiswa_model', 'mhs1');

        // buat objek model 1 dan nilainya
        $this->mhs1->id=1;
        $this->mhs1->nim='0111';
        $this->mhs1->nama='Faiz';
        $this->mhs1->gender='L';
        $this->mhs1->ipk=3.85;

        $this->load->model('mahasiswa_model', 'mhs2');

        // buat object 2 dan nilainya
        $this->mhs2->id=2;
        $this->mhs2->nim='0222';
        $this->mhs2->nama='Nurul';
        $this->mhs2->gender='P';
        $this->mhs2->ipk=3.55;

        // simpan object yg dibuat ke array
        $list_mhs = [$this->mhs1, $this->mhs2];
        // siapkan data untuk dikirim kedalam view, diambil dari object yg disimpan dalam array
        $data['list_mhs'] = $list_mhs;
        // render data dan kirim data ke view
        $this->load->view('mahasiswa/index', $data);
    }
}
 ?>