<?php
require_once('templates/header.php');
require_once('core/view.php');
require_once('models/Cart.php');
require_once('models/BasicProduct.php');
require_once('models/DetailProduct.php');

class CartPageProductController
{
	private $view;
	private $model;
	public function __construct()
	{
		$this->view = new View();
		$this->model = new DetailProduct();
		
	}

	public function index()
	{
		$idProduct = $_GET["idProduct"]; 

		$detailProduct = $this->model->getDetailProduct($idProduct);
		$relativeProducts = $this->model->getRelativeProducts($idProduct);

		$data = array(
			'detailProduct' => $detailProduct,
			'relativeProducts' => $relativeProducts,
		);

		$this->view->get('CartPage', $data);
	}
}

