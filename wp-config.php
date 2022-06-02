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
define( 'DB_NAME', 'revtech' );

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
define( 'AUTH_KEY',         'B}J2)7f[RPTI[=aa ]}7G];FUq$wv+F1sf9~&H)KB c5Ld)4O[9|koKl]FI1J;sc' );
define( 'SECURE_AUTH_KEY',  'R)l_&6o/]3&t1qxv^/]IgTqfJ) (xsLF7L/bQH30AlS1hEUdT]+$|ep1Z4a?qgfX' );
define( 'LOGGED_IN_KEY',    '7m`7%|;nI b%lqH**v;zMDF2X vO%HN@L YD2uSGHw:[pTBlM`}Qk|q3cy3MCpyh' );
define( 'NONCE_KEY',        '-PTv)gb W^$42hD5+C#.ymOhucuT@me7q_GUjs^RQgsC*|?:7^-9a6Y&rl@$*=|9' );
define( 'AUTH_SALT',        'ib_8Yq77J[bhTWrxI0,dDRNgL:<9F-.hJ_pr_+>N%x%Wna4H37-TT,y%VuFpbc&W' );
define( 'SECURE_AUTH_SALT', '`tiQUcGi~<:wsX.5+ojhV8Dw:<UjvZ%HzB5l?f`Lq8?k>eatJ/F[AkT|T0/FcdQC' );
define( 'LOGGED_IN_SALT',   '*h/We7hPay5VZ/jt!wT55#zEC>.|cs9Z]z__bL-h$o=mr:b-(:TA|t[ug,d!pB/}' );
define( 'NONCE_SALT',       '@iMup2^JG[6K_>~ILgwHtlFVF{sQq^V{{X.Ub`l9Q6 _x#7LA*~MkF+Hih`4P_,2' );

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
