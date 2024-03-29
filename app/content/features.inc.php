<?php

# Данные о странице
$title = 'Возможности движка microText';
$keywords = 'ключевые слова';
$description = 'Описание страницы';
$template = 'page';
$page_blocks = 'reviews, donate';

# Содержание страницы
$content = <<<EOF
<p>Умеет малыш многое.</p>

<ul class="ul">
<li>Позволяет запустить небольшой сайт в самые кратчайшие сроки.</li>
<li>Работает супер быстро и не нагружает сервер.</li>
<li>Имеет очень простую <a href="{$config['sitelink']}files.html" title="Файловая структура движка">структуру</a>. Разобраться чрезвычайно легко.</li>
<li>Имеет также очень простой, хорошо откомментированный код.</li>
<li>Очень надёжен и безопасен. По сути нечего ломать и нечему ломаться.</li>
<li>Не нужно изучать никаких API и шаблонизаторов. Только чистый PHP.</li>
<li>Позволяет использовать все возможности PHP. Немногие движки могут этим похвастаться. А этот может.</li>
<li>Умеет ограничить доступ с помощью логина/пароля к определённым страницам сайта.</li>
<li>Имеет уютную админку, где можно управлять страницами, меню, блоками и корректировать настройки.</li>
<li>Работает с несколькими шаблонами и страницами 1-3 уровнями вложенности.</li>
<li>Позволяет работать с меню любой вложенности.</li>
</ul>
EOF;
