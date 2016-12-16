<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form class="form-inline" action="/task/add" method="post">
        <div class="form-group">
            <label for="task">Name</label>
            <input name="task" type="text" class="form-control" id="task" placeholder="Задача">
        </div>
        <button type="submit" class="btn btn-default">Добавить задачу</button>
    </form>
    <hr>
    <form action="/task/update" method="POST">
        <select name="select" id="">
            <option value="d">Удалить</option>
            <option value="u">Пометить как сделано!</option>
        </select>
        <input type="submit">
    <ul>
    <?php foreach($taskList as $task): ?>
        <li><input type="checkbox" name="complete[<?= $task['keyss'] ?>]" value="" <?= $task['id'] ?> >
        <?php if($task['id']): ?>

                <s><?= $task['title'] ?></s></li>

        <?php else: ?>

                <?= $task['title'] ?>
            </li>
        <?php endif ?>
    <?php endforeach; ?>
    </ul>
    </form>
</div>
</body>
</html>