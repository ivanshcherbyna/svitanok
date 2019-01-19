<?php
/*
 * Template Name:Головна
 *
 */
?>
<?php get_header();
global $mytheme, $post;
?>



<section class="banner">
       <?= do_shortcode($mytheme['slick-slider-meta']);?>


    <div class="banner-menu-list">
        <a href="<?= $mytheme['link-department']?>" class="banner-menu-list-item" style='background: linear-gradient(to bottom, #68e78e, #37ca56);'>
            <div class="banner-menu-list-item-cont_img">
                <img class="banner-menu-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/selfgovern.png" alt="">
            </div>
            <div class="banner-menu-list-item-text">Органи самовря<wbr>дування</div>
        </a>
        <a href="<?= $mytheme['link-conditions']?>" class="banner-menu-list-item" style='background: linear-gradient(to bottom, #2ee3e3, #15c3c3);'>
            <div class="banner-menu-list-item-cont_img">
                <img class="banner-menu-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/join.png" alt="">
            </div>
            <div class="banner-menu-list-item-text">Умови вступу до школи</div>
        </a>
        <a href="<?= $mytheme['link-rewards']?>" class="banner-menu-list-item" style='background: linear-gradient(to bottom, #f0d42b, #ddaa13)'>
            <div class="banner-menu-list-item-cont_img">
                <img class="banner-menu-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/victories.png" alt="">
            </div>
            <div class="banner-menu-list-item-text">Наші досягнення
            </div>
        </a>
        <a href="<?= $mytheme['link-video']?>" class="banner-menu-list-item" style='background: linear-gradient(to bottom, #9692f3, #5d59e3)'>
            <div class="banner-menu-list-item-cont_img">
                <img class="banner-menu-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/video.png" alt="">
            </div>
            <div class="banner-menu-list-item-text">Відеотека школи
            </div>
        </a>
        <a href="<?= $mytheme['link-for-parent']?>" class="banner-menu-list-item" style='background: linear-gradient(to bottom, #cc44d6, #9d20ad)'>
            <div class="banner-menu-list-item-cont_img">
                <img class="banner-menu-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/parents.png" alt="">
            </div>
            <div class="banner-menu-list-item-text">Рекомендації батькам</div>
        </a>
    </div>

</section>
<?= do_action('show_last_posts','novyny',5); ?>

<section class="about ">
    <div class="about-bg wrapper">
        <div class="about-content">
            <h2 class="about-content-header"><?= $mytheme['front-secont-string-head']?></h2>
            <hr class='line about-hr'>
            <p class="content-info-text-par"><?= $mytheme['front-content']?></p>
            <a class="content-info-text-link" href="<?= $mytheme['link-front']?>">Детально про заклад &rarr; </a>
        </div>
        <div class="about-img">
            <img class="about-img-photo" src="<?= $mytheme['front-image']['url'] ?>" alt="#">
        </div>
    </div>
</section>
<section class='info'>
    <h2>Хто може стати нашим учнєм?</h2>
    <hr class='line info-hr'>
    <div class="info-content wrapper">
        <div class="info-content-item">
            <div class="info-content-item-article">
                <div class="info-content-item-article-header"><?= $mytheme['left-head-text'];?>
                </div>
                <div class="info-content-item-article-body">
                    <p class="content-info-text-par"><?= $mytheme['left-content-text'];?> </p>
                </div>
            </div>
        </div>
        <div class="info-content-item-button media-button">
            <a href="<?= $mytheme['left-link'] ?>" class="info-content-item-button-link">Подати заявку</a>
        </div>
    </div>
    <div class="info-buttons wrapper">
        <div class="info-content-item-button">
            <a href="<?= $mytheme['left-link'] ?>" class="info-content-item-button-link">Подати заявку</a>
        </div>
    </div>
</section>
<section class="map" style="background: url('../../../wp-content/themes/Svitanok/inc/urich/img/map.png') no-repeat; background-size: cover;">
    <div class="map-infowindow" >
        <!-- <img src="img/combined-shape.png" alt="#"> -->
        <div class="map-infowindow-list">
            <div class="map-infowindow-list-item">
                <div class="map-infowindow-list-item-picture"><img class="map-infowindow-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/location.svg" alt="#"></div>
                <div class="map-infowindow-list-item-text"><?= $mytheme['bottom-address'] ?></div>
            </div>
            <div class="map-infowindow-list-item">
                <div class="map-infowindow-list-item-picture"><img class="map-infowindow-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/phone.svg" alt="#"></div>
                <div class="map-infowindow-list-item-text"><?= $mytheme['bottom-phone'] ?></div>

            </div>
        </div>
    </div>
</section>


<?php get_footer();

?>
