<?php
require_once('templates/header.php');
require_once('core/view.php');
require_once('models/DetailProduct.php');


class DetailPageController
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

		
		$relativeProducts = $this->model->getRelativeProducts($idProduct);
    
		$DetailProduct =  $this->model->getDetailProduct($idProduct);
		$relatedLaptopProducts = $this->model->getProducts(4, "LSP001", "");
		$allrelatedLaptopProducts = $this->model->getProducts(null, "LSP001", "");
		$data = array(
			//'detailProduct' => $detailProduct,
			'relativeProducts' => $relativeProducts,
			'DetailProduct'=>$DetailProduct,
			'relatedLaptopProducts' => $relatedLaptopProducts,
			'allrelatedLaptopProducts' => $allrelatedLaptopProducts,
		);

		$this->view->get('DetailPage', $data);
	}
}
