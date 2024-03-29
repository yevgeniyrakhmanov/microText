<?php

# Данные о странице
$title = 'О движке microText';
$keywords = 'ключевые слова';
$description = 'Описание страницы';
$template = 'page';
$page_blocks = 'reviews, donate';

# Содержание страницы
$content = <<<EOF
<p>Любителям опусов посвящается.</p>

<h2>История создания</h2>

<p>Вначале был чудесный скрипт <a href="http://jcart.info" title="Удобная корзина товаров для вашего интернет-магазина">jCart</a> для интернет-магазинов. Был тренинг по скоростному созданию интернет-магазинов. И было желание дать людям простейшее решение для организации небольшого сайта.</p>

<p>В процессе появился отличный движочек. Который было решено выделить в отдельный продукт и выдать народу совершенно бесплатно. Проект был назван microText.</p>

<p><a href="{$config['sitelink']}download.html" title="Скачать бесплатно">Качайте</a> и используйте на здоровье.</p>
EOF;
