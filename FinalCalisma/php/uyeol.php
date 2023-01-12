<?php 
$musterino=$_POST['musterino'];
$sifre=$_POST['sifre'];
$vadelimiktar=$_POST['vadelimiktar'];
$vadesizmiktar=$_POST['vadesizmiktar'];
$ad=$_POST['ad'];
$soyad=$_POST['soyad'];

$baglan=mysqli_connect("localhost","root","","musteri");
$veri=mysqli_query($baglan,"insert into hesap(musteriNo,sifre,vadelimiktar,vadesizmiktar,ad,soyad) values('$musterino','$sifre','$vadelimiktar','$vadesizmiktar','$ad','$soyad')");
if(isset($veri)){
    echo "Veriler gönderildi giriş ekranına dönmek için <a href='../html/index.php'>TIKLAYIN</a>";
}
else{
    echo "Hata oluştu";
}
?>