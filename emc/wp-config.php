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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'emc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9m{6[iNLrnNeU3y&:5Z-wLBM:;|NJ)Dia2uy&i A.6V:a;]$ubxGbERJj9?o7ELa' );
define( 'SECURE_AUTH_KEY',  'b(m3jL{ca3yekTLFRR$/mgo4ukHvEygKblZDe5-H<tFTql{Uzsm/.A!(N{w$M;@+' );
define( 'LOGGED_IN_KEY',    'QI) Ov pWTUQ7^dD-m!hS<d.65{E@feZ!n;<{AI?K]<<~VZ7<LDNB8=Qr7M <m.J' );
define( 'NONCE_KEY',        '.`K8m2/9o7avyIiZ<tR.,o;wjc2#}>(kI!O2NaNPuOCg?3dY`oTC2@dcC28jk.MF' );
define( 'AUTH_SALT',        '(-9~{5>R2`cxLl;/WS&+o*$3wTK?fP`cPtT]Q h:r7/z+Vh]h^Fr*53Q!F$MA8Oq' );
define( 'SECURE_AUTH_SALT', 'GEWMag:Cw<Cdh<^be[j3ah*g &!y5RcjM;gOAR_}nfa!9N($p~U3wBNOGIjubC+E' );
define( 'LOGGED_IN_SALT',   'k!w0{4(gp50e2Q6u^bNwQw})?d3<?Z0zP)!oVim)9,JG<s3cNoYfZ?C`KI%KWlIr' );
define( 'NONCE_SALT',       '*2AIWT?Yv>CXYPg~@*lPDt>@(Ld4VgAmd{zu<6FQ[Bk{nKE Mz39Lq&Z,.#i!Kgm' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
