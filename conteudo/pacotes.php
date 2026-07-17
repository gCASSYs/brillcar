<?php
$basePath = $basePath ?? '';
$assetPath = $basePath . 'assets/';
?>

<section class="faixa-parallax" style="--img:url('<?php echo $assetPath; ?>ImgParallax.png');">
  <div class="container faixa-parallax__conteudo">
    <h2 class="faixa-parallax__titulo">PACOTES</h2>
    <p class="faixa-parallax__texto">Seu carro merece o melhor: pacotes completos com boas soluções.</p>
  </div>
</section>

<section class="secao" id="pacotes">
  <div class="container">
    <div class="grade-pacotes">
      <article class="pacote"><h3 class="pacote__titulo">POLIMENTO</h3><p class="pacote__linha">Básico: limpeza e brilho</p><p class="pacote__preco">R$ 450,00</p><a class="btn btn--pequeno" href="<?php echo $basePath; ?>orcamentos.php">ADQUIRIR</a></article>
      <article class="pacote"><h3 class="pacote__titulo">CRISTALIZAÇÃO</h3><p class="pacote__linha">Ganho: proteção técnica</p><p class="pacote__preco">R$ 600,00</p><a class="btn btn--pequeno" href="<?php echo $basePath; ?>orcamentos.php">ADQUIRIR</a></article>
      <article class="pacote"><h3 class="pacote__titulo">HIGIENIZAÇÃO</h3><p class="pacote__linha">Cuidado interno e odores</p><p class="pacote__preco">R$ 450,00</p><a class="btn btn--pequeno" href="<?php echo $basePath; ?>orcamentos.php">ADQUIRIR</a></article>
      <article class="pacote"><h3 class="pacote__titulo">VITRIFICAÇÃO</h3><p class="pacote__linha">Alta durabilidade</p><p class="pacote__preco">R$ 1.200,00</p><a class="btn btn--pequeno" href="<?php echo $basePath; ?>orcamentos.php">ADQUIRIR</a></article>
      <article class="pacote"><h3 class="pacote__titulo">REVITALIZAÇÃO</h3><p class="pacote__linha">Renova cor e brilho</p><p class="pacote__preco">R$ 700,00</p><a class="btn btn--pequeno" href="<?php echo $basePath; ?>orcamentos.php">ADQUIRIR</a></article>
      <article class="pacote"><h3 class="pacote__titulo">COMPLETO</h3><p class="pacote__linha">Pacote total BrillCar</p><p class="pacote__preco">R$ 1.650,00</p><a class="btn btn--pequeno" href="<?php echo $basePath; ?>orcamentos.php">ADQUIRIR</a></article>
    </div>
  </div>
</section>
