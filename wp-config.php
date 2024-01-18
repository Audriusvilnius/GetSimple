<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'getsimple');

/** Database username */
define('DB_USER', 'getsimple');

/** Database password */
define('DB_PASSWORD', '1234567');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '=c%W]V_$3aQn`<}:o3Obl-owy>H<Rj5bQEVwjwao=;S^~P,YV^>R-uh;_/kc3UY4');
define('SECURE_AUTH_KEY', 'v=@lN(hfnu>JXi;Ul5.k?#8QH=2S;|fC^<.%>au2_b}:l > yt%W%Wo21^!Ds5E9');
define('LOGGED_IN_KEY', '@zUsJeo/%WO)x{+LSZ3ULIZGPu{+59h@_GDq92}ghf/wO_-a+ubni1[Eyg589%=:');
define('NONCE_KEY', '7#FT-|F5*M;cBI<ob4vAR8K72yZ}&%[TgycOn]6?Vzn^Z>s_|Qbn>LnA,Az r#Ha');
define('AUTH_SALT', '>zl<*Y<kY5JK324S1fM/>_MFqTXSC{`RkI4+|#p_60J6R~8Aub>d@50RLo$Q3,H.');
define('SECURE_AUTH_SALT', 'gX%ck;6n}SCV?iaF)W%8#EX>*H![|/}mN0D(1lQip5<aV$l~+q?$1Uly.2|]05r_');
define('LOGGED_IN_SALT', 'K G,xoS11JTJdDX74$z1JZ3M::yQAjbu=p=Cr=?N^4Ctv?N7.vE]V->C `eu.~`,');
define('NONCE_SALT', 'WJtk{pM9ury*VO1Qvcui?41@]G,mG<z*@ueX:4`)p_^eX~v9-Oh~9y1GgTi&)Xae');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gs_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


/* That's all, stop editing! Happy blogging. */
define('FS_METHOD', 'direct');