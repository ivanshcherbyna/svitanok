<?php
/*
 * Template Name:Головна
 *
 */
?>
<?php get_header();
global $mytheme, $post;
$news_cat_id = get_cat_ID( 'Новини' );
$category_link = get_category_link( $news_cat_id );
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
        <a href="<?= $mytheme['link-library']?>" class="banner-menu-list-item" style='background: linear-gradient(to bottom, #f0d42b, #ddaa13)'>
            <div class="banner-menu-list-item-cont_img">
                <img class="banner-menu-list-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/victories.png" alt="">
            </div>
            <div class="banner-menu-list-item-text">Наша бібліотека
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

<section class="info-block ">
		<div class="info-block-list wrapper">
			<a class="info-block-list-item" href="#">
				<div class="info-block-list-item-img" style="background: url(<?= $mytheme['info-front-image-1']['url'] ?>)"></div>
				<span class="info-block-list-item-text">Початкова школа (1-4 кл)</span>
			</a>
			<a class="info-block-list-item" href="#">
				<div class="info-block-list-item-img" style="background: url(<?= $mytheme['info-front-image-2']['url'] ?>)"></div>
				<span class="info-block-list-item-text">Середня школа (5-9 кл)</span>
			</a>
			<a class="info-block-list-item" href="#">
				<div class="info-block-list-item-img" style="background: url(<?= $mytheme['info-front-image-3']['url'] ?>)"></div>
				<span class="info-block-list-item-text">Гуртки</span>
			</a>
			<a class="info-block-list-item" href="http://www.int-svitanok.zp.ua/orhany-samovryaduvannya/">
				<div class="info-block-list-item-img" style="background: url(<?= $mytheme['info-front-image-4']['url'] ?>)"></div>
				<span class="info-block-list-item-text">Самоврядування</span>
			</a>
		</div>
	</section>

<?= do_action('show_last_posts','novyny',5); ?>
<a class="content-info-text-link content-info-text-news" href="<?= $category_link ?>">Всі новини &rarr; </a>
<section class="reviews">
		<h2 class="">Про нас пишуть</h2>
		<hr class='line news-hr'>
		<div class="reviews-list wrapper">
			<div class="reviews-list-item">
				<div class="reviews-list-item-img" style="background: url(<?= $mytheme['front-image']['url'] ?>)"></div>
				<div class="reviews-content-item-content">
					<h3 class="reviews-content-item-content-header">Сергій Корнієнко, <span class='reviews-content-item-content-header-about'>батько учня</span></h3>
					<p class="reviews-content-item-content-text">Проснувшись однажды утром после беспокойного сна, Грегор Замза обнаружил, что он у себя в постели превратился в
						страшное насекомое. Лежа на панцирнотвердой спине, он видел, стоило ему приподнять голову, свой коричневый,
						выпуклый, разделенный дугообразными чешуйками живот, на верхушке которого еле держалось готовое вот-вот
						окончательно сползти одеяло. </p>
					<p class="reviews-content-item-content-text">Его многочисленные, убого тонкие по сравнению с остальным телом ножки беспомощно копошились у него перед
						глазами. «Что со мной случилось?» – подумал он. Это не было сном. Его комната, настоящая, разве что слишком
						маленькая, но обычная комната, мирно покоилась в своих четырех хорошо знакомых стенах. </p>
				</div>
			</div>
            <div class="reviews-list-item">
                <div class="reviews-list-item-img" style="background: url(<?= $mytheme['front-image-2']['url'] ?>); background-size: 100%;"></div>
                <div class="reviews-content-item-content">
                    <h3 class="reviews-content-item-content-header">Анюта Григорьева, <span class='reviews-content-item-content-header-about'>випускниця </span></h3>
                    <p class="reviews-content-item-content-text">Просматриваю иногда фото нашего теплого и милого «Свитанка». Конечно
                        на то время когда я в нем училась, это был обычный интернат, но в душе есть
                        гордость, что я здесь училась. Вы не только сохранили стены и теплые
                        воспоминания о школе, Вы преобразили и сделали многих деток
                        счастливыми. Теперь это не просто интернат, это уютный большой дом. Я
                        горжусь, что в нем провела немного времени! Многие думают, что слово
                        интернат это какой-то приговор в виде тюрьмы… Очень грустно слышать,
                        когда люди, высказывают свое мнение, не разобравшись в ситуации. От себя
                        лично хочу дать пояснения, что такое интернат. Это семья, это теплый
                        уютный дом, где дарят тепло, поддержку, любовь, где учат любить. Это
                        доброе слово и крепкая рука помощи каждого человека работающего в
                        интернатах. Это большой труд педагогов и воспитателей, которые учат как
                        жить во взрослом мире. Я училась в интернате и благодарна каждому, кто
                        научил меня чему-то. Сейчас я замужем и мама двоих деток. И знаю, что
                        такое самое ценное и важное в жизни это любить деток. Спасибо вам
                        замечательные учителя и воспитатели «Свитанка», что научили ценить,
                        любить и быть счастливыми!!!</p>
                </div>
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
