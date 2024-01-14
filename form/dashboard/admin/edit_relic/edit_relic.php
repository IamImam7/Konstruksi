<?php
    include '../../../koneksi.php';

    if (isset($_GET['id'])){
        $id = ($_GET["id"]);

        $query = "SELECT * FROM relic_hsr WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            die ("Query Error: ".mysqli_errno($conn).
            " - ".mysqli_error($conn));
        }
        $data = mysqli_fetch_assoc($result);

        if (!count($data)){
            echo "<script>alert('Data tidak ditemukan pada database');window.location='../relic.php';</script>";
        }
    } else{
        echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
    }
?>
<html>
  <head>
    <title>Edit Relic</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Relic <?php echo $data['nama']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Relic</label>
          <input type="text" name="nama" value="<?php echo $data['nama']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Gambar Relic</label>
          <img src="../Relics/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
        </div>
        <div>
          <label>2 Set</label>
         <input type="text" name="set2" value="<?php echo $data['set2']; ?>" />
        </div>
        <div>
          <label>4 Set</label>
         <input type="text" name="set4" required=""value="<?php echo $data['set4']; ?>" />
        </div>
        
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>