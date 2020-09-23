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
define( 'DB_NAME', 'urdubazar' );

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
define( 'AUTH_KEY',         'RBAC5k<l@(2U IUi/Wm7j-t({!(;Pf=(+X3NQZfZ]Pu~eQTc_-])n)xa=B*x7:3s' );
define( 'SECURE_AUTH_KEY',  ' 1o0:f~rx$4n{PQ0@K6;{%*KE}oC)ur,2d5x.XuF3BB{RhfhEKt!y!:6?0j>XkXD' );
define( 'LOGGED_IN_KEY',    'vJn5.S@%]4Y @7/]9s8x7AF{<+UvL<.3e,>B6=WZjy#:/aN{G*1|rzjrLgE^q}q ' );
define( 'NONCE_KEY',        'PB?5~zr#q3/<?-k9#K/-OsQ^f@iLNU[[&N6D^+e3^}36;$CqeJPr:7oYVEGjYvaW' );
define( 'AUTH_SALT',        '=Tt<m)<eF4[!Z3T<mW1c7a~dK8W}LSC)%kjN dpb;R8+rM]`p!&J=~Jkm`6E~T|b' );
define( 'SECURE_AUTH_SALT', 'Q4*ilG+GyN!K>4EhYZo$N=qdG.-MC0DSxDV&0.Z^^tJuZ^i6$jG)#27jg0,;%ki_' );
define( 'LOGGED_IN_SALT',   'Pr4Sm7<j6 8:ZXg4o:Uwap*%uTOpgaFBd~59<Q(<n/2fkq-KV7rPi6j_(ji3sXA}' );
define( 'NONCE_SALT',       '` ncrWx7nm}a8nT.}Fwzv>YGMyVEWjz(PU>-MJL(@-*A)9d2 x(nH@6QIB!=4R}C' );

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
