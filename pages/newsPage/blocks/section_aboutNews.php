<section class="aboutNewsSection">
    <div class="aboutNewsBlock">
        <div class="linkBlock">
            <a class="aHoverUnderline" href="index.php?page=home">Главная</a><p>/</p><span><?php echo $newsItem["title"]; ?></span>
        </div>
        <div class="anBlockParent">
            <div class="anBlockChild">
                <div class="dateBlock" id="dateBlock"><p></p></div>
                <h2><?php echo $newsItem["title"]; ?></h2>
                <div class="anBlockChildText"><?php echo $newsItem["content"]; ?></div>
                <button class="moreInfoButton" onclick="window.location.href='index.php?page=home'">назад к новостям</button>
            </div>
            <div class="anBlockChild">
                <img src="<?= HOST ?>assets/images/news/<?php echo $newsItem["image"]; ?>" alt="">
            </div>
        </div>
    </div>
</section>
<script>
    const d = <?php echo json_encode($newsItem, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
    console.log(d)
    const date = new Date(d.date);
    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();
    const formattedDate = `${day}.${month}.${year}`;
    const dateBlock = document.getElementById('dateBlock');
    dateBlock.innerHTML=`<p>${formattedDate}</p> `;
</script>