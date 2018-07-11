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
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dS=VssQ,CG9YtA{r+eZ3rpATS-bf0/@aCYZP!,/wtx9|8b-5ND`-3o%Q]o%RELOH');
define('SECURE_AUTH_KEY',  ']ak9Z:#v%3:UEdSkmbEz6P/9J<txpU.()(Y^G}1(,djTp`b{S^6.fQkgRF)@R32?');
define('LOGGED_IN_KEY',    'g4gU[l0N<dA$S_I7Axg1p7xgKK6h`^4WHy>bKuKbk;0 r~IX[9;iq+4QuiUGC%m@');
define('NONCE_KEY',        '*hz,WC<CmR<#W~QO&s,iG-tGrIb}o8,AHecZU`k)D^SkT^T$x_rmiLH7;(^?VWAV');
define('AUTH_SALT',        'Ny>.@Fog.x)T?:.CEFQiQjjKG.U4hB{(Z4;,X}[dV&L-_U$}`Q*z? .f,[+E)a0h');
define('SECURE_AUTH_SALT', '5Jw_~J0mE^~GYX&x]p]{6Jnc`%6OUbpuoBVkSP%p/@:9a=Hfni<%Pqd?nVpbsW^/');
define('LOGGED_IN_SALT',   'XIB?_U4Or_R#;Vq*RiSb;wKC]A=]D0:smu]U>Qd317kS7hch!z),?Wzz@  e_WvZ');
define('NONCE_SALT',       '5J3o~!V-7tCdRCgdMAQ%7kUs}#i9g:W)5>^SI,/f%J9MRc)S4+=[-iLe0~x-H:#h');

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
