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
           <li><a href="faculty.php">Teacher</a></li>
           <li><a href="../staff_protfilo/staff_class.php">Staff</a></li>
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
              <b style="color:black"><h1>List of Department of RUET</h1></b>      
  </div>
     <div class="panel-body">
            
        <div class="row">
         <div class="col-md-6">  
    <div class="list-group">
    <p><a href="IPE_teachers.php" class="list-group-item list-group-item-info">Department of Industrial & Production Engineering (IPE)</a></p>
    <p><a href="GCE_teachers.php" class="list-group-item list-group-item-info">Department of Glass & Ceramic Engineering (GCE)</a></p>
    <p><a href="MTE_teachers.php" class="list-group-item list-group-item-info">Department of Mechatronics Engineering (MTE)</a></p>
    <p><a href="ME_teachers.php" class="list-group-item list-group-item-info">Department of Mechanical Engineering (ME)</a></p>
    <p><a href="MSE_teachers.php" class="list-group-item list-group-item-info">Department of Material Science & Engineering (MSE)</a></p>
    <p><a href="CFPE_teachers.php" class="list-group-item list-group-item-info">Department of Chemical & Food Process Engineering (CFPE)</a></p>
    <p><a href="CSE_teachers.php" class="list-group-item list-group-item-info">Department of Computer Science & Engineering (CSE)</a></p>
    <p> <a href="EEE_teachers.php" class="list-group-item list-group-item-info">Department of Electrical & Electronic Engineering (EEE)</a></p>
    <p><a href="ETE_teachers.php" class="list-group-item list-group-item-info">Department of Electronics & Telecommunication Engineering (ETE)</a></p>
   
  </div>
        
            
        </div> <!--end first col-md-6 -->
         
         <div class="col-md-6">
        
    <div class="list-group">
    <p> <a href="CE_teacher.php" class="list-group-item list-group-item-info">Department of Civil Engineering (CE)</a></p>
     <p><a href="URP_teachers.php" class="list-group-item list-group-item-info">Department of Urban & Regional Planning (URP)</a></p>
     <p><a href="Arch_teachers.php" class="list-group-item list-group-item-info">Department of Architecture (Arch.)</a></p>
      <p><a href="ECE_teachers.php" class="list-group-item list-group-item-info">Department of Electrical & Computer Engineering(ECE)</a></p>
     <p> <a href="BECM_teachers.php" class="list-group-item list-group-item-info">Department of Building Engineering & Construction Management (BECM)</a></p>
     <p><a href="Chem_teachers.php" class="list-group-item list-group-item-info">Department of Chemistry (Chem)</a></p>
     <p> <a href="Math_teachers.php" class="list-group-item list-group-item-info">Department of Mathematics (Math)</a></p>
      <p><a href="Phy_teachers.php" class="list-group-item list-group-item-info">Department of Physics (Phy)</a></p>
       <p><a href="Hum_teachers.php" class="list-group-item list-group-item-info">Department of Humanities (Hum)</a></p>
     </div>
       </div>
     </div>
     </div> <!-- end panel-body -->
     <div class="panel-footer text-center">
     <p>Copyright © RUET <?php echo date('Y');?>. All Rights Reserved</p>
     <p class="footersection"> For more info go <a href="http://www.ruet.ac.bd" target="_blank" alt="RUET Website">www.ruet.ac.bd</a></p>
     </div>
      
    </div>
  </div>

  


