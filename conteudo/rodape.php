<?php
$basePath = $basePath ?? '';
$assetPath = $basePath . 'assets/';
$servicosDir = $basePath . 'servicos/';
$paginaAtualRodape = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$isHomePage = $paginaAtualRodape === 'index.php' || $paginaAtualRodape === '';
$socialLinks = [
  'Instagram' => [getenv('BRILLCAR_INSTAGRAM') ?: '', 'instagram-24.png'],
  'Facebook' => [getenv('BRILLCAR_FACEBOOK') ?: '', 'facebook-24.png'],
  'LinkedIn' => [getenv('BRILLCAR_LINKEDIN') ?: '', 'linkedin-24.png'],
];
?>

<footer class="rodape" id="contato">
  <div class="container rodape__conteudo">
    <div class="rodape__coluna">
      <div class="rodape__logo"><img src="<?php echo $assetPath; ?>LogoInteira.png" alt="Logo Inteira da Estética BrillCar"></div>
      <p class="rodape__texto">Cuidado, excelência e valorização<br>em cada detalhe</p>
      <div class="rodape__redes" aria-label="Redes sociais da BrillCar">
        <?php foreach ($socialLinks as $name => [$url, $icon]) {
          if (!filter_var($url, FILTER_VALIDATE_URL)) continue; ?>
          <a class="rede" href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo $name; ?>"><img src="<?php echo $assetPath . $icon; ?>" alt=""></a>
        <?php } ?>
      </div>
    </div>

    <nav class="rodape__coluna" aria-label="Menu do rodapé">
      <h4 class="rodape__titulo">MENU</h4>
      <a class="rodape__link" href="<?php echo $isHomePage ? '#inicio' : $basePath . 'index.php'; ?>">Home</a>
      <a class="rodape__link" href="<?php echo $isHomePage ? '#sobre' : $basePath . 'sobre.php'; ?>">Sobre</a>
      <a class="rodape__link" href="<?php echo $isHomePage ? '#servicos' : $servicosDir . 'servicosTotal.php'; ?>">Serviços</a>
      <a class="rodape__link" href="<?php echo $basePath; ?>orcamentos.php">Orçamento</a>
      <a class="rodape__link" href="<?php echo $basePath; ?>contatos.php">Contato</a>
    </nav>

    <nav class="rodape__coluna" aria-label="Serviços da BrillCar">
      <h4 class="rodape__titulo">SERVIÇOS</h4>
      <!-- Ajuste de linkagem: o rodapé passa a reaproveitar as páginas individuais da seção de serviços. -->
      <a class="rodape__link" href="<?php echo $servicosDir; ?>polimento.php">Polimento</a>
      <a class="rodape__link" href="<?php echo $servicosDir; ?>cristalizacao.php">Cristalização</a>
      <a class="rodape__link" href="<?php echo $servicosDir; ?>higienizacao.php">Higienização</a>
      <a class="rodape__link" href="<?php echo $servicosDir; ?>vitrificacao.php">Vitrificação</a>
      <a class="rodape__link" href="<?php echo $servicosDir; ?>revitalizacao.php">Revitalização</a>
    </nav>

    <div class="rodape__mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648877017!2d-46.43443166057781!3d-23.495592259266648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1765397149603!5m2!1spt-BR!2sbr" title="Mapa de localização da BrillCar" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="rodape__contato"><div>Av. Marechal Tito, 6000</div><div>(11)9999-9999</div></div>
  <a class="whats-flutuante" href="https://wa.me/5511999999999" target="_blank" rel="noopener" aria-label="WhatsApp"><img src="<?php echo $assetPath; ?>whatsapp-24.png" alt="Whatsapp da BrillCar"></a>
  <div class="rodape__final">© <?php $data = date('Y'); echo $data; ?> - Criado e desenvolvido por Gabriele dos Santos Cassiano</div>
</footer>
