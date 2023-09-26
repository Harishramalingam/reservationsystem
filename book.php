<?php
   $con= mysqli_connect('localhost','root','','book');

     if(!$con)
     {
        die("connection failed:". "connect_error");
     }
     $name=$_POST['user'];
     $email=$_POST['email'];
     $address=$_POST['addrs'];
     $city=$_POST['city'];
     $table=$_POST['choice'];
     $zipcode=$_POST['zipcode'];
     $news=$_POST['dish'];
     $payment=$_POST['payment'];
     $detail=$_POST['user_time'];


     $var="INSERT into book(user,email,addrs,city,choice,zipcode,dish,payment,user_time) values('$name','$email','$address','$city','$table','$zipcode','$news','$payment','$detail')";
     if(mysqli_query($con,$var))
     {
      echo "BOOKED!.....";
     }
     else{
      echo "Error:".$var."<br>".mysqli_error($con);
     }
   ?>