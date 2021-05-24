<?php
require_once('templates/header.php');
require_once('core/view.php');
require_once('models/BasicProduct.php');


class HomepageController
{
	private $view;
	private $model;
	public function __construct()
	{
		$this->view = new View();
		$this->model = new BasicProduct();
	}

	public function index()
	{
		$purchasbleProducts = $this->model->getPurchasbleProducts(10, "LSP001");
		$laptopProducts = $this->model->getProducts(4, "LSP001");
		$pcProducts = $this->model->getProducts(4, "LSP002");
		$accessoryProducts = $this->model->getProducts(4, "LSP003");
		// $SliderPicture = $this->model->getProducts(4, "LSP04");

		$data = array(
			'purchasbleProducts' => $purchasbleProducts,
			'laptopProducts' => $laptopProducts,
			'pcProducts' => $pcProducts,
			'accessoryProducts' => $accessoryProducts,
			// 'SliderPicture' => $SliderPicture,
		);

		$this->view->get('Homepage', $data);
	}


	public function New()
	{
		$this->view->get('NewsPage');
	}
}
