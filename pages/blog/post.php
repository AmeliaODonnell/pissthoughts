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
    <?php
    $title = "piss blog";
    require "../../header.php";
    ?>
	<body>
    <?= $content ?>
	</body>
</html>
