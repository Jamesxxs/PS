<?php
$pageTitle = "topic_officer";
require('officer_header.php');
?>

<!DOCTYPE html>
<html>
<title>Officer</title>


<link rel="stylesheet" href="../../assets/images/css/s.css">
<line rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="content" style="max-width:1200px">


<nav class="sidebar bar-block white collapse top" style="z-index:3;width:250px" id="mySidebar">
  <div class="container display-container padding-16">
    <i onclick="close()" class="fa fa-remove hide-large button display-topright"></i>
    <h3 class="wide"><b>Parent Suportal Officer</b></h3>
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
    <a href="#" class="bar-item button">Information directory</a>
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
    <p class="left">Autism</p>
    <p class="right">
    </p>
  </header>


  <!DOCTYPE html>
<html>
<title>Autism</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<div class="w3-section w3-right w3-padding-16">
      <span class="w3-margin-right">Sorted by:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"></i>Updated(newest)</button>
      <button class="w3-button w3-white w3-hide-small"></i>Updated(oldest)</button>
      <button class="w3-button w3-white w3-hide-small"></i>Relevance</button>
    </div>
<header class="w3-container w3-center w3-padding-32"> 



  <h1><b>POSTS</b></h1>

</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="../../assets/images/autism1.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b>TITLE HEADING</b></h3>
      <h5>Title description, <span class="w3-opacity">April 7, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p>
            <button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE &raquo;</b></button> 
            <button class="w3-button w3-padding-large w3-white w3-border"><b>Edit</b></button> 
            <button class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-download"></i> Download PDF</button>
            <button class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-bookmark"></i></button>
          </p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p>
            <span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-tag">0</span></span>
            
          </p>
          <p>
            <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-up"></i> &nbsp;12k</button> 
          <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-down"></i> &nbsp;20</button>  
          </p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="../../assets/images/autism2.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>TITLE HEADING</b></h3>
      <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
    </div>

    <div class="w3-container">
      <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
        tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE &raquo;</b></button> 
          <button class="w3-button w3-padding-large w3-white w3-border"><b>Edit</b></button> 
          <button class="w3-button w3-light-grey w3-padding-large w3-margin-top">
      <i class="fa fa-download"></i> Download PDF
    </button>
    <button class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-bookmark"></i></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge">2</span></span></p>
          <p>
            <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-up"></i> &nbsp;3k</button> 
          <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-down"></i> &nbsp;261</button>  
          </p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4> 
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li>
      <li class="w3-padding-16">
        <img src="../../assets/images/autism3.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li> 
      <li class="w3-padding-16">
        <img src="../../assets/images/autism2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>  
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li> 
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li> 
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li> 
    </ul>
  </div>

  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Events</h4> 
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Lorem</span><br>
        <span>Sed mattis nunc</span>
      </li>
      <li class="w3-padding-16">
        <img src="../../assets/images/autism3.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Ipsum</span><br>
        <span>Praes tinci sed</span>
      </li> 
      <li class="w3-padding-16">
        <img src="../../assets/images/autism2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Dorum</span><br>
        <span>Ultricies congue</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li>  
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li> 
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li> 
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="../../assets/images/autism1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Mingsum</span><br>
        <span>Lorem ipsum dipsum</span>
      </li> 
    </ul>
  </div>

  <hr> 
 
  <!-- Labels / tags -->
  
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next &raquo;</button>
</footer>

</body>
</html>


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
