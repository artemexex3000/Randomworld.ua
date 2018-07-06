<!DOCTYPE html>
	<html>
	<head>
		<title>
		Random things
		</title>
	</head>
	<body>
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
				This RANDOM generates numbers from 1 to 100. Click "ROLL THIS!" to get your number!
			</b>
		</p>
	</center>
	<center>
		<form action="index.php" method="POST">
			<input type="submit" name="roll" value="ROLL THIS!">
		</form>
	<br />
		<?php
			if (isset ($_POST['roll'])) {
				$rand = rand(1, 100);
				echo $rand;
			}
		?>
	</center>
	</body>
	</html>