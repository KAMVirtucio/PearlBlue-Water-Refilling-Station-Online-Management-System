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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlueWRS/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/admin/inventory.css" rel="stylesheet" media="screen">
</head>
<body>
    <div id="navbarContainer">
        <div id="navbarBox">
            <div id="navbar">
                <div id="logoPearlBlueContainer">
                    <img src="/PearlBlueWRS/images/logoPearlBlueWRS.png" alt="LOGO" id="logoPearlBlue">
                </div>
                <a href="/PearlBlueWRS/admin/" id="dashboardlink" class="linknavbar">
                    <div id="dashboardContainer">
                        <div id="dashboardIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/home.png" alt="DASHBOARD" id="dashboardIcon">
                        </div>
                        <div id="dashboardTextContainer" class="inlineDesign">
                            <span id="dashboardText">DASHBOARD</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/inventory.php" id="inventorylink" class="linknavbar">
                    <div id="inventoryContainer">
                        <div id="inventoryIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/inventory.png" alt="INVENTORY" id="inventoryIcon">
                        </div>
                        <div id="inventoryTextContainer" class="inlineDesign">
                            <span id="inventoryText">INVENTORY</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/sales.php" id="salesandexpenseslink" class="linknavbar">
                    <div id="salesandexpensesContainer">
                        <div id="salesandexpensesIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/coins.png" alt="SALES AND EXPENSES" id="salesandexpensesIcon">
                        </div>
                        <div id="salesandexpensesTextContainer" class="inlineDesign">
                            <span id="salesandexpensesText">SALES</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/expenses.php" id="expenseslink">
                    <div id="salesandexpensesContainer">
                        <div id="salesandexpensesIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/expenses.png" alt="SALES AND EXPENSES" id="expensesIcon">
                        </div>
                        <div id="salesandexpensesTextContainer" class="inlineDesign">
                            <span id="salesandexpensesText">EXPENSES</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/reports.php" id="reportslink" class="linknavbar">
                    <div id="reportsContainer">
                        <div id="reportsIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/chart.png" alt="REPORTS" id="reportsIcon">
                        </div>
                        <div id="reportsTextContainer" class="inlineDesign">
                            <span id="reportsText">REPORTS</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/employees.php" id="employeeslink" class="linknavbar">
                    <div id="employeesContainer">
                        <div id="employeesIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/employee.png" alt="EMPLOYEES" id="employeesIcon">
                        </div>
                        <div id="employeesTextContainer" class="inlineDesign">
                            <span id="employeesText">EMPLOYEES</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/patrons.php" id="patronslink" class="linknavbar">
                    <div id="patronsContainer">
                        <div id="patronsIconContainer" class="inlineDesign">
                            <img src="/PearlBlueWRS/images/icons/admin/patron.png" alt="PATRONS" id="patronsIcon">
                        </div>
                        <div id="patronsTextContainer" class="inlineDesign">
                            <span id="patronsText">PATRONS</span>
                        </div>
                    </div>
                </a>
                <a href="/PearlBlueWRS/admin/logout.php" id="logoutlink" class="linknavbar">
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
    <div id="dashboardTextCont">
        <span id="dashboardTextTop">INVENTORY</span>
    </div>
    <div id="searchfilterContainer">
        <div id="searchfilter">
            <div id="filterContainer" class="inlinesearchfilter">
                <form action="" method="POST" class="inlinesearchfilter">
                    <select name="categoryFilter" id="categoryFilter">
                        <option value="CUSTOMER ORDERS">Orders</option>
                        <option value="DELIVERED">Delivered</option>
                        <option value="">Not Delivered</option>
                    </select>
                    <button type="submit" id="submitFilter" name="submitFilter"><img src="/PearlBlueWRS/images/icons/admin/filter.png" id="filterIcon"></button>
                </form>
            </div>
            <div id="searchContainer" class="inlinesearchfilter">
                <form action="inventory-search.php" method="POST" class="inlinesearchfilter">
                    <input type="text" name="searchKey" id="searchKey" placeholder="Search">
                    <button type="submit" id="submitSearch" name="submitSearch"><img src="/PearlBlueWRS/images/icons/admin/search.png" id="searchIcon"></button>
                </form>
            </div>
            <div id="inventoryClass">
                <button type="button" id="showContainersBtn" class="inventoryClassBtn">CONTAINERS INVENTORY</button>
                <button type="button" id="showOrdersBtn" class="inventoryClassBtn">ORDERS INVENTORY</button>
            </div>
        </div>
    </div>
    <div id="ordersinventoryContainer">
        <div id="ordersinventory">
            <table id="tableOrdersInventory">
                <thead>
                    <tr>
                        <td>Customer Name</td>
                        <td>Customer Address</td>
                        <td>Number of Orders</td>
                        <td>Container Type/Size</td>
                        <td></td>
                    </tr>
                </thead>
            <?php
                include("include/connect.php");

                $query = mysqli_query($con, "SELECT * FROM customerorders ORDER BY ordercustomerid ASC");
                $checkquery = mysqli_num_rows($query);
                if($checkquery != 0){
                    while ($row = mysqli_fetch_assoc($query)){
                        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['ordercustomername']; ?></td>
                        <td><?php echo $row['orderaddress']; ?></td>
                        <td><?php echo $row['ordernumber']; ?></td>
                        <td><?php echo $row['ordertype']; ?></td>
                        <td><form action="" method="POST">
                            <button type="submit" id="viewSubmit" name="viewSubmit"><img src="/PearlBlueWRS/images/icons/admin/eye.png" id="viewEyeIcon"><input type="hidden" name="viewID" id="viewID" value="<?php echo $row['ordercustomerid']; ?>"></button>
                        </form></td>
                    </tr>     
                        <?php
                    }
                    ?>
                </tbody>
            </table> 
                    <?php
                }
                else{
                    
                }
            ?>
        </div>
    </div>
    <div id="containersInventoryCont">
        <div id="containersInventory">
            <table id="containersInventoryTable">
                <thead>
                    <tr>
                        <td>Container Type</td>
                        <td>Number of Available Water Containers</td>
                        <td>As of:</td>
                        <td></td>
                    </tr>
                </thead>
            <?php
                $sql = mysqli_query($con, "SELECT * FROM containers ORDER BY asofdate ASC");
                $checksql = mysqli_num_rows($sql);

                if($checksql != 0){
                    while ($row = mysqli_fetch_assoc($sql)){
                        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['type']; ?></td>
                        <td><?php echo $row['numberavailable']; ?></td>
                        <td><?php echo $row['asofdate']; ?></td>
                        <td><img src="/PearlBlueWRS/images/icons/admin/edit.png"></td>
                    </tr>
                </tbody>
                        <?php
                    }
                }
            ?>
            </table>
        </div>
    </div>
    <?php
        if(isset($_POST['submitFilter'])){
            $categoryselected = $_POST['categoryFilter'];

            if ($categoryselected === "CUSTOMER ORDERS"){
                ?>
                <script>
                    window.location.replace(window.location.pathname + window.location.search + window.location.hash);
                </script>
                <?php
            }
            elseif ($categoryselected === "DELIVERED"){
            ?>
            <script>
                document.getElementById('ordersinventoryContainer').style.display = "none";
                document.getElementById('navbar').style.maxWidth = "337.250px";
                document.getElementById('dashboardTextCont').style.paddingLeft = "404.688px";
                document.getElementById('searchfilterContainer').style.paddingLeft = "404.688px";
            </script>
            <div id="deliveredinventoryContainer">
                <div id="deliveredinventory">
                    <table id="tableDeliveredInventory">
                        <thead>
                            <tr>
                                <td>Customer Name</td>
                                <td>Customer Address</td>
                                <td>Number of Orders</td>
                                <td>Container Type/Size</td>
                                <td></td>
                            </tr>
                        </thead>
                    <?php
                        include("include/connect.php");

                        $query = mysqli_query($con, "SELECT * FROM customerorders WHERE orderstatus='DELIVERED' ORDER BY ordercustomerid ASC");
                        $checkquery = mysqli_num_rows($query);
                        if($checkquery != 0){
                            while ($row = mysqli_fetch_assoc($query)){
                                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['ordercustomername']; ?></td>
                                <td><?php echo $row['orderaddress']; ?></td>
                                <td><?php echo $row['ordernumber']; ?></td>
                                <td><?php echo $row['ordertype']; ?></td>
                                <td><form action="" method="POST">
                                    <button type="submit" id="viewSubmit" name="viewSubmit"><img src="/PearlBlueWRS/images/icons/admin/eye.png" id="viewEyeIcon"><input type="hidden" name="viewID" id="viewID" value="<?php echo $row['ordercustomerid']; ?>"></button>
                                </form></td>
                            </tr>     
                                <?php
                            }
                        }
                        else{
                        ?>
                            <td colspan="5">No Results for this Category</td>
                        <?php
                        }
                    ?>
                        </tbody>
                    </table> 
                </div>
            </div>
            <?php  
            }
            elseif ($categoryselected === "") {
            ?>
            <script>
                document.getElementById('ordersinventoryContainer').style.display = "none";
                document.getElementById('navbar').style.maxWidth = "337.250px";
                document.getElementById('dashboardTextCont').style.paddingLeft = "404.688px";
                document.getElementById('searchfilterContainer').style.paddingLeft = "404.688px";
            </script>
            <div id="deliveredinventoryContainer">
                <div id="deliveredinventory">
                    <table id="tableDeliveredInventory">
                        <thead>
                            <tr>
                                <td>Customer Name</td>
                                <td>Customer Address</td>
                                <td>Number of Orders</td>
                                <td>Container Type/Size</td>
                                <td></td>
                            </tr>
                        </thead>
                    <?php
                        include("include/connect.php");

                        $query = mysqli_query($con, "SELECT * FROM customerorders WHERE orderstatus='' ORDER BY ordercustomerid ASC");
                        $checkquery = mysqli_num_rows($query);
                        if($checkquery != 0){
                            while ($row = mysqli_fetch_assoc($query)){
                                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['ordercustomername']; ?></td>
                                <td><?php echo $row['orderaddress']; ?></td>
                                <td><?php echo $row['ordernumber']; ?></td>
                                <td><?php echo $row['ordertype']; ?></td>
                                <td><form action="" method="POST">
                                    <button type="submit" id="viewSubmit" name="viewSubmit"><img src="/PearlBlueWRS/images/icons/admin/eye.png" id="viewEyeIcon"><input type="hidden" name="viewID" id="viewID" value="<?php echo $row['ordercustomerid']; ?>"></button>
                                </form></td>
                            </tr>     
                                <?php
                            }
                        }
                        else{
                        ?>
                            <td colspan="5">No Results for this Category</td>
                        <?php
                        }
                    ?>
                        </tbody>
                    </table> 
                </div>
            </div>
            <?php
            }
        }
    ?>
    <?php
        if(isset($_POST['viewSubmit'])){
            $viewid = $_POST['viewID'];

            $viewquery = mysqli_query($con, "SELECT * FROM customerorders WHERE ordercustomerid = '$viewid'");
            $checkid = mysqli_num_rows($viewquery);

            if($checkid != 0){
                while ($row = mysqli_fetch_assoc($viewquery)) {
                    ?>
                    <div id="detailsInventoryCont">
                        <div id="detailsInventoryContent">
                            <table align="center" id="detailsInventoryTable">
                                <tr>
                                    <td colspan="2"><div id="exitPic"><img src="/PearlBlueWRS/images/icons/admin/exit.png" id="exitIcon"></div></td>
                                </tr>
                                <tr>
                                    <td>Customer ID:</td>
                                    <td><?php echo $row['ordercustomerid'] ?></td>
                                </tr>
                                <tr>
                                    <td>Customer Name:</td>
                                    <td><?php echo $row['ordercustomername'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td><?php echo $row['orderaddress'] ?></td>
                                </tr>
                                <tr>
                                    <td>Contact Number:</td>
                                    <td><?php echo $row['ordercontactdetails'] ?></td>
                                </tr>
                                <tr>
                                    <td>Date Ordered:</td>
                                    <td><?php echo $row['orderdateordered'] ?></td>
                                </tr>
                                <tr>
                                    <td>Desire date of Delivery:</td>
                                    <td><?php echo $row['orderdateneeded'] ?></td>
                                </tr>
                                <tr>
                                    <td>Number of Orders:</td>
                                    <td><?php echo $row['ordernumber'] ?></td>
                                </tr>
                                <tr>
                                    <td>Type/Size of Container:</td>
                                    <td><?php echo $row['ordertype'] ?></td>
                                </tr>
                                <tr>
                                    <td>Total Price:</td>
                                    <td><?php echo $row['ordertotal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Order Status:</td>
                                    <td><?php
                                        if($row['orderstatus'] == ""){
                                            echo "FOR DELIVERY";
                                        }
                                        else{
                                            echo $row['orderstatus'];
                                        }
                                    ?></td>
                                </tr>
                                <tr>
                                    <td>Date Delivered:</td>
                                    <td><?php
                                        if($row['orderdatedelivered'] == ""){
                                            echo "---";
                                        }
                                        else{
                                            echo $row['orderdatedelivered'];
                                        }
                                    ?></td>
                                </tr>
                                <tr>
                                    <td>Payment Scheme:</td>
                                    <td><?php echo $row['orderpaymentscheme'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    ?>
    <script src="/PearlBlueWRS/js/inventory.js"></script>
</body>
</html>
<?php
    }
?>