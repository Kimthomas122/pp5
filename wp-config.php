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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u435472965_rJ1dT' );

/** Database username */
define( 'DB_USER', 'u435472965_s2YVj' );

/** Database password */
define( 'DB_PASSWORD', 'F7btCXZJOi' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'SndK=Wb4yy8!-MB(y)wPX9GK`[5%Gm,N}mah@&3[4wS9!EjK$<om;Nlh$Y{g3Q=S' );
define( 'SECURE_AUTH_KEY',   'EKE~Z8;>j_P)C9vEwinH8u6`|NzY~ehj8SHZ8mp}>5QWY:N<6a4Bl&i=c0HIFmgW' );
define( 'LOGGED_IN_KEY',     'eWn?X|])lMuv]K6a}]s6-J9{7;*qi[_eX]]:S/x4FS^`wiqv$K>^r~k%~NsKo=DA' );
define( 'NONCE_KEY',         'K>7[SD{Z_ebj@3=oJ2~a$n}{:PD7y%~52*iGvI R :iI^,:5Hr&EpI(ltUUj/TbS' );
define( 'AUTH_SALT',         'QZ)*hBm!F&mNU6u?[meQ F80_U~k S*&!_FlbBIWLCKu!;1]e%*gE.lK~W6.jWS?' );
define( 'SECURE_AUTH_SALT',  'F[P+ct6U7,{$<|+:i`JQ2.|Z&olrHO7R|ByDkFF)Q#iKh,3v%|8CF:WR?.DgPGRL' );
define( 'LOGGED_IN_SALT',    '_im#NI2kIlx3%-/4m*][xd} .c)MeL-;+tMB<@?|/KuEB?QOa}/D(uG}rGt<y[>M' );
define( 'NONCE_SALT',        '.4iCaQ!P7zLFvQO|QN(;~-Kb4ZFgV8qD/QJ`S?&?nLvIXT>N4G4@9S%.?oAZTGT)' );
define( 'WP_CACHE_KEY_SALT', 'P>H$~`.X(CI7fO<:wFVhI[+Slx(e9LBUTln1z5I8Y1C<gII1.4BXP/+gp(b}4W[4' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
