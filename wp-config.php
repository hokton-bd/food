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
define( 'DB_NAME', 'ooii_food' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '%:%W?);Cf+BAaT^ZR-UV~[DlPYDH,&S*<+?q#?(F+f</Zz*^q=1;y$Jhk5{Od~RQ');
define('SECURE_AUTH_KEY',  'Wb=]q%3eMDxT};|f$-iR%I(w!1IL5v-g|B:3h!: }s.|,9Z*,n=[Zgx)af6,n0]{');
define('LOGGED_IN_KEY',    'u0GVSPyE,~#>o}{DcQ.]SJgdP [fQU@c9=~[jCD#T8VHfWen/6vV]YUR@Hr.s|-]');
define('NONCE_KEY',        'k4BU3D%~uEr42dB4oS{toY@qt&gAuguk70tkO[b}4kq~0wIb{+2q]Lm-A*6&Ny!1');
define('AUTH_SALT',        'LeN:>Vq1P+o r<deQ2),N,f]b;p-6(/6|r/qsPKDUuU^b]3kMtVWA/~alvavaj3T');
define('SECURE_AUTH_SALT', ':D1i.`JP)VfH@A|Un(2<=eb#@knNI Re+2o/rFr#5a]E1-{@8lYU4$C71`m&nG.N');
define('LOGGED_IN_SALT',   'nPp1fw7b<|j~DEx,2mW7+^,RSu--M~IN@w2u|+pOjw3-KL49O:QE>SfAh+Osq|B[');
define('NONCE_SALT',       '(l%WA/)3D4).bBpZKzp571hjEJ}CTGQPs ~#t]*7QsnouiOG?5VX8.H3K|^$+}Zb');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'm_';

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

//疑似cron停止
//define('DISABLE_WP_CRON', 'true');
//リビジョン停止
define('WP_POST_REVISIONS', false);
//自動保存停止
function disable_autosave() {
	wp_deregister_script('autosave');
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
