<?php 
// Veri Silme Islemi
include "baglanti.php";
$sil= $db->prepare("delete from tablo1 where id=:id ");
$kontrol=$sil->execute(array(
    "id" => $_GET["id"]
));

if($kontrol) {
    header("Location:index.php");
    exit;
}
else{
    echo "hata";
}
?>