<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /PearlBlueWRS/login.php");
    }
    else{
        error_reporting("E-NOTICE");
        include("include/connect.php");
        $search = $_POST['searchKey'];
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
        <span id="dashboardTextTop">LIST OF ORDERS FOR DELIVERY</span>
    </div>
    <div id="searchfilterContainer">
        <div id="searchfilter">
            <div id="searchContainer" class="inlinesearchfilter">
                <form action="inventory-fordelivery-search.php" method="POST" class="inlinesearchfilter">
                    <input type="text" name="searchKey" id="searchKey" placeholder="Search">
                    <button type="submit" id="submitSearch" name="submitSearch"><img src="/PearlBlueWRS/images/icons/admin/search.png" id="searchIcon"></button>
                </form>
            </div>
        </div>
    </div>
    <?php
        $query = mysqli_query($con, "SELECT * FROM customerorders WHERE orderstatus='' AND ordercustomername LIKE '%".$search."%' || orderstatus='' AND orderaddress LIKE '%".$search."%' || orderstatus='' AND ordercontactdetails LIKE '%".$search."%' || orderstatus='' AND orderdateordered LIKE '%".$search."%' || orderstatus='' AND ordernumber LIKE '%".$search."%' || orderstatus='' AND ordertype LIKE '%".$search."%' ORDER BY ordercustomerid DESC");
        $count = mysqli_num_rows($query);

        if($count !=0){
        ?>
            <div id="fordeliveryContainer">
                <div id="fordelivery">
                    <table id="fordeliveryTable">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Customer Address</th>
                                <th>Number of Orders</th>
                                <th>Container Type/Size</th>
                                <th>Contact Details</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($query)){
                                    ?>
                            <tr>
                                <td><?php echo $row['ordercustomername'] ?></td>
                                <td><?php echo $row['orderaddress'] ?></td>
                                <td><?php echo $row['ordernumber'] ?></td>
                                <td><?php echo $row['ordertype'] ?></td>
                                <td><?php echo $row['ordercontactdetails'] ?></td>
                                <td>
                                    <form action="" method="POST">
                                        <button type="submit" id="checkoutBtn" name="checkoutBtn"><img src="/PearlBlueWRS/images/icons/admin/check.png" id="checkoutIcon"><input type="hidden" name="id" id="id" value="<?php echo $row['ordercustomerid'] ?>"></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="receipt.php" method="POST" target="_blank">
                                        <button type="submit" id="printBtn" name="printBtn"><img src="/PearlBlueWRS/images/icons/admin/print.png" id="checkoutIcon"><input type="hidden" name="id" id="id" value="<?php echo $row['ordercustomerid'] ?>"></button>
                                    </form>
                                </td>
                            </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php
        }
        else{
            ?>
            <script>
                alert("No results for the search key!");
            </script>
            <?php
        }
    ?>
    <?php
        if(isset($_POST['checkoutBtn'])){
            $id = $_POST['id'];
            date_default_timezone_set("Asia/Manila");
            $Today = date('F d, Y');
            
            mysqli_query($con, "UPDATE customerorders SET orderstatus='DELIVERED', orderdatedelivered='$Today' WHERE ordercustomerid='$id'");
            
            ?>
            <script>
                alert("Ordered updated!");
                window.location.replace(window.location.pathname + window.location.search + window.location.hash);
            </script>
            <?php
        }
    ?>
</body>
</html>
<?php
    }
?>