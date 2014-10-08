<?php include ("header.php"); ?>

    <div class="jumbotron hero">
      <div class="container">
        <div class="col-sm-6">
        <?php include ("forms/homelet.php"); ?>
        </div><!-- end column-->
        <div class="col-sm-6">
          <div class="sales-offer">
            <h1>Flight Deals</h1>
            <h3>Low Fares Starting at</h3>
            <div class="price"><sup>$</sup>79<sub>one way</sub></div>
            <button type="button" class="btn btn-lg btn-default">View Offers</button><br>
            <small>Available for a Limited Time</small>
          </div>
        </div>        
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
           <?php include ("forms/signIn.php"); ?> 
        </div>
      </div>
      <div class="col-sm-8">
      <div class="panel-white">
           
        </div>
      </div>
      </div></div>
    <?php include ("footer.php"); ?>