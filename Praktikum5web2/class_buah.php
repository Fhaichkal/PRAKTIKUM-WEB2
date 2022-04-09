<?php
class Buah{
    //membuat property
    public $name;
    protected $color;
    private $berat;

    //buat method untuk mencetak si color dan berat.
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_weight($b){
        return $this->berat = $b;
    }
}
//mencetak object
$mangga = new Buah();
echo $mangga->name = 'Mangga';
echo"<br>";
echo $mangga->set_color('hijau');
echo"<br>";
echo $mangga->set_weight(300).'kg';
?>