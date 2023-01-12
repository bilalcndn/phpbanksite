<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../php/gonder.php" method="post">
        Aktarılacak <input type="text" placeholder="Müşteri No" name="gmusterino"><br>
        Aktarılacak <input type="text" name="gmiktar" placeholder="Miktar"><br>
        Hangi hesaptan Aktarılacak
        <?php
        session_start();
        $baglan=mysqli_connect("localhost","root","","musteri");
        $verilecek=mysqli_query($baglan,"select * from hesap where musteriNo='$_SESSION[musterino]'");
        echo    "<select name='hesap'>
                    <option value='vadeli'>Vadeli hesap ".$_SESSION['vadelimiktar']." bakiye</option>
                    <option value='vadesiz'>Vadesiz hesap ".$_SESSION['vadesizmiktar']." bakiye</option>
                </select>";
        ?>
        <br>
        <input type="submit" value="Para Gönder">
        <br>
    </form>
    <a href="../html/islem.php"><button>Geri</button></a>
</body>
</html>