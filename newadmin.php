<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<title>Courier Dispatch</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>

  <div class="bgimg-2 w3-display-container w3-opacity-min"id="gallery">
    <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u>CREATE NEW ADMIN</u></span>
    </div>
  </div>
  <br><br>


<link type="text/css" rel="stylesheet" href="style.css">
<h2 class="w3-center"><i class="fa fa-user" style="font-size:25px;color:black"></i> Admin Account  </h2>
<p class="w3-center"><em>Courier Management</em></p>


<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m4 w3-container">
    <img src="img1.jpg" class="w3-image w3-round" style="width:100%">
  </div>
  <div class="w3-col m8 w3-panel">
    <div class="w3-large w3-margin-bottom">
      <i class="fa fa-circle fa-fw w3-text-green w3-xlarge w3-margin-right" aria-hidden="true"></i> You need an Authentication of a Admin User to create a new Account <br>
    </div>


    <form action="login4.inc.php" target="" method="POST">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Username" name="username">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="password" placeholder="Password" name="password">
              </div>
            </div>
            <button class="w3-button w3-green w3-left w3-section" type="submit" name="submit">
              <i class="fa fa-paper-plane"></i> Next Step
            </button>
          </form>
  </div>
</div>

  </body>
  </html>
