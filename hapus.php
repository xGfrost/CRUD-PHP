<?php
require 'fungsi.php';

    $id = $_GET["id"];

    if( hapus($id) >0){
        echo "<script>
                    alert('data berhasil dihapus!');
                    document.location.href='program.php'
            </script>";
    }else{
        echo "<script>
                    alert('data tidak berhasil dihapus!');
                    document.location.href='program.php'
            </script>";
    }

?>