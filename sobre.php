<?php
/**
 * Template Name: sobre
 *
 * @package WordPress
 * @subpackage agenciaSalt
 * @since agenciaSalt
 */
get_header(); ?>

<section class="sobre">
  <div class="container">
    <div class="sobre-txt">
      <div class="txt-bloco">
        <h2>Quem somos</h2>
        <p>O crescimento da Emtel é contínuo e hoje somos referência nos ramos que atuamos. O compromisso com a ética,
          melhoria contínua e qualidade é constante.</br>
          Compromisso 100%</br>
          Qualidade 100%</br>
          Confiança 100%
        </p>
      </div>

      <div class="txt-bloco">
        <h2>Política de Gestão Integrada</h2>
        <p>A Emtel, com base no envolvimento e participação de todos os seus diretores, gestores e funcionários, está
          comprometida com:</br>
          - A satisfação do cliente;</br>
          - A proteção ambiental;</br>
          - A melhoria contínua, integrando sistemas de gestão nos serviços;</br>
          - Os requisitos legais e outros requisitos, respeitando e atendendo à legislação aplicável de meio ambiente,
          saúde e segurança do trabalho;</br>
          - A saúde e a segurança do trabalho, oferecendo condições seguras e saudáveis para a prevenção de lesões e de
          problemas de saúde relacionados ao trabalho. A Emtel é uma empresa comprometida com a redução de perigos e de
          riscos com a saúde e com a segurança.
        </p>
      </div>
    </div>

    <div class="sobre-video">
      <img src="<?=get_template_directory_URI()?>/img/src/quem_somos.jpg">
    </div>
  </div>
</section>

<section class="valores">
  <div class="container">
    <div class="valores-img">
      <img src="<?=get_template_directory_URI()?>/img/src/valores.jpg">
    </div>

    <div class="valores-txt">
      <div class="txt-bloco">
        <h2>Nossos valores </h2>
        <p>- Trabalhar com ética, honradez, vivacidade e resiliência, visando atender às expectativas dos clientes, aos
          requisitos legais e aos outros requisitos aplicáveis.</br>
          - Buscar, frequentemente, a preservação do meio-ambiente por meio da prevenção e da redução de emissão de
          poluentes ambientais;</br>
          - Promover a segurança, a saúde e a cordialidade entre os funcionários.</br>
          - Buscar a lucratividade com inteligência e segurança.
        </p>
      </div>

      <div class="txt-bloco">
        <h2>Cultura</h2>
        <p>Nossa cultura é baseada nos seguintes itens:</br>
          Jeito simples de ser.</br>
          Aqui, a gente respeita uns aos outros.</br>
          Encaramos desafios.</br>
          Somos um time de fazedores.</br>
          Pode confiar na gente.</br>
          Com um jeito simples e cordial, a Emtel Logística enraizou uma cultura de respeito mútuo</br>
          entre gestores e colaboradores, promovendo um ambiente sadio e altamente competente.</br>
          Com um time que ama o que faz, a empresa encara os desafios e entrega os resultados. Confie</br>
          em quem sabe o que faz!</p>
      </div>
    </div>
  </div>
</section>

<section class="depoimentos">
  <div class="container">
    <h2>Depoimentos</h2>

    <div class="depoimentos-wrapper">
      <div class="depoimentos-item">
        <p>“A Emtel atende aos requisitos contratuais em todas as etapas. De acordo com os indicadores apurados, o
          desempenho da Emtel é bem avaliado por nossa gestão.”</p>

        <span>Claudia Silva - LIGHT S.E.S.A. / Operações logísticas - GLL</span>
      </div>

      <div class="depoimentos-item">
        <p>“Tem sido plenamente satisfatório o desempenho da Emtel, sempre atuando com presteza e agilidade na solução
          dos assuntos que lhes encaminhamos, no que concerne a manutenções preventivas periódicas e corretivas, bem
          como na disponibilização de veículos reservas quando necessário.”</p>

        <span>Cláudio Mangieri - Prefeitura de Salvador</span>
      </div>
    </div>
  </div>
</section>

<?php get_footer();