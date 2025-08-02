<?php
    $pageTitle = 'Галактический вестник';
    require ROOT .  "pages/head.php";?>
<?php require ROOT .  "pages/header.php";?>

<?php
    $last_news = json_decode($_COOKIE['lastNewsItem'], true);
    require 'blocks/section_banner.php';
?>
<?php 
    require 'blocks/section_newsBlock.php';
?>

<?php require ROOT .  "pages/footer.php";?>