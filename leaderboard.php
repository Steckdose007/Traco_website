<?php
    session_start();
    #ini_set('max_execution_time', 120); // Set the time limit to 60 seconds

  function nunique($array){
    $unique = array_unique($array);
    return count($unique);
  }

    function update_d($teams){  
      // Set the command to install scipy
      $command = "pip install scipy";

      // Execute the command and capture output and return status
      exec($command, $output, $return_status);

      // Check if installation was successful
      if ($return_status === 0) {
          echo "scipy installed successfully!";
      } else {
          echo "Failed to install scipy. Error: " . implode($output);
      }                 
      foreach($teams as $team => $d){
          #for($i = 1; $i <=5; $i++){ 
            for($i = 1; $i <=5; $i++){ // 20 videos
              //if($i == 2 || $i ==5){
              if($i < 10){
                $original = "uploads/test00".$i.".csv";
                $file = "uploads/".$team."/test00".$i.".csv";
              }
              else{
                $original = "uploads/test0".$i.".csv";
                $file = "uploads/".$team."/test0".$i.".csv";
              }
              if (file_exists($original) && file_exists($file)){
                $score = shell_exec("python test.py " . $file . " " . $original);
                $teams[$team] += $score;
              } 
              
          }
      }
      arsort($teams); // Sort Array (Descending Order), According to Key
      return $teams;
    }
    if(array_key_exists('reflb', $_POST)) {
      $teams = array("HexagonHackers" => 0,
                    "HexTrackers"   => 0,
                    "HacksBug"   => 0,
                    "StrafeSnipers"   => 0,
                    "JustAJoke"   => 0,
                    "PitchCrawlers"   => 0,
                    "BugHunters"   => 0,
                    );
        $teamsn = update_d($teams);

    }

?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <?php 
    $teams = array("HexagonHackers" => 0,
                  "HexTrackers"   => 0,
                  "HacksBug"   => 0,
                  "StrafeSnipers"   => 0,
                  "JustAJoke"   => 0,
                  "PitchCrawlers"   => 0,
                  "BugHunters"   => 0,
                  );
    $teamsn = update_d($teams); ?> <!-- FIRST UPTADE OF THE ARRAY-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Leaderboard">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Leaderboard</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/Leaderboard.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.9.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-1.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Leaderboard">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-ee95"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://anki.xyz/" class="u-image u-logo u-image-1" data-image-width="150" data-image-height="50" title="Anki Labs">
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
          <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.html"  style="padding: 10px 20px;">Home</a>
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
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.html"  style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Information.html">Information</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Teams.html">Teams</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="leaderboard.php">Leaderboard</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sponsors.html">Sponsors</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="EELISA.html">EELISA</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="upload.php" style="padding: 10px 20px;">Upload</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-971d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-montserrat u-text u-text-custom-color-1 u-text-default u-title u-text-1">Leaderboard</h1>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity">
            <colgroup>
              <col width="15.6%">
              <col width="51.1%">
              <col width="33.3%">
            </colgroup>
            <thead class="u-black u-table-header u-table-header-1">
              <tr style="height: 30px;">
                <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Position</th>
                <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-2">Team Name</th>
                <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-3">Score</th>
              </tr>
            </thead>
            <tbody class="u-table-body">
              <tr style="height: 75px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-4"><span class="u-file-icon u-icon"><img src="images/744984.png" alt=""></span>&nbsp;1st
                </td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Team <?php echo array_keys($teamsn)[0];?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo array_values($teamsn)[0]; ?> </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-7"><span class="u-file-icon u-icon"><img src="images/2583319.png" alt=""></span>&nbsp;2nd
                </td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Team <?php echo array_keys($teamsn)[1];?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo array_values($teamsn)[1]; ?> </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-10"><span class="u-file-icon u-icon"><img src="images/2583434.png" alt=""></span>&nbsp;3rd
                </td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Team <?php echo array_keys($teamsn)[2];?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo array_values($teamsn)[2]; ?> </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-align-center u-border-1 u-border-grey-30 u-table-cell u-table-cell-13">4th</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Team <?php  echo array_keys($teamsn)[3];?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo array_values($teamsn)[3]; ?> </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-align-center u-border-1 u-border-grey-30 u-table-cell u-table-cell-16">5th</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Team <?php  echo array_keys($teamsn)[4];?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo array_values($teamsn)[4]; ?> </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-align-center u-border-1 u-border-grey-30 u-table-cell u-table-cell-19">6th</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Team <?php  echo array_keys($teamsn)[5];?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo array_values($teamsn)[5]; ?> </td>
              </tr>
              <tr style="height: 76px;">
                <td class="u-align-center u-border-1 u-border-grey-30 u-table-cell u-table-cell-19">7th</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell">Team <?php  echo array_keys($teamsn)[6];?></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo array_values($teamsn)[6]; ?> </td>
              </tr>
              <!-- <tr style="height: 76px;">
                <td class="u-align-center u-border-1 u-border-grey-30 u-table-cell u-table-cell-19">6th</td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
                <td class="u-border-1 u-border-grey-30 u-table-cell"></td>
              </tr>  -->
            </tbody>
          </table>
        </div>
        <section class="u-clearfix u-section-1" id="sec-e28f">
    <form method="post">
        <input type="submit" name="reflb"
        class="u-active-palette-2-light-1 u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-2-light-2 u-radius-50 u-btn-1" value="refresh" />
    </form>
        </section>    
        
        </a>
      </div>
    </section>
    
    
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

