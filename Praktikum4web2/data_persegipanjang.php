<?php
// memanggil class dari file class_persegipanjang.php
require_once 'class_persegipanjang.php';

$persegipanjang1 = new Persegipanjang(30, 10);
$persegipanjang2 = new Persegipanjang(50, 20);
echo "<br/>";
// hitung luas persegi panjang dengan getLuas
echo "<br/>Luas persegi panjang 1 adalah = ". $persegipanjang1->getLuas();
echo "<br/>Luas Persegi panjang 2 adalah = ". $persegipanjang2->getLuas();
// hitung keliling persegi panjang dengan getKeliling
echo "<br/>Keliling persegi panjang 1 adalah = ". $persegipanjang1->getKeliling();
echo "<br/>Keliling persegi panjang 2 adalah = ". $persegipanjang2->getKeliling();
?>