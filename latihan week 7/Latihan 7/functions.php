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

function ubah($data){
    global $conn;
    $nama = $data ["nama_produk"];
    $kode = $data ["kode_produk"];
    $deskripsi = $data ["deskripsi"];
    $harga = $data ["harga"];


    

    $query = "UPDATE data_jam SET
                nama_produk = '$nama',
                kode_produk = '$kode',
                deskripsi = '$deskripsi',
                harga = '$harga',
            WHERE nama_produk = '$nama'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    // return mysqli_affected_rows($conn);
    return var_dump($data);
    
}

?>