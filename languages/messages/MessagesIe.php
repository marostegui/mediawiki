<?php
/** Interlingue (Interlingue)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Jmb
 * @author Kaganer
 * @author Makuba
 * @author Malafaya
 * @author Minisarm
 * @author Reedy
 * @author Remember the dot
 * @author Renan
 * @author Valodnieks
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Special',
	NS_TALK             => 'Discussion',
	NS_USER             => 'Usator',
	NS_USER_TALK        => 'Usator_Discussion',
	NS_PROJECT_TALK     => '$1_Discussion',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'File_Discussion',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_Discussion',
	NS_TEMPLATE         => 'Avise',
	NS_TEMPLATE_TALK    => 'Avise_Discussion',
	NS_HELP             => 'Auxilie',
	NS_HELP_TALK        => 'Auxilie_Discussion',
	NS_CATEGORY         => 'Categorie',
	NS_CATEGORY_TALK    => 'Categorie_Discussion',
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Usatores_activ' ),
	'Allmessages'               => array( 'Omni_li_missages' ),
	'Allpages'                  => array( 'Omni_li_págines' ),
	'Ancientpages'              => array( 'Págines_antiqui' ),
	'Blankpage'                 => array( 'Págine_in_blanc' ),
	'Block'                     => array( 'Blocar', 'Blocar_IP', 'Blocar_usator' ),
	'Booksources'               => array( 'Fontes_de_libres' ),
	'BrokenRedirects'           => array( 'Redirectionmentes_ínperfect' ),
	'ChangePassword'            => array( 'Change_parol-clave' ),
	'ComparePages'              => array( 'Comparar_págines' ),
	'Confirmemail'              => array( 'Confirmar_email' ),
	'Contributions'             => array( 'Contributiones' ),
	'CreateAccount'             => array( 'Crear_conto' ),
	'Deadendpages'              => array( 'Págines_moderat' ),
	'DeletedContributions'      => array( 'Contributiones_deletet' ),
	'DoubleRedirects'           => array( 'Redirectionmentes_duplic' ),
	'EditWatchlist'             => array( 'Redacter_liste_de_págines_vigilat' ),
	'Emailuser'                 => array( 'Email_de_usator' ),
	'Export'                    => array( 'Exportar' ),
	'Fewestrevisions'           => array( 'Revisiones_max_poc' ),
	'FileDuplicateSearch'       => array( 'Sercha_de_file_duplicat' ),
	'Filepath'                  => array( 'Viette_de_file' ),
	'Import'                    => array( 'Importar' ),
	'Invalidateemail'           => array( 'Email_ínvalid' ),
	'BlockList'                 => array( 'Liste_de_bloc', 'Liste_de_bloces', 'Liste_de_bloc_de_IP' ),
	'LinkSearch'                => array( 'Sercha_de_catenun' ),
	'Listadmins'                => array( 'Liste_de_administratores' ),
	'Listbots'                  => array( 'Liste_de_machines' ),
	'Listfiles'                 => array( 'Liste_de_files', 'Liste_de_file', 'Liste_de_figura' ),
	'Listgrouprights'           => array( 'Jures_de_gruppe_de_liste', 'Jures_de_gruppe_de_usator' ),
	'Listredirects'             => array( 'Liste_de_redirectionmentes' ),
	'Listusers'                 => array( 'Liste_de_usatores', 'Liste_de_usator' ),
	'Lockdb'                    => array( 'Serrar_DB' ),
	'Log'                       => array( 'Diarium', 'Diariumes' ),
	'Lonelypages'               => array( 'Págines_solitari', 'Págines_orfan' ),
	'Longpages'                 => array( 'Págines_long' ),
	'MergeHistory'              => array( 'Historie_de_fusion' ),
	'MIMEsearch'                => array( 'Serchar_MIME' ),
	'Mostcategories'            => array( 'Plu_categories' ),
	'Mostimages'                => array( 'Files_max_ligat', 'Plu_files', 'Plu_figuras' ),
	'Mostlinked'                => array( 'Págines_max_ligat', 'Max_ligat' ),
	'Mostlinkedcategories'      => array( 'Categories_max_ligat', 'Categories_max_usat' ),
	'Mostlinkedtemplates'       => array( 'Avises_max_ligat', 'Avises_max_usat' ),
	'Mostrevisions'             => array( 'Plu_revisiones' ),
	'Movepage'                  => array( 'Mover_págine' ),
	'Mycontributions'           => array( 'Mi_contributiones' ),
	'Mypage'                    => array( 'Mi_págine' ),
	'Mytalk'                    => array( 'Mi_discussion' ),
	'Myuploads'                 => array( 'Mi_cargamentes' ),
	'Newimages'                 => array( 'Nov_files', 'Nov_figuras' ),
	'Newpages'                  => array( 'Nov_págines' ),
	'PasswordReset'             => array( 'Recomensar_parol-clave' ),
	'PermanentLink'             => array( 'Catenun_permanen' ),
	'Popularpages'              => array( 'Págines_populari' ),
	'Preferences'               => array( 'Preferenties' ),
	'Prefixindex'               => array( 'Index_de_prefixe' ),
	'Protectedpages'            => array( 'Págines_gardat' ),
	'Protectedtitles'           => array( 'Titules_gardat' ),
	'Randompage'                => array( 'Sporadic', 'Págine_sporadic' ),
	'Randomredirect'            => array( 'Redirectionmente_sporadic' ),
	'Recentchanges'             => array( 'Nov_changes' ),
	'Recentchangeslinked'       => array( 'Changes_referet', 'Changes_relatet' ),
	'Revisiondelete'            => array( 'Deleter_revision' ),
	'Search'                    => array( 'Serchar' ),
	'Shortpages'                => array( 'Págines_curt' ),
	'Specialpages'              => array( 'Págines_special' ),
	'Statistics'                => array( 'Statistica' ),
	'Tags'                      => array( 'Puntales' ),
	'Unblock'                   => array( 'Desblocar' ),
	'Uncategorizedcategories'   => array( 'Categories_íncategorizet' ),
	'Uncategorizedimages'       => array( 'Files_íncategorizet', 'Figuras_íncategorizet' ),
	'Uncategorizedpages'        => array( 'Págines_íncategorizet' ),
	'Uncategorizedtemplates'    => array( 'Avises_íncategorizet' ),
	'Undelete'                  => array( 'Restaurar' ),
	'Unlockdb'                  => array( 'Disserrar_DB' ),
	'Unusedcategories'          => array( 'Categories_sin_use' ),
	'Unusedimages'              => array( 'Files_sin_use', 'Figuras_sin_use' ),
	'Unusedtemplates'           => array( 'Avises_sin_use' ),
	'Unwatchedpages'            => array( 'Págines_desvigilat' ),
	'Upload'                    => array( 'Cargar_file' ),
	'UploadStash'               => array( 'Cargamente_stash_de_file' ),
	'Userlogin'                 => array( 'Intrar' ),
	'Userlogout'                => array( 'Surtida' ),
	'Userrights'                => array( 'Jures_de_usator', 'Crear_administrator', 'Crear_machine' ),
	'Wantedcategories'          => array( 'Categories_carit' ),
	'Wantedfiles'               => array( 'Files_carit' ),
	'Wantedpages'               => array( 'Págines_carit', 'Catenunes_ínperfect' ),
	'Wantedtemplates'           => array( 'Avises_carit' ),
	'Watchlist'                 => array( 'Liste_de_págines_vigilat' ),
	'Whatlinkshere'             => array( 'Quo_catenunes_ci' ),
	'Withoutinterwiki'          => array( 'Sin_interwiki' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Ultracatenun:',
'tog-hideminor' => 'Ocultar redactiones minori in nov changes',
'tog-hidepatrolled' => 'Ocultar redactiones vigilat in nov changes',
'tog-newpageshidepatrolled' => 'Ocultar págines vigilat de liste de nov págines',
'tog-extendwatchlist' => 'Expander li liste de vigilantie a omni changes, ne solmen li max nov',
'tog-usenewrc' => 'Ordinar changes in «Recent changes» e li liste de vigila secun págines',
'tog-numberheadings' => 'Auto-numerar rublicas',
'tog-showtoolbar' => 'Monstrar barre de redactional utensiles',
'tog-editondblclick' => 'Redacter págines per duplic clacca',
'tog-editsectiononrightclick' => 'Redacter singul sectiones per dextri clacca',
'tog-rememberpassword' => 'Memorar mi registre in ti computator (por um max de $1 {{PLURAL:$1|die|dies}})',
'tog-watchcreations' => 'Automaticmen viligar págines e files, queles yo ha creat.',
'tog-watchdefault' => 'Automaticmen vigilar págines e files, queles yo ha redactet.',
'tog-watchmoves' => 'Automaticmen vigilar págines e files, queles yo move.',
'tog-watchdeletion' => 'Adjunter págines e dossieres, queles yo ha deleet a mi liste de vigilantie',
'tog-minordefault' => 'Marcar omni li redactiones minori per contumacie',
'tog-previewontop' => 'Monstrar prevision ante de buxe de redaction',
'tog-previewonfirst' => 'Monstrar prevision in prim redaction',
'tog-enotifwatchlistpages' => 'Inviar me un e-mail quande un págine o dossiere de mi liste de págines vigilantie es changeat',
'tog-enotifusertalkpages' => 'Inviar me e-mail quande mi págine de discussion es changeat',
'tog-enotifminoredits' => 'Inviar me un e-mail anc por minor redactiones de págines a dossieres',
'tog-enotifrevealaddr' => 'Revelar mi adresse de e-mail in notificationes de e-mail',
'tog-shownumberswatching' => 'Monstrar li númere de usatores vigilant',
'tog-oldsig' => 'Existent subscrition:',
'tog-fancysig' => 'Tractar signature quam textu wiki (sin un catenun auto-crate)',
'tog-uselivepreview' => 'Strax monstrar prevision (experimental)',
'tog-forceeditsummary' => 'Suggester me quande intrar un redaction che summarium in blanc',
'tog-watchlisthideown' => 'Ocultar mi redactiones del liste de págines vigilat',
'tog-watchlisthidebots' => 'Ocultar redactiones de machine del liste de págines vigilat',
'tog-watchlisthideminor' => 'Ocultar redactiones minori del liste de págines vigilat',
'tog-watchlisthideliu' => 'Ocultar redactiones de usatores registrat del liste de págines vigilat',
'tog-watchlisthideanons' => 'Ocultar redactiones de usatores anonim del liste de págines vigilat',
'tog-watchlisthidepatrolled' => 'Ocultar redactiones vigilat del liste de págines vigilat',
'tog-ccmeonemails' => 'Inviar me copies de e-mailes que yo invia por altri usatores',
'tog-diffonly' => 'Ne monstrar li contenete de págine in infra del changes',
'tog-showhiddencats' => 'Monstrar categories ne visibil',
'tog-noconvertlink' => 'Desvalidar conversion de titul de catenun',
'tog-norollbackdiff' => 'Omisser change pos de efectuar un rollback',
'tog-useeditwarning' => 'Averti me, si yo abandona un págine con ínconservat changes',
'tog-prefershttps' => 'Sempre usar un secur connection, si tui session es activ.',

'underline-always' => 'Sempre',
'underline-never' => 'Nequande',
'underline-default' => 'secun li usatori surfacie o li navigator',

# Font style option in Special:Preferences
'editfont-style' => 'Styl del lítteres in li redactional fenestre:',
'editfont-default' => 'Standard del navigator',
'editfont-monospace' => 'Lítteres con egal largitá',
'editfont-sansserif' => 'Lítteres sin serifes',
'editfont-serif' => 'Lítteres con serifes',

# Dates
'sunday' => 'soledí',
'monday' => 'lunedí',
'tuesday' => 'martedí',
'wednesday' => 'mercurdí',
'thursday' => 'jovedí',
'friday' => 'venerdí',
'saturday' => 'saturdí',
'sun' => 'sol',
'mon' => 'lun',
'tue' => 'mar',
'wed' => 'mer',
'thu' => 'jov',
'fri' => 'ven',
'sat' => 'sat',
'january' => 'januar',
'february' => 'februar',
'march' => 'marte',
'april' => 'april',
'may_long' => 'mai',
'june' => 'junio',
'july' => 'julí',
'august' => 'august',
'september' => 'septembre',
'october' => 'octobre',
'november' => 'novembre',
'december' => 'decembre',
'january-gen' => 'januar',
'february-gen' => 'februar',
'march-gen' => 'marte',
'april-gen' => 'april',
'may-gen' => 'mai',
'june-gen' => 'junio',
'july-gen' => 'julí',
'august-gen' => 'august',
'september-gen' => 'septembre',
'october-gen' => 'octobre',
'november-gen' => 'novembre',
'december-gen' => 'decembre',
'jan' => 'jan',
'feb' => 'feb',
'mar' => 'mar',
'apr' => 'apr',
'may' => 'mai',
'jun' => 'jun',
'jul' => 'jul',
'aug' => 'aug',
'sep' => 'sep',
'oct' => 'oct',
'nov' => 'nov',
'dec' => 'dec',
'january-date' => '$1 januar',
'february-date' => '$1 februar',
'march-date' => '$1 marte',
'april-date' => '$1 april',
'may-date' => '$1 mai',
'june-date' => '$1 junio',
'july-date' => '$1 julí',
'august-date' => '$1 august',
'september-date' => '$1 septembre',
'october-date' => '$1 octobre',
'november-date' => '$1 novembre',
'december-date' => '$1 decembre',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Categorie|Categories}}',
'category_header' => 'Articules in categorie "$1"',
'subcategories' => 'Subcategories',
'category-media-header' => 'Multimedia in categorie "$1"',
'category-empty' => "''Ti categorie currentmen ne contene págines o media.''",
'hidden-categories' => '{{PLURAL:$1|Celat categorie|Celat categories}}',
'hidden-category-category' => 'Celat categories',
'category-subcat-count' => '{{PLURAL:$2|Ti categorie ha solmen li sequent subcategorie.|Ti categorie ha li sequent {{PLURAL:$1|subcategorie|$1 subcategories}}, de un total de $2.}}',
'category-subcat-count-limited' => 'Ti-ci categorie contene li secuent {{PLURAL:$1|subcategorie|$1 subcategories}}.',
'category-article-count' => '{{PLURAL:$2|Ti categorie contene solmen li sequent págine.|Li sequent {{PLURAL:$1|págine es|$1 págine es}} in ti categorie, de un total de $2.}}',
'category-article-count-limited' => 'Li secuent {{PLURAL:$1|págine|$1 pagines}} es contenet in ti-ci categorie:',
'category-file-count' => '{{PLURAL:$2|Ti categorie contene solmen li sequent file.|Li sequent {{PLURAL:$1|file es|$1 files es}} in ti categorie, de un total de $2.}}',
'category-file-count-limited' => 'Li secuent {{PLURAL:$1|file|$1 files}} es contenet in ti-ci categorie:',
'listingcontinuesabbrev' => 'cont.',
'index-category' => 'Indexat págines',
'noindex-category' => 'Págines ne indexet',
'broken-file-category' => 'Págines con ruptet file-links.',

'about' => 'Concernent',
'article' => 'Articul',
'newwindow' => '(es apertet in un nov fenestre)',
'cancel' => 'Anullar',
'moredotdotdot' => 'Plu...',
'morenotlisted' => 'Ti liste ne es complet.',
'mypage' => 'Págine',
'mytalk' => 'Conversation',
'anontalk' => 'Discussion por ti ci IP',
'navigation' => 'Navigation',
'and' => '&#32;e',

# Cologne Blue skin
'qbfind' => 'Constatar',
'qbbrowse' => 'Travider',
'qbedit' => 'Redacter',
'qbpageoptions' => 'Págine de optiones',
'qbmyoptions' => 'Mi optiones',
'faq' => 'FAQ',

# Vector skin
'vector-action-addsection' => 'Adjunter tema',
'vector-action-delete' => 'Deleter',
'vector-action-move' => 'Mover',
'vector-action-protect' => 'Gardar',
'vector-action-undelete' => 'Restituer',
'vector-action-unprotect' => 'Desgardar',
'vector-view-create' => 'Crear',
'vector-view-edit' => 'Redacter',
'vector-view-history' => 'Historie de versiones',
'vector-view-view' => 'Leer',
'vector-view-viewsource' => 'Vider fonte',
'actions' => 'Actiones',
'namespaces' => 'Spacies de nómine',
'variants' => 'Variantes',

'navigation-heading' => 'Navigational menú',
'errorpagetitle' => 'Errore',
'returnto' => 'Retornar a $1.',
'tagline' => 'De {{SITENAME}}',
'help' => 'Auxilie',
'search' => 'Serchar',
'searchbutton' => 'Serchar',
'go' => 'Ear',
'searcharticle' => 'Ear',
'history' => 'Historie',
'history_short' => 'Historie de versiones',
'updatedmarker' => 'modernisat desde mi ultim visitation',
'printableversion' => 'Version a printar',
'permalink' => 'Permanent referentie',
'print' => 'Printar',
'view' => 'Leer',
'edit' => 'Redacter',
'create' => 'Crear',
'editthispage' => 'Redacter',
'create-this-page' => 'Crear ti págine',
'delete' => 'Deleter',
'deletethispage' => 'Deleter ti págine',
'undeletethispage' => 'Restaurar ti págine',
'undelete_short' => 'Restaurar {{PLURAL:$1|1 modification|$1 modificationes}}',
'viewdeleted_short' => 'Vider {{PLURAL:$1|un deletet version|$1 deletet versiones}}',
'protect' => 'Gardar',
'protect_change' => 'changer',
'protectthispage' => 'Gardar ti págine',
'unprotect' => 'Changear protection',
'unprotectthispage' => 'Changear protection de ti págine',
'newpage' => 'Nov págine',
'talkpage' => 'Parlar in ti págine',
'talkpagelinktext' => 'Conversation',
'specialpage' => 'Págine special',
'personaltools' => 'Mi utensiles',
'postcomment' => 'Nov division',
'articlepage' => 'Vider li articul',
'talk' => 'Discussion',
'views' => 'Aspectes',
'toolbox' => 'Utensiles',
'userpage' => 'Vider págine del usator',
'projectpage' => 'Vider págine de projecte',
'imagepage' => 'Vider li págine de figura',
'mediawikipage' => 'Vider págine de missagies',
'templatepage' => 'Vider li págine de avise',
'viewhelppage' => 'Vider págine de auxilie',
'categorypage' => 'Vider categorial págine',
'viewtalkpage' => 'Vider discussion',
'otherlanguages' => 'Altri lingues',
'redirectedfrom' => '(Redirectet de $1)',
'redirectpagesub' => 'Págine de redirecterion',
'lastmodifiedat' => 'Ti-ci págine esset redactet in ultim li $1, clocca $2.',
'viewcount' => 'Ti págine ha esset accesset {{PLURAL:$1|un vez|$1 vezes}}.',
'protectedpage' => 'Un protectet págine',
'jumpto' => 'Saltar a:',
'jumptonavigation' => 'navigation',
'jumptosearch' => 'serchar',
'view-pool-error' => 'It me dole que li servitores es totalmen cargat in li moment.
Anc mult usatores es provant vider ti págine.
Pleser atende un témpor quelc ante que vu prova accesser ti págine denov.

$1',
'pool-timeout' => 'Temporal límite attiņit, attendente li clusion.',
'pool-queuefull' => 'Range de petitiones es plen.',
'pool-errorunknown' => 'Ínconosset erra',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'Concernent {{SITENAME}}',
'aboutpage' => 'Project:Concernent_{{SITENAME}}',
'copyright' => 'Contenete attiņibil sub $1, si ne altrimen indicat.',
'copyrightpage' => '{{ns:project}}:Jure editorial',
'currentevents' => 'Actual evenimentes',
'currentevents-url' => 'Project:Actual evenimentes',
'disclaimers' => 'Advertimentes',
'disclaimerpage' => 'Project:Advertimentes',
'edithelp' => 'Redactori auxilie',
'helppage' => 'Help:Contenete',
'mainpage' => 'Principal págine',
'mainpage-description' => 'Principal págine',
'policy-url' => 'Project:Regulariumes',
'portal' => 'Portale del communité',
'portal-url' => 'Project:Portale del communité',
'privacy' => 'Politica de privatie',
'privacypage' => 'Project:Politica de privatie',

'badaccess' => 'Tu ne have sufficent jures',
'badaccess-group0' => 'Tu ne have li necessi jures por ti action',
'badaccess-groups' => 'Ti action es limitat a usatores in {{PLURAL:$2|li gruppe|un del secuent gruppes:}} $1',

'versionrequired' => 'Version $1 de MediaWiki exiget',
'versionrequiredtext' => 'Version $1 de MediaWiki es exiget por usar ti págine.
Vider [[Special:Version|págine de version]].',

'retrievedfrom' => 'Cargat de «$1»',
'youhavenewmessages' => 'Vu have $1 ($2).',
'youhavenewmessagesfromusers' => 'Tu have $1 de {{PLURAL:$3|un altri usator|$3 usatores}} ($2).',
'youhavenewmessagesmanyusers' => 'Tu have $1 de mult usatores ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|un nov missagie|999=nov missagies}}',
'newmessagesdifflinkplural' => 'ultim {{PLURAL:$1|change|999=changes}}',
'youhavenewmessagesmulti' => 'Vu have nov missages in $1',
'editsection' => 'redacter',
'editold' => 'redacter',
'viewsourceold' => 'vider fonte',
'editlink' => 'redacter',
'viewsourcelink' => 'vider fonte',
'editsectionhint' => 'Redacter section: $1',
'toc' => 'Contenete',
'showtoc' => 'monstrar',
'hidetoc' => 'ocultar',
'collapsible-collapse' => 'Celar',
'collapsible-expand' => 'Monstrar',
'thisisdeleted' => 'Vider o restaurar $1?',
'viewdeleted' => 'Vider $1?',
'restorelink' => '{{PLURAL:$1|un deleet version|$1 deleet versiones}}',
'feed-invalid' => 'Ínvalid typ de feed-abonnament.',
'feed-unavailable' => 'Null feeds es attiņibil',
'site-rss-feed' => 'RSS-feed por «$1»',
'site-atom-feed' => '$1 Atom feed',
'page-rss-feed' => 'RSS-feed por «$1»',
'page-atom-feed' => '"$1" Atom feed',
'red-link-title' => '$1 (págine ne existe)',
'sort-descending' => 'Descendent ordination',
'sort-ascending' => 'Ascendent ordination',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Págine',
'nstab-user' => 'Págine de usator',
'nstab-media' => 'Págine de medies',
'nstab-special' => 'Special págine',
'nstab-project' => 'Págine de projecte',
'nstab-image' => 'Figura',
'nstab-mediawiki' => 'Missage',
'nstab-template' => 'Avise',
'nstab-help' => 'Auxilie',
'nstab-category' => 'Categorie',

# Main script and global functions
'nosuchaction' => 'Null tal action existe',
'nosuchactiontext' => 'Li action indicat in li URL es ínvalid.
Forsan tu ha mistypat li URL o secuet un íncorrect ligament.
Forsan it indica un erra in li programma usat de {{SITENAME}}.',
'nosuchspecialpage' => 'Null tal special págine',
'nospecialpagetext' => '<strong>Tu ha petit un ínvalid special págine.</strong>

Omni existent special págines trova se in li [[Special:Specialpages|{{int:specialpages}}]].',

# General errors
'error' => 'Erra',
'databaseerror' => 'Erra del data-base',
'databaseerror-text' => 'Un erra in li questionada del database ha evenit. To posse indicar un erra in li software.',
'missing-article' => 'Li textu de «$1» $2 ne ha esset trovat in li data-base.

It es possibil, que ti págine ha esset deleet o movet.


Si to ne es just, tu ha forsan trovat un erra in li programma.
Ples raporta it a un [[Special:ListUsers/sysop|administrator]], notante li URL.',
'missingarticle-rev' => '(revision#: $1)',
'unexpected' => 'Valor ínexpectat: "$1"="$2".',
'badtitle' => 'Titul mal',
'badtitletext' => 'Li titul de págine solicitat esset ínvalid, vacui, o íncorectmen ligat inter-lingue o un titul inter-wiki.
It posse contene un o plu carácteres quel ne posse esser usat in titules.',
'viewsource' => 'Vider fonte',
'viewsourcetext' => 'Vu posse vider e copiar li contenete de ti págine:',
'titleprotected' => 'Ti titul ha esset gardat de creation per [[User:$1|$1]]. 
Li motive dat es "\'\'$2\'\'".',

# Virus scanner
'virus-badscanner' => "Configuration maliciosi: virus desconosset examinat: ''$1''",
'virus-scanfailed' => 'scandesion fallit (code $1)',
'virus-unknownscanner' => 'antivírus desconosset:',

# Login and logout pages
'logouttext' => "'''Tu ha terminat tui session.'''

Nota, que alcun págines posse continualmen esser monstrat quasi tu vell ancor esser inregistrat, til que tu vacua li cache de tui navigator.",
'yourname' => 'Nómine de usator:',
'yourpassword' => 'Parol-clave:',
'yourpasswordagain' => 'Parol-clave denov:',
'remembermypassword' => 'Memorar mi parol-clave in ti navigator (por un maxim de $1 {{PLURAL:$1|die|dies}})',
'yourdomainname' => 'Tui dominia:',
'login' => 'Aperter session',
'nav-login-createaccount' => 'Crear un conto o intrar',
'loginprompt' => 'Cookies deve esser permisset por intrar in {{SITENAME}}.',
'userlogin' => 'Crear un conto o intrar',
'userloginnocreate' => 'Intrar',
'logout' => 'Surtida',
'userlogout' => 'Surtir',
'notloggedin' => 'Vu ne ha intrat',
'nologin' => 'Ne have un conto? $1.',
'nologinlink' => 'Crear un conto',
'createaccount' => 'Crear un conto',
'gotaccount' => 'Ja have un conto? $1.',
'gotaccountlink' => 'Intrar',
'userlogin-resetlink' => 'Obliviat tui detallies de registre?',
'badretype' => 'Li passa-paroles queles vu tippat ne es identic.',
'userexists' => 'Nómine de usator ja in usu.
Pleser opta por un nómine diferent.',
'loginerror' => 'Erra in initiation del session',
'nocookieslogin' => '{{SITENAME}} utilisa cookies por far intrar usatores. Vu nu ne permisse cookies. Ples permisser les e provar denov.',
'loginsuccesstitle' => 'Apertion de session successosi',
'loginsuccess' => 'Vu ha apertet vor session in {{SITENAME}} quam "$1".',
'wrongpassword' => 'Parol-clave íncorect inscrit.
Pleser prova denov.',
'wrongpasswordempty' => 'Parol-clave inscrit esset nud.
Pleser prova denov.',
'mailmypassword' => 'Re-initialisar li passaparol',
'throttled-mailpassword' => 'Un parol-clave amemora ha ja esset inviat, intra li ultim {{PLURAL:$1|hor|$1 hores}}.
Por preventer misusa, solmen un parol-clave amemora va esser inviat per {{PLURAL:$1|hor|$1 hores}}.',
'acct_creation_throttle_hit' => 'Vu ja ha creat $1 contos. Vu ne posse crear pli mult quam to.',
'usernamehasherror' => 'Nómine de usator ne posse contene mixtura de carácteres',
'loginlanguagelabel' => 'Lingue: $1',
'suspicious-userlogout' => 'Tui petition por surtir esset desaprobat pro que probabilmen esset inviat per un navigator ruptet o servitor de autorisation che caching.',

# Change password dialog
'changepassword' => 'Modificar passa-parol',
'oldpassword' => 'Anteyan passa-parol:',
'newpassword' => 'Nov passa-parol:',
'retypenew' => 'Confirmar nov passa-parol',

# Special:PasswordReset
'passwordreset-username' => 'Vor nómine usatori',

# Edit page toolbar
'bold_sample' => 'Nigri textu',
'bold_tip' => 'Nigri textu',
'italic_sample' => 'Cursiv textu',
'italic_tip' => 'Cursiv textu',
'link_sample' => 'Nómine de referentie',
'link_tip' => 'Intern referentie',
'extlink_sample' => 'http://www.example.com nómine del referentie',
'extlink_tip' => 'Extern referentie (ne oblivia prefixar http://)',
'headline_sample' => 'Titul de nivell 2',
'headline_tip' => 'Titul de nivell 2',
'nowiki_sample' => 'Intrar ínformatat textu ci.',
'nowiki_tip' => 'Ignorar formate wiki',
'image_tip' => 'Fixat file',
'media_tip' => 'Referentie a un multimedial file.',
'sig_tip' => 'Tui subscrit con hor e date',
'hr_tip' => 'Horizontal linea (ples usar sin excess)',

# Edit pages
'summary' => 'Resummation:',
'subject' => 'Tema/Division:',
'minoredit' => 'To es un bagatellic change',
'watchthis' => 'Vigilar ti págine',
'savearticle' => 'Conservar págine',
'preview' => 'Prevision',
'showpreview' => 'Monstrar prevision',
'showdiff' => 'Monstrar changes',
'anoneditwarning' => "'''Advertiment:''' Vu ne esser registrat.
Tui adresse de IP va esser registrat in historico de redactiones de ti págine.",
'summary-preview' => 'Prevision de summarium:',
'subject-preview' => 'Prevision de Tema/Division:',
'whitelistedittext' => 'Vu have que $1 por redacter págines.',
'loginreqtitle' => 'Apertion de session obligatori',
'accmailtitle' => 'Li passa-parol es inviat.',
'accmailtext' => "Li passa-parol por '$1' ha esset inviat a $2.",
'newarticle' => '(Nov)',
'newarticletext' => "Vu have sequet un catenun por un págine que ne existe ancor.
Por crear li págine, comensa tippant in li buxe in infra (vider li [[{{MediaWiki:Helppage}}|págine de auxilie]] por plu informationes).
Si vu es ci per errore, clacca in li buton '''retornar''' in tui navigator.",
'noarticletext' => 'Actualmen ti-ci págine ancor ne contene alquel textu.
Tu posse <span class="plainlinks">[{{fullurl:{{FULLPAGENAME}}|action=edit}} redacter]</span> it, [[Special:Search/{{PAGENAME}}|serchar]] su titul in altri págines o regardar li relatent <span class="plainlinks">[{{fullurl:{{#special:Log}}|page={{FULLPAGENAMEE}}}} logs]</span>.',
'noarticletext-nopermission' => 'Actualmen ti págine ne contene textu e tu ne have permission crear ti págine.
Tu posse [[Special:Search/{{PAGENAME}}|serchar]] su titul sur altri págines o regardar li <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} relatent logs].</span>',
'userpage-userdoesnotexist' => 'Conto de usator "$1" ne es registrat.
Pleser controla si vu cari crear/redacter ti págine.',
'userpage-userdoesnotexist-view' => 'Conto de usator "$1" ne es registrat.',
'usercssyoucanpreview' => "'''Punta:''' Usa li buton \"{{int:showpreview}}\" por provar tui nov CSS ante de conservar.",
'userjsyoucanpreview' => "'''Punta:''' Usa li buton \"{{int:showpreview}}\" por provar tui nov JavaScript ante de conservar.",
'usercsspreview' => "'''Memora que vu es solmen vident un prevision de tui CSS de usator.'''
'''It ne have esset conservat ancor!'''",
'userjspreview' => "'''Memora que vu es solmen provant/monstrant tui JavaScript de usator.'''
'''It ne ha esset conservat ancor!'''",
'userinvalidcssjstitle' => "'''Advertiment:''' Ne vi pelle \"\$1\".
Memora que hábitu .css e págines .js usa un titul plu bass, e.g. {{ns:user}}:Foo/vector.css quam oposit por {{ns:user}}:Foo/Vector.css.",
'updated' => '(Modernisat)',
'previewnote' => "'''Memora se que ti es solmen un prevision.'''
Tui changes ancor ne ha esset conservat!",
'token_suffix_mismatch' => "'''Tui redaction ha esset rejectet pro que tui software de navigation multilat li carácteres de punctuation in li simbol de redaction.'''
Li redaction ha esset rejectet por impedir corruption del textu de págine.
Ti quelcvez ocurre quande vu es usant un service de autorisation anonim mal executet in Internet.",
'editing' => 'Redactent $1',
'editingsection' => 'Redactent $1 (division)',
'editingcomment' => 'Redactent $1 (nov division)',
'yourtext' => 'Tui textu',
'storedversion' => 'Version acumulat',
'yourdiff' => 'Diferenties',
'copyrightwarning' => "Omni contributiones a {{SITENAME}} es considerat quam publicat sub li termines del $2 (ples vider $1 por plu mult detallies). Si vu ne vole que vor ovres mey esser modificat e distribuet secun arbitrie, ples ne inviar les. Adplu, ples contribuer solmen vor propri ovres o ovres ex un fonte quel es líber de jures. '''NE UTILISA OVRES SUB JURE EDITORIAL SIN DEFINITIV AUTORISATION!'''",
'titleprotectedwarning' => "'''Advertiment: Ti págine ha esset serrat por que [[Special:ListGroupRights|jures specific]] es necessitat por crear it.''' 
Li ultim intrada in li historico es sub li condition infra por referentie:",
'templatesused' => '{{PLURAL:$1|Avise|Avises}} usat in ti págine:',
'templatesusedpreview' => '{{PLURAL:$1|Avise|Avises}} usat in ti prevision:',
'templatesusedsection' => '{{PLURAL:$1|Avise|Avises}} usat in ti division:',
'template-protected' => '(protectet)',
'template-semiprotected' => '(medie-gardat)',
'hiddencategories' => 'Ti págine es un membre de {{PLURAL:$1|1 categorie ocultat|$1 categories ocultat}}:',
'permissionserrorstext-withaction' => 'Vu ne have permission por $2, por li sequent {{PLURAL:$1|motive|motives}}:',
'recreate-moveddeleted-warn' => "'''Advertiment: Vu es recreant un págine que esset anteriorimen deletet.'''

Vu deve considerar ca it es convenent por continuar redactant ti págine.
Li deletion e diarium de movement por li págine es sub li condition ci por convenience:",
'moveddeleted-notice' => 'Ti págine ha esset deletet.
Li deletion e diarium de movement por li págine es sub li condition in infra por referentie.',

# Parser/template warnings
'post-expand-template-inclusion-warning' => "'''Advertiment:''' Li grandore del includet shablones es tro grand. Alcun shablones ne posse esser includet.",
'post-expand-template-inclusion-category' => 'Págines, in queles li maximal grandore del includet shablones es excedet',
'post-expand-template-argument-warning' => "'''Advertiment:''' Ti págine contene in un minim argumente de avise quel ha un anc mensura de expansion grand.
Tis argumentes have esset omisset.",
'post-expand-template-argument-category' => 'Págines contenent argumentes de avise omisset',

# "Undo" feature
'undo-success' => 'Li redaction posse es desfat. Pleser controla li comparation sub verificar que ti es quo vu cari acter, e tande conservar li changes infra por terminar e desfar li redaction.',
'undo-failure' => 'Li redaction ne posse esser desfat payand conflicte de redactiones.',
'undo-norev' => 'Li redaction ne posse esser defat pro que it ne existe o esset deletet.',
'undo-summary' => 'Desfat revision $1 per [[Special:Contributions/$2|$2]] ([[User talk:$2|discussion]])',

# History pages
'viewpagelogs' => 'Vider diariumes por ti págine',
'currentrev' => 'Ultim revision',
'currentrev-asof' => 'Actual version de $2, clocca $3',
'revisionasof' => 'Revision de $1',
'revision-info' => 'Revision de $1 e il ha fabricat de $2',
'previousrevision' => '← Anteyan version',
'nextrevision' => 'Revision sequent →',
'currentrevisionlink' => 'Ultim revision',
'cur' => 'hod',
'next' => 'prox',
'last' => 'ant',
'page_first' => 'prim',
'page_last' => 'ultima',
'histlegend' => "Diferenties de selection: marca li buxes de radio de li revisiones por comparar e batte \"intrar\" o li buton in li funde.<br />
Legende: '''({{int:cur}})''' = diferenties che ultim revision, '''({{int:last}})''' = diferenties que antecede li revision, '''{{int:minoreditletter}}''' = redaction minori.",
'history-fieldset-title' => 'Historie de navigation',
'history-show-deleted' => 'Deletet solmen',
'histfirst' => 'max veľi',
'histlast' => 'max nov',

# Revision feed
'history-feed-item-nocomment' => '$1 in $2',

# Revision deletion
'rev-delundel' => 'monstrar/ocultar',
'revdel-restore' => 'changer visibilitá',

# Suppression log
'suppressionlog' => 'Diarium de supression',
'suppressionlogtext' => 'Infra es un liste de deletiones e bloces involuent contenete ocultant de administratores. 
Vider li [[Special:IPBlockList|liste de bloc de IP]] por li liste de bloces e bannimentes operational currentmen.',

# Merge log
'revertmerge' => 'Desfar fusion',

# Diffs
'history-title' => 'Historic del revision de "$1"',
'lineno' => 'Linea $1:',
'compareselectedversions' => 'Comparar revisiones selectet',
'editundo' => 'anullar',

# Search results
'searchresults' => 'Serch-resultates',
'searchresults-title' => 'Serch-resultates por «$1»',
'toomanymatches' => 'Anc mult concurses esset retornat, pleser prova un question diferent',
'titlematches' => 'Resultates in li titules de págines',
'textmatches' => 'Resultates in textu de págines',
'prevn' => 'anteyan {{PLURAL:$1|$1}}',
'nextn' => 'secuent {{PLURAL:$1|$1}}',
'prevn-title' => 'Anteyan $1 {{PLURAL:$1|resultate|resultates}}',
'nextn-title' => 'Secuent $1 {{PLURAL:$1|resultate|resultates}}',
'shown-title' => 'Monstrar $1 {{PLURAL:$1|resultate|resultates}} per págine',
'viewprevnext' => 'Monstrar ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-exists' => "'''Vi un págine nominat \"[[:\$1]]\" in ti wiki.'''",
'searchmenu-new' => "'''Crear li págine «[[:$1]]» in ti wiki.'''",
'searchprofile-articles' => 'Págines de contenete',
'searchprofile-project' => 'Auxilie e Págines de projecte',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Omnicós',
'searchprofile-advanced' => 'Avansat',
'searchprofile-articles-tooltip' => 'Serchar in $1',
'searchprofile-project-tooltip' => 'Serchar in $1',
'searchprofile-images-tooltip' => 'Serchar files',
'searchprofile-everything-tooltip' => 'Serchar in li tot contenete (includent págines de conversation)',
'searchprofile-advanced-tooltip' => 'Serchar in special spacies de nómine',
'search-result-size' => '$1 ({{PLURAL:$2|1 parol|$2 paroles}})',
'search-result-category-size' => '{{PLURAL:$1|1 membre|$1 membres}} ({{PLURAL:$2|1 subcategory|$2 subcategories}}, {{PLURAL:$3|1 file|$3 files}})',
'search-redirect' => '(redirection de «$1»)',
'search-section' => '(section $1)',
'search-suggest' => 'Esque tu ha intentet: «$1»?',
'searchrelated' => 'relatet',
'searchall' => 'omni',
'showingresultsheader' => "{{PLURAL:$5|Resultate '''$1''' de '''$3'''|Resultates '''$1 – $2''' de '''$3'''}} por '''$4'''",
'search-nonefound' => 'Tu sercha ne ha trovat un resultate.',

# Preferences page
'preferences' => 'Preferenties',
'mypreferences' => 'Preferenties',
'skin-preview' => 'Prevision',
'saveprefs' => 'Conservar',
'searchresultshead' => 'Serchar',
'stub-threshold' => "Catenunes por págines de contenete va aparir <a href=''#'' class=''stub''>de ti forme</a> si ili have minu de (bytes):",
'timezonelegend' => 'Zone de témpor:',
'timezoneuseserverdefault' => 'Usar wiki de contumacie ($1)',
'timezoneuseoffset' => 'Altri (specificar compensation)',
'timezoneregion-africa' => 'Africa',
'timezoneregion-america' => 'America',
'timezoneregion-antarctica' => 'Antarctica',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Ocean Atlantic',
'timezoneregion-australia' => 'Australia',
'timezoneregion-europe' => 'Europe',
'timezoneregion-indian' => 'Ocean Indian',
'timezoneregion-pacific' => 'Ocean Pacific',
'youremail' => 'E-mail:',
'username' => 'Nómine de usator:',
'uid' => 'Identification de usator:',
'yourrealname' => 'Nómine real:',
'yourlanguage' => 'Lingue:',
'yourvariant' => 'Variante:',
'yournick' => 'Nov signature:',
'yourgender' => 'Génere:',
'prefs-help-email' => 'Adresse de e-mail es optional, ma es necessitá por recomensar parol-clave, deve vu obliviar tui parol-clave.',
'prefs-help-email-others' => 'Vu posse anc optar por permisser altri contacter vu per e-mail complet che un catenun in tui págine de usator o págine de discussion.
Tui adresse de e-mail ne es revelat quande altri usatores contacter vu.',

# User rights
'userrights' => 'Gerement de jures de usator',
'userrights-lookup-user' => 'Gerer gruppes de usator',
'userrights-user-editname' => 'Intrar un nómine de usator:',
'userrights-editusergroup' => 'Redacter gruppes de usator',
'userrights-groupsmember' => 'Membre de:',
'userrights-groupsmember-auto' => 'Membre implicit de:',
'userrights-groups-help' => 'Vu posse alterar li gruppes de ti usator in:
* Un buxe controlat significa que li usator es in ti gruppe.
* Un buxe descontrolat significa que li usator ne es in ti gruppe.
* Un * indica que vu ne posse remover li gruppe un vez que vu have adjuntet it, o inversi.',
'userrights-reason' => 'Motive:',
'userrights-no-interwiki' => 'Vu ne have permission por redacter jures de usator in altri wikis.',
'userrights-nodatabase' => 'Funde de data $1 ne existe o ne es local.',
'userrights-nologin' => 'Vu deve [[Special:UserLogin|registrar]] che un conto de administrator por atribuer jures de usator.',
'userrights-notallowed' => 'Tui conto ne have permission por atribuer jures de usator.',
'userrights-changeable-col' => 'Gruppes que vu posse changear',
'userrights-unchangeable-col' => 'Gruppes que vu ne posse changear',

# Groups
'group-user' => 'Usatores',
'group-sysop' => 'Administratores',

'group-user-member' => 'Usator',

'grouppage-user' => '{{ns:project}}:Usatores',
'grouppage-sysop' => '{{ns:project}}:Administratores',
'grouppage-bureaucrat' => '{{ns:project}}:Burócrates',
'grouppage-suppress' => '{{ns:project}}:Vigilatores',

# Special:Log/newusers
'newuserlogpage' => 'Diarium de creation de usator',

# User rights log
'rightslog' => 'Diarium de jures de usator',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'redacter ti págine',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|change|changes}}',
'recentchanges' => 'Nov changes',
'recentchanges-legend' => 'Optiones de nov changes',
'recentchanges-summary' => 'Seque sur ti-ci págine li ultim modificationes al wiki.',
'recentchanges-feed-description' => 'Monstra li max nov changes to li wiki in ti feed.',
'recentchanges-label-newpage' => 'Ti redaction creat un nov págine',
'recentchanges-label-minor' => 'Ti es un redaction minori',
'recentchanges-label-bot' => 'Ti redaction esset efectuat per un machine',
'recentchanges-label-unpatrolled' => 'Ti redaction ne have ancor esset protectet',
'rcnotefrom' => "In infra es li changes desde '''$2''' (ad-supra por '''$1''' monstrat).",
'rclistfrom' => 'Monstrar li nov modificationes desde $1.',
'rcshowhideminor' => '$1 redactiones minori',
'rcshowhidebots' => '$1 machines',
'rcshowhideliu' => '$1 usatores registrat',
'rcshowhideanons' => '$1 usatores anonim',
'rcshowhidepatr' => '$1 redactiones vigilat',
'rcshowhidemine' => '$1 mi redactiones',
'rclinks' => 'Monstrar li $1 ultim modificationes fat durante li $2 ultim dies<br />$3.',
'diff' => 'dif',
'hist' => 'hist',
'hide' => 'Celar',
'show' => 'Monstrar',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'rc-enhanced-expand' => 'Monstrar detaľes (per JavaScript)',
'rc-enhanced-hide' => 'Ocultar detallies',

# Recent changes linked
'recentchangeslinked' => 'Changes referet',
'recentchangeslinked-feed' => 'Relatet modificationes',
'recentchangeslinked-toolbox' => 'Changes in referentiat págines',
'recentchangeslinked-title' => 'Changes relatet por "$1"',
'recentchangeslinked-summary' => "To es un liste del nov changes in li referentiat págines (respectivmen in li membres del categorie).
Págines in [[Special:Watchlist|tui liste de vigilat págines]] es '''nigri'''.",
'recentchangeslinked-page' => 'Nómine de págine:',
'recentchangeslinked-to' => 'Monstrar changes por págines ligat por li págine disposit in vice',

# Upload
'upload' => 'Cargar file',
'uploadbtn' => 'Cargar file',
'uploadnologin' => 'Vu ne ha intrat',
'uploadnologintext' => 'Vu deve esser [[Special:UserLogin|registrat]] por cargar files.',
'uploaderror' => 'Errore de cargament',
'uploadtext' => "Usa li forme infra por cargar files.
Por vider o serchar files cargat anteriorimen ear por li [[Special:FileList|liste de files cargat]], (re)cargamentes es anc registrat in li [[Special:Log/upload|diarium de cargament]], deletiones in li [[Special:Log/delete|diarium de deletion]].

Por includer un file in un págine, usa un catenun in un de sequent formes:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' por usar li version complet de li file
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|alt text]]</nowiki></code>''' por usar un rendition larg de 200 pixel in un buxe in li márgine levul che 'alt text' quam descrition
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' por ligar inmediatmen por li file sin monstrar li file",
'upload-permitted' => 'Tipes de file permisset: $1.',
'upload-preferred' => 'Tipes de file preferet: $1.',
'upload-prohibited' => 'Tipes de file prohibit: $1.',
'uploadlog' => 'Diarium de cargament',
'uploadlogpage' => 'Diarium de cargament',
'uploadlogpagetext' => 'Infra es un liste de cargamentes de file max recent.
Vider li [[Special:NewFiles|galerie de nov files]] por posser vider it.',
'filedesc' => 'Descrition',
'verification-error' => 'Ti file ne passat per li verification de file.',
'unknown-error' => 'Un errore desconosset ocurret.',
'tmp-create-error' => 'Ne posset crear file temporari.',
'tmp-write-error' => 'Errore por redacter file temporari.',
'uploadwarning' => 'Advertiment de cargament',
'uploadwarning-text' => 'Pleser modificar li descrition de file infra e prova denov.',
'savefile' => 'Conservar file',
'uploadedimage' => 'cargat "[[$1]]"',
'uploadfromurl-queued' => 'Tui cargament ha esset fat.',
'uploadscripted' => 'Ti file contene HTML o code scrite que posse esser interpretet erroremen per un navigator web.',
'uploadvirus' => 'Li file contene un virus!
Detallies: $1',
'upload-maxfilesize' => 'Mesura maxim de file: $1',
'upload-description' => 'Descrition de file',
'upload-options' => 'Optiones de cargament',
'watchthisupload' => 'Vigilar ti file',
'upload-failure-subj' => 'Problema de cargament',
'upload-failure-msg' => 'Ta esset un problema che tui cargament:
$1',

'upload-proto-error' => 'Protocol incorect',
'upload-proto-error-text' => 'Cargament distant exige comense che <code>http://</code> o <code>ftp://</code>.',
'upload-file-error' => 'Errore intern',
'upload-file-error-text' => 'Un errore intern ocurret quande atentant crear un file temporari in li servitor.
Pleser parla che un [[Special:ListUsers/sysop|administrator]].',
'upload-misc-error' => 'Errore desconosset de cargament',
'upload-misc-error-text' => 'Un errore desconosset ocurret durante li cargament.
Pleser verificar que li URL es valid e accessibil e prova denov.
Si li problema persister, parla che un [[Special:ListUsers/sysop|administrator]].',
'upload-http-error' => 'Un errore HTTP ocurret: $1',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'Ne esset possibil ear in li URL',
'upload-curl-error6-text' => 'Li URL preferet ne esset visitat.
Pleser vide denov que li URL es corect e si li loc es disponibil.',
'upload-curl-error28' => 'For de témpor por cargament de files',
'upload-curl-error28-text' => 'Ti loc demorat mult témpor por responder.
Pleser vider se li loc es disponibil, atende un témpor e prova denov.
Vu posse provar in un témpor minu activ.',

'license' => 'Autorisant:',
'license-header' => 'Autorisant',

# Special:ListFiles
'imgfile' => 'archive',
'listfiles' => 'Archives',

# File description page
'file-anchor-link' => 'Figura',
'filehist' => 'Versiones del file',
'filehist-help' => 'Clacca a un date/témpore por vider ti version.',
'filehist-revert' => 'reverter',
'filehist-current' => 'actual',
'filehist-datetime' => 'Version de',
'filehist-thumb' => 'Miniatura',
'filehist-thumbtext' => 'Miniatura por li version de $2, clocca $3',
'filehist-user' => 'Usator',
'filehist-dimensions' => 'Dimensiones',
'filehist-filesize' => 'Mesura de file',
'filehist-comment' => 'Commentarie',
'imagelinks' => 'Usada del file',
'linkstoimage' => 'Li sequent {{PLURAL:$1|catenun de págine|$1 catenunes de págines}} por ti file:',
'nolinkstoimage' => 'Hay nequant págine que liga por ti file.',
'sharedupload-desc-here' => 'Ti file es de $1 e posse esser usat de altri projectes.
Li descrition in su [$2 págine de descrition] es monstrat in infra.',
'uploadnewversion-linktext' => 'Cargar un nov version de ti file',

# File deletion
'filedelete-submit' => 'Deleter',

# MIME search
'mimesearch' => 'Serchar MIME',

# Unwatched pages
'unwatchedpages' => 'Págines desvigilat',

# List redirects
'listredirects' => 'Liste de redirecteriones',

# Unused templates
'unusedtemplates' => 'Avises sin use',
'unusedtemplatestext' => 'Ti págine lista omni li págines in li spacie de nómine {{ns:template}} quel ne es includet in altri págine. Memorar de controlar por altri catenunes por li avises ante de deleter les.',
'unusedtemplateswlh' => 'altri catenunes',

# Random page
'randompage' => 'Págine in hasard',

# Statistics
'statistics' => 'Statistica',
'statistics-header-pages' => 'Statistica del págine',
'statistics-header-edits' => 'Redacter statistica',
'statistics-header-views' => 'Vider statistica',
'statistics-header-users' => 'Statistica de usator',
'statistics-header-hooks' => 'Altri statistica',
'statistics-articles' => 'Págines de contenete',
'statistics-pages' => 'Págines',
'statistics-pages-desc' => 'Omni li págines in li wiki, includent págines de discussion, redirectments, etc.',
'statistics-files' => 'Files cargat',
'statistics-edits' => 'Redactiones del págine desde que {{SITENAME}} esset etablisset',
'statistics-edits-average' => 'Valore medial de redactiones per págine',
'statistics-views-total' => 'Total de vistas',
'statistics-views-peredit' => 'Vider por redaction',
'statistics-users' => '[[Special:ListUsers|Usatores]] registrat',
'statistics-users-active' => 'Usatores activ',
'statistics-users-active-desc' => 'Usatores qui have efectuat un action in li ultim {{PLURAL:$1|die|dies}}',
'statistics-mostpopular' => 'Págines max visitat',

'brokenredirects-edit' => 'redacter',
'brokenredirects-delete' => 'deleter',

'withoutinterwiki' => 'Págines sin catenunes de lingue',
'withoutinterwiki-summary' => 'Li proxim págines ne liga por altri versiones de lingue.',
'withoutinterwiki-legend' => 'Prefixe',
'withoutinterwiki-submit' => 'Monstrar',

'fewestrevisions' => 'Págines che max poc revisiones',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories' => '$1 {{PLURAL:$1|categorie|categories}}',
'nlinks' => '$1 {{PLURAL:$1|catenun|catenunes}}',
'nmembers' => '$1 {{PLURAL:$1|usator|usatores}}',
'specialpage-empty' => 'Hay nequant resultates por ti raporte.',
'lonelypages' => 'Orfani págines',
'uncategorizedpages' => 'Págines íncategorizet',
'uncategorizedcategories' => 'Categories íncategorizet',
'uncategorizedimages' => 'Figuras íncategorizet',
'uncategorizedtemplates' => 'Avises íncategorizet',
'unusedcategories' => 'Categories sin use',
'unusedimages' => 'Figuras sin use',
'wantedcategories' => 'Categories carit',
'wantedpages' => 'Págines carit',
'wantedpages-badtitle' => 'Titul ínvalid in serie de resultate: $1',
'wantedfiles' => 'Files carit',
'wantedtemplates' => 'Avises carit',
'prefixindex' => 'Omni li págines che prefixe',
'shortpages' => 'Págines curt',
'longpages' => 'Págines long',
'deadendpages' => 'Págines sin exeada',
'listusers' => 'Liste de usatores',
'usereditcount' => '$1 {{PLURAL:$1|redaction|redactiones}}',
'usercreated' => '{{GENDER:$3|Creat}} in $1 in $2',
'newpages' => 'Nov págines',
'ancientpages' => 'Li max old págines',
'move' => 'Mover',
'movethispage' => 'Mover ti págine',
'unusedimagestext' => 'Li proxim files existe ma ne esser fixat in alquel págine. Pleser note que altri págines de Internet posse ligar por un file che un URL direct, e talmen posse silentment esser listat ci malgré essant in usu activ.',
'unusedcategoriestext' => 'Li proxim págines de categorie existe, benque ne existe altri págine o categorie que far usu de les.',
'pager-newer-n' => '{{PLURAL:$1|nov 1|nov $1}}',
'pager-older-n' => '{{PLURAL:$1|antiqui 1|antiqui $1}}',
'suppress' => 'Perspective comun',

# Book sources
'booksources' => 'Librari fontes',
'booksources-search-legend' => 'Serchar por fontes de libre',
'booksources-go' => 'Ear',

# Special:Log
'specialloguserlabel' => 'Executor:',
'speciallogtitlelabel' => 'Cible (titul o usator):',
'log' => 'Diariumes',
'all-logs-page' => 'Omni li diariumes public',

# Special:AllPages
'allpages' => 'Omni li págines',
'alphaindexline' => '$1 till $2',
'nextpage' => 'Proxim págine ($1)',
'prevpage' => 'Ultim págine ($1)',
'allarticles' => 'Omni li articules',
'allpagessubmit' => 'Applicar',

# Special:Categories
'categories' => 'Categories',
'special-categories-sort-count' => 'Sorte per contar',
'special-categories-sort-abc' => 'Sorte alfabeticmen',

# Special:LinkSearch
'linksearch' => 'Catenunes extern',
'linksearch-ns' => 'Spacie de nómine:',
'linksearch-line' => '$1 es ligat de $2',

# Special:ListGroupRights
'listgrouprights-members' => '(liste de membres)',

# Email user
'emailuser' => 'Parlar che ti usator',
'usermailererror' => 'Objecte de postage retornat errore:',
'usermaildisabled' => 'E-mail de usator desvalidat',
'usermaildisabledtext' => 'Vu ne posse inviar e-mail por altri usatores in ti wiki',

# User Messenger
'usermessage-summary' => 'Abandonant missage del sistema',
'usermessage-editor' => 'Missagero del sistema',
'usermessage-template' => 'MediaWiki:UserMessage',

# Watchlist
'watchlist' => 'Vigilat págines',
'mywatchlist' => 'Vigilat págines',
'watchlistfor2' => 'Por $1 $2',
'watchlistanontext' => 'Pleser $1 por vider o redacter articules in tui liste de págines vigilat.',
'watchnologin' => 'Vu ne ha intrat',
'watchnologintext' => 'Vu deve esser [[Special:UserLogin|registrat]] por redacter tui liste de págines vigilat.',
'addedwatchtext' => "Li págine ''[[$1]]'' ha esset adjuntet a vor [[Special:Watchlist|liste de sequet págines]]. Li proxim modificationes de ti ci págine e del associat págine de discussion va esser listat ci, e li págine va aperir '''aspessat''' in li [[Special:RecentChanges|liste de recent modificationes]] por esser trovat plu facilmen. Por supresser ti ci págine ex vor liste, ples claccar sur « Ne plu sequer » in li cadre de navigation.",
'watch' => 'Vigilar',
'watchthispage' => 'Vigilar ti págine',
'unwatch' => 'Desvigilar',
'watchlist-details' => '{{PLURAL:$1|$1 págine|$1 págines}} in tui liste de págines vigilat, sin págines de discussion.',
'wlheader-enotif' => 'Li notification de e-mail es permisset.',
'wlheader-showupdated' => "Págines quel hat esset mutat desde tui ultim visitation es monstrat in '''nigri'''",
'watchmethod-recent' => 'controlant nov redactiones por págines vigilat',
'watchmethod-list' => 'controlant págines vigilat por nov redactiones',
'watchlistcontains' => 'Tui liste de págines vigilat contene $1 {{PLURAL:$1|págine|págines}}.',
'wlshowlast' => 'Monstra ultim $1 hores $2 dies $3',
'watchlist-options' => 'Optiones de liste de págines vigilat',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Vigilant...',
'unwatching' => 'Desvigilant...',

'created' => 'creat',

# Delete
'deletepage' => 'Deleter págine',
'delete-legend' => 'Deleter',
'actioncomplete' => 'Processu complet',
'actionfailed' => 'Processu fallit',
'dellogpage' => 'Diarium de deletion',
'deletecomment' => 'Motive:',
'deleteotherreason' => 'Altri motive:',
'deletereasonotherlist' => 'Altri motive',

# Rollback
'rollbacklink' => 'desfar',

# Protect
'protectlogpage' => 'Diarium de protection',
'protectedarticle' => 'gardat "[[$1]]"',
'prot_1movedto2' => '[[$1]] hat movet por [[$2]]',
'protectcomment' => 'Motive:',
'protect-level-sysop' => 'Administratores solmen',
'protect-expiring' => 'expira $1 (UTC)',
'restriction-type' => 'Permission:',

# Restrictions (nouns)
'restriction-edit' => 'Redacter',
'restriction-move' => 'Mover',

# Undelete
'undelete' => 'Vider págines deletet',
'undeletepage' => 'Vider e restaurar págines deletet',
'undeletepagetitle' => "'''Li proxim consiste de revisiones deletet de [[:$1|$1]]'''.",
'viewdeletedpage' => 'Vider págines deletet',
'undeletepagetext' => 'Li proxim {{PLURAL:$1|págine ha esset deletet ma es|$1 págines have esset esset deletet ma es}} ínmobil in li archive e posse esser restaurat. Li archive posse esser periodicomen demuddat.',
'undelete-fieldset-title' => 'Restaurar revisiones',
'undeleteextrahelp' => "Por restaurar li historie complet de págine, abandona omni li buxes de controle deselectet e clacca '''''{{int:undeletebtn}}'''''.
Por efectuar un restauration selectiv, controla li buxes secun por li revisiones por esser restaurat, e clacca '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|revision|revisiones}} conservat',
'undeletehistory' => 'Si vu restaurar li págine, omni li revisiones va esser restaurat por li historie.
Si un nov págine che nómine identic ha esset creat desde li deletion, li revisiones restaurat va aparir in li historie precedent.',
'undeleterevdel' => 'Restauration ne va esser efectuat si it va resultar in li págine superiori o revision de file essent partialmen deletet.
In tal casus, vu deve descontrolar o desocultar li ultim revision deletet.',
'undeletehistorynoadmin' => 'Ti págine ha esset deletet.
Li motive por deletion es monstrat in li summarium infra, junt che detallies del usatores que hat redactet ti págine ante de deletion.
Li textu efectiv de tis revisiones deletet es solmen disponibil por administratores.',
'undelete-revision' => 'Revision deletet de $1 (quam de $4, in $5) per $3:',
'undeleterevision-missing' => 'Revision ínvalid o mancant.
Vu posse have un catenun mal, o li revision posse have esset restaurat o removet del archive.',
'undelete-nodiff' => 'Ne esset instituet revision anteriori.',
'undeletebtn' => 'Restaurar',
'undeletelink' => 'vider/restaurar',
'undeleteviewlink' => 'vider',
'undeleteinvert' => 'Inverter selection',
'undeletecomment' => 'Motive:',
'undeletedrevisions' => '{{PLURAL:$1|1 revision|$1 revisiones}} restaurat',
'undeletedrevisions-files' => '{{PLURAL:$1|1 revision|$1 revisiones}} e {{PLURAL:$2|1 file|$2 files}} restaurat',
'undeletedfiles' => '{{PLURAL:$1|1 file|$1 files}} restaurat',
'undeletedpage' => "'''$1 ha esset restaurat'''

Consulta li [[Special:Log/delete|diarium de deletion]] por un registre de deletiones nov e restaurationes.",
'undelete-header' => 'Vider [[Special:Log/delete|li diarium de deletion]] por págines deletet currentmen.',
'undelete-search-box' => 'Serchar págines deletet',
'undelete-search-prefix' => 'Monstrar págines comensant che:',
'undelete-search-submit' => 'Serchar',
'undelete-no-results' => 'Ne esset instituet págines egale in li archive de deletion.',
'undelete-filename-mismatch' => 'Ne posse restaurar version de file $1 che hor e date: nómine de file misegala',
'undelete-bad-store-key' => 'Ne posse restaurar version che hor e date de file $1: file esset existet ante de deletion.',
'undelete-cleanup-error' => 'Error deletent archive sin usu de file "$1".',
'undelete-missing-filearchive' => 'Ne posse restaurar archive de file ID $1 pro que it ne es in li funde de data.
It posse have ja esset restaurat.',
'undelete-error-short' => 'Errore in li restauration de file: $1',
'undelete-error-long' => 'Errores esset incontrat durante li restauration de file:

$1',
'undelete-show-file-confirm' => 'Vu comprende se que vu cari vider li revision deletet del file "<nowiki>$1</nowiki>" de $2 in $3?',
'undelete-show-file-submit' => 'Yes',

# Namespace form on various pages
'namespace' => 'Spacie de nómine:',
'invert' => 'Inverter selection',
'blanknamespace' => '(Principal)',

# Contributions
'contributions' => 'Contributiones de {{GENDER:$1|usator|usatoressa}}',
'contributions-title' => 'Contributiones de usator por $1',
'mycontris' => 'Contributiones',
'contribsub2' => 'De {{GENDER:$3|$1}} ($2)',
'uctop' => '(actual)',
'month' => 'De mensu (e anterioris):',
'year' => 'De annu (e anterioris):',

'sp-contributions-newbies' => 'Monstar contributiones de nov contos solmen',
'sp-contributions-newbies-sub' => 'Por nov contos',
'sp-contributions-blocklog' => 'diarium de bloc',
'sp-contributions-uploads' => 'cargamentes de file',
'sp-contributions-logs' => 'diariumes',
'sp-contributions-talk' => 'Discussion',
'sp-contributions-search' => 'Serchar por contributiones',
'sp-contributions-username' => 'Adresse de IP o nómine de usator:',
'sp-contributions-toponly' => 'Solmen monstrar redactiones que es in max recent revisiones',
'sp-contributions-submit' => 'Serchar',

# What links here
'whatlinkshere' => 'Referenties a ti-ci págine',
'whatlinkshere-title' => 'Págines quo liga por "$1"',
'whatlinkshere-page' => 'Págine:',
'linkshere' => "Li sequent págines liga por '''[[:$1]]''':",
'nolinkshere' => "Nequant págine liga por '''[[:$1]]'''.",
'isredirect' => 'págine de redirecterion',
'istemplate' => 'inclusion',
'isimage' => 'referentie a un file',
'whatlinkshere-prev' => '{{PLURAL:$1|anterior|$1 anterioris}}',
'whatlinkshere-next' => '{{PLURAL:$1|proxim|proxim $1}}',
'whatlinkshere-links' => '← catenunes',
'whatlinkshere-hideredirs' => '$1 redirectiones',
'whatlinkshere-hidetrans' => '$1 transclusiones',
'whatlinkshere-hidelinks' => '$1 catenunes',
'whatlinkshere-hideimages' => '$1 referenties a picturas.',
'whatlinkshere-filters' => 'Filtres',

# Block/unblock
'blockip' => 'Blocar usator',
'ipbreason' => 'Motive:',
'ipboptions' => '2 hores:2 hours,1 die:1 day,3 dies:3 days,1 semane:1 week,2 semanes:2 weeks,1 mensu:1 month,3 mensus:3 months,6 mensus:6 months,1 annu:1 year,ínfinit:infinite',
'ipblocklist' => 'Usatores blocat',
'ipblocklist-submit' => 'Serchar',
'infiniteblock' => 'infinit',
'blocklink' => 'blocar',
'unblocklink' => 'desblocar',
'change-blocklink' => 'changer blocada',
'contribslink' => 'contributiones',
'blocklogpage' => 'Diarium de bloc',
'blocklogentry' => '"[[$1]]" hat blocat che un témpor de expiration de $2 $3',
'block-log-flags-nocreate' => 'creation de conto debilisat',

# Move page
'movearticle' => 'Mover págine:',
'newtitle' => 'Por nov titul:',
'move-watch' => 'Vigilar ti págine',
'movepagebtn' => 'Mover págine',
'movelogpage' => 'Diarium de movementiones',
'movereason' => 'Motive:',
'revertmove' => 'reverter',

# Export
'export' => 'Exportar págines',

# Namespace 8 related
'allmessages' => 'Liste del missages del sistema',
'allmessagesname' => 'Nómine',
'allmessagesdefault' => 'Textu de missage de contumacie',

# Thumbnails
'thumbnail-more' => 'Expander',
'thumbnail_error' => 'Errore creant miniatura: $1',
'thumbnail_invalid_params' => 'Parametres de miniatura ínvalid',
'thumbnail_dest_directory' => 'Ne posse crear adressarium de adresse',
'thumbnail_image-type' => 'Tip de figura ne suportat',
'thumbnail_gd-library' => 'Configuration de biblioteca GD íncomplet: mancant function $1',
'thumbnail_image-missing' => 'File sembla por esser mancant: $1',

# Special:Import
'xml-error-string' => '$1 in linea $2, col $3 (byte $4): $5',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Tui págine de usator',
'tooltip-pt-anonuserpage' => 'Li págine de usator por li adresse de IP vu es redactent quam',
'tooltip-pt-mytalk' => 'Tui págine de conversation',
'tooltip-pt-anontalk' => 'Discussion pri redactiones de adresses de IP',
'tooltip-pt-preferences' => 'Tui preferenties',
'tooltip-pt-watchlist' => 'Liste de vigilat págines',
'tooltip-pt-mycontris' => 'Liste de tui contributiones',
'tooltip-pt-login' => 'Tu es incorrageat crear un conto, ma to ne es un deventie.',
'tooltip-pt-logout' => 'Surtir',
'tooltip-ca-talk' => 'Discussion pri li articul.',
'tooltip-ca-edit' => 'Redacter ti págine. Ples usar li buton de prevision antequam conservar.',
'tooltip-ca-addsection' => 'Comensar un nov section',
'tooltip-ca-viewsource' => 'Ti págine es protectet. Ma tu posse vider e copiar su fonte.',
'tooltip-ca-history' => 'Passat versiones de ti págine',
'tooltip-ca-protect' => 'Gardar ti págine',
'tooltip-ca-unprotect' => 'Desgardar ti págine',
'tooltip-ca-delete' => 'Deleter ti págine',
'tooltip-ca-undelete' => 'Restaurar li redactiones executet pro ti págine ante de it esser deletet',
'tooltip-ca-move' => 'Mover ti págine',
'tooltip-ca-watch' => 'Adjunter ti págine a tui liste de vigilat págines',
'tooltip-ca-unwatch' => 'Desvigilar ti págine de tui liste de págines vigilat',
'tooltip-search' => 'Serchar {{SITENAME}}',
'tooltip-search-go' => 'Ear por un págine che ti nómine exact, si it exister',
'tooltip-search-fulltext' => 'Serchar págines, queles contene ti textu',
'tooltip-p-logo' => 'Principal págine',
'tooltip-n-mainpage' => 'Monstrar li principal págine',
'tooltip-n-mainpage-description' => 'Visitar li principal págine',
'tooltip-n-portal' => 'Pri li projecte, quo tu posse far, u tu posse trovar alquó',
'tooltip-n-currentevents' => 'Fundal informationes pri actual evenimentes',
'tooltip-n-recentchanges' => 'Liste de nov changes in li wiki',
'tooltip-n-randompage' => 'Cargar un págine in hasard',
'tooltip-n-help' => 'Monstrar un págine de auxilie',
'tooltip-t-whatlinkshere' => 'Liste de omni págines ligant a ci.',
'tooltip-t-recentchangeslinked' => 'Nov changes in págines ligat fro ti págine',
'tooltip-feed-rss' => 'Feed RSS por ti págine',
'tooltip-feed-atom' => 'Feed atom por ti págine',
'tooltip-t-contributions' => 'Vider li liste de contributiones de ti usator',
'tooltip-t-emailuser' => 'Inviar un e-mail por ti usator',
'tooltip-t-upload' => 'Cargar files',
'tooltip-t-specialpages' => 'Liste de omni special págines',
'tooltip-t-print' => 'Printabil version de ti-ci págine',
'tooltip-t-permalink' => 'Permanent referentie a ti version del págine',
'tooltip-ca-nstab-main' => 'Vider li articul',
'tooltip-ca-nstab-user' => 'Vider li págine de usator',
'tooltip-ca-nstab-media' => 'Vider li págine de media',
'tooltip-ca-nstab-special' => 'Ti es un págine special, vu ne posse redacter it',
'tooltip-ca-nstab-project' => 'Vider li págine de projecte',
'tooltip-ca-nstab-image' => 'Vider li págine de figura',
'tooltip-ca-nstab-mediawiki' => 'Vider li missage de sistema',
'tooltip-ca-nstab-template' => 'Monstrar li shablone',
'tooltip-ca-nstab-help' => 'Vider li págine de auxilie',
'tooltip-ca-nstab-category' => 'Monstrar li categorial págine',
'tooltip-minoredit' => 'Marcar to ci quam un redaction minori',
'tooltip-save' => 'Conservar tui changes',
'tooltip-preview' => 'Previder tui changes. Ples usar to antequam conservar!',
'tooltip-diff' => 'Monstrar quel changes vu executet in li textu',
'tooltip-compareselectedversions' => 'Vider li differenties inter li du revisiones selectet de ti págine',
'tooltip-watch' => 'Adjunter ti págine por tui liste de págines vigilat',
'tooltip-recreate' => 'Recrear li págine por plan anteriori de delete',
'tooltip-upload' => 'Comensar cargament de file',
'tooltip-rollback' => 'Desfá omni ultim changes del págine, queles ha esset executet del sam usator, per un sol clacca',
'tooltip-undo' => '«Desfar» reverte solmen ti-ci redaction e monstra li resultate in prevision, porque tu posse indicar un rason in li linea de resumé.',
'tooltip-preferences-save' => 'Conservar preferenties',
'tooltip-summary' => 'Ples intrar un curt resummation.',

# Stylesheets
'vector.css' => '/* CSS colocat ci va afectar usatores de pelle Vector */',

