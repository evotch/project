<?php include ("../header.php"); ?>
<div class="jumbotron>
  <div class="container">
    <div class="col-sm-12">
      <?php include ("../sections/map.php"); ?>
      </div><!-- end column-->
    </div>
  </div>
  <div class="container">
    <div class="alert alert-warning" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
      <span class="sr-only">Close</span></button>
      <strong>Los Cabos Airport</strong>  to reopen on October 8: <a href="#" class="alert-link">Learn More</a>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="signIn panel-white">
          <?php include ("../forms/signIn.php"); ?>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="panel-white">
          <?php include ("../myaccount/mvpgold.php"); ?>
        </div>
      </div>
    </div>
  </div>
    <?php include ("../sections/destinations.php"); ?>
    <?php include ("../footer.php"); ?>