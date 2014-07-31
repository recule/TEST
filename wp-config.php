<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/N5rrI0V*EcV9(pu3ny@GD>SSf4/|%6=+GaXj?9]U<+,}U8I)35{^|l&5f4C33wU');
define('SECURE_AUTH_KEY',  'EB+_3VWiK jIp&QaRwKpZy+s7,Zh@-S{P.Z|TaxWqF6A|V)/QTKii#I)/mIfe5rh');
define('LOGGED_IN_KEY',    'S3-pS]|qQL-r3iHDN0,bS&*hd-@ (>VQ*/j|^yC~0Ue,+2;!!pm5((uxq][h*T<h');
define('NONCE_KEY',        '$Y,Y0o4>S[~l3?[N$8S~`q1r7FSCi=-s9&Sr9 5Rm2W[*f|jZRPJz@vwuc<@D7W6');
define('AUTH_SALT',        'Zb.`Vi=PX}kMkQ9+tCs`wg+WNuk].d_@#((c4>3(,o^@<$B!ufY!2yy7YG|DYm/4');
define('SECURE_AUTH_SALT', 'et?hY^Ab~POJ:J7;e&@h]$%(.Qgn+-7)3Au`7--Z*t:U10fU74C0-X~jvv:&>iGi');
define('LOGGED_IN_SALT',   'LcfS-wXM`=!x?3P!$5nng-Ma*-/p&%^K8x!lyL>>Kz`+:F%cm,mf!T[/<ke<*RWA');
define('NONCE_SALT',       'F!} @C;;VJ||`plcASGAg.?@>+@oJ}(3s8o>7MnD-fN{s5z>4>AcX`TI3OF$wwNu');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');