<?php
    session_start();
    //print_r($_POST);
    $order_id = $_POST['order_id'];
    $wishlist_id = $_POST['wishlist_id'];
    $con = mysqli_connect('localhost','root','','re_consultancy');
    $uname=$_SESSION['uname'];
    
    $query="SELECT * from sellers where id=$order_id";
    $date = date('d-m-y');    
    $result=mysqli_query($con,$query) or die(mysqli_error());
    $row=mysqli_fetch_array($result);

    $query1="SELECT id from cart where order_id='".$row['id']."' AND user_id='".$_SESSION['id']."'";  
    
    $result1=mysqli_query($con,$query1) or die(mysqli_error());
    $row1=mysqli_fetch_array($result1);
    $count = mysqli_num_rows($result1);
    //echo "aaaa";
    if($count<1){
        $res = "INSERT INTO cart(order_id, user_id, wishlist_id,date,status) VALUES ('".$row['id']."', '".$_SESSION['id']."', $wishlist_id ,'".$date."', 'Y')";
        $result=mysqli_query($con,$res) or die(mysqli_error($con));
        echo 1;
    }else {
        echo 2;
    }
    
    // print_r($row);
    //header("location:mywishlist.php");
?>