<?php
// Koneksi ke database
// parameter (host, username admin, password, nama database)
$conn = mysqli_connect("localhost","root", "", "batikdb");

function query($query){
global $conn;
 // ambil data di database
$result = mysqli_query($conn,$query);
$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
return $rows;

}


function tambahData($data){
    global $conn;
    $name = $data["name"];
    $asal = $data["asal"];
    $image = $data["image"];

    $query = "INSERT INTO batik VALUES('', '$name', '$asal', '$image')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function hapusData($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM batik WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>