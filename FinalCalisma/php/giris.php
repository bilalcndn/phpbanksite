<?php 
$musterino=$_POST['musterino'];
$sifre=$_POST['sifre'];
session_start();
$baglan=mysqli_connect("localhost","root","","musteri");
$veri=mysqli_query($baglan,"select * from hesap where musteriNo='$musterino'");
if(mysqli_num_rows($veri)>0){
    $bilgiler=mysqli_fetch_assoc($veri);
    $_SESSION['ad']=$bilgiler['ad'];
    $_SESSION['soyad']=$bilgiler['soyad'];
    $_SESSION['sifre']=$bilgiler['sifre'];
    $_SESSION['musterino']=$bilgiler['musteriNo'];
    $_SESSION['vadelimiktar']=$bilgiler['vadelimiktar'];
    $_SESSION['vadesizmiktar']=$bilgiler['vadesizmiktar'];

    Header("Location: ../html/islem.php");
}
else{
    echo "Girilen bilgiler hatalı...";
}
?>