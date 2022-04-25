
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<h1>Count Factors</h1>
		<form action="" method="post">
			<input type="number" name="num">
			<button>Get Factor</button><br>
			<?php 
			if(isset($_POST['num'])){
				$x= $_POST['num'];
				$fact = 1;
				for ($i=1; $i <=$x ; $i++) { 
					if ($x%$i == 0) {
						echo $i;
					}
					echo "\n";
				}
			}
			?>	
		</form>
	</div>
</body>
</html>