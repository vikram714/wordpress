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
define( 'DB_NAME', 'vikram' );

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
define( 'AUTH_KEY',         '<-!MCVxu`y-W8NLi/la24&B(aLPD4VIbjn&~0/8x2/j5}x4zB$]}n,2VrbpBDL00' );
define( 'SECURE_AUTH_KEY',  ';%RdN~fSJqb|Os`-.F,@mnh!:$HlbluiQ?VH3izf| v>|Qwg#*{Bs(vUcF]KjR]q' );
define( 'LOGGED_IN_KEY',    'U8RBoF*Xe0HL1b@pT@j#l<WHWr<24;,= PlVIzlorN[!tG:F6fQin.e}N?=goWei' );
define( 'NONCE_KEY',        '~$`+.40~92#0 D6BnVWP8Qirw{Y6O]BO@Y])Z=!tba[.._e;^+u)=B~:$RKvV*]*' );
define( 'AUTH_SALT',        '1l*;~%zr&pRY;iRmIK)gt2&Cl6k2+5&S~Z!RR3[G e>^*Q{]y.5AR![_qJ6BpcXT' );
define( 'SECURE_AUTH_SALT', 'D^:p.5=EtG2c&B^B(xF I@Ccg_wa58> >Cj<Klix`t4ZGxCZ.qqY}wZ*_|?6y7&/' );
define( 'LOGGED_IN_SALT',   '6TgKP*uANwi)o0CmP3)(>nZkP2>1.-[xMK*{a 18EN(jIX`.aW|bU>y,><`vmi/D' );
define( 'NONCE_SALT',       '~@9i41.56eBs.TQVPrq-|7XF=![YRu^O%puHW5{W{d%R;Dv`FUX;0>6?Sf%z9,K-' );

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
