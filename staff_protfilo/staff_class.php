<?php include_once 'header/header.php'; ?>
<header id="headersection">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container marginleft">
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
      <div class="collapse navbar-collapse" id="navbar" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
        <ul class="nav navbar-nav">
          <li class=""><a href="../index.php">Home</a></li>

          <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" >Protfilo
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="../teacher_protfilo/faculty.php">Teacher</a></li>
           <li><a href="staff_class.php">Staff</a></li>
         </ul>
       </li>

       <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">Registation
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="../teacher_registation.php">Teacher</a></li>
        <li><a href="../staff_registation.php">Staff</a></li>
      </ul>
    </li>

          </li>
       

        </ul>
        <!--<form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>-->
        
        
          
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
 </header>
<div class="container">
  <div class="panel panel-default">
     <div class="panel-heading text-center">
              <b style="font-size: 24px"><h1>Staff List of RUET</h1></b>      
  </div>
    <div class="panel-body" style="font-size: 18px" >
        <div class="row">
      <div class="col-md-12" style="height:30px">
      </div>
    </div>
        <div class="row">
         <div class="col-md-6">
           <div class="list-group">
      <p><a href="1st_class_staff.php" class="list-group-item list-group-item-info text-center ">First class staff list</a></p>
            </div>
        </div>
         
         
         <div class="col-md-6">
    	<div class="list-group">
      <p><a href="2nd_class_staff.php" class="list-group-item list-group-item-info text-center" >Second class staff list</a></p>
         </div>
       
       </div>
     </div>
     
    <div class="row">
      <div class="col-md-12" style="height:50px">
      </div>
    </div>
        <div class="row">
         <div class="col-md-6">
           <div class="list-group">
      <p><a href="3rd_class_staff.php" class="list-group-item list-group-item-info text-center ">Third class staff list</a></p>
            </div>
        </div>
         
         <div class="col-md-6">
    	<div class="list-group">
      <p><a href="4th_class_staff.php" class="list-group-item list-group-item-info text-center">Fourth class staff list</a></p>
         </div>
       
       </div>
     </div>
     </div>
     <div class="panel-footer text-center">
      <p>Copyright © RUET <?php echo date('Y');?>. All Rights Reserved</p>
     <p class="footersection"> For more info go <a href="http://www.ruet.ac.bd" target="_blank" alt="RUET Website">www.ruet.ac.bd</a></p>
     </div>
 </div>
 </div>

 