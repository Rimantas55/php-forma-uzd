<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP Squares</title>
</head>
<body>

	<div class="container">
		<h1>PHP Squares</h1>
		<div class="row">
			<form action="forma_uzd.php" method="get">
				<div class="form-group">
					<label for="count">Square count</label>
					<input type="text" class="form-control" name="count">
					<select name="color" class="form-control">
						<option value="red" class="red">Red</option>
						<option value="blue" class="blue">Blue</option>
						<option value="random">Random</option>
					</select>
				</div>    				
				<button type="submit" class="btn btn-primary">Generate</button>
			</form>
		</div>
		<h2>Generated squares</h2>
		<div class="row">
			<?php
			if (isset($_GET['count']) && !empty($_GET['count'])) {
				if ($_GET['color'] == 'random') {
					for ($i=1; $i <= $_GET['count']; $i++) { 
						$r = rand(0, 254); 
						$g = rand(0, 254);
						$b = rand(0, 254);
						echo "<div class='square' style='background: rgb(".$r.",".$g.",".$b." )'>" . $i . "</div>";
					}
				} else {
					
					for ($i=1; $i <= $_GET['count']; $i++) { 
						echo "<div class='square ".$_GET['color']."'>" . $i . "</div>";
					} 
				}
				// $i = 0;
				// while ($i <= $_GET['count']) {
				// 	echo "<div class='square'>" . $i . "</div>";
				// 	$i = $i / 50 + 50;
				// }
			} else {
				echo "No squares";
			};
			?>
		</div>
	</div>
</body>
</html>