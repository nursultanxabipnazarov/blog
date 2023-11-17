<?php

include __DIR__.'/app/controllers/posts.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1><?=$single_id[0]['title'];?></H1>
    <p><?=$single_id[0]['text'];?></p>
    <img src="/img/post/<?=$single_id[0]['img'];?>" alt="">
    <p><?=$single_id[0]['create_at'];?></p>
</body>
</html>