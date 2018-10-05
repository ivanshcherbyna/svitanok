<?php
/*
 * Template Name: Педагогічний колектив
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$dir_phone = !empty($mytheme['director-phone'])?$mytheme['director-phone']: 'відсутній';
$persons_arr = !empty($mytheme['page-team-persons'])?$mytheme['page-team-persons']:array(''=>'');?>

<section class="educators wrapper">
    <div class="educators-main">
        <div class="educators-content">
            <div class="educators-main-img">
                <img src="<?= $mytheme['director-photo']['url']?>" alt="#">
            </div>
            <div class="educators-info">
                <h4 class="educators-info-position"><?= $mytheme['director-post']?>:</h4>
                <div class="educators-info-name"><?= $mytheme['director-name']?></div>
                <div class="educators-info-text"><?= $mytheme['director-info']?></div>
                <div class="educators-info-text">
                    <span class="educators-info-tel"> Тел. <?= $dir_phone?> </span> (приймальня)</div>
            </div>
        </div>
    </div>
    <?php
    $rows = count($persons_arr)/2; // Number rows how has array (2 person on row)

     for ($i = 0; $i < $rows; $i++) { ?>
         <div class="educators-list">
         <?php $personChunk = array_slice($persons_arr, $i * 2, 2);// Get chunk images from array to row
         foreach ($personChunk as $item):   ?>

                 <div class="educators-content">
                     <div class="educators-main-img">
                         <img src="<?=$item['person-photo']['url']?>" alt="#">
                     </div>
                     <div class="educators-info">
                         <h4 class="educators-info-position"><?=$item['person-post'] ?></h4>
                         <div class="educators-info-name"><?=$item['person-name'] ?></div>
                         <div class="educators-info-text"><?=$item['preson-info'] ?></div>
                         <div class="educators-info-tel">
                             Тел. <?=$item['preson-phone'] ?>
                         </div>
                     </div>
                 </div>

         <?php endforeach; ?>
          </div>
     <?php }
     ?>
</section>
<section class="educators_about">
    <div class="educators_about-wr wrapper">
        <div class="educators_about-img">
            <img class="about-img-photo" src="<?= $mytheme['team-photo']['url']?>" alt="#">
        </div>
        <div class="about-content">
            <p class="content-info-text-par"><?= $mytheme['team-info']?></p>
        </div>
    </div>
</section>


<?php get_footer(); ?>
