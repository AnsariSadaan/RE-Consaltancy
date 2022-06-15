<?php
  
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 're_consultancy');
  

  if(isset($_POST['login'])){

    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $s = " select * from users where username = '$uname' && pwd = '$pwd'";    
    
    $result = mysqli_query($con, $s);
    $row=mysqli_fetch_array($result);
    $num = mysqli_num_rows($result);
    //$res=mysqli_query($con,$result) or die(mysqli_error());
    session_start();
    $_SESSION['uname']=$uname;
    $_SESSION['id']=$row['id'];
  
    if($num == 1){
      
      echo '<script type="text/javascript"> ';

              echo '  if (confirm("Login Successful")) {';
              echo '    document.location = "home.php";';
              echo '  }';

              echo '</script>';
    }
    else{
      echo '<script type="text/javascript"> ';
      
      echo '  if (confirm("wrong username or password")) {';
      echo '    document.location = "login.php";';
      echo '  }';
      
      echo '</script>';

    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.4.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="CSS/signup.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LOGIN PAGE</title>
    <style>
      body
      {
        background-image: url('./img/img5.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
        .container
            {
                width:50%;
                padding-top:5%;
                padding-bottom:8%;

            }
            .form-group input[type=text]
                {
                    padding:0.7%;
                    background-color: rgba(0, 0, 0, 0.10);
                    color:white;
                    border:0.5px solid teal;
                    padding-left:5%;
                    font-size:20px;
                    letter-spacing:0.2mm;
                    border-radius:3px;
                    width:85%;
                    }
                    
            .form-group input[type=password]
                {
                    padding:0.7%;
                    background-color: rgba(0, 0, 0, 0.10);
                    color:white;
                    border:0.5px solid teal;
                    padding-left:5%;
                    font-size:20px;
                    letter-spacing:0.2mm;
                    border-radius:3px;
                            width:85%;
                        }

                         label
                         {
                              font-size:22px;
                              color:white;

                              letter-spacing:0.2mm;
                         }
                         td
                         {

                               padding:1.5%;


                          }
                           table
                           {
                              margin-left:12%;
                               font-family:times new roman;
                              width:80%;
                          }
                          button
                          {
                          margin-top:6%;
                          float:right;
                         margin-right:20%;

                          }
    </style>
</head>
<body>
<div style="background-color: #9FC088 " >
 <nav   class="navbar navbar-expand-lg  navbar-dark bg-dark">
                    <a   class="navbar-brand" href="#"><span ><h2 style="text-transform:uppercase;  font-size:20px; color:aqua; font-weight:bold; font-family:Copperplate Gothic Bold Copperplate Gothic Bold; letter-spacing:0.7mm; " >RE Consultancy</h2></span></a>


   </nav>
</div>
        <div class="container">


            <form  style="background-color: rgba(0, 0, 0, 0.99);" method="POST" action="login.php" ><br>
                <table>
                    <tr class="form-group">
                        <td colspan="2">
                                <centre><h1 style="Font-size:25px; color:white; font-family:times new roman;font-weight:bold;text-align:center;  text-transform:uppercase; letter-spacing:0.4mm;" > LogIn </h1><center><br><br>
                       </td>


                    </tr >
                    <tr class="form-group">
                        <td>
                                <label>Enter Username</label>
                        </td>
                        <td>
                                <input type="text" placeholder=" Username" name="uname" required>
                        </td>

                    </tr >
                    <tr class="form-group">
                          <td>
                                <label> Enter Password</label> </label>
                          </td>
                          <td>
                                <input type="password" placeholder=" Password" name="pwd" required>
                           </td>

                    </tr>
                     <tr >

                        <td colspan="2">
                                <button  href="home.php" type="submit" class="btn btn-primary"  class="Login" value="login" name="login"><font >Login</font></button>
                        </td>
                    </tr>
                    <tr class="form-group">
                      <td colspan="2" >
                           <span class="re" style="color:white;">New User? <a href="index.php">Register</a></span>
                       </td>
                    </tr>
              </table><br><br>
            </form>
        </div>
        <!-- Footer -->
        <footer class="page-footer font-small  pt-4" style="background-color: LemonChiffon;">
                    <!-- Footer Links -->
                    <div class="container-fluid text-center text-md-left">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-6 mt-md-0 mt-3">
                                <!-- Content -->
                                <h5 class="text-uppercase">RE Consultancy</h5>
                                <p>We are experienced real estate professionals who buy and sell property across the nation with the primary intent of creating positive outcomes for people in predicament</p>
                            </div>
                            <!-- Grid column -->
                            <hr class="clearfix w-100 d-md-none pb-3">
                            <!-- Grid column -->
                            <div class="col-md-3 mb-md-0 mb-3">
                                <a href="https://www.facebook.com/" target = "-blank" class="fa fa-facebook"></a>
                                <a href="https://www.instagram.com/" target = "_blank" class="fa fa-instagram"></a>
                                <a href="https://www.linkedin.com/in/ansari-sadaan-82a191214/" target = "_blank" class="fa fa-linkedin"></a>
                                <a href="https://twitter.com/home?lang=en" target = "_blank" class="fa fa-twitter"></a>
                            </div>
                            <!-- Grid column -->
                            <div class="col-md-3 mb-md-0 mb-3">
                                <!-- Links -->
                                <h5 class="text-uppercase">Links</h5>
                                <ul class="list-unstyled">
                                    <li>
                                    <a href="home.php" style="color:Teal; font-size:17px;" target = "_self">Home</a>
                                    </li>
                                    <li>
                                    <a href="about.php" style="color:Teal; font-size:17px;">About us</a>
                                    </li>
                                    <li>
                                    <a href="buy.php" style="color:Teal; font-size:17px;" target = "_self">Buy</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- Footer Links -->

                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3" style="background-color: moccasin;">© 2022 Copyright:
                        <a href="#"> RE Consultancy | Ansari Sadaan</a>
                    </div>
                    <!-- Copyright -->
                </footer>
           <!-- Footer -->
   
</body>
</html>