# BrillCar

Site institucional responsivo para uma empresa de estética automotiva. O projeto apresenta a marca, seus serviços e diferenciais, reúne avaliações e parceiros e oferece um canal de contato integrado ao MySQL e ao envio de e-mails por SMTP.

## Visão geral

A aplicação foi desenvolvida em PHP sem framework e utiliza componentes reutilizáveis renderizados no servidor. A página inicial concentra a apresentação comercial da BrillCar, enquanto páginas específicas detalham cada serviço. O formulário de contato valida os dados recebidos, registra a solicitação no banco de dados e envia uma notificação por e-mail.

O projeto foi pensado para execução direta em um ambiente Apache, PHP e MySQL, como o XAMPP. Não há etapa de compilação do front-end.

## Funcionalidades

- Página inicial com banner, apresentação, serviços, pacotes, diferenciais, parceiros, avaliações e perguntas frequentes.
- Catálogo geral e páginas individuais de serviços.
- Layout responsivo para computadores, tablets e celulares.
- Menu mobile, submenu de serviços e cabeçalho fixo após o banner.
- Carrosséis de serviços e avaliações com Slick Carousel.
- Efeito visual de parallax e conteúdo rotativo no banner.
- Formulário de contato com validação no servidor.
- Persistência dos contatos em MySQL por meio de PDO e prepared statements.
- Notificação por e-mail com PHPMailer e SMTP.
- Metadados de SEO, Open Graph, favicons e manifesto para navegadores.

## Tecnologias utilizadas

| Camada | Tecnologias |
| --- | --- |
| Back-end | PHP, PDO |
| Banco de dados | MySQL |
| Front-end | HTML5, CSS3, JavaScript |
| Bibliotecas | jQuery 3.7.1, Slick Carousel, PHPMailer |
| Servidor recomendado | Apache via XAMPP |

## Arquitetura

O projeto segue uma organização simples baseada em páginas PHP e componentes incluídos com `require_once`.

```text
brillcar/
├── admin/                 # Conexão PDO e persistência dos contatos
├── assets/                # Imagens, logotipos, ícones e favicons
├── conteudo/              # Seções e componentes PHP reutilizáveis
├── css/                   # Reset, estilos principais, Slick e responsividade
├── docs/                  # Relatórios e documentação complementar
├── fonts/                 # Fontes utilizadas pelo Slick Carousel
├── js/                    # Scripts próprios e arquivos do Slick
├── servicos/              # Catálogo e páginas individuais dos serviços
├── vendor/phpmailer/      # Biblioteca PHPMailer incluída no projeto
├── contatos.php           # Formulário, persistência e envio de e-mail
├── index.php              # Página inicial
├── orcamentos.php         # Página de orçamento
├── servicos.php           # Página de serviços na raiz
└── sobre.php              # Página institucional
```

### Componentes principais

- `conteudo/topo.php`: monta a navegação, controla o item ativo e ajusta caminhos conforme a página.
- `conteudo/banner.php`: apresenta o hero e as principais chamadas para ação.
- `conteudo/servicos.php`: exibe a vitrine de serviços reutilizada em diferentes páginas.
- `conteudo/rodape.php`: reúne navegação complementar, dados de contato, mapa e redes sociais.
- `js/script.js`: controla carrosséis, FAQ, menu mobile, parallax e cabeçalho fixo.
- `admin/Conexao.php`: cria e devolve a conexão PDO com o MySQL.
- `admin/ControleContato.php`: insere os dados do formulário em `tbl_contato` com parâmetros preparados.

## Fluxo do formulário de contato

1. O visitante envia nome, e-mail, telefone, motivo e mensagem por `contatos.php`.
2. O servidor remove espaços excedentes e valida os campos obrigatórios, o endereço de e-mail e o motivo selecionado.
3. `ClassContato` grava os dados em `tbl_contato` por meio de uma instrução preparada.
4. O PHPMailer se conecta ao servidor SMTP e envia a notificação ao destinatário configurado.
5. A aplicação redireciona o visitante e apresenta uma mensagem de sucesso ou erro.

O registro no banco acontece antes do envio do e-mail. Portanto, uma falha de SMTP não apaga a solicitação já recebida.

## Requisitos

- Apache 2.4 ou equivalente.
- PHP 8.0 ou superior, com as extensões `pdo` e `pdo_mysql` habilitadas.
- MySQL 5.7 ou superior ou MariaDB compatível.
- Acesso a um servidor SMTP para ativar o envio de mensagens.
- Conexão com a internet para carregar jQuery e Google Fonts usados pelas páginas.

## Instalação local com XAMPP

1. Clone o repositório para a pasta `htdocs` do XAMPP:

   ```bash
   git clone URL_DO_REPOSITORIO brillcar
   ```

2. Inicie os serviços Apache e MySQL no painel do XAMPP.

