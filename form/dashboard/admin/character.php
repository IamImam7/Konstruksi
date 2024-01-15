<?php
    include ('../../koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Dashboard Admin</title>
    <style>
    
    @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
table{
    border: 1px solid #ddeeee;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    margin: 10px auto 10px auto;
    background-color: #00796b;
}
table thead th{
    background-color: lightseagreen;
    border: 1px solid #ddeeee;
    color:#rgba(0,0,0,0.05);
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
table tbody td{
    border: 1px solid #fff;
    color:#fff;
    padding: 10px;
}

a {
    background-color: mediumslateblue;
    color: #ddeeee;
    padding: 10px;
    font-size: 15px;
    text-decoration: none;
}
</style>
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <h2>Admin Page</h2>
        <ul>
        <li><a href="admin.php">Home</a></li>
            <li><a href="aeon.php">Aeon</a></li>
            <li><a href="character.php">Karakter</a></li>
            <li><a href="lightcone.php">Update Lightcone</a></li>
            <li><a href="relic.php">Update Relic</a></li>
            <li><a href="ornament.php" >Update Ornament</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul> 
    </div>
    <div class="main_content">
      <div class="header">Karakter</div>
      <center><a href="tambah_karakter/tambah_karakter.php">+ &nbsp; Tambah Karakter </a></center>
      <div class="info"> 
      <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Path</th>
                        <th>Elemen</th>
                        <th>Icon</th>
                        <th>Full Image</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM karakter_hsr ORDER BY nama ASC";

                $result = mysqli_query($conn, $query);

                if(!$result){
                    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result))
                {
                ?>

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><img src="karakter/path/<?php echo $row['path_']; ?>" style="width: 50px;"></td>
                    <td><img src="karakter/elemen/<?php echo $row['elemen']; ?>" style="width: 50px;"></td>
                    <td><img src="karakter/icon/<?php echo $row['icon']; ?>" style="width: 70px;"></td>
                    <td><img src="karakter/full_image/<?php echo $row['full_image']; ?>" style="width: 150px;"></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    <td>
                        <a href="edit_karakter/edit_karakter.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="delete_karakter/delete_karakter.php?id=<?php echo $row['id'];?>">Delete</a>
                    </td>
                </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>

            </table>
      </div>
    </div>
    </div>
</body>
</html>