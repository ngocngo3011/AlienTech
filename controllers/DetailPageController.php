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
		    
		$DetailProduct =  $this->model->getDetailProduct($idProduct);
<<<<<<< HEAD
		$relatedLaptopProducts = $this->model->getProducts(4, "LSP001", "");
		$allrelatedLaptopProducts = $this->model->getProducts(null, "LSP001", "");
=======

		$relatedProducts = $this->model->getRelatedProducts(4, $idProduct);
		$allRelatedProducts = $this->model->getRelatedProducts(null, $idProduct);
		
		$MoreInformation = $this->model->getMoreInformation($idProduct);

		$pictureProduct = $this->model->getPicture($idProduct);

>>>>>>> 581bbcf15ae66043fe9a92d212f39b6694cc7d7c
		$data = array(
			'DetailProduct'=>$DetailProduct,
<<<<<<< HEAD
			'relatedLaptopProducts' => $relatedLaptopProducts,
			'allrelatedLaptopProducts' => $allrelatedLaptopProducts,
=======
			'relatedProducts' => $relatedProducts,
			'allRelatedProducts' => $allRelatedProducts,
			'MoreInformation' => $MoreInformation,
			'pictureProduct'=> $pictureProduct,
>>>>>>> 581bbcf15ae66043fe9a92d212f39b6694cc7d7c
		);

		$this->view->get('DetailPage', $data);
	}
}