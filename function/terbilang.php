<?php
//author : https://gist.github.com/cahsowan/d315d54a59e4f14a6bab

function terbilang($x) {
  if ($x > 0) {
    $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

    if ($x < 12)
      return " " . $angka[$x];
    elseif ($x < 20)
      return terbilang($x - 10) . " belas";
    elseif ($x < 100)
      return terbilang($x / 10) . " puluh" . terbilang($x % 10);
    elseif ($x < 200)
      return "seratus" . terbilang($x - 100);
    elseif ($x < 1000)
      return terbilang($x / 100) . " ratus" . terbilang($x % 100);
    elseif ($x < 2000)
      return "seribu" . terbilang($x - 1000);
    elseif ($x < 1000000)
      return terbilang($x / 1000) . " ribu" . terbilang($x % 1000);
    elseif ($x < 1000000000)
      return terbilang($x / 1000000) . " juta" . terbilang($x % 1000000);
  } else {
    $ab = explode("-", $x);
    $ter = "";
    $terb = "";
    $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

    if ($ab[1] < 12)
      $ter = " " . $angka[$ab[1]];
    elseif ($ab[1] < 20)
      $ter = terbilang($ab[1] - 10) . " belas";
    elseif ($ab[1] < 100)
      $ter = terbilang($ab[1] / 10) . " puluh" . terbilang($ab[1] % 10);
    elseif ($ab[1] < 200)
      $ter = "seratus" . terbilang($ab[1] - 100);
    elseif ($ab[1] < 1000)
      $ter = terbilang($ab[1] / 100) . " ratus" . terbilang($ab[1] % 100);
    elseif ($ab[1] < 2000)
      $ter = "seribu" . terbilang($ab[1] - 1000);
    elseif ($ab[1] < 1000000)
      $ter = terbilang($ab[1] / 1000) . " ribu" . terbilang($ab[1] % 1000);
    elseif ($ab[1] < 1000000000)
      $ter = terbilang($ab[1] / 1000000) . " juta" . terbilang($ab[1] % 1000000);


    $terb = "minus ".$ter;
    return $terb;
  }
    
  
}
?>