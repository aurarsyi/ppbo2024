<?php

class Buah {
  public $nama_buah;
  public $warna;

  function set_nama($nama) {
    $this ->nama_buah = $nama;
  }
  function get_nama() {
    return $this ->nama_buah;
  }
  function set_warna($warna){
    $this ->warna = $warna;
  }
  function get_warna(){
    return $this ->warna;
  } 
}

$pisang = new Buah();

$pisang ->set_nama("pisang");
$pisang ->set_warna("kuning");

echo "Nama buah: " ; $pisang -> get_nama();
echo "Warna: " ; $pisang -> get_warna();