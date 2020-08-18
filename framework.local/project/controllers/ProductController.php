<?php
namespace Project\Controllers;
use \Core\Controller;

class ProductController extends Controller
{
	private $products;

	function __construct() {
		$this->products = [
		1 => [
			'name'     => 'product1',
			'price'    => 100,
			'quantity' => 5,
			'category' => 'category1',
			'count' => 1,
			'salary' => 1,
			],
		2 => [
			'name'     => 'product2',
			'price'    => 200,
			'quantity' => 6,
			'category' => 'category2',
			'count' => 3,
			'salary' => 1,
			],
		3 => [
			'name'     => 'product3',
			'price'    => 300,
			'quantity' => 7,
			'category' => 'category2',
			'count' => 3,
			'salary' => 1,
			],
		4 => [
			'name'     => 'product4',
			'price'    => 400,
			'quantity' => 8,
			'category' => 'category3',
			'count' => 3,
			'salary' => 1,
			],
		5 => [
			'name'     => 'product5',
			'price'    => 500,
			'quantity' => 9,
			'category' => 'category3',
			'count' => 3,
			'salary' => 5,
			],
		];
	}

	function show($params) {
		if($params['id'] <= count($this->products)) {
			$this->title = 'Действие show контроллера Product';
			return $this->render('product/show', [ 'product' => $this->products[$params['id']] ]);
		} else {
			echo 'Введенного продукта не существует в массиве products контроллера Product';
		}
		
	}

	function all() {
		$this->title = 'Действие all контроллера Product';
		return $this->render('product/all', [ "products" => $this->products ]);
	}
}