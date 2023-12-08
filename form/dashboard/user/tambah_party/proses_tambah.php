<?php
    include '../../../koneksi.php';

    $namatim = $_POST['namatim'];
    $karakter1 = $_POST['karakter1'][1];
    $karakter2 = $_POST['karakter2'][1];
    $karakter3 = $_POST['karakter3'][1];
    $karakter4 = $_POST['karakter4'][1];

    $query = "INSERT INTO party (namatim, char1, char2,char3,char4) VALUES ('$namatim','$karakter1','$karakter2','$karakter3','$karakter4')";

    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
    }else{
        echo "<script>alert('Data berhasil ditambah');window.location='../setup.php';</script>";
    }
?>
