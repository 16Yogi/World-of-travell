<?php
//    Connection
    $con = mysqli_connect("localhost","root","","worldtour");
    if(!$con){
        // die("Connection failed...!");
    }else{
        // echo "Connection successfully...!";
    }
    
    // variable
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=="" && $password==""){
            echo "Error";
        }else{
            $sql="INSERT INTO loginuser VALUES('','".$username."','".$password."')";
            if(mysqli_query($con,$sql)){
                // echo "Data inserted...!";
            }else{
                // echo "Data not inserted..!";
            }
        }
    }
?>