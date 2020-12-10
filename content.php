<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<? if (is_single()) { ?>

<section class="blog-content">
  <div class="container">
    <h1><?=the_title()?></h1>
    <img class="blog-content-img" src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />

    <?=the_content()?>
  </div>
</section>

<? } else { ?>

<div class="blog-item">
  <a href="<?=the_permalink()?>">
    <img src="<?=catch_that_image(1)?>" alt="<?=the_title()?>" />
  </a>

  <div class="blog-txt">
    <h5>
      <?php
			$categories = get_the_terms( $post->ID, 'category' );
			
			foreach( $categories as $category ) {
        echo $category->name;
			}
			?>
    </h5>
    <a href="<?=the_permalink()?>">
      <h4><?=the_title()?></h4>
    </a>
    <p><?=custom_excerpt2(100)?></p>

    <a href="<?=the_permalink()?>" class="link">Ler mais</a>
  </div>
</div>

<? } ?>