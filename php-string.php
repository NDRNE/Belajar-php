<?php
  $hello_world = "Saya siswa SMKN 1 Karawang Yang Lagi Belajar PHP";
  echo $hello_world;
  echo "<br />";
  // strlen() mengembalikan panjang string
  echo strlen($hello_world);
  echo "<br />";
  // str_word_count()menghitung jumlah kata dalam sebuah string
  echo str_word_count($hello_world);
  echo "<br />";
  // strrev() membalikkan string
  echo strrev($hello_world);
  echo "<br />";
  // strpos() mencari teks tertentu dalam sebuah string. Jika kecocokan ditemukan, 
  // fungsi mengembalikan posisi karakter kecocokan pertama. Jika tidak ada kecocokan yang ditemukan,
  // itu akan mengembalikan FALSE.
  echo strpos($hello_world, "SMKN");
  echo "<br />";
  //str_replace() menggantikan beberapa karakter dengan beberapa karakter lain dalam sebuah string
  echo str_replace("SMKN 1 Karawang", "NESKAR", $hello_world);
  echo "<br />";
  // substr() mengembalikan bagian dari string
  echo substr($hello_world, 11, 16);
  echo "<br />";
  // strtoupper() mengubah string menjadi huruf besar
  echo strtoupper($hello_world);
  echo "<br />";
  $neskar = substr($hello_world, 11, 16);
  //substr() mengembalikan bagian dari string
  echo strtolower($neskar);
?>