<?php
require_once("./core/Model.php"); 
	
	class ProductCart extends Model
	{
 


		public $id;
		public $productName; 	// TEN SP
		public $price; 			// GIA 
		public $salePrice; 		// GIA SALE
		public $categoryType; 	// LOAI SAN PHAM [LAPTOP, PC, PK]
		public $mainPicture; 	// HINH ANH CHINH SP
		public $brandId;
		public $sluong;		
		


		public function getCartProduct($idProduct) {
			$querycart = "SELECT *
	 					FROM tbl_sanpham 
						WHERE id_sanpham = '$idProduct'  ";
			

			$stmt = $this->db->prepare($querycart);
			$stmt->execute();
			$resultSetProduct = $stmt->fetchAll(PDO::FETCH_CLASS);

			$products = array();
			for($i=0; $i<count($resultSetProduct);$i++){
				$product = new ProductCart();
				$product->id = $resultSetProduct[$i]->id_sanpham;
				$product->productName = $resultSetProduct[$i]->tensanpham;
				$product->price = number_format($resultSetProduct[$i]->giaban);
				$product->categoryType = $resultSetProduct[$i]->id_loaisanpham;
				$product->salePrice = number_format($resultSetProduct[$i]->giagiam);
				$product->brandId = $resultSetProduct[$i]->id_thuonghieu;
				
				//Lay hinh anh
				$productId = $resultSetProduct[$i]->id_sanpham;
				$queryPicture = "SELECT *
							FROM tbl_hinhanh ha 
							WHERE id_sanpham = '$productId' 
								and ha.hinh_anh_chinh = 1";

				$stmt = $this->db->prepare($queryPicture);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$mainPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg"; 
				$product->mainPicture = $mainPicture;

				array_push($products, $product);
			}

			return $products;
		}
	}
	
		
	
