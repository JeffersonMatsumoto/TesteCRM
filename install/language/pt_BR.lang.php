<?php
/**
 * ç
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC_SEARCH' => 'Filtro básico',
    'LBL_ADVANCED_SEARCH' => 'Filtro avançado',
    'LBL_BASIC_TYPE' => 'Básico',
    'LBL_ADVANCED_TYPE' => 'Avançado',
    'LBL_SYSOPTS_2' => 'Que tipo de base de dados será utilizado para a instância SuiteCRM que está prestes a instalar?',
    'LBL_SYSOPTS_DB' => 'Especificar Tipo de Base de Dados',
    'LBL_SYSOPTS_DB_TITLE' => 'Tipo de Base de Dados',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Por favor corrija os seguintes erros antes de prosseguir:',
    'ERR_DB_VERSION_FAILURE' => 'Não foi possível checar versão do Banco de Dados.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Forneça o nome do usuário para o administrador do SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'Forneça a senha para o usuário administrador do SuiteCRM.',

    'ERR_CHECKSYS' => 'Foram detectados erros durante a verificação de compatibilidade. Para que a sua instalação SuiteCRM funcione corretamente, por favor tome as medidas adequadas para resolver os problemas listados abaixo e pressione o botão para reverificar, ou tente instalar de novo.',
    'ERR_CHECKSYS_CURL' => 'Não encontrado: Agendador SuiteCRM será executado com funcionalidade limitada.',
    'ERR_CHECKSYS_IMAP' => 'Não encontrado: InboundEmail e Campanhas (E-mail) requerem as bibliotecas IMAP. Nenhum deles será funcional.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Defina como',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M ou maior no seu arquivo php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Aviso: Não Editável',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Sua versão de PHP não é suportada pelo SuiteCRM. É necessário instalar uma versão que seja compatível com o SuiteCRM. Por favor, consulte a Matriz de Compatibilidade nas Notas de Lançamento para obter as Versões de PHP suportadas. Sua versão é ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'A sua versão de IIS não é suportada pelo SuiteCRM. É necessário instalar uma versão que seja compatível com a aplicação SuiteCRM. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões IIS suportadas. A sua versão é ',
    'ERR_CHECKSYS_FASTCGI' => 'Detectamos que não está utilizando um mapeamento de handler FastCGI para o PHP. É necessário instalar/configurar uma versão que seja compatível com a aplicação SuiteCRM. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para versões suportadas. Consulte <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> para mais detalhes ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Para uma utilização otimizada do sapi IIS/FastCGI, defina fastcgi.logging para 0 no seu arquivo php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Base de dados indisponível',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Suporte da Base de Dados não foi encontrado. Por favor certifique-se que possui os drivers necessários para um dos seguintes Tipos de Base de Dados suportados: MySQL, MS SQLServer ou Oracle. Talvez seja necessário descomentar a extensão no arquivo php.ini ou recompilar com arquivo binário correto, dependendo da sua versão de PHP. Por favor consulte o Manual do PHP para mais informações sobre como ativar o Suporte da Base de Dados.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funções associadas às XML Parser Libraries que são necessárias à aplicação SuiteCRM não foram encontradas. Talvez seja necessário descomentar a extensão no arquivo php.ini ou recompilar com arquivo binário correto, dependendo da sua versão de PHP. Por favor consulte o Manual do PHP para mais informações sobre como ativar o Suporte da Base de Dados.',
    'ERR_CHECKSYS_MBSTRING' => 'Funções associadas com a extensão Multibyte Strings PHP (mbstring) que são necessárias à aplicação SuiteCRM não foram encontradas. &lt;br/&gt;&lt;br/&gt;Geralmente, o módulo mbstring não está ativado por defeito no PHP e deve ser ativado com --enable-mbstring quando o binário PHP é construído. Por favor consulte o Manual do PHP para mais informações sobre como ativar o suporte mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'O arquivo de configuração existe mas não é editável. Por favor tome as medidas necessárias para tornar o arquivo editável. Dependendo do seu sistema operativo, pode ser necessário alterar as permissões executando o chmod 766, ou clicando com o botão direito no nome do arquivo para acessar às propriedades e desmarcar a opção somente leitura.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'O arquivo de substituição de configuração existe mas não é gravável. Por favor, tome as medidas necessárias para tornar o arquivo gravável. Dependendo do seu sistema operacional, isso pode exigir que você altere as permissões executando chmod 766, ou o botão direito sobre o nome do arquivo para acessar as propriedades e desmarque a opção de leitura apenas.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'O Diretório Custom existe mas não é gravável.  Você pode ter que alterar as permissões dele (chmod 766) ou clique com o botão direito sobre ele e desmarque a opção somente leitura, dependendo do seu sistema operacional.  Por favor, execute os passos necessários para tornar o arquivo gravável.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Os arquivos ou Diretórios abaixo listados não são editáveis ou estão em falta e não podem ser criados. Dependendo do seu Sistema Operativo, a correcção pode exigir que altere as permissões nos arquivos ou na Diretório de origem (chmod 766), ou que clique com o botão direito na Diretório de origem e desmarque a opção &#39;somente leitura&#39; e aplicá-la a todas as sub-pastas.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Substituição de config',
    'ERR_CHECKSYS_SAFE_MODE' => 'Modo de Segurança Ativo (pode desactivá-lo em php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Não Encontrado: o SuiteCRM colhe enormes benefícios no seu desempenho com a compressão zlib.',
    'ERR_CHECKSYS_ZIP' => 'Suporte ZIP não encontrado: SuiteCRM precisa de suporte ZIP para processar arquivo comprimidos.',
    'ERR_CHECKSYS_PCRE' => 'Biblioteca PCRE não encontrada: o SuiteCRM necessita da biblioteca PCRE para processar a correspondência de padrões de expressões regulares de estilo Perl.',
    'ERR_CHECKSYS_PCRE_VER' => 'Versão da biblioteca PCRE: o SuiteCRM necessita da biblioteca PCRE, versão 7.0 ou superior, para processar a correspondência de padrões de expressões regulares de estilo Perl.',
    'ERR_DB_ADMIN' => 'O nome do usuário e/ou senha do administrador da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um nome do usuário e senha válidos. (Erro:',
    'ERR_DB_ADMIN_MSSQL' => 'O nome do usuário e/ou senha do administrador da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um nome do usuário e senha válidos.',
    'ERR_DB_EXISTS_NOT' => 'A base de dados especificada não existe.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Já existe uma base de dados com os dados de configuração. Para executar uma instalação com a base de dados selecionada, por favor execute novamente a instalação e escolha: "Remover e recriar as tabelas SuiteCRM existentes‎?". Para fazer uma atualização, utilize o Assistente de atualização no painel de administração. Por favor leia a documentação de atualização <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">aqui</a>.',
    'ERR_DB_EXISTS' => 'O Nome do usuário da Base de Dados fornecido já existe -- não é possível criar outro com o mesmo nome.',
    'ERR_DB_EXISTS_PROCEED' => 'O Nome do usuário da Base de Dados fornecido já existe. Você pode:<br>1. clicar no botão para voltar atrás e escolher um novo nome <br>2. clicar em "próximo" e continuar, mas todas as tabelas existentes nesta base de dados serão descartadas.<strong>Isto significa que as suas tabelas e os dados serão destruídos.</strong>',
    'ERR_DB_HOSTNAME' => 'Nome do servidor não pode estar em branco.',
    'ERR_DB_INVALID' => 'Tipo de base de dados Selecionado inválido.',
    'ERR_DB_LOGIN_FAILURE' => 'O nome do usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um nome do usuário e senha válidos.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'O nome do usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um nome do usuário e senha válidos.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'O nome do usuário e/ou senha da base de dados é inválido(a), e a conexão com a base de dados não pôde ser estabelecida. Por favor insira um nome do usuário e senha válidos.',
    'ERR_DB_MYSQL_VERSION' => 'Sua versão MySQL não é suportada pelo SuiteCRM. Você deve instalar uma versão compatível. Por favor consulte as versões compatíveis nas informações para checar qual versão de MySQL é suportada.',
    'ERR_DB_NAME' => 'Nome da base de dados não pode estar em branco.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Nome da base de dados não pode conter &#39;\\&#39;, &#39;/&#39;, ou &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Nome da base de dados não pode conter &#39;\"&#39;, \";&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;&lt;&#39;, &#39;&gt;&#39;, ou &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Nome do banco de dados pode consistir apenas de caracteres alfanuméricos e os símbolos '#', '_' ou '$'",
    'ERR_DB_PASSWORD' => 'As senhas fornecidas para o administrador da base de dados do SuiteCRM não coincidem. Por favor reinsira as mesmas senhas nos campos respectivos.',
    'ERR_DB_PRIV_USER' => 'Forneça o nome do usuário administrador do banco de dados. O usuário é necessário para a conexão inicial ao banco de dados.',
    'ERR_DB_USER_EXISTS' => 'O nome do usuário da base de dados SuiteCRM já existe -- não é possível criar outro com o mesmo nome. Por favor insira um novo nome do usuário.',
    'ERR_DB_USER' => 'Insira um nome do usuário para o administrador da base de dados do SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Por favor corrija os seguintes erros antes de prosseguir:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'As senhas fornecidas para o usuário da base de dados do SuiteCRM não coincidem. Por favor reinsira as mesmas senhas nos campos respectivos.',
    'ERR_ERROR_GENERAL' => 'Foram encontrados os seguintes erros:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Não é possível eliminar o arquivo:',
    'ERR_LANG_MISSING_FILE' => 'Não é possível encontrar o arquivo:',
    'ERR_LANG_NO_LANG_FILE' => 'Não foi encontrado o arquivo de pacote de idioma em incluir/idioma no interior:',
    'ERR_LANG_UPLOAD_1' => 'Ocorreu um problema com o seu carregamento. Por favor tente de novo.',
    'ERR_LANG_UPLOAD_2' => 'Pacotes de Idiomas devem ser arquivos ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP não pôde mover o arquivo temporário para a Diretório de atualização.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Diretório log fornecida não é válida.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Diretório log fornecida não é editável.',
    'ERR_NO_DIRECT_SCRIPT' => 'Incapaz de processar directamente o script.',
    'ERR_NO_SINGLE_QUOTE' => 'Não é possível usar as aspas simples para',
    'ERR_PASSWORD_MISMATCH' => 'As senhas fornecidas para o administrador do SuiteCRM não coincidem. Por favor reinsira as mesmas senhas nos campos respectivos.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Não é possível editar o arquivo <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Pode continuar esta instalação criando manualmente o arquivo config.php e colar a informação de configuração abaixo no arquivo config.php. No entanto, <strong>deve</strong> criar o arquivo config.php antes de prosseguir para a próxima etapa.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Lembrou-se de criar o arquivo config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Aviso: Não foi possível editar o arquivo config.php. Por favor assegure-se que ele existe.',
    'ERR_PERFORM_HTACCESS_1' => 'Não é possível gravar em ',
    'ERR_PERFORM_HTACCESS_2' => 'o arquivo.',
    'ERR_PERFORM_HTACCESS_3' => 'Se pretende impedir que o seu arquivo log seja acessível via browser, crie um arquivo .htaccess na sua Diretório log com a linha:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Não foi detetada qualquer ligação à Internet.</b>Quando tiver uma ligação, por favor visite <a href="http://www.suitecrm.com/">http://www.suitecrm.com</a> para se registrar no SuiteCRM. Ao revelar-nos um pouco sobre como pretende utilizar o SuiteCRM, poderemos trabalhar na disponibilização das aplicações certas para as suas necessidades.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'O Diretório de sessão fornecida não é uma Diretório válida.',
    'ERR_SESSION_DIRECTORY' => 'O Diretório de sessão fornecida não é uma Diretório editável.',
    'ERR_SESSION_PATH' => 'Path da sessão é obrigatória se pretende especificar a sua própria.',
    'ERR_SI_NO_CONFIG' => 'Não incluiu o config_si.php na raiz do documento, ou não definiu $sugar_config_si em config.php',
    'ERR_SITE_GUID' => 'ID da aplicação é obrigatório se pretende especificar a sua própria.',
    'ERROR_SPRITE_SUPPORT' => "Neste momento não foi possível localizar GD Library, como impacto não será possível usar o CCS.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Aviso: A sua configuração PHP deve ser alterada para permitir o carregamento de arquivos com pelo menos 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Tamanho do arquivo de Carregamento',
    'ERR_URL_BLANK' => 'Forneça o URL base para a instância SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Não foi possível localizar o registro de instalação de',
    'ERROR_MANIFEST_TYPE' => 'arquivo de manifesto deve especificar o tipo de pacote.',
    'ERROR_PACKAGE_TYPE' => 'arquivo de manifesto especifica um tipo de pacote não reconhecido.',
    'ERROR_VERSION_INCOMPATIBLE' => 'O arquivo carregado não é compatível com esta versão do SuiteCRM:',

    'LBL_BACK' => 'Voltar',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_ACCEPT' => 'Eu Aceito',
    'LBL_CHECKSYS_CACHE' => 'Sub-Diretórios Cache Editáveis',
    'LBL_DROP_DB_CONFIRM' => 'O Nome do usuário da Base de Dados fornecido já existe. Pode<br>1. Clicar no botão Cancelar e escolher um novo nome, ou <br>2. Clicar no botão Aceitar e continuar. Todas as tabelas existentes na base de dados serão descartadas.<strong>Isto significa que as suas tabelas e dados serão destruídos.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Componente',
    'LBL_CHECKSYS_CONFIG' => 'arquivo de Configuração SuiteCRM (config.php) Editável',
    'LBL_CHECKSYS_CURL' => 'Módulo cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Diretório Custom Gravável',
    'LBL_CHECKSYS_DATA' => 'Sub-Diretórios de Dados Editáveis',
    'LBL_CHECKSYS_IMAP' => 'Módulo IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Módulo MB Strings',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Sem Limite)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Ilimitado)',
    'LBL_CHECKSYS_MEM' => 'Limite de Memória PHP',
    'LBL_CHECKSYS_MODULE' => 'arquivos e Sub-Diretórios de Módulos Editáveis',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Não Disponível',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'O seu arquivo de configuração php (php.ini) encontra-se em:',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'Versão PHP',
    'LBL_CHECKSYS_IISVER' => 'Versão IIS',
    'LBL_CHECKSYS_RECHECK' => 'Reverificação',
    'LBL_CHECKSYS_STATUS' => 'Estado',
    'LBL_CHECKSYS_TITLE' => 'Aceitação da Verificação do Sistema',
    'LBL_CHECKSYS_XML' => 'Parsing XML',
    'LBL_CHECKSYS_ZLIB' => 'Módulo de Compressão ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Módulo de Manipulação ZIP',
    'LBL_CHECKSYS_PCRE' => 'Biblioteca PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Por favor corrija os seguintes arquivos ou Diretórios antes de prosseguir:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Por favor corrija as seguintes Diretórios de módulo e os arquivos nelas contidos antes de prosseguir:',
    'LBL_CHECKSYS_UPLOAD' => 'Diretório Gravável de carregamento',
    'LBL_CLOSE' => 'Fechar',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'ser criado',
    'LBL_CONFIRM_DB_TYPE' => 'Tipo de Base de Dados',
    'LBL_CONFIRM_NOT' => 'não',
    'LBL_CONFIRM_TITLE' => 'Confirmar Definições',
    'LBL_CONFIRM_WILL' => 'irá',
    'LBL_DBCONF_DB_DROP' => 'Remover Tabelas',
    'LBL_DBCONF_DB_NAME' => 'Nome da Base de Dados',
    'LBL_DBCONF_DB_PASSWORD' => 'senha do usuário da Base de Dados SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Reinserir senha do usuário da Base de Dados SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Usuário do banco de dados SuiteCRM',
    'LBL_DBCONF_SUGAR_DB_USER' => 'Usuário do banco de dados SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Nome do usuário do Administrador da Base de Dados',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'senha do Administrador da Base de Dados',
    'LBL_DBCONF_COLLATION' => 'Collation',
    'LBL_DBCONF_CHARSET' => 'Conjunto de Caracteres',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Configuração avançada da base de dados',
    'LBL_DBCONF_DEMO_DATA' => 'Preencher a Base de Dados com Dados de Demonstração?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Escolher Dados de Demonstração',
    'LBL_DBCONF_HOST_NAME' => 'Nome do Servidor',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instância de host',
    'LBL_DBCONFIG_SECURITY' => 'Por razões de segurança, pode especificar um usuário exclusivo da base de dados para se conectar à base de dados do SuiteCRM. Este usuário deve ser capaz de editar, Atualizar e recuperar dados na base de dados do SuiteCRM que será criada para essa instância. Este usuário pode ser o administrador da base de dados acima especificado, ou você pode fornecer informação nova ou existente do usuário da base de dados.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Forneça um usuário existente',
    'LBL_DBCONFIG_CREATE_DD' => 'Definir usuário para criar',
    'LBL_DBCONFIG_SAME_DD' => 'Igual ao usuário Administrador',
    'LBL_DBCONF_TITLE' => 'Configuração da Base de Dados',
    'LBL_DBCONF_TITLE_NAME' => 'Fornecer Nome do usuário da Base de Dados',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Fornecer informações do usuário de banco de dados',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Senha',
    'LBL_DISABLED_DESCRIPTION_2' => 'Após esta alteração ter sido feita, pode clicar no botão abaixo "Iniciar" para começar a sua instalação.<i>Após a instalação estar concluída, vai querer alterar o valor de &#39;installer_locked&#39; para &#39;true&#39;.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'O instalador já foi executado uma vez. Como medida de segurança, foi desativada uma segunda execução. Se tem a certeza absoluta que deseja executá-lo novamente, por favor vá ao seu arquivo config.php e localize (ou adicione) uma variável chamada &#39;installer_locked&#39; e defina-a como &#39;falso&#39;. A linha deve ficar assim:',
    'LBL_DISABLED_HELP_1' => 'Para ajuda na instalação, por favor visite o SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'fóruns de suporte',
    'LBL_DISABLED_TITLE_2' => 'Instalação do SuiteCRM foi Desabilitada',
    'LBL_HELP' => 'Ajuda',
    'LBL_INSTALL' => 'Instalar',
    'LBL_INSTALL_TYPE_TITLE' => 'Opções de Instalação',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Escolher Tipo de Instalação',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Instalação Típica</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Instalação Customizada</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Requer o mínimo de informação para a instalação. Recomendado para novos usuários.',
    'LBL_INSTALL_TYPE_MSG3' => 'Fornece opções adicionais para definir durante a instalação. A maioria destas opções também está disponível após a instalação nos ecrãs de administração. Recomendado para usuários avançados.',
    'LBL_LANG_1' => 'Para utilizar um idioma no SuiteCRM diferente do idioma padrão (US-English), pode carregar e instalar o pacote de idioma neste momento. Será também possível carregar e instalar pacotes de idiomas dentro da aplicação SuiteCRM. Se quiser ignorar este passo, clique em Próximo.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instalar',
    'LBL_LANG_BUTTON_REMOVE' => 'Remover',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Desinstalar',
    'LBL_LANG_BUTTON_UPLOAD' => 'Carregar',
    'LBL_LANG_NO_PACKS' => 'nenhum',
    'LBL_LANG_PACK_INSTALLED' => 'Foram instalados os seguintes pacotes de idioma:',
    'LBL_LANG_PACK_READY' => 'Estão prontos a ser instalados os seguintes pacotes de idioma:',
    'LBL_LANG_SUCCESS' => 'O pacote de idioma foi carregado com sucesso.',
    'LBL_LANG_TITLE' => 'Pacote de Idioma',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instalando o SuiteCRM agora. Isto poderá demorar alguns minutos.',
    'LBL_LANG_UPLOAD' => 'Carregar um Pacote de Idioma',
    'LBL_LICENSE_ACCEPTANCE' => 'Aceitação da Licença',
    'LBL_LICENSE_CHECKING' => 'Verificando a compatibilidade do sistema.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Verificando o Ambiente',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verificando as Credenciais DB',
    'LBL_LICENSE_CHECK_PASSED' => 'O sistema passou a verificação de compatibilidade.',
    'LBL_CREATE_CACHE' => 'Preparando para Instalar...',
    'LBL_CREATE_DEFAULT_ENC_KEY' => 'Criando chave de criptografia padrão...',
    'LBL_LICENSE_REDIRECT' => 'Será redirecionado dentro de',
    'LBL_LICENSE_I_ACCEPT' => 'Eu Aceito',
    'LBL_LICENSE_PRINTABLE' => 'Versão para Impressão',
    'LBL_PRINT_SUMM' => 'Imprimir Resumo',
    'LBL_LICENSE_TITLE_2' => 'Licença SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'João',
    'LBL_LOCALE_NAME_LAST' => 'Silva',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Ação',
    'LBL_ML_DESCRIPTION' => 'Descrição',
    'LBL_ML_INSTALLED' => 'Data de Instalação',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data de Publicação',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Não Instalável',
    'LBL_ML_VERSION' => 'Versão',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Driver Microsoft SQL Server para PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (extensão mysqli)',
    'LBL_NEXT' => 'Próximo',
    'LBL_NO' => 'Não',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Definir senha do administrador do site',
    'LBL_PERFORM_CONFIG_PHP' => 'A criar arquivo de configuração do SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>A criar a base de dados</b>',
    'LBL_PERFORM_CREATE_DB_2' => '<b>em</b>',
    'LBL_PERFORM_CREATE_DB_USER' => 'criar o nome do usuário e senha da Base de Dados...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Criar dados padrões do SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'criar tarefas agendadas padrão',
    'LBL_PERFORM_DEFAULT_USERS' => 'criar usuários padrão',
    'LBL_PERFORM_DEMO_DATA' => 'Preenchendo as tabelas da base de dados com dados de demonstração (isto pode demorar um pouco)',
    'LBL_PERFORM_DONE' => 'concluído<br>',
    'LBL_PERFORM_FINISH' => 'Concluir',
    'LBL_PERFORM_OUTRO_1' => 'A configuração do SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'está agora completa!',
    'LBL_PERFORM_OUTRO_3' => 'Tempo total:',
    'LBL_PERFORM_OUTRO_4' => 'segundos.',
    'LBL_PERFORM_OUTRO_5' => 'Memória utilizada aproximada: ',
    'LBL_PERFORM_OUTRO_6' => 'bytes.',
    'LBL_PERFORM_SUCCESS' => 'Sucesso!',
    'LBL_PERFORM_TABLES' => 'Criando tabelas de aplicação, tabelas de auditoria e metadata de relacionamento SuiteCRM',
    'LBL_PERFORM_TITLE' => 'Executar Configuração',
    'LBL_PRINT' => 'Imprimir',
    'LBL_REG_CONF_1' => 'Por favor preencha o formulário abaixo para receber anúncios de produtos, novidades de formação, ofertas especiais e convites para eventos especiais da SuiteCRM. Nós não vendemos, alugamos, partilhamos ou distribuímos as informações aqui recolhidas a terceiros.',
    'LBL_REG_CONF_3' => 'Obrigado por se registrar. Clique no botão Concluir para fazer o login no SuiteCRM. Você precisará fazer login pela primeira vez usando o nome de usuário "admin" e a senha que você inseriu na etapa 2.',
    'LBL_REG_TITLE' => 'Registro',
    'LBL_REQUIRED' => '* Campo Obrigatório',

    'LBL_SITECFG_ADMIN_Name' => 'Nome do Administrador da Aplicação SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Reinserir senha do Administrador do SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'senha do Administrador do SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID da Aplicação',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Se Selecionado, deve fornecer um ID de aplicação para substituir o ID auto-gerado. O ID garante que as sessões de uma instância SuiteCRM não são utilizados por outras instâncias. Se tem um cluster de instalações SuiteCRM, todas elas devem partilhar o mesmo ID de aplicação.',
    'LBL_SITECFG_CUSTOM_ID' => 'Forneça o Seu Próprio ID de Aplicação',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Se Selecionado, deve especificar uma Diretório log para substituir o Diretório padrão do log SuiteCRM. Independentemente do local do arquivo, o seu acesso por web browser será restrito através de um redireccionamento .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilizar uma Diretório Log Personalizada',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Se Selecionado, deve fornecer uma pasta segura para armazenar informação de sessão do SuiteCRM. Isto pode ser feito para evitar a vulnerabilidade dos dados da sessão SuiteCRM em servidores partilhados.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utilizar uma Diretório de Sessão Personalizada para o SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Por favor corrija os seguintes erros antes de continuar:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Diretório de Log',
    'LBL_SITECFG_SESSION_PATH' => 'Path para a Diretório de Sessão&lt;br&gt;(deve ser editável)',
    'LBL_SITECFG_SITE_SECURITY' => 'Selecione opções de segurança',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Se Selecionado, o sistema irá verificar periodicamente versões Atualizadas da aplicação.',
    'LBL_SITECFG_SUITE_UP' => 'Verificar Atualizações Automaticamente?',
    'LBL_SITECFG_TITLE' => 'Configuração do Site',
    'LBL_SITECFG_TITLE2' => 'Identificar a Sua Instância SuiteCRM',
    'LBL_SITECFG_SECURITY_TITLE' => 'Segurança do site',
    'LBL_SITECFG_URL' => 'URL da Instância SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Enviar Estatísticas de Utilização Anonimas?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Se Selecionado, o SuiteCRM enviará estatísticas <b>anonimas</b> sobre a sua instalação para a SuiteCRM Inc. cada vez que o seu sistema procurar por novas versões. Esta informação irá ajudar-nos a entender melhor como a aplicação é utilizada e guia de melhorias ao produto.',
    'LBL_SITECFG_URL_MSG' => 'Insira o URL que será usado para acessar à instância SuiteCRM após a instalação. O URL também será utilizado como base para os URLs nas páginas da aplicação SuiteCRM. O URL deve incluir o servidor web ou o nome da máquina ou o endereço IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Insira um nome para o seu sistema. Este nome será exibido na barra do título do browser quando os usuários visitarem a aplicação SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Após a instalação, necessitará de utilizar o administrador SuiteCRM (nome do usuário = admin) para acessar à instância SuiteCRM. Insira uma senha para este usuário administrador. Esta senha pode ser alterada após o login inicial.',
    'LBL_SITECFG_COLLATION_MSG' => 'Selecionar configurações do Collation. Estas configurações criarão as versões com seu idioma. No caso de seu idioma não precisar de configurações especiais use o padrão.',
    'LBL_SPRITE_SUPPORT' => 'Suporte a Sprite',
    'LBL_SYSTEM_CREDS' => 'Credenciais do Sistema',
    'LBL_SYSTEM_ENV' => 'Ambiente do Sistema',
    'LBL_SHOW_PASS' => 'Mostrar senhas',
    'LBL_HIDE_PASS' => 'Ocultar senhas',
    'LBL_HIDDEN' => '<i>(ocultas)</i>',
    'LBL_STEP1' => 'Etapa 1 de 2 - Requisitos de Pré-Instalação',
    'LBL_STEP2' => 'Etapa 2 de 2 - Configuração',
    'LBL_STEP' => 'Passo',
    'LBL_TITLE_WELCOME' => 'Bem-vindo ao SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Está pronto a instalar?',
    'REQUIRED_SYS_COMP' => 'Componentes de Sistema Necessários',
    'REQUIRED_SYS_COMP_MSG' =>
        'Antes de começar, certifique-se que possui versões compatíveis dos seguintes componentes do sistema:<br>
<ul> 
<li> Base de Dados/Sistema de Gestão de Base de Dados (Exemplos: MySQL, SQL Server, Oracle)</li>
<li> Servidor Web (Apache, IIS)</li> 
</ul>
Consulte a matriz de compatibilidade nas notas de lançamento para identificar componentes do sistema compatíveis com a versão do SuiteCRM que está a instalar.<br>',
    'REQUIRED_SYS_CHK' => 'Verificação Inicial do Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
        'Quando iniciar o processo de instalação, será executada uma verificação do sistema no servidor web no qual os arquivos do SuiteCRM estão localizados a fim de certificar-se de que o sistema está configurado corretamente e tem todos os componentes necessários para concluir com êxito a instalação. <br><br>
O sistema verifica o seguintes: <br>
<ul>
<li><b>Versão do PHP</b> &#8211; deve ser compatível com o aplicativo</li>
<li><b>Variáveis de sessão</b> &#8211; deve estar funcionando corretamente</li> 
<li><b>MB Strings</b> &#8211; deve ser instalado e habilitado no php. ini</li> 
<li><b>Suporte ao banco de dados</b> &#8211; deve existir para MariaDB, MySQL ou SQL Server</li> 
<li><b>config. php</b> &#8211; deve existir e deve ter as permissões apropriadas para torná-lo gravável</li> 
<li>Os seguintes arquivos de SuiteCRM devem ser graváveis: 
<ul>
<li><b>/custom</li> 
<li>/cache</li> 
<li>/módulos</li> 
<li>/upload</b></li></ul></li></ul> 
Se a verificação falhar, você não poderá prosseguir com a instalação.
Uma mensagem de erro será exibida, explicando por que seu sistema não passou na verificação.
Depois de fazer as alterações necessárias, você pode submeter a verificação do sistema novamente para continuar a instalação. <br>',


    'REQUIRED_INSTALLTYPE' => 'Instalação Típica ou Personalizada',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Após a execução da verificação do sistema,pode escolher entre a instalação Típica ou Personalizada.<br><br> Para ambas as instalações <b>Típica</b> e <b>Personalizada</b>, necessitará de saber o seguinte:<br> <ul> <li> <b>Tipo de base de dados</b> que irá alojar os dados do SuiteCRM <ul><li>Tipos de base de dados compatíveis: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li> <li> <b>Nome do servidor web</b> ou máquina na qual se encontra a base de dados <ul><li>Pode ser <i>servidor</i> se a base de dados está no seu computador local ou está no mesmo servidor web ou máquina que os seus arquivos SuiteCRM.<br><br></li></ul></li> <li><b>Nome da base de dados</b>onde pretende alojar os dados do SuiteCRM</li> <ul> <li> Talvez já tenha uma base de dados existente que pretenda usar. Se fornecer o nome de uma base de dados existente, as tabelas na base de dados serão descartadas durante a instalação quando o esquema para a base de dados do SuiteCRM for definido.</li> <li> Se ainda não tiver uma base de dados, o nome que fornecer será usado para a nova base de dados que é criada para a instância durante a instalação.<br><br></li> </ul><li><b>Nome do usuário e senha do administrador da base de dados</b> <ul><li>O administrador da base de dados deverá ser capaz de criar tabelas e usuários e editar a base de dados.</li><li>Talvez seja necessário entrar em contacto com o administrador da base de dados se esta não estiver localizada no seu computador local e/ou se você não for o administrador da base de dados.<br><br></ul></li></li><li> <b>Nome e senha do usuário da base de dados SuiteCRM</b> </li> <ul> <li> O usuário pode ser o administrador da base de dados, ou pode fornecer o nome de outro usuário da base de dados. </li> <li> Se pretender criar um novo usuário da base de dados para este fim, será capaz de fornecer um novo nome do usuário e senha durante o processo de instalação, e o usuário será criado durante a instalação. </li> </ul></ul><p> Para a configuração <b>Personalizada</b>, também precisa de saber o seguinte: <br> <ul> <li> <b>URL que será utilizado para acessar à instância SuiteCRM</b> depois de instalado. Esse URL deve incluir o servidor web ou o nome da máquina ou o endereço IP.<br><br></li> <li> [Opcional] <b> Path para a Diretório de sessão</b> se deseja usar uma Diretório de sessão personalizada para informação SuiteCRM de modo a prevenir a vulnerabilidade dos dados de sessão em servidores partilhados.<br><br></li> <li> [Opcional] <b>Path para uma Diretório log personalizada</b> se pretende substituir a Diretório log padrão do SuiteCRM.<br><br></li> <li> [Opcional] <b>ID da Aplicação</b> se pretende substituir o ID auto-gerado que garante que a sessões de uma instância SuiteCRM não são usadas por outras instâncias.<br><br></li> <li><b>Definição de Caracteres</b> mais utilizados na sua zona.<br><br></li></ul> Para informações mais detalhadas, por favor consulte o Manual de Instalação.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Por favor leia as seguintes informações importantes antes de prosseguir com a instalação. As informações ajudarão a determinar se está ou não pronto para instalar a aplicação neste momento.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Escolha a sua linguagem</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Assistente de Configuração',
    'LBL_WIZARD_TITLE' => 'Assistente de Configuração do SuiteCRM: ',
    'LBL_YES' => 'Sim',

    'LBL_PATCHES_TITLE' => 'Instalar Últimos Patches',
    'LBL_MODULE_TITLE' => 'Instalar Pacotes de Idiomas',
    'LBL_PATCH_1' => 'Se pretende ignorar este passo, clique em Próximo.',
    'LBL_PATCH_TITLE' => 'Patch do Sistema',
    'LBL_PATCH_READY' => 'Os patches seguintes estão prontos a ser instalados:',
    'LBL_SESSION_ERR_DESCRIPTION' => "O SuiteCRM baseia-se em sessões PHP para armazenar informações importantes enquanto estiver conectado a este servidor web. A sua instalação PHP não tem as informações de sessão corretamente configuradas. <br><br>Um erro de configuração comum é o de que a diretiva <b>'session.save_path'</b> não está a apontar para um Diretório válido. <br> <br> Por favor corrija a sua <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>configuração PHP</a> no arquivo php.ini localizado aqui em baixo.",
    'LBL_SESSION_ERR_TITLE' => 'Erro de Configuração das Sessões PHP',
    'LBL_SYSTEM_NAME' => 'Nome do Sistema',
    'LBL_COLLATION' => 'Configurações de Colação',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Forneça um Nome do Sistema para a instância SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Selecione um arquivo patch do seu computador local',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Versão 5 ou superior do PHP é necessária.',
    'LBL_MINIMUM_PHP_VERSION' => 'Versão PHP mínima necessária é 5.1.0. Versão PHP recomendada é 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(A sua versão PHP Atual é',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Versão PHP recomendada é 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Modo de Compatibilidade Retroativa do PHP está ligado. Defina zend.ze1_compatibility_mode como Desligado para prosseguir',
    'LBL_STREAM' => 'PHP permite o uso de stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informação sobre a nova conta',
        'type' => 'sistema',
        'description' => 'Este modelo é usado quando o administrador do sistema envia uma nova senha para um usuário.',
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Segue seu nome de usuário e uma senha temporária:</p><p>Nome de Usuário: $contact_user_user_name </p><p>Senha: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Após fazer login usando a senha acima, você deverá redefinir a senha para uma de sua própria escolha.</p>   </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Segue seu nome de usuário e uma senha temporária::
Nome de Usuário: $contact_user_user_name
Senha: $contact_user_user_hash

$config_site_url

Após fazer login usando a senha acima, você deverá redefinir a senha para uma de sua própria escolha.',
        'name' => 'E-mail de senha gerada pelo sistema',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Redefinir sua senha',
        'type' => 'sistema',
        'description' => "Este modelo é usado para enviar um link ao usuário para clicar e redefinir sua senha.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>Você solicitou recentemente em $contact_user_pwd_last_changed para redefinir sua senha. </p><p>Clique no link abaixo para redefinir sua senha:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Em $contact_user_pwd_last_changed você solicitou para redefinir sua senha.

Clique no link abaixo para redefinir sua senha:

$contact_user_link_guid',
        'name' => 'E-mail para senha esquecida',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Código da autenticação em dois fatores',
        'type' => 'sistema',
        'description' => "Este modelo é usado para enviar ao usuário um código para autenticação em dois fatores.",
        'body' => '<div><table border=\\"0\\" cellspacing=\\"0\\" cellpadding=\\"0\\" width="550" align=\\"\\&quot;\\&quot;center\\&quot;\\&quot;\\"><tbody><tr><td colspan=\\"2\\"><p>O código da autenticação em dois fatores é <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\\"2\\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'O código da autenticação em dois fatores é $code.',
        'name' => 'Email da autenticação em dois fatores',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nome De:',
    'LBL_FROM_ADDR' => 'Endereço De:',

    'LBL_WIZARD_SMTP_DESC' => 'Forneça dados da sua conta de e-mail e Senha para o servidor de e-mail de saída padrão. Os Usuários vão receber e-mails do SuiteCRM vindos desta conta de e-mail.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Outro',
    'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Porta SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizar Autenticação SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Ativar SMTP sobre SSL',
    'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
    'LBL_GMAIL_SMTPPASS' => 'senha Gmail',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permitir que Usuárioes usem esta conta para enviar e-mail:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quando esta opção for selecionada, todos os Usuários serão capazes de enviar e-mails usando a mesma conta que o sistema usa para enviar notificações e alertas. Se a opção não for selecionada, os Usuários podem ainda utilizar o servidor de correio de saída, se assim o configurarem nas suas definições.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'senha Yahoo! Mail',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID do Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'senha Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'usuário Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',


    'LBL_MAIL_SMTPUSER' => 'Usuário SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Marca',
    'LBL_WIZARD_SYSTEM_DESC' => 'Insira o nome de sua organização e logo para a marca do seu SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nome:',
    'SYSTEM_NAME_HELP' => 'Nome que aparece na barra de título do seu navegador.',
    'NEW_LOGO' => 'Selecionar um novo logotipo (212x40)',
    'NEW_LOGO_HELP' => 'O formato do arquivo de imagem pode ser .png ou .jpg. A altura máxima é de 170px, e a largura máxima é de 450px. Se imagem carregada for maior em qualquer uma dessas dimensões, a mesma será redimensionada para esses limites.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Carregar',
    'CURRENT_LOGO' => 'logotipo atual',
    'CURRENT_LOGO_HELP' => 'Essa logo é exibida no centro da tela de login da aplicação SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Seleção de Cenário',
    'LBL_WIZARD_SCENARIO_DESC' => 'Permite a adaptação dos módulos exibidos com base em suas necessidades.  Cada um dos módulos pode ser ativado após a instalação usando a página de administração.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'No momento, não há cenários definidos no arquivo de configuração (config. php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Definições Locais do Sistema',
    'LBL_WIZARD_LOCALE_DESC' => 'Especifique o fuso horário e a forma como deseja que datas, moedas e nomes apareçam no SuiteCRM. Estas serão as definições padrão. Cada Usuário poderá definir suas próprias preferências.',
    'LBL_DATE_FORMAT' => 'Formato da Data:',
    'LBL_TIME_FORMAT' => 'Formato da Hora:',
    'LBL_TIMEZONE' => 'Fuso Horário:',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo da Moeda:',
    'LBL_CURRENCY_ISO4217' => 'Código de Moeda ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separador 1000s',
    'LBL_DECIMAL_SEP' => 'Símbolo decimal',
    'LBL_NAME_FORMAT' => 'Formato do Nome:',
    'UPLOAD_LOGO' => 'Por favor aguarde, carregando o logotipo...',
    'ERR_UPLOAD_FILETYPE' => 'Tipo de arquivo não permitido, por favor carregue um jpeg ou png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ocorreu um erro desconhecido da carga do arquivo.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'O arquivo carregado excede a diretiva upload_max_filesize no php.ini',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'O arquivo carregado excede a diretiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'O arquivo carregado foi apenas parcialmente carregado.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Nenhum arquivo foi carregado.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Pasta temporária em falta.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Falha ao escrever o arquivo para o disco.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Uma extensão PHP parou a carga do arquivo. O PHP não fornece uma maneira de determinar qual extensão fez com que a carga do arquivo parasse.',

    'LBL_INSTALL_PROCESS' => 'Instalar...',

    'LBL_EMAIL_ADDRESS' => 'E-mail:',
    'ERR_ADMIN_EMAIL' => 'O endereço de e-mail do Administrador está incorreto.',
    'ERR_SITE_URL' => 'URL do Site é necessário.',

    'STAT_CONFIGURATION' => 'Configuração relacionamentos...',
    'STAT_CREATE_DB' => 'Criar banco de dados...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Criar configurações padrões...',
    'STAT_INSTALL_FINISH' => 'Instalação finalizada...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Processo de instalação finalizado, <a href="%s"> Por favor, logue....</a>',
    'LBL_LICENCE_TOOLTIP' => 'Por favor, primeiramente, aceite a licença',

    'LBL_MORE_OPTIONS_TITLE' => 'Mais Opções',
    'LBL_START' => 'Iniciar',
    'LBL_DB_CONN_ERR' => 'Erro no banco de dados',
    'LBL_OLD_PHP' => 'Versão antiga do PHP detectada!',
    'LBL_OLD_PHP_MSG' => 'A versão PHP recomendada para instalar o SuiteCRM é a %s <br /> Embora a versão do PHP mínima necessária é a %s, não é recomendada devido ao grande número de bugs corrigidos, incluindo correções de segurança, lançadas nas versões mais modernas. <br /> Você está usando a versão %s do PHP, que é EOL: <a href="http://php.net/eol.php"> http://php.net/eol.php</a>. <br /> por favor, considere atualizar sua versão do PHP. Instruções em <a href="http://php.net/migration70"> http://php.net/migration70</a>.',
    'LBL_OLD_PHP_OK' => 'Estou ciente dos riscos e desejo continuar.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Usuário',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nome da Base de Dados',
    'LBL_DBCONFIG_MSG3' => 'Nome da base de dados que irá conter os dados para a instância SuiteCRM que está prestes a instalar:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nome do Servidor',
    'LBL_DBCONFIG_MSG2' => 'Nome do servidor web ou máquina (host) na qual o banco de dados está localizado (como www.mydomain.com). Se instalando localmente, é melhor usar \'localhost\' do que \'127.0.0.1\', por motivos de desempenho.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'O nome do usuário e senha de um administrador da base de dados que possa criar usuários e tabelas de base de dados e que possa editar a base de dados é necessário para configurar a base de dados do SuiteCRM.'
);
