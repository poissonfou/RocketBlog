<?php
    include_once("templates/header.php")
?>
 <main>
    <div class="purple-back">
    <div class="main-article">
    <?php foreach($posts as $post):?>
        <?php if($post["id"] == 1):?>
            <h1 class="main-title"><?= $post["title"]?></h1>
            <p><?= $post["abstract"]?></p>
        <?php endif;?>
    <?php endforeach;?>
    </div>
    <img src="<?= $BASE_URL?>images/featured-image.png" alt="">    
    </div>
    <div class="see-more">
        <p>Veja mais</p>
        <img src="<?= $BASE_URL?>images/arrow-right.svg" alt="arrow icon">
    </div>
    <div class="green-line"></div>

    <div class="bottom-imgs">
            <img src="<?= $BASE_URL?>images/post-2.png" alt="post image">
            <img src="<?= $BASE_URL?>images/post-3.png" alt="post image">
            <img src="<?= $BASE_URL?>images/post-4.png" alt="post image">
    </div>

    <section class="bottom-posts">
            <?php foreach($posts as $post):?>
                <?php if($post["id"] > 4 && $post["id"] < 8):?>
                <div class="bottom-post">
                    <h2><?= $post["title"]?></h2>
                    <p><?= $post["abstract"]?></p>
                </div>
                <?php endif;?>
            <?php endforeach; ?>
    </section>
 </main>
<?php
    include_once("templates/footer.php")
?>