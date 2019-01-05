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
$from = $_POST['fromDateTwo'];
$to = $_POST['toDateTwo'];

$output = '';
if(isset($_POST["submitTwo"]))
{
	$sql = "SELECT * FROM customerorders WHERE orderdatedelivered='$from' AND orderstatus='' || orderdatedelivered='$to' AND orderstatus='' ORDER BY ordercustomerid DESC";
	$result = mysqli_query($connect, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<table class="table" bordered="1">
			<tr>
			<th colspan="9">Inventory of For Delivery Orders</th>
			</tr>
			<tr>
			<th>Customer Name</th>
			<th>Address</th>
			<th>Contact Number</th>
			<th>Date Ordered</th>
			<th>Desire Date of Delivery</th>
			<th>Number of Orders</th>
			<th>Container Design</th>
			<th>Order Total</th>
			<th>Payment Scheme</th>			
			</tr>
		';
		$subtotal = 0;
		while($row = mysqli_fetch_array($result))
		{
			$output .='
				<tr>
					<td>' .$row["ordercustomername"].'</td>
					<td>' .$row["orderaddress"].'</td>
					<td>' .$row["ordercontactdetails"].'</td>
					<td>' .$row["orderdateordered"].'</td>
					<td>' .$row["orderdateneeded"].'</td>
					<td>' .$row["ordernumber"].'</td>
					<td>' .$row["ordertype"].'</td>
					<td>' .$row["ordertotal"].'</td>
					<td>' .$row["orderpaymentscheme"].'</td>
				</tr>'
				;
				$value = $row["ordertotal"];
				$subtotal += $value;
		}
		$output .= '</table>
		
		<table border="2">
		<tr>
		<th> Total Sales : <font color="#005db4" size="5">' .$subtotal. '</th></tr></table>
		
		';
		header("Content-Type: application/xls");
		header("Content-Disposition:attachment; filename=Inventory-NotDelivered.xls");
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