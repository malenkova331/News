<?php
    $last_news = json_decode($_COOKIE['lastNewsItem'], true);
?>
<section class="banner">
    <div class="bannerBlock">
        <a href="<?= HOST ?>index.php?page=news-<?= $last_news["id"]; ?>" id="banner">
            <div class="bannerBlockParent" style="background-image: url(<?= HOST ?>assets/images/news/<?php echo $last_news["image"]; ?>) ;" >
                <div class="bannerBlockText">
                    <h1><?php echo $last_news["title"]; ?></h1>
                    <p><?php echo $last_news["announce"]; ?></p>
                </div>
            </div>
        </a>
        
    </div>
</section>

