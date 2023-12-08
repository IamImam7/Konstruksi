<?php
    include '../../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $gambar = $_FILES['gambar']['name'];
    $efek = $_POST['efek'];

    if($gambar != ""){
        $ekstensi_allowed = array('png','jpg');
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar;
        if(in_array($ekstensi, $ekstensi_allowed) === true){
            move_uploaded_file($file_tmp, '../Ornaments/'.$nama_gambar_baru);
            $query = "UPDATE ornament SET nama = '$nama', gambar = '$nama_gambar_baru', efek = '$efek'";
            $query .="WHERE id = '$id'";
            $result = mysqli_query($conn,$query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn).
                " - ".mysqli_error($conn));
            }else{
                echo "<script>alert('Data berhasil diubah.');window.location='../ornament.php';</script>";
            }
        }else{
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../tambah_ornament/tambah_ornament.php';</script>";
        }
    }else{
        $query = "UPDATE ornament SET nama = '$nama', gambar = '$nama_gambar_baru', efek = '$efek'";
        $query .="WHERE id = '$id'";
        $result = mysqli_query($conn,$query);

        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
        }else{
            echo "<script>alert('Data berhasil diubah.');window.location='../ornament.php';</script>";
        }
    }

?>