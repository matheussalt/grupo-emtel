<?php
/**
 * Template Name: home
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<style>
.home-banner {
  background-image: url('<?=get_template_directory_URI()?>/img/src/banner.jpg')
}
</style>

<section class="home-banner">
  <div class="container">
    <div class="home-banner-txt">
      <h1>
        <strong>Emtel</strong>
        <strong>grupo</strong>
      </h1>

      <p>A Emtel é uma empresa que caminha na direção da inovação e do constante desenvolvimento, com competência e
        qualidade.</p>
      <a href="<?=site_url()?>/sobre" class="see-more">Saiba mais</a>
    </div>

    <div class="home-banner-midia">
      <a href="https://wa.me/" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#whatsapp"></use>
        </svg>
      </a>

      <a href="tel:+3134869292" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#tel"></use>
        </svg>
      </a>

      <a href="mailto:emtel@emteltrans.com.br" target="_blank">
        <svg width="32" height="32" viewBox="0 0 32 32">
          <use xlink:href="#mail"></use>
        </svg>
      </a>
    </div>
  </div>
</section>

<section class="home-success">
  <div class="container">
    <h2>Nosso sucesso, </br>que se torna seu</h2>

    <div class="home-success-wrapper">
      <div class="home-success-item">
        <img src="<?=get_template_directory_URI()?>/img/src/sucesso_1.jpg" alt="Locação de frotas" />

        <div class="home-success-txt">
          <h3>Locação de frotas <span>01</span></h3>
          <p>A Emtel é especializada em terceirização e gestão de frota. Nossos clientes encontram em uma só empresa o
            apoio que necessitam na terceirização e na gestão de sua frota.</p>

          <a href="<?=site_url()?>/" class="see-more">Saiba mais</a>
        </div>
      </div>

      <div class="home-success-item">
        <img src="<?=get_template_directory_URI()?>/img/src/sucesso_2.jpg" alt="Locação de frotas" />

        <div class="home-success-txt">
          <h3>Logística <span>02</span></h3>
          <p>A Emtel possui a capacidade logística de administração de Centros de Distribuição de seus clientes, como
            conservação predial, aprimoramento e otimização de espaços, implantação de metodologias novas de
            armazenagem, além de estudos gerais de melhoria contínua.</p>

          <a href="<?=site_url()?>/" class="see-more">Saiba mais</a>
        </div>
      </div>

      <div class="home-success-item">
        <img src="<?=get_template_directory_URI()?>/img/src/sucesso_3.jpg" alt="Locação de frotas" />

        <div class="home-success-txt">
          <h3>Transportes <span>03</span></h3>
          <p>A Emtel dispõe de uma ampla frota de veículos, motocicletas, caminhões e veículos personalizados, conforme
            a demanda do cliente. Possuímos frota com veículos rastreados e estamos investindo, cada vez mais, em
            soluções tecnológicas para a gestão da frota.</p>

          <a href="<?=site_url()?>/" class="see-more">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-group">
  <div class="container">
    <h5>GRUPO EMTEL</h5>
    <h2>Conheça o</br> nosso grupo</h2>
    <p>O crescimento da Emtel é contínuo e hoje somos referência nos ramos que atuamos. O compromisso com a ética,
      melhoria contínua e qualidade é constante.</p>

    <div class="home-group-wrapper">
      <div class="home-group-item">
        <div class="home-group-txt">
          <img src="<?=get_template_directory_URI()?>/img/src/seminovos_logo.png" alt="Emtel Seminovos">

          <p>A Emtel Seminovos surgiu com o objetivo de revolucionar o conceito de comercialização de veículos, visando
            a
            qualidade, a procedência e superação das expectativas de seus clientes!</p>

          <a href="<?=site_url()?>/" class="button">Saiba mais</a>
        </div>

        <div class="home-group-img">
          <img src="<?=get_template_directory_URI()?>/img/src/seminovos.jpg" alt="Emtel Seminovos">

          <span>emtel</br>
            seminovos</span>
        </div>
      </div>

      <div class="home-group-item apoteose">
        <div class="home-group-txt">
          <img src="<?=get_template_directory_URI()?>/img/src/apoteose_logo.png" alt="Apoteose Corretora de seguros">

          <p>Fundada em 2017, a Apoteose Corretora de Seguros foi criada para atender às necessidades do Grupo Emtel
            (Empresa de Transportes Apoteose Ltda), entidade com mais de 26 anos de história.</p>

          <a href="<?=site_url()?>/" class="button">Saiba mais</a>
        </div>

        <div class="home-group-img">
          <img src="<?=get_template_directory_URI()?>/img/src/apoteose.jpg" alt="Apoteose Corretora de seguros">

          <span>apote</br>
            ose</span>
        </div>
      </div>

      <div class="home-group-item">
        <div class="home-group-txt">
          <img src="<?=get_template_directory_URI()?>/img/src/triasa_logo.png" alt="Triasa Veículos">

          <h3>Triasa Veículos</h3>
          <p>Com objetivo de garantir excelência em todos os seus processos, a Triasa conta um amplo espaço e apresenta
            um
            pensamento totalmente inovador.</p>

          <a href="<?=site_url()?>/" class="button">Saiba mais</a>
        </div>

        <div class="home-group-img">
          <img src="<?=get_template_directory_URI()?>/img/src/triasa.jpg" alt="Triasa Veículos">

          <span>triasa</span>
        </div>
      </div>

      <div class="home-group-item">
        <div class="home-group-txt">
          <img src="<?=get_template_directory_URI()?>/img/src/asap_logo.png" alt="Asap">

          <h3>Asap - LS Tractor</h3>
          <p>Na Asap você encontra a linha completa de tratores LS Tractor e os melhores implementos agrícolas. Venha
            conhecer a marca de tratores que mais cresce no Brasil. Venha ser um LS Tractor.
          </p>

          <a href="<?=site_url()?>/" class="button">Saiba mais</a>
        </div>

        <div class="home-group-img">
          <img src="<?=get_template_directory_URI()?>/img/src/asap.jpg" alt="Asap">

          <span>asap</span>
        </div>
      </div>

      <div class="home-group-item app">
        <div class="home-group-txt">
          <img src="<?=get_template_directory_URI()?>/img/src/app_logo.png" alt="Carros para app">

          <p>A modalidade Emtel carros para APP é destinada ao aluguel de carros para motoristas que trabalham por meio
            de
            aplicativos.</p>

          <a href="<?=site_url()?>/" class="button">Saiba mais</a>
        </div>

        <div class="home-group-img">
          <img src="<?=get_template_directory_URI()?>/img/src/app.jpg" alt="Carros para app">

          <span>Emtel</br>
            App</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="home-blog">
  <div class="container">
    <h5>ARTIGOS E NOTÍCIAS</h5>
    <h2>Blog</h2>

    <div class="home-blog-wrapper">
      <? query_posts( array( 'post_type' => 'post', 'posts_per_page' => '3', 'cat' => '1' ) );  ?>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>

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

          <a href="<?=the_permalink()?>">Ler mais</a>
        </div>
      </div>

      <?php endwhile; ?>
      <?php endif; ?>

      <div class="blog-controls">
        <button class="blog-controls-left" type="button">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_left.png" alt="Voltar" />
        </button>

        <button class="blog-controls-right" type="button">
          <img src="<?=get_template_directory_URI()?>/img/src/arrow_right.png" alt="Avançar" />
        </button>
      </div>
    </div>
  </div>
</section>

<section class="home-about">
  <div class="container">
    <div class="home-about-txt">
      <h2>Quem somos</h2>
      <p>Com um jeito simples e cordial, a Emtel Logística enraizou uma cultura de respeito mútuo entre gestores e
        colaboradores, promovendo um ambiente sadio e altamente competente. Com um time que ama o que faz, a empresa
        encara os desafios e entrega os resultados. Confie em quem sabe o que faz!</br></br>

        Conheça mais um pouco sobre quem somos!</p>

      <a href="<?=site_url()?>/sobre" class="button">Sobre a Emtel</a>
    </div>

    <div class="home-about-video">
      <img src="<?=get_template_directory_URI()?>/img/src/quem_somos.jpg">
    </div>
  </div>
</section>

<?php get_footer();