<?php
$pageTitle = "Account";
require('user_header.php');
?>

<div class="inside_container">
<span class="badge badge-pill badge-primary">Profile</span>
     <form class="needs-validation" novalidate>
       <div class="card" style="width: 10rem;">
         <div class="card-body">
           <div class="image" style="float:right">  <img max-width=20 max-height=20 src="<?php echo base_url(); ?>/assets/images/pkq.jpg" class="card-img" alt="..."></div>
          <button  action = "" class="btn btn-outline-success" style="float:right"type="submit">Upload</button>
         </div>
       </div>
       <div class="row">
         <div class="col-md-6 mb-3">
           <label for="firstName">First name*</label>
           <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid first name is required.
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <label for="lastName">Last name*</label>
           <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid last name is required.
           </div>
         </div>
       </div>

       <div class="mb-3">
         <label for="username">Username*</label>
         <div class="input-group">
           <div class="input-group-prepend">
             <span class="input-group-text">@</span>
           </div>
           <input type="text" class="form-control" id="username" placeholder="Username" required>
           <div class="invalid-feedback" style="width: 100%;">
             Your username is required.
           </div>
         </div>
       </div>

        <div class="mb-3">
         <label for="password">Password*<span class="text-muted"></span></label>
         <input type="password" class="form-control" id="password" placeholder="">
         <div class="invalid-feedback">
           Please enter a valid alphanumeric character.
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
         <label for="description">Disability*<span class="text-muted"></span></label>
         <select name = “Disability">
			<option value = "physical disability">physical disability</option>
			<option value = "None" selected = "selected">None</option>
			<option value = "mental health condition">mental health condition</option>
			<option value = "Other">other</option> 
		</select><br />
	 Other:<br /><textarea name="Other" rows = "10" cols="80">
	 Please Specify your disability here</textarea><br /><br />
       </div>
							   

       <div class="mb-3">
         <label for="description">Self description<span class="text-muted"></span></label>
         <input type="email" class="form-control" id="description" placeholder="you@example.com">
         <div class="invalid-feedback">
           Please enter a valid email address for shipping updates.
         </div>  
       </div>
		
		
       <div class="row">
         <div class="col-md-6 mb-3">
           <label for="Finance">Finance* </label>
           <input type="text" class="form-control" id="Finance" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid value is required.
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <label for="transport">transport*</label>
           <input type="text" class="form-control" id="transport" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid transport is required.
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <label for="single_income">single income family*</label>
           <input type="text" class="form-control" id="single_income" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid value is required.
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <label for="school">Home school*</label>
           <input type="text" class="form-control" id="school" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid value is required.
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <label for="number of child">number of child*</label>
           <input type="text" class="form-control" id="number of child" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid value is required.
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <label for="language">first language*</label>
           <input type="text" class="form-control" id="language" placeholder="" value="" required>
           <div class="invalid-feedback">
             Valid value is required.
           </div>
         </div>
         <div class="col-md-6 mb-3">
           <label for="address">Address*</label>
           <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
           <div class="invalid-feedback">
             Please enter your shipping address.
           </div>
         </div>

           <div class="col-md-6 mb-3">
                <label for="Country">Country*</label>
                <input type="text" class="form-control" id="Country" placeholder="" required>
                <div class="invalid-feedback">
                  Please enter your correct country name
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip*</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>



       </div>





       <hr class="mb-4">
       <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input" id="Visible_stranger">
         <label class="custom-control-label" for="same-address">Visible to strangers? </label>
       </div>
       <button  action = "" class="btn btn-outline-success" type="submit">Edit</button>



