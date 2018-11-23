<?php include_once 'header/header.php'; ?>
<?php
 $db=new database();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    
    if ($name== ''||  $username== ''|| $dept== ''||$email== ''|| $mobile== ''||$desig==''||$doj==''||$password==''|| $imgFile=='') {

    $errMSG="Field must be filled";
    }
    
    else
    {
      $upload_dir = 'public/img/upload/'; // upload directory
  
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
    
      // valid image extensions
      $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    
      // rename uploading image
      $upload_image = rand(1000,1000000).".".$imgExt;
        
      // allow valid image file formats
      if(in_array($imgExt, $valid_extensions)){     
        // Check file size '5MB'
        if($imgSize < 5000000)        {
          move_uploaded_file($tmp_dir,$upload_dir.$upload_image);
        }
        else{
          $errMSG = "Sorry, your file is too large.";
        }
      }
      else{
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";    
      }
    }
    


	if(!isset($errMSG)){

		$query="insert into teacher_tbl(name,username,department,email,mobile,designation,doj,password,image) values('$name',
		'$username','$dept','$email','$mobile','$desig','$doj','$password','$upload_image')";
		$insert=$db->create($query);
	}

}
?>
<?php
  if (isset($error)) {
  	echo "<span style='color:red'>".$error."</span>";

  }
?>
<?php include_once 'header/navbar2.php'; ?>

<!-- Teacher Registation Form-->
<div class="container">
<div class="row">
  <div class="col-md-9 col-md-offset-2">
   <?php
  if(isset($errMSG)){
      ?>
            <div class="alert alert-danger">
              <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
           
   <?php }?>

    <div class="panel panel-primary">
      <div class="panel-heading text-center">
         <h3>Teacher Registation Form</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" action="teacher_registation.php" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="uname">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dept">Department:</label>
      <div class="col-sm-10">
        <select class="form-control" id="dept" name="department">
          <option value="">Select Department</option>
          <?php 
            $query="select * from department";
            $dept=$db->select($query);
            if($dept){
              while ($result=$dept->fetch_assoc() ){
               ?> 
                <option ><?php echo $result['dept_name']; ?></option>
              <?php } } ?>
         
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="el">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="el" placeholder="Enter Email" name="email">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="mb">Mobile:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="mb" placeholder="Enter Mobile Number" name="mobile">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="deg">Designation:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="deg" placeholder="Enter Designation" name="designation">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Date of Join:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="pwd" placeholder="Enter Date of Join" name="doj">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
      </div>
    </div>
		<div class="form-group">
      <label class="control-label col-sm-2" for="pi">Choose Profile photo:</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="pi"  name="image" accept="image/*">
      </div>
    </div>
    <!--<div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>-->
    <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <input type="submit" class="form-control  pull-right" name="registation" id="registaion" value="Registaion">
      </div>
    </div>
  </form>

        
      </div>
     
    </div>
  </div>
</div>
</div>
<!-- Teacher Registation End-->
