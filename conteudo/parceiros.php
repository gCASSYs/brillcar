<?php
$basePath = $basePath ?? '';
$assetPath = $basePath . 'assets/';
?>

<section class="faixa-parallax" style="--img:url('<?php echo $assetPath; ?>ImgParallax.png');">
  <div class="container faixa-parallax__conteudo">
    <h2 class="faixa-parallax__titulo">PARCEIROS</h2>
    <p class="faixa-parallax__texto">Parceiros que elevam o padrão BrillCar</p>
  </div>
</section>

<section class="secao" id="parceiros" aria-label="Parceiros da BrillCar">
  <div class="container">
    <div class="parceiros">
      <div class="parceiros__track">
        <div class="parceiros__logo"><img src="<?php echo $assetPath; ?>Michelin.png" alt="Logo da Michelin" loading="lazy"></div>
        <div class="parceiros__logo"><img src="<?php echo $assetPath; ?>Continenta.png" alt="Logo da Continental" loading="lazy"></div>
        <div class="parceiros__logo"><img src="<?php echo $assetPath; ?>3M.png" alt="Logo da 3M" loading="lazy"></div>
        <div class="parceiros__logo"><img src="<?php echo $assetPath; ?>chemicalguys.png" alt="Logo da Chemical Guys" loading="lazy"></div>
        <div class="parceiros__logo"><img src="<?php echo $assetPath; ?>vonixx.png" alt="Logo da Vonixx" loading="lazy"></div>
        <div class="parceiros__logo"><img src="<?php echo $assetPath; ?>movida-semi-novos.png" alt="Logo da Movida Seminovos" loading="lazy"></div>
      </div>
    </div>
  </div>
</section>
