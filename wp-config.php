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
define( 'DB_NAME', 'bulletin' );

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
define( 'AUTH_KEY',         'oK%jw~qh$<]X|;ow-yC#/=YzTz3u@uaa)AM}6}i{p7o`f$;0[1g>of`C3jBbPYI*' );
define( 'SECURE_AUTH_KEY',  'A?*BC&u#zAkRF7sH;11A7IX?n!b^cJy8S$D>S<^US-u5][NMjS$]lelkr5%`W5PB' );
define( 'LOGGED_IN_KEY',    'fQ6?1g.d1#asmk+h5ILiIpc<p]0J)<@zgpa jqEy;,Q1hG48FbBH_K9VVf{=eI%@' );
define( 'NONCE_KEY',        '4hucCz_sHE?r{CBPD~|NR0|QZfuB=P J]%D$_G2[Vx@s emKoJjv2/]BT_X]MI6t' );
define( 'AUTH_SALT',        'a {0vWK}5yO9sx(/SfW eI[wY^D]P(Y*c;Mm zT,u#]f2UI}U2mYQ>6U||q]^GO:' );
define( 'SECURE_AUTH_SALT', 'wE]M=Gp2+:0moB&-!G<|/{}7#m9i-y<}KQl{/t`<Sk9R4>gxS7GD$`dOf$H2n5B1' );
define( 'LOGGED_IN_SALT',   '4#s@K&0Fv+hcC*2BK:Jz_OdXQuY-Z6;Pz,,C;A]Lc]8~ KEGH`5}5,?Wrb=MKjt#' );
define( 'NONCE_SALT',       'YHedl/)1hTf<^T+|Su%)QJ&M<Z)liZjcwPr:(;yF8.&K^+[<~:HvWHb$l@FRI,Ym' );

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
