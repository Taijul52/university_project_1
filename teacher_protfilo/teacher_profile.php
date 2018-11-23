<?php

  include "config/config.php";
  include "libs/database.php";
  
?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>


  </head>
  <body>


  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>

          <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" >Protfilo
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="teacher_department.php">Teacher</a></li>
           <li><a href="#staff-pro">Staff</a></li>
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



  <?php
   $id=$id = $_GET['id'];
   $db=new database();
   $query="select * from teacher_tbl where id=$id";
   $read=$db->select($query);
  ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
       <div class="panel panel-default">
         <?php if($read) {?>
       			<?php while ($row=$read->fetch_assoc()) { ?>
         <div class="panel-heading text-center">
           <h3><?php echo $row['name']; ?> Profile</h3>
         </div>
         <div class="panel-body">
           <img src="<?php echo $row['image']; ?>" alt="image" class="img-circle profimg" width="100" height="100" style="margin-left:40%;">
           <h4 class="text-center"><?php echo $row['name']; ?></h4>
           <h5 class="text-center">Department Name:<?php echo $row['department']; ?></h5>
            <h5 class="text-center">Email:<?php echo $row['email']; ?></h5>
           <h5 class="text-center">Designation:<?php echo $row['designation']; ?></h5>
           <h5 class="text-center">Date of Join:<?php echo $row['doj']; ?></h5>
         </div>

       </div>
       <?php }?>
     <?php } else{ ?>
       <P>Sorry Search not found..</P>
        <?php  }?>
    </div>
  </div>

</div>
 </body>
</html>
