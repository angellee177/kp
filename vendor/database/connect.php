<?php
try {
  $conn = new PDO("mysql:host=localhost;dbname=test", 'root', '');
  echo "Berhasil terkoneksi ke database";
} catch (\Exception $e) {
  echo 'Terjadi error koneksi '. $conn->getMessage();
}
?>