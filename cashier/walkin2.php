<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /PearlBlue/login.php");
    }
    else{
?>
<?php
    if(isset($_POST['submitOrder'])){
        include("include/connect.php");

        $customername = $_POST['fullnameOrder'];
        $address = $_POST['addressOrder'];
        $contactdetails = $_POST['contactnumOrder'];
        date_default_timezone_set("Asia/Manila");
        $Today = date("F j, Y"); 
        $dateordered = $Today;
        $dateneeded = $Today;
        $status = 'DELIVERED';
        $datedelivered = $Today;
        $numberoforder = $_POST['numberOrder'];
        $type = $_POST['containersizeOrder'];
        $total = $_POST['totalOrder'];
        $paymentscheme = 'WALK-IN PAYMENT';
        $payment= $_POST['paymentamount'];
        $change=$payment-$total;
      

        mysqli_query($con,"INSERT INTO customerorders (ordercustomername, orderaddress, ordercontactdetails, orderdateordered, orderdateneeded, ordernumber, ordertype, ordertotal, orderstatus, orderdatedelivered, orderpaymentscheme) VALUES ('$customername', '$address', '$contactdetails', '$dateordered', '$dateneeded', '$numberoforder', '$type', '$total', '$status', '$datedelivered', '$paymentscheme')");

        mysqli_query($con,"INSERT INTO cashier (ordercustomername, orderaddress, ordercontactdetails, orderdateordered, orderdateneeded, ordernumber, ordertype, ordertotal, orderstatus, orderdatedelivered, orderpaymentscheme,payment,customerchange) VALUES ('$customername', '$address', '$contactdetails', '$dateordered', '$dateneeded', '$numberoforder', '$type', '$total', '$status', '$datedelivered', '$paymentscheme','$payment','$change')");
?>
?>
        <script>
            alert("Your order is successfully saved!");
        </script>
<?php
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlue/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/cashier/walkindesign.css" rel="stylesheet" media="screen">   
</head>
<body>
    <div id="navbarContainer">
        <div id="navbarBox">
            <div id="navbar">
                <div id="logoPearlBlueContainer">
                    <img src="/PearlBlue/images/logoPearlBlueWRS.png" alt="LOGO" id="logoPearlBlue">
                </div>
                <a href="/PearlBlueWRS/cashier/" id="dashboardlink" class="linknavbar">
                    <div id="dashboardContainer">
                        <div id="dashboardIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/admin/home.png" alt="DASHBOARD" id="dashboardIcon">
                            <span id="dashboardText">DASHBOARD</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/cashier/walkin.php" id="walkinlink" class="linknavbar">
                    <div id="walkinContainer">
                        <div id="walkinIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/walkin.png" alt="WALK-IN" id="walkinIcon">
                            <span id="walkinText">WALK-IN TRANSACTION</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/cashier/paidorders.php" id="paidlink" class="linknavbar">
                    <div id="paidContainer">
                        <div id="paidIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/paid.png" alt="PAID" id="paidIcon">
                            <span id="paidText">LIST OF PAID ORDERS</span>
                        </div>
                    </div>
                </a>
                 <a href="/PearlBlueWRS/cashier/unpaidorders.php" id="unpaidlink" class="linknavbar">
                    <div id="unpaidContainer">
                        <div id="unpaidContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/unpaid.png" alt="UNPAID" id="unpaidIcon">
                            <span id="unpaidText">LIST OF UNPAID ORDERS</span>
                        </div>
                    </div>
                </a>
                
                <a href="/PearlBlueWRS/cashier/logout.php" id="logoutlink" class="linknavbar">
                    <div id="logoutContainer">
                        <div id="patronsIconContainer" class="inlineDesign">
                            <img src="/PearlBlue/images/icons/admin/logout.png" alt="LOGOUT" id="logoutIcon">
                        </div>
                        <div id="logoutTextContainer" class="inlineDesign">
                            <span id="logoutText">LOGOUT</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="dashboardTextCont">
        <span id="dashboardTextTop">WALK-IN TRANSACTION</span>
        <hr>
    </div>
    <?php
            date_default_timezone_set("Asia/Manila");
            $dateToday = date("F j, Y"); 
            ?><p style="margin-left: 410px;font-family: sans-serif;font-weight: bold">Date: <?php echo $dateToday;?>
    </p>
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formOrder">
            <div id="orderDetailsContainer">
                <div id="fullnameOrderContainer">
                    <input type="text" name="fullnameOrder" id="fullnameOrder" placeholder="Customer Full Name" value="<?php echo $customername ?>" required>
                </div>
                <div id="addressOrderContainer">
                    <input type="text" name="addressOrder" id="addressOrder" placeholder="Customer Current Address" value="<?php echo $address ?>" required>
                </div>
                <div id="contactnumOrderContainer">
                    <input type="text" name="contactnumOrder" id="contactnumOrder" placeholder="Customer Contact Number" value="<?php echo $contactdetails ?>" required>
                </div>
                <div id="numberOrderContainer" class="distinguishOrder">
                    <input type="number" name="numberOrder" id="numberOrder" min="0" max="5000" placeholder="Quantity" 
                    value="<?php echo $numberoforder ?>" required>
                </div>
                <div id="containersizeOrderContainer" class="distinguishOrder">
                    <input type="radio" name="containersizeOrder" id="withFaucet" value="with Faucet">with Faucet
                    <input type="radio" name="containersizeOrder" id="withoutFaucet" value="without Faucet">without Faucet
                    <input type="radio" name="containersizeOrder" id="bottledwater" value="Bottled Water">Bottled Water
                </div>
                <div id="totalOrderContainer">
                    Total Amount: <input type="text" name="totalOrder" id="totalOrder" value="<?php echo 'PHP '.$total.'.00' ?>" required>
                </div>
                 <div id="pictureOrderContainer">
                    <img src="" id="pictureOrder">
                </div>
               
                ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                <br><br>
            
                   <div class="paymenttext">Payment:<input type="text" name="paymentamount" id="paymentTypeContainer" placeholder="PHP 0.00" value="<?php echo 'PHP '.$payment.'.00' ?>" required>
                   Change: <input type="text" name="change" id="changeTypeContainer" value="<?php echo 'PHP '.$change.'.00' ?>" readonly></div><br>
                
               
           <div id="submitOrderContainer">
                <input type="submit" value="SAVE" id="submitOrder" name="submitOrder">&emsp;
                <input type="button" value="PRINT RECEIPT" id="printOrder" name="printOrder"  onclick="window.location='/PearlBlueWRS/cashier/receipt.html'">
            </div>
        </form>
         
    </div>
    <script src="/PearlBlue/js/totalorder2.js"></script>
</body>
</html>
<?php
    }
?>