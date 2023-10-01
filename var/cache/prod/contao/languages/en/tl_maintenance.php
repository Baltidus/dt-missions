<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/en/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][0] = 'Purge data';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][1] = 'Please select the data you want to purge or rebuild.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Job';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Description';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Purge data';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'The data has been purged';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Please enter your %s here.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][0] = 'Purge the search index';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][1] = 'Truncates the tables <code>tl_search</code>, <code>tl_search_index</code> and <code>tl_search_term</code>. Afterwards, you have to rebuild the search index (see above).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][0] = 'Purge the undo table';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][1] = 'Truncates the <code>tl_undo</code> table which stores the deleted records. This job permanently deletes these records.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][0] = 'Purge the version table';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][1] = 'Truncates the <code>tl_version</code> table which stores the previous versions of a record. This job permanently deletes these records.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][0] = 'Purge the system log';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][1] = 'Truncates the <code>tl_log</code> table which stores all the system log entries. This job permanently deletes these records.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][0] = 'Purge the crawl queue';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][1] = 'Truncates the <code>tl_crawl_queue</code> table which stores all the queue information from crawl processes.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][0] = 'Purge the image cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][1] = 'Removes the automatically generated images and then purges the shared cache, so there are no links to deleted resources.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][0] = 'Purge the preview cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][1] = 'Removes the automatically generated preview images and then purges the shared cache, so there are no links to deleted resources.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][0] = 'Purge the script cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][1] = 'Removes the automatically generated <code>.css</code> and <code>.js</code> files, recreates the internal style sheets and then purges the shared cache.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][0] = 'Purge the shared cache';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][1] = 'Removes the cached versions of the front end pages.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][0] = 'Purge the temp folder';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][1] = 'Removes the temporary files.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][0] = 'Recreate the XML files';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][1] = 'Recreates the XML files in the <code>shared</code> folder and then purges the shared cache, so there are no links to deleted resources.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][0] = 'Recreate the symlinks';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][1] = 'Recreates the symlinks in the public folder (document root).';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'Crawler';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'Start crawling';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][0] = 'Enabled features';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][1] = 'The crawler crawls all URLs it finds. Here you can decide what to do with these results.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][0] = 'Front end member';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][1] = 'Automatically log in a front end member to index protected pages.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = 'The crawler is currently working. Please wait for it to finish to see the results.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLog'] = 'Debug log';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLogExplain'] = 'If errors occurred or pages were skipped, check the debug log for more information.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadLog'] = 'Download log';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = 'Update the search index';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = 'Check for broken links';
