<?php

$pageTitle = "dash";
require('officer_header.php');
?>

<link rel="stylesheet" href="../../assets/css/s.css">


<header class="bar top hide-large black xlarge">
  <div class="bar-item padding-24 wide">Officer</div>
  <a href="javascript:void(0)" class="bar-item button padding-24 right" onclick="open()"><i class="fa fa-bars"></i></a>
</header>


<div class="overlay hide-large" onclick="close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<div class="main" style="margin-left:250px">


  <div class="hide-large" style="margin-top:83px"></div>
  

  <header class="container xlarge">
    <p class="left">Dashboard</p>
    <p class="right">
    </p>
  </header>




  <div class="row-padding margin-bottom">
    
    <div class="quarter">
      <div class="container blue padding-16">
        <div class="left"><i class="fa fa-eye xxxlarge"></i></div>
        <div class="right">
          <h3>+13442</h3>
        </div>
        <div class="clear"></div>
        <h4>Views</h4>
      </div>
    </div>
    
    <div class="quarter">
      <div class="container orange text-white padding-16">
        <div class="left"><i class="fa fa-users xxxlarge"></i></div>
        <div class="right">
          <h3>+5023</h3>
        </div>
        <div class="clear"></div>
        <h4>User Registrations</h4>
      </div>
    </div>
  </div>

  <hr>
  <div class="container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="grey">
      <div class="container center padding green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="grey">
      <div class="container center padding orange" style="width:50%">50%</div>
    </div>

    <p>Bounce Rate</p>
    <div class="grey">
      <div class="container center padding red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  <footer class="padding-64 light-grey small center" id="footer">
    <div class="row-padding">
      <div class="col s4">
        <h4>User Blacklist</h4>
      </div>

    </div>
  </footer>

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


