<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'zaapery' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F,;SNhBgeu8FBM%i;B(VlQrp:j&r}uL<qz$UzUy:<dO7=H@*T6RAt/o?(*(f~5L%' );
define( 'SECURE_AUTH_KEY',  '$Md^u|/(9X)cct~ FLK?/:hRZtm9uLR^6Cf>_Ienvo,v#?eVGvRtz4$[%3a?4PPO' );
define( 'LOGGED_IN_KEY',    'FL*g87~/l1##nxuw3VrT-lKE]PvZ~?|~ Umr?k&Z/DCGFf+^Rk17SASgM#n!zmBf' );
define( 'NONCE_KEY',        '[ [DL`q,kp6stg~+?xIg{tWu?:Ukgn>P%v_(4H=m`L bCg>bpf-`8hoSJ0NPB>->' );
define( 'AUTH_SALT',        '&>cmfPk$=jo0[r3S:fokqW>FyY0K$i1Ja3(A@!48l/H8jeS-PwzFgsPLfNd?V0Sm' );
define( 'SECURE_AUTH_SALT', 'H@Z!X%,]9bb^]R$]Y0=</zJU+@~;]#$Ylt-^q-~CsycQLp+LqJ?!BNUAB-#;;/Nl' );
define( 'LOGGED_IN_SALT',   '}oFW?MN=o8 ^>]^f! Tc]f1}rS4P]kTctvl84Z|Sdz;b:ngIRex:(TR7@dkS<m=b' );
define( 'NONCE_SALT',       'YwmeSw_E^DwTcsJ3fSe%#@!Jss_Z/,iTQwA72uksvprRkf%,+wnPqj?+HN7.>1<-' );
define( 'DISALLOW_FILE_EDIT', true );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
