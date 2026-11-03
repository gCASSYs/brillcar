<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;
$mensagemRetorno = '';
$classeRetorno = '';
$nomeInformado = '';
if (session_status() !== PHP_SESSION_ACTIVE) {
    $sessionPath = __DIR__ . '/storage/sessions';
    if (!is_dir($sessionPath)) mkdir($sessionPath, 0775, true);
    session_save_path($sessionPath);
    session_start(['cookie_httponly' => true, 'cookie_samesite' => 'Lax', 'use_strict_mode' => true]);
}
if (empty($_SESSION['contact_csrf'])) $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));

if (isset($_GET['status'])) {
    $nomeInformado = trim($_GET['nome'] ?? '');

    if ($_GET['status'] === 'sucesso') {
        $ok = 1;
        $classeRetorno = 'contato-formulario__retorno contato-formulario__retorno--sucesso';
        $mensagemRetorno = $nomeInformado !== ''
            ? "{$nomeInformado}, Sua mensagem foi enviada com sucesso!"
            : 'Sua mensagem foi enviada com sucesso!';
    }

    if ($_GET['status'] === 'erro') {
        $ok = 2;
        $classeRetorno = 'contato-formulario__retorno contato-formulario__retorno--erro';
        $mensagemRetorno = $nomeInformado !== ''
            ? "{$nomeInformado}, Não foi possivel enviar sua mensagem no momento!"
            : 'Não foi possivel enviar sua mensagem no momento!';
    }
}

