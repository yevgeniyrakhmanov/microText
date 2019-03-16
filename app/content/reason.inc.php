<?php

# Данные о странице
$title = 'Для каких целей';
$keywords = 'ключевые слова';
$description = 'Описание страницы';
$template = 'info';
$page_blocks = 'reviews, donate';

# Содержание страницы
$content = <<<EOF
<p>Всем интернет-предпринимателям нужны сайты. Часто нужно много сайтов.</p>

<p>И многие сайты просты и незамысловаты. Их главная задача – вывести шаблон и содержание, без всякого интерактива или с его минимумом. Называйте как хотите, сайты-визитки, мини-сайты или контентные сайты.</p>

<p>Кто-то делает такие сайты на чистом HTML, кто-то на серьёзных CMS вроде Wordpress и Joomla. Я же предпочитаю делать такие сайты с помощью крошечного движка.</p>
 
<h2>Почему HTML плохо</h2>

<p>Потому что, при необходимости изменения оформления, необходимо править каждую страницу. Что является просто неприемлемой тратой времени.</p>

<p>Потому что в таких сайтах напряжно прописать даже такие мелочи, как выделение в меню активной страницы.</p>

<p>Да и исполнить любой угодный душе PHP код не легко.</p>

<h2>Почему полноценная CMS плохо</h2>

<p>Потому что расходуются лишние ресурсы сервера. Сайт загружается на доли секунды (или даже целые секунды) дольше. Простаивает огромное количество  функциональности, заложенной в CMS разработчиками.</p>

<p>В результате понижение в поисковой выдаче, уменьшение удобства пользования, повышение показателя отказов.</p>

<h2>Что предлагаю я</h2>

<p>Специально для этих целей я написал микродвижок. Без баз данных, без лишних функций, без всяческих ненужностей. Встречайте microText!</p>

<h3><a href="{$config['sitelink']}download.html" title="Скачать microText бесплатно">Скачивайте бесплатно!</a></h3>

<p>Отлично подходит для сайтов-визиток и небольших контентных сайтов. Подойдёт также для небольших интернет-магазинов.</p>
EOF;