3. Crie o banco de dados e a tabela de contatos:

   ```sql
   CREATE DATABASE db_brillcar
       CHARACTER SET utf8mb4
       COLLATE utf8mb4_unicode_ci;

   USE db_brillcar;

   CREATE TABLE tbl_contato (
       id_contato INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       nome_contato VARCHAR(150) NOT NULL,
       email_contato VARCHAR(254) NOT NULL,
       telefone_contato VARCHAR(30) NULL,
       motivo_contato VARCHAR(30) NOT NULL,
       mensagem_contato TEXT NOT NULL,
       criado_em TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. Configure as variáveis de ambiente descritas em `.env.example`. O PHP lê essas configurações por `getenv`; copiar o arquivo por si só não carrega as variáveis automaticamente. No Apache, elas podem ser definidas no VirtualHost ou em uma configuração local protegida:

   ```apache
   SetEnv BRILLCAR_DB_HOST localhost
   SetEnv BRILLCAR_DB_NAME db_brillcar
   SetEnv BRILLCAR_DB_USERNAME root
   SetEnv BRILLCAR_DB_PASSWORD ""
   SetEnv BRILLCAR_SMTP_HOST smtp.example.com
   SetEnv BRILLCAR_SMTP_USERNAME usuario@example.com
   SetEnv BRILLCAR_SMTP_PASSWORD senha_segura
   SetEnv BRILLCAR_SMTP_FROM usuario@example.com
   SetEnv BRILLCAR_CONTACT_RECIPIENT contato@example.com
   ```

5. Acesse `http://localhost/brillcar/` no navegador.

As configurações padrão do banco correspondem ao XAMPP: host `localhost`, banco `db_brillcar`, usuário `root` e senha vazia. Em produção, defina todas as credenciais explicitamente e utilize um usuário de banco com permissões restritas.

## Variáveis de ambiente

| Variável | Finalidade | Padrão local |
| --- | --- | --- |
| `BRILLCAR_DB_HOST` | Host do MySQL | `localhost` |
| `BRILLCAR_DB_NAME` | Nome do banco | `db_brillcar` |
| `BRILLCAR_DB_USERNAME` | Usuário do banco | `root` |
| `BRILLCAR_DB_PASSWORD` | Senha do banco | vazia |
| `BRILLCAR_SMTP_HOST` | Servidor SMTP | obrigatório |
| `BRILLCAR_SMTP_USERNAME` | Usuário SMTP | obrigatório |
| `BRILLCAR_SMTP_PASSWORD` | Senha SMTP | obrigatório |
| `BRILLCAR_SMTP_FROM` | Remetente das mensagens | usuário SMTP |
| `BRILLCAR_CONTACT_RECIPIENT` | Destinatário do formulário | obrigatório |

Nunca versione credenciais reais. O arquivo `.env.example` contém somente valores ilustrativos, e arquivos `.env` são ignorados pelo Git.

## Páginas e rotas

| Caminho | Descrição |
| --- | --- |
| `/index.php` | Página inicial e conteúdo institucional completo |
| `/sobre.php` | Apresentação da empresa |
| `/servicos.php` | Página de serviços disponível na raiz |
| `/servicos/servicosTotal.php` | Catálogo completo de serviços |
| `/servicos/polimento.php` | Detalhes sobre polimento |
| `/servicos/vitrificacao.php` | Detalhes sobre vitrificação |
| `/servicos/higienizacao.php` | Detalhes sobre higienização |
| `/servicos/cristalizacao.php` | Detalhes sobre cristalização |
| `/servicos/revitalizacao.php` | Detalhes sobre revitalização |
| `/orcamentos.php` | Página reservada para orçamento |
| `/contatos.php` | Formulário e canais de atendimento |

## Segurança

O projeto já utiliza validação server-side, lista controlada de motivos, escape de dados exibidos e consultas parametrizadas. Antes de uma implantação pública, recomenda-se também:

- adicionar proteção CSRF ao formulário;
- implementar limitação de tentativas e proteção contra spam;
- validar o tamanho máximo de todos os campos;
- registrar erros no servidor sem expor detalhes ao visitante;
- usar HTTPS e um servidor SMTP com certificado válido;
- manter credenciais somente no ambiente de execução;
- atualizar o PHPMailer e demais bibliotecas periodicamente.

Uma credencial que já tenha sido exposta no código deve ser revogada e substituída, mesmo depois de removida do arquivo.

## Estado atual e limitações conhecidas

- A página de orçamento ainda contém apenas a estrutura inicial e precisa de implementação funcional.
- Alguns dados institucionais, links sociais, telefones, endereços e imagens Open Graph ainda são placeholders ou precisam de revisão.
- Há divergências de conteúdo entre certas páginas e o rodapé.
- Algumas páginas apresentam texto com sinais de codificação incorreta e precisam ser normalizadas para UTF-8.
- As páginas de serviço repetem estruturas que podem ser consolidadas em um template orientado a dados.
- O CSS principal é extenso e pode ser dividido por componentes para facilitar manutenção.
- Não existem testes automatizados, pipeline de integração contínua ou gerenciador de dependências configurado.
- O jQuery é carregado de CDN; sem conexão externa, os carrosséis não serão inicializados.

## Possíveis evoluções

- Finalizar a jornada de solicitação de orçamento.
- Centralizar dados institucionais e configurações em uma única camada.
- Migrar o PHPMailer para Composer com autoload.
- Criar um template único para as páginas de serviço.
- Adicionar migrations ou um arquivo SQL versionado.
- Implementar testes para validação e persistência do formulário.
- Otimizar imagens, carregamento de scripts e divisão dos estilos.
- Melhorar acessibilidade do menu, do submenu e dos elementos interativos.
- Adicionar integração contínua para análise de sintaxe e qualidade.

## Documentação complementar

A pasta `docs/` contém relatórios de avaliação e registros de ajustes realizados anteriormente no projeto. Esses documentos ajudam a compreender decisões de interface, correções e oportunidades de evolução.

## Autoria

Projeto desenvolvido por Gabriele dos Santos Cassiano para a BrillCar Estética Automotiva.

## Licença

Este projeto ainda não possui uma licença de uso definida. Até que uma licença seja adicionada, todos os direitos permanecem reservados ao autor.
