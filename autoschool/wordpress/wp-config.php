<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'autoschool' );

/** Database username */
define( 'DB_USER', 'admin2' );

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
define( 'AUTH_KEY',         'FEI&`S?~9 VTaIG)}ft=f>bkK^0qTti%SuBJTzNXKO:ViObWIL~vqy;-93BS9FZ=' );
define( 'SECURE_AUTH_KEY',  ')nLP3G:r+x?Lv=88)|m];-r:Xo=A%Jb0(+~AIh^UpL|)wd;#F4qa5kqW>!365Mi1' );
define( 'LOGGED_IN_KEY',    'bpNOU<9hT}]K)O?BfeY]ZNMHaw~~*1)q($/sqDSj3TPpxtT@3&Z6eGb753ie#!ig' );
define( 'NONCE_KEY',        'e|!KOX_m`aH3iFx[COwkWcK<Y7Gr=Q!z[fjgHDXb`+7op6MEvq9XT3Ut2K@UDAFR' );
define( 'AUTH_SALT',        'VR3}W/w3Ux3B%.sz1:<ARJ!~-t;_%l}n+ll.Ns(z9#d}^d8i~aU)k4s6b:Firi8r' );
define( 'SECURE_AUTH_SALT', 'u%)?k1/,o ~ZY_ ga$f!t`QvXt);Dao>_pn51Do|ne5Ww.osNj+F,`Hg&24No^*n' );
define( 'LOGGED_IN_SALT',   'gqk!%KG%!`S+|-H+Epj$HM; ? *YBMbrs!1H9Ib^{Zs/UhV^~lZwZGTM!Q|/}IwB' );
define( 'NONCE_SALT',       'XhVl>V;Qt w!oz.9=kjMJpu5fzp6|9pC4pLbtk]V>4z=!i35IAi4{?Y]6HoghN D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
