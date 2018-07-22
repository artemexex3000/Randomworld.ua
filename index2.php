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
			</center>
			<center>
				<form action="index2.php" method="POST">
					first number:<input type="number" name="fnumber">
					<br />
					<br />
					second number:<input type="number" name="snumber">
					<br />
					<br />
					<input type="submit" name="random" value="RANDOM">
				</form>
				<br />
				<?php
				if ($_POST['fnumber'] <= 2147483647) {
				if (isset ($_POST['random'])) {
					$rand = rand($_POST['fnumber'], $_POST['snumber']);
					echo $rand;
				} } elseif ($_POST['fnumber'] >= -2147483648) {
				if (isset ($_POST['random'])) {
					$rand = rand($_POST['fnumber'], $_POST['snumber']);
					echo $rand;
				} } elseif ($_POST['snumber'] <= 2147483647) {
				if (isset ($_POST['random'])) {
					$rand = rand($_POST['fnumber'], $_POST['snumber']);
					echo $rand;
				} } elseif ($_POST['snumber'] >= -2147483648) {
				if (isset ($_POST['random'])) {
					$rand = rand($_POST['fnumber'], $_POST['snumber']);
					echo $rand;
				} } else {
					echo 'error';
				}
				?>
			</center>
		</body>
	</html>