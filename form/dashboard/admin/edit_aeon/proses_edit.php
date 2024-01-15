<?php
    include '../../../koneksi.php';

    $id = $_POST['id'];
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
            $query = "UPDATE aeon_hsr SET nama = '$nama', gambar = '$nama_gambar_baru', path_ = '$path' , deskripsi = '$deskripsi' , deskripsi_path ='$deskripsi_path'";
            $query .="WHERE id = '$id'";
            $result = mysqli_query($conn,$query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='../aeon.php';</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../aeon.php';</script>";
        }
    } else {
        $query = "UPDATE aeon_hsr SET nama = '$nama', gambar = '$nama_gambar_baru', path_ = '$path' , deskripsi = '$deskripsi' , deskripsi_path ='$deskripsi_path'";
        $query .="WHERE id = '$id'";
        $result = mysqli_query($conn,$query);

        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='../aeon.php';</script>";
        }
    }
?>