if (isset($_POST['email'])) {
    require 'vendor/phpmailer/Exception.php';
    require 'vendor/phpmailer/PHPMailer.php';
    require 'vendor/phpmailer/SMTP.php';

    $mail = new PHPMailer(true);

    try {
        if (!hash_equals($_SESSION['contact_csrf'], (string) ($_POST['csrf_token'] ?? ''))) {
            throw new \RuntimeException('Sessão expirada.');
        }
        $nome = trim($_POST['nome'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $fone = trim($_POST['telefone'] ?? '');
        $assunto = trim($_POST['motivo'] ?? '');
        $mens = trim($_POST['mensagem'] ?? '');
        $nomeInformado = $nome;

        // Valida os campos principais antes de salvar e enviar.
        $motivosPermitidos = ['orcamento', 'duvidas', 'parceria', 'reclamacao'];
        if (
            $nome === '' ||
            $email === '' ||
            !filter_var($email, FILTER_VALIDATE_EMAIL) ||
            $assunto === '' ||
            !in_array($assunto, $motivosPermitidos, true) ||
            $mens === '' ||
            mb_strlen($nome) > 150 || mb_strlen($email) > 254 || mb_strlen($fone) > 30 || mb_strlen($mens) > 5000
        ) {
            throw new \Exception('Dados do formulario invalidos.');
        }

        // BANCO DE DADOS(CONTR0LE)
        require_once('admin/ControleContato.php');

        //Toda vez que preciso chamar algum atributo ou elemento
        $contato = new ClassContato();

        $contato->nomeContato = $nome;
        $contato->emailContato = $email;
        $contato->foneContato = $fone;
        $contato->motivoContato = $assunto;
        $contato->mensContato = $mens;

        $contato->Inserir();


        $mail->isSMTP();
        $mail->Host = getenv('BRILLCAR_SMTP_HOST') ?: '';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('BRILLCAR_SMTP_USERNAME') ?: '';
        $mail->Password = getenv('BRILLCAR_SMTP_PASSWORD') ?: '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom(getenv('BRILLCAR_SMTP_FROM') ?: $mail->Username, 'BRILLCAR');
        $mail->addAddress(getenv('BRILLCAR_CONTACT_RECIPIENT') ?: '');

        $mail->isHTML(true);
        $mail->Subject = 'Site BrillCar';
        $safe = static fn(string $value): string => htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
        $mail->Body = 'Nome: ' . $safe($nome) . '<br>E-mail: ' . $safe($email) . '<br>Telefone: ' . $safe($fone) . '<br>Assunto: ' . $safe($assunto) . '<br>Mensagem: ' . nl2br($safe($mens));
        $mail->AltBody = "
            Nome: $nome \n
            E-mail: $email \n
            Telefone: $fone \n
            Assunto: $assunto \n
            Mensagem: $mens
        ";

        $mail->send();

        $_SESSION['contact_csrf'] = bin2hex(random_bytes(32));
        header('Location: contatos.php?status=sucesso&nome=' . urlencode($nomeInformado));
        exit;
    } catch (\Throwable $e) {
        error_log($e->getMessage());
        header('Location: contatos.php?status=erro&nome=' . urlencode($nomeInformado));
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Entre em contato com a Brillcar Estetica Automotiva para tirar duvidas, solicitar parcerias ou enviar sua mensagem.">
    <meta name="keywords" content="contato Brillcar, estetica automotiva zona leste, atendimento Brillcar, whatsapp Brillcar">
    <meta name="author" content="Gabriele dos Santos Cassiano">

    <meta property="og:title" content="Contato | BRILLCAR">
    <meta property="og:description" content="Fale com a Brillcar Estetica Automotiva pelos canais de atendimento da empresa.">
    <meta property="og:image" content="https://">
    <meta property="og:type" content="website">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
    <link rel="manifest" href="assets/icon/manifest.json">
    <meta name="msapplication-TileColor" content="#d9933d">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#d9933d">

    <title>Contato | BRILLCAR</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsivo.css">
</head>

<body>
    <main>
        <section class="hero contato-hero">
            <div class="hero__overlay"></div>

            <div class="container hero__conteudo">
                <?php require_once('conteudo/topo.php'); ?>

                <div class="hero__texto contato-hero__texto">
                    <h1 class="hero__titulo">Fale com a BrillCar</h1>
                    <p class="hero__subtitulo">Atendimento direto para duvidas, parcerias e suporte ao cliente.</p>
                </div>
            </div>
        </section>

        <section class="secao contato-section" id="contato">
            <div class="container">
                <div class="contato-section__grid">
                    <div class="contato-formulario">
                        <form class="contato-formulario__form" id="formulario-contato" action="contatos.php#formulario-contato" method="POST">
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['contact_csrf'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?php if ($mensagemRetorno !== '') { ?>
                                <div class="<?php echo $classeRetorno; ?>" role="status" aria-live="polite">
                                    <?php echo htmlspecialchars($mensagemRetorno, ENT_QUOTES, 'UTF-8'); ?>
                                </div>
                            <?php } ?>

                            <div class="contato-formulario__grupo">
                                <label class="contato-formulario__label" for="nome">Nome</label>
                                <input class="contato-formulario__campo" type="text" name="nome" id="nome" placeholder="Nome e sobrenome" value="<?php echo htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            </div>

                            <div class="contato-formulario__grupo">
                                <label class="contato-formulario__label" for="email">E-mail</label>
                                <input class="contato-formulario__campo" type="email" name="email" id="email" placeholder="Digite seu e-mail" value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            </div>

                            <div class="contato-formulario__grupo">
                                <label class="contato-formulario__label" for="telefone">Telefone</label>
                                <input class="contato-formulario__campo" type="tel" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo htmlspecialchars($_POST['telefone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                            </div>

                            <div class="contato-formulario__grupo">
                                <label class="contato-formulario__label" for="motivo">Motivo do contato</label>
                                <div class="contato-formulario__select-wrap">
                                    <select class="contato-formulario__campo contato-formulario__campo--select" name="motivo" id="motivo">
                                        <?php $motivoSelecionado = $_POST['motivo'] ?? $_GET['motivo'] ?? ''; ?>
                                        <option value="" disabled hidden <?php echo empty($motivoSelecionado) ? 'selected' : ''; ?>>Selecione uma opção</option>
                                        <option value="orcamento" <?php echo $motivoSelecionado === 'orcamento' ? 'selected' : ''; ?>>Orçamento</option>
                                        <option value="duvidas" <?php echo $motivoSelecionado === 'duvidas' ? 'selected' : ''; ?>>Dúvidas</option>
                                        <option value="parceria" <?php echo $motivoSelecionado === 'parceria' ? 'selected' : ''; ?>>Parceria</option>
                                        <option value="reclamacao" <?php echo $motivoSelecionado === 'reclamacao' ? 'selected' : ''; ?>>Reclamação</option>
                                    </select>
                                </div>
                            </div>

                            <div class="contato-formulario__grupo">
                                <label class="contato-formulario__label" for="mensagem">Mensagem</label>
                                <textarea class="contato-formulario__campo contato-formulario__campo--textarea" name="mensagem" id="mensagem" placeholder="Digite sua mensagem..."><?php echo htmlspecialchars($_POST['mensagem'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                            </div>

                            <button class="btn contato-formulario__botao" type="submit">Enviar</button>
                        </form>
                    </div>

                    <aside class="contato-info" aria-labelledby="contato-info-titulo">
                        <span class="contato-info__eyebrow">Contato</span>
                        <h2 class="contato-info__titulo" id="contato-info-titulo">Fale com a BrillCar com praticidade.</h2>
                        <p class="contato-info__texto">
                            Se voce precisa tirar duvidas sobre nossos servicos, falar sobre parceria ou solicitar atendimento,
                            use o formulario ao lado ou escolha um dos canais abaixo.
                        </p>

                        <div class="contato-info__cards">
                            <div class="contato-info__card">
                                <span class="contato-info__icone" aria-hidden="true">
                                    <img src="assets/icon-local.svg" alt="">
                                </span>
                                <div class="contato-info__conteudo">
                                    <h3 class="contato-info__card-titulo">Endereco</h3>
                                    <p class="contato-info__card-texto">Av. Marechal Tito, 1500</p>
                                </div>
                            </div>

                            <div class="contato-info__card">
                                <span class="contato-info__icone" aria-hidden="true">
                                    <img src="assets/icon-fone.svg" alt="">
                                </span>
                                <div class="contato-info__conteudo">
                                    <h3 class="contato-info__card-titulo">Telefone</h3>
                                    <p class="contato-info__card-texto">(11) 9999-9999</p>
                                </div>
                            </div>

                            <div class="contato-info__card">
                                <span class="contato-info__icone" aria-hidden="true">
                                    <img src="assets/icon-email.svg" alt="">
                                </span>
                                <div class="contato-info__conteudo">
                                    <h3 class="contato-info__card-titulo">Email</h3>
                                    <p class="contato-info__card-texto">contato@brillcar.com</p>
                                </div>
                            </div>

                            <div class="contato-info__card">
                                <span class="contato-info__icone contato-info__icone--whatsapp" aria-hidden="true">
                                    <img src="assets/whatsapp-24.svg" alt="">
                                </span>
                                <div class="contato-info__conteudo">
                                    <h3 class="contato-info__card-titulo">Whatsapp</h3>
                                    <p class="contato-info__card-texto">(11) 99999-9999</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <?php require_once('conteudo/rodape.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
