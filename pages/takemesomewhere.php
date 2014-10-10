<?php include ("../header.php"); ?>
<div class="jumbotron1">
  <div class="container">
    <div class="col-sm-7">
      <?php include ("../sections/map.php"); ?>
      </div><!-- end column-->
      <div class="col-sm-5">
      <h2>Take me Somewhere</h2>
      <?php include ("../forms/flight.php"); ?>
      </div><!-- end column-->
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