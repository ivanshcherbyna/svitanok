<?php
/*
 * Template Name: Батькам
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$parents_list = redux_post_meta(THEME_OPT,$post,'for-parents-list');
?>
<section class="parents">
    <div class="parents-ped">
        <img class="parents-ped-img" src="<?= $mytheme['parents-ped-img']['url']?>" alt="#">
    </div>
    <?php if (!empty($parents_list)): ?>
    <div class="parents-content">
        <?php $i=0; foreach ($parents_list as $item):
              $i++;
                  if($i==1): ?>
        <div class="parents-content-item active-parents-item">
            <?php else: ?>
                <div class="parents-content-item ">
                    <?php endif; ?>
            <div class="parents-content-item-link">
                <span class="parents-content-item-link-text"><?= $item['head-text']?></span>
                <span class='parents-content-item-link-close'>Згорнути</span><span class='parents-content-item-link-open'>Показати</span>
            </div>
        </div>
        <div class="parents-content-item-info">
            <div class="parents-content-item-info-line"></div>
            <div class="parents-content-item-info-list"> <?= $item['content']?></div>
        </div>
        <?php endforeach; endif;?>
    </div>
    <p class="parents-content-item-info-list-par">Успіху Вам!</p>
</section>

<?php get_footer(); ?>
