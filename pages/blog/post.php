<?php

$slug = $_GET["slug"];
$file = __DIR__ . "/posts/" . $slug . ".md";
if (!file_exists($file)) {
    die("Pee not found");
}
require_once __DIR__ . "/../../includes/Parsedown/Parsedown.php";
$Parsedown = new Parsedown();
$content = $Parsedown->text(file_get_contents($file));
?>

<!DOCTYPE html>
<html lang="en-AU">
    <?php
    $title = "piss blog";
    require __DIR__ . "/../../header.php";
    ?>
	<body>
	<div class = "page-content">
        <?= $content ?>
	</div>
	</body>
</html>
