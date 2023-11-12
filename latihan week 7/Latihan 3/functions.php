<?php
$conn = mysqli_connect("localhost:3308","root","","tugas_farel_wad");

function query($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;
}
function tambah($data){
    global $conn;
    $nama = $data ["nama_produk"];
    $kode = $data["kode_produk"];
    $deskripsi = $data ["deskripsi"];
    $harga = $data ["harga"];

    $query = "INSERT INTO data_jam VALUES ('$nama','$kode','$deskripsi','$harga')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

?>