# Scripts
'vector.js' => '/* Alquel JavaScript ci va esser cargat por usatores que usa li pelle Vector */',

# Browsing diffs
'previousdiff' => '← Redaction anteriori',
'nextdiff' => 'Proxim redaction →',

# Media information
'thumbsize' => 'Mesura de miniatura:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|págine|págines}}',
'file-info-size' => '$1 × $2 pixeles, dimension de file: $3, tip MIME: $4',
'file-nohires' => 'Nequant resolution max alt disponibil.',
'svg-long-desc' => '(file SVG, nominalmen $1 × $2 pixeles, mesura de file: $3)',
'show-big-image' => 'Original file',

# Special:NewFiles
'newimages' => 'Galerie de nov images',
'ilsubmit' => 'Serchar',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'video-dims' => '$1, $2×$3',

# Bad image list
'bad_image_list' => 'Formate:

Solmen lineas comensant per un * es considerat.
Strax pos li * deve secuer un referentie a un mal file.
Secuent referenties in li sam linea defini exceptiones, u li file es leyalmen monstrat.',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Ti file contene information additional, probabilmen adjuntet de li cámera digitale o scandetor usat por crear o digitalizar it. Si li file ha esset redactet de tui statu original, alcun detallies posse ne reflecter completmen li file redactet.',
'metadata-fields' => 'Campes metadata de figura listat in ti missage va esser includet in págine de figura monstra quande li tabelle metadata es crulat.
Altri va esser ocultat per contumacie.
* fabrication
* modelle
* origine de figura
* témpor de exposition
* númere
* percentages de velocitá
* longore focal
* artist
* jure editorial
* descrition de figura
* latitúdine
* longitúdine
* altitudine',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'omni',
'namespacesall' => 'omni',
'monthsall' => 'omni',

