<?php
  include ('../../form/koneksi.php');

  // Query karakter
  $query_karakter = "SELECT * FROM karakter_hsr WHERE nama = 'Himeko'";
  $result_karakter = mysqli_query($conn, $query_karakter);
  if(!$result_karakter){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  $row_karakter = mysqli_fetch_assoc($result_karakter);

  // Query Lightcone
  $query_lightcone = "SELECT * FROM lightcone_hsr WHERE nama IN 
  ('Before Dawn', 'Today is Another Peaceful Day' , 'Night on the Milky Way' ,'The Birth of the Self', 'The Seriousness of Breakfast')";
  $result_lightcone = mysqli_query($conn, $query_lightcone);
  if(!$result_lightcone){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  

  // Query Relic
  $query_relic = "SELECT * FROM relic_hsr WHERE nama IN 
  ('Firesmith of Lava-Forging','Musketeer of Wild Wheat','The Ashblazing Grand Duke')";
  $result_relic = mysqli_query($conn, $query_relic);
  if(!$result_relic){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}


  // Query Ornament
  $query_ornament = "SELECT * FROM ornament_hsr WHERE nama IN 
  ('Inert Salsotto','Space Sealing Station')";
  $result_ornament = mysqli_query($conn, $query_ornament);
  if(!$result_ornament){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  
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
    <link rel="stylesheet" href="../../style/index-style.css">
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
        <img src="../../img/index/Honkai-Star-Rail.png"alt="Honkai Star Rail" id="gambar">
    </a>
    <!-- Navbar Menu -->
    <div class="collapse navbar-collapse" >
      <ul class="nav nav-tabs navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../list-karakter.html">Karakter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../list-lightcone.html">Lightcone</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Equipment</a>
            <ul class="dropdown-menu" style="font-size: 20px; font-weight: bold;">
              <li><a class="dropdown-item" href="../list-relic.html">Relic</a></li>
              <li><a class="dropdown-item" href="../list-ornament.html">Ornament</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../status.html">Istilah & Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../basic.html">Basic Gameplay</a>
        </li>
        
      </ul>
      <!-- Sign up and login Navbar -->
      <a href="../forum.html" class="action_btn">Join Forum!</a> 
    <div class="toggle_btn">
    <i class="fa-solid fa-bars"></i>
    </div>
    </div>
  </div>
  
</nav>
</header>
<section class="container-xl" id="detail">
    <main class="content" >
        <div class="row">
          
            <div class="character-info" >
                <div class="character-info-intro">
                <img class="character-info-potrait rounded float-start rarity
                    " src="../../form/dashboard/admin/karakter/full_image/<?php echo $row_karakter['full_image']; ?>" alt="<?php echo $row_karakter['nama']; ?>" style="width:50%;" />
                <div class="character-info-data">
                    <div class="character-info-header">
                    <h1 class="character-info-name" ><?php echo $row_karakter['nama']; ?></h1>
                        <img class="character-info-element" src="../../form/dashboard/admin/karakter/elemen/<?php echo $row_karakter['elemen'];?>" style="width: 60px;"/>
                    </div>
                    <div class="character-info-path" >
                    <img class="character-info-path-icon" src="../../form/dashboard/admin/karakter/path/<?php echo $row_karakter['path_'];?>" alt="<?php echo $row_karakter['path_name'];?>" style="width: 40px;" /><?php echo $row_karakter['path_name'];?>
                    </div>
                    <div class="character-info-quotes">
                      <tittle>
                      <?php echo $row_karakter['deskripsi'];?>
                    </tittle>

                    </div>
                </div>
              </div>
              </div>
              
              <div class="character-info-build">
                <div class="character-info-build-section third">
                <h2 class="character-info-build-section-title">Rekomendasi Relics</h2>
                <div class="character-info-gear">

                <?php
                  $no = 1;
                  while ($row_relic = mysqli_fetch_assoc($result_relic)) 
                  {
                ?>
                  <div class="character-info-weapon">
                    <div class="character-info-weapon-rank"><?php echo $no;?></div>
                      <div class="character-info-weapon-content">
                          <img class="character-info-weapon-icon rarity-undefined" src="../../form/dashboard/admin/Relics/<?php echo $row_relic['gambar'];?>" />
                            <div class="character-info-weapon-name"><?php echo $row_relic['nama'];?></div>
                    <div class="character-info-weapon-count">4</div>
                  </div>
                  </div>
                  <?php
                  $no++;
                }
                  ?>

                </div>
                </div>
                <div class="character-info-build-section third">
                  <h2 class="character-info-build-section-title">Rekomendasi Ornaments</h2>
                  <div class="character-info-gear">

                    <?php
                         $no_ornament = 1;
                         while ($row_ornament = mysqli_fetch_assoc($result_ornament)) {
                    ?>
                    <div class="character-info-weapon">
                     <div class="character-info-weapon-rank"><?php echo $no_ornament; ?></div>
                     <div class="character-info-weapon-content">
                            <img class="character-info-weapon-icon rarity-undefined" src="../../form/dashboard/admin/Ornaments/<?php echo $row_ornament['gambar'];?>" alt="<?php echo $row_ornament['nama'];?>" />
                            <div class="character-info-weapon-name"><?php echo $row_ornament['nama'];?></div>
                            <div class="character-info-weapon-count">2</div>
                    </div>
                  </div>
                  <?php
                  $no_ornament++;
                  }
                  ?>
                </div>
              </div>
              <div class="character-info-build-section third">
                <h2 class="character-info-build-section-title">Rekomendasi LightCone</h2>
                <div class="character-info-gear">

                <?php
                         
                         while ($row_lightcone = mysqli_fetch_assoc($result_lightcone)) {
                    ?>
                  <div class="character-info-weapon">
                    <div class="character-info-weapon-content">
                    <img class="character-info-weapon-icon rarity-5" src="../../form/dashboard/admin/LightCones/<?php echo $row_lightcone['gambar']?>" alt="<?php echo $row_lightcone['nama']?>" />
                            <div class="character-info-weapon-name"><?php echo $row_lightcone['nama']?></div>
                    </div>
                  </div>
                  <?php
                  }
                  ?>

                </div>
              </div>
        </div>
        <div class="character-info-build">
                    <div class="character-info-build-section">
                      <h2 class="character-info-build-section-title">Best Stats</h2>
                      <div class="character-info-stats">
                        <div class="character-info-stats-item"><b>Body:</b>CRIT Rate / CRIT DMG / Effect Hit Rate</div>
                        <div class="character-info-stats-item"><b>Feet:</b>Speed </div>
                        <div class="character-info-stats-item"><b>Planar Sphere:</b> Fire DMG</div>
                        <div class="character-info-stats-item"><b>Link Rope:</b>Energy Regen Rate / ATK%</div>
                      </div>
                    </div>
                    <div class="character-info-build-section">
                      <h2 class="character-info-build-section-title">Best Substats</h2>
                      <div class="character-info-stats">
                        <div class="character-info-stats-item">CRIT Rate / CRIT DMG</div>
                        <div class="character-info-stats-item">Speed</div>
                        <div class="character-info-stats-item">ATK%</div>
                        <div class="character-info-stats-item">Break Effect</div>
                      </div>
                    </div>
                  </div>

        <div class="character-info-skills" id="skills">
          <h2 class="character-info-category">Skills</h2>
            <div class="character-info-skill">
            <div class="character-info-skill-header">
            <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Normal.png" alt="Sawblade Tuning" />
            <h3 class="character-info-skill-title">Basic Attack</h3>
            </div>
          <div class="character-info-skill-body">
            <h4 class="character-info-skill-name">Sawblade Tuning</h4>
            <h5 class="character-info-skill-type">Single Target</h5>
            <p class="character-info-skill-description">Memberikan Fire DMG sebesar 50% dari ATK Himeko kepada satu musuh.</p>
          </div>
        </div>

        <div class="character-info-skill">
          <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_BP.png" alt="Molten Detonation" />
                <h3 class="character-info-skill-title">Skill</h3>
          </div>
              <div class="character-info-skill-body">
                <h4 class="character-info-skill-name">Molten Detonation</h4>
                  <h5 class="character-info-skill-type">Blast</h5>
                    <p class="character-info-skill-description">
                    Mengakibatkan Fire DMG sebesar 1% ATK Himeko pada 1 target musuh, dan di saat bersamaan mengakibatkan Fire DMG sebesar 0.4% ATK Himeko pada musuh di sekitar target.
                    </p>
                  </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Passive.png" alt="Victory Rush" />
                <h3 class="character-info-skill-title">Talent</h3>
                </div>
                <div class="character-info-skill-body">
                  <h4 class="character-info-skill-name">Victory Rush</h4>
                  <h5 class="character-info-skill-type">AoE ATK</h5>
                <p class="character-info-skill-description">
                Saat ada target musuh yang terkena Weakness Break, Himeko akan memperoleh 1 Charge, maksimal 3. Jika rekan tim melancarkan serangan saat Charge Himeko sudah penuh, Himeko akan segera melancarkan 1 Serangan Lanjutan yang mengakibatkan Fire DMG sebesar 0.7% ATK Himeko pada seluruh musuh dan semua poin Charge akan terkonsumsi. Memperoleh 1 Charge pada saat pertempuran dimulai.
                </p>
            </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Maze.png" alt="Incomplete Combustion" />
                  <h3 class="character-info-skill-title">Technique</h3>
                </div>
              <div class="character-info-skill-body">
                <h4 class="character-info-skill-name">Incomplete Combustion</h4>
                <h5 class="character-info-skill-type">Impair</h5>
                <p class="character-info-skill-description">
                Setelah menggunakan Technique, Himeko akan menciptakan sebuah Dimension khusus selama 15 detik. Setelah memasuki pertempuran bersama musuh dalam Dimension, ada 1% peluang dasar untuk meningkatkan 0.1% Fire DMG yang diterima target musuh selama 2 giliran. Hanya boleh ada 1 efek Dimension ciptaan rekan tim dalam satu waktu.
</p>
              </div>
          </div>


          <div class="character-info-skill">
            <div class="character-info-skill-header">
                <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Ultra_on.png" alt="Heavenly Flare" />
                    <h3 class="character-info-skill-title">Ultimate</h3>
                    </div>
                  <div class="character-info-skill-body">
                    <h4 class="character-info-skill-name">Heavenly Flare</h4>
                    <h5 class="character-info-skill-type">AoE ATK</h5>
                      <p class="character-info-skill-description">Mengakibatkan Fire DMG sebesar 1.38% ATK Himeko pada seluruh musuh. Setiap 1 musuh yang dikalahkan akan memulihkan 5 Energy tambahan untuk Himeko.</p>
              </div>
          </div>
          </div>

          <div class="character-info-skills" id="eidolons">
                  <h2 class="character-info-category">Eidolon</h2>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Rank1.png" alt="Childhood"/>
                      <h3 class="character-info-skill-title">Eidolon 1</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Childhood</h4>
                      <p class="character-info-skill-description">Setelah "Victory Rush" terpicu, meningkatkan 20% SPD Himeko selama 2 giliran.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Rank2.png" alt="Convergence"  />
                      <h3 class="character-info-skill-title">Eidolon 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Convergence</h4>
                      <p class="character-info-skill-description">Meningkatkan 15% DMG pada target musuh yang persentase HP-nya kurang dari atau sama dengan 50%.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_BP.png" alt="Poised"/>
                      <h3 class="character-info-skill-title">Eidolon 3</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Poised</h4>
                      <p class="character-info-skill-description">Level Skill +2, maksimal Lv. 15. Level Basic Attack +1, maksimal Lv. 10.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Rank4.png" alt="Dedication" />
                      <h3 class="character-info-skill-title">Eidolon 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Dedication</h4>
                      <p class="character-info-skill-description">Saat Skill mengakibatkan Weakness Break pada target musuh, Himeko akan memperoleh 1 Charge tambahan.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Ultra.png" alt="Aspiration" />
                      <h3 class="character-info-skill-title">Eidolon 5</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Aspiration</h4>
                      <p class="character-info-skill-description">Level Ultimate +2, maksimal Lv. 15. Level Talent +2, maksimal Lv. 15.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Rank6.png" alt="Trailblaze!"  />
                      <h3 class="character-info-skill-title">Eidolon 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Trailblaze!</h4>
                      <p class="character-info-skill-description">Ultimate mengakibatkan 2 kali DMG tambahan pada musuh secara acak, masing-masing mengakibatkan Fire DMG sebesar 40% dari DMG awal.</p>
                    </div>
                  </div>
                </div>

                <div class="character-info-skills" id="traces">
                  <h2 class="character-info-category">Traces</h2>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/starfire.png" alt="Starfire" />
                      <h3 class="character-info-skill-title">Ascension 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Starfire</h4>
                      <p class="character-info-skill-description">
                      Setelah melancarkan serangan, memiliki 50% peluang dasar untuk membuat target musuh terkena status Burn selama 2 giliran. Saat dalam status Burn, target musuh akan menerima Fire DoT sebesar 30% ATK Himeko setiap kali gilirannya dimulai.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/magma.png" alt="Magma" />
                      <h3 class="character-info-skill-title">Ascension 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Magma</h4>
                      <p class="character-info-skill-description">Meningkatkan 20% Skill DMG pada target musuh dengan status Burn.</p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/benchmark.png" alt="Benchmark" />
                      <h3 class="character-info-skill-title">Ascension 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Benchmark</h4>
                      <p class="character-info-skill-description">Meningkatkan 15% CRIT Rate jika persentase HP saat ini lebih dari atau sama dengan 80%.</p>
                    </div>
                  </div>
                </div>

                
                <div class="character-info-conclusion">
                <h2 class="character-info-about">Prioritas Upgrade Skill</h2>
                <div class="character-info-kelebihan" style="background-color: #1a237e;">
                <div class="row text-center" >
                  <div class="col" style="margin-top:3vh;" >
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Ultra_on.png" alt="Heavenly Flare" />
                    <h3 class="character-info-skill-title">Ultimate</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_BP.png" alt="Molten Detonation" />
                <h3 class="character-info-skill-title">Skill</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Passive.png" alt="Victory Rush" />
                <h3 class="character-info-skill-title">Talent</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1003_Normal.png" alt="Sawblade Tuning" />
            <h3 class="character-info-skill-title">Basic Attack</h3>
                  </div>
                </div>
                </div>
               </div>

               <div class="character-info-conclusion">
               <h2 class="character-info-about">Guide Video</h2>
               <div class="character-info-kelebihan" style="background-color: #1a237e;">
                  <div class="row">
                  <iframe width="700" height="500" src="https://www.youtube.com/embed/dOpk4d6kYtc?si=oJ1sX3zHwd5WeyMM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
               </div>
</div>


    </main>
</section>
</body>
</html>