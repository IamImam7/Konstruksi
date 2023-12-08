<?php
    include '../../../koneksi.php';

    $gambar = $_FILES['gambar']['name'];
    $set2 = $_POST['set2'];
    $set4 = $_POST['set4'];
    $nama = $_POST['nama'];

    if($gambar != ""){
        $ekstensi_allowed = array('png','jpg');
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar;
        if(in_array($ekstensi, $ekstensi_allowed) === true){
            move_uploaded_file($file_tmp, '../Relics/'.$nama_gambar_baru);

            $query = "INSERT INTO relic (gambar, set2, set4, nama) VALUES ('$nama_gambar_baru','$set2','$set4','$nama')";

            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else{
                echo "<script>alert('Data berhasil ditambah');window.location='../relic.php';</script>";
            }
        }else{
            echo "<script>alert('Eksternsi Gambar hanya jpg / png');window.location='../relic.php';</script>";
        }
    }else{
        $query = "INSERT INTO relic (gambar, set2, set4, nama) VALUES ('$nama_gambar_baru','$set2','$set4','$nama')";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else{
            echo "<script>alert('Data berhasil ditambah');window.location='../admin.php';</script>";
        }
    }
?>
