<?php
/**
 * @var $connection array
 */
//debug();
$pagesPerPage = 10;
$curPage = $_GET['page'] ?? 1;
if($curPage< 1){
    $curPage =1;
}
$sql = "SELECT count(id) as count from pages WHERE active =1";
$res = mysqli_query($connection, $sql);
$countPages = (mysqli_fetch_assoc($res))['count'];
$pageCount = ceil($countPages/$pagesPerPage);

$offset = $pagesPerPage *($curPage -1);

$sql = "SELECT * FROM pages WHERE active =1 LIMIT {$offset} , 10";
$res = mysqli_query($connection, $sql);
$pages = mysqli_fetch_all($res, MYSQLI_ASSOC);
debug($_SESSION);

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
<?php foreach ($pages as $page):?>
    <section class="list">

        <a href="/page?id=<?=$page['id']?>">
            <h2 class="list-title"><?=$page['name']?></h2>
        </a>
        <p class="list-text"><?= substr($page['name'], 0, 50)?>
        </p>
        <a href="/page?id=<?=$page['id']?>">Read</a>
    </section>
<?php endforeach; ?>
<?php if($pageCount>1):?>
    <section class="pagination">
        <?php for ($i=1; $i<=$pageCount; $i++):?>
        <a class="pagination-num" href="/blog?page=<?=$i?>"><?=$i?></a>
        <?php endfor; ?>

    </section>
<?php endif; ?>
<?php include_once __DIR__.'/../partials/footer.php' ?>
</body>

</html>