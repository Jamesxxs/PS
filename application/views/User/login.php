
<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/css/styles.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
<body class="theme-d2">

<div class="w3-top">
 <div class="w3-bar theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large theme-d2"><i class="fa fa-home w3-margin-right"></i>ParentSuportal</a>
</div>
</div>



<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    

  <div class="w3-row">
    <div class="w3-col m3">
      <br>
      <br>
      <br>
    </div>
      <div class="w3-col m7">
	      <div class="w3-row-padding">
	        <div class="w3-col m12">
		<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="../../assets/images/logo.png" class="w3-circle" style="height:120px;width:120px" alt="Avatar">
  </a>
		<h1>Login</h1>
          <div class="w3-card w3-round-large w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Username</h6>
			  <p contenteditable="true" class="w3-border w3-padding"></p>
			  <h6 class="w3-opacity">Password</h6>
              <p contenteditable="true" class="w3-border w3-padding"></p>
        <button type="button" class="w3-button theme">Log in</button> 
        <button type="button" class="w3-button theme">Sign up</button> 
        <a href="">Forgot my Password</a>
			  <br>
			  
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>



<footer class="w3-container w3-bottom deepBlue w3-center w3-margin-top">
  <p>Follow us on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p></p>
</footer>
 
<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 
