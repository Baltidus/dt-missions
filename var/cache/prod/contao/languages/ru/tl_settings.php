<?php

// vendor/contao/core-bundle/src/Resources/contao/languages/ru/tl_settings.xlf
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][0] = 'E-mail системного администратора';
$GLOBALS['TL_LANG']['tl_settings']['adminEmail'][1] = 'Этот адрес электронной почты будет использоваться для отправки и получения системных сообщений.';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][0] = 'Формат даты';
$GLOBALS['TL_LANG']['tl_settings']['dateFormat'][1] = 'Строка формата даты будет проанализирована функцией PHP date()';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][0] = 'Формат времени';
$GLOBALS['TL_LANG']['tl_settings']['timeFormat'][1] = 'Строка формата времени будет проанализирована функцией PHP date()';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][0] = 'Формат даты и времени';
$GLOBALS['TL_LANG']['tl_settings']['datimFormat'][1] = 'Строка формата даты и времени будет проанализирована функцией PHP date()';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][0] = 'Часовой пояс';
$GLOBALS['TL_LANG']['tl_settings']['timeZone'][1] = 'Выберите часовой пояс сервера.';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][0] = 'Отключить планировщик команд';
$GLOBALS['TL_LANG']['tl_settings']['disableCron'][1] = 'Отключить планировщик периодических команд и запускать <em>_contao/cron</em> как задания cron (необходимо установить вручную).';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][0] = 'Элементов на странице';
$GLOBALS['TL_LANG']['tl_settings']['resultsPerPage'][1] = 'Вы можете определить количество выводимых элементов на странице в панели управления.';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][0] = 'Максимальное количество элементов';
$GLOBALS['TL_LANG']['tl_settings']['maxResultsPerPage'][1] = 'Ограничение применяется, если пользователь выбирает значение \'Показать все записи\'.';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][0] = 'Не обрезать элементы';
$GLOBALS['TL_LANG']['tl_settings']['doNotCollapse'][1] = 'Не обрезать элементы контента и другие ресурсы при выводе в панели управления.';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][0] = 'Разрешенные HTML-теги';
$GLOBALS['TL_LANG']['tl_settings']['allowedTags'][1] = 'Вы можете ввести список допустимых HTML-тегов, которые не будут удалены.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes'][0] = 'Разрешенные атрибуты HTML';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributes'][1] = 'Список разрешенных атрибутов HTML, которые не будут удалены. Имя тега или атрибута <code>*</code> обозначает все теги или атрибуты. Подстановочные знаки можно использовать для атрибутов с тире, наприм., <code>data-*</code>.';
$GLOBALS['TL_LANG']['tl_settings']['allowedAttributesWarning'] = 'Разрешенные атрибуты <code>*</code> могут использоваться   для атак XSS. Делайте это только в случае, если всем пользователям панели управления есть доверие!';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][0] = 'Отключить запрос токенов';
$GLOBALS['TL_LANG']['tl_settings']['disableRefererCheck'][1] = 'Не проверять токен запроса при отправке формы (небезопасно!).';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][0] = 'Разрешенные для загрузки с сервера файлы';
$GLOBALS['TL_LANG']['tl_settings']['allowedDownload'][1] = 'Вы можете ввести разделенный запятыми список расширений файлов разрешенных к загрузке с сервера.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][0] = 'Максимальная ширина GD изображения';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgWidth'][1] = 'Вы можете ввести максимальную ширину изображения, которую библиотека GD должна попытаться обработать.';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][0] = 'Максимальная высота GD изображения';
$GLOBALS['TL_LANG']['tl_settings']['gdMaxImgHeight'][1] = 'Вы можете ввести максимальную высоту изображения, которую библиотека GD должна попытаться обработать.';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][0] = 'Разрешенные для загрузки на сервер файлы';
$GLOBALS['TL_LANG']['tl_settings']['uploadTypes'][1] = 'Вы можете ввести разделенный запятыми список расширений файлов разрешенных к загрузке на сервер.';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][0] = 'Максимальный размер загружаемого на сервер файла';
$GLOBALS['TL_LANG']['tl_settings']['maxFileSize'][1] = 'Вы можете ввести максимальный размер загружаемого на сервер файла в байтах (1 Мбайт = 1000 Кбайт = 1000000 байт).';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][0] = 'Максимальная ширина изображения';
$GLOBALS['TL_LANG']['tl_settings']['imageWidth'][1] = 'Вы можете ввести максимальную ширину загружаемого на сервер изображения в пикселах.';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][0] = 'Максимальная высота изображения';
$GLOBALS['TL_LANG']['tl_settings']['imageHeight'][1] = 'Вы можете ввести максимальную высоту загружаемого на сервер изображения в пикселах.';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][0] = 'Владелец страницы по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['defaultUser'][1] = 'Вы можете выбрать владельца страницы по умолчанию.';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][0] = 'Группа владельца страницы по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['defaultGroup'][1] = 'Вы можете выбрать группу пользователей, владельцев страницы по умолчанию.';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][0] = 'Права доступа по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['defaultChmod'][1] = 'Назначьте права доступа по умолчанию для страниц и статей.';
$GLOBALS['TL_LANG']['tl_settings']['date_legend'] = 'Дата и время';
$GLOBALS['TL_LANG']['tl_settings']['global_legend'] = 'Глобальная конфигурация';
$GLOBALS['TL_LANG']['tl_settings']['backend_legend'] = 'Конфигурация панели управления';
$GLOBALS['TL_LANG']['tl_settings']['security_legend'] = 'Настройки безопасности';
$GLOBALS['TL_LANG']['tl_settings']['files_legend'] = 'Файлы и изображения';
$GLOBALS['TL_LANG']['tl_settings']['uploads_legend'] = 'Настройки загрузки на сервер';
$GLOBALS['TL_LANG']['tl_settings']['cron_legend'] = 'Настройки заданий cron';
$GLOBALS['TL_LANG']['tl_settings']['chmod_legend'] = 'Права доступа по умолчанию';
$GLOBALS['TL_LANG']['tl_settings']['configuredInApp'] = 'Этот параметр был определен в конфигурации приложения и больше не может быть изменен.';
