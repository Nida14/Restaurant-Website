<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'restaurant' );

/** MySQL database username */
define( 'DB_USER', 'zarak' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zarak_khan5822' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WV`[&-~}B}5W$hR2[TTPJd,1Y&@I@AS4?C(]]VOI?-M7Z3XL:&<(fR6}9<N<A{UE' );
define( 'SECURE_AUTH_KEY',  '8zkB{Ojb-niUnd#ZNSzaH3g!*esx//o/HK~b.0-&r#<T$eQbrF6Kb,7d@^y|G;:{' );
define( 'LOGGED_IN_KEY',    'OQ6iFC~pMSlJAO8xP/8-B`uy&A^e( g|qNCf1FXIefR;z(mN4_:p9{VM=Q?|(]Vu' );
define( 'NONCE_KEY',        'Ip*<?h?QBk(`E_R_uP&cuGa~_;d8TM9,7YFUS_%8tj+auV;&gx9B>Y AL=rGJ.[e' );
define( 'AUTH_SALT',        '(A$l(X|RnryA{aVbt`c;:Is=h|h!m@7bG:xMtL)bz~j1/OdyPMoib6IcTOsL4<CW' );
define( 'SECURE_AUTH_SALT', 'e7Y[Xj3Y6?{B## SvxMi-k2gj~:FOFX,-d88 2;G~O^Vn<N%z+Dgg(g (MeTA~.C' );
define( 'LOGGED_IN_SALT',   'kw*|,E<<`e28;8QU-KN#iJoN@o<|0]iOPKkf^3<y=f>%dIeq>FgeoP#8jH2e`wc,' );
define( 'NONCE_SALT',       'Y:GvXU.z9CpTK[)8Xt-]?o-39r201F3Hn1fcr)QSpVim/t@8W0e;&r+,|OJ0AvM+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
