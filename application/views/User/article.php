<?php
require("user_header.php");
$pageTitle = "Article";
?>

<div class='inside_container'>


        <div class='col-sm-9' style="float:left">
          <div class="w3-card-4 w3-margin w3-white" >

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

            <!-- rich text editor -->
            <!doctype html>
            <html lang="zh">
            <head>
            	<meta charset="UTF-8">
            	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            	<meta name="viewport" content="width=device-width, initial-scale=1.0">
            	<link href="https://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
            	<link href="http://cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">

            	<link href="<?php echo base_url(); ?>/assets/css/editor.css" type="text/css" rel="stylesheet"/>
            </head>
            <body>
                <div class="container-fluid">
                    <div class="row">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php echo site_url("Home/article/1");?>">Comments</a></li>
                          <li class="breadcrumb-item"><a href="<?php echo site_url("Home/article/2");?>">write a comment</a></li>

                        </ol>
                      </nav>





                     <?php  if($comment==2) {?>

                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 nopadding">
                               <textarea id="txtEditor"></textarea>
                            </div>
                       </div>
                     </div>

                   <?php   } else { ?>
                     <div class="w3-card w3-margin" style="width:100%;">
                       <div class="w3-container w3-padding">
                         <h4>Popular Comments</h4>
                       </div>
                       <ul class="w3-ul w3-hoverable w3-white">
                         <li class="w3-padding-16">
                           <img src="<?php echo base_url(); ?>/assets/images/pkq.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                           <span class="w3-large">Lorem</span><br>
                           <span>Good</span>
                           <p>
                             <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-up"></i> &nbsp;12k</button>
                           <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-down"></i> &nbsp;20</button>
                           </p>
                         </li>
                         <li class="w3-padding-16">
                           <img src="<?php echo base_url(); ?>/assets/images/pkq.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                           <span class="w3-large">Ipsum</span><br>
                           <span>Bad</span>
                           <p >
                             <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-up"></i> &nbsp;12k</button>
                           <button type="button" class="w3-button w3-light-grey w3-padding-large w3-margin-top"><i class="fa fa-thumbs-down"></i> &nbsp;20</button>
                           </p>
                         </li>

                       </ul>
                     </div>


                        <?php }?>
                    </div>
                </div>

            	<script src="<?php echo base_url(); ?>/assets/js/jquery-2.1.0.min.js"></script>
            	<script src="https://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            	<script src="<?php echo base_url(); ?>/assets/js/editor.js"></script>
            	<script type="text/javascript">
            		$(document).ready( function() {

                     $("#txtEditor").Editor();

                	});
              	</script>
            </body>
            </html>
        </div>




</div>

<div class='col-sm-3' style="float:right">
    <h3>Relevant Reading</h3>
    <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Cras justo odio
      <span class="badge badge-primary badge-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Dapibus ac facilisis in
      <span class="badge badge-primary badge-pill">2</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Morbi leo risus
      <span class="badge badge-primary badge-pill">1</span>
    </li>
  </ul>
</div>
