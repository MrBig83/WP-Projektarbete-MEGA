<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'wp-mega-shop' );

/** Databasens användarnamn */
define( 'DB_USER', 'medie-admin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'medie-admin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ahS>hSPcVr%4o+d;YWU5]-R_n@pMY@?2[i]aqoYKp]hUtu7^Pwv?7uUB QLkj%PW' );
define( 'SECURE_AUTH_KEY',  'HOvNagEMX>gby(R0<u>;ta<2`Vc]>iLGh0saex+ `f&k*EQ6vZXmzBlz&smtbTB0' );
define( 'LOGGED_IN_KEY',    'DtCWm|OH@A>S-p1O9oNW+,d+`iSZf1*QNao}#o;_sw0*Q7l1oM~b(9r.dZ0KscSA' );
define( 'NONCE_KEY',        'wF-}5Fw.9b$_/,?CC3jZB15L5j(HF)oe61+bW&#oGF~IPdvXBE}f24!x+QS%$$i^' );
define( 'AUTH_SALT',        'HP5TB,P3h oWQig$zY4)iJ4BCi_%]HWXjUPJQ#%{;tefe:t;ykip:$HhLr9.pnvj' );
define( 'SECURE_AUTH_SALT', '^=n}h=Q#~QMI%{-PNVS+Ftgviu(w%I->8e8k^e4GJQsEL%M_^onfjr{T:6[=pxq-' );
define( 'LOGGED_IN_SALT',   '9 ~X5ya>2id(7Ywj ;Nc!&:.R;49v%VWr1lI&!K*/&I;Jvi>JcMlc~newB)V~g&E' );
define( 'NONCE_SALT',       'pHXm4E|*wcB(Nm@nY.LKj[{q`m 4N_*ar>O@d~bXOXx;I:^ucSs~8{&G(6OGo3WQ' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'mega_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');