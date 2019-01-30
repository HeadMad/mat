<?php

Load::lib('view');

return function ($target) use ($module, $action) {
	// Массив с переменными используемыми в шаблоне
	$vars = array(
		'lang' => $_REQUEST['lang'] ?? 'ru',
		'title' => 'Что-то пошло не так',
		'content' => view('index/content/index', ['text' => "module: $module<br>action: $action<br>target: $target"])
	);

	// Выводим код главной страницы
	return view('index/layout', $vars);
};