<?php

/////////////////////////////////////////////////////////////////////
// This is the only portion of the code you may need to change.
// Indicate the location of your images 
$root = $_SERVER['DOCUMENT_ROOT'];
// use if specifying path from root
//$root = $_SERVER['DOCUMENT_ROOT'];

$path = '/img/stock/';

// End of user modified section 
/////////////////////////////////////////////////////////////////////
 
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}


// Obtain list of images from directory 
$imgList = getImagesFromDir($root . $path);

$img = getRandomFromArray($imgList);
?> 
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <title>Alaska Airlines Style Guide</title>
  <!-- Bootstrap core CSS -->
  
  <link href="../css/styles.css" rel="stylesheet">
  <link href='/fonts/atlas.css' rel='stylesheet' type='text/css'>
    <link href="https://fontastic.s3.amazonaws.com/tUrLZaJKE2Y9qso8kdx4yQ/icons.css" rel="stylesheet">
    <script src="https://fontastic.s3.amazonaws.com/tUrLZaJKE2Y9qso8kdx4yQ/icons.js"></script>
    <!--<link http://www.newrepublic.com/sites/all/themes/tnr/assets/fonts/Atlas%20Grotesk%20Web-Regular.woff>-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style id="holderjs-style" type="text/css"></style>
  </head>
  <!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper" style="min-height:75px;">
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="../img/logo.png" height="25"></a>
        </div>

<ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="cursor:default;"><?php

        print date("l, F j, Y", strtotime("-8 hours"));
        ?> 
        <script>
        function updateClock ( )
    {
    var currentTime = new Date ( );
    var currentHours = currentTime.getHours ( );
    var currentMinutes = currentTime.getMinutes ( );
    var currentSeconds = currentTime.getSeconds ( );
 
    // Pad the minutes and seconds with leading zeros, if required
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;
 
    // Choose either "AM" or "PM" as appropriate
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";
 
    // Convert the hours component to 12-hour format if needed
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;
 
    // Convert an hours component of "0" to "12"
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;
 
    // Compose the string for display
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
     
     
    $("#clock").html(currentTimeString);
         
 }
 
$(document).ready(function()
{
   setInterval('updateClock()', 1000);
});</script></a></li>
        </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-5" style="max-height: 500px; overflow: hidden;">
        <img class="img-responsive" style="min-width:460px" src="<?php echo $path . $img ?>" alt="" />
        </div>
      <div class="col-sm-7">
      <div class="page-header">
  <h3 class="secondary"><strong>Alaska</strong> <span class="navy">Digital Style Guide</span></h3>
</div>
<p>For access to the digital style guide please go to <a href="http://www.alaskabrandhub.com">AlaskaBrandHub.com</a>.
</p>
<div class="form-group">
  
          <form action="verify.php" method="post">
          <div class="input-group">
      <input class="form-control" type="text" placeholder="Enter Access Code" name="username">
      <input style="display:none;" type="password" value="password" name="password">
      <span class="input-group-btn">
        <button type="submit" name="submit" value="Login" class="btn btn-block btn-teal">Go!</button>
      </span>

    </div><!-- /input-group -->
            <!--<input class="form-control" type="text" placeholder="Enter Access Code" name="username"><br>
            <input style="display:none;" type="password" value="password" name="password">
            <button type="submit" name="submit" value="Login" class="btn btn-block btn-primary">Enter</button>
            <input type="submit" name="submit" value="Login">-->
          </form>
          </div>
      </div>


      </div>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-12"><hr></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
    </div>
    <footer class="asdsg-footer" role="contentinfo">
  <div class="container">
    <p></p>    
  </div>
</footer>
    

<!--              <form action="verify.php" method="post">
            User Name:<br>
            <input type="text" name="username"><br><br>
            Password:<br>
            <input type="password" placeholder="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
          </form>


          <form action="verify.php" method="post">
            Access Code<br>
            <input type="text" value="asdsg" name="username">
            
            <input style="visibility:hidden" type="password" value="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
          </form>

          -->
