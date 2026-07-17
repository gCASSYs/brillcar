<?php
$basePath = $basePath ?? '';
$assetPath = $basePath . 'assets/';
$servicosDir = $basePath . 'servicos/';
$paginaAtual = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($paginaAtual === '' || $paginaAtual === false) {
    $paginaAtual = 'index.php';
}

$homeAtiva = $paginaAtual === 'index.php' ? 'menu-ativo' : '';
$sobreAtiva = $paginaAtual === 'sobre.php' ? 'menu-ativo' : '';
$servicosAtivo = in_array($paginaAtual, ['servicosTotal.php', 'polimento.php', 'higienizacao.php', 'cristalizacao.php', 'revitalizacao.php', 'vitrificacao.php'], true) ? 'menu-ativo' : '';
$orcamentosAtivo = $paginaAtual === 'orcamentos.php' ? 'menu-ativo' : '';
$contatosAtivo = $paginaAtual === 'contatos.php' ? 'menu-ativo' : '';
?>

<header class="topo-pill" id="cabecalhoPrincipal">
    <div class="topo-pill__esq">
        <img class="topo-pill__logo" src="<?php echo $assetPath; ?>logo1.svg" alt="BrillCar">
    </div>

    <!-- BOTAO ABRIR (so aparece no mobile) -->
    <button class="abrir-menu" type="button" aria-label="Abrir menu">
        <img src="<?php echo $assetPath; ?>abrir.svg" alt="">
    </button>

    <!-- MENU -->
    <nav class="topo-pill__menu" aria-label="Menu principal">

        <!-- BOTAO FECHAR (so aparece no mobile) -->
        <button class="fechar-menu" type="button" aria-label="Fechar menu">
            <img src="<?php echo $assetPath; ?>fechar.svg" alt="">
        </button>

        <!-- LOGIN DENTRO DO MENU (mobile) -->
        <a class="menu-login" href="#login">
            <span class="menu-login__icone">
                <img src="<?php echo $assetPath; ?>login.svg" alt="">
            </span>
            <span class="menu-login__texto">LOGIN</span>
        </a>

        <a class="<?php echo $homeAtiva; ?>" href="<?php echo $basePath; ?>index.php">HOME</a>
        <a class="<?php echo $sobreAtiva; ?>" href="<?php echo $basePath; ?>sobre.php">SOBRE</a>

        <!-- SERVICOS COM SUBMENU -->
        <div class="menu-item menu-item--dropdown <?php echo $servicosAtivo; ?>">
            <!-- Ajuste de linkagem: o item principal e o submenu passam a usar os arquivos PHP reais da pasta /servicos. -->
            <a class="menu-link menu-link--drop <?php echo $servicosAtivo; ?>" href="<?php echo $servicosDir; ?>servicosTotal.php">
                SERVIÇOS
                <span class="seta-drop" aria-hidden="true">&#9662;</span>
            </a>

            <div class="submenu">
                <a href="<?php echo $servicosDir; ?>polimento.php">Polimento</a>
                <a href="<?php echo $servicosDir; ?>vitrificacao.php">Vitrificação</a>
                <a href="<?php echo $servicosDir; ?>higienizacao.php">Higienização</a>
                <a href="<?php echo $servicosDir; ?>cristalizacao.php">Cristalização</a>
                <a href="<?php echo $servicosDir; ?>revitalizacao.php">Revitalização</a>
            </div>
        </div>

        <a class="<?php echo $orcamentosAtivo; ?>" href="<?php echo $basePath; ?>orcamentos.php">ORÇAMENTO</a>
        <a class="<?php echo $contatosAtivo; ?>" href="<?php echo $basePath; ?>contatos.php">CONTATOS</a>
    </nav>

    <div class="topo-pill__dir">
        <a class="icone-perfil" href="#login" title="Perfil">
            <img class="icone-perfil__img" src="<?php echo $assetPath; ?>login.svg" alt="Login">
        </a>
    </div>
</header>
