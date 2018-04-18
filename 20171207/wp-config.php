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
define('DB_NAME', 'itkom_anpol');

/** MySQL database username */
define('DB_USER', 'itkom_anpol');

/** MySQL database password */
define('DB_PASSWORD', 'TEster12');

/** MySQL hostname */
define('DB_HOST', 'itkom.nazwa.pl:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '{Z:HPahxo~$$P-ld+FtWk?0B6_%c7N~hE>+=ha|3Yt,b}QSp_Hh6@MV+jLcnBp,>');
define('SECURE_AUTH_KEY',  '?e4}5KsS-$>W<[[nrSH.aeMK1FJxZtJIR6o6~.-bE`9Fiv7MU8/7Bd,3:p7v-[Js');
define('LOGGED_IN_KEY',    'MWqTG&FgzA{OSx.Rwy%@.xzrJcZsqJ?!.1*5Q1X9=|Ea*|Gt1Eu4,rMV#XtA_hqH');
define('NONCE_KEY',        '=*Q(A%`fv@qXAcF*~Y#L`+nc}3 E:4>!;@>$,i1v,>/rpl:mIh>ex.yveflYCho+');
define('AUTH_SALT',        '57upY+fz/]9ZM~%qlr)GC:PxhaZUV7B.)#$j 7RwNUa;!RB%,*.qCwsd%]oW~}nF');
define('SECURE_AUTH_SALT', 'SQGkqSf]O[%^7ICQE`9Tmj=L^*cK=Amn)j!jit7msqTa^/v[$.+<qqA3b=2)Rcqd');
define('LOGGED_IN_SALT',   'cb-sN6DY+c[DDt8[zk6):UG,Ta<n85#&Cms)b-QTJXWYXBA4E}aVnzOJiWebudt$');
define('NONCE_SALT',       '7i{;r5-A)mi/M<:|Rw7sU;/&D*MS93a}s^[8M^I=eh1ON~dsbkjiuuCBvBDv&2EV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'anp_';
/**
 * Kod lokalizacji WordPressa, domyślnie: angielska.
 *
 * Zmień to ustawienie, aby włączyć tłumaczenie WordPressa.
 * Odpowiedni plik MO z tłumaczeniem na wybrany język musi
 * zostać zainstalowany do katalogu wp-content/languages.
 * Na przykład: zainstaluj plik de_DE.mo do katalogu
 * wp-content/languages i ustaw WPLANG na 'de_DE', aby aktywować
 * obsługę języka niemieckiego.
 */
define('WPLANG', 'pl_PL');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
