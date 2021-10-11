<?php include __DIR__ . '/../header.php'; ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
    <p>Автор cтатьи: <?= $article->getAuthor()->getNickname() ?></p>
    <form method="post" action="/articles/comment/save/">
        <label for="messageField">Ваш комментарий</label><br>
        <textarea name="message" id="messageField" cols="50" rows="10"></textarea>
        <br>
        <input type="submit" value="Оставить комментарий">
<?php include __DIR__ . '/../footer.php'; ?>