<?php
require_once ('veritabani.php'); // Parolalari Zorunlu Olarak Ice Aktaralim
session_start();

if(isset($_SESSION['Giris']) == true ){
    header("location:index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Giris Yap</title>
</head>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Giriş Formu</h2>
        <label for="inputUsername" class="sr-only">Kullanıcı Adı</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
        <label for="inputPassword" class="sr-only">Parola</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Parola" required>
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
        <?php
        if(isset($_POST['Submit'])){
            //$sonuc = password_verify($_POST['Password'], $Parola); //hash kontrolü daha güvenlidir
            if( ($_POST['Username'] == $Kullanici1->get_name()) && ($Kullanici1->get_passwd() === $_POST['Password']) ) {
                $_SESSION['kullAdi'] = $Kullanici1->get_name();
                $_SESSION['Giris'] = true;
                header("location:index.php");
                exit;
            } else {
                ?>
                <!-- Hata Mesajı -->
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Hata!</strong> Bilgiler Hatalı.
                </div>
                <?php
            }
        }
        ?>
    </form>
</div>

<!-- Bootstrap'ın Calışması İçin Jquery İmport Edelim -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap import edelim -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
