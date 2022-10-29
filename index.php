<?php
  session_start();
  if(isset($_SESSION['Giris']) == false){
    header("location:girisYap.php");
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
    <title>Giriş Başarılı</title>
  </head>
  <body>
    
    <div class="container">
      <div class="header">
        <nav>
          <ul class="nav nav-pills pull-right">
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo $_SESSION['kullAdi']?></h3>
      </div>
      
      <div class="jumbotron">
        <h1>Admin Paneli</h1>
        <h3>Hoşgeldin <?php echo $_SESSION['kullAdi']?></h3>
        <p class="lead">Giriş Yapıldı</p>
        <p><a class="btn btn-lg btn-danger" href="./cikisYap.php" role="button">Çıkış Yap</a></p>
      </div>
      <footer class="footer">
        <p>&copy; Nihat Aliyev 112151502007</p>
      </footer>

    </div>
  </body>
</html>