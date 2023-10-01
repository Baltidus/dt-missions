<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/sv/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-postadress till systemadministratör';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Denna e-postadress kommer att användas för att skicka och ta emot systemmeddelanden.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Datumformat';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Ange ett datumformat så som det används av PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Tidsformat';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Ange ett tidsformat så som det används av PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Datum- och tidsformat';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Ange ett datum- och tidsformat så som det används av PHP-funktionen date().';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Tidszon';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Välj tidszon för din webbserver.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Avaktivera kommandoplaneraren';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Inaktivera den periodiska kommandoplanern och utlös <em>_contao/cron</em>-rutten med ett riktigt cron-jobb (som du måste ställa in manuellt).';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Antal poster per sida';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Här kan du ange ett standardvärde för hur många poster som kommer att visas i backend.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Max poster per sida';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Denna begränsning aktiveras när användaren väljer "visa alla poster".';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Kollapsa inte elementen';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Kollapsa inte innehållselementen och andra resurser när dom förhandsvisas i backend.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Tillåtna HTML-taggar';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Ange en lista med tillåtna HTML-taggar. Alla andra taggar kommer att tas bort från användarnas inmatningar.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes'][0] = 'Tillåtna HTML-attribut';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes'][1] = 'Lista över tillåtna HTML-attribut som inte kommer att tas bort. Taggen eller attributnamnet <code>*</code> står för alla taggar eller attribut. Jokertecken kan användas för attribut med bindestreck som <code>data-*</code>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributesWarning'] = 'Att tillåta <code>*</code>-attribut kan utnyttjas för XSS-attacker. Gör bara detta om alla backend-användare är betrodda!';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Slå av referenskontroll';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Kontrollera inte request-token när ett formulär skickas (osäker!).';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Godkända filtyper för nedladdning';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Ange en kommaseparerad lista med filändelser som är godkända för nedladdning. <br />Av säkerhetsskäl är filnedladdning begränsat till den mapp som filen finns i och dess undermappar.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maximal GD-bildbredd';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Ange maximal bildbredd för bilder som GD library ska försöka hantera.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maximal GD-bildhöjd';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Ange maximal bildhöjd för bilder som GD library ska försöka hantera.';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Godkända filtyper att ladda upp';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Ange en kommaseparerad lista med filtyper som kan laddas upp. <br />Av säkerhetsskäl är uppladdning begränsat till filmappen och dess undermappar.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maximal uppladdningsbar filstorlek';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Här kan du ange den maximala filstorleken i bytes som går att ladda upp (standard: 1 MB = 1000 kB = 1000000 bytes).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maximal bildbredd';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Ange den maximala bildbredden (i px) för bilder som laddas upp till siten.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maximal bildhöjd';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Ange den maximala bildhöjden (i px) för bilder som laddas upp till siten.';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Standard sidägare';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Som standard tillhör en sida samma användare som sin föräldrasida. Men, om sidan inte tilldelas en ägare kommer standardsidägaren att bli sidans ägare. <b>Om det inte finns en ägare eller en standardägare kommer det inte att finnas några åtkomstrestriktioner på sidan!</b>';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Standard sidgrupp';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Här kan du välja en användargrupp som standardägare till en sida.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Standardåtkomstvärden';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Som standard använder en sida samma behörigheter som sin föräldrasida. Men om inga behörigheter är definierade kommer dessa standardbehörigheter att användas.';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Datum och tid';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Global konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Backend-konfiguration';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Säkerhetsinställningar';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Filer och bilder';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Uppladdningsinställningar';
$GLOBALS['TL_LANG']['tl_settings']['cron_legend'] = 'Cron job inställningar';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Standardåtkomstvärden';
$GLOBALS['TL_LANG']['tl_settings']['configuredInApp'] = 'Den här inställningen har definierats i appkonfigurationen och kan inte ändras längre här.';