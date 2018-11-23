<?php
  include "libs/session.php";
  Session::init();
?>

<?php

  include "config/config.php";
  include "libs/database.php";
  include "helpers/Format.php";
?>
<?php
 $db=new database();
 $fm=new Format();
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
  <body style="background-color:#EBEDEE">
<div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid" style="background-color:#EBEDEE">
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
            <li ><a href="index.php">Home</a></li>
          </ul>
          <!--<form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>-->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" >Login
           <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="#teacher-pro">Teacher</a></li>
             <li><a href="#staff-pro">Staff</a></li>
           </ul>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<!-- Teacher Login Form-->

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-warning">
      <div class="panel-heading text-center">
         <h3>Password Recovery</h3>
      </div>
      <div class="panel-body">
        <?php
          if ($_SERVER['REQUEST_METHOD']=='POST') {
            $email=$fm->validation($_POST['email']);
            $email=mysqli_real_escape_string($db->link,$email);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo "Invalid Email Address !";
            }else{

            $mailquery="SELECT * FROM teacher_tbl WHERE email='$email' limit 1";
              $mailcheck=$db->select($mailquery);
             if($result !=false) {
                while($value=$mailcheck->fetch_assoc){
                  $techerid=$value['id'];
                  $username=$value['username'];
                }
				$text=substr($email,0,3);
				$rand=rand(10000,99999);
				$newpass="$text$rand";
				$password=md5($newpass);
				
             }else{
                echo "<span style='color:red;font-size:20px;margin-left:18%;'>Email not Exist</span>";
             }
             }
          }
         ?>
        <form class="form-horizontal" role="form" action="teacher_login.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="pwd" placeholder="Enter Valid Email" name="email">
      </div>
    </div>
    
    <div class="form-group">
     
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-3">
        <input type="submit" class="form-control   btn btn-warning" name="login"  value="Send Email">
      </div>
    </div>
  </form>
      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>
</div>

<!-- Teacher Registation End-->


  <div class="row">
    <div class="col-md-9 col-md-offset-4">
      <p>Copyright &copy; RUET 2017. All Rights Reserved</p>
     <p class="footersection"> For more info go <a href="http://www.ruet.ac.bd">www.ruet.ac.bd</a></p>

  </div>
</div>
</div>
 </body>
</html>
