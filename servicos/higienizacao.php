<?php $basePath = '../'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviço de higienização automotiva da Brillcar para limpeza interna profunda e mais conforto no uso diário do veículo.">
    <meta name="keywords" content="higienização automotiva, limpeza interna automotiva, estética automotiva">
    <meta name="author" content="Gabriele dos Santos Cassiano">
    <title>Higienização | BRILLCAR</title>
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
                    <h1 class="hero__titulo">Higienização</h1>
                    <p class="hero__subtitulo">Limpeza interna detalhada para mais conforto, cuidado e sensação de novo.</p>
                </div>
            </div>
        </section>
     

        <section class="secao higienizacao-bloco" id="higienizacao-dores">
            <div class="container">
                <div class="higienizacao-cabecalho">
                    <h2 class="titulo">Quando o interior acumula sinais de uso, o conforto desaparece.</h2>
                    <p class="texto">A higienização profissional trata pontos que afetam bem-estar, aparência interna e percepção de cuidado, devolvendo sensação de ambiente limpo e agradável.</p>
                </div>

                <div class="higienizacao-grade higienizacao-grade--dores">
                    <article class="higienizacao-card">
                        <span class="higienizacao-card__icone" aria-hidden="true"><img src="../assets/lupa.png" alt=""></span>
                        <h3 class="higienizacao-card__titulo">Sujeira acumulada</h3>
                        <p class="higienizacao-card__texto">Bancos, carpetes e frestas armazenam resíduos que prejudicam a aparência do interior.</p>
                    </article>

                    <article class="higienizacao-card">
                        <span class="higienizacao-card__icone" aria-hidden="true"><img src="../assets/icon3-sobre.svg" alt=""></span>
                        <h3 class="higienizacao-card__titulo">Odor desagradável</h3>
                        <p class="higienizacao-card__texto">Cheiros persistentes tornam a experiência dentro do veículo menos confortável no dia a dia.</p>
                    </article>

                    <article class="higienizacao-card">
                        <span class="higienizacao-card__icone" aria-hidden="true"><img src="../assets/icon4-sobre.svg" alt=""></span>
                        <h3 class="higienizacao-card__titulo">Sensação de descuido</h3>
                        <p class="higienizacao-card__texto">Um interior mal conservado reduz a percepção de limpeza, organização e valorização do carro.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao higienizacao-bloco higienizacao-bloco--escuro" id="higienizacao-beneficios">
            <div class="container">
                <div class="higienizacao-cabecalho higienizacao-cabecalho--claro">
                    <span class="higienizacao-cabecalho__eyebrow">Benefícios</span>
                    <h2 class="titulo">Conforto interno que faz diferença no uso diário.</h2>
                    <p class="texto">A higienização vai além da limpeza visual, entregando uma sensação mais agradável de cuidado, frescor e bem-estar para motorista e passageiros.</p>
                </div>

                <div class="higienizacao-grade higienizacao-grade--beneficios">
                    <article class="higienizacao-beneficio">
                        <span class="higienizacao-beneficio__numero">01</span>
                        <h3 class="higienizacao-beneficio__titulo">Interior mais limpo</h3>
                        <p class="higienizacao-beneficio__texto">Os materiais internos recuperam uma aparência mais organizada e agradável.</p>
                    </article>

                    <article class="higienizacao-beneficio">
                        <span class="higienizacao-beneficio__numero">02</span>
                        <h3 class="higienizacao-beneficio__titulo">Mais conforto</h3>
                        <p class="higienizacao-beneficio__texto">Entrar no carro volta a ser uma experiência mais leve e mais agradável.</p>
                    </article>

                    <article class="higienizacao-beneficio">
                        <span class="higienizacao-beneficio__numero">03</span>
                        <h3 class="higienizacao-beneficio__titulo">Melhor impressão visual</h3>
                        <p class="higienizacao-beneficio__texto">O interior transmite mais cuidado e reforça a boa apresentação do veículo.</p>
                    </article>

                    <article class="higienizacao-beneficio">
                        <span class="higienizacao-beneficio__numero">04</span>
                        <h3 class="higienizacao-beneficio__titulo">Ambiente renovado</h3>
                        <p class="higienizacao-beneficio__texto">A cabine ganha sensação de renovação e uso mais agradável no cotidiano.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao higienizacao-bloco" id="higienizacao-comparativo">
            <div class="container">
                <div class="higienizacao-cabecalho">
                    <span class="higienizacao-cabecalho__eyebrow">Antes e depois</span>
                    <h2 class="titulo">A transformação aparece no cuidado com o interior.</h2>
                    <p class="texto">A comparação mostra como a higienização muda a leitura do ambiente interno, trazendo sensação de limpeza, conforto e melhor apresentação.</p>
                </div>

                <div class="higienizacao-comparativo">
                    <article class="higienizacao-comparativo__item">
                        <span class="higienizacao-comparativo__tag">Antes</span>
                        <div class="higienizacao-comparativo__imagem" style="background-image:url('../assets/SobreImg.png');"></div>
                        <p class="higienizacao-comparativo__texto">Interior com aparência mais cansada, menos confortável e com menor sensação de cuidado.</p>
                    </article>

                    <article class="higienizacao-comparativo__item higienizacao-comparativo__item--destaque">
                        <span class="higienizacao-comparativo__tag">Depois</span>
                        <div class="higienizacao-comparativo__imagem" style="background-image:url('../assets/higienização.png');"></div>
                        <p class="higienizacao-comparativo__texto">Cabine com aspecto mais limpo, organizada visualmente e muito mais agradável no uso diário.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao higienizacao-bloco" id="higienizacao-processo">
            <div class="container">
                <div class="higienizacao-cabecalho">
                    <span class="higienizacao-cabecalho__eyebrow">Processo</span>
                    <h2 class="titulo">Como a higienização acontece na prática.</h2>
                    <p class="texto">O serviço segue etapas pensadas para melhorar a limpeza interna com atenção aos materiais, à experiência de uso e ao acabamento final.</p>
                </div>

                <div class="higienizacao-etapas">
                    <article class="higienizacao-etapa">
                        <div class="higienizacao-etapa__topo">
                            <span class="higienizacao-etapa__numero">1</span>
                            <h3 class="higienizacao-etapa__titulo">Avaliação interna</h3>
                        </div>
                        <p class="higienizacao-etapa__texto">A equipe identifica os pontos de maior uso, acúmulo de resíduos e necessidades do interior.</p>
                    </article>

                    <article class="higienizacao-etapa">
                        <div class="higienizacao-etapa__topo">
                            <span class="higienizacao-etapa__numero">2</span>
                            <h3 class="higienizacao-etapa__titulo">Preparação do ambiente</h3>
                        </div>
                        <p class="higienizacao-etapa__texto">As áreas são organizadas para que o processo seja realizado com mais eficiência e segurança.</p>
                    </article>

                    <article class="higienizacao-etapa">
                        <div class="higienizacao-etapa__topo">
                            <span class="higienizacao-etapa__numero">3</span>
                            <h3 class="higienizacao-etapa__titulo">Limpeza detalhada</h3>
                        </div>
                        <p class="higienizacao-etapa__texto">É realizada a higienização dos materiais internos com foco em conforto, aparência e sensação de renovação.</p>
                    </article>

                    <article class="higienizacao-etapa">
                        <div class="higienizacao-etapa__topo">
                            <span class="higienizacao-etapa__numero">4</span>
                            <h3 class="higienizacao-etapa__titulo">Finalização do interior</h3>
                        </div>
                        <p class="higienizacao-etapa__texto">O acabamento final reforça a limpeza visual e melhora a experiência dentro do carro.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao higienizacao-cta" id="higienizacao-cta">
            <div class="container">
                <div class="higienizacao-cta__box">
                    <span class="higienizacao-cabecalho__eyebrow">BrillCar</span>
                    <h2 class="higienizacao-cta__titulo">Seu carro pode voltar a ser um ambiente agradável por dentro.</h2>
                    <p class="higienizacao-cta__texto">Solicite um orçamento e descubra como a higienização profissional pode melhorar conforto, aparência e bem-estar no uso do veículo.</p>
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
