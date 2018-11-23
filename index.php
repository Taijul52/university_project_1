<?php include 'header/header.php'; ?>
    
     <div class="container logsearch clearfix">
        <div class="row">
          <div class="col-md-9">
          </div>
           <div class="col-md-3">
             <div class="btn-group logbut">
              
              <button  class="btn btn-success " id="teclogin">
               <a href="teacher_login.php">Teacher Login</a></button>

               <button type="button" class="btn btn-success stflogin">
               <a href="staff_login.php" style="color:white;">Staff Login</a></button>
             </div>
             <form class="form-inline" action="search.php?search" method="get">
              
               <div class="form-group inputg">
                 <input type="text" class="form-control serachbar" placeholder="Search...." name="search" id="serachbar">
               
                 <input type="submit" name="submit" value="Search" id="but">
                 </div>
            </form>
           </div>

        </div>

     </div>

  <div class="container clearfix logoimg">
    <div class="row">
      <div class="col-md-8">
        <img src="img/ruet.png" alt="RUET logo" class="img-responsive">

      </div>
      <div class="col-md-4">
      </div>
    </div>
  </div>
  <?php include 'header/navbar.php'; ?>
   <div class="container">
     <div class="well">
      <?php 

        include 'slider/slider.php';
      ?>
    </div>
   </div>
  
 <div class="container">
   <div class="row">
     <div class="col-md-6">
       <div class="panel panel-info"> <!--teacher-->
         <div class="panel-heading text-center">
           <p style="color:#242424;font-size:18px;">University Teacher Information<p>
         </div>
         <div class="panel-body">
        <P>RUET has currently eighteen departments under four faculties. The university has taken to plan open more departments which was under process.</P>
        <p><strong>The faculties are</strong></p>
      <p>1.Faculty of Mechanical Engineering</p>
      <p>2.Faculty of Civil Engineering</p>
      <p>3.Faculty of Electrical & Computer Engineering</p>
      <p>4.Faculty of Applied Science and Engineering</p>
      <p>Each department contain many teacher.</p>
         </div>

       </div>
     </div> <!-- Teacher End-->

     <div class="col-md-6">
       <div class="panel panel-info"> <!--staff-->
         <div class="panel-heading text-center">
           <p style="color:#242424;font-size:18px;">University Staff Information<p>
         </div>
         <div class="panel-body">
              <p>RUET has currently four types staff.Each staff works on difference faculties of difference department.</p>

              <p><h4>The staff classes are</h4></p>
            <p>1.First class staff</p>
            <p>2.Second class staff</p>
            <p>3.Third class staff</p>
            <p>4.Fourth class staff</p>
         </div>
       </div>
     </div> <!-- staff End-->
   </div>

 </div>
 <div class="container">
<div class="paanle panel-info">
 <div class="panel-heading text-center" style="color:#263238">
  <p>Copyright © RUET <?php echo date('Y');?>. All Rights Reserved</p>
     <p class="footersection"> For more info go <a href="http://www.ruet.ac.bd" target="_blank" alt="RUET Website">www.ruet.ac.bd</a></p>
 </div>
  </div>
  </div>
  
