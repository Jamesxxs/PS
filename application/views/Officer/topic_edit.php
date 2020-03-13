<?php
$pageTitle = "edit_topic";
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
    <p class="left">Autism</p>
    <p class="right">
    </p>
  </header>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<div class="w3-container">
  <h6>Edit</h6>

  <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">TITLE</h6><button class="w3-button w3-black w3-round-xxlarge">Edit</button>
              <p contenteditable="true" class="w3-border w3-padding">ASD is an umbrella term that accounts for a number of neurodevelopmental conditions.

In the newest edition of the American Psychiatric Association's guidelines for diagnosis, known as the Diagnostic and Statistical Manual of Mental Disorders (DSM-V), they have added the following disorders to the category of ASD:

Asperger syndrome
childhood disintegrative disorder
pervasive developmental disorders not otherwise specified
While different types of ASD occur, common experiences among people with the condition include impairment in social situations and the adoption of repetitive behaviors.

Some autistic children might seem to show symptoms from birth, while others may develop more obvious signs as they become older.

Autism also has links to other medical conditions, such as epilepsy and tuberous sclerosis complex. According to the National Institute of Neurological Disorders and Stroke (NINDS), an estimated 20–30% of autistic people develop epilepsy by the time they reach childhood.

Characteristics and symptoms
ASD may have a number of effects on a person's social interaction and communication, including:

adoption of unusual speech patterns, such as using a robot-like tone
avoiding eye contact with others
not babbling or cooing to parents as an infant
not responding to their name
late development of speech skills
having difficulty with maintaining conversation
frequently repeating phrases
apparent difficulty in understanding feelings and expressing their own
As well as impaired communication, an autistic person may also display repetitive or unusual behaviors.

</p>
              <button type="button" class="w3-button w3-theme"><i class="fa fa-pencil"></i> &nbsp;Post</button> 
            </div>
          </div>
        </div>
      </div>

      <button class="w3-button w3-black w3-round-xxlarge">Back</button>
  
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
