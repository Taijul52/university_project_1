
<?php include_once 'header/header.php'; ?>

<?php
 $db=new database();
 $fm=new Format();
?>
<?php include_once 'header/navbar2.php'; ?>
<!-- Teacher Login Form-->
<div class="container">
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-warning">
      <div class="panel-heading text-center">
         <h3>Staff Login Form</h3>
      </div>
      <div class="panel-body">
        <?php
          if ($_SERVER['REQUEST_METHOD']=='POST') {
            $username=$fm->validation($_POST['username']);
            $password=$fm->validation(md5($_POST['password'])); //need password to md5

            $username=mysqli_real_escape_string($db->link,$username);
            $password=mysqli_real_escape_string($db->link,$password);

            $query="SELECT * FROM staff_tbl WHERE username='$username' AND password='$password'";
            $result=$db->select($query);
            if ($result !=false) {
              $value=mysqli_fetch_array($result);
              $row=mysqli_num_rows($result);
              if ($row>0) {
              Session::set("staff_login",true);
              Session::set("name",$value['name']);
              Session::set("username",$value['username']);
              Session::set("designation",$value['designation']);
              Session::set("class",$value['class']);
              Session::set("email",$value['email']);
              Session::set("mobile",$value['mobile']);
              Session::set("comment",$value['comment']);
              Session::set("password",$value['password']);
              Session::set("image",$value['image']);
              Session::set("userId",$value['id']);
              header("Location:index.php");
            }
            else {
              echo "<span style='color:red;font-size:20px;'>Sorry No result found</span>";
            }
            }
            else {
              echo "<span style='color:red;font-size:20px;margin-left:18%;'>Username OR Password not matched</span>";
            }
          }
         ?>
        <form class="form-horizontal" role="form" action="staff_login.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Username:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="pwd" placeholder="Enter Username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-6">
        <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-10 col-sm-2">
        <input type="submit" class="form-control  pull-right btn btn-success successbtn" name="staff_login"  value="Login" sytle="background-color:#00ACE9;">
      </div>
    </div>
    <div class="button" class="btn btn-danger">
      <a href="forgotpass.php">Forgot Password!</a>
    </div>
  </form>

      
      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>
</div>
</div>
<!-- staff login End-->

