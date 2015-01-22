<?php
require_once('settings.php');
require_once('randgenerator.php');
require_once('clicktestcount.php');

//Shows from where the button get its' functions.
	$button = new Ecom_Button();
	$button->initializeStorage();
	$option = $button->getOption();
	$button->trackView($option);

	if (array_key_exists('option', $_POST)){
		$button->trackClick($_POST['option']);
	}

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
			<input type="hidden" value="<?php echo $option; ?>" name="option" />
			<input type="submit" value="<?php echo $option; ?>" />
		</form>
	</body>
</html>
