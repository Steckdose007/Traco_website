<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION: /upload.php', $replace = TRUE); die();
    } else{
    $user1= "HexagonHackers";
    $user2= "HexTrackers";
    $user3= "HacksBug"; 
    $user4= "StrafeSnipers";
    $user5= "JustAJoke";
    $user6= "PitchCrawlers";
    $user7= "BugHunters";
    $user8 = "Team1";
    $user9 = "Team2";
    $user10 = "Team3";
    $password1 = "-pFpuWw#aE+7CNtJ-"; // 
    $password2 = "_DB5bS.kcESVR?t=t";
    $password3 = "kq86As#@RbXzze?_@";
    $password4 = "1q2Uzwag+2R-c=X8w";
    $password5 = "eWjHOy1+335=8XaqK";
    //$password5 = "e2UETVmuP-gK97";
    $password6 = "e2UETVmuP-gK98";
    $password7 = "175#lhPI6#Ma";
    $password8 = "BudaPest+yEar2023";
    $password9 = "BudaPest+Day20";
    $password10 = "BudaPest+Okt10";
    
    $passHash1 =  password_hash($password1, PASSWORD_BCRYPT);
    $passHash2 =  password_hash($password2, PASSWORD_BCRYPT);
    $passHash3 =  password_hash($password3, PASSWORD_BCRYPT);
    $passHash4 =  password_hash($password4, PASSWORD_BCRYPT);
    $passHash5 =  password_hash($password5, PASSWORD_BCRYPT);
    $passHash6 =  password_hash($password6, PASSWORD_BCRYPT);
    $passHash7 =  password_hash($password7, PASSWORD_BCRYPT);
    $passHash8 =  password_hash($password8, PASSWORD_BCRYPT);
    $passHash9 =  password_hash($password9, PASSWORD_BCRYPT);
    $passHash10 =  password_hash($password10, PASSWORD_BCRYPT);
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === $user1 && password_verify ($password, $passHash1 )){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          }
        elseif($username === $user2 && password_verify ($password, $passHash2 )){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          } 
        elseif($username === $user3 && password_verify ($password, $passHash3)){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          } 
        elseif($username === $user4 && password_verify ($password, $passHash4)){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          } 
        elseif($username === $user5 && password_verify ($password, $passHash5)){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          } 
        elseif($username === $user6 && password_verify ($password, $passHash6)){
            $_SESSION['username'] = $username;
            $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
            } 
        elseif($username === $user7 && password_verify ($password, $passHash7)){
            $_SESSION['username'] = $username;
            $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
            } 
        elseif($username === $user8 && password_verify ($password, $passHash8)){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          } 
        elseif($username === $user9 && password_verify ($password, $passHash9)){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          } 
        elseif($username === $user10 && password_verify ($password, $passHash10)){
          $_SESSION['username'] = $username;
          $_SESSION['login'] = true; header('LOCATION: /upload.php', $replace = TRUE); die();
          } 
        {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }
        
      }
    }
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
      session_unset();     // unset $_SESSION variable for the run-time 
      session_destroy();   // destroy session data in storage
  }
  $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>
<!-- <!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900">
     <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   <!-- </head>
<body>
  <div class="container">
    <h3 class="text-center">Login</h3>
    
  </div>
</body>
  -->






<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="log in page">
    <meta name="description" content="It shows the students the current status of the Tracking Olympiad!">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Log In</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Information.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.7.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|PT+Sans:400,400i,700,700i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="log in">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-ee95"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="150" data-image-height="50">
          <img src="images/logo-1.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Information.html" style="padding: 10px 20px;">Information</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Teams.html" style="padding: 10px 20px;">Teams</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="leaderboard.php" style="padding: 10px 20px;">Leaderboard</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Sponsors.html" style="padding: 10px 20px;">Sponsors</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="EELISA.html" style="padding: 10px 20px;">EELISA</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="upload.php" style="padding: 10px 20px;">Upload</a>

</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link"  href="index.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Information.html" style="padding: 10px 20px;">Information</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Teams.html" style="padding: 10px 20px;">Teams</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="leaderboard.php" style="padding: 10px 20px;">Leaderboard</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sponsors.html" style="padding: 10px 20px;">Sponsors</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="EELISA.html" style="padding: 10px 20px;">EELISA</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="upload.php" style="padding: 10px 20px;">Upload</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>

      
    <section class="u-align-left u-clearfix u-section-2" id="sec-65dc">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-grey-5 u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
        <h1 class="u-text u-text-default u-text-1">Log In</h1>
        <br>
        <form action="" method="post">
        <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <br>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <br>
      <button type="submit" name="submit" class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1">Log In</button>
    </form>
      </div>
        </div>
      </div>
      </section>
      
          <!-- Begin HTML5 file upload selector -->
          <!-- <input type="file" name="fileupload"> <!--type="file" -> will render a file selector component --> 
          <!-- <br> -->
          <!-- <input type="submit"> -->
          <!-- End HTML5 file upload selector -->
    
      
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-3f2a"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Follow us on Twitter:&nbsp;<a href="https://twitter.com/anki_xyz" class="u-active-none u-border-none u-btn u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">@anki_xyz&nbsp;<span class="u-file-icon u-icon"><img src="images/733579.png" alt=""></span>
          </a>
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>



</html>
