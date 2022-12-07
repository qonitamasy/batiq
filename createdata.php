<?php
require 'function.php';

if( isset($_POST["submit"])){
   if(tambahData($_POST) > 0){
        // echo "data berhasil ditambahkan";
        echo "<script>
        alert('Data batik berhasil ditambahkan');
        document.location.href='index.php';
         </script>";
    }else{
        // echo "Data gagal ditambahkan";
        echo "<script>
        alert('batik telah gagal ditambahkan');
        document.location.href='index.php';
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Batik </title>
</head>
<body>
    <h1>Tambah Data Batik</h1>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    Nama: <input type="text" name="name" required>
    <br><br>
    Asal: <input type="text" name="asal" required>
    <br><br>
    Image: <input type="text" name="image" required>
    <br><br>
    <button type="submit" name="submit">Submit Data</button>
</form>

</body>
</html>