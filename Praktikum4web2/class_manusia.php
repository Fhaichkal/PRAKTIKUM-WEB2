<?php
// membuat class manusia
class Manusia{
    // buat property
    var $nama;
    var $warna;

    // buatlah method atau function
    function tampilkan_nama(){
        return 'Nama saya adalah Teuku Fikri Haikal';
    }

    function warna_kulit(){
        return '<br/>Kulit saya berwarna Sawo Matang';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>