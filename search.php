<?php

	include "config/config.php";
  	include "libs/database.php";

?>
<?php
  if (!isset($_GET['search']) || $_GET['search']==NULL) {
      echo "<script>alert('Please Search Something')
       window.location='index.php'

      </script>";
      
   exit();
  }
  else {
    $search=$_GET['search'];
  }
?>


<?php
 $db=new database();
 $query="select * from teacher_tbl where (name LIKE '%$search%' OR designation LIKE '%$search%' OR username LIKE '%$search%' OR department LIKE '%$search%' OR email LIKE '%$search%' OR mobile LIKE '%$search%' OR doj LIKE '%$search%') UNION ALL 
    select * from staff_tbl where (name LIKE '%$search%' OR designation LIKE '%$search%' OR class LIKE '%$search%' OR email LIKE '%$search%'OR mobile LIKE '%$search%' OR comment LIKE '%$search%'   )";
 $read=$db->select($query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rajshahi University of Engineering $ Technology</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/main.css">
    
    <script src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>


  </head>
  <body>

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
          <li class=""><a href="index.php">Home</a></li>

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
 </header>
    <div class="container"> 
      <div class="row">
      <div class="col-md-12 ">
         <div class="panel panel-primary">
         <div class="panel-heading text-center">
            <h2>Search Result</h2>
         </div>
         
         <div class="panel-body">
         <table class="table table-striped">
        
            <tr>
              
              <th width="20%">Name</th>
              <th width="20%">designation</th>
              <th width="20%">Email</th>
              
              <th width="10%">Mobile</th>
            </tr>
      	<?php if($read) 
          
        { ?>
       
			<?php while ($row=$read->fetch_assoc()) { ?>
    

	<tr>
    
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['designation']; ?></td>
		<td><?php echo $row['email']; ?></td>
    
    <td><?php echo $row['mobile']; ?></td>

	</tr>
		<?php }?>
	<?php } else{ ?>
		<div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign text-center"> Sorry Search Not Found</span> 
          
    </div>
	   <?php   }?>
      	
      		
      </table>
    </div>
  </div>
  </div>
  </div>
  </div>
  </body>
  </html>
	
	
