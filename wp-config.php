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
define('DB_NAME', 'wp-project-one');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '6|vxtTK#j[,T_ JH|xBdGGs#6`kf0Z#iW^$];0hl[H2$/Pj9GVbu|+-EdMjMZ][t');
define('SECURE_AUTH_KEY',  'TTK}oBFEsQ9fCH$JfIQ/$+nM$*uCEpr.m^I96Q&AY1U)P qAJJ#N4T`bWt9MTj42');
define('LOGGED_IN_KEY',    '.%DxIl5&J=H&UOyi/*M>bY_0mQO4@r,A#U5u%Pt.L5)[Nnhs0>pB.;7*85Z&fJ`6');
define('NONCE_KEY',        'RFW(P7P8xjOJTHd@:!*]IMm{Q+RMLPPM*nD^a~%[.+zr+6>36!stN}|ZbYN{7nHy');
define('AUTH_SALT',        'K$%zjxvwH]l-`:3i~IXGR,rxCPeCGNeLhKAL8?A~J=X,41x[<@I=Q<b#eFr~vY4N');
define('SECURE_AUTH_SALT', '~|c[q0D=1t;6#!X/E:biJ=O1;j}S5N)nX_LHk3M4>R#1_?~<|[]4YA,{/J1r#Gh8');
define('LOGGED_IN_SALT',   'DrD3YRrnd-wGu.WG1~1]_q:c}Vuy-fLe)[KJ?}G&|i]yc_(Z*Qg3@[21]opiwrm~');
define('NONCE_SALT',       '@,q9C,Yq[E;,7M9~Fiu;$8Sm~x3!oHJ{3fqX2GHtaF;hI@21!`Y!&?z*i;LdRHS#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thc_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