# Multipage image navigation
'imgmultigo' => 'Ear!',

# Table pager
'table_pager_next' => 'Proxim págine',
'table_pager_prev' => 'Págine anteriori',
'table_pager_first' => 'Prim págine',
'table_pager_last' => 'Ultim págine',
'table_pager_limit' => 'Monstra $1 detallies por págine',
'table_pager_limit_label' => 'Detallies por págine',
'table_pager_limit_submit' => 'Ear',
'table_pager_empty' => 'Nequant resultates',

# Watchlist editor
'watchlistedit-numitems' => 'Tui liste de págines vigilat contene {{PLURAL:$1|1 titul|$1 titules}}, excludent págines de discussion.',
'watchlistedit-noitems' => 'Tui liste de págines vigilat ne contene titules.',
'watchlistedit-normal-title' => 'Redacter liste de págines vigilat',
'watchlistedit-normal-legend' => 'Remove titules del liste de págines vigilat',
'watchlistedit-normal-explain' => 'Titules in tui liste de págines vigilat es monstrat infra.
Por remover un titul, controla li buxe proxim por it, e clacca "{{int:Watchlistedit-normal-submit}}".
Vu posse anc [[Special:EditWatchlist/raw|redacter li liste vulnerosi]].',
'watchlistedit-normal-submit' => 'Remover titules',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 titul esset|$1 titules esset}} removet de tui liste de págines vigilat:',
'watchlistedit-raw-title' => 'Redacter liste de págines vigilat vulnerosi',
'watchlistedit-raw-legend' => 'Redacter liste de págines vigilat vulnerosi',
'watchlistedit-raw-explain' => 'Titules in tui liste de págines vigilat es monstrat in infra, e posse esser redactet solmen adjuntent por e removent de li liste; un titul per linea.
Quande terminat, clacca "{{int:Watchlistedit-raw-submit}}".
Vu posse anc [[Special:EditWatchlist|usar li redactor uniform]].',
'watchlistedit-raw-titles' => 'Titules:',
'watchlistedit-raw-submit' => 'Modernisar liste de págines vigilat',
'watchlistedit-raw-done' => 'Tui liste de págines vigilat ha esset modernisat.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 titul esset|$1 titules esset}} adjuntet:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 titul esset|$1 titules esset}} removet:',

