<?php
/*
 * Template Name: Досягнення
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$rewards_arr=!empty($mytheme['page-rewards-list'])? $mytheme['page-rewards-list']:array(''=>'');
?>
<section class="rewards ">
    <p class='rewards-info'>

        <?php if(!empty($post->post_content)) echo $post->post_content; ?>
    </p>
    <div class="rewards-list">
        <?php $i=0;
            foreach ($rewards_arr as $rewards):
                $i++;?>
             <div class="rewards-list-item" data-attribute="<?= $i ?>">
                     <div class="rewards-item-img">
                         <img class="video-item-img-content" src="<?=$rewards['rewards-photo']['url']?>" alt="#">
                     </div>

             </div>
         <?php endforeach; ?>
    </div>
</section>


<?php get_footer(); ?>
