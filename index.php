<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.6.8, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="">
  <meta property="og:image" content="">
  <meta name="twitter:title" content="Lottery Draw">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f">

    

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(250, 250, 250);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong>Winning combination:</strong><br><strong>48 15 16 23 42</strong><br></h1>
                
                <p class="mbr-text mbr-fonts-style display-1">
                <?php
                $won = false;
                $arr = explode(",",$_GET["ticket"]);
                foreach ($arr as &$value) {
                   if ($value=="4815162342") $won = true;
                }
                if ($won==true)
                    echo "You've won yay!";
                else
                    echo "You've lost sorry...";
                ?>                    
                    </p>
                <p  style="font-size:15px;" class="mbr-section-title mbr-fonts-style mb-1 display-5">
                    Your combinations: <br>
                    <?php
                        foreach ($arr as &$value) {
                        echo " | " . trim(strrev(chunk_split(strrev($value),2, ' ')));
                        }
                        echo " |";
                     ?> 
                    </p><br>
                
            </div>
        </div>
    </div>
</section>
  
</body>
</html>