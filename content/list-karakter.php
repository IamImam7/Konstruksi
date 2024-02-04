<?php 
  include('../form/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walkthrough Honkai :Star Rail</title>
    <!-- CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index-style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&family=Rubik:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<header>
    <!-- Navbar -->
    <!-- Navbar Gambar -->
  <nav class="navbar fixed-top navbar-expand-lg" >
  <div class="container-fluid">
    <a class="navbar-brand ">
        <img src="../img/index/Honkai-Star-Rail.png"alt="Honkai Star Rail" id="gambar">
    </a>
    <!-- Navbar Menu -->
    <div class="collapse navbar-collapse" >
      <ul class="nav nav-tabs navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.html">Home</a>
        </li>               
        <li class="nav-item">
          <a class="nav-link active" href="content/list-karakter.html">Karakter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content/list-lightcone.php">Lightcone</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"> Equipment</a>
          <ul class="dropdown-menu" style="font-size: 20px; font-weight: bold">
            <li><a class="dropdown-item" href="content/list-relic.php">Relic</a></li>
            <li><a class="dropdown-item" href="content/list-ornament.php">Ornament</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content/status.php">Istilah & Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content/basic.html">Basic Gameplay</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="content/list-tierlist.php">Tierlist</a>
        </li>
      </ul>
      <!-- Sign up and login Navbar -->
      <a href="form/register.php" class="action_btn">Create Tier List</a>
    <div class="toggle_btn">
    <i class="fa-solid fa-bars"></i>
    </div>
    </div>
  </div>
  
</nav>
</header>
<!-- Main -->
<section class="container">
          <div id="nn_skinr"></div>
          <div id="nn_skinl"></div>
          <div class="row row-cols-4" style="background-color:#142535FF;overflow-x: auto;">
            <main class="content">
              <div class="content-header">
                <h1 class="content-title" style="color:#ffffff;">Honkai: Star Rail Characters List</h1>
                <div class="content-filters">  
                </div>
              </div>
              <?php
                    $query = "SELECT * FROM karakter_hsr ORDER BY nama ASC";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                      die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
                    }

                    while ($row = mysqli_fetch_assoc($result)){
              ?>
              <div class="col">
              <div class="character-list " style="flex: 0 0 25%" >
                <a href="karakter/<?php echo $row['nama'];?>.php" class="character-portrait" style="text-decoration: none;"
                  ><img alt="<?php echo $row['nama']; ?>" class="character-icon" src="../form/dashboard/admin/karakter/icon/<?php echo $row['icon'];?>" /><img  class="character-type" src="../form/dashboard/admin/karakter/elemen/<?php echo $row['elemen']; ?>" />
                  <h2 class="character-name" ><?php echo $row['nama'];?></h2></a>
              </div>
              </div>
              <?php 
              }
              ?>
            </main>
          </div>
        </section>
        