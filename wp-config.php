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
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'glopt' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'glopt_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ger01019129112' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}D5ch#tCbOxz7 m=^)b_-Q652}(V$llM65%tW(/U(g.^glz$tyCd3rkVfN?!|twy' );
define( 'SECURE_AUTH_KEY',  'Un4(lfR>-^%k2qRpGwoUh;&,#%T@6HCaE@:_RO6HL]Ft<MbrK]:EiTS6g67{>=m)' );
define( 'LOGGED_IN_KEY',    '[8* CA#8Bc|{|{;<EygxGRIAf`7/$Mv~Euv Ub9oJPL:VS%TCgAu.4(oE?d0#{O2' );
define( 'NONCE_KEY',        'A.~=deNbsbE(/Ku])=mkiMe,bNH|OwJ|?2EfsQ|s/NqP@g+[xvK.}WOqYu-oW,@?' );
define( 'AUTH_SALT',        'vd6wQtp$[TcHzShg5JzC ZHrk!D(=}*O^]|M13Lpi9{B.EDf>,VSr`n>cI^Ge7Wj' );
define( 'SECURE_AUTH_SALT', 'W_pr=lxX+-ay>lV9aSyR6c=/?>e,k,(nS)Yx9s %Rz28NDc!&t{dIKc=2plH@t7i' );
define( 'LOGGED_IN_SALT',   '=NC8?_)V5w{ dY|E9H&I?}Z8;u}=Ku[+CHRf 8R9]+,m]T38}vs!,.Irb:`>k}YD' );
define( 'NONCE_SALT',       'zA,yIuc1tum[*UvR,k{hSEH/Ehjv4IB9)*fs(N3efJE5{V1=4tm1Cs+0!+F+1qaS' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
define (‘ALLOW_UNFILTERED_UPLOADS’, true);
/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );


define('FS_METHOD','direct');

