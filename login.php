<?php
    if(isset($_POST['submitbutton'])){
        include("include/connect.php");

        $user = $_POST['username'];
        $pass = $_POST['password'];

        if(!empty($user) && !empty($pass)){
            $checkaccount = mysqli_query($con, "SELECT * FROM admin WHERE adminusername='$user' AND adminpassword='$pass'");
            $validate = mysqli_num_rows($checkaccount);

            if($validate != 0){
                while($row = mysqli_fetch_assoc($checkaccount)){
                    $accountId = $row['adminid'];
                    $accountFullName = $row['adminfullname'];
                    $accountUserName = $row['adminusername'];
                    $accountPassword = $row['adminpassword'];
                    $accountPrivelage = $row['adminprivelage'];
                    $accountStatus = $row['adminstatus'];
                }
                if($user == $accountUserName && $pass == $accountPassword && $accountPrivelage == "ADMIN" && $accountStatus == "ACTIVE"){
                    session_start();
                    $_SESSION['session_accountname'] = $accountFullName;
                    $_SESSION['session_id'] = $accountId;

                    header("location: admin/");
                }
                elseif ($user == $accountUserName && $pass == $accountPassword && $accountPrivelage == "STAFF" && $accountStatus == "ACTIVE") {
                    session_start();
                    $_SESSION['session_accountname'] = $accountFullName;
                    $_SESSION['session_id'] = $accountId;

                    header("location: staff/");
                }
                elseif ($user == $accountUserName && $pass == $accountPassword && $accountPrivelage == "CASHIER" && $accountStatus == "ACTIVE") {
                    session_start();
                    $_SESSION['session_accountname'] = $accountFullName;
                    $_SESSION['session_id'] = $accountId;

                    header("location: cashier/");
                }
                else{
                    ?>
                    <script>
                        alert("Invalid account! Please try again!");
                        window.location.replace(window.location.pathname + window.location.search + window.location.hash);
                    </script>
                    <?php
                }
            }
            else{
                ?>
                <script>
                    alert("Invalid password or username!");
                    window.location.replace(window.location.pathname + window.location.search + window.location.hash);
                </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert("Please input the needed details below!");
                window.location.replace(window.location.pathname + window.location.search + window.location.hash);
            </script>
            <?php
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/PearlBlueWRS/images/logo.png">
    <title>Pearl Blue Water Refilling Station</title>
    <link href="/PearlBlueWRS/css/login.css" rel="stylesheet" media="screen">
</head>
<body>
   <div id="loginContentContainer">
       <div id="loginContent">
           <div id="loginDetails">
               <div id="loginlogoContainer">
                   <img src="/PearlBLueWRS/images/usericon.png" alt="USER ICON" id="loginlogo">
               </div>
               <div id="welcomeAdminContainer">
                   <span id="welcomeAdmin">Welcome ADMIN!</span>
               </div>
               <div id="pleasefilloutContainer">
                   <span id="pleasefillout">Please fill out the necessary details below:</span>
               </div>
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="formLogin">
                   <div id="usernameContainer">
                       <input type="text" name="username" id="username" placeholder="Please enter your username">
                    </div>
                    <div id="passwordContainer">
                        <input type="password" name="password" id="password" placeholder="Please enter your password">
                    </div>
                    <div id="showpasswordContainer">
                        <input type="checkbox" name="showpassword" id="showpassword">Show Password
                    </div>
                    <div id="submitbuttonContainer">
                        <input type="submit" value="LOGIN" name="submitbutton" id="submitbutton">
                    </div>
               </form>
           </div>
       </div>
   </div>
   <script src="/PearlBlueWRS/js/login.js"></script>
</body>
</html>