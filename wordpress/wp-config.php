<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'xtrem');

/** MySQL database username */
define('DB_USER', 'xtrem');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=hT}}_]u05LdwOiF$~ z|b@V:0JCnDn1/l<0|4eqpa]={[eA^Q78HP_0WKfMEU)f');
define('SECURE_AUTH_KEY',  '@>E5u[o=!(.U H#]#3wgpc7.TL3dbNK_XC%7guOZ@hJfyX#WmH]5*sbtE[}Q;6hQ');
define('LOGGED_IN_KEY',    '8Vz$i,)%AsD>j0zz$^a${yn#2RQjjn%5Pw~r#lLED*EDTX##E%$>O2P-VO46^yHv');
define('NONCE_KEY',        '.<nE9 8e?7a>;2.M!m$LAno2$w{T9ZH`5duT/@@{x|1mZPr2Ub#rOlrl>v32m0#K');
define('AUTH_SALT',        'vkH,=[$t};`Y/SYeX!I/G6x2hGj?u*j[>,3,1 fw1}Tn7H|U!l{3C*IZCDC}.8CJ');
define('SECURE_AUTH_SALT', ',m0oK2RB/cTW.7cSbEG`)RfPBtTc^J-obHt#r89Jc$9D;AW!:{+/o{jEX.5;j1I*');
define('LOGGED_IN_SALT',   'J#JEt=L`*#Nf`P K1,yK`h#9:DygYXLKHMAl$*}k&ypq<0MS$q.;cFB@w)DX-~eb');
define('NONCE_SALT',       '@@GfGYY>z*HlPp}W<@)&[CO16fK{waF!,k!2Vr~|K/54mdqYV5{=Ea+~dyvLJLcN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
