<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page as Page;

class PageController extends Controller
{
	private $pages = [];

	function __construct() {
		$this->pages = [
			1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
			2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
			3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
		];
	}

	function act() {
		$this->title = 'Действие act контроллере Page';
		return $this->render('page/act', [
				'header' => 'Алоха',
				'users' => ['Ваня', 'Маша', 'Коля', 'Витя'],
			]);
	}

	function show($params) 
	{
		if($params['id'] <= count($this->pages) ) 
		{
			$this->title = $this->pages[$params['id']]['title'];
			return $this->render('page/show', ['text' => $this->pages[ $params['id'] ]['text'], ]);
		} else {
			echo 'Выбранной страницы нет в массиве pages';
		}
	}

	function byId($params) {
		$page = new Page;

		// echo '<pre>';
		if($id = intval($params['id'])) {
			$sold = $page->getById($id);
			if(!is_null($sold)) {
				return $this->render('page/byId', ['sold'=>$sold]);
			} else {
				echo "В при создании запроса в БД произошла ошибка";
			}
		} else {
			echo "Передано не число";
		}

		// $all = $page->getAll();
		// var_dump($all);
		// $discount = $page->getByRange(2, 4);
	}

	function all() {
		$page = new Page;
		$all = $page->getAll();
		// var_dump($all);

		if(!is_null($all)) {
			return $this->render('page/all', ['all' => $all]);
		} else {
			echo "В при создании запроса в БД произошла ошибка";
		}
	}

	function byRange($params) {
		$page = new Page;

		if($from = intval($params['from'])) {
			if($to = intval($params['to'])) 
			{
				$byRange = $page->getByRange($from, $to);
				if(!is_null($byRange)) {
					return $this->render('page/byRange', ['byRange' => $byRange]);
				} else {
					echo "В при создании запроса в БД произошла ошибка";
				}
			}
		} else {
			echo "Передано не число";
		}
		
	}

}