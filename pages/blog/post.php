<?php

$slug = $_GET["slug"];
$file = __DIR__ . "/posts/" . $slug . ".txt";
if (!file_exists($file)) {
    die("Pee not found");
}
$content = nl2br(htmlspecialchars(file_get_contents($file)));
?>

<!DOCTYPE html>
<html lang="en-AU">
    <?php
    $title = "piss blog";
    require __DIR__ . "/../../header.php";
    ?>
	<body>
	<div class = "page-content">
	    <p>
            <?= $content ?>
	    </p>
	</div>
	</body>
</html>
