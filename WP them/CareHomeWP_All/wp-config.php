<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** The name of the database for WordPress */
define( 'WPCACHEHOME', '/usr/www/users/carehoz/wp-content/plugins/wp-super-cache/' );
define('WP_CACHE', true);
define('DB_NAME', 'wp_carehoz_db0');

/** MySQL database username */
define('DB_USER', 'wp_carehoz_0');

/** MySQL database password */
define('DB_PASSWORD', 'bhXFJ72iKBhjQF51');

/** MySQL hostname */
define('DB_HOST', 'sql585.your-server.de');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NcLi SvDbjPrF=%)xuz5_?[o2orGKBf`~`^5+EBI:T1DSNr<mFVg?deKQe7^V>!9');
define('SECURE_AUTH_KEY',  ',(2nLisG :OYSgf[F(5pypf7yo7(0[s#CWOA<W:3AR/@{AGa0 hPE#Y|Q (;QZ%y');
define('LOGGED_IN_KEY',    '?H:Pd@?UL~H|Ba9)bg2F[+(Ju$=[u^./VX u+6rI~O2&j ~,N0e>Y{T[}ntck`7J');
define('NONCE_KEY',        '>L$?Pe0M]w$050YB0UE!gciQP+jN(<Z;~h&7EN}pe}$>*czY`u)ot!R*7dckN54A');
define('AUTH_SALT',        'GM<ZgW+!tWawlencsdxd]h,;BHv{-h]s 8 Rij%kq`}`lod)^!Ip<]ah~<vMHGyw');
define('SECURE_AUTH_SALT', 'KrnQ1#!-4&*0){8La6jbb-?h(qfpLPu0F$Khy}^h4Fq.bV%G7&xTC_r_<EKTZ?~I');
define('LOGGED_IN_SALT',   '#gWZ&io|5gv2kqsHfnV2CZQ{Nxg$0Dou/ssCEY,4RMps%.iOmpJ}-9qT9O*Ch mP');
define('NONCE_SALT',       'xbYZzdK&Z6c]5}{-$I* rTkO_[C>miZBWmtB?m,n-EE];5l`U!!K)%?ykFSQSQ|`');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