# Watchlist editing tools
'watchlisttools-view' => 'Vider changes aplicabil',
'watchlisttools-edit' => 'Vider e redacter liste de págines vigilat',
'watchlisttools-raw' => 'Redacter liste de págines vigilat vulnerosi',

# Signatures
'timezone-utc' => 'UTC',

# Core parser functions
'duplicate-defaultsort' => '\'\'\'Advertiment:\'\'\' Clave de specie contumacie "$2" substitue temporanmen clave de specie contumacie "$1".',

# Special:Version
'version' => 'Version',
'version-extensions' => 'Extensiones installat',
'version-specialpages' => 'Págines special',
'version-parserhooks' => 'Croces analisatores',
'version-variables' => 'Variabiles',
'version-other' => 'Altri',
'version-mediahandlers' => 'Manuettes de media',
'version-hooks' => 'Croces',
'version-parser-extensiontags' => 'Puntales de extension analisatores',
'version-parser-function-hooks' => 'Croces de functiones analisatores',
'version-hook-name' => 'Nómine de croc',
'version-hook-subscribedby' => 'Subscrit per',
'version-version' => '(Version $1)',
'version-svn-revision' => '(r$2)',
'version-license' => 'Licentie',
'version-software' => 'Software installat',
'version-software-product' => 'Producte',
'version-software-version' => 'Version',

