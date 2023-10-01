<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/en/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-mail address of the system administrator';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'This e-mail address will be used to send and receive system messages.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Date format';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'The date format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Time format';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'The time format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Date and time format';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'The date and time format string will be parsed with the PHP date() function.';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Time zone';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Please select the server time zone.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Disable the command scheduler';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Disable the periodic command scheduler and trigger the <em>_contao/cron</em> route by a real cron job (which you have to set up manually).';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Items per page';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Here you can define the number of items per page in the back end.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Maximum items per page';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'This overall limit takes effect if a user chooses the "show all records" option.';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Do not collapse elements';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Do not collapse elements in the back end preview.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Allowed HTML tags';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Here you can enter a list of allowed HTML tags that will not be stripped.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes'][0] = 'Allowed HTML attributes';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes'][1] = 'List of allowed HTML attributes that will not be stripped. The tag or attribute name <code>*</code> stands for all tags or attributes. Wildcards can be used for attributes with dashes like <code>data-*</code>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributesWarning'] = 'Allowing <code>*</code> attributes can be exploited for XSS attacks. Only do this if all backend users are trusted!';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Disable request tokens';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Do not check the request token when a form is submitted (insecure!).';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Download file types';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Here you can enter a comma separated list of downloadable file types.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Maximum GD image width';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Here you can enter the maximum image width that the GD library shall try to handle.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Maximum GD image height';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Here you can enter the maximum image height that the GD library shall try to handle.';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Upload file types';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Here you can enter a comma separated list of uploadable file types.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Maximum upload file size';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Here you can enter the maximum upload file size in bytes (1 MB = 1000 kB = 1000000 byte).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Maximum image width';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Here you can enter the maximum width for image uploads in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Maximum image height';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Here you can enter the maximum height for image uploads in pixels.';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Default page owner';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Here you can select a user as the default owner of a page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Default page group';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Here you can select a user group as the default owner of a page.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Default access rights';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Please assign the default access rights for pages and articles.';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Date and time';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Global configuration';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Back end configuration';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Security settings';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Files and images';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Upload settings';
$GLOBALS['TL_LANG']['tl_settings']['cron_legend'] = 'Cron job settings';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Default access rights';
$GLOBALS['TL_LANG']['tl_settings']['configuredInApp'] = 'This setting has been defined in the app configuration and cannot be changed here anymore.';