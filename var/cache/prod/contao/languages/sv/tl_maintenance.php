<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/sv/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][0] = 'Ta bort sessiondata';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][1] = 'Välj vilken/vilka cache-tabell(er) som du vill rensa.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Åtgärd';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Beskrivning';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Ta bort sessiondata';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'Cachen har rensats';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Vänligen ange din %s här.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][0] = 'Rensa sökindex';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][1] = 'Rensar tabellerna <code>tl_search</code>, <code>tl_search_index</code> och <code>tl_search_term</code>. Efteråt måste du bygga om sökindexet (se ovan).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][0] = 'Rensa ångra-tabell';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][1] = 'Rensar tabellen <em>tl_undo</em> som lagrar raderade poster. Detta raderar posterna permanent.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][0] = 'Rensa versionstabell';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][1] = 'Rensar tabellen <em>tl_version</em> som lagrar tidigare versioner av poster. Detta raderar posterna permanent.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][0] = 'Rensa systemlogg';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][1] = 'Rensar tabellen <em>tl_log</em> som lagrar alla systemloggar. Detta raderar posterna permanent.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][0] = 'Rensa genomsökningskön';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][1] = 'Rensar tabellen <code>tl_crawl_queue</code> som lagrar all köinformation från genomsökningsprocesser.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][0] = 'Rensa bild-cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][1] = 'Tar bort de automatiskt genererade bilderna och rensar sedan den delade cachen, så det finns inga länkar till raderade resurser.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][0] = 'Rensa förhandsgranskningscachen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][1] = 'Tar bort de automatiskt genererade förhandsgranskningsbilderna och rensar sedan den delade cachen, så att det inte finns några länkar till borttagna resurser.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][0] = 'Rensa skript-cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][1] = 'Tar bort de automatiskt genererade <code>.css</code>- och <code>.js</code>-filerna, återskapar de interna stylesheets och rensar sedan den delade cachen.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][0] = 'Rensa den delade cachen';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][1] = 'Rensar cache:ade versioner av frontend-sidor.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][0] = 'Rensa temp-folder';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][1] = 'Rensar bort temporära filer.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][0] = 'Återskapa XML-filer';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][1] = 'Återskapar XML-filerna i den <code>shared</code> mappen och rensar sedan den shared cachen, så att det inte finns några länkar till borttagna resurser.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][0] = 'Återskapar symlinks';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][1] = 'Återskapar symlänkar i den offentliga mappen (dokumentrot).';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'Sökrobot';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'Börja genomsökning';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][0] = 'Aktiverade funktioner';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][1] = 'Sökroboten genomsöker alla webbadresser som den hittar. Här kan du bestämma vad du ska göra med dessa resultat.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][0] = 'Frontend- medlem';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][1] = 'Logga automatiskt in en frontend-medlem för att indexera skyddade sidor.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = 'Sökroboten arbetar för närvarande. Vänta tills det är klart för att se resultaten.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLog'] = 'Felsökningslogg';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLogExplain'] = 'Om fel uppstod eller sidor hoppades över, kontrollera felsökningsloggen för mer information.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadLog'] = 'Ladda ner logg';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = 'Uppdatera sökindexet';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = 'Sök efter trasiga länkar';