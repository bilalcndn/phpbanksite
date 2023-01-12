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
    echo "Sayın ".$_SESSION['ad']." ".$_SESSION['soyad']." aşşağıda hesap bilgileriniz gösterilmektedir.";
    ?>
    <table>
        <tr>
            <th>Hesap Türü</th>
            <th>Hesap Miktarı</th>
        </tr>
        <tr>
            <td>Vadeli</td>
            <td><?php echo $_SESSION['vadelimiktar']; ?></td>
        </tr>
        <tr>
            <td>Vadesiz</td>
            <td><?php echo $_SESSION['vadesizmiktar']; ?></td>
        </tr>
    </table>
    <style>table, th, td {
  border: 1px solid black;
}</style>
    <a href="../html/islem.php"><button>Geri Gel</button></a>
</body>
</html>