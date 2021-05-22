<?php
require_once("./core/Model.php"); 

	class DetailProduct extends Model
	{
		public $idProduct;
		public $productName; 	// TEN SP
		public $price; 			// GIA 
		public $salePrice; 		// GIA SALE
		public $specs; 			// THONG SO RAM, id_thong_so = 'TS004'
		public $pictures; 	// HINH ANH CHINH SP
		public $rateNumbers; 	// SO LUOT DANH GIA
		public $starNumbers; 	// SO SAO TRUNG BINH


		// HAM GET CHI TIET THONG TIN SAN PHAM
		public function getDetailProduct($idProduct='SP001') {
			// TODO
			
			return $this;
		}

		
		public function getRelativeProducts($idProduct='SP001') {
			// TODO
			
			return $this;
		}

	}
