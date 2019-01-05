<?php
    if(isset($_POST['submitOrder'])){
        include("include/connect.php");

        $customername = $_POST['fullnameOrder'];
        $address = $_POST['addressOrder'];
        $contactdetails = $_POST['contactnumOrder'];
        date_default_timezone_set("Asia/Manila");
		$Today = date('F d, Y');
        $dateordered = $Today;
        $needed = $_POST['dateneededOrder'];
        $dateneeded = date('F d, Y', strtotime($needed));
        $numberoforder = $_POST['numberOrder'];
        $type = $_POST['containersizeOrder'];
        $total = $_POST['totalOrder'];
        $paymentscheme = $_POST['paymentScheme'];

        $firstname = $_POST['cardHolderFirstName'];
        $lastname = $_POST['cardHolderLastName'];
        $provider = $_POST['cardProvider'];
        $cardnumber = $_POST['cardNumber'];

        mysqli_query($con,"INSERT INTO customerorders (ordercustomername, orderaddress, ordercontactdetails, orderdateordered, orderdateneeded, ordernumber, ordertype, ordertotal, orderpaymentscheme) VALUES ('$customername', '$address', '$contactdetails', '$dateordered', '$dateneeded', '$numberoforder', '$type', '$total', '$paymentscheme')");

        mysqli_query($con,"INSERT INTO payments (payerfirstname, payerlastname, payerprovider, payercardnumber, payerdateoftransaction) VALUES ('$firstname', '$lastname', '$provider', '$cardnumber', '$Today')");
?>
        <script>
            alert("Your order is successfully submitted!");
            location.reload();
            window.location = "/PearlBlueWRS/customer/ordersuccess.php";
        </script>
<?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlueWRS/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/order.css" rel="stylesheet" media="screen">
</head>
<body>
    <div id="headerContainer">
        <div id="headearBtnShow">
            <a onclick="ShowSidebar()" id="headerBtn"><img src="/PearlBlueWRS/images/option.png" alt="options" id="option"></a>
        </div>
        <div id="headearBtnHide">
            <a onclick="HideSidebar()" id="hideBtn"><img src="/PearlBlueWRS/images/hide.png" alt="options" id="optionHide"></a>
        </div>
        <div id="header">
            <div id="homeTabCont" class="headerTab">
                <div class="navbar">
                    <img src="/PearlBlueWRS/images/icons/home.png" alt="HOME" id="homeTabicon">
                </div>
                <div class="navbar">
                    <a href="/PearlBlueWRS/" id="homeTab">HOME</a>
                </div>
            </div>
            <div id="orderTabCont" class="headerTab">
                <div class="navbar">
                    <img src="/PearlBlueWRS/images/icons/delivery.png" alt="ORDER NOW" id="orderTabicon">
                </div>
                <div class="navbar">
                    <a href="/PearlBlueWRS/customer/order.php" id="orderTab">ORDER NOW</a>
                </div>
            </div>
            <div id="aboutTabCont" class="headerTab">
                <div class="navbar">
                    <img src="/PearlBlueWRS/images/icons/about.png" alt="ABOUT US" id="aboutTabicon">
                </div>
                <div class="navbar">
                    <a onclick="location.href='/PearlBlueWRS/index.php#aboutusContainer'" id="aboutTab">ABOUT US</a>
                </div>
            </div>
            <div id="loginTabCont" class="headerTab">
                <div class="navbar">
                    <img src="/PearlBlueWRS/images/icons/admin.png" alt="ABOUT US" id="loginTabicon">
                </div>
                <div class="navbar">
                    <a href="/PearlBlueWRS/login.php" id="loginTab">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
    <div id="bannerContainer">
        <div id="banner">
            <img src="/PearlBlueWRS/images/logonobg.png" alt="Pearl Blue Logo" id="logo">
        </div>
    </div>
    <div id="formOrderContainer">
        <div id="welcomeCustomerContainer">
            <span id="welcomeCustomer">Welcome Customer!</span>
        </div>
        <div id="filloutDetailsContainer">
            <span id="filloutDetails">Please fill out the details below:</span>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formOrder">
            <div id="orderDetailsContainer">
                <div id="fullnameOrderContainer">
                    <input type="text" name="fullnameOrder" id="fullnameOrder" placeholder="Enter your full name" required>
                </div>
                <div id="addressOrderContainer">
                    <input type="text" name="addressOrder" id="addressOrder" placeholder="Enter your current address" required>
                </div>
                <div id="contactnumOrderContainer">
                    <input type="text" name="contactnumOrder" id="contactnumOrder" placeholder="Enter your contact details" required>
                </div>
                <div id="dateneededOrderContainer">
                    <?php
                        date_default_timezone_set("Asia/Manila");
                        $dateToday = date('Y-mm-dd');
                    ?>
                    Desire date of delivery: <input type="date" name="dateneededOrder" id="dateneededOrder" placeholder="Enter your desire date of delivery" min="<?php echo $dateToday; ?>" required>
                </div>
                <div id="numberOrderContainer" class="distinguishOrder">
                    <input type="number" name="numberOrder" id="numberOrder" min="0" max="5000" placeholder="Number of orders" required>
                </div>
                <div id="containersizeOrderContainer" class="distinguishOrder">
                    <input type="radio" name="containersizeOrder" id="withFaucet" value="with Faucet">with Faucet
                    <input type="radio" name="containersizeOrder" id="withoutFaucet" value="without Faucet">without Faucet
                    <input type="radio" name="containersizeOrder" id="bottledwater" value="Bottled Water">Bottled Water
                </div>
                <div id="totalOrderContainer">
                    Total Amount of Order: <input type="text" name="totalOrder" id="totalOrder" required>
                </div>
                <div id="pictureOrderContainer">
                    <img src="" id="pictureOrder">
                </div>
                <div id="proceedOrderContainer">
                    <input type="button" value="PROCEED" id="proceedOrder" name="proceedOrder" onclick="showPaymentScheme()">
                </div>
            </div>
            <div id="paymentDetailsContainer">
                ---------------------------------------------------------------
                <div id="paymentTypeContainer">
                    Payment Scheme: <input type="radio" name="paymentScheme" id="onlinePayment" value="ONLINE PAYMENT"><img src="/PearlBlueWRS/images/icons/online.png" id="onlinepaymentIcon"> Online Payment
                    <input type="radio" name="paymentScheme" id="cashPayment" value="CASH-ON-HAND"><img src="/PearlBlueWRS/images/icons/cash.png" id="cashpaymentIcon"> Cash-on-Hand
                </div>
                <div id="bankDetailsContainer">
                    <div id="cardHolderFirstNameContainer">
                        <input type="text" name="cardHolderFirstName" id="cardHolderFirstName" placeholder="Card holder first name">
                    </div>
                    <div id="cardHolderLastNameContainer">
                        <input type="text" name="cardHolderLastName" id="cardHolderLastName" placeholder="Card holder last name">
                    </div>
                    <div id="cardtypeContainer">
                        <span id="textCardType">Indicate your credit card provider: </span><input type="radio" name="cardProvider" id="visa" value="VISA"><img src="/PearlBlueWRS/images/icons/visa.png" id="visaIcon"><span id="visaText">VISA</span>
                        <input type="radio" name="cardProvider" id="mastercard" value="MASTER CARD"><img src="/PearlBlueWRS/images/icons/mastercard.png" id="mastercardIcon"><span id="mastercardText">MASTER CARD</span>
                    </div>
                    <div id="cardNumberContainer">
                        <input type="text" name="cardNumber" id="cardNumber" placeholder="Indicate your card number">
                    </div>
                </div>
            </div>
            <div id="submitOrderContainer">
                <input type="submit" value="ORDER" id="submitOrder" name="submitOrder">
            </div>
        </form>
    </div>
    <script src="/PearlBlueWRS/js/order.js"></script>
    <script src="/PearlBlueWRS/js/totalorder.js"></script>
</body>
<footer>
    <div id="contactusContainer">
        <div id="textcontactusCont">
            <div id="contactusHeader">CONTACT US</div>
            <div id="contactusAddress"><img src="/PearlBlueWRS/images/icons/marker.png" alt="ADDRESS" class="footericon">&nbsp;3A Casa Villa Lourdes, Macros St. Mataas na Lupa, Lipa City</div>
            <div id="contactusCellphone"><img src="/PearlBlueWRS/images/icons/cellphone.png" alt="CONTACT NUMBER" class="footericon">&nbsp;Globe: 09157012078 / Smart: 09493146729</div>
            <div id="contactusFacebook"><img src="/PearlBlueWRS/images/icons/facebook.png" alt="FACEBOOK" class="footericon">&nbsp;@PearlBlueWRS</div>
        </div>
        <div id="textownershipCont">
            <div id="ownershipHeader">THIS WEBSITE IS A PROPERTY OF PEARL BLUE WATER REFILLING STATION</div>
            <div id="ownershipCopyright"><img src="/PearlBlueWRS/images/icons/copyright.png" alt="ADDRESS" class="footericon">&nbsp;All Rights Reserved 2018</div>
            <div id="ownershipDeveloper"><img src="/PearlBlueWRS/images/icons/developer.png" alt="ADDRESS" class="footericon">&nbsp;Developed by: CAPSTONE Buddies</div>
            <div id="DeveloperNames">Jheyren S. Calanog, Michael Joshua G. Orellana, Darwin Luis M. Sanchez and Kenneth Axl M. Virtucio
            </div>
        </div>
    </div>
</footer>
</html>