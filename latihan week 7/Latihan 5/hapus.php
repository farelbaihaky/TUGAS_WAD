<?php

require 'functions.php';

$hapus = $_GET ["no_polisi"];


if ( hapus($hapus) > 0) {
    echo "
    <script>
        alert('BERHASIL DIHAPUS');
        document.location.href = '../Latihan 1/index.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('GAGAL DIHAPUS');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    
}




?>