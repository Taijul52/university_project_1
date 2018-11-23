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
           <li><a href="teacher_protfilo/faculty.php">Teacher</a></li>
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
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown">Login
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="../teacher_login.php">Teacher</a></li>
        <li><a href="../staff_login.php">Staff</a></li>
        
      </ul>
      </li>
        </ul>
        
        
          
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
 </header>
		<div class="container">
			<div class="row">
			<div class="col-md-8 ">
			   <div class="panel panel-primary">
			   <div class="panel-heading text-center">
			      <h2>List fo CSE Department Teachers</h2>
			   </div>
			   
			   <div class="panel-body">
			   <table class="table table-striped">
			  
			   		<tr>
			   			<th width="10%">Serial</th>
			   			<th width="60%" class="text-center">Teachers Name</th>
              <th width="30%" class="text-center">Designation</th>
			   		</tr>
          <!--pagination-->
          
          <!--pagination-->
			   <?php
 	          $db=new database();
              $query="select * from teacher_tbl where department='CSE'";
               $read=$db->select($query);
               $i=0;
              ?>
			   <?php if($read) {?>
			 <?php while ($row=$read->fetch_assoc()) { ?>
			   <?php $i++; ?>
			
			   <tr>
			   		<td><?php echo $i ;?></td>
			   		<td><a href="../teacher_profile.php?id=<?php echo $row['id']; ?>" class="list-group-item list-group-item-info"><?php echo $row['name']; ?></a></td>

            <td><a href="../teacher_profile.php?id=<?php echo $row['id']; ?>" class="list-group-item list-group-item-info"><?php echo $row['designation']; ?></a></td>
			   	</tr>
			   	<?php }?>
              <!--pagination-->
             
              <!--pagination-->
	          <?php } ?>

			   </table>
			   </div>
 					
		        
	        
			   </div>
			</div>
      <div class=col-md-4>
        <div class="panel panel-info">
         <div class="panel-heading text-center">
            <h2>Head of Department</h2>
         </div>
            
         <div class="panel-body">
           <img src="../public/img/department head/cse_head.jpg" alt="CSE Head" height="16" width="135" class="img-thumbnail" style="float:left;padding:1px;">
           <div style="float:right;margin-left:20px">
              <h2 style="font-weight: bolder;">prof. Dr. Md. Rabiul Islam</h2><br>
           <p>Designation:<b>Professor</b></p>
           </div>
          
         </div>
      </div>
			</div>

		</div>
 </body>
</html>







	