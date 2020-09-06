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
define( 'AUTH_KEY',         'LuYlvjZ$e.cNj!nSbRbseocVE30=nfX=( Yf^.S|&YEb?7HVOQkQ3VLH{3S@)<&V' );
define( 'SECURE_AUTH_KEY',  'qP&f_iLdzy~Aj2rK`!etZbg6$NhHK^ bj$4ai}[Sl9GKlP&1>&MR]lgbO|uFl,T.' );
define( 'LOGGED_IN_KEY',    '}0C:w-qF}Li8<khPMA{B<~7]v +#,WgI(m,j</doV6_ !2KE9#sqjTGcV w5[%=7' );
define( 'NONCE_KEY',        'c:H-V?~R9r[|S_=MU(>GC>_<.~Al8`wXz1Fy)V0f*.1h<r&wz*+Qgh6/pDL5J~?N' );
define( 'AUTH_SALT',        '/p5=!^uwR($Z<t$&szja9XtY/1{LIIAIvtp]mbzM|X;C1OUngUotoGXUmbcAmw}i' );
define( 'SECURE_AUTH_SALT', 'p_&84_kNJ0!5X)TDT^=5+,B!nG@`luQ=NRd85x`(@3o$TlF_DD:h)DQ:pM2#A]L2' );
define( 'LOGGED_IN_SALT',   'BDC>=]cFPWlg_U??#|nKl%t&rpej),+[B~*#fFM$ya!$rP%hwLiK@p(Re`/(B=aq' );
define( 'NONCE_SALT',       '8ofjOzJ]!S$62s4K6nVS-v?o;$5bdC/K-PC+TL1q)FT!f$hAey-<#[=(Vz]^->9z' );

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
