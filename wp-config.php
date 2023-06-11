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
define( 'DB_NAME', 'vyas_parivar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ';P87m4Hfu5sj#)va~ZMq1O?Utj>>]^l<kQU4PR77gk.EvmU#IPd3)M1 FL3#IThV' );
define( 'SECURE_AUTH_KEY',  'W+a5g16>T7oBa%no45l/qcyG~E$]n#@}RzE8w&jX*UwLfQ(!QaU@leHN?gjl2XT<' );
define( 'LOGGED_IN_KEY',    ')e+:hzdvckuo%BX=3! HR&1DC#@d{Lp~3.84`,5dHX1D@A@[gd3R;MC<5E2r6U`w' );
define( 'NONCE_KEY',        'G2`kLc>SZ2j`wDd]E6-UH34)8E+ 0)kzl*rG-nY`g#uK/B&mH8BO;z=4X,Vkq:yQ' );
define( 'AUTH_SALT',        'W|9#=*xG0/vs/JsFVbwNxlyJ`Xu:=KX_gk.hBEn=/)dH@_LD@;_qyU@d$5_L1:z<' );
define( 'SECURE_AUTH_SALT', 'R v3SJQ8&f0qG CT#b.L0l[p(ERv-[1q_3c0%b%.79Z00qi60SefG t)uDMw#+*j' );
define( 'LOGGED_IN_SALT',   'c~DI_gc/b5rvn0h`x%_*hGd?-P(p!m%SRlD/OZ*x4.>*7CXuQe5el@@BuxzA`V:o' );
define( 'NONCE_SALT',       'wgy)ILe8/&AQy>iM|g^2=6)`.zCK7d ]rI7HC&O+B[#6OjMRF!iJoI 9N)i&>A0i' );

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
