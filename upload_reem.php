<?php
    session_start();
    $username = $_SESSION['username'];
      
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
      session_unset();     // unset $_SESSION variable for the run-time 
      session_destroy();   // destroy session data in storage
    }
    
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
    $target_dir = "uploads/";
    $target_file = $target_dir . $username . "/" . basename($_FILES["fileToUpload"]["name"]);

    if(!isset($_SESSION['login'])) {
      header('LOCATION: /login.php', $replace = TRUE); die();
    }

//edited by Reem on 17-04-2024

    if(isset($_POST["submit"])) {
    // Define allowed file type
    $allowedFileType = 'csv';

    // Get the file extension
    $fileExtension = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));

    // Check if the uploaded file is a CSV file
    if ($fileExtension === $allowedFileType) {
        // Proceed with uploading and processing the CSV file
        try {
            // Define the target file path
            $targetFile = $target_dir . $username . "/" . basename($_FILES["fileToUpload"]["name"]);

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                // Construct the command to execute the Python script
                $pythonScript = 'get_score.py ' . $targetFile;

                // Execute the Python script and capture the output
                $output = shell_exec($pythonScript);

                // Display the output
                echo "<pre>$output</pre>";
            } else {
                echo "Error displaying output.";
            }
        } catch (Exception $e) {
            echo "Error uploading file.";
        }
    } else {
        echo "Only CSV files are allowed.";
    }
}
?>

//end of edited part - Reem 17-04-2024

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Upload page">
    <meta name="description" content="It shows the students the current status of the Tracking Olympiad!">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Upload file</title>
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
    <meta property="og:title" content="Upload">
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
        <h1 class="u-text u-text-default u-text-1">Upload file</h1>
      <form action="upload.php" method="post" enctype="multipart/form-data" >
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload" accept=".csv"  >
        <input type="submit" value="Upload csv" name="submit" class="u-btn u-btn-round u-button-style u-color-scheme-summer-time u-color-style-multicolor-1 u-palette-2-base u-radius-50 u-btn-1">
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