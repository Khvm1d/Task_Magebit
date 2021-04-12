<?php

$connect = mysqli_connect('localhost','root','','test');

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    <?php
    $products = mysqli_query($connect, "SELECT * FROM `test` ORDER BY email");
    $products = mysqli_fetch_all($products);

    foreach ($products as $product)
    {
        ?>
        <tr>
            <td><?php echo $product[0] ?></td>
            <td><?php echo $product[1] ?></td>
            <td><?php echo $product[2] ?></td>
            <td><a href="update.php">Сорт по Дате</a></td>
            <td><a href="sort.php">Сорт по Имени</a></td>
            <td><a style="color: red" href="../src/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
        </tr>
        <?php

    }

    ?>
</table>


</body>
</html>

