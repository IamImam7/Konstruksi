<?php
    include '../../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $path = $_POST['path_'];
    $deskripsi_aeon = $_POST['deskripsi_aeon'];
    $deskripsi_path = $_POST['deskripsi_path'];
    $gameplay_path = $_POST['gameplay_path'];

    $query = "UPDATE aeon_hsr SET nama = '$nama', path_ = '$path', deskripsi_aeon = '$deskripsi_aeon', deskripsi_path ='$deskripsi_path', gameplay_path = '$gameplay_path' WHERE id = '$id'";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else {
        if(!empty($_FILES['gambar_aeon']['name'])){
            $gambar_aeon = $_FILES['gambar_aeon']['name'];
            $x_aeon = explode('.',$gambar_aeon);
            $ekstensi_aeon = strtolower(end($x_aeon));
            $file_tmp_aeon = $_FILES['gambar_aeon']['tmp_name'];
            $nama_gambar_aeon = rand(1,999) . '-' .$gambar_aeon;
            if(in_array($ekstensi_aeon, array('png','jpg'))){
                move_uploaded_file($file_tmp_aeon, '../aeon/aeon/'.$nama_gambar_aeon);
                $query = "UPDATE aeon_hsr SET gambar_aeon = '$nama_gambar_aeon' WHERE id = '$id'";
                $result = mysqli_query($conn,$query);
            }
        }

        if(!empty($_FILES['gambar_path']['name'])){
            $gambar_path = $_FILES['gambar_path']['name'];
            $x_path = explode('.',$gambar_path);
            $ekstensi_path = strtolower(end($x_path));
            $file_tmp_path = $_FILES['gambar_path']['tmp_name'];
            $nama_gambar_path = rand(1,999) . '-' .$gambar_path;
            if(in_array($ekstensi_path, array('png','jpg'))){
                move_uploaded_file($file_tmp_path, '../aeon/path/'.$nama_gambar_path);
                $query = "UPDATE aeon_hsr SET gambar_path = '$nama_gambar_path' WHERE id = '$id'";
                $result = mysqli_query($conn,$query);
            }
        }

        echo "<script>alert('Data berhasil diubah.');window.location='../aeon.php';</script>";
    }
?>