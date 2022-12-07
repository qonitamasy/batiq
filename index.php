<?php
require 'function.php';

$batik = query("SELECT * FROM batik");


// ambil data siswi dari object result (fetch) dan 4 cara
// 1. mysqli_fetch_row() -> array numerik
// $si = mysqli_fetch_row($result);
// var_dump($si);

// 2. mysqli_fetch_assoc() -> array assosiatif
// $si = mysqli_fetch_assoc($result);
// var_dump($si["jurusan"]);

// 3. mysqli_fetch_array() -> numeric/assosiatif
// $si = mysqli_fetch_array($result);
// var_dump($si);

// // 4. mysqli_fetch_object() -> array numerik
// $si = mysqli_fetch_object($result);
// var_dump($si);

// while($si = mysqli_fetch_assoc($result) ){
//     var_dump($si);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Batik</title>
    <link rel="stylesheet" type="text/css" href="bbbatik.css">
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo" src="logo.png"></div>
            <ul>
            <li class="active"><a href="#home">HOME</a></li>
            <li><a href="#about">Profile</a></li>
             <li><a href="#main">Data Batik</a></li>
             <li><a href="#footer">Contact</a></li>
            </ul>
            </div>

            <div class="contents">
            <div id="home">
            <h1>Welcome to My Batiq</h1>
            </div>
    </header>
    
        <div id="about"> 
        <img class="profile" src="profile.png">
        <h1>Qonita Masyitoh</h1>
        <h3>Junior Software Engineering and<br>student at IDN Boarding School</h3>
        <p>Hallo, Perkenalkan nama saya Qonita Masyitoh, saya dari kelas XI programmer dan<br>
        saya sekolah di IDN boading school. Saya berasal dari sragen, jawa tengah.</p>
        </div>

<div id="main">
  <h1>Daftar Batik</h1> 
    <a href="createdata.php"> Tambah data batik</a>
    <table border ="1" cellpadding="10" cellspasing="0">
     <tr>
     <th>No.</th>
     <th>Nama</th>
     <th>Asal</th>
     <th>Image</th>
     <th>Action</th>
</tr>

<?php $i=1 ?>
<?php foreach($batik as $row): ?>

<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["name"] ?></td>
    <td><?php echo $row["asal"] ?></td>
    <td><img src="image/<?= $row["image"] ?>" alt="" width="50"></td>
    <td>
        <a href="">Remove</a>
        <a href="delete.php?id=<?= $row["id"];?>" onclick="return confirm('Yakin dihapus?')";>Delete</a>
</td>
</tr>

<?php $i++ ?>
<?php endforeach ?>

</div>
</table>
<footer id="footer">
        <div>
            <a href="https://www.linkedin.com/in/qonita-masy-b08bb3227/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/LinkedIn_logo_initials.png/640px-LinkedIn_logo_initials.png" height="130px" width="130px"></a>
            <p>Linkedin Profile</p>
        </div>
        <div>
            <a href="https://www.youtube.com/channel/UCsvEcDLpL3_hK6LmSmQFzfg" target="_blank"><img src="https://i.pinimg.com/564x/36/7c/75/367c753772ef5766c679fa7240f3e96e.jpg" height="130" width="130px"></a>
            <p>Youtube profile</p>
        </div>
        <div>
            <a href="https://dribbble.com/qonitamasy" target="_blank"><img src="https://cdn.freebiesupply.com/logos/large/2x/dribbble-5-logo-png-transparent.png" height="130" width="130px"></a>
            <p>Dribbble profile</p>
        </div>
        <div>
            <a href="https://github.com/qonitamasy" target="_blank"><img src="https://i.pinimg.com/564x/95/7c/4d/957c4dd9aa815cc1de2040cc1259589f.jpg" height="130" width="130px"></a>
            <p>Github profile</p> 
        </div>
    </footer>
</body>
</html>