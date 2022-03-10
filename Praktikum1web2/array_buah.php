<?php
    $ar_buah = ["pepaya", "Mangga", "Pisang", "jambu"];
    //cetak buah index ke 2
    echo "ini adalah hasil data data buah dalam array";
    echo "<br/>$ar_buah[2]";

    //cetak jumlah buah 
    echo '<br/>Jumlah buah ' .count($ar_buah);

    //cetak seluruh buah
    echo "<ol>";
    foreach ($ar_buah as $buah) {
        echo "<li>$buah</li>";
    }
    echo "</ol>";
    //=================================================
    //tambahkan buah
    $ar_buah[]="durian";
    //hapus buah
    unset($ar_buah[1]);
    //ubah buah index ke dua menjadi manggis
    $ar_buah[2] = "manggis";
    //cetak seluruh buah dengan index nya
    echo "<ul>";
    foreach ($ar_buah as $k => $v) {
        echo "<li>buah index - $k adalah $v </li>";
    }
    echo "</ul>"
?>