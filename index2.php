<!DOCTYPE html>
	<html>
		<head>
			<title>
				Random number
			</title>
		</head>
		<body>
			You can use my "Random coin": <a href="https://mrtrololoshka70.000webhostapp.com/index.php">Click here!</a>
			<center>
				<p>
					<h3>
						<font color="blue">
							Web-site, which can help you with lotteries, maybe...
						</font>
					</h3>
				</p>
				<p>
					<b>
						This RANDOM-site generates random number. Click "RANDOM" to get your number!
					</b>
				</p>
				<p>
					(0-999999)
				</p>
			</center>
			<center>
				<form action="index2.php" method="POST">
					first number:<input type="text" name="fnumber">
					<br />
					<br />
					second number:<input type="text" name="snumber">
					<br />
					<br />
					<input type="submit" name="random" value="RANDOM">
				</form>
				<br />
				<?php
				if (isset($_POST['fnumber']) and isset($_POST['snumber'])) {
				if (is_numeric($_POST['fnumber']) and is_numeric($_POST['snumber'])) {
				if ($_POST['fnumber'] >= 0 AND $_POST['fnumber'] <= 999999 AND $_POST['snumber'] >= 0 AND $_POST['snumber'] <= 999999) {
					if (isset ($_POST['random'])) {
					$rand = rand($_POST['fnumber'], $_POST['snumber']);
					echo $rand;
				} } else {
					echo 'Error';
				} } else {
					echo 'Enter the number!';
				} }
				?>
			</center>
		</body>
	</html>