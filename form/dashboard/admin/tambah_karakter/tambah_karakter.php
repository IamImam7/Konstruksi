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
    <center><h1>Tambah Karakter</h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Nama </label>
            <input type="text" name="nama" autofocus="" required="" />
        </div>

        <div>
            <label>Path</label>
            <input type="file" name="path_" />
        </div>
        <div>
            <label>Nama Path</label>
            <input type="text" name="path_name" />
        </div>

        <div>
            <label>Elemen</label>
            <input type="file" name="elemen" required=""  />
        </div>


        <div>
            <label>Icon</label>
            <input type="file" name="icon" />
        </div>
        <div>
            <label>Full Image</label>
            <input type="file" name="fulimage" />
        </div>

        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" autofocus="" required=""></textarea>
        </div>

        <div>
            <button type="submit">Simpan</button>
        </div>

    </section>
    </form>
</body>
</html>