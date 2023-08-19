<!DOCTYPE html>
<html lang="en">
<head>
   <?php
       include('head.php');
   ?>
</head>
<body>
    <div class="container-fluid P-0" id="headder-container-fluid">
        <div class="container P-0" id="headder-container">
            <!--=============== START ================ -->
            <div class="mainHeadder">
                <div class="childHeadder">
                    <div class="wrapHeadder">
                        <div class="navItem">
                            <h1>World<span>Tour</span></h1>
                        </div>
                        <div class="navItem p-0" id="navitemaa">
                            <ul id="navlist p-0">
                                <li><a href="#home">home</a></li>
								<li><a href="#gallery">Destination</a></li>
								<li><a href="#pack">Packages </a></li>
								<li><a href="#spo">Special Offers</a></li>
								<li><a href="#blog">blog</a></li>
								<li><a href="#subs">subscription</a></li>
                                <li>
								   <a href="login.php">book now</a>
							    </li>
                            </ul>
                        </div>
                        <div class="navResponsive" id="navResponsive">
                            <i class="fa-solid fa-xmark" id="Navclose" onclick="onClose()"></i>
                            <i class="fa-solid fa-bars" id="Navopen" onclick="onOpen()"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========================== JS FILE ========================-->
    <script src="assets/js/headdera.js"></script>
</body>
</html>