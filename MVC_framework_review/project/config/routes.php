<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
		new Route('/my-page1/', 'page', 'show1'),
		// Вызывается класс Route, хранящийся в контроллере Route.
		// 1 параметр - URI запрос, при котором будет вызываться данный роут
		// 2 параметр - название контроллера, который будет вызван
		// 3 параметр - название действия (в MVC контроллерах так называется метод класса)
		new Route('/my-page2/', 'page', 'show2'),
		
		new Route('/action1/', 'test', 'act1'),
		new Route('/action2/', 'test', 'act2'),
		new Route('/action3/', 'test', 'act3'), 
	];
	
