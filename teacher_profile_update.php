<?php include 'header/header.php';?>	

<?php
   $id = $_GET['id'];
   $db=new database();
   $query="select * from teacher_tbl where id=$id";
   $getdata=$db->select($query)->fetch_assoc();


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $name=mysqli_real_escape_string($db->link,$_POST['name']);
  $username=mysqli_real_escape_string($db->link,$_POST['username']);
  $dept=mysqli_real_escape_string($db->link,$_POST['department']);
  $email=mysqli_real_escape_string($db->link,$_POST['email']);
  $mobile=mysqli_real_escape_string($db->link,$_POST['mobile']);
  $desig=mysqli_real_escape_string($db->link,$_POST['designation']);
  $doj=mysqli_real_escape_string($db->link,$_POST['doj']);
  $password=mysqli_real_escape_string($db->link,md5($_POST['password']));

    $imgFile = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];
          
    if($imgFile)
    {
      $upload_dir = 'public/img/upload/'; // upload directory 
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
      $image = rand(1000,1000000).".".$imgExt;
      if(in_array($imgExt, $valid_extensions))
      {     
        if($imgSize < 5000000)
        {
          unlink($upload_dir.$getdata['image']);
          move_uploaded_file($tmp_dir,$upload_dir.$image);
        }
        else
        {
          $errMSG = "Sorry, your file is too large it should be less then 5MB";
        }
      }
      else
      {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";    
      } 
    }
    else
    {
      // if no image selected the old image remain as it is.
      $image = $getdata['image']; // old image from database
    }
  /*if (in_array($file_ext, $allow)==true) {
    echo"<span>You can upload only:".implode(', ',$allow)."</span>";
  }*/
  if(!isset($errMSG)){
    $query="update teacher_tbl set name='$name',username='$username',department='$dept', email='$email',mobile='$mobile', designation='$desig', doj='$doj', password='$password', image='$image' where id=$id";

    $update=$db->update($query);
    header("location:loginteacherprofile.php");
  }
  
}
?>
<?php 
  if (isset($error)) {
    echo "<span style='color:red'>".$error."</span>";
    
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
          <li ><a href="index.php">Home</a></li>

          <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" >Protfilo
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="teacher_department.php">Teacher</a></li>
           <li><a href="#staff-pro">Staff</a></li>
         </ul>
       </li>
 </ul>
     <?php 
        $id=Session::get("id");
        $userlogin=Session::get("teacher_login");
        if($userlogin==true){
        ?>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="loginteacherprofile.php?id=<?php echo $id?>">Profile</a></li>
      </ul>
        
      <?php }?>
       
          </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<!-- Teacher Update Form-->

<div class="container">
<div class="row">
  <div class="col-md-9 col-md-offset-2">
    <div class="panel panel-primary">
    <?php
  if(isset($errMSG)){
    ?>
        <div class="alert alert-danger">
          <span class="glyphicon glyphicon-info-sign"></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
  }
  ?>
      <div class="panel-heading text-center">
         <h3>Teacher Profile Update Form</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="teacher_profile_update.php?id=<?php echo $id;?>" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" value="<?php echo $getdata['name']; ?>" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="uname">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" value="<?php echo $getdata['username']; ?>" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dept">Department:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dept" value="<?php echo $getdata['department']; ?>" name="department">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="el">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="el" value="<?php echo $getdata['email']; ?>" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="mb">Mobile:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mb" value="<?php echo $getdata['mobile']; ?>" name="mobile">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="deg">Designation:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="deg" value="<?php echo $getdata['designation']; ?>" name="designation">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date of Join:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="pwd" value="<?php echo $getdata['doj']; ?>" name="doj">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" value="<?php echo $getdata['password']; ?>" name="password">
      </div>
    </div>
		<div class="form-group">
      <label class="control-label col-sm-2" for="pi">Choose Profile photo:</label>
      <div class="col-sm-10">
         <p><img src="public/img/upload/<?php echo $getdata['image']; ?>" height="100" width="100" /></p>
        <input type="file" class="form-control" id="pi"  name="image" accept="image/*" >
      </div>
    </div>
   
    <button type="submit" class="btn btn-primary updateprimarybtn" name="update">Update</button>
  </form>

        
      </div>
  </div>
</div>
</div>
	</div>
 </body>
</html>


