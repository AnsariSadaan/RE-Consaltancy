<?php
if (isset($_POST['register'])) 
{
    $con = mysqli_connect('localhost', 'root');
    mysqli_select_db($con, 're_consultancy');
    $uname = $_POST['username'];
    $fname = $_POST['fname'];
    $phno = $_POST['phno'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $s = "SELECT * FROM users WHERE username =  '$uname'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num >= 1) {
        echo '<script type="text/javascript"> ';

        echo '  if (confirm("Username already exist")) {';
        echo '    document.location = "index.php";';
        echo '  }';

        echo '</script>';
    } else {
        session_start();
        $reg = "INSERT INTO users(username, fname, phno, email, pwd) VALUES ('$uname', '$fname', '$phno', '$email', '$pwd')";
        mysqli_query($con, $reg);
        echo '<script type="text/javascript"> ';
        echo ' if (confirm("Registration successfull!")) {';
        echo ' document.location = "login.php";';
        echo ' }';
        echo '</script>';
    }
} ?>

<html>
    <head>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./js/jquery-3.4.1.slim.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
            body{
                    overflow-x: hidden;
                    background-image: url('./img/bk15c.jpg');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                }
            .vform
                {
                    width:65%;
                }
            .form-group input[type=text]
                {
                    padding:0.7%;
                    background-color: rgba(0, 0, 0, 0.10);
                    color:white;
                    border:0.5px solid teal;
                    padding-left:5%;
                    font-size:19px;
                    letter-spacing:0.2mm;
                    width:80%;
                }
                
            .form-group input[type=password]
                {
                    padding:0.7%;
                    background-color: rgba(0, 0, 0, 0.10);
                    color:white;
                    border:0.5px solid teal;
                    padding-left:5%;
                    font-size:19px;
                    letter-spacing:0.2mm;
                    width:80%;
                }
            .form-group input[type=email]
                {
                    padding:0.7%;
                    background-color: rgba(0, 0, 0, 0.10);
                    color:white;
                    border:0.5px solid teal;
                    padding-left:5%;
                    font-size:19px;
                    letter-spacing:0.2mm;
                    width:80%;
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
                    margin-left:10%;
                    width:90%;
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
    <div style="background-color: #9FC088 ">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"><span><h2 style="text-transform:uppercase; color:aqua; font-weight:bold; font-family:Copperplate Gothic Bold Copperplate Gothic Bold; letter-spacing:0.7mm; font-size:20;">RE Consultancy</h2></span></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        <br>
        <!--row for form-->
        <div class="row"">
            <div class="container" >
                <div class="owner" style="padding:1%;background-color:black; font-size:25px; letter-spacing:0.1rem;color:white;">
                    <p>FOR BUYING, SELLING AND RENTAL OF FLATS, SHOPS, PLOTS, ETC.</p>
                    <p>ALSO FURNITURE AND INTERIOR WORK</p>
                </div>
            </div>
        </div><br>
          
        <div class="container">
            <div class="text-center" style="margin-top: 2vh;">
                <div class="imgs">
                    <img src="img/bc1.jpg" width="180" height="180" style="border-radius: 100px;">
                    <img src="img/bc2.jpg" width="180" height="180" style="border-radius: 100px; margin-left: 20px;">
                    <img src="img/bc3.jpg" width="180" height="180" style="border-radius: 100px; margin-left: 20px;">
                    <img src="img/bc6.jpg" width="180" height="180" style="border-radius: 100px; margin-left: 20px;">
                    <img src="img/bc7.jpg" width="180" height="180" style="border-radius: 100px; margin-left: 20px;">
                </div>
            </div>
            <hr width="30">
        </div>
        <div class="container" >
        <br>
        <div class="row">
            <div class="vform" style="background-color: rgba(0, 0, 0, 0.99);">
                <h1 style="Font-size:25px; color:white; font-family:times new roman;font-weight:bold;text-align:center;  text-transform:uppercase; letter-spacing:0.4mm;">Registration</h1><br>    
                <form action="index.php" method="POST" enctype="multipart/form-data">
                <table>
                    <tr class="form-group">
                        <td><label for="uname">Username</label></td>
                        <td><input type="text" name="username" placeholder=" Enter the Username" class="form-control" id="fname" required ></td>
                    </tr>
                    <tr class="form-group">
                        <td><label for="fname">Full Name</label></td>
                        <td><input type="text" name="fname" placeholder=" Enter your Name" class="form-control" id="fname" required ></td>
                    </tr>
                    <tr class="form-group">
                        <td><label for="phno">Contact No</label></td>
                        <td><input type="text" name="phno" placeholder=" Enter your Contact " pattern="[0-9]{4}[0-9]{3}[0-9]{3}"  class="form-control" id="fname" required ></td>
                    </tr>
                    <tr class="form-group">
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" placeholder=" Enter your Email"class="form-control" id="email" required ></td>
                    </tr>
                    <tr class="form-group">
                        <td><label for="inputPassword3" >Password</label></td>
                        <td><input type="password" placeholder=" Enter the Password "name="password" class="form-control" id="inputPassword3" maxlength="10" required ></td>
                    </tr>

                    <tr >

                    <td colspan="2">
                             <button href="login.php" type="submit" class="btn btn-primary" name="register" value="register">Register</button>
                     </td>
                    </tr>
                        <tr class="form-group">
                               <td colspan="2" >
                                   <span style="color:white;">Already Have An Account?    <a id="lo" href="login.php">Login</a></span>
                               </td>
                        </tr>
                </table>

             </form>
            </div>
        </div>
        </div>      
        <br>      
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
                            <a href="about.php"  style="color:Teal; font-size:17px;">About us</a>
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
                <a href="#">RE Consultancy | Ansari Sadaan</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- Modal for contact us-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Your Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">How Can we help you(description): </label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>  
    </body>
</html>