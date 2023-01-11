<?php
    require_once('connect.php');
    $goods = mysqli_fetch_all(mysqli_query($connect, 'select * from `goods`;'));

    // var_dump($goods);
    // echo "<pre>";
    // print_r($goods);
    // echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>DB connection test</title>
</head>
<body>
    <table cellspacing="0">
        <tbody>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>price</th>
                <th>&#9998;</th>
                <th>&#10006;</th>
            </tr>
            <?php 
            foreach ($goods as $item) {
            ?>
            <tr>
                <td><?= $item[0] ?></td>
                <td><?= $item[1] ?></td>
                <td><?= $item[2] ?></td>
                <td><?= $item[3] ?></td>
                <td><a href="update_item.php?id=<?= $item[0] ?>">&#9998;</a></td>
                <td><a href="delete_item.php?id=<?= $item[0] ?>">&#10006;</a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <form action="add_item.php" method="post">
        <p class="form__title">Добавить товар</p>
        <p class="form__desc">Название</p>
        <input type="text" name="title" id="title" class="form__input">
        <p class="form__desc">Описание</p>
        <textarea type="text" name="description" id="description" class="form__input"></textarea>
        <p class="form__desc">Цена</p>
        <input type="text" name="price" id="price" class="form__input">
        <button type="submit">Добавить</button>
    </form>
</body>
</html>