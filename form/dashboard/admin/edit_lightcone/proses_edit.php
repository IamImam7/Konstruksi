<?php
    include '../../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_FILES['gambar']['name'];
    $judul = $_POST['judul'];
    $path = $_POST['path'];
    $efek = $_POST['efek'];

    if($gambar != ""){
        $ekstensi_allowed = array('png','jpg');
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $nama_gambar_baru = $gambar; // Use the original image name without adding a random number

        if(in_array($ekstensi, $ekstensi_allowed) === true){
            move_uploaded_file($file_tmp, '../LightCones/'.$nama_gambar_baru);
            $query = "UPDATE lightcone_hsr SET nama = '$nama', gambar  = '$nama_gambar_baru', judul = '$judul', efek = '$efek', path_ = '$path'";
            $query .="WHERE id = '$id'";
            $result = mysqli_query($conn,$query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../lightcone.php';</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../tambah_lightcone/tambah_lightcone.php';</script>";
        }
    } else {
        $query = "UPDATE lightcone_hsr SET nama = '$nama', judul = '$judul', efek = '$efek', path_ = '$path'";
        $query .="WHERE id = '$id'";
        $result = mysqli_query($conn,$query);

        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='../lightcone.php';</script>";
        }
    }
?>
