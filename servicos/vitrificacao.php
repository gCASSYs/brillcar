<?php $basePath = '../'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviço de vitrificação automotiva da Brillcar para proteção prolongada e acabamento premium da pintura.">
    <meta name="keywords" content="vitrificação automotiva, proteção cerâmica, estética automotiva">
    <meta name="author" content="Gabriele dos Santos Cassiano">
    <title>Vitrificação | BRILLCAR</title>
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
                    <h1 class="hero__titulo">Vitrificação</h1>
                    <p class="hero__subtitulo">Camada de proteção avançada para preservar o acabamento com mais durabilidade.</p>
                </div>
            </div>
        </section>

        <section class="secao vitrificacao-bloco" id="vitrificacao-dores">
            <div class="container">
                <div class="vitrificacao-cabecalho">
                    <h2 class="titulo">Sem proteção, a pintura sofre mais com o uso diário.</h2>
                    <p class="texto">A vitrificação é indicada para quem quer reforçar a defesa do acabamento e manter o carro com aparência valorizada por muito mais tempo.</p>
                </div>

                <div class="vitrificacao-grade vitrificacao-grade--dores">
                    <article class="vitrificacao-card">
                        <span class="vitrificacao-card__icone" aria-hidden="true"><img src="../assets/lupa.png" alt=""></span>
                        <h3 class="vitrificacao-card__titulo">Desgaste constante</h3>
                        <p class="vitrificacao-card__texto">Sol, chuva e rotina de uso aceleram a perda do aspecto premium da pintura.</p>
                    </article>

                    <article class="vitrificacao-card">
                        <span class="vitrificacao-card__icone" aria-hidden="true"><img src="../assets/icon3-sobre.svg" alt=""></span>
                        <h3 class="vitrificacao-card__titulo">Brilho menos duradouro</h3>
                        <p class="vitrificacao-card__texto">Sem proteção adicional, o acabamento perde profundidade e facilidade de manutenção.</p>
                    </article>

                    <article class="vitrificacao-card">
                        <span class="vitrificacao-card__icone" aria-hidden="true"><img src="../assets/icon4-sobre.svg" alt=""></span>
                        <h3 class="vitrificacao-card__titulo">Menor preservação visual</h3>
                        <p class="vitrificacao-card__texto">A pintura fica mais exposta a perder presença e aparência de veículo bem cuidado.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao vitrificacao-bloco vitrificacao-bloco--escuro" id="vitrificacao-beneficios">
            <div class="container">
                <div class="vitrificacao-cabecalho vitrificacao-cabecalho--claro">
                    <span class="vitrificacao-cabecalho__eyebrow">Benefícios</span>
                    <h2 class="titulo">Proteção que prolonga brilho e presença visual.</h2>
                    <p class="texto">A vitrificação soma proteção avançada ao acabamento do carro, mantendo uma leitura visual mais refinada e mais consistente por longos períodos.</p>
                </div>

                <div class="vitrificacao-grade vitrificacao-grade--beneficios">
                    <article class="vitrificacao-beneficio">
                        <span class="vitrificacao-beneficio__numero">01</span>
                        <h3 class="vitrificacao-beneficio__titulo">Proteção prolongada</h3>
                        <p class="vitrificacao-beneficio__texto">A superfície ganha uma camada que ajuda a preservar melhor a pintura.</p>
                    </article>

                    <article class="vitrificacao-beneficio">
                        <span class="vitrificacao-beneficio__numero">02</span>
                        <h3 class="vitrificacao-beneficio__titulo">Brilho mais duradouro</h3>
                        <p class="vitrificacao-beneficio__texto">O acabamento mantém presença premium por mais tempo no uso cotidiano.</p>
                    </article>

                    <article class="vitrificacao-beneficio">
                        <span class="vitrificacao-beneficio__numero">03</span>
                        <h3 class="vitrificacao-beneficio__titulo">Manutenção facilitada</h3>
                        <p class="vitrificacao-beneficio__texto">A rotina de cuidado visual do veículo se torna mais prática e mais eficiente.</p>
                    </article>

                    <article class="vitrificacao-beneficio">
                        <span class="vitrificacao-beneficio__numero">04</span>
                        <h3 class="vitrificacao-beneficio__titulo">Acabamento premium</h3>
                        <p class="vitrificacao-beneficio__texto">A pintura transmite mais profundidade, presença e valorização estética.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao vitrificacao-bloco" id="vitrificacao-comparativo">
            <div class="container">
                <div class="vitrificacao-cabecalho">
                    <span class="vitrificacao-cabecalho__eyebrow">Antes e depois</span>
                    <h2 class="titulo">O ganho visual aparece no brilho e na leitura do acabamento.</h2>
                    <p class="texto">A vitrificação reforça a presença estética do veículo, deixando a superfície com mais profundidade visual e com aspecto de proteção superior.</p>
                </div>

                <div class="vitrificacao-comparativo">
                    <article class="vitrificacao-comparativo__item">
                        <span class="vitrificacao-comparativo__tag">Antes</span>
                        <div class="vitrificacao-comparativo__imagem" style="background-image:url('../assets/revitalização.jpg');"></div>
                        <p class="vitrificacao-comparativo__texto">Pintura com menos proteção visual e acabamento menos marcante no reflexo da luz.</p>
                    </article>

                    <article class="vitrificacao-comparativo__item vitrificacao-comparativo__item--destaque">
                        <span class="vitrificacao-comparativo__tag">Depois</span>
                        <div class="vitrificacao-comparativo__imagem" style="background-image:url('../assets/vitrificação.jpg');"></div>
                        <p class="vitrificacao-comparativo__texto">Superfície com aparência mais selada, brilho valorizado e sensação de acabamento premium.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao vitrificacao-bloco" id="vitrificacao-processo">
            <div class="container">
                <div class="vitrificacao-cabecalho">
                    <span class="vitrificacao-cabecalho__eyebrow">Processo</span>
                    <h2 class="titulo">Como a vitrificação é aplicada na prática.</h2>
                    <p class="texto">O serviço segue etapas que buscam proteger o acabamento com mais segurança, consistência visual e padrão elevado de apresentação.</p>
                </div>

                <div class="vitrificacao-etapas">
                    <article class="vitrificacao-etapa">
                        <div class="vitrificacao-etapa__topo">
                            <span class="vitrificacao-etapa__numero">1</span>
                            <h3 class="vitrificacao-etapa__titulo">Avaliação do acabamento</h3>
                        </div>
                        <p class="vitrificacao-etapa__texto">A equipe analisa a pintura para definir a melhor preparação antes da proteção.</p>
                    </article>

                    <article class="vitrificacao-etapa">
                        <div class="vitrificacao-etapa__topo">
                            <span class="vitrificacao-etapa__numero">2</span>
                            <h3 class="vitrificacao-etapa__titulo">Preparação da superfície</h3>
                        </div>
                        <p class="vitrificacao-etapa__texto">A área recebe o tratamento necessário para que a aplicação aconteça com segurança e melhor resultado.</p>
                    </article>

                    <article class="vitrificacao-etapa">
                        <div class="vitrificacao-etapa__topo">
                            <span class="vitrificacao-etapa__numero">3</span>
                            <h3 class="vitrificacao-etapa__titulo">Aplicação da proteção</h3>
                        </div>
                        <p class="vitrificacao-etapa__texto">A vitrificação é aplicada buscando durabilidade visual, brilho e preservação do acabamento.</p>
                    </article>

                    <article class="vitrificacao-etapa">
                        <div class="vitrificacao-etapa__topo">
                            <span class="vitrificacao-etapa__numero">4</span>
                            <h3 class="vitrificacao-etapa__titulo">Finalização técnica</h3>
                        </div>
                        <p class="vitrificacao-etapa__texto">O resultado final reforça a sensação de proteção premium e valoriza ainda mais a pintura.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao vitrificacao-cta" id="vitrificacao-cta">
            <div class="container">
                <div class="vitrificacao-cta__box">
                    <span class="vitrificacao-cabecalho__eyebrow">BrillCar</span>
                    <h2 class="vitrificacao-cta__titulo">Seu carro pode manter o brilho com proteção de nível superior.</h2>
                    <p class="vitrificacao-cta__texto">Solicite um orçamento e veja como a vitrificação pode prolongar presença visual, acabamento premium e cuidado com a pintura.</p>
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
