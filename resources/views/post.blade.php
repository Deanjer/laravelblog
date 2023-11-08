<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/app.css">
    <title>Blog posts</title>
</head>

<body>

    <article>
        <h1><a href="post/<?= $item->id; ?>"><?= $item->title; ?></a></h1>
        <div>
            <?= $item->info; ?>
            <br>
            <br>
            <?= $item->excerpt; ?>
        </div>
    </article>
    <div class="comments">
    <?php
            foreach ($comment_item as $comment) {
                echo $comment->post_id;
            }
            ?>
    </div>

    <a href="/">Go back</a>
</body>

</html>

