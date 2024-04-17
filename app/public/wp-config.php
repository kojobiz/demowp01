<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '3(=;V(B/*#XOUAaJUR+~MS:m[[Ug^2GCGU6,GJ(>s1pETa>;|0 MiWflQ6?]]p_p' );
define( 'SECURE_AUTH_KEY',   'FZ!Ji@D;,6rlZ3Wmg:k52vD+G:~cG#0ig688Cxwq$],wE8#fje{_$i.6mB7D1;aX' );
define( 'LOGGED_IN_KEY',     'BW<e$W,P=i:.TJvPiLN1x9UoYo~Gz/qczh>!$F?slhqT8~+kt,cLP@K5}W_,}5dm' );
define( 'NONCE_KEY',         'p-Pr~[gJHDola)*QT)QVvO9LUbPq2)1I|vqt<%2b]f`.XQV!M^t<%,aX^A[;vXhM' );
define( 'AUTH_SALT',         '{w|d5|[y7:iD`:db`sGCp26&#ybgH5aV?H:X)=pe#A<G4}lv<dq_9w~E@y6#J)h-' );
define( 'SECURE_AUTH_SALT',  'w>s6`aZ~,<A(^EVj%}IZ2Lz$)U<KTowgmphj6;7l~m7Qz7S1mvu(w5+w(tcN:~l:' );
define( 'LOGGED_IN_SALT',    '8<B4+sGN/7k(iM6;UrsiV[U&<v9SF=@Yz`oihZn;GE$%V LN._S.*iJji@mJRr;B' );
define( 'NONCE_SALT',        'ZffT<iK}!@HIWpANu@5Ei6#%wKXxW1OO?n3M7?+a2^-]rryEAc*9@F[<b%c}bWd[' );
define( 'WP_CACHE_KEY_SALT', '$%4Ycc`I)BoL$X=b|=ZX$P{_(r!/}`>!&|D]QeX|P?}tEET8ui~ga+nM:J2YU=3)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
