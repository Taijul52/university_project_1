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
            <li class="active"><a href="../index.php">Home</a></li>

            <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" >Protfilo
           <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="#teacher-pro">Teacher</a></li>
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
          <li><a href="#about">About</a></li>

          </ul>
          <!--<form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>-->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<div class="container">
<div class="row">
  <div class="col-md-6 col-md-off-3">
    <div class="panel panel-default">
      <div class="panel-heading">
         <h3>Teacher Registation Form</h3>
      </div>
      <div class="panel-body">
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Name" name="name">

          </div>
          <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="" placeholder="Enter Name" name="username">

          </div>
          <div class="form-group">
            <label for="name">Email:</label>
            <input type="Email" class="form-control" id="" placeholder="Enter Email" name="email">

          </div>
          <div class="form-group">
            <label for="name">Designation:</label>
            <input type="text" class="form-control" id="" placeholder="Your Dedignation" name="designation">

          </div>
          <div class="form-group">

            <input type="submit" class="form-control" name="registation" value="Registaion">

          </div>
        </form>
      </div>
      <div class="panel-footer">

      </div>
    </div>
  </div>
</div>
</div>


<div class="container">
  <div class="row">
    <div class="col-md-9 col-md-offset-4">
      <p>Copyright © RUET 2017. All Rights Reserved</p>
     <p class="footersection"> For more info go <a href="http://www.ruet.ac.bd">www.ruet.ac.bd</a></p>

  </div>
</div>
</div>
 </body>
</html>
