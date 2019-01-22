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
    <?php if ($mytheme['director-name']):?>
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
    <?php endif; ?>
    <?php
    if (!empty($persons_arr[0])):
    $rows = count($persons_arr)/2; // Number rows how has array (2 person on row)
	$iterator = 1;
     for ($i = 0; $i < $rows; $i++) { 
		 		$iterator++;
			 if(($iterator == 4) && !empty($mytheme['director-name']) ) echo '<h2 class="team-divider">Керівний склад закладу освіти </h2>';?>
         <div class="educators-list">
         <?php $personChunk = array_slice($persons_arr, $i * 2, 2);// Get chunk images from array to row
         foreach ($personChunk as $item): if (!empty($item['person-name'])): ?>
                 <div class="educators-content">
                     <div class="educators-main-img">
                         <img src="<?=$item['person-photo']['url']?>" alt="#"  >
                     </div>
                     <div class="educators-info">
                         <h4 class="educators-info-position"><?=$item['person-post'] ?></h4>
                         <div class="educators-info-name"><?=$item['person-name'] ?></div>
                         <div class="educators-info-text"><?=$item['preson-info'] ?></div>
                         <div class="educators-info-tel">
                           <? if($item['preson-phone']):?>  Тел. <?=$item['preson-phone'] ?> <? endif;?>
                         </div>
                     </div>
                 </div>

         <?php endif; endforeach; ?>
          </div>

     <?php }
     endif;
     ?>
</section>
<?php if ($mytheme['team-photo']['url']):?>

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

<?php endif; ?>


<?php get_footer(); ?>
