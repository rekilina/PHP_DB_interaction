<?php
    require_once('connect.php');
    
    $current_id = $_GET['id'];

    $good = mysqli_query($connect, "Select * from `goods` where `id` = '$current_id';");
    $good = mysqli_fetch_assoc($good);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <form action="update_item-query.php?id=<?= $current_id; ?>" method="post">
        <p class="form__title">Редактировать товар</p>
        <p class="form__desc">Название</p>
        <input type="text" name="title" id="title" class="form__input" value="<?=$good['title'];?>">
        <p class="form__desc">Описание</p>
        <textarea type="text" name="description" id="description" class="form__input"><?=$good['description'];?></textarea>
        <p class="form__desc">Цена</p>
        <input type="text" name="price" id="price" class="form__input" value="<?=$good['price'];?>">
        <button type="submit">Обновить</button>
    </form>
</body>

</html>