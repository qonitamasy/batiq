<?php
require 'function.php';
// variable untuk menampung id yang diambil dari database
$id = $_GET["id"];

if(hapusData($id) > 0){
    echo "<script>
    alert('batik telah berhasil dihapus');
    document.location.href='index.php;
</script>";
}else{
 echo "<script>
    alert('batik telah data gagal dihapus');
    document.location.href='index.php;
</script>";
}


?>