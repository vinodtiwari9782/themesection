<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'theme_sec' );

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
define( 'AUTH_KEY',         ']];|<$PMX@}K)+S@A@C$_*VGQ`mIBBl_[4IbHl_?1vUH-<ao)WG./xRG8RoQ3w-p' );
define( 'SECURE_AUTH_KEY',  ']/l-]-U|TzH?7`_r`fD-h<hHYNZZ=CWJX0U?$99|<SSKh75G8Q(0]IMtsipm$+h~' );
define( 'LOGGED_IN_KEY',    ')biW*LzESBuoR(8NpZ8Q![C%kpZn0>G:*:ToU6),xNUNgmmohInw!9k-OO81xWVL' );
define( 'NONCE_KEY',        'ovlv0PqxqDB$azc5~nm!H/c#Tt6+|;xv|qP?Dd3[oftPS/:W(2+0|fgNQy==Jqcp' );
define( 'AUTH_SALT',        'mq*zdS.(FI6#!DXIA}m_L+OMkXsk#}#dQboRg`.p#X,q+YYq8o.l)_AWGK/V/eI@' );
define( 'SECURE_AUTH_SALT', 'rZ|)RM!SAMG8w@w?:*Hq$4HVdG=Fei:!+09DM#`4g8mkZ4/&xijhilyfhMDn_DMO' );
define( 'LOGGED_IN_SALT',   'Pwk-&J2t)VT40n($pYX8A,$lG^WAkI^1I9lEtDwp2FQ-PD)nm~>hLj_qKh4T~fD(' );
define( 'NONCE_SALT',       '0Ru@x@2Cwb<se/#prh^Q]F]Oz%r^][?&r@S}D:hZ7z$jh@mV>C}oF: GTOL]-cRl' );

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
