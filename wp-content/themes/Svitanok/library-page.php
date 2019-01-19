<?php
/*
 * Template Name: Бібліотека
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$library_list = !empty(redux_post_meta(THEME_OPT, $post,'library-list')) ? redux_post_meta(THEME_OPT, $post,'library-list') : '';
?>

<section class="library ">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <!-- article -->
        <article>
            <?php the_content(); ?>
        </article>
        <!-- /article -->
    <?php endwhile; ?>

    <?php else: ?>
        <!-- article -->
        <article>

            <h2><?php _e( 'Вибачте, немає публікацій для відображення.', THEME_OPT ); ?></h2>

        </article>
        <!-- /article -->
    <?php endif; ?>

    <div class="library-list">
        <?php foreach ($library_list as $item): ?>
        <div class="library-list-item"><a target="_blank" href="<?= $item['library-url'] ?>" class="library-list-item-link"><span class="library-list-item-link-text"><?= $item['library-text'] ?></span><span>&rarr; </span></a></div>
        <?php endforeach; ?>
    </div>
</section>

<?php get_footer(); ?>
