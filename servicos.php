<?php
/**
 * Template Name: servicos
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
$GLOBALS["link2"] = get_the_permalink(wp_get_post_parent_id(get_the_ID()));
$GLOBALS["nome2"] = get_the_title(wp_get_post_parent_id(get_the_ID()));
get_header(); ?>

<?php
$pai = wp_get_post_parent_id(get_the_ID());

if(has_children())
{
$mypages2 = get_pages( array( 'child_of' => get_the_ID(), 'sort_order' => 'desc' ) );
foreach( $mypages2 as $page2 ) { $linkpage = get_page_link( $page2->ID ); } ?>

<script>
window.open('<?=$linkpage?>', '_parent');
</script>
<? } else { 
?>

<section class="servicos">
  <div class="container">
    <div class="servicos-txt">
      <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />

      <h2><?=the_title()?></h2>
      <p><?=the_content()?></p>
    </div>

    <?php if( have_rows('imagens_servico') ): ?>
    <?php while( have_rows('imagens_servico') ): the_row(); 

    // Get sub field values.
    $imagem_1 = get_sub_field('imagem_1');
    $imagem_2 = get_sub_field('imagem_2');
    $imagem_3 = get_sub_field('imagem_3');
    $imagem_4 = get_sub_field('imagem_4');
    ?>

    <?php if ($imagem_2 == "") { ?>
    <div class="servicos-img" style="grid-template-columns: 1fr">
      <img src="<?=$imagem_1?>" alt="<?=the_title()?>" />
    </div>
    <?php } else if ($imagem_3 == "") { ?>
    <div class="servicos-img">
      <img src="<?=$imagem_1?>" alt="<?=the_title()?>" />
      <img src="<?=$imagem_2?>" alt="<?=the_title()?>" />
    </div>
    <?php } else if ($imagem_4 != "") { ?>
    <div class="servicos-img">
      <img src="<?=$imagem_1?>" alt="<?=the_title()?>" />
      <img src="<?=$imagem_2?>" alt="<?=the_title()?>" />
      <img src="<?=$imagem_3?>" alt="<?=the_title()?>" />
      <img src="<?=$imagem_4?>" alt="<?=the_title()?>" />
    </div>
    <?php } ?>

    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<? } ?>
<?php get_footer();