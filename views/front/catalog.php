<?php
/**
 * @var $connection mysqli
 */
$sql = "SELECT * FROM products";
$res = mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage - List of articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/assets/css/styles_php.css" rel="stylesheet"/>
</head>

<body>

<?php include_once __DIR__ . "/../partials/main_menu.php" ?>
<?php include_once __DIR__ . "/../partials/header.php" ?>
<div class="container">
    <div class="product-item">
        <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
        <div class="product-list">
            <h3>Маленькое черное платье</h3>
            <span class="price">₽ 1999</span>
            <a href="" class="button">В корзину</a>
        </div>
    </div>
    <div class="product-item">
        <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
        <div class="product-list">
            <h3>Маленькое черное платье</h3>
            <span class="price">₽ 1999</span>
            <a href="" class="button">В корзину</a>
        </div>
    </div>
    <div class="product-item">
        <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
        <div class="product-list">
            <h3>Маленькое черное платье</h3>
            <span class="price">₽ 1999</span>
            <a href="" class="button">В корзину</a>
        </div>
    </div>
    <div class="product-item">
        <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
        <div class="product-list">
            <h3>Маленькое черное платье</h3>
            <span class="price">₽ 1999</span>
            <a href="" class="button">В корзину</a>
        </div>
    </div>
    <div class="product-item">
        <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
        <div class="product-list">
            <h3>Маленькое черное платье</h3>
            <span class="price">₽ 1999</span>
            <a href="" class="button">В корзину</a>
        </div>
    </div>
    <div class="product-item">
        <img src="https://html5book.ru/wp-content/uploads/2015/10/black-dress.jpg">
        <div class="product-list">
            <h3>Маленькое черное платье</h3>
            <span class="price">₽ 1999</span>
            <a href="" class="button">В корзину</a>
        </div>
    </div>
</div>


<section class="pagination">
    <p class="pagination-num">1</p>
    <p class="pagination-num">2</p>
    <p class="pagination-num">3</p>
    <p class="pagination-num">4</p>
    <p class="pagination-num">5</p>
</section>
<?php include_once __DIR__ . '/../partials/footer.php' ?>
</body>

</html>