<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<footer class="footer">
  <div class="footer-section">
    <div class="container">
      <div class="footer-form">
        <h2>Contato</h2>

        <? echo do_shortcode('[contact-form-7 id="23" title="Form footer"]'); ?>
      </div>

      <div class="footer-dados">
        <h3>Se preferir, entre em contato</br>
          através destes canais</h3>

        <div class="footer-dados-wrapper">
          <a href="tel:3134869292" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#tel"></use>
            </svg>

            <span>(31) 3486-9292</span>
          </a>

          <a href="mailto:emtel@emteltrans.com.br" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#mail"></use>
            </svg>

            <span>emtel@emteltrans.com.br</span>
          </a>

          <a href="mailto:contato@emtel.com" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#pin"></use>
            </svg>

            <span>Avenida Pastor Anselmo Silvestre, 1111</br>
              Fernão Dias</br>
              Belo Horizonte - MG</span>
          </a>
        </div>

        <div class="footer-midias">
          <span>Siga-nos nas redes sociais</span>
          <a href="https://facebook.com/" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#facebook"></use>
            </svg>
          </a>

          <a href="https://linkedin.com/" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#linkedin"></use>
            </svg>
          </a>

          <a href="https://instagram/" target="_blank">
            <svg width="32" height="32" viewBox="0 0 32 32">
              <use xlink:href="#instagram"></use>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-section">
    <div class="container">
      <img src="<?=get_template_directory_URI()?>/img/src/logo.png" alt="Logotipo Emtel" />

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuFooter', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>

      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'MenuServiços', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
    </div>
  </div>

  <div class="rodape">
    <div class="container">
      <p>
        Todos os direitos reservados para Emtel Logística. Desenvolviodo por <a href="https://agenciasalt.com/"
          target="_blank">Salt</a>.</p>
    </div>
  </div>
</footer>

<div style="display: none;">
  <?php include 'svg.php'; ?>
</div>

<script src="<?=get_template_directory_URI()?>/app/app.js"></script>

<?php wp_footer(); ?>

</body>

</html>