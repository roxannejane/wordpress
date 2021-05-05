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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '5.dDB hsh-GVY1.uu=51~xW@GYw03|h!6T@;^{k) =fa`8^|qGU*@}^BdN#Jx7kU' );
define( 'SECURE_AUTH_KEY',  's0p6MTxF){C4bwBxm+`RZNJd>B>.1-W68=pW9TtXJNdh]eUf02at0LUAIC(n@I)9' );
define( 'LOGGED_IN_KEY',    'Y,Cg7*b)D5SfXNVz#*Ouv7g8k8e[=uPE1WbR#R;E4|R7@v)pGzTXwrqm[)Q2VI+M' );
define( 'NONCE_KEY',        '^e>G}j!B#x(m?G<G_!A.5$xN$*b)Zob7@fI{N,B{&Yhv%-XauT*gU=DC +p*6*f(' );
define( 'AUTH_SALT',        'rsXj}s9DOu!p@l~ThSb~mwl2(T8sO5p.6|l[n]!$7EgLg(e+8hhwt.3C%Fd)Swqi' );
define( 'SECURE_AUTH_SALT', 'u1pe;C(|WXzyswlC<1J{WI#x`|shpeD#~vh%~.F,6nc`c;Yps:y]%hKb-sfrLgSG' );
define( 'LOGGED_IN_SALT',   'X>S5m|j,EgnY5M_,N,K#fjn9qJVL8}1$l -$7{wd3X4@5/->{d,f.-tx!SRf]%66' );
define( 'NONCE_SALT',       '0D}YZ=GKA3I4&B)YpgT.l:&kxt9eL!!i un~xPe% Hx=3ja:9{X?gbDgOPq4Nosn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rjf_';

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
