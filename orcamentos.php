<?php
declare(strict_types=1);

// O orçamento usa o mesmo fluxo seguro do formulário de contato.
header('Location: contatos.php?motivo=orcamento#formulario-contato', true, 302);
exit;
