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
		$this->model = new ProductCart();
		
	}

	public function index()
	{
		$idProduct = $_GET["idProduct"];
		echo $idProduct; 
		
		$CartProduct = $this->model->getCartProduct($idProduct);
		$products;

		$data=array(

			'CartProduct'=>$CartProduct,
		);

		//$_SESSION['cart'][$idProduct]=$CartProduct;

		// Xóa session
		//session_destroy();
		if (empty($_SESSION['cart']) || !array_key_exists($idProduct, $_SESSION['cart'])){
			$products['sluong']= 1;
			$_SESSION['cart'][$idProduct]=$products;
		} else {
			$products['sluong']=$_SESSION['cart'][$idProduct]['sluong'] + 1;
			$_SESSION['cart'][$idProduct]=$products;
		}

		echo '<pre>';
		print_r($_SESSION['cart']);

		$this->view->get('CartPage', $data);

		
	}


	public function Cart()
	{
		$idProduct = $_GET["idProduct"];
		$CartProduct = $this->model->getCartProduct($idProduct);

		$_SESSION['cart'][$idProduct]=$CartProduct;

		// if (empty($_SESSION['cart']) || !array_key_exists($idProduct, $_SESSION['cart'])){
		// 	$data['sluong']= 1;
		// 	$_SESSION['cart'][$idProduct]=$data;
		// } else {
		// 	$data['sluong']=$_SECCSION['cart'][$idProduct]['sluong'] + 1;
		// 	$_SESSION['cart'][$idProduct]=$data;
		// }

		echo '<pre>';
		print_r($_SESSION['cart']);


	}
}

