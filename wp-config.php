<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']Z$fB6I{vO{^0S:O2bfz92IxUMyse6*BOAt^Y/l0gYjQ4}{&unTILmS&AKbP]3^(' );
define( 'SECURE_AUTH_KEY',  '&)v[)MM|I`E2gb}HKOy@HeIy!8a#Nv^lon2=HLa>!%7|]ZGOtcJwT{6Hv]komgJ&' );
define( 'LOGGED_IN_KEY',    'PJdptWnS@Erba)n^yLjNFrTCs;muQVpt)xDd4L~V)2`2y>&.ur?ClEk!eoyL9[=[' );
define( 'NONCE_KEY',        'gCiOU+RNOt40CEe$;VdOmuJh>?;{ha/kA `H%n0Oq!@hY^>y[+fAdhOqQPv6PUdG' );
define( 'AUTH_SALT',        'gXT1aIV 4p,3.$7l^g!_(p{?Kg6>?y|KM]jn5Q-b&};q(STYc<SkCJmT2zE/%^Tf' );
define( 'SECURE_AUTH_SALT', 'F.VGf[#,0_Nm=V7d5yxd_sd?QXK#s(S5ENC@SSL9z-BqMwk+:EYoH.W{vP2+lkh,' );
define( 'LOGGED_IN_SALT',   'O=wfv=?*G<<r 8i`RaSa[28(([27258NglcMG6 ?a+>LWP5Ue9wAY]89tkj5AJ&@' );
define( 'NONCE_SALT',       'FMz^pEW?rwunv<2~2T.%|WJx|X83Ow70UHFMZ^]vR<GM 6,v,:G!QA|YO</VO`L9' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';