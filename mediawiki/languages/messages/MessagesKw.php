<?php
/** Cornish (kernowek)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Kernoweger
 * @author Kw-Moon
 * @author MF-Warburg
 * @author Malafaya
 * @author Mongvras
 * @author Nemo bis
 * @author Nicky.ker
 * @author Nrowe
 * @author Scryfer
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Arbennek',
	NS_TALK             => 'Keskows',
	NS_USER             => 'Devnydhyer',
	NS_USER_TALK        => 'Keskows_Devnydhyer',
	NS_PROJECT_TALK     => 'Keskows_$1',
	NS_FILE             => 'Restren',
	NS_FILE_TALK        => 'Keskows_Restren',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Keskows_MediaWiki',
	NS_TEMPLATE         => 'Skantlyn',
	NS_TEMPLATE_TALK    => 'Keskows_Skantlyn',
	NS_HELP             => 'Gweres',
	NS_HELP_TALK        => 'Keskows_Gweres',
	NS_CATEGORY         => 'Klass',
	NS_CATEGORY_TALK    => 'Keskows_Klass',
);

$namespaceAliases = array(
	'Arbednek'           => NS_SPECIAL,
	'Cows'               => NS_TALK,
	'Kescows'            => NS_TALK,
	'Cows_Devnydhyer'    => NS_USER_TALK,
	'Kescows_Devnydhyer' => NS_USER_TALK,
	'Cows_$1'            => NS_PROJECT_TALK,
	'Kescows_$1'         => NS_PROJECT_TALK,
	'Cows_Restren'       => NS_FILE_TALK,
	'Kescows_Restren'    => NS_FILE_TALK,
	'Cows_MediaWiki'     => NS_MEDIAWIKI_TALK,
	'Kescows_MediaWiki'  => NS_MEDIAWIKI_TALK,
	'Cows_Scantlyn'      => NS_TEMPLATE_TALK,
	'Scantlyn'           => NS_TEMPLATE,
	'Kescows_Skantlyn'   => NS_TEMPLATE_TALK,
	'Cows_Gweres'        => NS_HELP_TALK,
	'Kescows_Gweres'     => NS_HELP_TALK,
	'Cows_Class'         => NS_CATEGORY_TALK,
	'Class'              => NS_CATEGORY,
	'Kescows_Class'      => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Activeusers'               => array( 'DevnydhyoryonVyw' ),
	'Allmessages'               => array( 'OllMessajys' ),
	'Allpages'                  => array( 'OllFolennow' ),
	'Ancientpages'              => array( 'FolennowKoth' ),
	'Badtitle'                  => array( 'TitelDrog' ),
	'Blankpage'                 => array( 'FolenWag' ),
	'Block'                     => array( 'Difenna' ),
	'Booksources'               => array( 'PennfentynyowLyver' ),
	'BrokenRedirects'           => array( 'DaskedyansowTerrys' ),
	'Categories'                => array( 'Klassys' ),
	'ChangeEmail'               => array( 'ChanjyaEbost' ),
	'ChangePassword'            => array( 'ChanjyaGerTremena' ),
	'ComparePages'              => array( 'KeheveliFolennow' ),
	'Confirmemail'              => array( 'AfydhyaEbost' ),
	'Contributions'             => array( 'Kevrohow' ),
	'CreateAccount'             => array( 'FormyaAkont' ),
	'Deadendpages'              => array( 'FolennowFordhDhall' ),
	'DeletedContributions'      => array( 'KevrohowDiles' ),
	'DoubleRedirects'           => array( 'DaswedyansowDewblek' ),
	'EditWatchlist'             => array( 'ChanjyaOwRolWolya' ),
	'Emailuser'                 => array( 'EbostyaDevnydhyer' ),
	'ExpandTemplates'           => array( 'BrasheSkantlyns' ),
	'Export'                    => array( 'Esperthi' ),
	'Fewestrevisions'           => array( 'AnLyhaAmendyansow' ),
	'Filepath'                  => array( 'HynsAnFolen' ),
	'Import'                    => array( 'Ymperthi' ),
	'Invalidateemail'           => array( 'DigomposaEbost' ),
	'JavaScriptTest'            => array( 'PrevyansJavaScript' ),
	'BlockList'                 => array( 'RolDhifen' ),
	'LinkSearch'                => array( 'HwilasKevrennow' ),
	'Listadmins'                => array( 'RolyaMenystroryon' ),
	'Listbots'                  => array( 'RolyaBottys' ),
	'Listfiles'                 => array( 'RolyaRestrennow' ),
	'Listgrouprights'           => array( 'RolyaGwiryowBagas' ),
	'Listredirects'             => array( 'RolyaDaskedyansow' ),
	'Listusers'                 => array( 'RolyaDevnydhyoryon' ),
	'Lockdb'                    => array( 'AlhwedhaDB' ),
	'Log'                       => array( 'Kovnoten', 'Kovnotennow' ),
	'Lonelypages'               => array( 'FolennowDigoweth' ),
	'Longpages'                 => array( 'FolennowHir' ),
	'MergeHistory'              => array( 'IstoriKesunya' ),
	'MIMEsearch'                => array( 'HwilasMIME' ),
	'Mostcategories'            => array( 'AnMoyhaKlassys' ),
	'Mostimages'                => array( 'AnMoyhaRestrennowKevennys' ),
	'Mostinterwikis'            => array( 'AnMoyhaInterwikis' ),
	'Mostlinked'                => array( 'AnMoyhaFolennowKevrennys' ),
	'Mostlinkedcategories'      => array( 'AnMoyhaKlassysKevrennys' ),
	'Mostlinkedtemplates'       => array( 'AnMoyhaSkantlynsKevrennys' ),
	'Mostrevisions'             => array( 'AnMoyhaAmendyansow' ),
	'Movepage'                  => array( 'GwayaFolen' ),
	'Mycontributions'           => array( 'OwHevrohow' ),
	'MyLanguage'                => array( 'OwYeth' ),
	'Mypage'                    => array( 'OwFolen' ),
	'Mytalk'                    => array( 'OwHeskows' ),
	'Myuploads'                 => array( 'OwUghkargansow' ),
	'Newimages'                 => array( 'RestrennowNowyth' ),
	'Newpages'                  => array( 'FolennowNowyth' ),
	'PasswordReset'             => array( 'DassetyaGerTremena' ),
	'PermanentLink'             => array( 'KevrenFast' ),
	'Preferences'               => array( 'Dewisyansow' ),
	'Prefixindex'               => array( 'MenegvaRagerow' ),
	'Protectedpages'            => array( 'FolennowDifresys' ),
	'Protectedtitles'           => array( 'TitlysDifres' ),
	'Randompage'                => array( 'FolenDreJons' ),
	'Randomredirect'            => array( 'DaskedyansDreJons' ),
	'Recentchanges'             => array( 'Chanjyow_a-dhiwedhes' ),
	'Recentchangeslinked'       => array( 'ChanjyowKelmys' ),
	'Revisiondelete'            => array( 'DileaAmendyans' ),
	'Search'                    => array( 'Hwilas' ),
	'Shortpages'                => array( 'FolennowBerr' ),
	'Specialpages'              => array( 'FolennowArbennek' ),
	'Statistics'                => array( 'Statystygyon' ),
	'Unblock'                   => array( 'DiswulDifennans' ),
	'Uncategorizedcategories'   => array( 'KlassysHebKlass' ),
	'Uncategorizedimages'       => array( 'RestrennowHebKlass' ),
	'Uncategorizedpages'        => array( 'FolennowHebKlass' ),
	'Uncategorizedtemplates'    => array( 'SkantlynsHebKlass' ),
	'Undelete'                  => array( 'DiswulDilea' ),
	'Unlockdb'                  => array( 'DialhwedhaDB' ),
	'Unusedcategories'          => array( 'KlassysHebDevnydh' ),
	'Unusedimages'              => array( 'RestrennowHebDevnydh' ),
	'Unusedtemplates'           => array( 'SkantlynsHebDevnydh' ),
	'Unwatchedpages'            => array( 'FolennowHebAgaHolya' ),
	'Upload'                    => array( 'Ughkarga' ),
	'Userlogin'                 => array( 'Omgelmi' ),
	'Userlogout'                => array( 'Digelmi' ),
	'Userrights'                => array( 'GwiryowDevnydhyer' ),
	'Version'                   => array( 'Versyon' ),
	'Wantedcategories'          => array( 'KlassysHwansus' ),
	'Wantedfiles'               => array( 'RestrennowHwansus' ),
	'Wantedpages'               => array( 'FolennowHwansus' ),
	'Wantedtemplates'           => array( 'SkantlynsHwansus' ),
	'Watchlist'                 => array( 'Rol_wolya' ),
	'Whatlinkshere'             => array( 'OwKevrennaOmma' ),
	'Withoutinterwiki'          => array( 'HebInterwiki' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#DASKEDYANS', '#REDIRECT' ),
	'numberofpages'             => array( '1', 'NIVERAFOLENNOW', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NIVERAERTHYGLOW', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NIVERARESTRENNOW', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NIVERADHEVNYDHYORYON', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NIVERADHEVNYDHYORYONVYW', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NIVERAJANJYOW', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'HANOWANFOLEN', 'PAGENAME' ),
	'fullpagename'              => array( '1', 'HANOWLEUNANFOLEN', 'FULLPAGENAME' ),
	'img_thumbnail'             => array( '1', 'skeusennik', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'skeusennik=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'dyhow', 'right' ),
	'img_left'                  => array( '1', 'kledh', 'left' ),
	'img_none'                  => array( '1', 'nagonan', 'none' ),
	'img_center'                => array( '1', 'kresel', 'center', 'centre' ),
	'img_framed'                => array( '1', 'fremys', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'hebfram', 'frameless' ),
	'img_page'                  => array( '1', 'folen=$1', 'folen_$1', 'page=$1', 'page $1' ),
	'img_top'                   => array( '1', 'gwartha', 'top' ),
	'img_text_top'              => array( '1', 'tekst-gwartha', 'text-top' ),
	'img_middle'                => array( '1', 'kres', 'middle' ),
	'img_bottom'                => array( '1', 'goles', 'bottom' ),
	'img_text_bottom'           => array( '1', 'tekst-goles', 'text-bottom' ),
	'img_link'                  => array( '1', 'kevren=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'HANOWANWIASVA', 'SITENAME' ),
	'pageid'                    => array( '0', 'IDANFOLEN', 'PAGEID' ),
	'server'                    => array( '0', 'SERVYER', 'SERVER' ),
	'servername'                => array( '0', 'HANOWANSERVYER', 'SERVERNAME' ),
	'grammar'                   => array( '0', 'GRAMASEK:', 'GRAMMAR:' ),
	'fullurl'                   => array( '0', 'URLLEUN:', 'FULLURL:' ),
	'displaytitle'              => array( '1', 'DISKWEDHESANTITEL', 'DISPLAYTITLE' ),
	'language'                  => array( '0', '#YETH:', '#LANGUAGE:' ),
	'numberofadmins'            => array( '1', 'NIVERAVENYSTRORYON', 'NUMBEROFADMINS' ),
	'special'                   => array( '0', 'arbennek', 'special' ),
	'filepath'                  => array( '0', 'HYNSANFOLEN:', 'FILEPATH:' ),
	'hiddencat'                 => array( '1', '__KLASSKUDHYS__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'RESTRENNOWYNKLASS', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'MYNSANRESTREN', 'PAGESIZE' ),
	'index'                     => array( '1', '__MENEGVA__', '__INDEX__' ),
	'noindex'                   => array( '1', '__HEBMENEGVA__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'NIVERYNBAGAS', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'url_path'                  => array( '0', 'HYNS', 'PATH' ),
	'pagesincategory_all'       => array( '0', 'oll', 'all' ),
	'pagesincategory_pages'     => array( '0', 'folennow', 'pages' ),
);

