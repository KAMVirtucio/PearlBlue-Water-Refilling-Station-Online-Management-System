<head>
	<style>
		.table{
			font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    		font-size: 12pt;
		}
	</style>
</head>
<?php

$connect = mysqli_connect("localhost", "root", "", "pearlbluewrs");
error_reporting("E-NOTICE");
$id = $_POST['id'];
$output = '';
if(isset($_POST["printBtn"]))
{
	$sql = "SELECT * FROM customerorders WHERE ordercustomerid='$id'";
	$result = mysqli_query($connect, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<table width="55%" class="table" bordered="1">
		';
		$subtotal = 0;
		while($row = mysqli_fetch_array($result))
		{
			$output .='
				<tr>
                    <td><b>Customer Name: </b>' .$row["ordercustomername"].'</td>
                </tr>
                <tr>
                    <td><b>Address: </b>' .$row["orderaddress"].'</td>
                </tr>
                <tr>
                    <td><b>Contact Number: </b>' .$row["ordercontactdetails"].'</td>
                </tr>
                <tr>
                    <td><b>Date Ordered: </b>' .$row["orderdateordered"].'</td>
                </tr>
                <tr>
                    <td><b>Date Needed: </b>' .$row["orderdateneeded"].'</td>
                </tr>
                <tr>
                    <td><b>Number of Orders: </b>' .$row["ordernumber"].'</td>
                </tr>
                <tr>
                    <td><b>Container Type/Size: </b>' .$row["ordertype"].'</td>
                </tr>
                <tr>
					<td><b>Payment Scheme: </b>' .$row["orderpaymentscheme"].'</td>
				</tr>'
				;
				$value = $row["ordertotal"];
				$subtotal += $value;
		}
		$output .= '</table>
		
		<table border="2">
		<tr>
		<th> Total Price : <font color="#005db4" size="5">' .$subtotal. '</th></tr></table>
		
		';
		header("Content-Type: application/xls");
		header("Content-Disposition:attachment; filename=Inventory-Delivered.xls");
		echo $output;
	}
	else{
		?>
		<script>
			alert('No data read for the date selected! Please try again!');
			window.location.href = "/PearlBlueWRS/admin/reports.php";
		</script>
		<?php
	}
}
?>