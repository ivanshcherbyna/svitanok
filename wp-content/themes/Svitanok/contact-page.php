<?php
/*
 * Template Name: Контакти
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme; ?>

<section class="contact wrapper">
    <div class="contact-info">

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                           <?php the_content(); ?>

        <?php endwhile; ?>

        <?php else: ?>

            <!-- article -->
            <article>

                <h2><?php _e( 'Вибачте, нічого не має для відображення.', THEME_OPT ); ?></h2>

            </article>
            <!-- /article -->

        <?php endif; ?>


    </div>
    <div class="contact-content">
        <div class="contact-content-map"><img class="contact-content-map-img" src="<?= $mytheme['contact-map']['url']?>" alt="#"></div>
        <div class="contact-content-photos">
            <img src="<?= $mytheme['contact-img1']['url']?>" alt="#">
            <img src="<?= $mytheme['contact-img2']['url']?>" alt="#">
        </div>
    </div>
</section>

<?php get_footer(); ?>
