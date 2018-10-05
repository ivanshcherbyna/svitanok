<?php
/*
 * Template Name: Відеотека
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$videos_arr=!empty($mytheme['multi-text-youtube'])? $mytheme['multi-text-youtube']:array(''=>'');
?>
<section class="video ">


        <?php $i=0;
        foreach ($videos_arr as $video):
            $i++;?>
            <div class="video-item" data-attribute="<?= $i ?>">
                <div class="video-item-img">
                    <iframe class="video-item-img-content" src="<?=$video?>" height="315" width="560" allowfullscreen="" frameborder="0" alt="#"></iframe>
                </div>

            </div>
        <?php endforeach; ?>

</section>


<?php get_footer(); ?>
