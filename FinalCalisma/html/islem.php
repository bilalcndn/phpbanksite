<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        echo $_SESSION['musterino']. " müşteri No'lu Sayın ".$_SESSION['ad']." ".$_SESSION['soyad']." ".date('h:i:sa'). " saatinde giriş yaptınız.";
    ?>
    <br>
    <a href="../html/hesap.php"><button>Hesapları Gör</button></a>
    <a href="../html/para.php"><button>Para Aktar</button></a>
    <a href="../html/index.php"><button>Çıkış</button></a>
    
</body>
</html>