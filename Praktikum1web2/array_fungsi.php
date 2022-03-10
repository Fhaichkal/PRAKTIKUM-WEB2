<!DOCTYPE html>
<body>
    <?php
    $ar_buah = ["p"=>"pepaya","a"=>"apel","m"=>"mangga","j"=>"jambu"];
    echo "<ol>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li> $buah - $v </li>";
    }
    echo "</ol>";

    //Array sort mengurutkan array dalam urutan menaik
    sort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";

    //Array arsort mengurutkan array assosiatif dalam urutan menurun, sesuai dengan nilainya
    arsort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";
    echo "<hr>";
    ?>
    
    <?php
    //Array pop berguna untuk menghapus nilai terakhir dalam sebuah array.
    $tims = ["erwin","heru","ali","zaki"];
    array_pop ($tims);
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
    ?>

    <?php
    //Array Push berguna untuk menambahkan nilai ke dalam data array terakhir.
    $tims = ["erwin","heru","ali","zaki"];
    array_push ($tims, "wati");
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
?>

<?php
$tims = ["erwin","heru","ali","zaki"];
//fungsi dari sebuah array_shift adalah menghapus nilai awal dari sebuah data array
array_shift ($tims);
foreach ($tims as $person) {
    echo "<br/>$person";
}
echo "<hr>";
?>

<?php
$tims = ["erwin","heru","ali","zaki"];
//Fungsi dari sebuah array_unshift adalah menambah nilai arrray satu atau lelbih elemen ke dalam suatu array, tapi method ini menambahkannya ke awal/depan array yang dalam dunia komputer juga sering disebut sebagai prepend
array_unshift ($tims, "joko","wati");
foreach ($tims as $person) {
    echo "<br/>$person";
}
?>
</body>
</html>