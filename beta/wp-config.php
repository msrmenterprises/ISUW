<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rkumaris_isgw_beta');


/** MySQL database username */
define('DB_USER', 'rkumaris_isgw_be');


/** MySQL database password */
define('DB_PASSWORD', 'Sj.v?]6(?bM2');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aT#5rOpJEwP1Xy3PpvYKo6_6o^s/Lh:E32ox)Vv/NaQ2huYLCd7\`IMXdULe##RRjiLK\`7D5gwU2b!;|x');
define('SECURE_AUTH_KEY',  'efU0FNp6_>$mGo:z$\`cc5@3!?3<:F?*e59r=#ATypO@pP^-JaoRt6Mv=Ud73=;1\`4rJtH');
define('LOGGED_IN_KEY',    'c~L(hiw?LcjNah:NPtQw)$Jh@!aD0Y\`Gpj!VnoF^?(Ot7o?qCV<?:!WKXNaPmObC>$GA1hFnOTR^=G|');
define('NONCE_KEY',        ':v^Y;lERu=T1(zV<vF7QeHeziGKhS=t8$t:pA$RZen5ZdXih3Cr)oLc(F|*L!GO@');
define('AUTH_SALT',        'f>h^r9C6QRMfmV1\`PL5RH_JE_2?bdSSw\`KT/D6I_b))t2$|;OeSFlkJUgS-6cJ5?HF3_|3<OtCR=BDS<U');
define('SECURE_AUTH_SALT', 'isb74^9$sPMRCIyA)!1$ggeCTehINM88d8pA/3ey*|QzCt~)UGvP=ki:ei');
define('LOGGED_IN_SALT',   ':iNyeFa9-b@V$*KSe8<suw3FOvZ=WF#7F<Pg1j>ig>?GFA@\`C(_xd!UpsOfzOxm');
define('NONCE_SALT',       'zzM3COvLlp*Kvy!YW;UUFl2Flru@Td5S*5)(=L;upvVDeU<)Fmm(:7Ey>*=qwZ7wkA~');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_EDIT', true );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_HOME','https://www.isuw.in/beta/');
define('WP_SITEURL','https://www.isuw.in/beta/');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
