<?php
$conn = mysqli_connect("localhost:3308","root","","tugas_farel_wad");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function add($data){
    global $conn;
    $nama = $data ["nama_produk"];
    $kode = $data["kode_produk"];
    $deskripsi = $data ["deskripsi_produk"];
    $harga = $data ["harga"];

    $query = "INSERT INTO data_mobil VALUES ('$nama','$kode','$deskripsi','$harga')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function hapus($hapus){
    global $conn;
    mysqli_query($conn,"DELETE FROM data_jam WHERE nama_produk = '$hapus'") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
?>