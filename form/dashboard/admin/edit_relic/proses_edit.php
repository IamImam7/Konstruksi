<?php
    include '../../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_FILES['gambar']['name'];
    $set2 = $_POST['set2'];
    $set4 = $_POST['set4'];

    if($gambar != ""){
        $ekstensi_allowed = array('png','jpg');
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $nama_gambar_baru = $gambar; // Use the original image name without adding a random number

        if(in_array($ekstensi, $ekstensi_allowed) === true){
            move_uploaded_file($file_tmp, '../Relics/'.$nama_gambar_baru);
            $query = "UPDATE relic_hsr SET nama = '$nama', gambar = '$nama_gambar_baru', set2 = '$set2', set4 = '$set4'";
            $query .="WHERE id = '$id'";
            $result = mysqli_query($conn,$query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../relic.php';</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../tambah_relic/tambah_relic.php';</script>";
        }
    } else {
        $query = "UPDATE relic_hsr SET nama = '$nama', set2 = '$set2', set4 = '$set4'";
        $query .="WHERE id = '$id'";
        $result = mysqli_query($conn,$query);

        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='../relic.php';</script>";
        }
    }
?>