# Special:SpecialPages
'specialpages' => 'Special págines',
'specialpages-group-maintenance' => 'Raportes de conservation',
'specialpages-group-other' => 'Altri págines special',
'specialpages-group-login' => 'Intrar / crear conto',
'specialpages-group-changes' => 'Nov changes e diariumes',
'specialpages-group-media' => 'Raportes de media e cargamentes de files',
'specialpages-group-users' => 'Usatores e jures',
'specialpages-group-highuse' => 'Págines de alt usu',
'specialpages-group-pages' => 'Listes de págines',
'specialpages-group-pagetools' => 'Utensiles de págine',
'specialpages-group-wiki' => 'Data wiki e utensiles',
'specialpages-group-redirects' => 'Redirectionant págines special',
'specialpages-group-spam' => 'Utensiles de spam',

# External image whitelist
'external_image_whitelist' => '#Abandonar ti linea exactmen quam it es<pre>
#Colocar fragmentes de expression regulari (precismen li parte que ea inter li //) in infra
#Tis va esser egalat che li URLes de figuras extern (hotlinked)
#Tis que egala va esser monstrat quam figuras, altrimen solmen un catenun por li figura va esser monstrat
#Lineas comensant che # es tractat quam comentaries
#Ti es casu-ínsensitiv

#Colocar omni fragmentes regulari súper ti linea. Abandonar ti linea exactmen quam it es</pre>',

# Special:Tags
'tags' => 'Puntales de change valid',
'tag-filter' => 'Filtre de [[Special:Tags|puntale]]:',
'tag-filter-submit' => 'Filtre',
'tags-title' => 'Puntales',
'tags-intro' => 'Ti págine lista li puntales que li software posse marcar un redaction che, e lor signification.',
'tags-tag' => 'Nómine de puntale',
'tags-display-header' => 'Aspecte in listes de change',
'tags-description-header' => 'Descrition complet de signification',
'tags-hitcount-header' => 'Changes nómiat',
'tags-edit' => 'redacter',
'tags-hitcount' => '$1 {{PLURAL:$1|change|changes}}',

# New logging system
'rightsnone' => '(null)',

);
