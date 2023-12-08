<?php
    include '../../../koneksi.php';

    $nama = $_POST['nama'];
    $path = $_FILES['path_']['name'];
    $elemen = $_FILES['elemen']['name'];
    $icon = $_FILES['icon']['name'];

    if($path != "" && $elemen != "" && $icon != ""){
        $ekstensi_path_allowed = array('png', 'jpg');
        $ekstensi_elemen_allowed = array('png', 'jpg');
        $ekstensi_icon_allowed = array('png', 'jpg');

        $x_path = explode('.', $path);
        $x_elemen = explode('.', $elemen);
        $x_icon = explode('.', $icon);

        $ekstensi_path = strtolower(end($x_path));
        $ekstensi_elemen = strtolower(end($x_elemen));
        $ekstensi_icon = strtolower(end($x_icon));

        $file_tmp_path = $_FILES['path_']['tmp_name'];  
        $file_tmp_elemen = $_FILES['elemen']['tmp_name']; 
        $file_tmp_icon = $_FILES['icon']['tmp_name'];  

        $angka_acak     = rand(1,999);
        $nama_gambar_path = $angka_acak.'-'.$path;
        $nama_gambar_elemen = $angka_acak.'-'.$elemen;
        $nama_gambar_icon = $angka_acak.'-'.$icon;
        if (in_array($ekstensi_path, $ekstensi_path_allowed) && 
    in_array($ekstensi_elemen, $ekstensi_elemen_allowed) && 
    in_array($ekstensi_icon, $ekstensi_icon_allowed)===true) {
            move_uploaded_file($file_tmp_path, '../karakter/path/'.$nama_gambar_path);
            move_uploaded_file($file_tmp_elemen, '../karakter/elemen/'.$nama_gambar_elemen);
            move_uploaded_file($file_tmp_icon, '../karakter/icon/'.$nama_gambar_icon);
            $query = "UPDATE karakter set nama = '$nama', path_ = '$path', elemen = '$elemen', icon = '$icon'";

            $result = mysqli_query($conn, $query);
            
            if(!$result){
                die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else{
                echo "<script>alert('Data berhasil diubah.');window.location='../character.php';</script>";
            }
        }else{
            echo "<script>alert('Eksternsi Gambar hanya jpg / png');window.location='../character.php';</script>";
        }
    }else{
        $query = "UPDATE karakter set nama = '$nama', path_ = '$path', elemen = '$elemen', icon = '$icon'";

        $result = mysqli_query($conn, $query);
        if(!$result){
            die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else{
            echo "<script>alert('Data berhasil ditambah');window.location='../character.php';</script>";
        }
    }
?>
