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
define( 'AUTH_KEY',         'Ws0pZM2G^6V*H>6RSYY4Eji 4}@G4SW6G|)SFE8-g5Jf1agS8)o[U[T2<a?zrsl-' );
define( 'SECURE_AUTH_KEY',  'w*-t_ylj-VLGAB_tddTi|dc,l,L[>rI%m@=mG}Dz)O  &ol_]?&A%@V]Nu}MBw;;' );
define( 'LOGGED_IN_KEY',    'c-AV]KWH%q6BcM+ZW3l?]KK5p525O849b<ZNYal<?QvH X^1/*Df_l03d/W%1(fw' );
define( 'NONCE_KEY',        't-|@%I<=7XLD?0##D@r90oPN?5}6Y)~>0Xa)X,!l6I8o&$H!p:YEiA!~l0_e5:55' );
define( 'AUTH_SALT',        '6?ov!dQOiNTZ5#yM6B3A_!$F*)cV%(k)>V|$(qpmo8}} &;|U9z@W_&:66d5*85[' );
define( 'SECURE_AUTH_SALT', 'ody-q!en*)Nfjp;Nd-;~7l~]keXY2V`Vojw6(`Vz?F=$.W}~Z-< |6 f)C&i<{6|' );
define( 'LOGGED_IN_SALT',   'HEI3UCYB0^2F*5f7%d4WHQ%m@Y7hi]c[Pfj.5;/ocbFwMZl`,xo*<:mR!mg=Ks.p' );
define( 'NONCE_SALT',       ']>Vg~hUsd)kPyw6gp8$Aq}zI^GL0E(mUFU(g{M%rzyy826IC1+x$qGxUZkBVn_-7' );

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
