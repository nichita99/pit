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
define('DB_NAME', 'pit');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '93|fcV=_-&nl&X0ae:^4>1A%}<(YA1u{nrJx-T8uLG_!Oq=TY}<-YU9+v[r~rZ)}');
define('SECURE_AUTH_KEY',  'Yv+s>O^Tgy1{a%-xFO8o88yxd3-#u%~Ar7/0eJ%Iq{f,yN;Qp?@|~ poY.{)CuU#');
define('LOGGED_IN_KEY',    'IXDj-le3JxFH;k$&rxCZ&h#xAP#ee6kLKj!P OiJd ]tQR8W)=1Xh(r(?t4By!%~');
define('NONCE_KEY',        '5LrLQzy8iU>IpHl%|pE`cYW:O5A!evB%2RtPw`-K?R8[vWm}6N#A~S*$+1Cdv<h?');
define('AUTH_SALT',        '^wcW%a?(+RyA}iP[~Ac`[`19Myy+_c(h{y*YNq(O|6UiQ8rR~@p-^cx!t9B]|rJ9');
define('SECURE_AUTH_SALT', '0~hrOL2+X$ -T8Qmi-nL.`Pm4*C#|!.WNL-f#B5N?pQYG6[,+97x$8D&~hWuBo_+');
define('LOGGED_IN_SALT',   '_D2Ln}+q|QNq9UvPNSp-6>`w>pSJS}[b+I*IiI3}P+HN=*Faif ;-nj,jiY.qpiO');
define('NONCE_SALT',       'a_%*X@Gk% D!0jCG}{7qaXCmBgv%f&M.W#E-!xd-mjj,2(#j{x>H&-~:ge+]YJ+=');

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
define('WP_MEMORY_LIMIT', '256M');


/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
