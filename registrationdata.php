<?php

//   connection
$con = mysqli_connect("localhost","root","","worldtour");
if(!$con){
    // die("Connection failed");
}else{
    // echo "Connected/...!";
}
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];

    if($password==$repassword){
        if($username=="" && $mobile=="" && $password=="" && $repassword==""){

        }else{
            $sql="INSERT INTO registration VALUES('','".$username."','".$mobile."','".$password."','".$repassword."')";
            if(mysqli_query($con,$sql)){
                // echo "Data inserted....!";
            }else{
                // echo "Data faild...!";
            }
        }
    }else{
        echo "Password not match";
    }
}
?>