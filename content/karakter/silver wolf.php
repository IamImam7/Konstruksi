<?php
  include ('../../form/koneksi.php');

  // Query karakter
  $query_karakter = "SELECT * FROM karakter_hsr WHERE nama = 'Silver Wolf'";
  $result_karakter = mysqli_query($conn, $query_karakter);
  if(!$result_karakter){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  $row_karakter = mysqli_fetch_assoc($result_karakter);

  // Query Lightcone
  $query_lightcone = "SELECT * FROM lightcone_hsr WHERE nama IN 
  ('Before the Tutorial Mission', 'Incessant Rain' , 'In the Name of the World', 'Good Night and Sleep Well', 'Eyes of the Prey')";
  $result_lightcone = mysqli_query($conn, $query_lightcone);
  if(!$result_lightcone){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  

  // Query Relic
  $query_relic = "SELECT * FROM relic_hsr WHERE nama IN 
  ('Genius of Brilliant Stars','Thief of Shooting Meteor')";
  $result_relic = mysqli_query($conn, $query_relic);
  if(!$result_relic){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}


  // Query Ornament
  $query_ornament = "SELECT * FROM ornament_hsr WHERE nama IN 
  ('Pan-Galactic Commercial Enterprise','Talia: Kingdom of Banditry','Space Sealing Station')";
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
                        <div class="character-info-stats-item"><b>Body:</b>Effect Hit Rate / ATK%</div>
                        <div class="character-info-stats-item"><b>Feet:</b>Speed / ATK%</div>
                        <div class="character-info-stats-item"><b>Planar Sphere:</b> Quantum DMG</div>
                        <div class="character-info-stats-item"><b>Link Rope:</b>Energy Regen Rate/ ATK%</div>
                      </div>
                    </div>
                    <div class="character-info-build-section">
                      <h2 class="character-info-build-section-title">Best Substats</h2>
                      <div class="character-info-stats">
                        <div class="character-info-stats-item">Effect Hit Rate</div>
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
            <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Normal.png" alt="System Warning" />
            <h3 class="character-info-skill-title">Basic Attack</h3>
            </div>
          <div class="character-info-skill-body">
            <h4 class="character-info-skill-name">System Warnings</h4>
            <h5 class="character-info-skill-type">Single Target</h5>
            <p class="character-info-skill-description">Memberikan Quantum DMG sebesar 50% dari ATK Silverwolf kepada satu musuh.</p>
          </div>
        </div>

        <div class="character-info-skill">
          <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_BP.png" alt="Allow Changes?" />
                <h3 class="character-info-skill-title">Skill</h3>
          </div>
              <div class="character-info-skill-body">
                <h4 class="character-info-skill-name">Allow Changes?</h4>
                  <h5 class="character-info-skill-type">Impair</h5>
                    <p class="character-info-skill-description">
                    Memiliki 0.75% peluang dasar untuk memberikan 1 Weakness tambahan dengan Tipe yang sama dengan salah 1 rekan tim secara acak pada 1 target musuh dan mengurangi 0.2% DMG RES target musuh terhadap Tipe serangan tersebut selama 2 giliran. Jika Weakness yang ditambahkan adalah Weakness yang sudah dimiliki oleh target musuh, maka tidak akan memicu pengurangan DMG RES terhadap Tipe serangan tersebut. Satu target musuh hanya dapat menerima 1 Weakness dari Silver Wolf. Saat Silver Wolf menambah Weakness lagi pada target musuh yang sama, maka hanya Weakness terbaru yang akan dipertahankan. Memiliki 1% peluang dasar untuk memberi tambahan pengurangan DMG RES seluruh tipe pada target sebesar 7% selama 2 giliran. Mengakibatkan Quantum DMG pada target tersebut sebesar 0.98% ATK Silver Wolf.
                    </p>
                  </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Passive.png" alt="Awaiting System Response..." />
                <h3 class="character-info-skill-title">Talent</h3>
                </div>
                <div class="character-info-skill-body">
                  <h4 class="character-info-skill-name">Awaiting System Response...</h4>
                  <h5 class="character-info-skill-type">Impair</h5>
                <p class="character-info-skill-description">
                Silver Wolf dapat membuat 3 jenis Bug: Mengurangi 5% ATK, mengurangi 4% DEF, mengurangi 3% SPD. Setiap kali Silver Wolf melancarkan serangan, ada 0.6% peluang dasar untuk menanamkan 1 jenis bug secara acak pada target musuh selama 3 putaran.
                </p>
            </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Maze.png" alt="Force Quit Program" />
                  <h3 class="character-info-skill-title">Technique</h3>
                </div>
              <div class="character-info-skill-body">
                <h4 class="character-info-skill-name">Force Quit Program</h4>
                <h5 class="character-info-skill-type"></h5>
                <p class="character-info-skill-description">
               Secara langsung Menyerang Musuh. Setelah memasuki pertarungan, Memberikan Quantum DMG yang setara dengan 80% ATK Silverwolf kepada seluruh Musuh dan mengabaikan Weakness Type dan mengurangi kdkekuatan seluruh musuh.Musuh yang terkena Weakness Broken didalamnya akan mentrigger Quantum Weakness Break Effect
</p>
              </div>
          </div>


          <div class="character-info-skill">
            <div class="character-info-skill-header">
                <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Ultra_on.png" alt="User Banned"  />
                    <h3 class="character-info-skill-title">Ultimate</h3>
                    </div>
                  <div class="character-info-skill-body">
                    <h4 class="character-info-skill-name">User Banned</h4>
                    <h5 class="character-info-skill-type">Impair</h5>
                      <p class="character-info-skill-description">Memiliki 0.85% peluang dasar untuk mengurangi 36% DEF target musuh selama 3 giliran. Di saat yang bersamaan, mengakibatkan Quantum DMG sebesar 2.28% ATK Silver Wolf pada target tersebut.</p>
              </div>
          </div>
          </div>

          <div class="character-info-skills" id="eidolons">
                  <h2 class="character-info-category">Eidolon</h2>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Rank1.png" alt="Social Engineering"/>
                      <h3 class="character-info-skill-title">Eidolon 1</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Social Engineering</h4>
                      <p class="character-info-skill-description">Setelah Silver Wolf melancarkan Ultimate untuk menyerang target musuh, setiap 1 efek Debuff yang dimiliki target musuh akan memulihkan 7 Energy Silver Wolf. Efek ini dapat dipicu maksimal 5 kali setiap kali melancarkan Ultimate.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Rank2.png" alt="Zombie Network"  />
                      <h3 class="character-info-skill-title">Eidolon 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Zombie Network</h4>
                      <p class="character-info-skill-description">Saat target musuh memasuki pertempuran, Effect RES target berkurang 20%.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_BP.png" alt="Payload"/>
                      <h3 class="character-info-skill-title">Eidolon 3</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Payload</h4>
                      <p class="character-info-skill-description">Level Skill +2, maksimal Lv. 15. Level Talent +2, maksimal Lv. 15.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Rank4.png" alt="Bounce Attack" />
                      <h3 class="character-info-skill-title">Eidolon 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Bounce Attack</h4>
                      <p class="character-info-skill-description">Setelah Silver Wolf melancarkan Ultimate untuk menyerang target musuh, setiap 1 efek Debuff yang dimiliki target musuh akan mengakibatkan Quantum DMG tambahan sebesar 20% ATK Silver Wolf. Efek ini dapat dipicu maksimal 5 kali setiap kali melancarkan Ultimate.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Ultra.png" alt="Brute Force Attack" />
                      <h3 class="character-info-skill-title">Eidolon 5</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Brute Force Attack</h4>
                      <p class="character-info-skill-description">Level Ultimate +2, maksimal Lv. 15. Level Basic Attack +1, maksimal Lv. 10.</p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Rank6.png" alt="Overlay Network"   />
                      <h3 class="character-info-skill-title">Eidolon 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Overlay Network</h4>
                      <p class="character-info-skill-description">Setiap 1 status Debuff target musuh akan meningkatkan 20% DMG Silver Wolf pada target tersebut, maksimal hingga 100%.</p>
                    </div>
                  </div>
                </div>

                <div class="character-info-skills" id="traces">
                  <h2 class="character-info-category">Traces</h2>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Generate.png" alt="Generate" />
                      <h3 class="character-info-skill-title">Ascension 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Generate</h4>
                      <p class="character-info-skill-description">
                      Durasi "Bug" bertambah 1 giliran. Setiap ada target musuh yang mengalami Weakness Break, Silver Wolf memiliki 65% peluang dasar untuk menanamkan 1 jenis "Bug" acak pada target tersebut.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Inject.png" alt="Inject"/>
                      <h3 class="character-info-skill-title">Ascension 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Inject</h4>
                      <p class="character-info-skill-description">Saat melancarkan Skill, durasi Weakness yang diberikan pada target musuh akan bertambah 1 giliran.</p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Side Note.png" alt="Side Note" />
                      <h3 class="character-info-skill-title">Ascension 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Side Note</h4>
                      <p class="character-info-skill-description">Saat melancarkan Skill, jika jumlah Debuff target musuh lebih dari atau sama dengan 3, maka efek dari Skill yang mengurangi RES seluruh tipe target akan berkurang ekstra 3% lagi.</p>
                    </div>
                  </div>
                </div>

                
                <div class="character-info-conclusion">
                <h2 class="character-info-about">Prioritas Upgrade Skill</h2>
                <div class="character-info-kelebihan" style="background-color: #1a237e;">
                <div class="row text-center" >
                  <div class="col" style="margin-top:3vh;" >
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_BP.png" alt="Allow Changes?" />
                <h3 class="character-info-skill-title">Skill</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Ultra_on.png" alt="User Banned"  />
                    <h3 class="character-info-skill-title">Ultimate</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Passive.png" alt="Awaiting System Response..." />
                <h3 class="character-info-skill-title">Talent</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_1006_Normal.png" alt="System Warning" />
            <h3 class="character-info-skill-title">Basic Attack</h3>
                  </div>
                </div>
                </div>
               </div>

               <div class="character-info-conclusion">
               <h2 class="character-info-about">Guide Video</h2>
               <div class="character-info-kelebihan" style="background-color: #1a237e;">
                  <div class="row">
                  <iframe width="700" height="600" src="https://www.youtube.com/embed/u3YVMh_Bb9o?si=zs7gz6BMzRZARkYa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
               </div>

</div>


    </main>
</section>
</body>
</html>