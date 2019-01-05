<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlueWRS/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/index.css" rel="stylesheet" media="screen">
</head>
<body>
    <div id="headerContainer">
        <div id="headearBtnShow">
            <a onclick="ShowHeader()" id="headerBtn"><img src="/PearlBlueWRS/images/option.png" alt="options" id="option"></a>
        </div>
        <div id="headearBtnHide">
            <a onclick="HideHeader()" id="hideBtn"><img src="/PearlBlueWRS/images/hide.png" alt="options" id="optionHide"></a>
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
                    <a onclick="location.href='#aboutusContainer'" id="aboutTab">ABOUT US</a>
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
    <div id="introContainer">
        <div id="introHeader">
            <h id="introHd">Pearl Blue Water Refilling Station</h>
        </div>
        <section id="introPar">
            <p id="introText">
            &emsp;&emsp; Pearl Blue Water Refilling Station is a water refilling business servicing consumers with clean & safe drinking water thru quality purification process. It is located at 3A Casa Villa Lourdes, Macros St. Mataas na Lupa, Lipa City. The Water Refilling Business is owned by Mrs. Maria Lourdes P. Alejandria and her husband. The Water Station is monthly monitored by Optimal Laboratories Inc. to assure the highest quality of products served to customers. Currently, Ms. Alejandria is the manager of the water refilling station while her husband handles the marketing and deliveries of their business.
            </p>
        </section>
        <div id="LearnMoreBtnCont">
            <button id="LearnMoreBtn" onclick="location.href='#offersDescContainer'">Learn More</button>
        </div>
    </div>
    <div id="offersDescContainer">
        <section id="offersDescSEC">
           <h id="headerOffer">We offer</h>
           <div id="pictureOffer">
               <li id="offer-one" class="offercontent">
                   <img src="/PearlBlueWRS/images/1.png" id="onePicture" class="offerpicture">
               </li>
               <li id="offer-two" class="offercontent">
                   <img src="/PearlBlueWRS/images/2.png" class="offerpicture">
               </li>
               <li id="offer-three" class="offercontent">
                   <img src="/PearlBlueWRS/images/3.png" id="twoPicture" class="offerpicture">
               </li>
           </div>
           <div id="OrderBtnCont">
                <button id="OrderBtn" onclick="location.href='/PearlBlueWRS/customer/order.php'">Order Now</button>
            </div>
        </section>
    </div>
    <div id="factsContainer">
        <h id="waterfactheader">Water Facts</h>
        <div id="factsimageCont">
            <img src="/PearlBlueWRS/images/facts.png" alt="WATER FACTS" id="factsimage">
        </div>
    </div>
    <div id="aboutusContainer">
        <div id="aboutusHeaderCont">
            <h id="aboutusheader">About Us</h>
        </div>
        <div id="aboutusPictureCont">
            <img src="/PearlBlueWRS/images/aboutus1.png" alt="ABOUT US" id="aboutusimageOne" class="aboutusImg">
            <img src="/PearlBlueWRS/images/aboutus2.png" alt="ABOUT US" id="aboutusimageTwo" class="aboutusImg">
            <img src="/PearlBlueWRS/images/aboutus3.png" alt="ABOUT US" id="aboutusimageThree" class="aboutusImg">
        </div>
    </div>
    <script src="/PearlBlueWRS/js/index.js"></script>
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