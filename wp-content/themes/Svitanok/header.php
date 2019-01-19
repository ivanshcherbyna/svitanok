<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<?php wp_head(); ?>
        <?php global $mytheme, $post;   ?>
	</head>
	<body <?php body_class(); ?>>

            <header class='wrapper'>
                <div class="header-content">
                    <div class="header-img">
                        <a href="/" ><img class="header-img-logo" src="<?= $mytheme['logo-header-img']['url'];?>" alt="logo site"></a>
                    </div>
                    <div class="header-info">
                        <ul class="header-info-location">
                            <li class="header-info-location-item">
                                <img class="header-info-location-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/place.svg" alt="">
                                <span><?= $mytheme['text-header-adress']?></span>
                            </li>
                            <li class="header-info-location-item">
                                <img class="header-info-location-item-img" src="../../../wp-content/themes/Svitanok/inc/urich/img/call.svg" alt="">
                                <span><?= $mytheme['text-header-phone-num']?></span>
                            </li>
                        </ul>
                        <?= svitanok_nav() ?>

                    </div>
                    <div id="burger">
                        <span class=burger-menu></span>
                    </div>
                </div>
            </header>
            <?php if(!is_front_page()): ?>
            <section class="page-subheader">

                <?php // show any class when post from blog cat
                if (!empty($post) && !in_array(5,$post->post_category)):?>
<!--                    <div class="path wrapper">-->
<!--                   --><?//= breadcrumbs(' < ')?>
<!--                    </div>-->
                <h1 class='page-header wrapper'><?php echo get_the_title(); ?></h1>
                <?php else: ?>
<!--                    <div class="path wrapper">-->
<!--                      --><?//= breadcrumbs(' < ')?>
<!--                    </div>-->
                <h1 class='page-header-blog wrapper'><?php echo get_the_title(); ?></h1>
                <?php endif; ?>
            </section>
            <?php endif; ?>
	<!-- wrapper -->



