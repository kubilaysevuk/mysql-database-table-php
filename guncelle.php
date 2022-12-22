<?php 
// Veri Guncelleme Islemi
include "baglanti.php";
$sorgu = $db->prepare("select * from tablo1 where id=:id");
$sorgu->execute(array(
    "id"=>$_GET["id"]
));
$satir=$sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table id="customers">
<form method="POST" action="#" >
<tr>            <th><b><b></th>
                <th><b>Link<b></th>
                <th><b>Yazar<b></th>
                <th><b>Konu <b></th>
                <th><b>Cari<b></th>
                <th><b>Kdv<b></th>
                <th><b>Otv<b></th>
                <th><b>Mtv<b></th>
</tr>
<tr>
          <td>Güncelle</td>
          <td><input type="text" id="link" name="link" size="11" value="<?php echo $satir['link']; ?>"></td>
          <td><input type="text" id="yazar" name="yazar" size="11" value="<?php echo $satir['yazar']; ?>"></td>
          <td><input type="text" id="konu" name="konu" size="11" value="<?php echo $satir['konu']; ?>"></td>
          <td><input type="text" id="cari" name="cari" size="10" value="<?php echo $satir['cari']; ?>"></td>
          <td><input type="text" id="kdv" name="kdv" size="5" value="<?php echo $satir['kdv']; ?>"></td>
          <td><input type="text" id="otv" name="otv" size="5" value="<?php echo $satir['otv']; ?>"></td>
          <td><input type="text" id="mtv" name="mtv" size="5" value="<?php echo $satir['mtv']; ?>"></td>
</tr>
<tr>
          <td><input type="submit" name="guncelle" value="guncelle" /></td>
</tr>
</table>
</form>
<?php
if(isset($_POST["guncelle"])){
    $guncelle = $db->prepare("update tablo1 set
link=:takmalink ,
yazar=:takmayazar, 
konu=:takmakonu, 
cari=:takmacari, 
kdv=:takmakdv ,
otv=:takmaotv, 
mtv=:takmamtv where id=:id");
$kontrol = $guncelle->execute(array(
    "takmalink" => $_POST["link"], 
"takmayazar"=> $_POST["yazar"], 
"takmakonu" => $_POST["konu"], 
"takmacari" => $_POST["cari"], 
"takmakdv"=> $_POST["kdv"], 
"takmaotv" => $_POST["otv"], 
"takmamtv" => $_POST["mtv"],
"id" => $_GET["id"]
));
if ($kontrol){
    header('Location:index.php');
    exit();
}
else {
    echo "hata";
}
}
?>
</body>
</html>