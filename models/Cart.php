<?php
require_once("./core/Model.php"); 
	
	class ProductCart extends Model
	{
 


		public $idProduct;
		public $productName; 	// TEN SP
		public $price; 			// GIA 
		public $salePrice; 		// GIA SALE
		public $categoryType; 	// LOAI SAN PHAM [LAPTOP, PC, PK]
		public $mainPicture; 	// HINH ANH CHINH SP
		public $brandId;
		public $quantity = 0; 		// SO LUONG TRONG CART
	
		


		public function getCartProduct($idProduct) {
			$querycart = "SELECT *
	 					FROM tbl_sanpham 
						WHERE id_sanpham = '$idProduct'  ";
			

			$stmt = $this->db->prepare($querycart);
			$stmt->execute();
			$resultSetProduct = $stmt->fetchObject();

			$product = new ProductCart();
			$productId = $resultSetProduct->id_sanpham;
			$product->id = $idProduct;
			$product->productName = $resultSetProduct->tensanpham;
			$product->price = $resultSetProduct->giaban;
				
			$product->salePrice = $resultSetProduct->giagiam;
			$product->brandId = $resultSetProduct->id_thuonghieu;
				
				//Lay hinh anh
			$queryPicture = "SELECT *
							FROM tbl_hinhanh ha 
							WHERE id_sanpham = '$productId' 
								and ha.hinh_anh_chinh = 1";

			$stmt = $this->db->prepare($queryPicture);
			$stmt->execute();
			$resultObject = $stmt->fetchObject();
			$mainPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg"; 
			$product->mainPicture = $mainPicture;

			return $product;
		}
	}
	
		
	
