<?php 
require 'functions.php';


if (isset( $_POST ["submit"])) {

    if ( tambah ($_POST) >= 0 ) {
        echo "
        <script>
            alert('BERHASIL DITAMBAHKAN');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('GAGAL DITAMBAHKAN');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    } 
    
 }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RELL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Latihan 1/index.php">
        
        RELL WATCHES STORE
        </a>
    </div>
    </nav>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="no_polisi" class="form-label">NAMA PRODUK :</label>
                <input type="text" class="form-control" id="nama_produk" name ="nama_produk" required>
            </div>
            <div class="mb-3">
                <label for="tipe_mobil" class="form-label">KODE PRODUK :</label>
                <input type="text" class="form-control" id="kode_produk" name ="kode_produk" required>
            </div>
            <div class="mb-3">
                <label for="merek_mobil" class="form-label">DESKRIPSI :</label>
                <input type="text" class="form-control" id="deskripsi" name ="deskripsi" required>
            </div>
            <div class="mb-3">
                <label for="warna" class="form-label">HARGA :</label>
                <input type="text" class="form-control" id="harga" name ="harga" required>
            </div>
            <div class="mb-3">
                <button type="submit" name="submit" class="btn btn-secondary btn-lg">SUBMIT !</button>
            </div>
        </form>
    </div>
    
      
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>