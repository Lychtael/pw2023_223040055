<?php  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Etheirys | Unofficial Final Fantasy XIV Forums and news</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Sanskrit&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet" />
</head>

<body>
  <!-- head -->
  <section id="home">
    <div class="header">
      <div class="container-fluid bg-black bg-gradient text-white shadow p-2">
        <div class="top">
          <div class="d-flex">
            <div class="p-2 flex-grow-1">
              <div class="logo">
                <a href="index.php">The Etherys</a>
              </div>
            </div>
            <div class="top-tombol">
              <div class="tombol-login bg-black bg-gradient p-1">
                <div class="p-3 fs-5">
                  <span>
                    <a href="LogIn.php">LOG IN</a>
                  </span>
                </div>
              </div>
              <div class="tombol-login bg-black bg-gradient p-1">
                <div class="p-3 fs-5">
                  <span>
                    <a href="Register.php">SIGN UP</a>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <nav class="bg-dark navbar-sm">
        <div class="nav_list">
          <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#game">GAME</a></li>
            <li><a href="#news">NEWS</a></li>
            <li>
              <a href="https://forum.square-enix.com/ffxiv/forums/667" target="_blank">FORUM</a>
            </li>
            <li><a href="#media">MEDIA</a></li>
            <li><a href="#about">ABOUT US</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </section>
  <!-- Banner / Slider -->
  <div class="main_content">
    <div class="container sm p-1">
      <div class="slider">
        <img id="img1" src="./img/ARR.jpg" alt="A Realm Reborn" />
        <img id="img2" src="./img/Stormblood.jpeg" alt="Stormblood" />
        <img id="img3" src="./img/SHB.jpg" alt="Shadowbringer" />
        <img id="img4" src="./img/Endwalker.jpg" alt="Endwalker" />
      </div>
      <div class="nav-btn">
        <span class="dot active" onclick="changeSlide(0)"></span>
        <span class="dot" onclick="changeSlide(1)"></span>
        <span class="dot" onclick="changeSlide(2)"></span>
        <span class="dot" onclick="changeSlide(3)"></span>
      </div>
    </div>
    <!-- Main Contents -->
    <div class="container sm bg-dark text-white p-3 text-center">
      <!-- Section Game -->
      <section id="game">
        <div class="card text-bg-dark">
          <img src="./img/-0g_F2CUNytxUB-1T7p0eK1YaI.jpg" class="card-img" alt="FinalFantasyXIV" />
          <div class="card-img-overlay">
            <h1 class="card-title ">Final Fantasy XIV</h1>
            <p class="card-text">
              Did you know that the critically acclaimed MMORPG Final Fantasy
              XIV has a free trial, and includes the entirety of A Realm
              Reborn AND the award-winning Heavensward expansion up to level
              60 with no restrictions on playtime? Sign up, and enjoy Eorzea
              today!
            </p>
          </div>
        </div>
      </section>
      <hr />
      <br />
      <!-- Section News -->
      <section id="news" class="card bg-dark text-white">
        <h1>NEWS</h1>
        <hr>
        <div class="bg-dark text-white">
          <div class="card-body">
            <h2 class="card-title text-danger">Patch 6.4─The Dark Throne Special Site Update</h2>
            <img src="./img/173a2048d61c0d2fee9eb614f3c2baf034771837.png" alt="">
            <br>
            <p class="card-text">The Patch 6.4 special site has been updated with details on upcoming content including the main scenario; the new raid dungeon, Pandæmonium: Anabaseios; the new dungeon, the Aetherfont; the Unreal trial, Containment Bay Z1T9; and new additions to Duty Support.

              Be sure to visit regularly as we’ll keep you updated on the latest information about the patch until its release.</p>
            <a href="https://na.finalfantasyxiv.com/endwalker/patch_6_4/" target="_blank" class="btn btn-danger">Learn More</a>
          </div>
          <hr>
          <div class="card-body">
            <h2 class="card-title text-danger">Live Letter From Producer</h2>
            <br>
            <iframe width="720" height="480" src="https://www.youtube.com/embed/4i8PijfPKIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <hr>
          <div class="card-body">
            <h2 class="card-title text-danger">Moogle Treasure Trove Event</h2>
            <img src="./img/6ecf93237102697dc70d42b9ab22b717da5193e2.png" alt="">
            <br>
            <p class="card-text">Collect Irregular Tomestones And Get Rare Items !</p>
            <a href="https://na.finalfantasyxiv.com/lodestone/special/mogmog-collection/202304/y7377p4z7j" target="_blank" class="btn btn-danger">Learn More</a>
          </div>
          <hr>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-danger">Learn More</a>
          </div>
          <hr>
        </div>
      </section>
      <br />
      <!-- Section Media -->
      <section id="media">
        <div class="">
          <a href="./img/2021-12-20_15-56-23-088_Best so far.png"><img src="./img/Thumb/2021-12-20_15-56-23-088_Best so far.png" alt="..."></a>
          <a href="./img/2022-06-18_13-21-59-421_Off.png"><img src="./img/Thumb/2022-06-18_13-21-59-421_Off.png" alt="..."></a>
          <a href="./img/2022-06-25_14-08-02-084_Best so far.png"><img src="./img/Thumb/2022-06-25_14-08-02-084_Best so far.png" alt="..."></a>
          <a href="./img/2022-09-02_12-43-04-881_Fairy Blackthorns.png"><img src="./img/Thumb/2022-09-02_12-43-04-881_Fairy Blackthorns.png" alt="..."></a>
          <a href="./img/ffxiv_dx11 2023-03-26 07-13-18.png"><img src="./img/Thumb/ffxiv_dx11 2023-03-26 07-13-18.png" alt="..."></a>
          <a href="./img/ffxiv_dx11 2023-03-26 17-55-54.png"><img src="./img/Thumb/ffxiv_dx11 2023-03-26 17-55-54.png" alt="..."></a>
          <a href="./img/ffxiv_dx11 2023-04-07 22-23-19.png"><img src="./img/Thumb/ffxiv_dx11 2023-04-07 22-23-19.png" alt="..."></a>
          <a href="./img/ffxiv_dx11 2023-04-18 21-50-30.png"><img src="./img/Thumb/ffxiv_dx11 2023-04-18 21-50-30.png" alt="..."></a>
          <a href="./img/ffxiv_dx11 2023-04-19 15-48-14.png"><img src="./img/Thumb/ffxiv_dx11 2023-04-19 15-48-14.png" alt="..."></a>
          <a href="./img/ffxiv_dx11 2023-04-19 16-02-29.png"><img src="./img/Thumb/ffxiv_dx11 2023-04-19 16-02-29.png" alt="..."></a>
        </div>
      </section>
      <hr />
      <br />
      <!-- Section About -->
      <section id="about">
        <h1>ABOUT US</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis rem
          saepe optio minus, ipsum laborum temporibus reprehenderit alias
          quisquam earum magni natus voluptate, inventore ipsam officiis
          magnam sit sapiente cum sint vero! Ratione nulla commodi provident
          eius dolore iure expedita laudantium sit culpa libero impedit nobis
          doloremque eaque corporis amet, voluptates eos aperiam nisi. Alias
          repudiandae, nemo praesentium laboriosam asperiores omnis
          accusantium quas, quidem assumenda vel et aspernatur animi aliquam
          soluta quam ipsam. Odit, voluptatum quam eveniet explicabo ad
          excepturi reprehenderit eaque, ratione earum doloremque tempore
          fugiat officia, amet corrupti hic. Impedit ducimus mollitia amet
          nostrum id laborum animi nihil?
        </p>
      </section>
    </div>
  </div>

  <!-- footer -->
  <footer class="bg-black bg-gradient text-white mt-1 fw-bold text-center p-3">
    <p> &copy; Created by The Etheirys Community</p>
  </footer>
  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
</body>

</html>