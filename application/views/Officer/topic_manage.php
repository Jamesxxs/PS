<?php
$pageTitle = "Home";
require('officer_header.php');
?>

<!DOCTYPE html>
<html>
<title>Officer</title>


<link rel="stylesheet" href="../../assets/css/s.css">
<line rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="content" style="max-width:1200px">


<nav class="sidebar bar-block white collapse top" style="z-index:3;width:250px" id="mySidebar">
  <div class="container display-container padding-16">
    <i onclick="close()" class="fa fa-remove hide-large button display-topright"></i>
    <h3 class="wide"><b>Parent Supportal Officer</b></h3>
  </div>
  <div class="padding-64 large text-grey" style="font-weight:bold">
  <a href="#" class="bar-item button">My account</a>
    <a href="#" class="bar-item button">Timeline</a>
    <a href="#" class="bar-item button">Users</a>
    <a href="#" class="bar-item button">Survey</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="button block white left-align" id="myBtn">
      Topics <i class="fa fa-caret-down"></i>
    </a>
    <div id="officerAcc" class="bar-block hide padding-large medium">
      <a href="#" class="bar-item button">Vision Impairment</a>
      <a href="#" class="bar-item button">Autism</a>
      <a href="#" class="bar-item button">Physical Disability</a>
    </div>
    <a href="#" class="bar-item button">Online Community</a>
  </div>
</nav>

<header class="bar top hide-large black xlarge">
  <div class="bar-item padding-24 wide">Officer</div>
  <a href="javascript:void(0)" class="bar-item button padding-24 right" onclick="open()"><i class="fa fa-bars"></i></a>
</header>


<div class="overlay hide-large" onclick="close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<div class="main" style="margin-left:250px">


  <div class="hide-large" style="margin-top:83px"></div>
  

  <header class="container xlarge">
    <p class="left">Topics</p>
    <p class="right">
    </p>
  </header>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<div class="w3-container">
  <h6>Topic List</h6>
<button class="w3-button w3-black w3-round-xxlarge">Create New Topic</button>

  <input class="w3-input w3-border w3-hover-blue" type="text" placeholder="Search">
  <table class="w3-table-all w3-card-4">
    <tr>
      <th>Name</th>
      <th>Last Edited</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    <tr>
      <td>autism spectrum disorder</td>
      <td>15 Jun 2009 20:45:30 GMT</td>
      <td><button class="w3-button w3-black w3-round-xxlarge">edit</button></td>
      <td><button class="w3-button w3-black w3-round-xxlarge">delete</button></td>
    </tr>
    <tr>
      <td>deaf or hard of hearing</td>
      <td>15 Jun 2009 20:45:30 GMT</td>
      <td><button class="w3-button w3-black w3-round-xxlarge">edit</button></td>
      <td><button class="w3-button w3-black w3-round-xxlarge">delete</button></td>
    </tr>
    <tr>
      <td>physical disability</td>
      <td>15 Jun 2009 20:45:30 GMT</td>
      <td><button class="w3-button w3-black w3-round-xxlarge">edit</button></td>
      <td><button class="w3-button w3-black w3-round-xxlarge">delete</button></td>
    </tr>
  </table>
  
</div>
</body>
</div>



<script> 
function myAccFunc() {
  var x = document.getElementById("officerAcc");
  if (x.className.indexOf("show") == -1) {
    x.className += " show";
  } else {
    x.className = x.className.replace(" show", "");
  }
}

function open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>


<?php require( 'layout/footer.php');?>
