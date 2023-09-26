<?php
   $con= mysqli_connect('localhost','root','','dineon');

     if(!$con)
     {
        die("connection failed:". "connect_error");
     }
     $name=$_POST['uname'];
     $email=$_POST['email'];
     $address=$_POST['loca'];
     $phone=$_POST['phone'];
     $desc=$_POST['detail'];


     $var="INSERT into login(uname,email,loca,phone,detail) values('$name','$email','$address','$phone','$desc')";
     if(mysqli_query($con,$var))
     {
      echo "successfully submitted!";
     }
     else{
      echo "Error:".$var."<br>".mysqli_error($con);
     }
   ?>