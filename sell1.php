<?php
  session_start();
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 're_consultancy');
  if(!isset($_SESSION['uname'])){
    header('Location: login.php');
  }


  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 're_consultancy');
  
  $username = $_SESSION['uname'];

if(isset($_POST['submit'])){

  $target = "images/".basename($_FILES['image']['name']);

  $typo = $_POST['typo'];
  $protype = $_POST['protype'];
  $prostatus = $_POST['prostatus'];
  $price= $_POST['price'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $image= $_FILES['image']['name'];
  $reg = "INSERT INTO sellers(typo, protype, prostatus, price, address, city, image, username) VALUES ('$typo', '$protype', '$prostatus', '$price', '$address', '$city', '$image','$username')";
  mysqli_query($con, $reg);
  echo"<center><h3>Registration successfull!</h3></center>"; 
  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
    $msg ="yes";
    header("location:buy.php");
  }else{
    $msg ="nos";	
  }
  
}

?>
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
        body 
        {
            background-image: url(img/bk4c.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            overflow-x: hidden;
        }
        .vform
            {
                width:77%;
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
            .form-group select
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
            .form-group textarea
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
                    margin-left:10%;
                    font-family:times new roman;
                    width:90%;
                }
            button
                {
                    margin-top:6%;
                    float:right;
                    margin-right:20%;                    
                }
            #exampleFormControlFile1
                {
                    color:white;
                }
            .owner
                {
                    background-color:#361500;
                    opacity:0.9;
                    color:white;
                    font-size:20px;
                    letter-spacing:0.2mm;
                    text-transform:uppercase;
                    padding-top:1%;
                    padding-bottom:0.5%;
                }        
    </style>
    </head>
    <body>
        <div style="background-color: #9FC088 " >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><span><h2 style="text-transform:uppercase; color:aqua; font-weight:bold; font-family:Copperplate Gothic Bold Copperplate Gothic Bold; letter-spacing:0.7mm; font-size:20;">RE Consultancy</h2></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php" target = "_self"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php" target = "_self"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg> About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " type="button" data-toggle="modal" data-target="#exampleModal" href="#" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
</svg> Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " type="button" href="logout.php" target = "_self"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-x" viewBox="0 0 16 16">
  <path d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zM6.854 5.146 8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 1 1 .708-.708z"/>
</svg> Logout</a>
                </li>
              </ul>
            </div>
            </div>
        </nav>

        <div class="container" style="padding: 20px;">
            <h3 style="color:#FFF98A; FONT-FAMILY:TIMES NEW Roman; FONT-SIZE:30PX; LETTER-SPACING:0.1MM;"><center>
                Welcome! <?php
                $u1=$_SESSION['uname'];
                echo "<font color=white>@<u>$u1</u></font>";
                ?></b>
            </h3></center>
        </div>
        <br>
        <div class="container" style="padding: 20px">
            <!--row for form-->
            <div class="row">
                <div class="container">
                    <div class="owner">
                        <p>Want to sell your Property / House then you have came to the right place</p>
                        <p>Let us help you to sell your properties online</p>
                    </div><br><br>
                    <div class="vform" style="background-color: rgba(0, 0, 0, 0.99); margin-right:12%;">
                    <h1 style="Font-size:25px; font-weight:bold;text-align:center;  text-transform:uppercase;letter-spacing:0.4mm;">Sell / Rent</h1><br><br>
                    <form method="POST" action="sell1.php" enctype="multipart/form-data">
                            <table>
                                <tr class="form-group" >
                                        <td><label for="protype">Property Type </label></td>
                                        <td>
                                             <select id="protype" class="form-control" name="protype" required>
                                                           <option selected></option>
                                                         <option>Homes</option>
                                                         <option>Commercial</option>
                                                         <option>Residential</option>
                                                       <option>Townhouses</option>
                                                       <option>Condos</option>
                                                      <option>Vacant land</option>
                                             </select>
                                        </td>
                                </tr >
                                <tr class="form-group">
                                        <td><label for="prostatus">Property Status </label></td>
                                        <td>
                                             <select id="prostatus" class="form-control" name="prostatus" required>
                                                  <option selected></option>
                                                  <option>Under Construction</option>
                                                  <option>Ready to Move</option>
                                             </select>
                                        </td>
                                </tr>
                                <tr class="form-group">
                                       <td><label for="typo">Typology </label></td>
                                       <td>
                                             <select  "id="typo" class="form-control" name="typo" required>
                                                         <option selected></option>
                                                       <option>1 BHK (600 - 750 Sq.ft)</option>
                                                       <option>2 BHK (850 - 1000 Sq.ft)</option>
                                                      <option>3 BHK (1200 - 1500 Sq.ft)</option>
                                                       <option>4 BHK (Above 2200 Sq.ft)</option>
                                                      <option>2.5 BHK (Above 950 Sq.ft)</option>
                                                     <option>1 RK (400 - 500 Sq.ft)</option>
                                                    <option>2 BHK 2T (Above 1000 Sq.ft)</option>
                                                    <option>3 BHK 2T (Above 1350 Sq.ft)</option>
                                                   <option>3 BHK 3T (Above 1500 Sq.ft)</option>

                                             </select>
                                       </td>
                               </tr>
                               <tr class="form-group">

                                    <td> <label for="price"> Price in Sq / Ft </label></td>
                                    <td><input type="text"  class="form-control" name="price" required></td>
                               </tr>
                               <tr class="form-group">

                                      <td><label for="address">Address</label></td>
                                      <td><textarea type="textarea" class="form-control" id="address" rows="3" name="address" required></textarea></td>
                               </tr>
                               <tr class="form-group">
                                     <td>  <label for="city">City</label></td>
                                     <td>
                                          <select  "id="city" class="form-control" name="city" required>
                                                                            <option selected></option>
                                                                            <option>Thane</option>
                                                                            <option>Mumbai</option>
                                                                            <option>Navi-Mumbai</option>
                                                                            <option>Pune</option>
                                                                            <option>Nashik</option>
                                                                            <option>Akola</option>
                                                                            <option>Chennai</option>
                                                                            <option>Hingoli</option>
                                                                            <option>Jalgaon</option>
                                                                            <option>Osmanabad</option>
                                                                            <option>Ratnagiri</option>
                                          </select>
                                     </td>
                               </tr>
                               <tr class="form-group">
                                    <td><label  for="exampleFormControlFile1">Choose File</label></td>
                                    <td>
                                        <input type="file" name="image" autocomplete="off" class="form-control-file" id="exampleFormControlFile1" required>
                                    </td>
                               </tr>
                               <tr class="form-group" >
                                    <td colspan="2"> <button type="submit" class="btn btn-primary button" name="submit" value="submit">Submit</button></td>
                               </tr>
                            </table>

                        </form>
                    </div>  
                </div>
            </div><br>
           
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
                            <a href="home.html" style="color:Teal; font-size:17px;" target = "_self">Home</a>
                            </li>
                            <li>
                            <a href="about.php" style="color:Teal; font-size:17px;">About us</a>
                            </li>
                            <li>
                            <a href="buy.html" style="color:Teal; font-size:17px;" target = "_self">Buy</a>
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
                <a href="sell1.php"> RE Consultancy | Ansari Sadaan</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->



        
        <!-- Modal for contact us-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div style="background-color: rgba(0, 0, 0, 0.850);" class="modal-content">
                <div class="modal-header">
                    <h5 style="color:salmon;" class="modal-title" id="exampleModalLabel">Contact Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="enquiry.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label style="color:white;" for="name">Your Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                          <label style="color:white;" for="exampleFormControlInput1">Your Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                        </div>
                        <div class="form-group">
                          <label style="color:white;" for="exampleFormControlTextarea1">How Can we help you(description): </label>
                          <textarea type="textarea" class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                            
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>