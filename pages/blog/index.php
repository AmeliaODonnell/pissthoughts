<!DOCTYPE html>
<html lang="en-AU">
    <?php
    $title = "piss blog";
    require "../../header.php";
    ?>
    <div class = "page-content">
            <div>
		    <h1>
						hello
			</h1>
            </div>
            <div>
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
		</div>
	</div>
	</body>
</html>
