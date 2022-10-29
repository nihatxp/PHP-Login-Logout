<?php
class Kullanicilar {
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_passwd($color) {
        $this->color = $color;
    }
    function get_passwd() {
        return $this->color;
    }
  }
  $Kullanici1 = new Kullanicilar();
  $Kullanici1 -> set_name('nihatxp');
  $Kullanici1 -> set_passwd('secret');
  //Pek iyi yontem olmasa da nesne yapisini kullandim veritabani olmadigi icin;
?>