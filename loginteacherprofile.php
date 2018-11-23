<?php include_once 'header/header.php'; ?>

 <?php  
        if(isset($_GET['action']) && $_GET['action']=="logout" ) {
         Session::destroy();
        header("Location:index.php");
        }

?>
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
           <li><a href="#staff-pro">Staff</a></li>
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
        <?php 
        $id=Session::get("id");
        $userlogin=Session::get("teacher_login");
        if($userlogin==true){
        ?>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="teacher_profile_update.php?id=<?php echo $id?>">Update profile</a></li>
          <li><a href="?action=logout">Logout</a></li>

        </ul>
        <?php }?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>



  <?php
   $id=Session::get("id");
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
           <div class="panelimg" style="float:left;padding:2px;">
        <img src="public/img/upload/<?php echo $row['image']; ?>" alt="image" height="150" width="150" style="border:2px solid gray">
         </div>
            <div class="paneltext" style="float:left;margin-left:20px">
           <h4 class=""><?php echo $row['name']; ?></h4>
           <h5 class="">Department Name:<?php echo $row['department']; ?></h5>
            <h5 class="">Email:<?php echo $row['email']; ?></h5>
            <h5 class="">Mobile:<?php echo $row['mobile']; ?></h5>
           <h5 class="">Designation:<?php echo $row['designation']; ?></h5>
           <h5 class="">Date of Join:<?php echo $row['doj']; ?></h5>
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
