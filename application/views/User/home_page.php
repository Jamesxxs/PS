<?php
require("user_header.php");
$pageTitle = "Home";
?>

<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/s.css">

<div class="inside_container">
<div class="jumbotron" style="text-align:center">
 <h1 class="display-4" style="background: linear-gradient(to right, blue, pink);
     -webkit-background-clip: text;
     color: transparent;">Parent Suportal</h1>

 <br>
 <br>
 <form class="" action = "" method = "post">
   <div class="row">
   <svg class="col-md-1 bi bi-search" style="float:left"width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" d="M12.442 12.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
     <path fill-rule="evenodd" d="M8.5 14a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM15 8.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
   </svg>
   <div class="col-md-1.5 dropdown">
     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       All Categories
     </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <div class="checkbox">
              <label>
                  <input type="checkbox">One
              </label>
          </div>
          <div class="checkbox">
              <label>
                  <input type="checkbox">Two
              </label>
          </div>
     </div>
   </div>
   <div class="col-md-1.5 dropdown">
     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       All Ages
     </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <a class="dropdown-item" href="#">All Ages</a>
       <a class="dropdown-item" href="#">0-3</a>
       <a class="dropdown-item" href="#">4-6</a>
       <a class="dropdown-item" href="#">7-9</a>
       <a class="dropdown-item" href="#">10-12</a>
       <a class="dropdown-item" href="#">above 12</a>
     </div>
   </div>
   <div class="col-md-1.5 dropdown">
     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       All Cities
     </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <a class="dropdown-item" href="#">All Cities</a>
       <a class="dropdown-item" href="#">0-3</a>
       <a class="dropdown-item" href="#">4-6</a>
       <a class="dropdown-item" href="#">7-9</a>
       <a class="dropdown-item" href="#">10-12</a>
       <a class="dropdown-item" href="#">above 12</a>
     </div>
   </div>
   <input type="search" id="search" class="col-md-5 form-control" placeholder="" style=""required>
   <a class="col-md-1.5 float-right btn btn-primary" type="submit" href="<?php echo site_url("Home/search_result");?>" role="button">Search</a>
   </div>
   <br>
   <div class="mx-auto" style="text-align:center">
     or:
     <a class="" type="submit" href="directory.php" role="button"> View all information</a>
   </div>
 </form>
</div>
 <div class="inside_container">
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">A</a>
      <a class="p-2 text-muted" href="#">B</a>
      <a class="p-2 text-muted" href="#">C</a>
      <a class="p-2 text-muted" href="#">D</a>
      <a class="p-2 text-muted" href="#">E</a>
      <a class="p-2 text-muted" href="#">F</a>
      <a class="p-2 text-muted" href="#">G</a>
      <a class="p-2 text-muted" href="#">H</a>
      <a class="p-2 text-muted" href="#">I</a>
      <a class="p-2 text-muted" href="#">J</a>
      <a class="p-2 text-muted" href="#">K </a>
      <a class="p-2 text-muted" href="#">CHILD</a>
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <h1 class="display-4 font-italic">Title 1</h1>
    <p class="lead my-3">Event contents.</p>
    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
  </div>
</div>

<div class="row mb-2">
   <div class="col-md-6">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-primary">event 2</strong>
         <h3 class="mb-0">Title</h3>
         <div class="mb-1 text-muted">Nov 12</div>
         <p class="card-text mb-auto">This is  content.</p>
         <a href="#" class="stretched-link">Continue reading</a>
       </div>
       <div class="col-auto d-none d-lg-block">
         <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">words</text></svg>
       </div>
     </div>
   </div>
   <div class="col-md-6">
     <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
       <div class="col p-4 d-flex flex-column position-static">
         <strong class="d-inline-block mb-2 text-success">event 2</strong>
         <h3 class="mb-0">title</h3>
         <div class="mb-1 text-muted">Nov 11</div>
         <p class="mb-auto">This is content.</p>
         <a href="#" class="stretched-link">Continue reading</a>
       </div>
       <div class="col-auto d-none d-lg-block">
         <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">words</text></svg>
       </div>
     </div>
   </div>
 </div>

 <main role="main" class="container">
   <div class="row">
     <div class="col-md-8 blog-main">
       <h3 class="pb-4 mb-4 font-italic border-bottom">
         More information
       </h3>

       <div class="blog-post">
         <h2 class="blog-post-title">article 1</h2>
         <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

         <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
         <hr>
         <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
         <blockquote>
           <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
         </blockquote>
         <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
         <h2>Heading</h2>
         <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
         <h3>Sub-heading</h3>
         <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
         <pre><code>Example code block</code></pre>
         <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
         <h3>Sub-heading</h3>
         <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
         <ul>
           <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
           <li>Donec id elit non mi porta gravida at eget metus.</li>
           <li>Nulla vitae elit libero, a pharetra augue.</li>
         </ul>
         <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
         <ol>
           <li>Vestibulum id ligula porta felis euismod semper.</li>
           <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
           <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
         </ol>
         <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
       </div><!-- /.blog-post -->

       <div class="blog-post">
         <h2 class="blog-post-title">article 1</h2>
         <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

         <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
         <blockquote>
           <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
         </blockquote>
         <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
         <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
       </div><!-- /.blog-post -->

       <div class="blog-post">
         <h2 class="blog-post-title">article 1</h2>
         <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

         <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
         <ul>
           <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
           <li>Donec id elit non mi porta gravida at eget metus.</li>
           <li>Nulla vitae elit libero, a pharetra augue.</li>
         </ul>
         <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
         <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
       </div><!-- /.blog-post -->



     </div><!-- /.blog-main -->

     <aside class="col-md-4 blog-sidebar">


       <div class="p-4">
         <h4 class="font-italic">what you want</h4>
         <ol class="list-unstyled mb-0">
           <li><a href="#">link</a></li>
           <li><a href="#">link </a></li>
           <li><a href="#">link </a></li>
           <li><a href="#">link </a></li>
           <li><a href="#">link </a></li>

         </ol>
       </div>

       <div class="p-4">
         <h4 class="font-italic">Elsewhere</h4>
         <ol class="list-unstyled">
           <li><a href="#">GitHub</a></li>
           <li><a href="#">Twitter</a></li>
           <li><a href="#">Facebook</a></li>
         </ol>
       </div>
     </aside><!-- /.blog-sidebar -->

   </div><!-- /.row -->

 </main><!-- /.container -->
</div>

