<!doctype html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<body>
<?php foreach ($posts as $post):?>
    <article>
       <h2><?=$post?></h2>
    </article>
<?php endforeach;?>
</body>
