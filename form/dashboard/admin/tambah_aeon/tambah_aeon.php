<?php
    include ('../../../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input</title>
    <style>
        *{
            font-family: roboto;
        }
        h1{
            text-transform: uppercase;
            color: #333;
        }
        .base{
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background-color: bisque;
        }
        label{
            margin-top: 10px;
            float: left;
            text-align: left;
            width:100%;
        }
        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: ghostwhite;
            border: 2px solid #ccc;
            outline-color: chartreuse;
        }
        button{
            background-color: aquamarine;
            color: black;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center><h1>Tambah Aeon</h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Nama Aeon</label>
            <input type="text" name="nama" autofocus="" required="" />
        </div>

        <div>
            <label>Gambar Aeon</label>
            <input type="file" name="gambar_aeon" required=""  />
        </div>

        <div>
            <label>Path Aeon</label>
            <input type="text" name="path_" />
        </div>
        <div>
            <label>Icon Path</label>
            <input type="file" name="gambar_path" required=""  />
        </div>
        <div>
            <label>Deskripsi Aeon</label>
            <textarea name="deskripsi_aeon"></textarea>
        </div>

        <div>
            <label>Deskripsi Path</label>
            <textarea name="deskripsi_path"></textarea>
        </div>

        <div>
            <label>Gameplay Path</label>
            <textarea name="gameplay_path"></textarea>
        </div>

        <div>
            <button type="submit">Simpan</button>
        </div>

    </section>
    </form>
</body>
</html>