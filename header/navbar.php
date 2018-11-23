<div class="container">
  <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar" data-hover="dropdown"  data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
        <ul class="nav navbar-nav">
          <li class=""><a href="index.php">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" >Protfilo<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="teacher_protfilo/faculty.php">Teacher</a></li>
              <li><a href="staff_protfilo/staff_class.php">Staff</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Registation<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="teacher_registation.php">Teacher</a></li>
              <li><a href="staff_registation.php">Staff</a></li>
            </ul>
          </li>
        
        <li><a href="about.php">About RUET</a></li>

      </ul>
        <?php 
        $id=Session::get("id");
        //$userlogin=Session::get("login");
        //if($userlogin==true)
         if(Session::get("teacher_login")==true){
        ?>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">profile
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="loginteacherprofile.php">View Profile</a></li>
        <li><a href="teacher_profile_update.php?id=<?php echo $id;?>">Update profile</a></li>
      </ul>
      </li>
        
          <li><a href="?action=logout">Logout</a></li>

        </ul>
        <?php }
          else if(Session::get("staff_login")==true){
          ?>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">profile
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="loginstaffprofile.php">View Profile</a></li>
        <li><a href="staff_profile_update.php?id=<?php echo $id;?>">Update profile</a></li>
      </ul>
      </li>

      </ul>
        <?php }?>
      </div><!-- /.navbar-collapse -->
    
  </nav>
 
</div><!-- /.container-fluid -->