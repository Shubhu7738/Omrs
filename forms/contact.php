<?php


   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $message = $_POST['message'];
   $conn = mysqli_connect("localhost","root","omsairam7738","omrsdb") or die("connection failed");


    $sql = "INSERT INTO tblcontact(name,email,subject,message) VALUES ('{$name}','{$email}','{$subject}','{$message}')";

    $result = mysqli_query($conn,$sql);
   if ($result){
    echo "Your message has been sent Succesfully !... ";
    
   }
   else{
    echo "Something went Wrong ..." . $sql . " :-" . mysqli_error($conn);
   }
   mysqli_close($conn);
 
?>