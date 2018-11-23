<?php include 'header/header.php';?>


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
      <div class="collapse navbar-collapse" id="navbar" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>

          <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" >Protfilo
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="teacher_protfilo/faculty.php">Teacher</a></li>
           <li><a href="staff_protfilo/staff_class.php">Staff</a></li>
         </ul>
       </li>

       <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">Registation
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="teacher_registation.php">Teacher</a></li>
        <li><a href="staff_registation.php">Staff</a></li>
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
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">Login
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="teacher_login.php">Teacher</a></li>
        <li><a href="staff_login.php">Staff</a></li>
        
      </ul>
      </li>
        </ul>
        
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



  <?php
   $id = $_GET['id'];
   $db=new database();
   $query="select * from staff_tbl where id=$id";
   $read=$db->select($query);
  ?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
       <div class="panel panel-info">
         <?php if($read) {?>
       			<?php while ($row=$read->fetch_assoc()) { ?>
         <div class="panel-heading text-center">
           <h3><?php echo $row['name']; ?> Profile</h3>
         </div>
         <div class="panel-body">
           <div class="panelimg" style="float:left;padding:2px;">
        <img src="img/upload/<?php echo $row['image']; ?>" alt="image" height="150" width="150" style="border:2px solid gray">
         </div>
          <div class="paneltext" style="float:left;margin-left:20px">
           <h4 class=""><?php echo $row['name']; ?></h4>
           <p class="" >Email :<strong><?php echo $row['email']; ?></strong></p>
           <p class="" >Designation :<strong><?php echo $row['designation']; ?></strong></p>
           <p class="" >Mobile :<strong><?php echo $row['mobile']; ?></strong></p>
           <p class="">Staff class:<strong><?php echo $row['class']; ?></strong></p>
          </div>
         </div>

       </div>
       <?php }?>
     <?php } else{ ?>
       <P>Sorry not found..</P>
        <?php  }?>
    </div>
  </div>

</div>
 </body>
</html>
