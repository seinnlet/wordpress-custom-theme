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
define( 'DB_NAME', 'wp_fictionaluniversity_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'qd;iti`8vBmmy&M.~%1w4.:yqj&5SWV~TJik#M=17+Xrqpe]<ukNP2?BABu8z_5i' );
define( 'SECURE_AUTH_KEY',  '_l`pTonAk:yo;2LGU;O|WxZQ= (<>[}cq*p=$|Z$-~5-?D^hR%t5|HYN[c%-8;^_' );
define( 'LOGGED_IN_KEY',    '[y/^z{JK[Au4k8wAZK7!mcWj=U%WB|jJl+07yQ[Vo?}t]LY<*=M[E(L{{B2TIbes' );
define( 'NONCE_KEY',        'EW<>N&z[Wj/mD{dM2kC2Umh]N)Rc_t$G5Z]yHc^eXP#)6p.jU.^7kuIjQ)rxQxP>' );
define( 'AUTH_SALT',        'MchO!I=W4zUB_ew3t@h3xyQV-8@>C*voaa;P{_=}gA?mJG;ESjx)ZPJ7O|>F&48T' );
define( 'SECURE_AUTH_SALT', 'k|IqgM+9f,g=D`3G~i~*|4aBr~2 s,$!6g(8zOg1ev~#;TZcm)BF?zi.amt{[]`m' );
define( 'LOGGED_IN_SALT',   '#Ae^7Q|~FpP$:h-IQkl<@?Q!VJ8u<55LVFBM!/G$8`W`$SHxvT_dp2IET*kl#K-o' );
define( 'NONCE_SALT',       '}~_6yA[M56YNs`((*mETxzV!Op^vR`~#kmKnj,z1uIAvf8u=<,*52Ev>LXExRsAj' );

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
