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
define( 'DB_NAME', 'ilcproject_db' );

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
define( 'AUTH_KEY',         '~S&Q5A.8c8->s|.k^p_ T_!kSxrjf#_.Xl.NOK5#Qgc)Zz#:tr:lv]W)Nx X/%/K' );
define( 'SECURE_AUTH_KEY',  ';<`]h!:@bmtA$R1OkS@de%(Q*{c;,v@@glAo:@T12+2kGG8]#L*>O?e?G+3AXKD!' );
define( 'LOGGED_IN_KEY',    '@cK(}yg0Z{:j.HTSuKUsQvcwJi_J,mc{KrZ6MKV1;P0`j$D,zbA0?CFuPV<J_2F^' );
define( 'NONCE_KEY',        '!Sb4qqhqMjCoo?N +`7,lhob]8Q].Ln<~yVC=#VP[kAzr0-.s7S^sBD&8WmoTH%-' );
define( 'AUTH_SALT',        'AKmMA{x]j-(`BnUVS>FFmi!K ?JN(!Mz7r^Ehc(/lipxEosW@9bB;_x#:FE_G{aC' );
define( 'SECURE_AUTH_SALT', 'e`[:=wpgy:2& q~h}P9}x0y{my)$f6<9&{Ar(&YFd0O>~cVsqtv=>~]zx/]DNDA#' );
define( 'LOGGED_IN_SALT',   'sLDf*j[1/tS4u4w1.]AQZJ0)[6@].Dr}8|~BbBza|MGNwUp_%,N-5Wml8![OOo[!' );
define( 'NONCE_SALT',       '-JR3$MwVVbmve`iw<2TeK-aON ;k$MH-6Y}sN6-Oh`votOs2$K&aUsytpY(%Bm)=' );

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
