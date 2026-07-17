<?php $basePath = '../'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serviço de polimento automotivo da Brillcar para recuperar brilho, remover marcas leves e valorizar a pintura.">
    <meta name="keywords" content="polimento automotivo, brilho automotivo, estética automotiva">
    <meta name="author" content="Gabriele dos Santos Cassiano">
    <title>Polimento | BRILLCAR</title>
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
                    <h1 class="hero__titulo">Polimento</h1>
                    <p class="hero__subtitulo">Recuperação de brilho com acabamento técnico e aparência renovada.</p>
                </div>
            </div>
        </section>
        
        <section class="secao polimento-bloco" id="polimento-dores">
            <div class="container">
                <div class="polimento-cabecalho">
                    <h2 class="titulo">Quando o brilho some, a pintura perde presença.</h2>
                    <p class="texto">O polimento ajuda a tratar sinais visuais que fazem o carro parecer mais desgastado do que realmente está, devolvendo leitura de cuidado e valorização ao acabamento.</p>
                </div>

                <div class="polimento-grade polimento-grade--dores">
                    <article class="polimento-card">
                        <span class="polimento-card__icone" aria-hidden="true"><img src="../assets/lupa.png" alt=""></span>
                        <h3 class="polimento-card__titulo">Riscos superficiais</h3>
                        <p class="polimento-card__texto">Marcas leves de lavagem e micro riscos tiram a uniformidade da pintura e comprometem o reflexo da luz.</p>
                    </article>

                    <article class="polimento-card">
                        <span class="polimento-card__icone" aria-hidden="true"><img src="../assets/icon3-sobre.svg" alt=""></span>
                        <h3 class="polimento-card__titulo">Pintura opaca</h3>
                        <p class="polimento-card__texto">Com o tempo, o verniz perde profundidade visual e o carro passa a transmitir um aspecto apagado e cansado.</p>
                    </article>

                    <article class="polimento-card">
                        <span class="polimento-card__icone" aria-hidden="true"><img src="../assets/icon4-sobre.svg" alt=""></span>
                        <h3 class="polimento-card__titulo">Menor valorização visual</h3>
                        <p class="polimento-card__texto">Mesmo com boa mecânica, um acabamento sem brilho reduz a percepção de cuidado, presença e valor do veículo.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao polimento-bloco polimento-bloco--escuro" id="polimento-beneficios">
            <div class="container">
                <div class="polimento-cabecalho polimento-cabecalho--claro">
                    <span class="polimento-cabecalho__eyebrow">Benefícios</span>
                    <h2 class="titulo">Resultado visível em cada detalhe da superfície.</h2>
                    <p class="texto">Mais do que brilho, o polimento entrega uma leitura visual mais refinada, melhora o acabamento e reforça a apresentação do carro no dia a dia.</p>
                </div>

                <div class="polimento-grade polimento-grade--beneficios">
                    <article class="polimento-beneficio">
                        <span class="polimento-beneficio__numero">01</span>
                        <h3 class="polimento-beneficio__titulo">Brilho renovado</h3>
                        <p class="polimento-beneficio__texto">A superfície volta a refletir melhor a luz e ganha profundidade visual.</p>
                    </article>

                    <article class="polimento-beneficio">
                        <span class="polimento-beneficio__numero">02</span>
                        <h3 class="polimento-beneficio__titulo">Melhora do acabamento</h3>
                        <p class="polimento-beneficio__texto">A pintura passa a parecer mais uniforme, limpa e tecnicamente bem cuidada.</p>
                    </article>

                    <article class="polimento-beneficio">
                        <span class="polimento-beneficio__numero">03</span>
                        <h3 class="polimento-beneficio__titulo">Valorização do veículo</h3>
                        <p class="polimento-beneficio__texto">Um carro visualmente mais bem apresentado transmite mais valor e confiança.</p>
                    </article>

                    <article class="polimento-beneficio">
                        <span class="polimento-beneficio__numero">04</span>
                        <h3 class="polimento-beneficio__titulo">Recuperação estética</h3>
                        <p class="polimento-beneficio__texto">O serviço resgata a aparência da pintura sem fugir da proposta original do veículo.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao polimento-bloco" id="polimento-comparativo">
            <div class="container">
                <div class="polimento-cabecalho">
                    <span class="polimento-cabecalho__eyebrow">Antes e depois</span>
                    <h2 class="titulo">Uma comparação clara do ganho visual.</h2>
                    <p class="texto">A estrutura abaixo deixa a página pronta para uma evolução futura com slider comparativo, mas já apresenta de forma objetiva a diferença de percepção estética.</p>
                </div>

                <div class="polimento-comparativo">
                    <article class="polimento-comparativo__item">
                        <span class="polimento-comparativo__tag">Antes</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-antes1.png');"></div>
                        <p class="polimento-comparativo__texto">Aspecto mais opaco, com menor profundidade e menos destaque nas linhas da pintura.</p>
                    </article>

                    <article class="polimento-comparativo__item polimento-comparativo__item--destaque">
                        <span class="polimento-comparativo__tag">Depois</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-depois1.png');"></div>
                        <p class="polimento-comparativo__texto">Superfície mais uniforme, brilho recuperado e acabamento com aparência mais premium.</p>
                    </article>
                </div>

                <div class="polimento-comparativo">
                    <article class="polimento-comparativo__item">
                        <span class="polimento-comparativo__tag">Antes</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-antes1.png');"></div>
                        <p class="polimento-comparativo__texto">Aspecto mais opaco, com menor profundidade e menos destaque nas linhas da pintura.</p>
                    </article>

                    <article class="polimento-comparativo__item polimento-comparativo__item--destaque">
                        <span class="polimento-comparativo__tag">Depois</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-depois1.png');"></div>
                        <p class="polimento-comparativo__texto">Superfície mais uniforme, brilho recuperado e acabamento com aparência mais premium.</p>
                    </article>
                </div>

                <div class="polimento-comparativo">
                    <article class="polimento-comparativo__item">
                        <span class="polimento-comparativo__tag">Antes</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-antes1.png');"></div>
                        <p class="polimento-comparativo__texto">Aspecto mais opaco, com menor profundidade e menos destaque nas linhas da pintura.</p>
                    </article>

                    <article class="polimento-comparativo__item polimento-comparativo__item--destaque">
                        <span class="polimento-comparativo__tag">Depois</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-depois1.png');"></div>
                        <p class="polimento-comparativo__texto">Superfície mais uniforme, brilho recuperado e acabamento com aparência mais premium.</p>
                    </article>
                </div>

                <div class="polimento-comparativo">
                    <article class="polimento-comparativo__item">
                        <span class="polimento-comparativo__tag">Antes</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-antes1.png');"></div>
                        <p class="polimento-comparativo__texto">Aspecto mais opaco, com menor profundidade e menos destaque nas linhas da pintura.</p>
                    </article>

                    <article class="polimento-comparativo__item polimento-comparativo__item--destaque">
                        <span class="polimento-comparativo__tag">Depois</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-depois1.png');"></div>
                        <p class="polimento-comparativo__texto">Superfície mais uniforme, brilho recuperado e acabamento com aparência mais premium.</p>
                    </article>
                </div>

                <div class="polimento-comparativo">
                    <article class="polimento-comparativo__item">
                        <span class="polimento-comparativo__tag">Antes</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-antes1.png');"></div>
                        <p class="polimento-comparativo__texto">Aspecto mais opaco, com menor profundidade e menos destaque nas linhas da pintura.</p>
                    </article>

                    <article class="polimento-comparativo__item polimento-comparativo__item--destaque">
                        <span class="polimento-comparativo__tag">Depois</span>
                        <div class="polimento-comparativo__imagem" style="background-image:url('../assets/serv-poli-depois1.png');"></div>
                        <p class="polimento-comparativo__texto">Superfície mais uniforme, brilho recuperado e acabamento com aparência mais premium.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao polimento-bloco" id="polimento-processo">
            <div class="container">
                <div class="polimento-cabecalho">
                    <span class="polimento-cabecalho__eyebrow">Processo</span>
                    <h2 class="titulo">Como o serviço acontece na prática.</h2>
                    <p class="texto">O polimento é executado em etapas para garantir leitura técnica da pintura, segurança no processo e qualidade no acabamento final.</p>
                </div>

                <div class="polimento-etapas">
                    <article class="polimento-etapa">
                        <div class="polimento-etapa__topo">
                            <span class="polimento-etapa__numero">1</span>
                            <h3 class="polimento-etapa__titulo">Avaliação da pintura</h3>
                        </div>
                        <p class="polimento-etapa__texto">A primeira etapa identifica nível de marcas, sensibilidade do verniz e a melhor abordagem para o veículo.</p>
                    </article>

                    <article class="polimento-etapa">
                        <div class="polimento-etapa__topo">
                            <span class="polimento-etapa__numero">2</span>
                            <h3 class="polimento-etapa__titulo">Preparação da superfície</h3>
                        </div>
                        <p class="polimento-etapa__texto">A pintura é preparada para receber o processo com mais segurança, estabilidade e melhor leitura do acabamento.</p>
                    </article>

                    <article class="polimento-etapa">
                        <div class="polimento-etapa__topo">
                            <span class="polimento-etapa__numero">3</span>
                            <h3 class="polimento-etapa__titulo">Execução do polimento</h3>
                        </div>
                        <p class="polimento-etapa__texto">É aqui que as correções visuais ganham forma, com foco em brilho, uniformidade e refinamento estético.</p>
                    </article>

                    <article class="polimento-etapa">
                        <div class="polimento-etapa__topo">
                            <span class="polimento-etapa__numero">4</span>
                            <h3 class="polimento-etapa__titulo">Finalização do acabamento</h3>
                        </div>
                        <p class="polimento-etapa__texto">Após o processo principal, o veículo recebe a etapa final de conferência visual e apresentação do resultado.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="secao polimento-cta" id="polimento-cta">
            <div class="container">
                <div class="polimento-cta__box">
                    <span class="polimento-cabecalho__eyebrow">BrillCar</span>
                    <h2 class="polimento-cta__titulo">Seu carro pode voltar a chamar atenção pelo acabamento.</h2>
                    <p class="polimento-cta__texto">Solicite um orçamento e descubra como o polimento técnico pode recuperar brilho, presença e valorização visual para o seu veículo.</p>
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
