<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/pl/tl_maintenance.xlf
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][0] = 'Usuń dane';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheTables'][1] = 'Zaznacz te tabele, które chcesz wyczyścić.';
$GLOBALS['TL_LANG']['tl_maintenance']['job'] = 'Zadanie';
$GLOBALS['TL_LANG']['tl_maintenance']['description'] = 'Opis';
$GLOBALS['TL_LANG']['tl_maintenance']['clearCache'] = 'Usuń dane';
$GLOBALS['TL_LANG']['tl_maintenance']['cacheCleared'] = 'Pamięć podręczna została wyczyszczona';
$GLOBALS['TL_LANG']['tl_maintenance']['updateHelp'] = 'Wprowadź swój %s.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][0] = 'Wyczyść indeks wyszukiwarki';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['index'][1] = 'Czyści tabele <code>tl_search</code> i <code>tl_search_index</code> i <code>tl_search_term</code>. Po wszystkim powinieneś przebudować indeks wyszukiwarki (patrz wyżej).';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][0] = 'Wyczyść tabelę "cofnij"';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['undo'][1] = 'Czyści tabelę <em>tl_undo</em>, która zawiera usunięte rekordy. To zadanie permanentnie usunie te rekordy.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][0] = 'Wyczyść tabelę wersji';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['versions'][1] = 'Czyści tabelę <em>tl_version</em>, która zawiera poprzednie wersje danego rekordu. To zadanie permanentnie usunie te wersje.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][0] = 'Wyczyść logi systemu';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['log'][1] = 'Czyści tabelę <em>tl_log</em>, która zawiera wszystkie logi systemowe. To zadanie permanentnie usunie te rekordy.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][0] = 'Wyczyść kolejkę indeksowania';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['crawl_queue'][1] = 'Czyści tabelę <code>tl_crawl_queue</code>, która przechowuje wszystkie informacje o kolejce z procesów przeszukiwania.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][0] = 'Wyczyść cache obrazków';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['images'][1] = 'Usuwa automatycznie generowane obrazki, a następnie usuwa wspólną pamięć podręczną, więc nie ma żadnych łączy do usuniętych zasobów.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][0] = 'Wyczyść cache podglądu';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['previews'][1] = 'Usuwa automatycznie generowane obrazki podglądu i usuwa wspólną pamięć podręczną, więc nie ma żadnych łączy do usuniętych zasobów. ';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][0] = 'Wyczyść cache skryptów';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['scripts'][1] = 'Usuwa automatycznie generowane pliki <code>.css</code> i <code>.js</code>, odtwarza wewnętrzne arkusze stylów, a następnie usuwa wspólną pamięć podręczną.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][0] = 'Wyczyść wspólną pamięć podręczną';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['pages'][1] = 'Usuwa cacheowane wersje stron front end.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][0] = 'Wyczyść folder tymczasowy';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['temp'][1] = 'Usuwa pliki tymczasowe.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][0] = 'Odtwórz pliki XML';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['xml'][1] = 'Odtwarza pliki XML w folderze <code>shared</code>, a następnie usuwa współdzieloną pamięć podręczną, dzięki czemu nie ma żadnych łączy do usuniętych zasobów.';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][0] = 'Odtwórz linki symboliczne (symlinks)';
$GLOBALS['TL_LANG']['tl_maintenance_jobs']['symlinks'][1] = 'Odtwarza linki symboliczne w folderze publicznym (document root).';
$GLOBALS['TL_LANG']['tl_maintenance']['crawler'] = 'Crawler';
$GLOBALS['TL_LANG']['tl_maintenance']['startCrawling'] = 'Rozpocznij indeksowanie';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][0] = 'Włączone funkcje';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscribers'][1] = 'Robot indeksuje wszystkie znalezione adresy URL. Tutaj możesz zdecydować, co zrobić z tymi wynikami.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][0] = 'Użytkownik frontend';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlMember'][1] = 'Automatycznie loguj użytkownika frontendu, aby indeksować chronione strony.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlWaitToBeFinished'] = 'Robot obecnie działa. Poczekaj, aż zakończy się, aby zobaczyć wyniki.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLog'] = 'Dziennik debugowania';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDebugLogExplain'] = 'Jeśli wystąpiły błędy lub strony zostały pominięte, sprawdź dziennik debugowania, aby uzyskać więcej informacji.';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlDownloadLog'] = 'Pobierz dziennik';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['search-index'] = 'Zaktualizuj indeks wyszukiwania';
$GLOBALS['TL_LANG']['tl_maintenance']['crawlSubscriberNames']['broken-link-checker'] = 'Sprawdź, czy nie ma uszkodzonych linków';
