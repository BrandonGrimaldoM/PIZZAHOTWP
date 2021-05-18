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
define( 'DB_NAME', 'pizzahot' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'v61Y8yJW=vG/?VXGE/H8+Z|<qGhUvmA5y-Lr6`h;cy_x&XXk0QfSoZY03Cc8+s4^');
define('SECURE_AUTH_KEY',  'FOWQpWB(GEN_]5!Mr[&zhYr+^O=ic<SZ!KNcfd`7Jv8hPT|n3`3r>ui5o_DAAun4');
define('LOGGED_IN_KEY',    'SgQ8L^/I7,6zJj~}Y;RCc[wCig;w@1{L/%S*p1b+7jh:vrz=KWY#fI!pvP?5$Pzq');
define('NONCE_KEY',        'COt-myr)!`+%3+}m_&=sN5PkU*o}:l-+.]~_y}uuwb?@KI=3cawI1{4QFEJP}QC}');
define('AUTH_SALT',        '!(P+@!g_*>Z)5!lCX7`[rYiz)D1CV.l@iv$fjw$1@`07LdTX#9*_#KMR=^oi?F#]');
define('SECURE_AUTH_SALT', 'G`-8OeUYuu/eQ, i/2g$Cuw<&>v*/2%4T.%QZOX2@c)Mo6HSrQRdqcb-qBOaN`|s');
define('LOGGED_IN_SALT',   'pj/qVjhRtl0 *aXB`]9IvW/-qg<YS=Pth9OoeS/qFiWQ,|tWuEfcazEuM31l+T,;');
define('NONCE_SALT',       '.ytI!1Z|F+nLTA)g]0=LH|_+4l2fj$F:xf :?jYuJ%_?Z:I, $o$/+tGACWS&8r.');

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
