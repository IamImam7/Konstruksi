<?php
    include '../../../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $path_name = $_POST['path_name'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE karakter_hsr SET nama = '$nama', path_name = '$path_name', deskripsi = '$deskripsi' WHERE id = '$id'";
    $result = mysqli_query($conn,$query);

    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else {
        if(!empty($_FILES['path_']['name'])){
            $path = $_FILES['path_']['name'];
            $x_path = explode('.',$path);
            $ekstensi_path = strtolower(end($x_path));
            $file_tmp_path = $_FILES['path_']['tmp_name'];
            $nama_gambar_path = rand(1,999) . '-' .$path;
            if(in_array($ekstensi_path, array('png','jpg'))){
                move_uploaded_file($file_tmp_path, '../karakter/path/'.$nama_gambar_path);
                $query = "UPDATE karakter_hsr SET path_ = '$nama_gambar_path' WHERE id = '$id'";
                $result = mysqli_query($conn,$query);
            }
        }
        // Repeat the above process for 'elemen', 'icon', and 'fulimage'
        if(!empty($_FILES['elemen']['name'])){
            $elemen = $_FILES['elemen']['name'];
            $x_elemen = explode('.',$elemen);
            $ekstensi_elemen = strtolower(end($x_elemen));
            $file_tmp_elemen = $_FILES['elemen']['tmp_name'];
            $nama_gambar_elemen = rand(1,999) . '-' .$elemen;
            if(in_array($ekstensi_elemen, array('png','jpg'))){
                move_uploaded_file($file_tmp_elemen, '../karakter/path/'.$nama_gambar_elemen);
                $query = "UPDATE karakter_hsr SET path_ = '$nama_gambar_path' WHERE id = '$id'";
                $result = mysqli_query($conn,$query);
            }
        }
        if(!empty($_FILES['icon']['name'])){
            $icon = $_FILES['icon']['name'];
            $x_icon = explode('.',$icon);
            $ekstensi_icon = strtolower(end($x_icon));
            $file_tmp_icon = $_FILES['icon']['tmp_name'];
            $nama_gambar_icon = rand(1,999) . '-' .$icon;
            if(in_array($ekstensi_icon, array('png','jpg'))){
                move_uploaded_file($file_tmp_icon, '../karakter/icon/'.$nama_gambar_icon);
                $query = "UPDATE karakter_hsr SET icon = '$nama_gambar_icon' WHERE id = '$id'";
                $result = mysqli_query($conn,$query);
            }
        }
        if(!empty($_FILES['fulimage']['name'])){
            $fulimage = $_FILES['fulimage']['name'];
            $x_fulimage = explode('.',$fulimage);
            $ekstensi_fulimage = strtolower(end($x_fulimage));
            $file_tmp_fulimage = $_FILES['fulimage']['tmp_name'];
            $nama_gambar_fulimage = rand(1,999) . '-' .$fulimage;
            if(in_array($ekstensi_fulimage, array('png','jpg'))){
                move_uploaded_file($file_tmp_fulimage, '../karakter/full_image/'.$nama_gambar_fulimage);
                $query = "UPDATE karakter_hsr SET fulimage = '$nama_gambar_fulimage' WHERE id = '$id'";
                $result = mysqli_query($conn,$query);
            }
        }

        echo "<script>alert('Data berhasil diubah.');window.location='../character.php';</script>";
    }
?>
