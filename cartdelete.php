<?php
  session_start();
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 're_consultancy');
  if(!isset($_SESSION['uname'])){
    header('Location: login.php');
  }
    if(isset($_POST) & !empty ($_POST)){
    $cart_id = $_POST['cart_id'];
    $con = mysqli_connect('localhost','root','','re_consultancy');
    $uname=$_SESSION['uname'];
    
   echo  $query="DELETE  from cart where id=$cart_id";
    $date = date('d-m-y');    
    $result=mysqli_query($con,$query) or die(mysqli_error($con));
    die;
  }
?>