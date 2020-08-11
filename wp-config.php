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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plpt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'HCDA7%FEqgrk<`tg#bA628KNT,l:gq>Q,Xx8;3NM 72~h[eNVM7>JGOx9({,6w9M' );
define( 'SECURE_AUTH_KEY',  '55vlTO:_s2r]BM8[^qwmI&W=]7Oxmr+SHc^6x0f9bX;ae4o6)p#BiK]%,!pM}]XT' );
define( 'LOGGED_IN_KEY',    'WwZ^w1JK)!^L@HAlePrk~PAN/^Oh{^M$el!.[Xc#ssJ/n}^?;o7IQgMz~*mWhLh`' );
define( 'NONCE_KEY',        '<b WEoy<z{d[s-RSN{!]f) 6_?W?+ twaWOD0dqcB{ITIc$Fjc%n..P.eZqyq8(:' );
define( 'AUTH_SALT',        'k6$WFGjR8Itz`8e=v5*DC<jBDG{y-C0|5=Tp^3u1&KUi5Er}^0><W[@x-i,2ZGy_' );
define( 'SECURE_AUTH_SALT', 'N7u$ue (&N]x]#jbW,(4pX?lO:@i6t|2|lTnNe@lO<Uhd(vet*ZGUF$f4pR4(3Su' );
define( 'LOGGED_IN_SALT',   '=@tm(j(53_5{NupJjHI;!s2{T8E);.E^*Qd>jy$J$RIkv.mXj;7o(^|Cz70?-V 3' );
define( 'NONCE_SALT',       'bGr#aU7{YLeTXVmb!K^=~{;;F=#l8($ToC_ORc9XRA%&BstaXRst)=3<y*<!]}*J' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
