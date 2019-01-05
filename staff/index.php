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
    <link rel="icon" href="/PearlBlueWRS/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/staff/inventory-fordelivery.css" rel="stylesheet" media="screen">
</head>
<body>
    <div id="navbarContainer">
        <div id="navbarBox">
            <div id="navbar">
                <div id="logoPearlBlueContainer">
                    <img src="/PearlBlueWRS/images/logoPearlBlueWRS.png" alt="LOGO" id="logoPearlBlue">
                </div>
                <a href="/PearlBlueWRS/staff/" id="dashboardlink" class="linknavbar">
                    <div id="dashboardContainer">
                        <div id="dashboardIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/home.png" alt="DASHBOARD" id="dashboardIcon">
                        </div>
                        <div id="dashboardTextContainer" class="inlineDesign">
                            <span id="dashboardText">DASHBOARD</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/staff/inventory-fordelivery.php" id="inventorylink" class="linknavbar">
                    <div id="inventoryContainer">
                        <div id="inventoryIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/inventory.png" alt="INVENTORY" id="inventoryIcon">
                        </div>
                        <div id="inventoryTextContainer" class="inlineDesign">
                            <span id="inventoryText">LIST OF ORDER FOR DELIVERY</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/staff/inventory-delivered.php" id="salesandexpenseslink" class="linknavbar">
                    <div id="salesandexpensesContainer">
                        <div id="salesandexpensesIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/coins.png" alt="SALES AND EXPENSES" id="salesandexpensesIcon">
                        </div>
                        <div id="salesandexpensesTextContainer" class="inlineDesign">
                            <span id="salesandexpensesText">LIST OF DELIVERED ORDERS</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/staff/logout.php" id="logoutlink" class="linknavbar">
                    <div id="logoutContainer">
                        <div id="patronsIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/logout.png" alt="LOGOUT" id="logoutIcon">
                        </div>
                        <div id="logoutTextContainer" class="inlineDesign">
                            <span id="logoutText">LOGOUT</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </div>
    <div id="dashboardTextCont">
        <span id="dashboardTextTop">DASHBOARD</span>
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
                                    <form action="" method="post" class="inlineContext">
                                        <button type="submit" id="buttonOne" name="buttonOne">
                                            <img src="/PearlBlueWRS/images/icons/admin/eye.png" alt="SHOW" id="customerShowIcon">
                                            <input type="hidden" name="customerId" id="customerId" value="<?php echo $orderid ?>">
                                        </button>
                                    </form>
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
                    ?>
                    <div class="noResults">
                        No results found!
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <?php
        if(isset($_POST['buttonOne'])){
            $id = $_POST['customerId'];

            $select = mysqli_query($con, "SELECT * FROM customerorders WHERE ordercustomerid='$id'");
            $count = mysqli_num_rows($select);

            if($count != 0){
                while($row = mysqli_fetch_assoc($select)){
                    ?>
                    <div id="detailsContainer">
                        <div id="details">
                            <div id="exitContainer">
                                <span id="exitIconCont" onclick="hideDetails()"><img src="/PearlBlueWRS/images/icons/admin/exit.png" id="exitIcon"></span>
                            </div>
                            <div id="idContainer">
                                <span class="DescText">Customer ID: </span><span class="ResultText"><?php echo $row['ordercustomerid'] ?></span>
                            </div>
                            <div id="nameContainer">
                                <span class="DescText">Customer Name: </span><span class="ResulText"><?php echo $row['ordercustomername'] ?></span>
                            </div>
                            <div id="addressContainer">
                                <span class="DescText">Address: </span><span class="ResultText"><?php echo $row['orderaddress'] ?></span>
                            </div>
                            <div id="contactnumContainer">
                                <span class="DescText">Contact Number: </span><span class="ResultText"><?php echo $row['ordercontactdetails'] ?></span>
                            </div>
                            <div id="dateorderedContainer">
                                <span class="DescText">Date Ordered: </span><span class="ResultText"><?php echo $row['orderdateordered'] ?></span>
                            </div>
                            <div id="dateneededContainer">
                                <span class="DescText">Date of Delivery: </span><span class="ResultText"><?php echo $row['orderdateneeded'] ?></span>
                            </div>
                            <div id="numorderContainer">
                                <span class="DescText">Number of Order: </span><span class="ResultText"><?php echo $row['ordernumber'] ?></span>
                            </div>
                            <div id="typeContainer">
                                <span class="DescText">Type of Container: </span><span class="ResultText"><?php echo $row['ordertype'] ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            else{
            ?>
                <script>
                    alert("No data read!");
                </script>
            <?php
            }
        }
    ?>
    <div id="orderNotificationTwoContainer">
        <div id="headerOrderNotificationContainer">
            <span id="headerOrderNotification">FOR TODAY'S DELIVERY:</span>
        </div>
        <div id="orderNotification">
            <?php
                date_default_timezone_set("Asia/Manila");
                $Today = date('F d, Y');

                include("include/connect.php");

                $sql = mysqli_query($con, "SELECT * FROM customerorders WHERE orderdateneeded='$Today' ORDER BY ordercustomerid DESC LIMIT 5");
                $checkquery = mysqli_num_rows($sql);

                if($checkquery != 0){
                    while($row = mysqli_fetch_assoc($sql)){
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
                                    <form action="" method="post" class="inlineContext">
                                        <button type="submit" id="buttonTwo" name="buttonTwo">
                                            <img src="/PearlBlueWRS/images/icons/admin/eye.png" alt="SHOW" id="customerShowIcon">
                                            <input type="hidden" name="customerId" id="customerId" value="<?php echo $orderid ?>">
                                        </button>
                                    </form>
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
                ?>
                    <div class="noResults">
                        No results found!
                    </div>
                <?php
                }
            ?>
        </div>
    </div>
    <?php
        if(isset($_POST['buttonTwo'])){
            $id = $_POST['customerId'];

            $select = mysqli_query($con, "SELECT * FROM customerorders WHERE ordercustomerid='$id'");
            $count = mysqli_num_rows($select);

            if($count != 0){
                while($row = mysqli_fetch_assoc($select)){
                    ?>
                    <div id="detailsContainer">
                        <div id="details">
                            <div id="exitContainer">
                                <span id="exitIconCont" onclick="hideDetails()"><img src="/PearlBlueWRS/images/icons/admin/exit.png" id="exitIcon"></span>
                            </div>
                            <div id="idContainer">
                                <span class="DescText">Customer ID: </span><span class="ResultText"><?php echo $row['ordercustomerid'] ?></span>
                            </div>
                            <div id="nameContainer">
                                <span class="DescText">Customer Name: </span><span class="ResulText"><?php echo $row['ordercustomername'] ?></span>
                            </div>
                            <div id="addressContainer">
                                <span class="DescText">Address: </span><span class="ResultText"><?php echo $row['orderaddress'] ?></span>
                            </div>
                            <div id="contactnumContainer">
                                <span class="DescText">Contact Number: </span><span class="ResultText"><?php echo $row['ordercontactdetails'] ?></span>
                            </div>
                            <div id="dateorderedContainer">
                                <span class="DescText">Date Ordered: </span><span class="ResultText"><?php echo $row['orderdateordered'] ?></span>
                            </div>
                            <div id="dateneededContainer">
                                <span class="DescText">Date of Delivery: </span><span class="ResultText"><?php echo $row['orderdateneeded'] ?></span>
                            </div>
                            <div id="numorderContainer">
                                <span class="DescText">Number of Order: </span><span class="ResultText"><?php echo $row['ordernumber'] ?></span>
                            </div>
                            <div id="typeContainer">
                                <span class="DescText">Type of Container: </span><span class="ResultText"><?php echo $row['ordertype'] ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            else{
            ?>
                <script>
                    alert("No data read!");
                </script>
            <?php
            }
        }
    ?>
    <div id="countStatContainer">
        <div id="countStatOne">
            <div id="boxCountStatOne">
                <div id="countOneDesc">Number of pending deliveries for today:</div>
                <div id="statresultOne">
                    <?php
                        date_default_timezone_set("Asia/Manila");
                        $dateToday = date('F d, Y');

                        $statOne = mysqli_query($con, "SELECT * FROM customerorders WHERE orderdateneeded='$dateToday'");
                        $countOne = mysqli_num_rows($statOne);

                        echo $countOne;
                    ?>
                </div>
            </div>
        </div>
        <div id="countStatTwo">
            <div id="boxCountStatTwo">
                <div id="countTwoDesc">Number of delivered orders:</div>
                <div id="statresultTwo">
                    <?php
                        $statTwo = mysqli_query($con, "SELECT * FROM customerorders WHERE orderstatus='DELIVERED'");
                        $countTwo = mysqli_num_rows($statTwo);

                        echo $countTwo;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="/PearlBlueWRS/js/indexadmin.js"></script>
</body>
</html>
<?php
    }
?>