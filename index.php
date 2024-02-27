<?php require("./language.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $translator -> trans('main-page-title'); ?></title>
</head>
<body>
	<p><?php echo $translator -> trans('whats-this'); ?></p>
	<p><?php echo $translator -> trans('welcome-message'); ?></p>
	<p><?php echo $translator -> trans('goodbye-message'); ?></p>
</body>
</html>