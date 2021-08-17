<?php
/**
 * @var $connection array
 */
//debug();
$id = $_GET['id'];
$sql = "SELECT * FROM pages where id = ".$id;
$res = mysqli_query($connection, $sql);
$page = mysqli_fetch_array($res, MYSQLI_ASSOC);


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

<h1><?=$page['name']?></h1>
<p><?=$page['content']?></p>
<?php include_once __DIR__.'/../partials/footer.php' ?>
</body>

</html>