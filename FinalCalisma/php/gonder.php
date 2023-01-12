<?php
session_start();
$gmusterino=$_POST['gmusterino'];
$gmiktar=$_POST['gmiktar'];
$hesap=$_POST['hesap'];

$baglan=mysqli_connect("localhost","root","","musteri");
$gonderilecek=mysqli_query($baglan,"select * from hesap where musteriNo='$gmusterino'");
$gonderen=mysqli_query($baglan,"select * from hesap where musteriNo='$_SESSION[musterino]'");
if(mysqli_num_rows($gonderen)>0){
    $bilgiler=mysqli_fetch_assoc($gonderen);
    if($hesap=="vadeli"){
        $gonderenguncel=$bilgiler['vadelimiktar']-$gmiktar;
        $vadeliazalt=mysqli_query($baglan,"update hesap set vadelimiktar='$gonderenguncel' where musteriNo='$_SESSION[musterino]'");
    }
    else if($hesap=="vadesiz"){
        $gonderenguncel=$bilgiler['vadesizmiktar']-$gmiktar;
        $vadesizazalt=mysqli_query($baglan,"update hesap set vadesizmiktar='$gonderenguncel' where musteriNo='$_SESSION[musterino]'");
    }
    else {
        echo "Hata";
        echo "Anasayfaya dönmek için lütfen <a href='../html/index.php'>TIKLAYINIZ</a>";
    }
}
if(mysqli_num_rows($gonderilecek)>0){
    $alicibilgi=mysqli_fetch_assoc($gonderilecek);
    if($hesap=="vadeli"){
        $aliciguncel=$alicibilgi['vadelimiktar']+$gmiktar;
        $vadeligonder=mysqli_query($baglan,"update hesap set vadelimiktar='$aliciguncel' where musteriNo='$gmusterino'");
        echo "Vadeli hesabınızdan ".$alicibilgi['ad']." ".$alicibilgi['soyad']." isimli kişiye ".$gmiktar." TL para gönderildi";
        echo "Anasayfaya dönmek için lütfen <a href='../html/index.php'>TIKLAYINIZ</a>";
    }
    else if($hesap=="vadesiz"){
        $aliciguncel=$alicibilgi['vadesizmiktar']+$gmiktar;
        $vadesizgonder=mysqli_query($baglan,"update hesap set vadesizmiktar='$aliciguncel' where musteriNo='$gmusterino'");
        echo "Vadesiz hesabınızdan ".$alicibilgi['ad']." ".$alicibilgi['soyad']." isimli kişiye ".$gmiktar." TL para gönderildi";
        echo "Anasayfaya dönmek için lütfen <a href='../html/index.php'>TIKLAYINIZ</a>";
    }
        else {
        echo "Hata";
        echo "Anasayfaya dönmek için lütfen <a href='../html/index.php'>TIKLAYINIZ</a>";
    }
}
?>