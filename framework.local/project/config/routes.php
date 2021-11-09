<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить

		new Route('/page/all/', 'page', 'all'),
		new Route('/page/:from/:to/', 'page', 'byRange'),
		new Route('/page/:id/', 'page', 'byId'),
		// new Route('/test/', 'page', 'test'),
		new Route('/act/', 'page', 'act'),
		new Route('/act/:id/', 'page', 'show'),

		new Route('/product/all/', 'product', 'all'),
		new Route('/product/:id/', 'product', 'show'),

		new Route('/act-1/', 'test', 'act1'),
		new Route('/act-2/', 'test', 'act2'),
		new Route('/act-3/', 'test', 'act3'),

		new Route('/sum/:n1/:n2/:n3/', 'num', 'sum'),

		new Route('/user/all/', 'user', 'all'),
		new Route('/user/first/:n/', 'user', 'first'),
		new Route('/user/:id/:key', 'user', 'info'),
		new Route('/user/:id/', 'user', 'show'),

	];
	
