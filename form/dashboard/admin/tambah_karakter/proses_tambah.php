<?php
    include '../../../koneksi.php';

    $nama = $_POST['nama'];
    $path = $_FILES['path_']['name'];
    $elemen = $_FILES['elemen']['name'];
    $icon = $_FILES['icon']['name'];
    $fulimage = $_FILES['fulimage']['name'];
    $deskripsi = $_POST['deskripsi'];

    if ($path != "" && $elemen != "" && $icon != "" && $fulimage != "") {
        $ekstensi_path_allowed = array('png', 'jpg');
        $ekstensi_elemen_allowed = array('png', 'jpg');
        $ekstensi_icon_allowed = array('png', 'jpg');
        $ekstensi_full_allowed = array('png', 'jpg');

        $x_path = explode('.', $path);
        $x_elemen = explode('.', $elemen);
        $x_icon = explode('.', $icon);
        $x_full = explode('.', $fulimage);

        $ekstensi_path = strtolower(end($x_path));
        $ekstensi_elemen = strtolower(end($x_elemen));
        $ekstensi_icon = strtolower(end($x_icon));
        $ekstensi_full = strtolower(end($x_full));

        $file_tmp_path = $_FILES['path_']['tmp_name'];
        $file_tmp_elemen = $_FILES['elemen']['tmp_name'];
        $file_tmp_icon = $_FILES['icon']['tmp_name'];
        $file_tmp_full = $_FILES['fulimage']['tmp_name'];

        if (in_array($ekstensi_path, $ekstensi_path_allowed) &&
            in_array($ekstensi_elemen, $ekstensi_elemen_allowed) &&
            in_array($ekstensi_icon, $ekstensi_icon_allowed) &&
            in_array($ekstensi_full, $ekstensi_full_allowed)
            === true) {
            move_uploaded_file($file_tmp_path, '../karakter/path/' . $path);
            move_uploaded_file($file_tmp_elemen, '../karakter/elemen/' . $elemen);
            move_uploaded_file($file_tmp_icon, '../karakter/icon/' . $icon);
            move_uploaded_file($file_tmp_full, '../karakter/full_image/' . $fulimage);

            $query = "INSERT INTO karakter_hsr (nama , path_, elemen , icon, full_image, deskripsi) VALUES ('$nama','$path','$elemen','$icon','$fulimage','$deskripsi')";

            $result = mysqli_query($conn, $query);

            if (!$result) {
                die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil ditambah');window.location='../character.php';</script>";
            }
        } else {
            echo "<script>alert('Ekstensi Gambar hanya jpg / png');window.location='../character.php';</script>";
        }
    } else {
        $query = "INSERT INTO karakter_hsr (nama , path_, elemen , icon,full_image, deskripsi) VALUES ('$nama','$path','$elemen','$icon','$fulimage','$deskripsi')";

        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Error : " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil ditambah');window.location='../character.php';</script>";
        }
    }
?>
