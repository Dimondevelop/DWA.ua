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
define('DB_NAME', 'DWAua');

/** Имя пользователя MySQL */
define('DB_USER', 'dev');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'bEJalIzQ');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
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
define('AUTH_KEY',         '@3:Lo#Zl8$y(-6;O1G,Y.r,nO,u%k[oa^cDwkH;. Haz*58`Vflie<#Y;BW6<n5Y');
define('SECURE_AUTH_KEY',  'I<(pQQ8b%*^xvd}H)vtn3(a~0;i9a.ul#zW~%}JTPU*(0.N`@V-0r9$rq)z)>TN5');
define('LOGGED_IN_KEY',    '2UmK@}9t^3a!:xg6>?%Qe%/Z0A58#zG^j--x(m`-Iu]YC(bssH}^-SF=7/,^2e`O');
define('NONCE_KEY',        'bqgO$75SGdEz]*~$Q1 ]T{gn.gzv8fl/8paV!muIsw#$_^tGct0F{E!wBJE~Jy?q');
define('AUTH_SALT',        '$4Aa^27sOyt*lpNMG<y+k i*J4WhCbNsXE0I%Qju W8NF<MI{SV+OI(Yi^6v>2+`');
define('SECURE_AUTH_SALT', 'BS@Yi*W~E/~KikcP:c~N6S)Pqwzz~^O&JgJLtGXPL~`WlAT|zY>YO<Ks0&R6RGn&');
define('LOGGED_IN_SALT',   'M[5?pr)q6y@y$<76LX@Q.e-l*O@NF58mt6--%cAQu>N#;H)^E8.,,T4PU-7KB3;/');
define('NONCE_SALT',       'D^e)m10K9(-AlP}p)=`%~8Ck/[3v_#5-I}6>|wn1.s`2W+#U!(;NB{3!)-Af/78;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'dwa_';

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
