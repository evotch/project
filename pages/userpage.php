<?php 
session_start(); 
if(!$_SESSION['logged']){ 
header("Location: index.php"); 
exit; 
} 
else {
include 'index2.php';
}
?>