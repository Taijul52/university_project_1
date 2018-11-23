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
     <?php
          if ($_SERVER['REQUEST_METHOD']=='POST'&& isset($_POST['teacher_login'])) {
            $username=$fm->validation($_POST['username']);
            $password=$fm->validation(md5($_POST['password'])); //need password to md5

            $username=mysqli_real_escape_string($db->link,$username);
            // $mobile=mysqli_real_escape_string($db->link,$_POST['mobile']);
            $password=mysqli_real_escape_string($db->link,$password);
         

            $query="SELECT * FROM teacher_tbl WHERE username='$username' AND password='$password' ";
            $result=$db->select($query);
            if ($result !=false) {
              $value=mysqli_fetch_array($result);
              $row=mysqli_num_rows($result);
              if ($row>0) {
              Session::set("teacher_login",true);
              Session::set("name",$value['name']);
              Session::set("username",$value['username']);
              Session::set("department",$value['department']);
              Session::set("email",$value['email']);
              Session::set("mobile",$value['mobile']);
              Session::set("designation",$value['designation']);
              Session::set("doj",$value['doj']);
              Session::set("password",$value['password']);
              Session::set("image",$value['image']);
              Session::set("userId",$value['id']);
              header("Location:index.php");
            }
            else {
             echo "<div class='alert alert-danger text-center'>
              <span class='glyphicon glyphicon-info-sign'></span><strong>Sorry no Result Found</strong>
            </div>";
            }
            }
            else {
              echo "<div class='alert alert-danger text-center'>
              <span class='glyphicon glyphicon-info-sign'></span><strong>username OR Password not matched</strong>
            </div>";
            }
          }
         ?>
    <div class="panel panel-warning">

      <div class="panel-heading text-center">
         <h3>Teacher Login Form</h3>
      </div>
      <div class="panel-body">
       
        <form class="form-horizontal" role="form" action="teacher_login.php" method="post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="un">Username:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="un" placeholder="Enter Username" name="username" >
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
        <input type="submit" class="form-control  pull-right btn btn-success successbtn" name="teacher_login"  value="Login" sytle="background-color:#00ACE9;">
      </div>
    </div>
    <div class="button" class="btn btn-danger">
      <a href="forgotpass.php">Forgot Password!</a>
    </div>
  </form>

      
      </div>
     
</div>
</div>
     
    </div>
  </div>
</div>
</div>
<!-- Teacher Login End-->
 </body>
</html>
