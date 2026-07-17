<?php $basePath = '../'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviço de cristalização automotiva da Brillcar para intensificar o brilho e reforçar a proteção da pintura.">
    <meta name="keywords" content="cristalização automotiva, proteção de pintura, brilho automotivo">
    <meta name="author" content="Gabriele dos Santos Cassiano">
    <title>Cristalização | BRILLCAR</title>
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
                <div class="hero__texto contato-hero__texto">
                    <h1 class="hero__titulo">Cristalização</h1>
                    <p class="hero__subtitulo">Mais brilho e proteção para manter a pintura valorizada por mais tempo.</p>
                </div>
            </div>
        </section>
    

        <section class="secao cristalizacao-bloco" id="cristalizacao-dores">
            <div class="container">
                <div class="cristalizacao-cabecalho">
                    <h2 class="titulo">Sem proteção leve e contínua, o brilho some mais rápido.</h2>
                    <p class="texto">A cristalização ajuda a preservar o visual do carro com uma camada de proteção que reforça brilho, praticidade e percepção de cuidado.</p>
                </div>

                <div class="cristalizacao-grade cristalizacao-grade--dores">
                    <article class="cristalizacao-card">
                        <span class="cristalizacao-card__icone" aria-hidden="true"><img src="../assets/lupa.png" alt=""></span>
                        <h3 class="cristalizacao-card__titulo">Brilho passageiro</h3>
                        <p class="cristalizacao-card__texto">Sem um reforço de proteção, o acabamento perde destaque com mais facilidade.</p>
                    </article>

                    <article class="cristalizacao-card">
                        <span class="cristalizacao-card__icone" aria-hidden="true"><img src="../assets/icon3-sobre.svg" alt=""></span>
                        <h3 class="cristalizacao-card__titulo">Visual menos protegido</h3>
                        <p class="cristalizacao-card__texto">A pintura fica mais vulnerável à perda de presença no uso cotidiano.</p>
                    </article>

                    <article class="cristalizacao-card">
                        <span class="cristalizacao-card__icone" aria-hidden="true"><img src="../assets/icon4-sobre.svg" alt=""></span>
                        <h3 class="cristalizacao-card__titulo">Manutenção mais difícil</h3>
                        <p class="cristalizacao-card__texto">Sem apoio protetivo, manter o visual valorizado exige mais esforço no dia a dia.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao cristalizacao-bloco cristalizacao-bloco--escuro" id="cristalizacao-beneficios">
            <div class="container">
                <div class="cristalizacao-cabecalho cristalizacao-cabecalho--claro">
                    <span class="cristalizacao-cabecalho__eyebrow">Benefícios</span>
                    <h2 class="titulo">Brilho reforçado com proteção e praticidade.</h2>
                    <p class="texto">A cristalização entrega uma boa combinação entre apresentação visual, reforço da pintura e facilidade de manter o carro com aparência de cuidado.</p>
                </div>

                <div class="cristalizacao-grade cristalizacao-grade--beneficios">
                    <article class="cristalizacao-beneficio">
                        <span class="cristalizacao-beneficio__numero">01</span>
                        <h3 class="cristalizacao-beneficio__titulo">Brilho realçado</h3>
                        <p class="cristalizacao-beneficio__texto">A superfície ganha mais destaque e melhor presença visual.</p>
                    </article>

                    <article class="cristalizacao-beneficio">
                        <span class="cristalizacao-beneficio__numero">02</span>
                        <h3 class="cristalizacao-beneficio__titulo">Proteção adicional</h3>
                        <p class="cristalizacao-beneficio__texto">A pintura recebe uma barreira que ajuda a manter o acabamento por mais tempo.</p>
                    </article>

                    <article class="cristalizacao-beneficio">
                        <span class="cristalizacao-beneficio__numero">03</span>
                        <h3 class="cristalizacao-beneficio__titulo">Mais praticidade</h3>
                        <p class="cristalizacao-beneficio__texto">O cuidado cotidiano com o veículo se torna mais simples e mais eficiente.</p>
                    </article>

                    <article class="cristalizacao-beneficio">
                        <span class="cristalizacao-beneficio__numero">04</span>
                        <h3 class="cristalizacao-beneficio__titulo">Aparência valorizada</h3>
                        <p class="cristalizacao-beneficio__texto">O carro mantém uma imagem mais refinada e melhor apresentada por mais tempo.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao cristalizacao-bloco" id="cristalizacao-comparativo">
            <div class="container">
                <div class="cristalizacao-cabecalho">
                    <span class="cristalizacao-cabecalho__eyebrow">Antes e depois</span>
                    <h2 class="titulo">O acabamento passa a parecer mais protegido e mais brilhante.</h2>
                    <p class="texto">A comparação evidencia como a cristalização melhora o reflexo da pintura e reforça a leitura de proteção no conjunto visual do veículo.</p>
                </div>

                <div class="cristalizacao-comparativo">
                    <article class="cristalizacao-comparativo__item">
                        <span class="cristalizacao-comparativo__tag">Antes</span>
                        <div class="cristalizacao-comparativo__imagem" style="background-image:url('../assets/revitalização.jpg');"></div>
                        <p class="cristalizacao-comparativo__texto">Acabamento com menos reflexo e menor percepção visual de proteção na pintura.</p>
                    </article>

                    <article class="cristalizacao-comparativo__item cristalizacao-comparativo__item--destaque">
                        <span class="cristalizacao-comparativo__tag">Depois</span>
                        <div class="cristalizacao-comparativo__imagem" style="background-image:url('../assets/cristalização.png');"></div>
                        <p class="cristalizacao-comparativo__texto">Visual mais intenso, brilho realçado e sensação de acabamento mais protegido e refinado.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao cristalizacao-bloco" id="cristalizacao-processo">
            <div class="container">
                <div class="cristalizacao-cabecalho">
                    <span class="cristalizacao-cabecalho__eyebrow">Processo</span>
                    <h2 class="titulo">Como a cristalização é realizada na prática.</h2>
                    <p class="texto">O serviço é organizado em etapas para entregar brilho, proteção complementar e um resultado visual mais consistente na pintura.</p>
                </div>

                <div class="cristalizacao-etapas">
                    <article class="cristalizacao-etapa">
                        <div class="cristalizacao-etapa__topo">
                            <span class="cristalizacao-etapa__numero">1</span>
                            <h3 class="cristalizacao-etapa__titulo">Avaliação do estado visual</h3>
                        </div>
                        <p class="cristalizacao-etapa__texto">A pintura é observada para entender o ponto de partida do acabamento.</p>
                    </article>

                    <article class="cristalizacao-etapa">
                        <div class="cristalizacao-etapa__topo">
                            <span class="cristalizacao-etapa__numero">2</span>
                            <h3 class="cristalizacao-etapa__titulo">Preparação da superfície</h3>
                        </div>
                        <p class="cristalizacao-etapa__texto">A área recebe os cuidados necessários antes da aplicação da proteção.</p>
                    </article>

                    <article class="cristalizacao-etapa">
                        <div class="cristalizacao-etapa__topo">
                            <span class="cristalizacao-etapa__numero">3</span>
                            <h3 class="cristalizacao-etapa__titulo">Aplicação do tratamento</h3>
                        </div>
                        <p class="cristalizacao-etapa__texto">A cristalização é executada para reforçar brilho, proteção e leitura estética da pintura.</p>
                    </article>

                    <article class="cristalizacao-etapa">
                        <div class="cristalizacao-etapa__topo">
                            <span class="cristalizacao-etapa__numero">4</span>
                            <h3 class="cristalizacao-etapa__titulo">Conferência final</h3>
                        </div>
                        <p class="cristalizacao-etapa__texto">O acabamento final destaca o ganho visual e consolida a apresentação do veículo.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao cristalizacao-cta" id="cristalizacao-cta">
            <div class="container">
                <div class="cristalizacao-cta__box">
                    <span class="cristalizacao-cabecalho__eyebrow">BrillCar</span>
                    <h2 class="cristalizacao-cta__titulo">Seu carro pode manter o brilho com proteção mais inteligente.</h2>
                    <p class="cristalizacao-cta__texto">Solicite um orçamento e descubra como a cristalização pode unir apresentação, proteção e praticidade para o seu veículo.</p>
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
