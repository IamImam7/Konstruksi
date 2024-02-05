<?php
  include ('../../form/koneksi.php');

  // Query karakter
  $query_karakter = "SELECT * FROM karakter_hsr WHERE nama = 'Fu Xuan'";
  $result_karakter = mysqli_query($conn, $query_karakter);
  if(!$result_karakter){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  $row_karakter = mysqli_fetch_assoc($result_karakter);

  // Query Lightcone
  $query_lightcone = "SELECT * FROM lightcone_hsr WHERE nama IN 
  ('Moment of Victory', 'Texture of Memories' , 'Landau Choice' ,'Day One of My New Life','She Already Shut Her Eyes')";
  $result_lightcone = mysqli_query($conn, $query_lightcone);
  if(!$result_lightcone){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  

  // Query Relic
  $query_relic = "SELECT * FROM relic_hsr WHERE nama IN 
  ('Guard of Wuthering Snow')";
  $result_relic = mysqli_query($conn, $query_relic);
  if(!$result_relic){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}


  // Query Ornament
  $query_ornament = "SELECT * FROM ornament_hsr WHERE nama IN 
  ('Fleet of the Ageless','Broken Keel')";
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
                      <?php echo $row_karakter['deskripsi'];?></tittle>

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
                        <div class="character-info-stats-item"><b>Body:</b>HP% </div>
                        <div class="character-info-stats-item"><b>Feet:</b>HP% </div>
                        <div class="character-info-stats-item"><b>Planar Sphere:</b> DEF% </div>
                        <div class="character-info-stats-item"><b>Link Rope:</b> Speed / Energy Regen Rate</div>
                      </div>
                    </div>
                    <div class="character-info-build-section">
                      <h2 class="character-info-build-section-title">Best Substats</h2>
                      <div class="character-info-stats">
                        <div class="character-info-stats-item">HP%</div>
                        <div class="character-info-stats-item">DEF%</div>
                        <div class="character-info-stats-item">Speed</div>
                        <div class="character-info-stats-item">HP</div>
                      </div>
                    </div>
                  </div>

        <div class="character-info-skills" id="skills">
          <h2 class="character-info-category">Skills</h2>
            <div class="character-info-skill">
            <div class="character-info-skill-header">
            <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Normal.png"
                        alt="Novaburst"
                      />
                      <h3 class="character-info-skill-title">Basic ATK</h3>
            </div>
            <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Novaburst</h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                      Memberikan Quantum DMG setara dengan 25% HP Maks Fu Xuan ke satu musuh.
                      </p>
                    </div>
        </div>

        <div class="character-info-skill">
          <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_BP.png"
                        alt="Known by Stars, Shown by Hearts"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
          </div>
          <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Known by Stars, Shown by Hearts
                      </h4>
                      <h5 class="character-info-skill-type">Defense</h5>
                      <p class="character-info-skill-description">
                      Mengaktifkan Matrix of Prescience, yang melaluinya anggota tim lainnya akan Mendistribusikan 65% DMG yang mereka terima (sebelum DMG ini dimitigasi oleh Perisai mana pun) ke Fu Xuan selama 3 giliran. Saat terkena Matrix of Prescience, semua anggota tim mendapatkan efek Knowledge, yang meningkatkan Max HP masing-masing sebesar 3% dari Max HP Fu Xuan, dan meningkatkan CRIT Rate sebesar 6%. Ketika Fu Xuan dikalahkan, Matrix of Prescience akan dihilangkan.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Passive.png"
                        alt="Bleak Breeds Bliss"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                </div>
                <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Bleak Breeds Bliss
                      </h4>
                      <h5 class="character-info-skill-type">Restore</h5>
                      <p class="character-info-skill-description">
                      Selama Fu Xuan masih aktif dalam pertempuran, Misfortune Avoidance diterapkan ke seluruh tim. Dengan Misfortune Avoidance, sekutu menerima 10% DMG lebih sedikit. Ketika HP saat ini Fu Xuan turun menjadi 50% dari Max HP-nya atau kurang, HP Restore akan dipicu untuk Fu Xuan, mengembalikan HP-nya sebesar 80% dari jumlah HP yang saat ini hilang. Efek ini tidak dapat dipicu jika dia menerima pukulan mematikan. Efek ini memiliki 1 hitungan pemicu secara default dan dapat memiliki maksimal 2 hitungan pemicu.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Maze.png"
                        alt="Of Fortune Comes Fate"
                      />
                      <h3 class="character-info-skill-title">Technique</h3>
                </div>
                <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Of Fortune Comes Fate
                      </h4>
                      <h5 class="character-info-skill-type">Defense</h5>
                      <p class="character-info-skill-description">
                      Setelah Teknik digunakan, semua anggota tim menerima Barrier, bertahan selama 20 detik. Barrier ini dapat memblokir semua serangan musuh, dan tim tidak akan masuk pertempuran saat diserang. Memasuki pertempuran saat Barrier aktif akan membuat Fu Xuan secara otomatis mengaktifkan Matrix of Prescience di awal pertempuran, bertahan selama 2 giliran.
                      </p>
                    </div>
          </div>


          <div class="character-info-skill">
            <div class="character-info-skill-header">
                <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Ultra_on.png"
                        alt="Woes of Many Morphed to One"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Woes of Many Morphed to One
                      </h4>
                      <h5 class="character-info-skill-type">AoE ATK</h5>
                      <p class="character-info-skill-description">
                      Menimbulkan Quantum DMG setara dengan 60% HP Maks Fu Xuan ke semua musuh dan memperoleh 1 hitungan pemicu untuk efek Pemulihan HP yang diberikan oleh Talent Fu Xuan..
                      </p>
                    </div>
          </div>
          </div>

          <div class="character-info-skills" id="eidolons">
                  <h2 class="character-info-category">Eidolon</h2>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3003_1.png"
                        alt="Dominus Pacis"
                      />
                      <h3 class="character-info-skill-title">Eidolon 1</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Dominus Pacis</h4>
                      <p class="character-info-skill-description">
                        Efek The Knowledge effect meningkatkan CRIT DMG sebesar 30%..
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3003_2.png"
                        alt="Optimus Felix"
                      />
                      <h3 class="character-info-skill-title">Eidolon 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Optimus Felix</h4>
                      <p class="character-info-skill-description">
                      Jika ada anggota tim yang terkena serangan mematikan saat Matrix of Prescience aktif, maka semua sekutu yang terkena serangan mematikan selama aksi ini tidak akan tumbang, dan 70% HP Maks mereka akan segera dipulihkan. Efek ini dapat terpicu 1 kali per pertempuran.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3003_3.png"
                        alt="Apex Nexus"
                      />
                      <h3 class="character-info-skill-title">Eidolon 3</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Apex Nexus</h4>
                      <p class="character-info-skill-description">
                        Skill Lv. +2,  maksimum hingga Lv. 15. Talent ATK Lv.
                        +2, Maksimum hingga Lv. 15.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3003_4.png"
                        alt="Fortuna Stellaris"
                      />
                      <h3 class="character-info-skill-title">Eidolon 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Fortuna Stellaris
                      </h4>
                      <p class="character-info-skill-description">
                      Saat sekutu lain di bawah Matrix of Prescience diserang, Fu Xuan memulihkan 5 Energi.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3003_5.png"
                        alt="Arbiter Primus"
                      />
                      <h3 class="character-info-skill-title">Eidolon 5</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Arbiter Primus</h4>
                      <p class="character-info-skill-description">
                        Ultimate Lv. +2, Maksimal hingga Lv. 15. Basic ATK
                        Lv. +1, Maksimal Lv. 10.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3003_6.png"
                        alt="Omnia Vita"
                      />
                      <h3 class="character-info-skill-title">Eidolon 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Omnia Vita</h4>
                      <p class="character-info-skill-description">
                      Setelah Matrix of Prescience diaktifkan, ia akan menghitung total HP yang hilang seluruh anggota tim dalam pertempuran saat ini. DMG Ultimate Fu Xuan akan meningkat sebesar 200% dari jumlah HP yang hilang. Penghitungan ini juga dibatasi hingga 120% dari HP Maks Fu Xuan dan nilai penghitungan akan diatur ulang dan diakumulasikan kembali setelah Ultimate Fu Xuan digunakan.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="character-info-skills" id="traces">
                  <h2 class="character-info-category">Traces</h2>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Rank1.png"
                        alt="Taiyi, the Macrocosmic"
                      />
                      <h3 class="character-info-skill-title">Ascension 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Taiyi, the Macrocosmic
                      </h4>
                      <p class="character-info-skill-description">
                      Saat Matrix of Prescience aktif, Fu Xuan akan meregenerasi 20 Energi ekstra saat dia menggunakan Skillnya.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Rank2.png"
                        alt="Dunjia, the Metamystic"
                      />
                      <h3 class="character-info-skill-title">Ascension 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Dunjia, the Metamystic
                      </h4>
                      <p class="character-info-skill-description">
                      Saat Ultimate Fu Xuan digunakan, menyembuhkan semua sekutu lainnya dengan jumlah yang setara dengan 5% dari Max HP Fu Xuan + 133.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Ultra.png"
                        alt="Liuren, the Sexagenary"
                      />
                      <h3 class="character-info-skill-title">Ascension 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Liuren, the Sexagenary
                      </h4>
                      <p class="character-info-skill-description">
                      Jika musuh target menerapkan debuff Crowd Control ke sekutu saat Matrix of Prescience aktif, semua sekutu akan bertahan dari semua debuff Crowd Control yang diterapkan oleh target musuh selama aksi saat ini. Efek ini hanya dapat dipicu satu kali. Ketika Matrix of Prescience diaktifkan kembali, berapa kali efek ini dapat dipicu akan diatur ulang.
                      </p>
                    </div>
                  </div>
                </div>

                
                <div class="character-info-conclusion">
                <h2 class="character-info-about">Prioritas Upgrade Skill</h2>
                <div class="character-info-kelebihan" style="background-color: #1a237e;">
                <div class="row text-center" >
                  <div class="col" style="margin-top:3vh;" >
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Passive.png"
                        alt="Bleak Breeds Bliss"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_BP.png"
                        alt="Known by Stars, Shown by Hearts"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Ultra_on.png"
                        alt="Woes of Many Morphed to One"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3003_Normal.png"
                        alt="Novaburst"
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
                  <iframe width="700" height="600" src="https://www.youtube.com/embed/c19GiYmcpZQ?si=vUQL_1eE1Y1nAmhB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
               </div>

</div>


    </main>
</section>
</body>
</html>