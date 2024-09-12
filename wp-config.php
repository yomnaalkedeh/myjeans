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
define( 'DB_NAME', 'myjeans' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'i!>pT_c:Es{eP*G.9XLm!_DzF-SWt}D@{xV&HiU~3W`0^UA&+343rqYFQAP`q#KX' );
define( 'SECURE_AUTH_KEY',  'to]slmreUn`;<a[<lhb44mmjOZ7uEud-YJi=keppo|eRuP[UY>#+fEf c[:T7HRU' );
define( 'LOGGED_IN_KEY',    'lndv8xa)Jt=n5Hz!,/zJKdz|U+_uwW6}>`@tQ8`sK)`M>B)Z}UpN] qnnDj:GBCJ' );
define( 'NONCE_KEY',        'vrGL?0no/>TNTn^nv=h-JV3u~.SJ_%OJbAgKmKP}7>8%[Xv_t|fI(f!?L&E {nw8' );
define( 'AUTH_SALT',        '+Nl9KrW7(v[`1_st1ql>L)?*)O<![X+Yn:0c8mh}$m1}+$au1)R+-kw/$K&>v.5l' );
define( 'SECURE_AUTH_SALT', 'Tkz=W72-QnH2= ?$[Jk4oy^#,Trm)X&pr>7* wS /Y*(`]$XRWh;y~xYV-0Cm|wF' );
define( 'LOGGED_IN_SALT',   'ljf,k }~/4`/8_@DqXOgu t%~&s}{&q^?KaZBI_MAv/N%[#YA< P@{W O}pvUYVY' );
define( 'NONCE_SALT',       'J}/<cx_aL%u:2M+F9ZyJ.5q~gp?NzG{INURx{@s:=[)LQ>:-Q.=*[#p7Nm=yXquE' );

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

define('WP_MEMORY_LIMIT', '512M');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
