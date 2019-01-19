<?php
/*
 * Template Name: Публічна інформація
 * Template Post Type: page
 */
?>
<?php get_header(); ?>
<?php global $mytheme, $post;
$zakupki_list = !empty(redux_post_meta(THEME_OPT, $post,'public-slides-list')) ? redux_post_meta(THEME_OPT, $post,'public-slides-list') : '';
$public_info_list = !empty(redux_post_meta(THEME_OPT, $post,'public-list')) ? redux_post_meta(THEME_OPT, $post,'public-list') : '';
$sorted_array = array_reverse($public_info_list);
?>
<section class="public_info">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <!-- article -->
        <article>
            <?php the_content(); ?>
        </article>
        <!-- /article -->
    <?php endwhile; ?>

    <?php endif; ?>
    <div>
       <?php foreach ($zakupki_list as $item) : ?>
        <a target="_blank" class="public_info-img-link" href="<?= $item['url'] ?>"><img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" title="<?= $item['title'] ?>"></a>
       <?php endforeach; ?>
    </div>
        <?php foreach ($sorted_array as $item): ?>

             <?php if($item['head-content']=='head-year'):
            ?>  </ul>
                <div class="public_info-content-header"><?= $item['public-text'] ?></div><ul class="public_info-content-list">
            <?php  elseif ($item['head-content']=='head'): ?>
                </ul>
                <div class="public_info-content-subheader"><?= $item['public-text'] ?></div><ul  class="public_info-content-list">
            <?php  elseif ($item['head-content']=='disabled'): ?>

                 <li class="public_info-content-list-item"><a target="_blank" href="<?= $item['public-url'] ?>" class="public_info-link"><?= $item['public-text'] ?></a></li>
              <?php endif; endforeach; ?>
</section>
<section class="public-content">
    <p class = 'public-content-header wrapper'><b>ЗАТВЕРДЖЕНО</b><br>
        Наказ Міністерства економіки України<br>
        26.07.2010 N 922<br>
        (у редакції наказу Міністерства економічного розвитку і торгівлі України<br>
        від 27.12.2011 N 428)<br>
        РІЧНИЙ ПЛАН ЗАКУПІВЕЛЬ зі змінами<br>
        на 2013 рік<br>
        Комунальний заклад «Запорізький навчально-реабілітаційний центр-інтернат» Запорізької обласної ради, ідентифікаційний код за ЄДРПОУ 20520836<br>
        (найменування замовника, ідентифікаційний код за ЄДРПОУ)</p>
    <table class = "public-table wrapper">
        <thead class = 'public-thead'>
        <tr>
            <th width="14.44%" class = 'public-thead-th'>Предмет закупівлі</th>
            <th width="9.23%" class = 'public-thead-th'>Код КЕКВ (для бюджетних коштів)</th>
            <th width="12.64%" class = 'public-thead-th'>Джерело фінансування</th>
            <th width="8.37%" class = 'public-thead-th'>Очікувана вартість предмета закупівлі</th>
            <th width="14.44%" class = 'public-thead-th'>Процедура закупівлі</th>
            <th width="10.94%" class = 'public-thead-th'>Орієнтовний початок проведення процедури закупівлі</th>
            <th width="14.44%" class = 'public-thead-th'>Підрозділ(и) (особа(и)), яких планується залучити до підготовки документації конкурсних торгів (запиту цінових пропозицій, кваліфікаційної документації)</th>
            <th width="14.44%" class = 'public-thead-th'>Примітка</th>
        </tr>
        </thead>
        <tbody align="center">
        <tr >
            <td class = 'public-th' >1</td>
            <td class = 'public-th' >2</td>
            <td class = 'public-th' >3</td>
            <td class = 'public-th' >4</td>
            <td class = 'public-th' >5</td>
            <td class = 'public-th' >6</td>
            <td class = 'public-th' >7</td>
            <td class = 'public-th' >8</td>
        </tr>
        <tr>
            <td class = 'public-th'>Послуги з водопостачання водяної пари і гарячої води (включно з холодоагентами); ДК 016-97 (40.30.1)</td>
            <td class = 'public-th'>2271</td>
            <td class = 'public-th'>Кошти місцевого бюджету</td>
            <td class = 'public-th'>-</td>
            <td class = 'public-th'>Закупівля в одного учасника</td>
            <td class = 'public-th'>Січень 2013 року</td>
            <td class = 'public-th'>-</td>
            <td class = 'public-th'>Згідно частини другої ст.39 Закону України «Про здійснення державних закупівель»</td>
        </tr>
        <tr>
            <td class = 'public-th'>Послуги з постачання електроенергії; ДК016-97(40.10.3)</td>
            <td class = 'public-th'>2273</td>
            <td class = 'public-th'>Кошти місцевого бюджету</td>
            <td class = 'public-th'>-</td>
            <td class = 'public-th'>Закупівля в одного учасника</td>
            <td class = 'public-th'>Січень 2013 року</td>
            <td class = 'public-th'>-</td>
            <td class = 'public-th'>Торги відмінені згідно частини п’ятої ст.39 Закону України «Про здійснення державних закупівель»</td>
        </tr>
        <tr>
            <td class = 'public-th'>Електрична енергія; ДК016-97(40.10.1)</td>
            <td class = 'public-th'>2273</td>
            <td class = 'public-th'>Кошти місцевого бюджету</td>
            <td class = 'public-th'>-</td>
            <td class = 'public-th'>Закупівля в одного учасника</td>
            <td class = 'public-th'>Січень 2013 року</td>
            <td class = 'public-th'>-</td>
            <td class = 'public-th'>Згідно частини другої ст.39 Закону України «Про здійснення державних закупівель»</td>
        </tr>
        </tbody>
    </table>
    <div class = 'wrapper'>
        <p  class = 'table-caption'><b>Затверджений рішенням комітету з конкурсних торгів від 15.01.2013 року N 4.</b></p>
        <p  class = 'table-caption'>Голова комітету з конкурсних торгів Шарікова К.П.
            <span class='caption-line'></span><span class = 'table-caption-sign'>(прізвище, ініціали)(підпис)М. П.</span></p>
        <p  class = 'table-caption'>Секретар комітету з конкурсних торгів Булачова Л.В.
            <span class='caption-line'></span><span class = 'table-caption-sign'>(прізвище, ініціали)(підпис)</span></p>
    </div>
</section>
<div class="footer-line-page"></div>

<?php get_footer(); ?>
