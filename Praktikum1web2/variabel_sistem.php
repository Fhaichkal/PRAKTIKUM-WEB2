<?php
    //definisikan system
    //1. Apa bedanya variabel user dengan variable system?
    //jawab : Variable user adalah variable yang tipe datanya dapat berubah sesuka hati user sementara Variable system sudah didefinisikan system yang bisa dilihat pada info.php
    //2. Apa persamaan variabel system dengan variabel konstan?
    // jawab : Variable system sudah terdefinisikan oleh system yang dapat dilihat pada info.php sementara variable konstan berisi nilai yang bersifat tetap dan tidak bisa diubah selama berjalannya kode program.
    echo 'Dokumen Root ' .$_SERVER["DOCUMENT_ROOT"];
    echo '<br/>Nama File ' .$_SERVER["PHP_SELF"];
?>