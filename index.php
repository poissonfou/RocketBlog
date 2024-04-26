<?php
    include_once("templates/header.php")
?>
 <main>
    <section class="purple-back">
    <div class="main-article">
    <?php foreach($posts as $post):?>
        <?php if($post["id"] == 1):?>
            <div>
            <h1 class="main-title"><?= $post["title"]?></h1>
            <p><?= $post["abstract"]?></p>
            </div>
        <?php endif;?>
    <?php endforeach;?>
    <div class="see-more">
        <span>Veja mais</span>
        <img src="<?= $BASE_URL?>images/arrow-right.svg" alt="arrow icon">
    </div>
    </div>
    <img class="main-img" src="<?= $BASE_URL?>images/featured-image.png" alt="main article image">    
    </section>
    <div class="green-line"></div>

    <section class="middle-section">
          <div class="middle-main-section">
            <img src="<?= $BASE_URL?>images/post-1.png" alt="">
            <?php foreach($posts as $post):?>
                <?php if($post["id"]  == 4):?>
                    <p class="main-date">Janeiro 04, 2022</p>
                    <h2><?= $post["title"]?></h2>
                    <p><?= $post["abstract"]?></p>
                <?php endif;?>
            <?php endforeach;?>
          </div>
          <div class="middle-side-posts">
            <?php foreach($posts as $post):?>
                <?php if($post["id"] > 1 && $post["id"] < 4):?>
                    <div class="middle-side-post">
                    <p class="side-date">Janeiro 04, 2022</p>
                    <h2><?= $post["title"]?></h2>
                    <p><?= $post["abstract"]?></p>
                    </div>
                    <?php if($post["id"] == 2):?>
                        <div class="gray-stripe"></div>
                    <?php endif?>
                <?php endif?>
            <?php endforeach;?>
           </div>
    </section>
    <section class="bottom-posts">
            <?php foreach($posts as $post):?>
                <?php if($post["id"] > 4 && $post["id"] < 8):?>
                <div class="bottom-post">
                    <img src="<?= $BASE_URL?>images/post-<?= $post["id"]?>.png" alt="post image">
                    <p class="bottom-date">Janeiro 04, 2022</p>
                    <h2><?= $post["title"]?></h2>
                    <p><?= $post["abstract"]?></p>
                </div>
                <?php endif;?>
            <?php endforeach; ?>
    </section>
 </main>
 <script>
    
 </script>
<?php
    include_once("templates/footer.php")
?>