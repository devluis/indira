<?php

return array(


	'type_word' 					=> 'Тип',
	'annotation' 					=> 'Значения этих настроек переписывают значения по умолчанию указанные в конфигурационных массивах в: <code>applicalion/config/</code>.<br />Для управления типами настроек найдите <code>Indira::set(array(...));</code> в файле <code>application/start.php</code>.<br />Вы можете использовать метод <code>Indira::set()</code> в любом месте Вашего проекта, сразу после: <code>Indira::start()</code><hr>Все настройки доступны через метод: <code>Config::get()</code>, например: 
	<pre>echo Config::get(\'session.driver\');<br />//Выведет: <br />//file</pre>',

	'warning' 							=> '<strong style="color:#bd362f">Внимание! Изменение этих настроек может вывести из строя Ваше приложение, пожалуйста, будьте внимательны при вводе данных!</strong><br /> Значения этих настроек переписывают значения по умолчанию указанные в конфигурационных массивах в: <code>applicalion/config/</code>.<br />Для управления типами настроек найдите <code>Indira::set(array(...));</code> в файле <code>application/start.php</code>.<br />Вы можете использовать метод <code>Indira::set()</code> в любом месте Вашего проекта, сразу после: <code>Indira::start()</code>',

	'application_language_annotation' 	=> '<strong>Язык приложения по умолчанию</strong>: Язык используемый по умолчанию в Вашем приложении.',

	'application_timezone_annotation'	=> '<strong>Часовой пояс приложения</strong>: Часовой пояс Вашего приложения по умолчанию. Часовой пояс используется в Laravel при создании дат, при записи лог-файлов. Список поддерживаемых временных зон на <a href="http://www.php.net/manual/ru/timezones.php" target="_blank">PHP.net</a>',


	'application_asset_url_annotation' 	=> '<strong>Asset URL</strong>: URL указывающий на папку с сопровождающими "asset"-файлами. Эта опция окажется полезной при использовании CDN в Вашем приложении для доставки сопровождающих файлов. Этот параметр не обязателен к заполнению.',

	'application_index_annotation' 		=> '<strong>Index приложения</strong>: Если Вы используете "index.php" в URL, Вы можете опустить это параметр. Если же Вы используете mod_rewrite для создания чистых URL, оставьте это поле пустым.',

	'application_url_annotation' 		=> '<strong>URL приложения</strong>: Основной URL Вашего приложения без завершающего слеша. Это поле не обязательно к заполнению. В случае, если это поле не заполнено, Laravel попытается самостоятельно определить основной URL.',

	'application_profiler_annotation'	=> '<strong>Profiler Toolbar (Профайлер)</strong>: Laravel включает в себя удобный профайлер, позволяющий отслеживать количество запросов к БД, создание лог-файлов и потребления памяти в Вашем приложении. Это очень удобно при разработке, не забудьте отключить профайлер при выходе на продакшн.',

	'application_ssl_annotation' 		=> '<strong>SSL Ссылки</strong>: Множество сайтов использует SSL для защиты данных своих юзеров. Часто на этапе разработки SSL не доступен, и это означает, что все HTTPS запросы будут неудачными.<br /><br />По этой причине Вы можете отключить генерацию HTTPS-ссылок во всем приложении.',

	'application_encoding_annotation' 	=> '<strong>Кодировка приложения</strong>: Используемая кодировка по умолчанию в Вашем приложении. Кодировка используется в классах Str, Text, Form, и других, где необходимо знать кодировку приложения.',


	'auth_driver_annotation' 			=> '<strong>Драйвер аутентификации (Drivers)</strong> (<strong style="color:#bd362f">Используйте только перечисленные ниже драйвера</strong>): <br />fluent, eloquent<br /><strong>Драйвер аутентификации по умолчанию</strong>: Laravel использует указанные ниже системный драйвер для управления аутентификацией. Вы  можете зарегистрировать свой собственный драйвер, используя метод Auth::extend. Изначально Laravel поддерживает <strong>только</strong> драйвера fluent и eloquent.',

	'auth_username_annotation' 			=> '<strong>Аутентификация имени пользователя</strong>: Укажите колонку, которая будет соответствовать имени пользователя "username", в Вашей базе данных. Обычно это колонки "username" или "email". Вы можете изменить это значение в соответствии с потребностями Вашего проекта.',

	'auth_password_annotation'			=> '<strong>Aутентификация пароля</strong>: Укажите имя колонки, которая будет соответствовать паролю "password" в Вашей базе данных. Как правило это пароль "password". Вы можете изменить это значение в соответствии с потребностями Вашего проекта.',

	'auth_model_annotation' 			=> '<strong>Модель аутентификации</strong>: При использовании "<strong>eloquent</strong>" в качестве драйвера аутентификации укажите здесь имя модели, которая используется как "User" модель. Эта Модель будет использоваться для аутентификации и загрузки пользователей Вашего приложения',

	'auth_table_annotation' 			=> '<strong>Таблица аутентификации</strong>: При использовании "<strong>fluent</strong>" в качестве драйвера аутентификации укажите здесь имя таблицы в базе данных для загрузки пользователей. Эта таблица будет использоваться для создания свободных запросов при аутентификации и загрузки Ваших пользователей',


	'cache_key_annotation' 				=> '<strong>Кэш Ключ (Префикс)</strong>: Этот ключ будет добавлен к ключу сохраненному при помощи Memcached и APC для предотвращения столкновений с другими приложениями на сервере. Так как память на основе хранилища может использоваться другими приложениями, необходимо использовать префикс для однозначной идентификации элементов.',

	'cache_driver_annotation' 			=> '<strong>Драйвера (Drivers)</strong> (<strong style="color:#bd362f">Используйие только указанные ниже драйвера</strong>): <br />file, memcached, apc, redis, database, memory, wincache. <br /><strong>Драйвер Кеша (Cache Driver)</strong>: Драйвер кэша используемый по умолчанию в Вашем приложении. Кэширование может быть использовано для увеличения производительности приложения за счет хранения часто используемых данных в памяти, файле, или других запоминающих устройствах.<br /><br />Огромное разнообразие драйверов доступны для использования с Laravel. Например такие как APC, - очень быстрые. Однако, если этот вариант Вам не подходит, попробуйте использовать кэширование в файл или базу данных. Подробнее об использовании драйверов кеширования в <a href="http://laravel3.veliovgroup.com/docs/cache/config" target="_blank">официальной документации</a>.',

	'cache_database_annotation' 		=> '<strong>Cache Database (Имя Таблицы)</strong>:  При использовании базы данных (database) в качестве драйвера кэша, эта таблица базы данных будет использоваться для хранения кэшированных элементов. Вы также можете добавить опцию "присоединить" к массиву, чтобы указать, какие соединения с базой данных должны быть использованы.',
	
	'cache_memcached_annotation' 		=> '<strong>Memcached сервера (Servers)</strong>: Memcached - cервера, используемые в Вашем приложении. Memcached является свободным и открытым программным обеспечением с высокопроизводительной распределенной системой кэширования памяти. Предназначен для ускорения веб-приложений путем снижения нагрузки на базу данных.<br /><br /> Подробнее: <a href="http://memcached.org" target="_blank">memcached.org</a>.',


	'database_default_annotation' 		=> '<strong>Соединение с базой данных по умолчанию (Default Database Connection)</strong>: Название Вашего подключения к базе данных по умолчанию. Это соединение будет использоваться по умолчанию для всех операций с базой данных, если другое имя не задано при выполнении заданной операции. Это соединение должно быть перечислено в массиве соединений ниже.',

	'database_connections_annotation'	=> '<strong>Соединения с базой данных (Database Connections)</strong>: Все соединения с базами данных, используемые в Вашем приложении. Многие программы работают, используя более одного соединения. Вы можете создать столько соединений, сколько Вы можете обработать.<br /><br />Все работы с базами данных в Laravel осуществляются с помощью объектов PDO в PHP, поэтому убедитесь, что у Вас есть PDO драйвера для Вашей конкретной базы данных, установленные на Вашей рабочей станции.',

	'database_redis_annotation' 		=> '<strong>Базы данных Redis (Redis Databases)</strong>: Redis это база данных с открытым исходным кодом. Она обеспечивает более широкий набор команд, чем типичное индексированное хранилище, такие как APC или Memcached. Все крутые разработчики используют его.<br />Подробнее: <a href="http://redis.io" target="_blank">redis.io</a>.',


	'indira_indira_version_annotation' 	=> 'Текущая версия Indira CMS.',

	'indira_under_development_annotation'=>'<strong>Режим разработчика (Development Mode)</strong>: Если Вы включите режим разработчика, то пользователи увидят страницу ошибки 503 - "Ведутся технические работы".<br/>Узнайте больше на <a href="/admin/development">Режим разработки</a>.',

	'indira_default_template_annotation'=> 'Шаблон по умолчанию используемый для всех страниц и типов контента. <strong style="color:#bd362f">Вам не нужно изменять его. </strong>',

	'indira_default_mobile_template_annotation' => 'Шаблон по умолчанию для мобильных устройств. <strong style="color:#bd362f">Вам не нужно изменять его.</strong>',

	'indira_posts_template_annotation' 	=> 'Шаблон используемый для постов "Posts". <strong style="color:#bd362f">Вам не нужно изменять его.</strong>',
	'indira_blog_template_annotation' 	=> 'Шаблон используемый для блога "Blog". <strong style="color:#bd362f">Вам не нужно изменять его.</strong>',
	'indira_name_annotation' 			=> 'Имя Вашего проекта.',
	'indira_admin_email_annotation' 	=> 'Email администратора.',
	'indira_no-reply_email_annotation'	=> 'Email адрес используемый при рассылки электронных писем.',
	'indira_contact_email_annotation' 	=> 'Email, используемый как официальный адрес проекта для обратной связи.',


	'session_driver_annotation' 		=> '<strong>Драйвера (Drivers)</strong> (<strong style="color:#bd362f">Используйте только перечисленные ниже драйвера!</strong>): <br/>cookie, file, memcached, apc, redis, database.<br /><strong>Session Driver</strong>: Имя сеанся драйверов, используемых Вашим приложением. Поскольку HTTP является stateless, сессии используются для имитации  "state" через запросы того же пользователя Вашего приложения. Другими словами,это, как приложение знает кто Вы есть.',

	'session_table_annotation' 			=> '<strong>Session Database</strong>: Таблица в Вашей базе данных, для сохранения сессий. Эта опция применяется только в случае использования базы данных (database) в качестве драйвера сессий',

	'session_lifetime_annotation' 		=> '<strong>Срок жизни сессии (Session Lifetime)</strong>: Количество минут ожидания перед окончанием срока жизни сессии.',

	'session_expire_on_close_annotation'=> '<strong>Завершение сессии при закрытии</strong>: Определяет должна ли завершаться сессия при закрытии пользователем веб-браузера или вкладки.',

	'session_cookie_annotation' 		=> '<strong>Session Cookie Name</strong>: Имя сессии в куках (cookie).',
	'session_path_annotation' 			=> '<strong>Session Cookie Path</strong>: Директория, в которой применяются куки (cookie) сессии.',
	'session_domain_annotation' 		=> '<strong>Session Cookie Domain</strong>: Домен, к которому применяются куки (cookie).',
	'session_secure_annotation' 		=> '<strong>HTTPS Only Session Cookie</strong>: Определяет должны ли куки (cookie) передаваться через HTTPS протокол.',

);