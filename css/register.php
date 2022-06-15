<?php

if(isset($_POST['register'])){
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 'avr_consultancy');
  $uname = $_POST['uname'];
  $fname = $_POST['fname'];
  $phno = $_POST['phno'];
  $email = $_POST['email'];
  $pwd = $_POST['password'];

  $s = "SELECT * FROM users WHERE username =  '$uname'";

  $result = mysqli_query($con, $s);

  $num = mysqli_num_rows($result);

  if($num == 1){
    echo '<script type="text/javascript"> ';
      
      echo '  if (confirm("email already exist")) {';
      echo '    document.location = "register.php";';
      echo '  }';
      
      echo '</script>';

  }else{
    $reg = "INSERT INTO users(username, fname, phno, email, pwd) VALUES ('$uname', '$fname', '$phno', '$email', '$pwd')";
    mysqli_query($con, $reg);
    echo"<center><h3>Registration successfull!</h3></center>"; 
    //session_start();
    //header("location:login.php");
  }
}

?>