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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '8xrEYkS2XGp1ZlRu' );

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
define( 'AUTH_KEY',         '-4@9<J(5&!UgA>q#r*j|C$=RFSiD30%bGZex(1*b;x[=?2}}|!E_FuM]B?mmv|%&' );
define( 'SECURE_AUTH_KEY',  '=M+:R4P,<1J{(Q1=)r(hLQhLbAV)<.5G`Fk4F=?m_&)18])&84~|8`CC7)$3g^!_' );
define( 'LOGGED_IN_KEY',    'YwxT82|3er?Qhb_bT)cC.QKmutX0D6i&9eOo:q`f2NB>gxVXx%7.0jnRi@=x;=A-' );
define( 'NONCE_KEY',        '|LOh]tOS$TU61 )/[O8WniQ1hVeS+AfSaL&?c|=4OXqSFJuUf^b*e>^all4nP91G' );
define( 'AUTH_SALT',        ';zmxPGqZ?d:jsmq7yTu<GV~K3UCrp_:W mnQ%]z=Q[c1w218Ds[-m7)BzjLm]/@l' );
define( 'SECURE_AUTH_SALT', '^5yC/Zr/2VxP^FRbsj/:?oR|_bn_79,Ch2p(}JA6B2hI_:ul)*T{I +Be<N$,kp&' );
define( 'LOGGED_IN_SALT',   '=LCiI=?A(zekkxbuwv#R$yY+V%lTpqpcHovV4Rk7&-d+a6-cNQf.$`}&SWwc`w:(' );
define( 'NONCE_SALT',       'y(>Mthil8D0(Pn ud&]|TY wTI:[nE?7|(?*FJ2=0[j-Ewc;~%kw@6WQh@YH|c~R' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
