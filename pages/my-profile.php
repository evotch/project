<?php include ("../sections/header.php"); ?>
<div class="container">
    <h1>My Profile</h1>
    <hr>
  <div class="row">

      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
          <div class="panel-white">
            <?php include ("../myaccount/mvpgold.php"); ?>
          </div>

      </div>
      <!-- right column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/200" class="avatar img-circle" alt="avatar">
          
        </div>
      </div>
  </div>
</div>




    <?php include ("../sections/footer.php"); ?>