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
    <link href="/PearlBlueWRS/css/admin/employees.css" rel="stylesheet" media="screen">
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
        <span id="dashboardTextTop">EMPLOYEES</span>
    </div>
    <div id="searchfilterContainer">
        <div id="searchfilter">
            <div id="addButtonContainer" class="inlinesearchfilter">
                <button id="addButton" onclick="location.href='/PearlBlueWRS/admin/employees-add.php'">
                    <img src="/PearlBlueWRS/images/icons/admin/add.png" id="addButtonIcon">
                </button>
            </div>
            <div id="searchContainer" class="inlinesearchfilter">
                <form action="employees-search.php" method="POST" class="inlinesearchfilter">
                    <input type="text" name="searchKey" id="searchKey" placeholder="Search">
                    <button type="submit" id="submitSearch" name="submitSearch"><img src="/PearlBlueWRS/images/icons/admin/search.png" id="searchIcon"></button>
                </form>
            </div>
        </div>
    </div>
    <div id="ordersinventoryContainer">
        <div id="ordersinventory">
            <table id="tableOrdersInventory">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Address</td>
                        <td>Position</td>
                        <td>Contact Details</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
            <?php
                include("include/connect.php");

                $query = mysqli_query($con, "SELECT * FROM employee ORDER BY employeeid DESC");
                $checkquery = mysqli_num_rows($query);
                if($checkquery != 0){
                    while ($row = mysqli_fetch_assoc($query)){
                        ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['employeename']; ?></td>
                        <td><?php echo $row['employeeaddress']; ?></td>
                        <td><?php echo $row['employeeposition']; ?></td>
                        <td><?php echo $row['employeecontactdetails']; ?></td>
                        <td><form action="" method="POST">
                            <button type="submit" id="viewSubmit" name="viewSubmit"><img src="/PearlBlueWRS/images/icons/admin/eye.png" id="viewEyeIcon"><input type="hidden" name="viewID" id="viewID" value="<?php echo $row['employeeid']; ?>"></button>
                        </form></td>
                        <td><form action="" method="POST">
                            <button type="submit" id="viewSubmit" name="viewSubmit"><img src="/PearlBlueWRS/images/icons/admin/edit.png" id="viewEyeIcon"><input type="hidden" name="viewID" id="viewID" value="<?php echo $row['employeeid']; ?>"></button>
                        </form></td>
                        <td><form action="" method="POST">
                            <button type="submit" id="viewSubmit" name="viewSubmit"><img src="/PearlBlueWRS/images/icons/admin/delete.png" id="viewEyeIcon"><input type="hidden" name="viewID" id="viewID" value="<?php echo $row['employeeid']; ?>"></button>
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
    <?php
        if(isset($_POST['viewSubmit'])){
            $viewid = $_POST['viewID'];

            $viewquery = mysqli_query($con, "SELECT * FROM employee WHERE employeeid = '$viewid'");
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
                                    <td>Employee ID:</td>
                                    <td><?php echo $row['employeeid'] ?></td>
                                </tr>
                                <tr>
                                    <td>Employee Name:</td>
                                    <td><?php echo $row['employeename'] ?></td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td><?php echo $row['employeeaddress'] ?></td>
                                </tr>
                                <tr>
                                    <td>Contact Number:</td>
                                    <td><?php echo $row['employeecontactdetails'] ?></td>
                                </tr>
                                <tr>
                                    <td>Position:</td>
                                    <td><?php echo $row['employeeposition'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <?php
                }
            }
        }
    ?>
    <script src="/PearlBlueWRS/js/employee.js"></script>
</body>
</html>
<?php
    }
?>