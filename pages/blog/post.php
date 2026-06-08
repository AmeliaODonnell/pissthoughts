<?php

$slug = $_GET["slug"];
$file = "posts/" . $slug . ".md";
if (!file_exists($file)) {
    die("Pee not found");
}
require "../../includes/Parsedown/Parsedown.php";
$Parsedown = new Parsedown();
$content = $Parsedown->text(file_get_contents($file));
?>

<!DOCTYPE html>
<html lang="en-AU">
	<head>
		<title>
		post
		</title>
		<meta charset="utf-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../../style.css" />
	</head>
	<style>

	</style>
	<body>
    <?= $content ?>
	</body>
</html>
