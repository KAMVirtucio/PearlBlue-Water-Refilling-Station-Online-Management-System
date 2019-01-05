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
    <link href="/PearlBlueWRS/css/admin/sales.css" rel="stylesheet" media="screen">
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
        <span id="dashboardTextTop">SALES</span>
    </div>
    <div id="salesprogressContainer">
        <div id="salesprogress">
            <img src="/PearlBlueWRS/images/salesprogress.png" id="salesprogressPic">
        </div>
    </div>
</body>
</html>
<?php
    }
?>