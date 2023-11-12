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
?>