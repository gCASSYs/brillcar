<?php $basePath = $basePath ?? ''; ?>
<section class="hero" style="background-image: url('<?php echo $basePath; ?>assets/ImgBanner.jpg'); min-height: 500px; background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="hero__overlay"></div>

  <div class="container hero__conteudo">
    <?php require_once(__DIR__ . "/topo.php"); ?>

    <div class="hero__texto">
      <h1 class="hero__titulo">Excelência em Estética Automotiva</h1>

      <p class="hero__subtitulo">
        <span class="hero__rotator" aria-live="polite">
          <span id="heroPalavra" class="hero__palavra">Polimento</span>
        </span>
      </p>

      <div class="hero__botoes">
        <a class="btn" href="#orcamentos">ORÇAMENTO</a>
        <a class="btn btn--secundario" href="#servicos">SERVIÇOS</a>
      </div>
    </div>
  </div>
</section>
