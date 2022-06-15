<?php
  session_start();
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 'avr_consultancy');
  if(!isset($_SESSION['uname'])){
    header('Location: login.php');
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
        <script src="https://kit.fontawesome.com/d1173fa82e.js" crossorigin="anonymous"></script>
    <style>
        body {
                background-image: url(img/bk6.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }



                table,th,td
                {
                    border-collapse:collapse;
                    color:#f9ffa4;


                }
              table
              {
                width:100%;
                margin-left:2%;



              }
              i
              {
                color:#6fdfdf;
              }




    </style>
    </head>
    <body>
        <DIV style="background-color: #9FC088 ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><span<h2 style="text-transform:uppercase; color:aqua; font-weight:bold; font-family:Copperplate Gothic Bold Copperplate Gothic Bold; letter-spacing:0.7mm; font-size:20;">RE Consultancy</h2></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="home.php" target = "_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php" target = "_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
  <path d="M5 10.5a.5.5 0 0 1 .5-. 5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
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
                  <a class="nav-link " type="button" href="logout.php" target = "_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-fill-x" viewBox="0 0 16 16">
  <path d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zM6.854 5.146 8 6.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 7l1.147 1.146a.5.5 0 0 1-.708.708L8 7.707 6.854 8.854a.5.5 0 1 1-.708-.708L7.293 7 6.146 5.854a.5.5 0 1 1 .708-.708z"/>
</svg> Logout</a>
                </li>
              </ul></div>
            </div>
        </nav>



<div  style="background-color: rgba(0, 0, 0, 0.94); padding:0px 50px 0px 50px;"><br><br><br>
<div  "class="row">
<?php
    $con = mysqli_connect('localhost','root','','re_consultancy');
    $uname=$_SESSION['uname'];

    $query="SELECT image, prostatus, protype, typo , price, address, city FROM sellers ORDER BY updated_on Desc";

    $result=mysqli_query($con,$query) or die(mysqli_error());

    while($row=mysqli_fetch_array($result)){
    echo'
    <table>
        <tr>
            <td rowspan="3" >
                <p><img style=" width:280; height:230;"class="card-img-top" src="images/'.$row['image'].'" alt="Card image cap"></p>
            </td>
            <td>
                <p><i  " class="fa-solid fa-building "></i> <span  style="font-size:21px;font-weight:bold; font-family:times new roman;">Property Type<br></span><span style="   font-size:19.5px; font-family:times new roman; color:#b4ff9f;"> '.$row['protype'].'</p>
            </td>
            <td>
                <p><i  class="fa-solid fa-money-bill"></i> <span style=" font-size:21px; font-weight:bold;  font-family:times new roman;">Property Status<br></span><span style="font-size:19.5px; font-family:times new roman; color:#b4ff9f;"> '.$row['prostatus'].'</p>
             </td>

        </tr>
        <tr>

                <td>
                    <p><i   class="fa-solid fa-chart-area"></i> <span  style=" font-weight:bold; font-size:21px; font-family:times new roman;">Typology<br></span><span style=" font-size:19.5px;  font-family:times new roman; color:#b4ff9f;"> '.$row['typo'].'</p>
                </td>
                <td>
                    <p ><i  class="fa-solid fa-location-pin"></i> <span  style=" font-weight:bold; font-size:21px; font-family:times new roman;">Address<br> </span><span style=" font-size:19.5px;  font-family:times new roman; color:#b4ff9f;">'.$row['address'].', '.$row['city'].'</p>
                </td>
                 .


        </tr>
        <tr>

                <td>
                    <p><i  class="fa-solid fa-hand-holding-dollar"></i> <span style="font-weight:bold;  font-size:21px; font-family:times new roman;">Price in Sq / Ft<br> </span><span style="font-size:19.5px;  font-family:times new roman; color:#b4ff9f;">'.$row['price'].'</p>
                </td>
                <td>
                    <p><i  class="fa-solid fa-door-closed"></i> <span style="font-weight:bold;   font-size:21px; font-family:times new roman;">Overlooking<br> </span><span style="font-size:19.5px;   font-family:times new roman; color:#b4ff9f;">Pool, Park/Garden, Club, Main Road</p>
                </td>

        </tr>

    </table><br><br>
    <h3 style="color:white; letter-spacing:2px; font-size:22px; text-align:center; text-transform:uppercase; font-weight:bold; font-family:times new roman;"><span >--- Features ---</span></h3>
    <table style="font-family:times new roman; margin-bottom:2%; font-size:21px;">

                <tr>
                <td style="padding-top:1.5%;">
                </td>
               <td>
                               </td>
                              <td>
                                              </td>
                                             <td>
                                                                                           </td>
                </tr>

                <tr  >
                    <td style="color:#ffb72b;"><i class="fa-solid fa-bell"></i> Security / Fire Alarm</td>
                    <td style="color:#ffb72b;"><i class="fa-solid fa-tty"></i> Intercom Facility</td>
                    <td style="color:#ffb72b;"><i class="fa-solid fa-elevator"></i> Lifts</td>
                    <td style="color:#ffb72b;"><i class="fa-solid fa-screwdriver-wrench"></i> Maintenance Staff</td>

                </tr>
                   <tr>
                   <td><br>
                   </td>
                   </tr>
                 <tr >
                     <td style="color:#ffb72b;"><i class="fa-solid fa-boxes-stacked"></i> Water Storage</td>
                     <td style="color:#ffb72b;"><i class="fa-solid fa-square-parking"></i> Visitor Parking</td>
                     <td style="color:#ffb72b;"><i class="fa-solid fa-person-swimming"></i> Swimming Pool</td>
                     <td style="color:#ffb72b;"><i class="fa-solid fa-tree"></i> Park</td>
                 </tr>
                                    <tr>
                                    <td><br>
                                    </td>
                                    </tr>
                      <tr>
                        <td style="color:#ffb72b;"><i class="fa-solid fa-building-shield"></i> Security Personnel</td>
                        <td style="color:#ffb72b;"><i class="fa-solid fa-dumbbell"></i> Fitness Center / GYM</td>
                        <td style="color:#ffb72b;"><i class="fa-solid fa-truck-moving"></i> Waste Disposal</td>
                        <td style="color:#ffb72b;"><i class="fa-solid fa-cube"></i> Club House </td>
                      </tr>
    </table><br><br>
        <h3 style="color:white; letter-spacing:2px; font-size:22px; text-align:center; text-transform:uppercase; font-weight:bold; font-family:times new roman;"><span >--- unit plans ---</span></h3>
        <table style="font-family:times new roman; margin-bottom:2%; font-size:21px;">

                    <tr>
                    <td style="padding-top:1.5%;">
                    </td>
                    <td style="padding-top:1.5%;">
                    <img style=" width:380; height:250;" src="img/onebhkimg.jpg" alt="NA">
                    <h5 style="color:white; letter-spacing:0.3rem; margin-left:33%;"><br>1 BHK </h5>
                    </td>
                    <td style="padding-top:1.5%;">
                        <img style=" width:380; height:250;" src="img/twobhkimg.jpeg" alt="NA">
                        <h5 style="color:white; letter-spacing:0.3rem; margin-left:33%;"><br>2 BHK </h5>
                        </td>
                      <td style="padding-top:1.5%;">
                        <img style=" width:380; height:250;" src="img/threebhkimg.jpg" alt="NA">
                        <h5 style="color:white; letter-spacing:0.3rem; margin-left:33%;"><br>3 BHK </h5>
                          </td>
                    </tr>

        </table>
         <h3 style="color:white; letter-spacing:2px; font-size:22px; text-align:center; text-transform:uppercase; font-weight:bold; font-family:times new roman;"><span >--- floor plans ---</span></h3>
                                        <table style="font-family:times new roman; margin-bottom:2%; font-size:21px;">

                                                    <tr>
                                                    <td style="padding-top:1.5%;">
                                                    </td>
                                                    <td style="padding-top:1.5%;">
                                                    <img style=" width:380; height:250;" src="img/1bhkfp.jpg" alt="NA">
                                                    <h5 style="color:white; letter-spacing:0.3rem; margin-left:28%;"><br>1 BHK </h5>
                                                    </td>
                                                    <td style="padding-top:1.5%;">
                                                        <img style=" width:380; height:250;" src="img/2bhkfp.png" alt="NA">
                                                        <h5 style="color:white; letter-spacing:0.3rem; margin-left:33%;"><br>2 BHK </h5>
                                                        </td>
                                                      <td style="padding-top:1.5%;">
                                                        <img style=" width:380; height:250;" src="img/3bhkfp.jpeg" alt="NA">
                                                        <h5 style="color:white; letter-spacing:0.3rem; margin-left:33%;"><br>3 BHK </h5>
                                                          </td>
                                                    </tr>

                                        </table><br><br>
         <h3 style="color:white; letter-spacing:2px; font-size:22px; text-align:center; text-transform:uppercase; font-weight:bold; font-family:times new roman;"><span >--- Prices ---</span></h3><br>
                                        <table style="font-family:times new roman; background-color: rgba(0, 0, 0, 0.60);width:94%; margin-bottom:2%; font-size:21px;">

                                                    <tr style="">
                                                    <td style="padding-top:1.5%;">
                                                    </td>
                                                    <td style="border:1px solid white;">
                                                      <h5 style="color:white; letter-spacing:0.2rem; font-size:25px; text-align:center;"><br>Starting </h5><br>
                                                      <h5 style="color:white; letter-spacing:0.2rem; font-family:Bell MT; font-size:55px;text-align:center;">Rs 41 L</h5>
                                                    <h5 style="color:white; letter-spacing:0.3rem; font-size:23px; text-align:center;"><br>1 BHK </h5><br>
                                                    </td>
                                                    <td style="border:1px solid white;">
                                                         <h5 style="color:white; letter-spacing:0.2rem; font-size:25px; text-align:center;">Starting </h5><br>
                                                         <h5 style="color:white; letter-spacing:0.2rem; font-family:Bell MT; font-size:55px; text-align:center;">Rs 76 L </h5>
                                                        <h5 style="color:white; letter-spacing:0.3rem; font-size:23px; text-align:center;"><br>2 BHK ULTIMA </5><br>
                                                        </td>
                                                      <td style="border:1px solid white;">
                                                        <h5 style="color:white; letter-spacing:0.2rem; font-size:25px; text-align:center;"><br>Starting </h5><br>
                                                        <h5 style="color:white; letter-spacing:0.2rem; font-family:Bell MT; font-size:55px; text-align:center;">Rs 98 L </h5>
                                                        <h5 style="color:white; letter-spacing:0.3rem; font-size:23px; text-align:center;"><br>3 BHK OPTIMA</h5><br>
                                                          </td>
                                                    </tr>

                                        </table>

    <div style="padding-left:42%;  padding-top:3%; padding-bottom:25%;">
</div>';
}
?>

</div>
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
                             <h5 class="text-uppercase" >RE Consultancy</h5>
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
                                 <a href="home.php" style="color:Teal; font-size:17px;" target = "_blank">Home</a>
                                 </li>
                                 <li>
                                 <a href="#!" style="color:Teal; font-size:17px;">About us</a>
                                 </li>
                                 <li>
                                 <a href="buy.php" style="color:Teal; font-size:17px;" target = "_blank">Buy</a>
                                 </li>
                             </ul>
                         </div>
                         <!-- Grid column -->
                     </div>
                     <!-- Grid row -->
                 </div>
                 <!-- Footer Links -->

                 <!-- Copyright -->
                 <div class="footer-copyright text-center py-3" style="background-color: moccasin;">© 2020 Copyright:
                     <a href="#"> RE Consultancy | Ansari Sadaan</a>
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
                            <form  method="POST" action="enquiry.php" enctype="multipart/form-data">
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