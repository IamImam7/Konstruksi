<?php
    include '../../../koneksi.php';

    $gambar = $_FILES['gambar']['name'];
    $path = $_POST['path_'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $deskripsi_path = $_POST['deskripsi_path'];

    if($gambar != ""){
        $ekstensi_allowed = array('png','jpg');
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $nama_gambar_baru = $gambar; // Use the original image name without adding a random number

        if(in_array($ekstensi, $ekstensi_allowed) === true){
            move_uploaded_file($file_tmp, '../aeon/'.$nama_gambar_baru);

            $query = "INSERT INTO aeon_hsr (nama, gambar, path_ , deskripsi, deskripsi_path) VALUES ('$nama','$nama_gambar_baru','$path', '$deskripsi', '$deskripsi_path')";

            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else{
                echo "<script>alert('Data berhasil ditambah');window.location='../aeon.php';</script>";
            }
        } else {
            echo "<script>alert('Eksternsi Gambar hanya jpg / png');window.location='../aeon.php';</script>";
        }
    } else {
        $query = "INSERT INTO aeon_hsr (nama, gambar, path_ , deskripsi, deskripsi_path) VALUES ('$nama','$nama_gambar_baru','$path', '$deskripsi', '$deskripsi_path')";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else{
            echo "<script>alert('Data berhasil ditambah');window.location='../aeon.php';</script>";
        }
    }
?>
