<?php
     include '../../../koneksi.php';

     $id = $_GET["id"];

     $query = "DELETE FROM aeon_hsr WHERE id='$id' ";
     $hasil_query = mysqli_query($conn, $query);

     if(!$hasil_query) {
        die ("Gagal menghapus data: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
      } else {
        echo "<script>alert('Data berhasil dihapus.');window.location='../aeon.php';</script>";
      }
?>