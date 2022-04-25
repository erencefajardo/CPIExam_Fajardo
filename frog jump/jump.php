
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="" method="post">
			<h1>Frog Jump</h1>
			<label>Position</label>
			<input type="number" name="num">
			<label>Distance</label>
			<input type="number" name="num2">
			<label>Jump</label>
			<input type="number" name="num3">
			<button>Jump</button><br><br>
			<?php 
			if(isset($_POST['num'])){
				$x= $_POST['num'];
				$y= $_POST['num2'];
				$d= $_POST['num3'];
				echo "Position: ", $x ;
				echo "Distance: ", $y ;
				echo "Distance: ", $d ;
				if ($x <= $y) {
					$n = $x + $d;
					$sec = $n + $d;
					echo "First Jump: ", $n;
				}else{
					echo"Reach Distance!";
				}
				

			}

			?>
			
		</form>
	</div>
</body>
</html>