<!DOCTYPE html>
<html>
<head>
	<title>BILLING SYSTEM</title>
	<style>
		body {
			background-color: lightseagreen;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; font-family: Tahoma; text-decoration: underline overline; color: darkslateblue; font-size: 50px;">SUPERSTORE BILLING SYSTEM</h1>

	<?php
		$amount1 = $_POST["unitprice1"] * $_POST["quantity1"];
		$amount2 = $_POST["unitprice2"] * $_POST["quantity2"];
		$amount3 = $_POST["unitprice3"] * $_POST["quantity3"];
		$amount4 = $_POST["unitprice4"] * $_POST["quantity4"];
		$amount5 = $_POST["unitprice5"] * $_POST["quantity5"];
		$amount6 = $_POST["unitprice6"] * $_POST["quantity6"];
		$amount7 = $_POST["unitprice7"] * $_POST["quantity7"];
		$amount8 = $_POST["unitprice8"] * $_POST["quantity8"];

		$total = $amount1 + $amount2 + $amount3 + $amount4 + $amount5 + $amount6 + $amount7 + $amount8;

		$discount = 0;

		if ($total > 5000)
			$discount = $total * 0.2;
		elseif ($total > 3000)
			$discount = $total * 0.15;
		elseif ($total > 1500)
			$discount = $total * 0.1;
		else
			$discount = $total * 0.05;

		$total = $total - $discount;

		echo "<h2 style='text-align: center; font-family: Tahoma; text-decoration: underline overline; color: lightgoldenrodyellow; font-size: 50px;'>";
		echo "TOTAL AMOUNT = Rs. ".$total."</br>";
		echo "DISCOUNT APPLIED = Rs. ".$discount."</br>";
		echo "</h2>";

		$text = "TOTAL AMOUNT = Rs. ".$total."\nDISCOUNT = Rs. ".$discount."\n";

		$fp1 = fopen("Bill.txt", "a");
		fwrite($fp1, $text);
		fclose($fp1);
	?>
				<table>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
					<tr>
						<td><input type="text" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
						<td><input type="number" name="" id=""></td>
					</tr>
				</table>









</body>
</html>