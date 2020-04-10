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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         ' wyZ^K2-}!o#UT|Qy 6RKE`XMC7*`Vlk$_I,B=*H@`? PS8O)lfi.T]ZQja4wCXb' );
define( 'SECURE_AUTH_KEY',  '@]M:*71cHo7$T/#HP/N]R;YGz*z)lrIV*tslJ>YFxv@A{@TZU$Euynn.Q9Q]}X=0' );
define( 'LOGGED_IN_KEY',    'G!3O~]5G_j8M6JX:(8+Adif(.TBI6=C|^6WUrdPW<ib8|0LwE-=+gkePn<!zrb2T' );
define( 'NONCE_KEY',        '.;tEqRCe61J,rke2f r6.PW$)*OWnhdKJ@zG+:eMiDI<MQ5V&iIzbJLg0%,ctLJ/' );
define( 'AUTH_SALT',        't@u|xT:.%R/%USs$4h6g:F,>&`Nw1r5lXqWa%@sV0.PPIs(iFE1ox&f$a3(/wY.S' );
define( 'SECURE_AUTH_SALT', 'bv1|-&|L5>~Kq?ebwK?7=Ho#uekH)GvMab}OyKO|-qn^_cB2UJo)HgZd6o*Obn_:' );
define( 'LOGGED_IN_SALT',   '-6TQiyBN4X[lVl0lcXUU:W%LVgHFfdPmhSFr_E+)78>odr(wGWrvrLwDZ(%xi26o' );
define( 'NONCE_SALT',       '}^)rg71YZGR~/)l6_E_(X??` Vt;WipZ.a|5k~P-sU6F7Ykd5HM6CbE}mxZxWIz*' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
