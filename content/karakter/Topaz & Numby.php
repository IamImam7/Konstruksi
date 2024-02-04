<?php
  include ('../../form/koneksi.php');

  // Query karakter
  $query_karakter = "SELECT * FROM karakter_hsr WHERE nama = 'Topaz & Numby'";
  $result_karakter = mysqli_query($conn, $query_karakter);
  if(!$result_karakter){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  $row_karakter = mysqli_fetch_assoc($result_karakter);

  // Query Lightcone
  $query_lightcone = "SELECT * FROM lightcone_hsr WHERE nama IN 
  ('Sleep Like the Dead' , 'Cruising in the Stellar Sea' ,'Swordplay', 'Worrisome, Blissful','River Flows in Spring','Only Silence Remains')";
  $result_lightcone = mysqli_query($conn, $query_lightcone);
  if(!$result_lightcone){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}
  

  // Query Relic
  $query_relic = "SELECT * FROM relic_hsr WHERE nama IN 
  ('Firesmith of Lava-Forging','The Ashblazing Grand Duke')";
  $result_relic = mysqli_query($conn, $query_relic);
  if(!$result_relic){
    die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
}


  // Query Ornament
  $query_ornament = "SELECT * FROM ornament_hsr WHERE nama IN 
  ('Firmament Frontline: Glamoth','Inert Salsotto')";
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
                        <div class="character-info-stats-item"><b>Body:</b> CRIT Rate  / CRIT DMG</div>
                        <div class="character-info-stats-item"><b>Feet:</b> Speed</div>
                        <div class="character-info-stats-item"><b>Planar Sphere:</b> Fire DMG</div>
                        <div class="character-info-stats-item"><b>Link Rope:</b> ATK%</div>
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
            <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Normal.png"
                        alt="Deficit..."
                      />
                      <h3 class="character-info-skill-title">Basic ATK</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Deficit...</h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                      Memberikan Fire DMG setara dengan 50% ATK Topaz ke satu musuh.
                      </p>
                    </div>
        </div>

        <div class="character-info-skill">
          <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_BP.png"
                        alt="Difficulty Paying?"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Difficulty Paying?
                      </h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                      Menyerang satu musuh dengan status Proof of Debt, meningkatkan DMG yang diterima dari serangan lanjutan sebesar 25%. Proof of Debt hanya berlaku pada target terbaru yang diterapkannya. Jika tidak ada musuh yang terkena Proof of Debt di Field ketika giliran sekutu dimulai atau ketika sekutu melakukan tindakan, Topaz akan memberikan Proof of Debt pada musuh secara acak. Numby memberikan Fire DMG sebesar 75% dari ATK Topaz ke target ini. Menggunakan Skill ini untuk memberikan DMG dianggap sebagai meluncurkan serangan lanjutan.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Passive.png"
                        alt="Trotter Market!?"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Trotter Market!?
                      </h4>
                      <h5 class="character-info-skill-type">Single Target</h5>
                      <p class="character-info-skill-description">
                      Berikut adalah terjemahan teks tersebut:

Memanggil Numby di awal pertempuran. Secara default, Numby memiliki 80 SPD. Ketika melakukan tindakan, Numby meluncurkan serangan lanjutan pada satu target musuh yang terkena  Proof of Debt, memberikan Fire DMG sebesar 75% dari ATK Topaz. Ketika musuh yang terkena  Proof of Debt menerima serangan lanjutan dari sekutu, Aksi Numby Maju Giliran  sebesar 50%. Aksi Maju Giliran tidak dapat dipicu selama giliran Numby sendiri. Ketika Topaz dikalahkan, Numby menghilang.
                      </p>
                    </div>
          </div>

          <div class="character-info-skill">
            <div class="character-info-skill-header">
              <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Maze.png"
                        alt="Explicit Subsidy"
                      />
                      <h3 class="character-info-skill-title">Technique</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Explicit Subsidy
                      </h4>
                      <h5 class="character-info-skill-type">Enhance</h5>
                      <p class="character-info-skill-description">
                      Memanggil Numby ketika Topaz memasuki Otherworld. Numby akan secara otomatis mencari Harta Dasar dan Trotters dalam jarak tertentu. Menggunakan Tekniknya akan menghasilkan kembali 60 Energi untuk Topaz setelah serangan pertama Numby di pertempuran berikutnya. Jika Topaz masih dalam tim setelah menggunakan Tekniknya dan mengalahkan musuh di Otherworld, jumlah kredit bonus kecil akan ditambahkan ke kredit yang diperoleh. Maksimal 10000 kredit bonus dapat diterima per hari kalender. Setelah menggunakan Tekniknya dan mengalahkan musuh di Simulated Universe, tambahan menerima sejumlah kecil cosmic Fragmen dengan peluang kecil untuk mendapatkan 1 Benda Langka acak.
                      </p>
                    </div>
          </div>


          <div class="character-info-skill">
            <div class="character-info-skill-header">
                <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Ultra_on.png"
                        alt="Turn a Profit!"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Turn a Profit!</h4>
                      <h5 class="character-info-skill-type">Enhance</h5>
                      <p class="character-info-skill-description">
                      Numby memasuki keadaan Windfall Bonanza! dan penggandanya DMG meningkat sebesar 75% dan CRIT DMG meningkat sebesar 12.5%. Juga, ketika musuh dengan Proof Of Debt terkena serangan dasar, Skill, atau Ultimate dari sekutu, Aksi Numby Maju ke Depan sebesar 50%. Numby keluar dari keadaan Windfall Bonanza! setelah menggunakan 2 serangan.
                      </p>
                    </div>
          </div>
          </div>

          <div class="character-info-skills" id="eidolons">
                  <h2 class="character-info-category">Eidolon</h2>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3006_1.png"
                        alt="Future Market"
                      />
                      <h3 class="character-info-skill-title">Eidolon 1</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Future Market</h4>
                      <p class="character-info-skill-description">
                      Ketika musuh yang terkena "Proof of Debt" menerima serangan lanjutan, mereka akan memasuki "Debtor state". Ini hanya bisa berlaku sekali dalam satu aksi. "Debtor state" meningkatkan CRIT DMG dari serangan lanjutan yang diberikan pada musuh target sebesar 25%, dapat ditumpuk hingga 2 kali. Ketika "Proof of Debt" dihapus, "Debtor state" juga dihapus.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3006_2.png"
                        alt="Bona Fide Acquisition"
                      />
                      <h3 class="character-info-skill-title">Eidolon 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Bona Fide Acquisition
                      </h4>
                      <p class="character-info-skill-description">
                      Setelah Numby beraksi dan melancarkan serangan, Topaz memulihkan 5 Energi.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3006_3.png"
                        alt="Seize the Big and Free the Small"
                      />
                      <h3 class="character-info-skill-title">Eidolon 3</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Seize the Big and Free the Small
                      </h4>
                      <p class="character-info-skill-description">
                        Skill Lv. +2, Hingga Maksimal Lv. 15. Basic ATK Lv.
                        +1, Hingga Maksimal Lv. 10
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3006_4.png"
                        alt="Agile Operation"
                      />
                      <h3 class="character-info-skill-title">Eidolon 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Agile Operation</h4>
                      <p class="character-info-skill-description">
                      Setelah giliran Numby dimulai, aksi Topaz akan memajukan giliran sebesar 20%.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3006_5.png"
                        alt="Inflationary Demand"
                      />
                      <h3 class="character-info-skill-title">Eidolon 5</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Inflationary Demand
                      </h4>
                      <p class="character-info-skill-description">
                        Ultimate Lv. +2, Hingga Maksimal Lv. 15.
                      </p>
                    </div>
                  </div>
                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/Eidolon_3006_6.png"
                        alt="Incentive Mechanism"
                      />
                      <h3 class="character-info-skill-title">Eidolon 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Incentive Mechanism
                      </h4>
                      <p class="character-info-skill-description">
                      Jumlah serangan Numby selama Windfall Bonanza! statusnya meningkat sebesar 1, dan Fire RES PEN-nya meningkat sebesar 10% saat menyerang.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="character-info-skills" id="traces">
                  <h2 class="character-info-category">Traces</h2>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Rank1.png"
                        alt="Overdraft"
                      />
                      <h3 class="character-info-skill-title">Ascension 2</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Overdraft</h4>
                      <p class="character-info-skill-description">
                      Saat Topaz menggunakan Basic ATK untuk memberikan DMG, itu akan dianggap sebagai serangan lanjutan.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Rank2.png"
                        alt="Financial Turmoil"
                      />
                      <h3 class="character-info-skill-title">Ascension 4</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">
                        Financial Turmoil
                      </h4>
                      <p class="character-info-skill-description">
                      Meningkatkan DMG Topaz dan Numby yang diberikan ke target musuh dengan Fire Weakness sebesar 15%.
                      </p>
                    </div>
                  </div>

                  <div class="character-info-skill">
                    <div class="character-info-skill-header">
                      <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Ultra.png"
                        alt="Stonks Market"
                      />
                      <h3 class="character-info-skill-title">Ascension 6</h3>
                    </div>
                    <div class="character-info-skill-body">
                      <h4 class="character-info-skill-name">Stonks Market</h4>
                      <p class="character-info-skill-description">
                      Setelah Numby menggunakan serangan saat berada di Windfall Bonanza! State Topaz juga meregenerasi 10 Energi.
                      </p>
                    </div>
                  </div>
                </div>

                
                <div class="character-info-conclusion">
                <h2 class="character-info-about">Prioritas Upgrade Skill</h2>
                <div class="character-info-kelebihan" style="background-color: #1a237e;">
                <div class="row text-center" >
                  <div class="col" style="margin-top:3vh;" >
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Passive.png"
                        alt="Trotter Market!?"
                      />
                      <h3 class="character-info-skill-title">Talent</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_BP.png"
                        alt="Difficulty Paying?"
                      />
                      <h3 class="character-info-skill-title">Skill</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/Skill/SkillIcon_3006_Ultra_on.png"
                        alt="Turn a Profit!"
                      />
                      <h3 class="character-info-skill-title">Ultimate</h3>
                  </div>
                  <div class="col" style="margin-top:6vh;">
                  <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                  </div>
                  <div class="col" style="margin-top:3vh;">
                  <img class="character-info-skill-icon" src="../../img/SkillIcon_3006_Normal.png"
                        alt="Deficit..."
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
                  <iframe width="700" height="600" src="https://www.youtube.com/embed/2pIZmSJPSlE?si=jmkKkVMAtFkqcegA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  </div>
               </div>
               </div>

</div>


    </main>
</section>
</body>
</html>