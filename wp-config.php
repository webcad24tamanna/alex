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
define( 'DB_NAME', 'alex' );

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
define( 'AUTH_KEY',         '8ZSuxr+2GgH!~,d^uD6>tG1_9O kyaD=-z+4=K9eHZt7prw`H_d3TVDAmV1fZP(e' );
define( 'SECURE_AUTH_KEY',  'EkDFR_|j42-x7;3@foB%xPe(-Q+?`Q[8CHAYJ!0}s>}(ji&zM8495n@3{Z/$6#,H' );
define( 'LOGGED_IN_KEY',    'f~g)/5pk42cJX]po}G0 (0mH#`|_P@Q$13-0^Bwf_NZ+VvF]LO#s,tS<2P9M11(a' );
define( 'NONCE_KEY',        '3V]LQ{#CUf9@epp8{E4wS/_ZO@oQ:MN;FmS,w%@PGa!it>a}r{/_2(<][d#Y:Skf' );
define( 'AUTH_SALT',        '&-2575T5A{QOJjAm`9vJ<jY9}&j(r>[ >DMc)egR?O4#bM;s%8bNnVy)Nr,j`0.y' );
define( 'SECURE_AUTH_SALT', ';`KN5BmK<t8uNU_ ;I|[p^ez!JQ)QFB ts5e~,)qi(UD*S9m>_:0?OPPikzuawlH' );
define( 'LOGGED_IN_SALT',   '~q5s;%+f&B7gHUC.2ulotVQz;@cN]f Z}TE<0{bDXBtMHGT6OJZ@&kw:ldAw5U0;' );
define( 'NONCE_SALT',       '/j%.#z!Zwqp$/{o?9cU{~(wrPdGs#?SteM-vF7u1JH]PgEn5Rb,U)yd60#HA?[Sd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp47_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
