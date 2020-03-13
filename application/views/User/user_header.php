    <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
            <i class="fa fa-remove"></i>
        </a>
    </nav>
    <div class="w3-bar theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="<?php echo site_url("Home/index");?>" class="w3-bar-item w3-button theme-d2"><img src="<?php echo base_url(); ?>/assets/images/logo.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"> ParentSuportal</a>
        <a href="<?php echo site_url("Home/directory");?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Directory</a>
        <a href="<?php echo site_url("Home/timeline");?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Timeline</a>
        <a href="<?php echo site_url("Home/favourites");?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Favourites</a>
        <a href="<?php echo site_url("Home/todo_list");?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Todo list</a>
        <a href="<?php echo site_url("Home/profile");?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Profile</a>
        <a href="<?php echo site_url("Home/user_detail");?>" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Account</a>
    </div>

    <div class="container-fluid">
  
