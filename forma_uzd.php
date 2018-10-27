<!DOCTYPE html>
<html>
<head>
	<title>Langeliu generatorius</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
	.square {
		border: 1 solid black;
		float: left;
		display: inline;
		margin: 5px;
		padding: 5px;
	}
	.red {
		background-color: red;
	}
	.blue {
		background-color: blue;
	}
	</style>

</head>

<body>
	
	<h1>PHP langeliu generatorius</h1>
	<form action="forma_uzd.php" method="get">
		<input type="text" name="count" required="true">
		<br />

		<select name="color">
			<option value="red" class="red">Red</option>
			<option value="blue" class="blue">Blue</option>
			<option value="random" <?php echo = rand($random) ?>Random</option>
		</select>

		<input type="submit" value="Submit">
	</form>

<?php
// // $count = 8979878784;
// echo isset($count);
// if (isset($_POST['nickname']) || }}) {
// 	echo $_POST['nickname'];
// } else {
// 	echo "Nickname is not set. Please enter below";
// }
	if (isset($_GET['count'])) {
		for ($i=1; $i <= $_GET['count']; $i++) { 
			echo "<div class='square " . $_GET['color']."'>$i</div>";
		} if {
			echo ;

	}
	
	?>

</html>

<!--1<div class='square red'>gyjgyhiuhu</div>-->