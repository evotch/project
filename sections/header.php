<?php 
session_start(); 
if(!$_SESSION['logged']){ 
  header("Location: index.php"); 
  exit; 
} 
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

<!-- <link href="../css/styles.css" rel="stylesheet"> 
<link href="https://www.alaskaair.com/stylesheets/brand.css" rel="stylesheet">
<<link href='/fonts/atlas.css' rel='stylesheet' type='text/css'> -->


  <link rel="stylesheet" href="http://www.alaskaair.com/stylesheets/brand.css">
  <link rel="stylesheet" href="../../css/brand.css">
  <link rel="stylesheet" href="../header/css/headerfooter.css">
 <style type="text/css">
  @font-face {
  font-family: Circular;
  src: url('https://sp-bootstrap.global.ssl.fastly.net/5.2.0/fonts/circular-book.woff2') format('woff2'), url('https://sp-bootstrap.global.ssl.fastly.net/5.2.0/fonts/circular-light.woff') format('woff');
  font-weight: normal;
  font-style: normal
  }
  @font-face {
  font-family: Circular;
  src: url('https://sp-bootstrap.global.ssl.fastly.net/5.2.0/fonts/circular-bold.woff2') format('woff2'), url('https://sp-bootstrap.global.ssl.fastly.net/5.2.0/fonts/circular-bold.woff') format('woff');
  font-weight: bold;
  }
  body {font-family:Circular, Arial !important}
  .pure-menu, .pure-g, .pure-g [class*="pure-u"] {
  font-family: Circular;
  }

<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
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
  <body class="dsg">
<?php include ("../header/output/header.html"); ?>