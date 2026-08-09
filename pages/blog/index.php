<!DOCTYPE html>
<html lang="en-AU">
    <?php
    $title = "piss blog";
    require __DIR__ . "/../../header.php";
    ?>
    <div class = "page-content">
            <div>
		    <h1>
						hello
			</h1>
            </div>
            <div>
		    <?php $files = glob(__DIR__ . "/posts/*.txt"); ?>
						<ul>
						    <?php foreach ($files as $file): ?>
							<li>
							    <a href="posts/<?= basename($file, ".txt") ?>.html">
											<?= basename($file, ".txt") ?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
            </div>
		</div>
	</div>
	</body>
</html>
