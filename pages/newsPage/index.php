<?php
    $newsItemId = json_decode($_COOKIE['newsItemId'], true);
    $pageTitle = 'Галактический вестник';
    foreach ($all_news as $news) {
        if ($news['id'] == $newsItemId) {
            $newsItem = $news;
            break;
        }
    }
    require ROOT .  "pages/head.php";?>
<?php require ROOT .  "pages/header.php";?>

<?php
    require 'blocks/section_aboutNews.php';
?>

<?php require ROOT .  "pages/footer.php";?>