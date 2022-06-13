<?php
$con = mysqli_connect('localhost','root','','corgo')
or die("database connection failed");
if(isset($_POST["sub"])){
    $name = $_POST['uname'];
    $pass = $_POST['pass'];
    $sql = "UPDATE manager set password='$pass' where user_name='$name'";
    $check = mysqli_query($con,$sql);
    if($check){
        echo"<script> alert('data updated')</script>";
    }
    else{
        echo"<script> alert('data not updated')</script>";
    }
}
mysqli_close($con);
?>