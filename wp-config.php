<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'intellcap' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'StqqrW*4:x?.c-x#WuRdp) OyRqG=P!#2g5F72Xgr}Or#G>35;-[?aWNiQP218u|' );
define( 'SECURE_AUTH_KEY',  'o9I:)XC>19hRSM?Ss|cP>$%hm.!Dh:}PMvX}lCP&wMEz%^m@ypaIc%b+^`t2J)p@' );
define( 'LOGGED_IN_KEY',    'zWwFFL8P0Q$%u{<8b!x2{s:r5xD6`eP|YPJig7b%kuiZ2A-JA|7x8y:QH#b{LI{H' );
define( 'NONCE_KEY',        'cWE}}ak7cosND`4st;]l~@e^0_i18~.6?Z/O7! qUoA`{^}(SPrzb_0orFrmUdRa' );
define( 'AUTH_SALT',        'F5[T-t{bOe3y~5f 06Qjf?8nR@)bP&sA(?^%&OViU@VSSBI^wXdt.VuaUMop]4S,' );
define( 'SECURE_AUTH_SALT', 'WbGMX3xQ9]_M@7ukfugGwctJZX@Nf}rv2YaB)xpZ$qEpTl`F{/bZno;KBCJ)^kmb' );
define( 'LOGGED_IN_SALT',   'uEaj{UO;A#mz %:SmBOQ%Zpy{h2VB|/9}v`Y58r@q@odObnX/P*Tjs}#D|KO9-oU' );
define( 'NONCE_SALT',       'nFH,`[X_kFY./>du$zinc2%A5bB}O4YYHh_Sfi+Pj,/qtES6oH!v~f1mi[;Em(_@' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
