<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=muhasebe","root","");
    echo "<center>Bağlantı Başarılı.</center><br>";
}catch(PDOException $e){
    echo $e->getMessage();
    echo "başarısız";
}
?>
<html>

</html>