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
define( 'DB_NAME', 'nah-classic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'xxaFGkZvkj[ZBE)~*I9ii)K+X_j KB]rWR~_?~CU)U2W6GV-4wG=_%MHo5w.p^0s' );
define( 'SECURE_AUTH_KEY',  'E`9N?2u+36NPHS!l4e&:X!@ouUQ`0:soy,mC`]Qm,,+Hu);V^4Jrnc$cns%G$/}+' );
define( 'LOGGED_IN_KEY',    'VlEw.vGa{ ;]3W)90_s4 ^926>9Zt~{+#B]YEGg{mM)^Vt|]dS6+&o6d5R^H0q{Q' );
define( 'NONCE_KEY',        'c,M1z0%8dgz) qMO+QIu)G?~D[NlOF];$-oVxiskESuk&:UI*268&8vKzT+`uI=*' );
define( 'AUTH_SALT',        '02I2(HuQK3GzcA9&>g#{yYs.[Mh@(sDxaxV}<~ii0g:p79zFF`` &X@L|GRJ_AqO' );
define( 'SECURE_AUTH_SALT', '09E,96>]Wg^xZ[KDuYfYMMM7IN[},Qu@1MC{$eOlLR@ (eo:oCe}kJ&^d3hYv~|(' );
define( 'LOGGED_IN_SALT',   '~XY!.4B8Nu+pHqJOo X_]U}R]@]bW{`}+yw; rzak/!w^5h;)hHAs(Wn&%dG!U<?' );
define( 'NONCE_SALT',       '6WTGC.!EQ74Tk0 F?w)n52B.;Oz 5D]?_l[i,)(,ZWjpWR{bkBlN-Z@{Z2*NW)=1' );

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
