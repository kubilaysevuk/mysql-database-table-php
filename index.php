<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/asset/custom.js">

<style>
  /* Preloader */
  .counter {
    font-size:40px;
  }
#preloader {
    position:fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#fff; /* sayfa yüklenirken gösterilen arkaplan rengimiz */
    z-index:99; /* efektin arkada kalmadığından emin oluyoruz */
}

#status {
    width:200px;
    height:200px;
    position:absolute;
    left:50%;
    top:50%;
    background-image:url(asset/359.gif); /* burası yazının ilk başında bahsettiğimiz animasyonu çağırır */
    background-repeat:no-repeat;
    background-position:center;
    margin:-100px 0 0 -100px;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veritabanı</title>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
</head>
<body>
  <!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

   <!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
        })
    //]]>
</script>
  <!-- ilk satir -->
<table id="customers">
            <tr>
                <th><b>Id<b></th>
                <th><b>Link<b></th>
                <th><b>Yazar<b></th>
                <th><b>Konu <b></th>
                <th><b>Cari<b></th>
                <th><b>Kdv<b></th>
                <th><b>Otv<b></th>
                <th><b>Mtv<b></th>
                <td><b>Güncelle<b></td>
                <td><b>Sil<b></td>
            </tr>
<?php
//mysqlden veri cekme
include("baglanti.php");
$sorgu = $db->prepare("select * from tablo1");
$sorgu->execute();
            while($veri = $sorgu->fetch(PDO::FETCH_ASSOC)){               
            echo "
            <tr>
                <td>".$veri['id']."</td>
                <td>".$veri['link']."</td>
                <td>".$veri['yazar']."</td>
                <td>".$veri['konu']." </td>
                <td>".$veri['cari']."</td>
                <td>".$veri['kdv']."</td>
                <td>".$veri['otv']."</td>
                <td>".$veri['mtv']."</td>
                <td><a href=guncelle.php?id=$veri[id]>Güncelle</a></td>
                <td><a href=sil.php?id=$veri[id]>Sil</a></td>
            </tr>
            ";
            }
?>
<!-- inputs -->
<form method="POST" action="#" >
<tr>            
          <td>Ekle</td>
          <td><input type="text" id="link" name="link" size="11" placeholder="Linki Giriniz"></td>
          <td><input type="text" id="yazar" name="yazar" size="11" placeholder="Yazarı Giriniz"></td>
          <td><input type="text" id="konu" name="konu" size="11" placeholder="Konuyu Giriniz"></td>
          <td><input type="text" id="cari" name="cari" size="10" placeholder="Cari Giriniz"></td>
          <td><input type="text" id="kdv" name="kdv" size="5" placeholder="Kdv Giriniz"></td>
          <td><input type="text" id="otv" name="otv" size="5" placeholder="Otv Giriniz"></td>
          <td><input type="text" id="mtv" name="mtv" size="5" placeholder="Mtv Giriniz"></td>
</tr>
<tr>
          <td><input type="submit" name="eklee" value="Veri Ekle" /></td>
</tr>
</table>
</form>
<!-- Veri Ekleme Islemi -->
<?php
if(isset($_POST["eklee"])){
$eklee= $db->prepare("INSERT INTO tablo1 set 
link=:takmalink ,
yazar=:takmayazar, 
konu=:takmakonu, 
cari=:takmacari, 
kdv=:takmakdv ,
otv=:takmaotv, 
mtv=:takmamtv");  
$kontrol = $eklee->execute(array( 
"takmalink" => $_POST["link"], 
"takmayazar"=> $_POST["yazar"], 
"takmakonu" => $_POST["konu"], 
"takmacari" => $_POST["cari"], 
"takmakdv"=> $_POST["kdv"], 
"takmaotv" => $_POST["otv"], 
"takmamtv" => $_POST["mtv"]
)); 
if($kontrol){
  header("Location:index.php");
  exit;
}
else {
  echo"hata";
}
}
?>

<span class="counter" data-counter="100">100</span>
<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$('.counter').each(function () {
    $(this).prop('counter', 0).animate({
        counter: $(this).data('counter')
    }, {
        duration: 3500,
        easing: 'swing',
        step: (step) => {
            $(this).text(Math.ceil(step));
        }
    })
});
</script>
<script>
$('.counter').each(function () {
    $(this).prop('counter', 0).animate({
        counter: $(this).data('counter')
    }, {
        duration: 3500,
        easing: 'swing',
        step: (step) => {
            $(this).text(Math.ceil(step));
        }
    })
});
</script>
<script>
$('.counter').each(function () {
    $(this).prop('counter', 0).animate({
        counter: $(this).data('counter')
    }, {
        duration: 3500,
        easing: 'swing',
        step: (step) => {
            $(this).text(Math.ceil(step));
        }
    })
});
</script>

</body>
</html>