<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlueWRS/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/ordersuccess.css" rel="stylesheet" media="screen">
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
    <div id="orderSuccessMessageContainer">
        <div id="orderSuccessMessage">
            <div id="SuccessContainer">
                <div id="imgSuccessContainer">
                    <img src="/PearlBlueWRS/images/icons/thumbsup.png" alt="SUCCESS" id="imageSuccess">
                </div>
                <div id="completeSuccessContainer">
                    <span id="completeSuccess">Transaction Completed</span>
                </div>
                <div id="txtSuccessContainer">
                    <span id="txtSuccess">Thank you for trusting Pearl Blue Water Refilling Station!</span>
                </div>
                <div id="buttonPlaceanotherContainer">
                    <button onclick="location.href='/PearlBlueWRS/customer/order.php'" id="buttonPlaceanother">PLACE ANOTHER ORDER</button>
                </div>
                <div id="buttonbackHomepageContainer">
                    <button onclick="location.href='/PearlBlueWRS/'" id="buttonbackHomepage">BACK TO HOMEPAGE</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/PearlBlueWRS/js/ordersuccess.js"></script>
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