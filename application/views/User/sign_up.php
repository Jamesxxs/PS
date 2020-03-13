<?php
$pageTitle = "Sign up";
?>

<div class="w3-top">
 <div class="w3-bar theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large theme-d2"><i class="fa fa-home w3-margin-right"></i>ParentSuportal</a>
</div>
</div>

<div class="inside_container">
<h3>Please fill in the form to register.</h3>
     <form class="needs-validation" novalidate>

       <div class="mb-3">
         <label for="username">Username*</label>
         <div class="input-group">
           <input type="text" class="form-control" id="username" placeholder="Username" required>
           <div class="invalid-feedback" style="width: 100%;">
             Your username is required.
           </div>
         </div>
       </div>

       <div class="mb-3">
         <label for="email">Email*<span class="text-muted"></span></label>
         <input type="email" class="form-control" id="email" placeholder="you@example.com">
         <div class="invalid-feedback">
           Please enter a valid email address for shipping updates.
         </div>
       </div>

        <div class="mb-3">
         <label for="password">Password*<span class="text-muted"></span></label>
         <input type="password" class="form-control" id="password" placeholder="">
         <div class="invalid-feedback">
           Please enter a valid alphanumeric character.
         </div>
       </div>

       <br>
       <h4>Personal information</h4>
       <h6>Your information will only be used to provide information based on your information.</h6>
       <br>

       <div class="mb-3">
         <label for="description">marriage*<span class="text-muted"></span></label>
         <select name = "marriage">
			<option value = "single">single</option>
			<option value = "married" selected = "selected">married</option>
			<option value = "divorced">divorced</option> 
        </select>
    </div>

    <div class="mb-3">
         <label for="description">Age of child*<span class="text-muted"></span></label>
         <select name = "Disability">
			<option value = "Not parent yet" selected = "selected">Not parent yet</option>
			<option value = "0-4">0-4</option>
			<option value = "4-11">4-11</option>
            <option value = "11-18">11-18</option> 
            <option value = "18-25">18-25</option> 
        </select>
    </div>
		
    <div class="mb-3">
        <label for="description">Condition of child*<span class="text-muted"></span></label>
        <select name = "Disability">
            <option value = "physical disability">physical disability</option>
            <option value = "None" selected = "selected">healthy</option>
            <option value = "mental health condition">mental health condition</option>
            <option value = "Other">other</option> 
        </select>
    </div>
		
    <div class="md-3">
        <label for="description">Do you want to see information of financial help?*<span class="text-muted"></span></label>
        <select name = "finance">
            <option value = "Yes">Yes</option>
            <option value = "No" selected = "selected">No</option>
        </select>
        <div class="invalid-feedback">
            Valid value is required.
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label for="address">Address*</label>
        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
        <div class="invalid-feedback">
            Please enter your address.
        </div>
    </div>
    
    <div class="col-md-6 mb-3">
        <label for="city">city*</label>
        <input type="text" class="form-control" id="city" required>
        <div class="invalid-feedback">
            Please enter your city.
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <label for="Country">Country*</label>
        <input type="text" class="form-control" id="Country" placeholder="" required>
        <div class="invalid-feedback">
            Please enter correct country name
        </div>
    </div>


    <div class="col-md-3 mb-3">
    <label for="Postcode">Postcode*</label>
    <input type="text" class="form-control" id="postcode" placeholder="" required>
    <div class="invalid-feedback">
        Postcode required.
    </div>
    </div>

    <hr class="mb-4">
    <button  action = "" class="btn btn-outline-success" type="submit">Submit</button>

</div

