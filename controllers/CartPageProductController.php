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
		
		$products = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
		
		$tamtinh = 0;
		$tongtien = 0; 
		
		foreach ($products as $key => $value){
			$tamtinh = $tamtinh + (int)$value["price"]*$value["quantity"];
			$tongtien = $tongtien + (int)$value["salePrice"]*$value["quantity"];
		}
		$giamgia = $tongtien - $tamtinh;

		$data = array(
			'products'=>$products,
			'tamtinh'=>$tamtinh,
			'tongtien'=>$tongtien,
			'giamgia'=>$giamgia
		);
		

		$this->view->get('CartPage', $data);
	}
	

	public function cart()
	{
		$idProduct = $_GET["idProduct"];
		
		// var_dump($idProduct);die;
		$product = $this->model->getCartProduct($idProduct);

		
		// Xóa session
		//session_destroy();
		$productInfo = array(
			"productId" => $idProduct,
			"productName" => $product->productName,
			"mainPicture" => $product->mainPicture,
			"price" => $product->price,
			"salePrice" => $product->salePrice,
			"quantity" => $product->quantity
		);


		if (empty($_SESSION['cart']) || !array_key_exists($idProduct, $_SESSION['cart'])){
			$_SESSION['cart'][$idProduct]=$productInfo;
			$_SESSION['cart'][$idProduct]["quantity"] = 1;
		} else {
			$_SESSION['cart'][$idProduct]["quantity"] = $_SESSION['cart'][$idProduct]["quantity"] + 1;
		}



		header('Location:?controller=CartPageProduct');
		die();
		

	}

	public function deleteProduct(){
		$idProduct = $_GET["idProduct"];
		
		unset($_SESSION['cart'][$idProduct]);

		header('Location:?controller=CartPageProduct');
	}

	public function deleteallProduct(){
		
		unset($_SESSION['cart']);

		header('Location:?controller=CartPageProduct');
	}	


	public function updatecart()
	{
		// $idProduct=$_GET['idProduct'];
		// foreach($_POST['quantity'] as $idProduct => $quantity){
	 // 		if($quantity <= 0 || !is_numeric($quantity)){
		// 		continue;
		// 	}
	 // 		if($quantity==0){
	 // 			unset($_SESSION['cart'][$idProduct]);
	 // 		}else{
	 // 			$_SESSION['cart'][$idProduct]['quantity'] = $quantity;
	 // 		}
	 // 	}
	 // 	header('Location:?controller=CartPageProduct');
		echo '<pre>';
		print_r($_POST);
		//header('Location:?controller=CartPageProduct');
	}


}


