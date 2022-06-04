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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'yakitori_wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?wiuRDb}G)2cUB<x,]75~NGs[td49[bz< ({]0+9&CF)x#iOk@OLt_/o`2=WF+ x' );
define( 'SECURE_AUTH_KEY',  '3|r^}-YhoxjIxag%x-vD=goxm^a?^{aG8ufj%EX,$`5EF];xW!sqE&%vNHzy/}> ' );
define( 'LOGGED_IN_KEY',    'd[iNQN!:FVKFki}G}Fxy(!e^kRbk3#n!]&3;PG*r>]Q#m+YQhC>};@Bd9F[YdYIH' );
define( 'NONCE_KEY',        'V@`^~THta*-|1i% oaG9kX+AoHk5-$M>iMzKy)=h0hHC9s@CMxBB:<[b$0zAWG2i' );
define( 'AUTH_SALT',        'FoY:TYb+}5vnJ03@]q0zG}% L3Q.KVyE2z;1~Zn%}J<<k<tDB5r[7=r.]KD_fjw^' );
define( 'SECURE_AUTH_SALT', 'o.|W}p4d1%75I=_j2LrIlWW|t9r:&^8T8`Pe Ddb,U=B?YfeZwUnE>#OJRTUoD1d' );
define( 'LOGGED_IN_SALT',   '&Hzm>da7mP>7iWG-4LuQMW:^t/zZ<>TnKv }n[j1zESja*BeOCS;</`TR:Zf7W]A' );
define( 'NONCE_SALT',       'o#1t`gU$:VYTwMd=@sX5soS%jEN*};wTd*StPr00cNgTYy@ i$94(2W%&b8r3ygw' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
