<?php
    session_start();
    // print_r($_POST);die;
    $con = mysqli_connect('localhost','root','','re_consultancy');
    
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $card_num = $_POST['card_num'];
    $card_cvc = $_POST['card_cvc'];
    $card_e_m = $_POST['card_exp_month'];
    $card_e_y = $_POST['card_exp_year'];
    $date = date('d-m-y'); 
    

    $p = "INSERT INTO payment(name, email, card_num, card_cvc, card_exp_month, card_exp_year, created, modified) VALUES ('$name', '$email', '$card_num', '$card_cvc', '$card_e_m', '$card_e_m', '$date', '$date')";
    mysqli_query($con, $p)or die(mysqli_error($con));
    $_SESSION['success']="your payment is successfull";
    header("location: home.php");


?>