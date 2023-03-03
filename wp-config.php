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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '(}f,,r(nuu~f_R$G&tkKoy Ua!V#v |j@XGuSy1H3t.wVXWnL!tWLQ(,h]gIm@=X' );
define( 'SECURE_AUTH_KEY',  'E#fF6jY`p<be!@Nb~2{umXVPz{vnYwp%DHWZj>3Bym@}s^u)UupId[m-R)h!O?#]' );
define( 'LOGGED_IN_KEY',    '}Dgtg&y9u35Irap_!@ltU5=q[c43%}ho.B0qM6q]o]qi=*.U*x6&J+iABr~ks]+i' );
define( 'NONCE_KEY',        '*;.V<!*z*soHz|Hz/o0s2UN_0<Gzh:wFEonqbwmE)xk6LO0eyqA,C.O@S%2tI|J_' );
define( 'AUTH_SALT',        '=O=3E|4];3$@%I=b_U0ni~3qUgcBr0TWyspJ2//f*_-@usOeB>3rSKfE_YiN:^gp' );
define( 'SECURE_AUTH_SALT', '<M%pB_k%K{Y2!G.uwTox2bU-E(Qn+]lDPMMZq+Zui6gR&zK@z@L@H|3i+.JaWP?8' );
define( 'LOGGED_IN_SALT',   '+P>P^P?E[2A@A?`0`88cZI00G*xx[wF-apt&Vj/r>sZzC$t(}%3Q|!l/#aupGjw9' );
define( 'NONCE_SALT',       'zyib7mwYL8jwWKC*sU yM3&C^N%.2Ui8E.IaJ!xLDX1_@%~:.x&)c~jhlD+{rH#N' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
