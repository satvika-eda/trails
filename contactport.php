<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['message'];

        $to='satvika2811@gmail.com';
        $subject='form submission';
        $message="Name: ".$name."\n"."Email: ".$email."\n"."Message: ".$mg;

        if(mail($to,$subject,$message)){
            echo "<h1> sent successfully! ";
        }
        else{
            echo "wrong";
        }
    }
?>