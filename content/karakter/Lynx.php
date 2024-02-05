<?php
  include ('../../form/koneksi.php');

  // Query karakter
  $query_karakter = "SELECT * FROM karakter_hsr WHERE nama = 'Lynx'";
  $result_karakter = mysqli_query($conn, $query_karakter);
  if(!$result_karakter){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  $row_karakter = mysqli_fetch_assoc($result_karakter);

  // Query Lightcone
  $query_lightcone = "SELECT * FROM lightcone_hsr WHERE nama IN 
  ('Time Waits for No One', 'Post-Op Conversation' , 'Shared Feeling' ,'Quid Pro Quo', 'Night of Fright','Hey, Over Here','Warmth Shortens Cold Nights')";
  $result_lightcone = mysqli_query($conn, $query_lightcone);
  if(!$result_lightcone){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  

  // Query Relic
  $query_relic = "SELECT * FROM relic_hsr WHERE nama IN 
  ('Passerby of Wandering Cloud','Messenger Traversing Hackerspace')";
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
                        <div class="character-info-stats-item"><b>Body:</b> Outgoing Healing Boost</div>
                        <div class="character-info-stats-item"><b>Feet:</b> Speed </div>
                        <div class="character-info-stats-item"><b>Planar Sphere:</b> HP%</div>
                        <div class="character-info-stats-item"><b>Link Rope:</b>HP%</div>
                      </div>
                    </div>
                    <div class="character-info-build-section">
                      <h2 class="character-info-build-section-title">Best Substats</h2>
                      <div class="character-info-stats">
                        <div class="character-info-stats-item">>HP%</div>
                        <div class="character-info-stats-item">Speed</div>
                        <div class="character-info-stats-item">HP</div>
                        <div class="character-info-stats-item">>Effect Res</div>
                      </div>
                    </div>
                  </div>

        <div class="character-info-skills" id="skills">
          <h2 class="character-info-category">Skills</h2>
            <div class="character-info-skill">
            <div class="character-info-skill-header">
            <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Normal.png"
                        alt="Ice Crampon Technique"
                      />
                      <h3 class="character-info-skill-title">Basic ATK</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Ice Crampon Technique
                      </h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                      Memberikan Quantum DMG setara dengan 25% HP Maks karakter ini ke satu musuh.
                      </p>
                    </div>
        </div>

        <div class="character-info-skill">
          <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_BP.png"
                        alt="Salted Camping Cans"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Salted Camping Cans
                      </h4>
                      <h5 class="character-info-skill-type">Restore</h5>
                      <p class="character-info-skill-description">
                      Menerapkan "Survival Response" ke satu sekutu target dan meningkatkan Max HP mereka sebesar 5% dari Max HP Lynx ditambah 50. Jika sekutu target adalah karakter di Path of Destruction atau Preservation, peluang mereka diserang oleh musuh akan sangat meningkat. "Survival Response" berlangsung selama 2 putaran. Mengembalikan HP target sebesar 8% dari Max HP Lynx ditambah 80.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Passive.png"
                        alt="Outdoor Survival Experience"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Outdoor Survival Experience
                      </h4>
                      <h5 class="character-info-skill-type">Restore</h5>
                      <p class="character-info-skill-description">
                      Ketika menggunakan Skill atau Ultimate Lynx, menerapkan Continuous Healing ke sekutu target selama 2 putaran, mengembalikan HP sekutu target sebesar jumlah yang sama dengan 2,4% dari Max HP Lynx ditambah 24 di awal setiap giliran mereka. Jika target memiliki "Survival Response", efek Continuous Healing tambahan mengembalikan HP sebesar jumlah yang sama dengan 3% dari Max HP Lynx ditambah 30.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Maze.png"
                        alt="Chocolate Energy Bar"
                      />
                      <h3 class="character-info-skill-title">Technique</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Chocolate Energy Bar
                      </h4>
                      <h5 class="character-info-skill-type">Restore</h5>
                      <p class="character-info-skill-description">
                      Setelah Lynx menggunakan Tekniknya, di awal pertempuran berikutnya, semua sekutu diberikan efek Continuous Healing dari Talentnya, berlangsung selama 2 turn.
                      </p>
                    </div>
          </div>


          <div class="character-info-skill">
            <div class="character-info-skill-header">
                <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Ultra_on.png"
                        alt="Snowfield First Aid"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Snowfield First Aid
                      </h4>
                      <h5 class="character-info-skill-type">Restore</h5>
                      <p class="character-info-skill-description">
                      Menghilangkan 1 debuff dari semua sekutu dan segera mengembalikan HP mereka masing-masing sebesar jumlah yang sama dengan 9% dari Max HP Lynx + 90.
                      </p>
                    </div>
          </div>
          </div>

          <div class="character-info-skills" id="eidolons">
                  <h2 class="character-info-category">Eidolon</h2>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3004_1.png"
                        alt="Morning of Snow Hike"
                      />
                      <h3 class="character-info-skill-title">Eidolon 1</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Morning of Snow Hike
                      </h4>
                      <p class="character-info-skill-description">
                      Saat menyembuhkan sekutu dengan HP sama dengan atau lebih rendah dari 50%, Outgoing Heal Lynx meningkat sebesar 20%. Efek ini juga bekerja pada Continuous Healing.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3004_2.png"
                        alt="Noon of Portable Furnace"
                      />
                      <h3 class="character-info-skill-title">Eidolon 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Noon of Portable Furnace
                      </h4>
                      <p class="character-info-skill-description">
                      Target dengan "Survival Response" dapat menahan penerapan debuff sebanyak 1 kali.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3004_3.png"
                        alt="Afternoon of Avalanche Beacon"
                      />
                      <h3 class="character-info-skill-title">Eidolon 3</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Afternoon of Avalanche Beacon
                      </h4>
                      <p class="character-info-skill-description">
                        Skill Lv. +2, Hingga Maksimal Lv. 15. Basic ATK Lv.
                        +1, Hingga Maksimal Lv. 10.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3004_4.png"
                        alt="Dusk of Warm Campfire"
                      />
                      <h3 class="character-info-skill-title">Eidolon 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Dusk of Warm Campfire
                      </h4>
                      <p class="character-info-skill-description">
                      Ketika "Survival Response" diperoleh, meningkatkan ATK target sebesar 3% dari Max HP Lynx selama 1 putaran.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3004_5.png"
                        alt="Night of Aurora Tea"
                      />
                      <h3 class="character-info-skill-title">Eidolon 5</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Night of Aurora Tea
                      </h4>
                      <p class="character-info-skill-description">
                        Ultimate Lv. +2, Hingga Maksimal Lv. 15. Talent Lv.
                        +2, Hingga Maksimal Lv. 15.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3004_6.png"
                        alt="Dawn of Explorers' Chart"
                      />
                      <h3 class="character-info-skill-title">Eidolon 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Dawn of Explorers' Chart
                      </h4>
                      <p class="character-info-skill-description">
                      Setelah itu meningkatkan efek peningkatan Max HP dari "Survival Response" sebesar 6% dari Max HP Lynx dan meningkatkan Efek RES sebesar 30%.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="character-info-skills" id="traces">
                  <h2 class="character-info-category">Traces</h2>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Rank1.png"
                        alt="Advance Surveying"
                      />
                      <h3 class="character-info-skill-title">Ascension 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Advance Surveying
                      </h4>
                      <p class="character-info-skill-description">
                      Setelah target dengan "Survival Response" tercapai, Lynx segera memulihkan 2 Energi.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Rank2.png"
                        alt="Exploration Techniques"
                      />
                      <h3 class="character-info-skill-title">Ascension 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Exploration Techniques
                      </h4>
                      <p class="character-info-skill-description">
                      Meningkatkan peluang untuk menahan debuff Crowd Control sebesar 35%.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Ultra.png"
                        alt="Survival in the Extreme"
                      />
                      <h3 class="character-info-skill-title">Ascension 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Survival in the Extreme
                      </h4>
                      <p class="character-info-skill-description">
                      Memperpanjang durasi efek Continuous Healing yang diberikan oleh Talent selama 1 putaran.
                      </p>
                    </div>
                  </div>
                </div>

                
                <div class="character-info-conclusion">
                <h2 class="character-info-about">Prioritas Upgrade Skill</h2>
                <div class="character-info-kelebihan" style="background-color: #1a237e;">
                <div class="row text-center" >
                  <div class="col" style="margin-top:3vh;" >
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Ultra_on.png"
                        alt="Snowfield First Aid"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_BP.png"
                        alt="Salted Camping Cans"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Passive.png"
                        alt="Outdoor Survival Experience"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3004_Normal.png"
                        alt="Ice Crampon Technique"
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
                  <iframe width="600" height="600" src="https://www.youtube.com/embed/a_Aa5NlG2YM?si=dSR7RsiVhDygOA1O" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
               </div>

</div>


    </main>
</section>
</body>
</html>