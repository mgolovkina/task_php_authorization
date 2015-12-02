<a href="login">Выйти</a>
<hr>
<div>
    <h3>Добавить новое стихотворение</h3>
    <form method="post">
        <div class="elem">
            Название
            <input type="text" name="title" class="new" required>
        </div>
        <div class="elem">
            Автор
            <input type="text" name="author" class="new" required>
        </div>
        <div class="elem">
            <p>Текст</p>
            <textarea rows="8" cols="50" name="text"></textarea>
        </div>
        <div class="elem">
            <input type="submit" value="Добавить">
        </div>
    </form>
</div>
<?php foreach ($poems as $p): ?>
    <hr>
    <div class="poem">
        <h3 class="title"><?= $p['title'] ?></h3>
        <p><em>Автор: <?= $p['author'] ?></em></p>
        <pre><?= $p['text'] ?></pre>
    </div>
<?php endforeach; ?>
