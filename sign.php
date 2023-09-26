<?php
   $con= mysqli_connect('localhost','root','','dineon');

     if(!$con)
     {
        die("connection failed:". "connect_error");
     }
     $name=$_POST['fname'];
     $username=$_POST['uname'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $password=$_POST['pass'];
     $userpassword=$_POST['cpass'];
     $gender=$_POST['gender'];


     $var="INSERT into sign(fname,uname,email,phone,pass,cpass,gender) values('$fname','$uname','$email','$phone','$password','$userpassword,'$gender')";
     if(mysqli_query($con,$var))
     {
      echo "successfully submitted!";
     }
     else{
      echo "Error:".$var."<br>".mysqli_error($con);
     }
   ?>