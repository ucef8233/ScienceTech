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
define( 'DB_NAME', 'stage' );

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
define( 'AUTH_KEY',         '*2O)*O@q M^k0}R!NCT.v2,t$ OK49;lWY6n7-K]n4y.T?d ps@8&2]+a!rM{1kU' );
define( 'SECURE_AUTH_KEY',  '#o:bZ*L{BJOxxrQ=Qq%WUjY*9bb;-x ju8Ad.q((kc!-Wa$,89,oFxZvuIEuvibR' );
define( 'LOGGED_IN_KEY',    'SFqAs]MJofc4}=GsFO1i{A:)d+)*V9SZjhY+{>593o_lx(ZpseCRk3hH#CGV?6X2' );
define( 'NONCE_KEY',        'Zn`,1peh1cnEAj8O_{5^x:IX)4ZqB,7DcVt@)2E4AA}c)Ry0= /^@*5-f5/7Xs{]' );
define( 'AUTH_SALT',        '5rFL]DWk>]IOu1aWOdst};QMb2_:syty]vTvl>a*9NqkS*unFINP!hUO4kp.Pa41' );
define( 'SECURE_AUTH_SALT', 'Orb@=,,o4q/a@U~gJLfYyk2;;6pYc<QwJ1i5%!j>E[gR.5~p;a l0:;TBJQa3$}@' );
define( 'LOGGED_IN_SALT',   'h1;J5~gM7Cf$<)a3PhF<J2h9frs@*#Ox%nv2~@DWu*/[lCDe2coVS&(68CF/nH5%' );
define( 'NONCE_SALT',       '(8dv=/BfC}K$Qbk*t7{H7.e*4)Ik,%:e<txMIviKlJ0{+fN@XlM{a+?fK[CjcL?N' );
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
