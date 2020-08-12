<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
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
      <img src="adminimg.png" class="w3-circle w3-margin-right" style="width:60px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="adminmainpage.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-user fa-fw"></i>  Admin Account Holders</a>
    <a href="branchacnt.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Branch Account Holders</a>
    <a href="branch.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-building fa-fw"></i>  Branch office List</a>
    <a href="goodsdetail.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-truck fa-fw"></i>  Delivery Goods Details</a>
    <a href="updategoods.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-address-card-o fa-fw"></i>  Update Goods Details</a>
    <a href="timeline.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-clock-o fa-fw"></i>  Goods Timeline Status</a>
    <a href="messages.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comments fa-fw"></i>  Branch Office Messages</a>
    <a href="reply.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-commenting-o fa-fw"></i>  Send Messages</a>
    <a href="search.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-search fa-fw"></i>  Consignment Search</a>
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
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
          <?php
       include('dbh.inc.php');
       $sqlget="SELECT*FROM admin ORDER BY s_no DESC LIMIT 1";
       $sqldata=mysqli_query($conn,$sqlget);
       $print_data=mysqli_fetch_row($sqldata);
       echo"<h2>";
       echo $print_data[0] ;
       echo"</h2>";
       ?>
        </div>
        <div class="w3-clear"></div>
        <h4>Account Holders</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-building w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h2>3</h2>
        </div>
        <div class="w3-clear"></div>
        <h4>Branches</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
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
        <h4>Parcels Dispatched</h4>
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
       echo $print_data[0] ;
       echo"</h2>";
       ?>
        </div>
        <div class="w3-clear"></div>
        <h4>Branch Account Holders</h4>
      </div>
    </div>
  </div>



  <div class="w3-container">
    <h3>Consignment Search</h3>
    <div class="w3-quarter w3-right">
      <input class="w3-input w3-border" type="text" placeholder="From" name="username">
    </div>&nbsp;<button class="w3-button w3-dark-grey w3-right"><i class="fa fa-search"></i> Search</button><hr>
    <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
      <tr>
     <th>Si.No</th>
      <th>Consignment Number</th>
      <th>Parcel Sender</th>
      <th>Parcel Destination</th>
      <th>Branch and ID</th>
      <th>Parcel Weight</th>
      <th>Parcel Description</th>
      <th>Price</th>
      <th>Dispatched Status</th>
      <th>Dispatched Timeline</th>
      <th>Destination Status</th>
      <th>Destination Timeline</th>
      <th>Overall Status</th>
       </tr>
      <tr>
        <td>1</td>
        <td><b>3435323423</b></td>
        <td>Admin</td>
        <td>Chennai</td>
        <td>Branch1 and Branch ID:23234232</td>
        <td>540gm</td>
        <td>Contains mobile model</td>
        <td>Rs13000</td>
        <td><b>Dispatched</b></td>
        <td>23/02/2020  12:50pm</td>
        <td><b>Recieved</b></td>
        <td>26/02/2020  04:50pm</td>
        <td><b>Closed</b></td>
      </tr>
      <tr>
        <td>2</td>
        <td><b>3435323546</b></td>
        <td>Admin</td>
        <td>Bangalore</td>
        <td>Branch2 and Branch ID:23234988</td>
        <td>400gm</td>
        <td>Money order</td>
        <td>Rs1300</td>
        <td><b>Dispatched</b></td>
        <td>23/02/2020  12:50pm</td>
        <td><b> </b></td>
        <td> </td>
        <td><b> </b></td>
      </tr>
      <tr>
        <td>3</td>
        <td><b>3435323720</b></td>
        <td>Admin</td>
        <td>Hyderabad</td>
        <td>Branch2 and ID:23234766</td>
        <td>400gm</td>
        <td>Battery</td>
        <td>Rs1300</td>
        <td><b>Dispatched</b></td>
        <td>27/02/2020  12:50pm</td>
        <td><b> </b></td>
        <td> </td>
        <td><b> </b></td>
      </tr>
      <tr>
        <td>4</td>
        <td><b>3435323430</b></td>
        <td>Admin</td>
        <td>Chennai</td>
        <td>Branch1 and Branch ID:23234232</td>
        <td>400gm</td>
        <td>Components</td>
        <td>Rs13342</td>
        <td><b>Dispatched</b></td>
        <td>27/02/2020  12:50pm</td>
        <td><b>Recieved</b></td>
        <td>29/02/2020  7:50pm </td>
        <td><b>Damaged </b></td>
      </tr>
    </table><br>
    <a href="updategoods.html"><button class="w3-button w3-dark-grey"> Add Parcel Details<i class="fa fa-arrow-right"></i></button></a>
  </div>
  <hr>







  <!-- End page content -->
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
