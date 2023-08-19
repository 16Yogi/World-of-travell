<!DOCTYPE html>
<html lang="en">
<head>
    <?php
       include('head.php');
    ?>
</head>
<body>
    <div class="container-fluid p-0" id="payment-container-fluid">
        <div class="container p-0" id="payment-container">
            <div class="mainPayment">
                <div class="childPayment">
                    <div class="wrapPayment">
                        <h2>Welcome to World Tour</h2>
                        <hr>
                        <!-- Payment Getway -->
                        <div class="Payment">
                            <div class="PaymentItem">
                                <div class="wrapPayItem">
                                    <h4>Payment with UPI</h4>
                                    <div class="itemPy">
                                        <div class="pyA">
                                            <p>Google Pay:-</p>
                                            <p>Phonepe:-</p>
                                            <p>Paytm:-</p>
                                        </div>
                                        <div class="pyA">
                                            <img src="assets/images/gpay.png" alt="" id="gpay">
                                            <img src="assets/images/phonepe.png" alt="">
                                            <img src="assets/images/pytm.png" alt="" class="pytm">
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <div class="PaymentItem">
                                <div class="wrapPayItem">
                                    <h4>Payment with Card</h4>
                                    <div class="pyA">
                                        <!-- radio button -->
                                        <div id="pyAb">
                                            <p>
                                                <span>Credit Card:</span>
                                                <input type="radio" name="credit" value="1">
                                            </p>
                                            <p>
                                                <span>Debit Card:</span>
                                                <input type="radio" name="debit" value="0"> 
                                            </p>
                                        </div>
                                        <!-- form -->
                                        <div class="formpyAb">
                                            <form action="">
                                                <p>Name</p>
                                                <input type="text" name="name" placeholder="Name">
                                                <p>Card Number</p>
                                                <input type="text" name="cardnum" placeholder="----/----/----">
                                                <div class="ce">
                                                    <p>CVV- </p>
                                                    <input type="text" name="CVV" placeholder="000" id="in">
                                                    <p>Card Ex. Date-</p>
                                                    <input type="text" name="cexp" placeholder="00/00" id="in">
                                                </div>
                                                <input type="submit" name="pay" value="Pay Now" class="btn-primary">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>