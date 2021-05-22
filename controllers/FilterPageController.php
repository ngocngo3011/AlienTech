<?php
require_once('templates/header.php');
require_once('core/view.php');
require_once('models/BasicProduct.php');


class FilterPageController
{
	private $view;
	private $model;
	public function __construct()
	{
		$this->view = new View();
		$this->model = new BasicProduct();
	}
	//
	// LAPTOP
	//
	public function allLaptopProduct()
	{
		$brandId = isset($_GET["brandId"])?$_GET["brandId"]:"";
		$filterProducts = $this->model->getProducts(null, "LSP001",$brandId);

		$data = array(
			'filterProducts' => $filterProducts,
		);

		$this->view->get('FilterPage', $data);
	}

	//
	// PC
	// 
	public function allPCProduct()
	{
		$brandId = isset($_GET["brandId"])?$_GET["brandId"]:"";
		$filterProducts = $this->model->getProducts(null, "LSP002", $brandId);

		$data = array(
			'filterProducts' => $filterProducts,
		);

		$this->view->get('FilterPage', $data);
	}
	//
	// allAccessory
	// 

	public function allAccessoryProduct()
	{
		$filterProducts = $this->model->getProducts(null, "LSP003");

		$data = array(
			'filterProducts' => $filterProducts,
		);

		$this->view->get('FilterPage', $data);
	}

}
