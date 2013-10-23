<?php

$f3 = require 'lib/fatfree/base.php';

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

$f3->config('config.ini');
$f3->set('AUTOLOAD','controller/;controller/admin/;view/');
$f3->route('GET|POST /@controller/@action', '@controller->@action');
$f3->route('GET|POST /admin/@controller/@action', 'admin\@controller->@action');

$db = new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=taskiller',
    'root',
    'root'
);
$f3->run();
