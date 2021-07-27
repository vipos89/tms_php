<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Homepage - List of articles</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/assets/css/styles_product.css" rel="stylesheet"/>
</head>

<body>
<?php include_once __DIR__ . '/../partials/main_menu.php' ?>
<?php include_once __DIR__ . '/../partials/header.php' ?>

<section class="list-product">
    <img class="list-img-product" src="./img/steelseries Arctis-9.png" alt="css">

    <div class="list-product-our">
        <h2 class="list-product-title">ARCTIS 9 WIRELESS</h2>
        <p class="list-product-subtitle">Wireless Gaming Headset for PC</p>
        <p class="list-product-description">
            &#8226;Lossless 2.4 GHz wireless for lag-free high fidelity gaming audio on PC and PlayStation<br>
            &#8226;Simultaneous Bluetooth for calls, music, and VoIP chat while gaming<br>
            &#8226;Discord-certified microphone provides noise cancellation and natural sounding clarity<br>
            &#8226;Signature Arctis sound with ChatMix control to hear every detail for an audio advantage<br>
            &#8226;20+ hour battery life for nonstop wireless usage
        </p>
        <p class="list-product-info-price">Price: 580 BYN</p>
        <button class="list-product-button">Order</button>
    </div>
</section>

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