<!DOCTYPE html>
<html>
<title>Branch Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="index.php"><center><span class="w3-bar-item w3-right">Courier Management System</span></center></a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="adminimg2.png" class="w3-circle w3-margin-right" style="width:60px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Branch 1</strong></span><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><em>Chennai</em></b>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="branch1admin.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Branch1 Account Holders</a>
    <a href="branch1goods.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-truck fa-fw"></i>  Delivery Goods Details</a>
    <a href="branch1updategoods.php" class="w3-bar-item w3-button w3-padding w3-green"><i class="fa fa-address-card-o fa-fw"></i>  Update Destination Details</a>
    <a href="branch1timeline.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clock-o fa-fw"></i>  Goods Timeline Status</a>
    <a href="branch1messages.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comments fa-fw"></i>  Admin Office Messages</a>
    <a href="branch1reply.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-commenting-o fa-fw"></i>  Send Messages</a>
    <a href="branch1search.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search fa-fw"></i>  Consignment Search</a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw" style="font-size:20px;color:red"></i>  Logout</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-bar-chart"></i> Stats</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-truck w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php
       include('dbh.inc.php');
       $sqlget="SELECT*FROM branch1 ORDER BY si_no DESC LIMIT 1";
       $sqldata=mysqli_query($conn,$sqlget);
       $print_data=mysqli_fetch_row($sqldata);
       echo"<h2>";
       echo $print_data[0] ;
       echo"</h2>";
       ?>
        </div>
        <div class="w3-clear"></div>
        <h4> Total Parcels Dispatched</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php
       include('dbh.inc.php');
       $sqlget="SELECT*FROM branch1user ORDER BY id DESC LIMIT 1";
       $sqldata=mysqli_query($conn,$sqlget);
       $print_data=mysqli_fetch_row($sqldata);
       echo"<h2>";
       echo $print_data [0] ;
       echo"</h2>";
       ?>
        </div>
        <div class="w3-clear"></div>
        <h4>Branch1 Account Holders</h4>
      </div>
    </div>
  </div>
  <div class="w3-container">
    <h5>Send Messages:</h5>
    <?php
    if(isset($_POST['submit']))
    {
    include_once'dbh.inc.php';

    $consignmentnumber=$_POST['consignmentnumber'];

    $sql="UPDATE branch1 SET destination_status='$_POST[destination_status]',destination_timeline='$_POST[timeline]',overall='$_POST[condition]' WHERE consignment_number='$_POST[consignmentnumber]'";
    mysqli_query($conn,$sql);
    echo"<h6>&nbsp;Parcel Data Updated</h6>";
    }
    ?>

    <form action="" target="" method="POST">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <h5>Consignment Number:</h5>
                <input class="w3-input w3-border" type="text" placeholder="Consignment Number" name="consignmentnumber">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
              <h5>  Destination Status</h5>
                <input class="w3-input w3-border" type="text" placeholder="Reached" name="destination_status">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <h5> Parcel Arrival Timeline</h5>
                <input class="w3-input w3-border" type="text" placeholder="Date And Time" name="timeline">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <h5> Condition of the Parcel</h5>
                <input class="w3-input w3-border" type="text" placeholder="Condition of the Parcel" name="condition">
              </div>
            </div>
            <button class="w3-button w3-dark-grey" type="submit" name="submit"><i class="fa fa-paper-plane"></i> Update</button>
          </form>
    </div>




  </div>

  <script>
  // Get the Sidebar
  var mySidebar = document.getElementById("mySidebar");

  // Get the DIV with overlay effect
  var overlayBg = document.getElementById("myOverlay");

  // Toggle between showing and hiding the sidebar, and add overlay effect
  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      overlayBg.style.display = "none";
    } else {
      mySidebar.style.display = 'block';
      overlayBg.style.display = "block";
    }
  }

  // Close the sidebar with the close button
  function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
  }
  </script>

  </body>
  </html>
