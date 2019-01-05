<?php
    session_start();
    if(!isset($_SESSION["session_accountname"]) && !isset($_SESSION["session_id"])){
        header("location: /PearlBlue/login.php");
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
    <link href="/PearlBlueWRS/css/cashier/unpaidordersdesign.css" rel="stylesheet" media="screen">	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <span id="dashboardTextTop">LIST OF UNPAID ORDERS</span>
        <hr>
    </div>
    <div class="wrap-container">
        <div class="customerinfo">
            <form action="#" method="POST">
              <input type="text" name="searchname" placeholder="Search Customer Name.." size=30>
               <button type="submit" name="searchbtn" value="SEARCH"><i class="fa fa-search"></i></button>
            </form>
        </div>
       </div>
    <div id="inventoryCont">
        <div id="inventory">
            <table id="inventoryTable">
                <thead bgcolor= "#eaeaea">
                    <tr>
                        <td style="width: 15%;">Customer Name</td>
                        <td style="width: 20%;">Address</td>
                        <td style="width: 8%;">Contact Number</td>
                        <td style="width: 7%;">Date Ordered</td>
                        <td style="width: 7%;">Desire Date of Delivery</td>
                        <td style="width: 5%;">Number of Orders</td>
                        <td style="width: 10%;">Container Design</td>
                        <td style="width: 5%;">Order Total</td>
                        <td style="width: 5%;">Order Status</td>
                        <td style="width: 15%;">Action</td>
                    </tr>
                </thead>
            <?php
                include("include/connect.php");

                $query = mysqli_query($con, "SELECT * FROM customerorders WHERE orderstatus = ''");
                $countquery = mysqli_num_rows($query);

                if($countquery != 0){
                    while($row = mysqli_fetch_assoc($query)){
                        $customerid = $row['ordercustomerid'];
                        $customername = $row['ordercustomername'];
                        $address = $row['orderaddress'];
                        $contactdetails = $row['ordercontactdetails'];
                        $dateordered = $row['orderdateordered'];
                        $dateneeded = $row['orderdateneeded'];
                        $number = $row['ordernumber'];
                        $type = $row['ordertype'];
                        $total = $row['ordertotal'];
                        $status = 'For Delivery'
                        ?>
                    <tbody>
                        <tr>
                            <td><?php echo $customername; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $contactdetails; ?></td>
                            <td><?php echo $dateordered; ?></td>
                            <td><?php echo $dateneeded; ?></td>
                            <td><?php echo $number; ?></td>
                            <td><?php echo $type; ?></td>
                            <td><?php echo $total; ?></td>
                            <td><?php echo $status; ?></td>
                            <td><button class="button"><i class="fa fa-edit"></i></button>&nbsp;<button class="button2"><i class="fa fa-trash"></i></button>&nbsp;<button class="button3"><i class="fa fa-print"></i></button></td>
                        </tr>
                        <?php
                    }
                        ?>
                    </tbody>
                </table>
                        <?php
                }
            ?>
        </div>
    </div>
</body>
</html>
<?php
    }
?>