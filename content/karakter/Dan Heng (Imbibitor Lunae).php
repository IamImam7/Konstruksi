<?php
  include ('../../form/koneksi.php');

  // Query karakter
  $query_karakter = "SELECT * FROM karakter_hsr WHERE nama = 'Dan Heng (Imbibitor Lunae)'";
  $result_karakter = mysqli_query($conn, $query_karakter);
  if(!$result_karakter){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  $row_karakter = mysqli_fetch_assoc($result_karakter);

  // Query Lightcone
  $query_lightcone = "SELECT * FROM lightcone_hsr WHERE nama IN 
  ('The Unreachable Side', 'On the Fall of an Aeon' , 'Brighter Than the Sun' ,'Something Irreplaceable', 'Nowhere to Run')";
  $result_lightcone = mysqli_query($conn, $query_lightcone);
  if(!$result_lightcone){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  

  // Query Relic
  $query_relic = "SELECT * FROM relic_hsr WHERE nama IN 
  ('Wastelander of Banditry Desert','Musketeer of Wild Wheat')";
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
                        <div class="character-info-stats-item"><b>Planar Sphere:</b> Imaginary DMG</div>
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
            <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Normal.png"
                        alt="Beneficent Lotus"
                      />
                      <h3 class="character-info-skill-title">Basic ATK</h3>
            </div>
            <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Beneficent Lotus
                      </h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                      Serangan Tunggal menggunakan serangan 2-hit dan memberikan Imaginary DMG sebesar 50% dari ATK Dan Heng - Imbibitor Lunae ke satu target musuh.
                       Serangan Tunggal menggunakan serangan 3-hit dan memberikan Imaginary DMG sebesar 130% dari ATK Dan Heng - Imbibitor Lunae ke satu target musuh. 
                       Ledakan menggunakan serangan 5-hit dan memberikan Imaginary DMG sebesar 190% dari ATK Dan Heng - Imbibitor Lunae ke satu target musuh. 
                       Mulai dari hit keempat, secara simultan memberikan Imaginary DMG sebesar 30% dari ATK Dan Heng - Imbibitor Lunae ke target yang berdekatan. 
                       Ledakan menggunakan serangan 7-hit dan memberikan Imaginary DMG sebesar 250% dari ATK Dan Heng - Imbibitor Lunae ke satu target musuh. 
                       Mulai dari hit keempat, secara simultan memberikan Imaginary DMG sebesar 90% dari ATK Dan Heng - Imbibitor Lunae ke target yang berdekatan.
                      </p>
                    </div>
        </div>

        <div class="character-info-skill">
          <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_BP.png"
                        alt="Dracore Libre"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
          </div>
          <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Dracore Libre</h4>
                      <h5 class="character-info-skill-type">Enhance</h5>
                      <p class="character-info-skill-description">
                      Meningkatkan ATK Dasar. 
                      Peningkatan dapat diterapkan hingga 3 kali berturut-turut. 
                      Menggunakan kemampuan ini tidak menghabiskan Poin Skill dan tidak dianggap sebagai penggunaan Skill. 
                      Ditingkatkan sekali, Beneficent Lotus menjadi Transcendence. 
                      Ditingkatkan dua kali, Beneficent Lotus menjadi Divine Spear. 
                      Ditingkatkan 3 kali, Beneficent Lotus menjadi Fulgurant Leap. 
                      Saat menggunakan Divine Spear atau Fulgurant Leap, mulai dari hit keempat, 1 tumpukan “Outroar” diperoleh sebelum setiap hit. 
                      Setiap tumpukan “Outroar” meningkatkan DMG CRIT Dan Heng • Imbibitor Lunae sebesar 6%, hingga maksimal 4 tumpukan. 
                      Tumpukan ini bertahan hingga akhir gilirannya.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Passive.png"
                        alt="Righteous Heart"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                </div>
                <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Righteous Heart</h4>
                      <h5 class="character-info-skill-type">Enhance</h5>
                      <p class="character-info-skill-description">
                      Setelah setiap hit yang diberikan selama serangan, 
                      Dan Heng • Imbibitor Lunae mendapatkan 1 tumpukan Righteous Heart, 
                      meningkatkan DMG-nya sebesar 5%. Efek ini dapat ditumpuk hingga 6 kali, bertahan hingga akhir gilirannya.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Maze.png"
                        alt="Heaven-Quelling Prismadrakon"
                      />
                      <h3 class="character-info-skill-title">Technique</h3>
                </div>
                <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Heaven-Quelling Prismadrakon
                      </h4>
                      <h5 class="character-info-skill-type">Enhance</h5>
                      <p class="character-info-skill-description">
                      Setelah menggunakan Tekniknya, Dan Heng • Imbibitor Lunae memasuki keadaan Leaping Dragon selama 20 detik. Saat berada dalam keadaan Leaping Dragon, menggunakan serangannya memungkinkan dia untuk bergerak maju dengan cepat sejauh jarak tertentu, menyerang semua musuh yang dia sentuh dan memblokir semua serangan yang masuk. Setelah memasuki pertempuran melalui serangan musuh dalam keadaan Leaping Dragon, Dan Heng • Imbibitor Lunae memberikan Imaginary DMG sebesar 120% dari ATK-nya ke semua musuh, dan mendapatkan 1 Squama Sacrosancta.
                      </p>
                    </div>
          </div>


          <div class="character-info-skill">
            <div class="character-info-skill-header">
                <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Ultra_on.png"
                        alt="Azure's Aqua Ablutes All"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Azure's Aqua Ablutes All
                      </h4>
                      <h5 class="character-info-skill-type">Blast</h5>
                      <p class="character-info-skill-description">
                      Menggunakan serangan 3-hit dan memberikan Imaginary DMG sebesar 180% dari ATK Dan Heng • Imbibitor Lunae ke satu target musuh. Pada saat yang sama, memberikan Imaginary DMG sebesar 84% dari ATK Dan Heng • Imbibitor Lunae ke target yang berdekatan. Kemudian, mendapatkan 2 Squama Sacrosancta. Mungkin untuk menahan hingga 3 Squama Sacrosancta, yang dapat digunakan untuk mengimbangi konsumsi poin skill Dan Heng • Imbibitor Lunae. Mengkonsumsi Squama Sacrosancta dianggap setara dengan mengkonsumsi poin skill.
                      </p>
                    </div>
          </div>
          </div>

          <div class="character-info-skills" id="eidolons">
                  <h2 class="character-info-category">Eidolon</h2>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3002_1.png"
                        alt="Tethered to Sky"
                      />
                      <h3 class="character-info-skill-title">Eidolon 1</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Tethered to Sky</h4>
                      <p class="character-info-skill-description">
                      Meningkatkan jumlah Righteous Heart yang dapat ditumpuk sebanyak 4, dan mendapatkan 1 tumpukan tambahan Righteous Heart untuk setiap hit selama serangan.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3002_2.png"
                        alt="Imperium On Cloud Nine"
                      />
                      <h3 class="character-info-skill-title">Eidolon 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Imperium On Cloud Nine
                      </h4>
                      <p class="character-info-skill-description">
                      Setelah menggunakan Ultimate-nya, aksi Dan Heng • Imbibitor Lunae dipercepat maju sebesar 100% dan mendapatkan 1 Squama Sacrosancta tambahan.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3002_3.png"
                        alt="Clothed in Clouds"
                      />
                      <h3 class="character-info-skill-title">Eidolon 3</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Clothed in Clouds
                      </h4>
                      <p class="character-info-skill-description">
                        Skill Lv. +2, Hingga Maksimal Lv. 15. Basic ATK Lv.
                        +1, Hingga Maksimum  Lv. 10.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3002_4.png"
                        alt="Zephyr's Bliss"
                      />
                      <h3 class="character-info-skill-title">Eidolon 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Zephyr's Bliss</h4>
                      <p class="character-info-skill-description">
                      Efek buff yang diberikan oleh Outroar bertahan hingga akhir giliran karakter ini berikutnya.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3002_5.png"
                        alt="Fall is the Pride"
                      />
                      <h3 class="character-info-skill-title">Eidolon 5</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Fall is the Pride
                      </h4>
                      <p class="character-info-skill-description">
                        Ultimate Lv. +2, Hingga Maksimal Lv. 15. Talent Lv.
                        +2, Hingga Maksimal Lv. 15.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3002_6.png"
                        alt="Reign, Returned"
                      />
                      <h3 class="character-info-skill-title">Eidolon 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Reign, Returned</h4>
                      <p class="character-info-skill-description">
                      Setelah sekutu lain menggunakan Ultimate mereka, Imaginary Pen dari serangan Fulgurant Leap berikutnya oleh Dan Heng • Imbibitor Lunae meningkat sebesar 20%. Efek ini dapat ditumpuk hingga 3 kali.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="character-info-skills" id="traces">
                  <h2 class="character-info-category">Traces</h2>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Rank1.png"
                        alt="Star Veil"
                      />
                      <h3 class="character-info-skill-title">Ascension 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Star Veil</h4>
                      <p class="character-info-skill-description">
                      Di awal pertempuran, segera meregenerasi 15 Energi.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Rank2.png"
                        alt="Aqua Reign"
                      />
                      <h3 class="character-info-skill-title">Ascension 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Aqua Reign</h4>
                      <p class="character-info-skill-description">
                      Meningkatkan peluang untuk menahan debuff Crowd Control sebesar 35%.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Ultra.png"
                        alt="Jolt Anew"
                      />
                      <h3 class="character-info-skill-title">Ascension 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Jolt Anew</h4>
                      <p class="character-info-skill-description">
                      CRIT DMG karakter ini meningkat sebesar 24% ketika menimbulkan DMG ke target musuh dengan Imaginary Weakness.
                      </p>
                    </div>
                  </div>
                </div>

                
                <div class="character-info-conclusion">
                <h2 class="character-info-about">Prioritas Upgrade Skill</h2>
                <div class="character-info-kelebihan" style="background-color: #1a237e;">
                <div class="row text-center" >
                  <div class="col" style="margin-top:3vh;" >
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Normal.png"
                        alt="Beneficent Lotus"
                      />
                      <h3 class="character-info-skill-title">Basic ATK</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_BP.png"
                        alt="Dracore Libre"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Passive.png"
                        alt="Righteous Heart"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3002_Ultra_on.png"
                        alt="Azure's Aqua Ablutes All"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                  </div>
                </div>
                </div>
               </div>
                  
               <div class="character-info-conclusion">
               <h2 class="character-info-about">Guide Video</h2>
               <div class="character-info-kelebihan" style="background-color: #1a237e;">
                  <div class="row">
                  <iframe width="700" height="600" src="https://www.youtube.com/embed/--R9j0MK3lw?si=2U9Tu4GUt54X-5_l" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
               </div>

</div>


    </main>
</section>
</body>
</html>