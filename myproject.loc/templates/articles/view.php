<?php include __DIR__ . '/../header.php'; ?>
    <h1><?= $article->getName() ?></h1>
    <p><?= $article->getText() ?></p>
    <p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
    <br><br><br><br>
    <form action="http://myproject.loc/articles/<?= $article-> getId() ?>/comments" method="post" >
        <label>Текст комментария <input type="text" name="comment"> </label>
        <br><br>
        <br>
        <label>Id статьи </label>
        <textarea name="articleId" id="articleId" cols="0" rows="0"><?= $article-> getId() ?></textarea>
        <br><br>
        <input type="submit" value="Прокомментировать">
    </form>
<?php include __DIR__ . '/../footer.php'; ?>