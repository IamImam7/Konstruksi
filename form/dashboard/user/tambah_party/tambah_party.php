<?php
    include ('../../../koneksi.php');
    $query = "SELECT * FROM karakter ORDER BY id ASC";


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
    <center><h1>Tambah Party</h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
    <section class="base">
        
        <div>
            <label>Nama Tim</label>
            <input type="text" name="namatim" autofocus="" required="" />
        </div>

        <div>
            <label>Karakter 1</label>
            <select name="karakter1">
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
               <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                <?php endwhile; ?>
            </select>
        </div>

        <div>
            <label>Karakter 2</label>
            <select name="karakter2">
               <?php while($row2 = mysqli_fetch_array($result2)):;?>
               <option value="<?php echo $row2[0];?>"><?php echo $row2[1];?></option>
            
                <?php endwhile;?>
            </select>
        </div>

        <div>
            <label>Karakter 3</label>
            <select name="karakter3">
               <?php while($row3 = mysqli_fetch_array($result3)):;?>
               <option value="<?php echo $row3[0];?>"><?php echo $row3[1];?></option>
              
                <?php endwhile;?>
            </select>
        </div>

        <div>
            <label>Karakter 4</label>
            <select name="karakter4">
               <?php while($row4 = mysqli_fetch_array($result4)):;?>
               <option value="<?php echo $row4[0];?>"><?php echo $row4[1];?></option>
                <?php endwhile;?>
            </select>
        </div>

        <div>
            <button type="submit">Simpan</button>
        </div>

    </section>
    </form>
</body>
</html>