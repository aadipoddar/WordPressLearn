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
define( 'AUTH_KEY',         '1BnDp3YdQvaj~wOnb]24O8nb|bet^-Nlo1_mNX@$H /K^_~*gBMD<JFN.7<p!O0G' );
define( 'SECURE_AUTH_KEY',  'GCP^>cNlMHwx*27v)cfs3}7KHbcW7|mhJ;Pmvv)=QD|vsXv3T>Cw(qw%H(68SBJJ' );
define( 'LOGGED_IN_KEY',    'ge.UG;KkrLvm7IMM YF)K)v2mwU;ioZ@3i0%CevI}ys39v<p!N$!BOe7/)%l)`hz' );
define( 'NONCE_KEY',        'vy{  Xs1m_-;JKy3FR72jJE/Y/*W;t,97x$7!Vyfuw28DC4WAI~ }{Mr1$F4JB5~' );
define( 'AUTH_SALT',        '*kV<W{hex@:&T@K$?B_vK`@p<{LXI+nkZI1_v.r<~`/GqI{FwE?qbf~I|rI{&7^T' );
define( 'SECURE_AUTH_SALT', '<oM3 W=t:KtD@@-$nm<heq!=vW*Nx^^1#],i-/*$nf-Y5nnw`8|g+70}^#psXQfi' );
define( 'LOGGED_IN_SALT',   '.%VWPI fk-*xi(BkbC!yZ%vtY>C:pg:ww_tbaRmuv)p-yEfS2;?xJF.,#K;H0x>7' );
define( 'NONCE_SALT',       '&kn+?(cXvdlJ.#_6r~)h[L=G~>_$!o5;, aPXecXKJ_MScWNjNnxE}8lap^a~R1x' );

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
