<?php
include("connect.php");
if(isset($_POST['sub'])){
     $fname= $_POST['fname'];
     $lname= $_POST['lname'];
     $user= $_POST['uname'];
     $pass= $_POST['pass'];
$sql = "SELECT * from user where username='$user'";
if($check = mysqli_query($con,$sql)){
     if(mysqli_num_rows($check)>0){
          echo"<script>alert('user name already exist')</script>";
     }else{
          $insert ="INSERT into user(fname,lname,username,password,userid)
          values('$fname','$lname','$user','$pass','')";
     $chec = mysqli_query($con,$insert);
     if($chec){
          echo"<script>alert('New user inserted')</script>";
     }
     else{
          echo"<script>alert('New user not inserted')</script>";
     }
     }
     }else{
          echo"<script>alert('query error')</script>";
     }
    }
?>