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
    <?php //dd($item); 
    ?>
    <div class="center">
        <div class="flex-container">
            <div class="content-container">
                <article>
                    <h1 class="title"><?= $item->title; ?></h1>
                    <img class="top-image" src="/images/illustration-5.png" alt="Blog Post illustration" class="rounded-xl" />
                    <div>
                        <?= $item->info; ?>
                        <br>
                        <br>
                        <?= $item->excerpt; ?>
                    </div>

                    <div class="comments">

                    </div>
                    <br>
                    <script>
                       
                    </script>
                    <a class="back-button" href="/">Go back</a>
                </article>
                <div class="comments-container">
                    <div class="create-comment">
                        <h2>Add reaction</h2>
                        <!-- action=" <?php //echo url('post/'.$item->id); 
                                        ?>"  -->
                        <form method="post">
                            @csrf
                            <input name="post_id" type="hidden" value="<?= $item->id; ?>">
                            <label for="name">Naam</label>
                            <br>
                            <input name="name" type="text">
                            <br>
                            <br>
                            <label for="comment">Comment</label>
                            <br>
                            <textarea name="comment" cols="30" rows="10"></textarea>
                            <br>
                            <input class="back-button" type="submit">
                        </form>
                    </div>

                    <br>
                    <hr>
                    <div class="comments">
                        <?php
                        foreach ($comment_item as $comment) {
                            // echo $comment->post_id;
                            echo '<br><div class="comment-card">' .'<div class="comment-content"><b>'.$comment->name .'</b><br>'. $comment->comment . '</div></div><br><br>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>