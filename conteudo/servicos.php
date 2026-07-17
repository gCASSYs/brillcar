<?php
$basePath = $basePath ?? '';
$assetPath = $basePath . 'assets/';
$servicosDir = $basePath . 'servicos/';
?>

<section class="faixa-parallax" style="--img:url('<?php echo $assetPath; ?>ImgParallax.png');">
  <div class="container faixa-parallax__conteudo">
    <h2 class="faixa-parallax__titulo">SERVIÇOS</h2>
    <p class="faixa-parallax__texto">Mais que limpeza: desempenho, cuidado e valorização do seu visual.</p>
  </div>
</section>

<section class="secao" id="servicos">
  <div class="container">
    <div class="grade-servicos">
      <!-- Ajuste de linkagem: os cards agora usam as páginas PHP reais da pasta /servicos. -->
      <a class="servico" href="<?php echo $servicosDir; ?>cristalizacao.php"><div class="servico__foto"><img src="<?php echo $assetPath; ?>cristalização.png" alt="Cristalização"></div><h4 class="servico__nome">Cristalização</h4></a>
      <a class="servico" href="<?php echo $servicosDir; ?>revitalizacao.php"><div class="servico__foto"><img src="<?php echo $assetPath; ?>revitalização.jpg" alt="Revitalização"></div><h4 class="servico__nome">Revitalização</h4></a>
      <a class="servico" href="<?php echo $servicosDir; ?>higienizacao.php"><div class="servico__foto"><img src="<?php echo $assetPath; ?>higienização.png" alt="Higienização"></div><h4 class="servico__nome">Higienização</h4></a>
      <a class="servico" href="<?php echo $servicosDir; ?>vitrificacao.php"><div class="servico__foto"><img src="<?php echo $assetPath; ?>vitrificação.jpg" alt="Vitrificação"></div><h4 class="servico__nome">Vitrificação</h4></a>
      <a class="servico" href="<?php echo $servicosDir; ?>polimento.php"><div class="servico__foto"><img src="<?php echo $assetPath; ?>polimento.png" alt="Polimento"></div><h4 class="servico__nome">Polimento</h4></a>
    </div>

    <div class="centralizar">
      <a class="btn" href="<?php echo $basePath; ?>orcamentos.php">ORÇAMENTO</a>
    </div>
  </div>
</section>
