<?php
  session_start();
  session_destroy();
  header("location:girisYap.php"); 
  exit;
