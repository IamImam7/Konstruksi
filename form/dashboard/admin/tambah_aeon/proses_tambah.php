<?php
    include '../../../koneksi.php';

    $gambar_aeon = $_FILES['gambar_aeon']['name'];
    $gambar_path = $_FILES['gambar_path']['name'];
    $path = $_POST['path_'];
    $nama = $_POST['nama'];
    $deskripsi_aeon = $_POST['deskripsi_aeon'];
    $deskripsi_path = $_POST['deskripsi_path'];
    $gameplay_path = $_POST['gameplay_path'];

    if($gambar_aeon != "" && $gambar_path != ""){
        $ekstensi_aeon_allowed = array('png','jpg');
        $ekstensi_path_allowed = array('png','jpg');

        $x_aeon = explode('.',$gambar_aeon);
        $x_path = explode('.',$gambar_path);

        $ekstensi_aeon = strtolower(end($x_aeon));
        $ekstensi_path = strtolower(end($x_path));

        $file_tmp_aeon = $_FILES['gambar_aeon']['tmp_name'];
        $file_tmp_path = $_FILES['gambar_path']['tmp_name'];

        $nama_gambar_aeon = $gambar_aeon; // Use the original image name without adding a random number
        $nama_gambar_path = $gambar_path;

        if(in_array($ekstensi_aeon, $ekstensi_aeon_allowed) &&
            in_array($ekstensi_path, $ekstensi_path_allowed) === true){
            move_uploaded_file($file_tmp_aeon, '../aeon/aeon/'.$nama_gambar_aeon);
            move_uploaded_file($file_tmp_path, '../aeon/path/'.$nama_gambar_path);

            $query = "INSERT INTO aeon_hsr (nama, gambar_aeon , path_ ,gambar_path ,deskripsi_aeon, deskripsi_path, gameplay_path) VALUES ('$nama','$nama_gambar_aeon','$path', '$nama_gambar_path','$deskripsi_aeon', '$deskripsi_path' ,'$gameplay_path')";

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
        $query = "INSERT INTO aeon_hsr (nama, gambar_aeon , path_ ,gambar_path ,deskripsi_aeon, deskripsi_path, gameplay_path) VALUES ('$nama','$nama_gambar_aeon','$path', '$nama_gambar_path','$deskripsi_aeon', '$deskripsi_path' ,'$gameplay_path')";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else{
            echo "<script>alert('Data berhasil ditambah');window.location='../aeon.php';</script>";
        }
    }
?>
