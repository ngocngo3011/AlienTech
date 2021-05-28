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

		$relatedProducts = $this->model->getRelatedProducts(4, $idProduct);
		$allRelatedProducts = $this->model->getRelatedProducts(null, $idProduct);
		
		$MoreInformation = $this->model->getMoreInformation($idProduct);

		$pictureProduct = $this->model->getPicture($idProduct);

		$data = array(
			'DetailProduct'=>$DetailProduct,
			'relatedProducts' => $relatedProducts,
			'allRelatedProducts' => $allRelatedProducts,
			'MoreInformation' => $MoreInformation,
			'pictureProduct'=> $pictureProduct,
		);

		$this->view->get('DetailPage', $data);
	}
}