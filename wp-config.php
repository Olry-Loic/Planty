<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'g=[1[U0>|w^*n_6<)a9yb}} sXMT2gY 7`j[Xa$-JxmsHEa2=>N]J=oI.[v,O0/E' );
define( 'SECURE_AUTH_KEY',  '8a19@tjdF-2Yo:uy+|m4d[@&wWy/4%[+B6F8C(a@&4wUrxit0<s;C60RrViMFNPr' );
define( 'LOGGED_IN_KEY',    'QBWv,mnj]z{_*#m[i[[p$9gIo5M_?tWB{@@ F+e[n}4p5<T2;zcajz;H5>GPfVZE' );
define( 'NONCE_KEY',        '{$:gdj4^$|sotG@?3&fL*vNN){+tk_K#8!}RGFw2RO1^bdJ5d~PYth[GC|Y<WX[|' );
define( 'AUTH_SALT',        'B[vNu;|] R5t+6tPDzpTTK1f`,Y+@.4|x3!GS5KlU+YAjjZPxg7U>gU1Of?UTI;k' );
define( 'SECURE_AUTH_SALT', 'rm@er#r%Xd;`RP6wVVZ~=iDWP-C;W6}+V7?-=P<YYZ[C#AebONd/)DKx8u[k1-M*' );
define( 'LOGGED_IN_SALT',   '[*%UsSoCU+%UQ,gFe@F&^BdKVdbr)i}y,dY[4JX>J47xIb-sR;d#D=4]]S8|._T7' );
define( 'NONCE_SALT',       '+_d`6mw[reUax*YbI}gaOHsV#+Fgz.{9fC;_psBg=>Y,*][c/@:Yp8A^d1Ck?kx,' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
