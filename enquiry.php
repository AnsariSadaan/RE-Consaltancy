<?php

if(isset($_POST['submit'])){
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 're_consultancy');
  $name = $_POST['name'];
  $email = $_POST['email'];
  $desc = $_POST['desc'];
  $reg = "INSERT INTO enquiries(name, email, description) VALUES ('$name', '$email', '$desc')";
  mysqli_query($con, $reg);
  echo"<center><h3>Message sent successfull!</h3></center>"; 
  header("location:home.php");
  }
  else{
      echo".$reg.";
  }

?>