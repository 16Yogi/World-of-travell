<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="loginForm.css">
</head>
<body>
    <div class="container-fluid p-0" id="mainContainerFluid">
        <div class="container p-0" id="childContainer">
            <div class="wrap">
                <h3>
                    <span><a href="#" onclick="openlogin()">Login</a></span>
                    <span>/</span>
                    <span><a href="#" onclick="opensignup()">Signup</a></span>
                </h3>
                <div class="login" id="logina">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="a">
                            <p>Username</p>
                            <input type="text" name="username" placeholder="Name" require>
                        </div>
                        <div class="a">
                            <p>Password</p>
                            <input type="password" name="password" placeholder="Password" require>
                            <a href="#">Forget Password</a>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="button">
                        <div class="a" id="icon">
                            <div class="aa"></div>
                            <div class="aa"></div>
                            <div class="aa"></div>
                        </div>
                    </form>
                </div>
                <div class="login" id="signupa">
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="a">
                            <p>Username</p>
                            <input type="text" name="username" placeholder="Name" require>
                            <p>Email / Mobile</p>
                            <input type="text" name="mobile" placeholder="Email / Number" require>
                        </div>
                        <div class="a">
                            <p>Password</p>
                            <input type="password" name="password" placeholder="Password" id="password" require>
                        </div>
                        <div class="a">
                            <p>Re-Password</p>
                            <input type="password" name="repassword" placeholder="Password" id="repassword" require>
                            <p id="text"></p>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="button" onclick="validation()">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    function opensignup(){
        document.getElementById("signupa").style.display="block";
        document.getElementById("logina").style.display="none";
    }
    function openlogin(){
        document.getElementById("signupa").style.display="none";
        document.getElementById("logina").style.display="block";
    }

    function validation(){
        var pass = document.getElementById("password").value;
        var repass = document.getElementById("repassword").value;

        if(pass==repass){
            document.getElementById("text").innerHTMl="Data Match";
            document.getElementById("text").style.color="red";
        }else{
            // document.write("data not match...!");
            document.getElementById("text").innerHTML="Data Not Match";
            document.getElementById("text").style.color="red";
        }
    }
2
</script>

<?php
//    include('logininsertdata.php');
   include('registrationdata.php');
?>

