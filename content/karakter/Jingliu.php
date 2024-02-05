<?php
  include ('../../form/koneksi.php');

  // Query karakter
  $query_karakter = "SELECT * FROM karakter_hsr WHERE nama = 'Jingliu'";
  $result_karakter = mysqli_query($conn, $query_karakter);
  if(!$result_karakter){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  $row_karakter = mysqli_fetch_assoc($result_karakter);

  // Query Lightcone
  $query_lightcone = "SELECT * FROM lightcone_hsr WHERE nama IN 
  ('I Shall Be My Own Sword', 'On the Fall of an Aeon' , 'Brighter Than the Sun' ,'A Secret Vow', 'Under the Blue Sky')";
  $result_lightcone = mysqli_query($conn, $query_lightcone);
  if(!$result_lightcone){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  

  // Query Relic
  $query_relic = "SELECT * FROM relic_hsr WHERE nama IN 
  ('Hunter of Glacial Forest','Genius of Brilliant Stars')";
  $result_relic = mysqli_query($conn, $query_relic);
  if(!$result_relic){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}


  // Query Ornament
  $query_ornament = "SELECT * FROM ornament_hsr WHERE nama IN 
  ('Rutilant Arena','Firmament Frontline: Glamoth')";
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
                      <tittle><?php echo $row_karakter['deskripsi'];?></tittle>

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
                  <h2 class="character-info-build-section-title"> Best Ornaments</h2>
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
                <h2 class="character-info-build-section-title">Best LightCone</h2>
                <div class="character-info-gear">

                <?php
                         $no_lightcone = 1;
                         while ($row_lightcone = mysqli_fetch_assoc($result_lightcone)) {
                    ?>
                  <div class="character-info-weapon">
                    <div class="character-info-weapon-content">
                    <img class="character-info-weapon-icon rarity-5" src="../../form/dashboard/admin/LightCones/<?php echo $row_lightcone['gambar']?>" alt="<?php echo $row_lightcone['nama']?>" />
                            <div class="character-info-weapon-name"><?php echo $row_lightcone['nama']?></div>
                    </div>
                  </div>
                  <?php
                  $no_ornament++;
                  }
                  ?>

                </div>
              </div>
        </div>
        <div class="character-info-build">
                    <div class="character-info-build-section">
                      <h2 class="character-info-build-section-title">Best Stats</h2>
                      <div class="character-info-stats">
                        <div class="character-info-stats-item"><b>Body:</b> CRIT DMG</div>
                        <div class="character-info-stats-item"><b>Feet:</b> ATK% / Speed </div>
                        <div class="character-info-stats-item"><b>Planar Sphere:</b> Ice DMG</div>
                        <div class="character-info-stats-item"><b>Link Rope:</b>ATK%</div>
                      </div>
                    </div>
                    <div class="character-info-build-section">
                      <h2 class="character-info-build-section-title">Best Substats</h2>
                      <div class="character-info-stats">
                        <div class="character-info-stats-item">CRIT Rate / CRIT DMG</div>
                        <div class="character-info-stats-item">ATK%</div>
                        <div class="character-info-stats-item">Speed</div>
                        <div class="character-info-stats-item">Break Effect</div>
                      </div>
                    </div>
                  </div>

        <div class="character-info-skills" id="skills">
          <h2 class="character-info-category">Skills</h2>
            <div class="character-info-skill">
            <div class="character-info-skill-header">
            <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Normal.png"
                        alt="Lucent Moonglow"
                      />
                      <h3 class="character-info-skill-title">Basic ATK</h3>
            </div>
            <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Lucent Moonglow</h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                        Memberikan Ice DMG setara dengan 50% ATK Jingliu ke satu musuh.
                      </p>
                    </div>
        </div>

        <div class="character-info-skill">
          <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_BP.png"
                        alt="Transcendent Flash"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
          </div>
          <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Transcendent Flash
                      </h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                      Serangan Tunggal Memberikan DMG Es sebesar 100% dari ATK Jingliu ke satu musuh dan mendapatkan 1 tumpukan Syzygy. Ledakan Memberikan DMG Es sebesar 125% dari ATK Jingliu ke satu musuh, dan memberikan DMG Es sebesar 62,5% dari ATK Jingliu ke musuh yang berdekatan. Mengkonsumsi 1 tumpukan Syzygy. Menggunakan kemampuan ini tidak menghabiskan Poin Skill.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Passive.png"
                        alt="Crescent Transmigration"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                </div>
                <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Crescent Transmigration
                      </h4>
                      <h5 class="character-info-skill-type">Enhance</h5>
                      <p class="character-info-skill-description">
                      Ketika Jingliu memiliki 2 tumpukan Syzygy, dia memasuki keadaan Spectral Transmigration dengan Aksinya Maju sebesar 100% dan tingkat CRIT-nya meningkat sebesar 40%. Kemudian, Skill Jingliu “Transcendent Flash” menjadi ditingkatkan dan berubah menjadi “Moon On Glacial River,” dan menjadi satu-satunya kemampuan yang bisa dia gunakan dalam pertempuran. Ketika Jingliu menggunakan serangan dalam keadaan Spectral Transmigration, dia mengkonsumsi HP dari semua sekutu lain sebesar 4% dari Max HP mereka masing-masing (ini tidak bisa mengurangi HP sekutu menjadi lebih rendah dari 1). ATK Jingliu meningkat sebesar 540% dari total HP yang dikonsumsi dari semua sekutu dalam serangan ini, dibatasi pada 90% dari ATK dasarnya, bertahan hingga serangan saat ini berakhir. Jingliu tidak bisa memasuki keadaan Spectral Transmigration lagi hingga keadaan Spectral Transmigration saat ini berakhir. Syzygy bisa ditumpuk hingga 3 kali. Ketika tumpukan Syzygy menjadi 0, Jingliu akan keluar dari keadaan Spectral Transmigration.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Maze.png"
                        alt="Shine of Truth"
                      />
                      <h3 class="character-info-skill-title">Technique</h3>
                </div>
                <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Shine of Truth</h4>
                      <h5 class="character-info-skill-type">Impair</h5>
                      <p class="character-info-skill-description">
                      Setelah menggunakan Teknik ini, menciptakan dimensi di sekitar Jingliu yang bertahan selama 20 detik, dan semua musuh dalam dimensi ini akan menjadi Beku. Setelah memasuki pertempuran dengan musuh dalam dimensi, Jingliu segera meregenerasi 15 Energi dan mendapatkan 1 tumpukan Syzygy, dengan peluang dasar 100% untuk membekukan target musuh selama 1 giliran. Saat Beku, target musuh tidak dapat melakukan aksi, dan menerima DMG Tambahan Es sebesar 80% dari ATK Jingliu di awal setiap giliran. Hanya 1 dimensi yang dibuat oleh sekutu yang dapat ada pada saat yang sama.
                      </p>
                    </div>
          </div>


          <div class="character-info-skill">
            <div class="character-info-skill-header">
                <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Ultra_on.png"
                        alt="Florephemeral Dreamflux"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Florephemeral Dreamflux
                      </h4>
                      <h5 class="character-info-skill-type">Blast</h5>
                      <p class="character-info-skill-description">
                      Memberikan DMG Es sebesar 180% dari ATK Jingliu ke satu musuh, dan memberikan DMG Es sebesar 90% dari ATK Jingliu ke musuh yang berdekatan. Mendapatkan 1 tumpukan Syzygy setelah serangan berakhir.
                      </p>
                    </div>
          </div>
          </div>

          <div class="character-info-skills" id="eidolons">
                  <h2 class="character-info-category">Eidolon</h2>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3005_1.png"
                        alt="Moon Crashes Tianguan Gate"
                      />
                      <h3 class="character-info-skill-title">Eidolon 1</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Moon Crashes Tianguan Gate
                      </h4>
                      <p class="character-info-skill-description">
                      Ketika menggunakan Ultimate atau Skill yang Ditingkatkan, DMG CRIT Jingliu meningkat sebesar 24% selama 1 giliran. Jika hanya satu target musuh yang diserang, target tersebut akan mendapatkan tambahan Ice DMG sebesar 100% dari ATK Jingliu.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3005_2.png"
                        alt="Crescent Shadows Qixing Dipper"
                      />
                      <h3 class="character-info-skill-title">Eidolon 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Crescent Shadows Qixing Dipper
                      </h4>
                      <p class="character-info-skill-description">
                      Setelah menggunakan Ultimate, meningkatkan DMG Skill yang Ditingkatkan berikutnya sebesar 80%.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3005_3.png"
                        alt="Halfmoon Gapes Mercurial Haze"
                      />
                      <h3 class="character-info-skill-title">Eidolon 3</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Halfmoon Gapes Mercurial Haze
                      </h4>
                      <p class="character-info-skill-description">
                        Ultimate Lv. +2, Hingga Maksimal Lv. 15. Talent Lv.
                        +2, Hingga Maksimal Lv. 15.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3005_4.png"
                        alt="Lunarlance Shines Skyward Dome"
                      />
                      <h3 class="character-info-skill-title">Eidolon 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Lunarlance Shines Skyward Dome
                      </h4>
                      <p class="character-info-skill-description">
                      Selama keadaan Spectral Transmigration, ATK yang diperoleh dari mengkonsumsi HP sekutu tambahan ditingkatkan sebesar 90% dari total HP yang dikonsumsi dari seluruh tim. Batas untuk ATK yang diperoleh dengan cara ini juga meningkat sebesar 30%.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3005_5.png"
                        alt="Night Shades Astral Radiance"
                      />
                      <h3 class="character-info-skill-title">Eidolon 5</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Night Shades Astral Radiance
                      </h4>
                      <p class="character-info-skill-description">
                        Skill Lv. +2, Hingga Maksimal Lv. 15. Basic ATK Lv.
                        +1, Hingga Maksimal Lv. 10.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3005_6.png"
                        alt="Eclipse Hollows Corporeal Husk"
                      />
                      <h3 class="character-info-skill-title">Eidolon 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Eclipse Hollows Corporeal Husk
                      </h4>
                      <p class="character-info-skill-description">
                      Ketika Jingliu memasuki keadaan Spectral Transmigration, batas tumpukan Syzygy meningkat sebanyak 1, dan Jingliu mendapatkan 1 tumpukan Syzygy. Selama dia berada dalam keadaan Spectral Transmigration, DMG CRIT-nya meningkat sebesar 50%.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="character-info-skills" id="traces">
                  <h2 class="character-info-category">Traces</h2>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Rank1.png"
                        alt="Deathrealm"
                      />
                      <h3 class="character-info-skill-title">Ascension 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Deathrealm</h4>
                      <p class="character-info-skill-description">
                      Saat dalam keadaan Spectral Transmigration, meningkatkan Effect RES sebesar 35%.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Rank2.png"
                        alt="Sword Champion"
                      />
                      <h3 class="character-info-skill-title">Ascension 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Sword Champion</h4>
                      <p class="character-info-skill-description">
                      Setelah menggunakan Transcendent Flash, Aksi selanjutnya adalah Advanced Forward sebesar 10%.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Ultra.png"
                        alt="Frost Wraith"
                      />
                      <h3 class="character-info-skill-title">Ascension 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Frost Wraith</h4>
                      <p class="character-info-skill-description">
                      Saat berada dalam kondisi Spectral Transmigration, meningkatkan Ultimate DMG sebesar 20%.
                      </p>
                    </div>
                  </div>
                </div>

                
                <div class="character-info-conclusion">
                <h2 class="character-info-about">Prioritas Upgrade Skill</h2>
                <div class="character-info-kelebihan" style="background-color: #1a237e;">
                <div class="row text-center" >
                  <div class="col" style="margin-top:3vh;" >
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_BP.png"
                        alt="Transcendent Flash"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Passive.png"
                        alt="Crescent Transmigration"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Ultra_on.png"
                        alt="Florephemeral Dreamflux"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3005_Normal.png"
                        alt="Lucent Moonglow"
                      />
                      <h3 class="character-info-skill-title">Basic ATK</h3>
                  </div>
                </div>
                </div>
               </div>
                  
               <div class="character-info-conclusion">
               <h2 class="character-info-about">Guide Video</h2>
               <div class="character-info-kelebihan" style="background-color: #1a237e;">
                  <div class="row">
                  <iframe width="700" height="600" src="https://www.youtube.com/embed/OStpMi1oCro?si=CWehoeqLWaIu0yxJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
               </div>

</div>


    </main>
</section>
</body>
</html>