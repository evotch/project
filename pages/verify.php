<?php 
if(isset($_POST['submit'])){ 

$password = 'password';
$username = 'asdsg';


if($_POST['password'] == 'password' && $_POST['username'] == $username){ 
session_start(); 
$_SESSION['logged'] = TRUE; 
header("Location: home.php"); // Modify to go to the page you would like 
exit; 
}else{ 
header("Location: index.php"); 
exit; 
} 
}else{ //If the form button wasn't submitted go to the index page, or login page 
header("Location: google.com"); 
exit; 
} 
?>