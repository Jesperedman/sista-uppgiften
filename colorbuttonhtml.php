<?php 
// Link together the files.
	require_once('settings.php');
	require_once('randgenerator.php');
	require_once('counttest_2.php');

?>
<!doctype html>
<html>
	<head>
		<title></title>

		<style>
			input {}
			.orange {background: orange;}
			.red {background: red;}
			.green {background: green;}
		</style>
		
	</head>
	<body>
		<form action"." method="post">
			<input type="submit" value="Add to cart" class="<?php echo $color; ?>" />
		</form>
	</body>
</html>