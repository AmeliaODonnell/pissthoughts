<!DOCTYPE html>
<html lang="en-AU">
    <?php
    $title = "piss thoughts";
    require "../../header.php";
    ?>
    <head>
        		<link rel="stylesheet" href="../../style.css" />
    </head>
	<style>

	</style>
	<body>
		<div class="grid-top">
		    <h1>
						hello
			</h1>
		    <?php $files = glob("posts/*.md"); ?>
						<ul>
						    <?php foreach ($files as $file): ?>
							<li>
							    <a href="post.php?slug=<?= basename($file, ".md") ?>">
											<?= basename($file, ".md") ?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
		</div>
	</body>
</html>
