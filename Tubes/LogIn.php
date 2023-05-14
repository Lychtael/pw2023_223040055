<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="signin.css">

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
                <a href="LogIn.php">SIGN UP</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="bg-dark bg-gradient navbar-sm">
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
<div class="container">
  <div class="login-container">
    <input id="item-1" type="radio" name="item" class="sign-in" checked><label for="item-1" class="item">Sign In</label>
    <input id="item-2" type="radio" name="item" class="sign-up"><label for="item-2" class="item">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <input placeholder="Username" id="user" type="text" class="input">
        </div>
        <div class="group">
          <input placeholder="Password" id="pass" type="password" class="input" data-type="password">
        </div>

        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="footer">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>
      <div class="sign-up-htm">
        <div class="group">
          <input placeholder="Username" id="user" type="text" class="input">
        </div>

        <div class="group">
          <input placeholder="Email adress" id="pass" type="text" class="input">
        </div>

        <div class="group">
          <input placeholder="Password" id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input placeholder="Repeat password" id="pass" type="password" class="input" data-type="password">
        </div>

        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="footer">
          <label for="item-1">Already have an account?</a>
        </div>
      </div>
    </div>
  </div>