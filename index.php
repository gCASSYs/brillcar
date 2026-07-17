<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- DESCRIÇÃO DO SITE -->
     <meta name="description" content="A Brillcar Estética Automotiva é especializada em polimento, revitalização de pintura e higienização profissional em São Paulo/Zona Leste. Cuidamos do seu carro com carinho, técnicas seguras e produtos de alta qualidade para devolver brilho, proteção e valorização ao seu veículo. Atendimento confiável, resultados duradouros e atenção a cada detalhe.">

     <!-- PALAVRAS CHAVES -->
     <meta name="keywords" content="estética automotiva, estética automotiva zona leste, polimento automotivo, polidor zona leste, detailing automotivo, higienização interna, revitalização de pintura, proteção cerâmica, vitrificação automotiva, cristalização, remoção de riscos, alto brilho, carro novo, estética automotiva São Paulo, polimento automotivo São Paulo, estética automotiva zona leste SP, detailing zona leste SP
      ">

     <!-- AUTOR DO SITE -->
     <meta name="author" content="Gabriele dos Santos Cassiano">

     <!-- Open Grafh (Compartilhar nas Redes Sociais) -->
     <meta property="og:title" content="BRILLCAR">
     <meta property="og:description" content="A Brillcar Estética Automotiva é especializada em polimento, revitalização de pintura e higienização profissional em São Paulo/Zona Leste. Cuidamos do seu carro com carinho, técnicas seguras e produtos de alta qualidade para devolver brilho, proteção e valorização ao seu veículo. Atendimento confiável, resultados duradouros e atenção a cada detalhe.">
     <meta property="og:image" content="https://">
     <meta property="og:type" content="website">

     <!-- Link dos Icon para Favicon -->
     <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-icon-57x57.png">
     <link rel="apple-touch-icon" sizes="60x60" href="assets/icon/apple-icon-60x60.png">
     <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-icon-76x76.png">
     <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-icon-120x120.png">
     <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-icon-144x144.png">
     <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-icon-152x152.png">
     <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-icon-180x180.png">
     <link rel="icon" type="image/png" sizes="192x192"  href="assets/icon/android-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon-96x96.png">
     <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
     <link rel="manifest" href="assets/icon/manifest.json">
     <meta name="msapplication-TileColor" content="#d9933d">
     <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
     <meta name="theme-color" content="#d9933d"> 

    <title>BRILLCAR</title>
    <!-- o reset limpa os estilos do html então caso for colocar estilos, deixe ele em primeiro, pois se não ele limpa -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- ANIMAÇÃO CARROCEL SLICK -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">

    <!-- aplica estilo no html então ele sempre vem por ultimo, caso for aplicar estilos no css, pois se não -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsivo.css">
</head>

<body>
    

    <main id="inicio">

        <!-- INICIO BANNER -->
        <?php require_once("conteudo/banner.php"); ?>
        <!-- FINAL BANNER -->

        <!-- INICIO SOBRE -->
        <?php require_once("conteudo/sobre.php"); ?>
        <!-- FINAL SOBRE -->

        <!-- INICIO SERVICOS -->
        <?php require_once("conteudo/servicos.php"); ?>
        <!-- FINAL SERVICOS -->

        <!-- INICIO PACOTES -->
        <?php require_once("conteudo/pacotes.php"); ?>
        <!-- FINAL PACOTES -->

        <!-- INICIO DIFERENCIAIS -->
        <?php require_once("conteudo/diferenciais.php"); ?>
        <!-- FINAL DIFERENCIAIS -->

        <!-- INICIO PARCEIROS -->
        <?php require_once("conteudo/parceiros.php"); ?>
        <!-- FINAL PARCEIROS -->


        <!-- INICIO AVALIACAO -->
        <?php require_once("conteudo/avaliacao.php"); ?>
        <!-- FINAL AVALIACAO -->

        <!-- INICIO FAQ -->
        <?php require_once("conteudo/faq.php"); ?>
        <!-- FINAL FAQ -->

    </main>

  <!-- INICIO RODAPE -->
  <?php require_once("conteudo/rodape.php"); ?>
  <!-- FINAL RODAPE -->

    
    <!-- JQUARY -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- É para a animação do carrocel do SLICK => Banner -->
    <script src="js/slick.min.js"></script>

    <script>
        /* ============================================================
            PALAVRA ROTATIVA NO HERO
            - Troca uma palavra de cada vez no subtítulo
            - Faz animação de saída/entrada usando classes CSS
        ============================================================ */

        // 1) Lista com as 5 palavras que vão aparecer no banner (em loop)
        const palavras = [
            "POLIMENTO",
            "VITRIFICAÇÃO",
            "HIGIENIZAÇÃO",
            "CRISTALIZAÇÃO",
            "REVITALIZAÇÃO"
        ];

        // 2) Pega o elemento do HTML onde a palavra aparece
        //    (é o <span id="heroPalavra">...</span>)
        const el = document.getElementById("heroPalavra");

        // 3) Índice que controla qual palavra está sendo mostrada
        //    começa em 0 (Polimento)
        let i = 0;

        // 4) Função que troca a palavra com animação
        function trocarPalavra() {

            // 4.1) Coloca a classe "saindo" para animar sumindo
            el.classList.add("saindo");

            // 4.2) Espera o tempo da animação de saída (0.35s = 350ms)
            setTimeout(() => {

            // 4.3) Atualiza o índice (vai para a próxima palavra)
            //      quando chega na última, volta para a primeira (loop)
            i = (i + 1) % palavras.length;

            // 4.4) Troca o texto mostrado na tela
            el.textContent = palavras[i];

            // 4.5) Remove a classe "saindo" e adiciona "entrando"
            //      para animar aparecendo
            el.classList.remove("saindo");
            el.classList.add("entrando");

            // 4.6) Depois que terminou de entrar, remove a classe
            //      para não ficar travada
            setTimeout(() => el.classList.remove("entrando"), 350);

            }, 350);
        }

        // 5) Chama a função a cada X tempo (1600ms = 1.6s)
        //    você pode aumentar para ficar mais lento (ex: 2200)
        setInterval(trocarPalavra, 3000);
    </script>               


    <!-- MEU SCRIPT (ANIMAÇÃO) -->
    <script src="js/script.js"></script>

</body>
</html>
