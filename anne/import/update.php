<?php
include("connect.php");
if(isset($_POST["sub"])){
    $date = $_POST['Idate'];
    $owner = $_POST['Quantity'];
    $scret =$_POST['fid'];
    $sql = "UPDATE import set importdate='$date',importquantity='$owner'where importid='$scret'";
    $check = mysqli_query($con,$sql);
    if($check){
        echo"<script> alert('data updated')</script>";
        header("location:update.html");
    }
    else{
        echo"<script> alert('data not updated')</script>";
    }
}
mysqli_close($con);
?>