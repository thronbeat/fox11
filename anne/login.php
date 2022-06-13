<?php
include("connect.php");
if(isset($_POST['sub'])){
     $user=$_POST['uname'];
     $pass=$_POST['pass'];
     $sql = "SELECT * from user where username='$user' and password='$pass'";
     if($check = mysqli_query($con,$sql)){
          if(mysqli_num_rows($check)>0){
               header("location:home.html");
          }else{
               echo"<script>alert('incorrect user name or password ')</script>";
          }
     }
}
?>