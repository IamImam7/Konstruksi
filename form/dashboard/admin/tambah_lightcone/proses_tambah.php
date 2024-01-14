<?php
    include '../../../koneksi.php';

    $gambar = $_FILES['gambar']['name'];
    $nama = $_POST['nama'];
    $path = $_POST['path_'];
    $efek = $_POST['efek'];
    $judul = $_POST['judul'];

    if($gambar != ""){
        $ekstensi_allowed = array('png','jpg');
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $nama_gambar_lightcone = $gambar; // Use the original image name without adding a random number

        if(in_array($ekstensi, $ekstensi_allowed) === true){
            move_uploaded_file($file_tmp, '../LightCones/'.$nama_gambar_lightcone);

            $query = "INSERT INTO lightcone_hsr (gambar , nama, judul , path_ , efek) VALUES ('$nama_gambar_lightcone','$nama','$judul','$path','$efek')";

            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else{
                echo "<script>alert('Data berhasil ditambah');window.location='../lightcone.php';</script>";
            }
        } else {
            echo "<script>alert('Eksternsi Gambar hanya jpg / png');window.location='../lightcone.php';</script>";
        }
    } else {
        $query = "INSERT INTO lightcone_hsr (gambar , nama, judul , path_ , efek) VALUES ('$nama_gambar_lightcone','$nama','$judul','$path','$efek')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else{
            echo "<script>alert('Data berhasil ditambah');window.location='../lightcone.php';</script>";
        }
    }
?>
