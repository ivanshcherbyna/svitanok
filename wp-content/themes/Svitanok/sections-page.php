<?php
/*
 *  Template Name: Секции(Гуртки)
 *  Template Post Type: page
 */

?>
<?php get_header(); ?>


<?php
global $post, $wp_query;
$child_pages = get_pages( array( 'numberposts' => -1, 'parent'=>$post->ID ));
//var_dump($child_pages);
//$post_categories = get_the_category($post->ID); //use if template use for some post
//var_dump($child_pages);
//$blog_categories_ids = $wp_query->queried_object->cat_ID;
//$number_posts=(isset($_GET['number_pagination']))? $_GET['number_pagination']:null;
//$selected_category=$wp_query->queried_object->cat_ID;
//$category = get_category($selected_category);
//$count_of_category_posts = $category->category_count;
//$search_filter=(isset($_GET['search-filter']))? $_GET['search-filter']:null;
//$iterator = 0;

?>

<section class="blog ">
    <div class="blog-content">
        <?php
//        if($count_of_category_posts == null) _e('Вибачте, немає публікацій для відображення.',THEME_OPT);
//        else do_action('show_blog_posts', $selected_category = null, $number_posts = -1, $blog_categories_ids = null, $search_filter);
        echo do_action('show_posts-pages', $child_pages);
        ?>
    </div>
</section>


<div class="footer-line-page"></div>

<?php get_footer(); ?>
