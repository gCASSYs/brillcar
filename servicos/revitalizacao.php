<?php $basePath = '../'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviço de revitalização automotiva da Brillcar para renovar cor, brilho e presença visual do veículo.">
    <meta name="keywords" content="revitalização automotiva, renovação de pintura, estética automotiva">
    <meta name="author" content="Gabriele dos Santos Cassiano">
    <title>Revitalização | BRILLCAR</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/slick-theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsivo.css">
</head>
<body>
    <main id="inicio">
        <section class="hero contato-hero" style="background-image:url('../assets/ImgBanner.jpg');">
            <div class="hero__overlay"></div>
            <div class="container hero__conteudo"><?php require_once(__DIR__ . '/../conteudo/topo.php'); ?>
                <div class="hero__texto contato-hero__texto"><h1 class="hero__titulo">Revitalização</h1>
                    <p class="hero__subtitulo">Renovação visual para devolver presença, cor e vida ao acabamento do carro.</p>
                </div>
            </div>
        </section>
        
        <section class="secao revitalizacao-bloco" id="revitalizacao-dores">
            <div class="container">
                <div class="revitalizacao-cabecalho">
                    <h2 class="titulo">O tempo desgasta a aparência, mesmo sem danos graves.</h2>
                    <p class="texto">A revitalização atua na recuperação visual do veículo, tratando sinais de uso que deixam o carro com aparência envelhecida e sem destaque.</p>
                </div>

                <div class="revitalizacao-grade revitalizacao-grade--dores">
                    <article class="revitalizacao-card">
                        <span class="revitalizacao-card__icone" aria-hidden="true"><img src="../assets/lupa.png" alt=""></span>
                        <h3 class="revitalizacao-card__titulo">Desgaste visual</h3>
                        <p class="revitalizacao-card__texto">O uso diário faz com que o carro perca presença, mesmo estando em bom estado estrutural.</p>
                    </article>

                    <article class="revitalizacao-card">
                        <span class="revitalizacao-card__icone" aria-hidden="true"><img src="../assets/icon3-sobre.svg" alt=""></span>
                        <h3 class="revitalizacao-card__titulo">Aspecto envelhecido</h3>
                        <p class="revitalizacao-card__texto">Plásticos, pintura e acabamentos passam a transmitir uma aparência mais cansada.</p>
                    </article>

                    <article class="revitalizacao-card">
                        <span class="revitalizacao-card__icone" aria-hidden="true"><img src="../assets/icon4-sobre.svg" alt=""></span>
                        <h3 class="revitalizacao-card__titulo">Perda de presença</h3>
                        <p class="revitalizacao-card__texto">O veículo deixa de chamar atenção pelo visual e perde parte da sua valorização estética.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao revitalizacao-bloco revitalizacao-bloco--escuro" id="revitalizacao-beneficios">
            <div class="container">
                <div class="revitalizacao-cabecalho revitalizacao-cabecalho--claro">
                    <span class="revitalizacao-cabecalho__eyebrow">Benefícios</span>
                    <h2 class="titulo">Recuperação visual que devolve vida ao veículo.</h2>
                    <p class="texto">A revitalização melhora a leitura estética do carro, resgata detalhes apagados e reforça a sensação de cuidado em todo o conjunto.</p>
                </div>

                <div class="revitalizacao-grade revitalizacao-grade--beneficios">
                    <article class="revitalizacao-beneficio">
                        <span class="revitalizacao-beneficio__numero">01</span>
                        <h3 class="revitalizacao-beneficio__titulo">Visual renovado</h3>
                        <p class="revitalizacao-beneficio__texto">O carro volta a transmitir sensação de conservação e cuidado.</p>
                    </article>

                    <article class="revitalizacao-beneficio">
                        <span class="revitalizacao-beneficio__numero">02</span>
                        <h3 class="revitalizacao-beneficio__titulo">Detalhes valorizados</h3>
                        <p class="revitalizacao-beneficio__texto">Partes externas recuperam presença e destaque na composição visual.</p>
                    </article>

                    <article class="revitalizacao-beneficio">
                        <span class="revitalizacao-beneficio__numero">03</span>
                        <h3 class="revitalizacao-beneficio__titulo">Mais uniformidade</h3>
                        <p class="revitalizacao-beneficio__texto">O veículo passa a apresentar um acabamento mais equilibrado e harmônico.</p>
                    </article>

                    <article class="revitalizacao-beneficio">
                        <span class="revitalizacao-beneficio__numero">04</span>
                        <h3 class="revitalizacao-beneficio__titulo">Valorização estética</h3>
                        <p class="revitalizacao-beneficio__texto">A aparência final reforça a percepção de um carro mais bem cuidado.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao revitalizacao-bloco" id="revitalizacao-comparativo">
            <div class="container">
                <div class="revitalizacao-cabecalho">
                    <span class="revitalizacao-cabecalho__eyebrow">Antes e depois</span>
                    <h2 class="titulo">A diferença aparece no conjunto visual do veículo.</h2>
                    <p class="texto">A revitalização melhora a leitura geral da parte externa, deixando o carro com aparência mais viva, mais uniforme e visualmente mais valorizada.</p>
                </div>

                <div class="revitalizacao-comparativo">
                    <article class="revitalizacao-comparativo__item">
                        <span class="revitalizacao-comparativo__tag">Antes</span>
                        <div class="revitalizacao-comparativo__imagem" style="background-image:url('../assets/revitalização.jpg');"></div>
                        <p class="revitalizacao-comparativo__texto">Visual mais apagado, com menos presença e menor destaque nos acabamentos do veículo.</p>
                    </article>

                    <article class="revitalizacao-comparativo__item revitalizacao-comparativo__item--destaque">
                        <span class="revitalizacao-comparativo__tag">Depois</span>
                        <div class="revitalizacao-comparativo__imagem" style="background-image:url('../assets/polimento.png');"></div>
                        <p class="revitalizacao-comparativo__texto">Aparência mais renovada, acabamento valorizado e sensação de carro mais bem apresentado.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao revitalizacao-bloco" id="revitalizacao-processo">
            <div class="container">
                <div class="revitalizacao-cabecalho">
                    <span class="revitalizacao-cabecalho__eyebrow">Processo</span>
                    <h2 class="titulo">Como a revitalização é feita na prática.</h2>
                    <p class="texto">O serviço é executado em etapas para recuperar a estética do veículo com mais consistência, equilíbrio visual e atenção aos detalhes.</p>
                </div>

                <div class="revitalizacao-etapas">
                    <article class="revitalizacao-etapa">
                        <div class="revitalizacao-etapa__topo">
                            <span class="revitalizacao-etapa__numero">1</span>
                            <h3 class="revitalizacao-etapa__titulo">Avaliação visual</h3>
                        </div>
                        <p class="revitalizacao-etapa__texto">A primeira etapa identifica sinais de desgaste e define o foco de recuperação estética.</p>
                    </article>

                    <article class="revitalizacao-etapa">
                        <div class="revitalizacao-etapa__topo">
                            <span class="revitalizacao-etapa__numero">2</span>
                            <h3 class="revitalizacao-etapa__titulo">Preparação das áreas</h3>
                        </div>
                        <p class="revitalizacao-etapa__texto">As superfícies são preparadas para receber o tratamento de forma mais segura e eficiente.</p>
                    </article>

                    <article class="revitalizacao-etapa">
                        <div class="revitalizacao-etapa__topo">
                            <span class="revitalizacao-etapa__numero">3</span>
                            <h3 class="revitalizacao-etapa__titulo">Recuperação estética</h3>
                        </div>
                        <p class="revitalizacao-etapa__texto">É realizada a revitalização dos pontos que mais impactam a presença visual do veículo.</p>
                    </article>

                    <article class="revitalizacao-etapa">
                        <div class="revitalizacao-etapa__topo">
                            <span class="revitalizacao-etapa__numero">4</span>
                            <h3 class="revitalizacao-etapa__titulo">Finalização</h3>
                        </div>
                        <p class="revitalizacao-etapa__texto">O acabamento final reforça a uniformidade e entrega um visual mais valorizado ao carro.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao revitalizacao-cta" id="revitalizacao-cta">
            <div class="container">
                <div class="revitalizacao-cta__box">
                    <span class="revitalizacao-cabecalho__eyebrow">BrillCar</span>
                    <h2 class="revitalizacao-cta__titulo">Seu carro pode recuperar a presença que o tempo apagou.</h2>
                    <p class="revitalizacao-cta__texto">Solicite um orçamento e descubra como a revitalização pode devolver mais vida, equilíbrio visual e valorização estética ao seu veículo.</p>
                    <div class="hero__botoes">
                        <a class="btn" href="../orcamentos.php">QUERO UM ORÇAMENTO</a>
                        <a class="btn btn--secundario" href="servicosTotal.php">OUTROS SERVIÇOS</a>
                    </div>
                </div>
            </div>
        </section>
        

    </main>
    <?php require_once(__DIR__ . '/../conteudo/rodape.php'); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
