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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         'd{=2phfzy h^8KWDMK+riP[I]k`q8IyhuY6;F?imA33?g(K};/>EQi2;Z =Unp)`' );
define( 'SECURE_AUTH_KEY',  'vlvcSG0NA)FsmL}TLu&pe2jf<r|zh`h~{|~`o6^z?^Q_}C52FiZWWn_7>w~%4<NQ' );
define( 'LOGGED_IN_KEY',    'W@C!B,<]2zyN+]>`3S3bDP9P-X350Uy/N|78e-!f? iPCriM,<$w=T.Li>0v2meD' );
define( 'NONCE_KEY',        '8[LM,=)r:h=jVxrGUqDz{O<9_FAvUP1uj<6dNC6;Oy4$D@9v3=Tf-IXBjGRkoG y' );
define( 'AUTH_SALT',        'CXF:57c8V^Ehej@~RRFXo{5r^aZK#~|Dmq7H-=Se&]c1Cv4e1P6w+G,:(Qq/TN:t' );
define( 'SECURE_AUTH_SALT', 'SNN- `$J6T51W13PS.{Yflz}l$ nlx:{`<{#f|7mn0Y-1T+NG,v;[ew/lzJ8gb>O' );
define( 'LOGGED_IN_SALT',   '+)Tb7Xb?;W?rdHEWKVGoR*Z.,)QJ^HRX.Gs5s7t.Nc&r}>^qKTJv&Z|gm[D1-.*V' );
define( 'NONCE_SALT',       '{<-I_pu3K[)45B7fK[{3aBEn/zI)ED|q`K Vyc(P+2a:A$TK0#xPHkq%XsB<GQy%' );

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
