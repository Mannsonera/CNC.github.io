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
define( 'DB_NAME', 'mann' );

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
define( 'AUTH_KEY',         'PJhc^vnQtQ7/_K]a3/:J$DHu04]nZJO_7abm_Y95_qVM!__W20!GuQH<NOPPn|d~' );
define( 'SECURE_AUTH_KEY',  '} K}X;8qM8$INyM=1.</)o>kgQoywXY1qem.8v>`-y=<8cuYp3mb>POBH^!40E_P' );
define( 'LOGGED_IN_KEY',    '%GrDN9u]>^EdD.#11y+|;Ts(LMRQ1duTs*CW@I]W!_-h~(G~BC&U.:N.=Xa[LM>^' );
define( 'NONCE_KEY',        'DfPF `)7*i]D(~?F/|J@,fv1BQQh%_mpky750Axjw.#Hd61[4C^?a#SyD{P8is0^' );
define( 'AUTH_SALT',        'bI5>Ds/23V2BS&.;~c7wv`>-?>zQwVJZ?xG6pK0xL^Q#;d|]hiW:{@2.e{6}0A+c' );
define( 'SECURE_AUTH_SALT', 'K~g);u,.#Wi&p<==Y2t%<0J6d()>7`!L;OdDY9z<zBzJ~J4BsIrK2{p,(xSzMm@~' );
define( 'LOGGED_IN_SALT',   'cH/TP=;g>}JUw?PQLq%Ap6Xg!5MWy[ESYt]$Q1l<yXT%%@:^*<}}rpQ9LzI*8Piu' );
define( 'NONCE_SALT',       '<q*83fQBd)JI ?I(40octquH[s}oFzm(Xi8f{biY=y_4<s&ZOn`31X7?96*Br<o`' );

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
