<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /PearlBlueWRS/login.php");
    }
    else{
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
    <link href="/PearlBlueWRS/css/cashier/indexdesign.css" rel="stylesheet" media="screen">
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
        <span id="dashboardTextTop">DASHBOARD</span>
    <hr>
    </div>
    <div id="orderNotificationContainer">
        <div id="headerOrderNotificationContainer">
            <span id="headerOrderNotification">RECENT CUSTOMER ORDERS:</span>
        </div>
        <div id="orderNotification">
            <?php
                include("include/connect.php");

                $query = mysqli_query($con, "SELECT * FROM customerorders ORDER BY ordercustomerid DESC LIMIT 5");
                $countquery = mysqli_num_rows($query);

                if($countquery != 0){
                    while($row = mysqli_fetch_assoc($query)){
                        $orderid = $row['ordercustomerid'];
                        $ordername = $row['ordercustomername'];
                        $orderneeded = $row['orderdateneeded'];
                        $ordernum = $row['ordernumber'];
                        $ordertyp = $row['ordertype'];
                    ?>
                    <div class="showNewOrderContainer">
                        <div id="showNewOrder">
                            <div id="customerNameContainer" class="inlineContext">
                                <div id="customerShowContainer" class="inlineContext">
                                    <img src="/PearlBlue/images/icons/admin/eye.png" alt="SHOW" id="customerShowIcon">
                                    <input type="hidden" name="customerId" id="customerId" value="<?php echo $orderid ?>">
                                </div>
                                <span id="customerName">
                                    <?php
                                        echo $ordername;
                                    ?>
                                    :
                                </span>
                                <span id="customerDateNeeded">
                                    <?php
                                        echo $orderneeded;
                                    ?>
                                     - 
                                </span>
                                <span id="customerNum">
                                    <?php
                                        echo $ordernum;
                                    ?>
                                </span>
                                <span id="customerType">
                                    <?php
                                        echo $ordertyp;
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                else{

                }
            ?>
        </div>
    </div>
    <div id="orderNotificationContainer">
        <div id="headerOrderNotificationContainer">
            <span id="headerOrderNotification">FOR TODAY'S DELIVERY:</span>
        </div>
        <div id="orderNotification">
            <?php
                include("include/connect.php");

                $query = mysqli_query($con, "SELECT * FROM customerorders ORDER BY ordercustomerid DESC LIMIT 5");
                $countquery = mysqli_num_rows($query);

                if($countquery != 0){
                    while($row = mysqli_fetch_assoc($query)){
                        $orderid = $row['ordercustomerid'];
                        $ordername = $row['ordercustomername'];
                        $orderneeded = $row['orderdateneeded'];
                        $ordernum = $row['ordernumber'];
                        $ordertyp = $row['ordertype'];
                    ?>
                    <div class="showNewOrderContainer">
                        <div id="showNewOrder">
                            <div id="customerNameContainer" class="inlineContext">
                                <div id="customerShowContainer" class="inlineContext">
                                    <img src="/PearlBlue/images/icons/admin/eye.png" alt="SHOW" id="customerShowIcon">
                                    <input type="hidden" name="customerId" id="customerId" value="<?php echo $orderid ?>">
                                </div>
                                <span id="customerName">
                                    <?php
                                        echo $ordername;
                                    ?>
                                    :
                                </span>
                                <span id="customerDateNeeded">
                                    <?php
                                        echo $orderneeded;
                                    ?>
                                     - 
                                </span>
                                <span id="customerNum">
                                    <?php
                                        echo $ordernum;
                                    ?>
                                </span>
                                <span id="customerType">
                                    <?php
                                        echo $ordertyp;
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                else{

                }
            ?>
        </div>
    </div>
    <div id="countStatContainer">
        <div id="countStatOne">
            
        </div>
    </div>
    <script src="/PearlBlue/js/admin/index.js"></script>
</body>
</html>
<?php
    }
?>