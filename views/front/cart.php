<?php
/**
 * @var $connection array
 */

$cart = $_SESSION['cart'] ?? [];
$productIds = array_keys($cart);
$productIds = implode(" , ", $productIds);
$sql = "SELECT * FROM products WHERE id in ({$productIds})";
$res= mysqli_query($connection, $sql);
$products = mysqli_fetch_all($res, MYSQLI_ASSOC);
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage - List of articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/assets/css/styles_blog.css" rel="stylesheet" />
</head>

<body>

<?php include_once __DIR__.'/../partials/main_menu.php'?>
<?php include_once __DIR__.'/../partials/header.php'?>

<h1>Корзина товаров</h1>
<ul>
    <?php foreach ($products as $product): ?>
    <?php
        $total +=  $cart[$product['id']] *$product['price'];
        $sum = $cart[$product['id']] *$product['price'];
        ?>
    <li>
        <span>Товар:<?=$product['name']?></span>
        <span>Количество:<?=$cart[$product['id']]?></span>
        <span>Цена за ед.:<?=$product['price']?></span>
        <span>Ит.:<?=$sum?> BYN</span>
    </li>
    <?php endforeach;?>
</ul>
<p><?= $total?> BYN</p>
<?php include_once __DIR__.'/../partials/footer.php' ?>
</body>

</html>