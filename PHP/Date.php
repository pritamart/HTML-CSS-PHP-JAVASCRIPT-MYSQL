<!DOCTYPE html>
<html>
<head>
	<title>Date using PHP</title>
</head>
<body bgcolor="black">
	<h1 style="background-color: pink; color: purple; text-align: center;">
		PHP DATE FUNCTION
	</h1>

	<h3 style="background-color: white; color: red; text-align: center;">
		<?php
			echo "Today is ".date("Y/m/d")."<br>";
			echo "Today is ".date("Y.m.d")."<br>";
			echo "Today is ".date("Y-m-d")."<br>";
			echo "Today is ".date("d-m-Y")."<br>";

			echo "Today is (a full textual representation of the day): ".date("I")."<br>";
			echo "Today is (textual representation of the day in 3 letters): ".date("D")."<br>";
			echo "Today is (day of the month): ".date("d")."<br>";

			echo "Number of days in current month: ".date("t")."<br>";
			echo "Today is (the day of the year from 0 through 365): ".date("z")."<br>";
			echo "This month (a full textual representation of the month): ".date("F")."<br>";
			echo "This month is (a short textual representation of the month): ".date("M")."<br>";
			echo "This year is (a four digit representation of a year): ".date("Y")."<br";
			echo "This year is (a two digit representation of a year) ".date("y")."<br>";
			echo "Is this a lear year? ".date("L")."<br>";
		?>
	</h3>

	<br>

	<h2 style="background-color: red; color: white; text-align: center;">
		<?php
			$d = date("D"); // D: textual representation of the day in 3 letters
			if ($d == "Fri")
				echo "Have a nice weekend";
			else
				echo "Work hard!";

			$d = date("I"); // I: full textual representation of the day
			if ($d == "Thursday")
				echo "Weekend is near!";
			else
				echo "The week is on!";
		?>
	</h2>

	<h4 style="background-color: olive; color: white; text-align: center;">
		(c)-<?php echo date("Y");?>
	</h4>

	<h3 style="background-color: white; color: red; text-align: center;">
		PHP date_add() Function:
	</h3>

	<h3 style="background-color: midnightblue; color: yellow; text-align: center;">
		Adding 50 days to the current date:
		<?php
			$date = date_create("2022-02-28");
			date_add($date, date_interval_create_from_date_string("50 days"));

			// The date_interval_create_from_date_string() function sets us a DateInterval from the relative parts of the string

			echo date_format($date, "d-m-Y");
		?>
	</h3>

	<h3 style="background-color: white; color: red; text-align: center;">
		PHP date_diff() Function
	</h3>

	<h3 style="background-color: midnightblue; color: yellow; text-align: center;">
		Number of days passed after first lockdown:

		<?php
			$date1 = date_create("2020-03-21");
			$date2 = date_create("2022-02-28");
			$diff = date_diff($date1, $date2);
			echo $diff->format("%a days");
		?>
	</h3>

	<h2 style="background-color: white; color: red; text-align: center;">
		Create a date from a string with strtotime()
	</h2>

	<h3 style="background-color: midnightblue; color: yellow; text-align: center;">
		<?php
			$d = strtotime("YESTERDAY");
			echo "Yesterday was: ".date("d-m-Y", $d)."<br>";

			$d = strtotime("TODAY");
			echo "Today is: ".date("d-m-Y", $d)."<br>";

			$d = strtotime("Tomorrow");
			echo "Tomorrow is: ".date("d-m-Y", $d)."<br>";

			$d = strtotime("Previous Friday");
			echo "Prev Friday: ".date("d-m-Y", $d)."<br>";

			$d = strtotime("Next Friday");
			echo "Next Friday: ".date("d-m-Y", $d);

			$d = strtotime("+3 Months");
			echo "Date after 3 months".date("d-m-Y")."<br>";

			$d = strtotime("+100 days");
			echo "Date after 100 days: ".date("d-m-Y", $d)."<br>";
		?>

		<h2 style="background-color: white; color: red; text-align: center;">
			The example below outputs the dates for the next TEN MONDAYS:
		</h2>

		<h3 style="background-color: cyan; color: black; text-align: center; font-weight: bold;">
			<?php
				$startdate = strtotime("MONDAY");
				$enddate = strtotime("+10 weeks", $startdate);

				while ($startdate < $enddate) {
					echo date("M d", $startdate)."<br>";
					$startdate = strtotime("+1 week", $startdate);
				}
			?>
		</h3>
	</h3>
</body>
</html>