<?php

/* root */
if (!is_dir("output")) {
    mkdir("output");
}

if (is_dir("img")) {
    mkdir("output/img", 0755, true);
    foreach (glob("img/*") as $image) {
        copy($image, "output/img/" . basename($image));
    }
}
copy("style.css", "output/style.css");

/* homepage */
ob_start();
require __DIR__ . "/index.php";
$content = ob_get_clean();
file_put_contents("output/index.html", $content);

/* blog index */
if (!is_dir("output/pages/blog")) {
    mkdir("output/pages/blog", 0755, true);
}

ob_start();
require __DIR__ . "/pages/blog/index.php";
$content = ob_get_clean();
file_put_contents("output/pages/blog/index.html", $content);

/* posts */
if (!is_dir("output/pages/blog/posts")) {
    mkdir("output/pages/blog/posts", 0755, true);
}

foreach ($files as $file) {
    $slug = basename($file, ".md");
    $_GET["slug"] = $slug;

    ob_start();
    require __DIR__ . "/pages/blog/post.php";
    $content = ob_get_clean();
    file_put_contents("output/pages/blog/posts/" . $slug . ".html", $content);
}
?>
