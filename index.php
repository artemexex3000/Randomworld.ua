<!DOCTYPE html>
	<html>
		<head>
			<title>
				Random coin
			</title>
		</head>
		<body>
			You can use my "Random number": <a href="http://randomworld.ua/index2.php">Click here!</a>
			<p align="right"><font color="red">(HORSE - yes, FACE - no)</font></p>
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
						This RANDOM-site generates the side of coin. Click "FLIP" to get the side of coin!
					</b>
				</p>
			</center>
			<center>
				<form action="index.php" method="POST">
					<input type="submit" name="flip" value="FLIP!">
				</form>
				<br />
				<?php
				if (isset ($_POST['flip'])) {
				$rand = rand(1, 100);
				if ($rand <= 50) {
					echo 'HORSE';
					} else {
					echo 'FACE';
							} 
					}
				?>
			</center>
		</body>
	</html>