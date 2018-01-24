<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0905738-mwpdb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0905738');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'happy4645');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql127.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ih3/?Jrj.^Q0-ESX*3,/Qxg&bhpC:Fs,Ef-/jb?&CK`CdhpkslB.xJfV~pSKo>d8');
define('SECURE_AUTH_KEY',  'r]-[@?gTe $^],{;88hwI9|>.%?Fp;E[oHp!,%eZ]HQ+2ZWo#6Kj=%FLID a5fyY');
define('LOGGED_IN_KEY',    'RWU=l(_~R-V9z8d`4fpS>|K?lH+9+|vA7wtu6|v=@>?S=.L!n]F)n^|Ok8[[aQh~');
define('NONCE_KEY',        ')Fw^9}JtV&LPIoH#>68M|B[+19YHkt)tZ431YPA)JuT}N-G5tN|*TSP_!^NoNfqE');
define('AUTH_SALT',        '_3<&4w4^EvwGef}UK$} e+up_4pU|G GyDbA,LlT)F:l%LO&-viKB.4^$%/Rt>B2');
define('SECURE_AUTH_SALT', 'CX x9l`S[yyhbwpB=$d h1= rDqq~ivU{1kYz~RVzOo_Z&e[A4}rhpGH:9B?>3I;');
define('LOGGED_IN_SALT',   'U5O|X:/ZrL0@zgOd@nDSqBr sSwA},!/r<Ir`UkzDeDJ{)]/8zrKJjRKzOt9.XPn');
define('NONCE_SALT',       'TPj+:lY!|U &?6KI&^5 =t,Cl+{/AqRNC=_La&Q!%A`m}s$S@S&Y>.K</^=!dY`6');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
