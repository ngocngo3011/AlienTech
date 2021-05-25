<?php
require_once("./core/Model.php"); 
require_once("./models/BasicProduct.php");

	
	
	class DetailProduct extends Model
	{
		public $idProduct;
		public $productName; 	
		public $idthongso; 			
		public $tenthongso; 		
		public $giatri; 		

		// HAM GET CHI TIET THONG TIN SAN PHAM
		public function getDetailProduct($idProduct) {
			// TODO
			$query = "SELECT id_thongsochitiet
						FROM tbl_cauhinhsanpham
						WHERE id_sanpham = '$idProduct'";

			$stmt = $this->db->prepare($query);
			$stmt->execute();
			$resultSetProduct = $stmt->fetchAll(PDO::FETCH_CLASS);
			// var_dump($resultSetProduct);die;
			$products = array();

			for($i=0; $i<count($resultSetProduct);$i++){

				$product = new DetailProduct();
				$idTSCT = $resultSetProduct[$i]->id_thongsochitiet;
				$queryTSCT= "SELECT  tsct.giatri
						FROM `tbl_sanpham` sp
						INNER JOIN tbl_cauhinhsanpham chsp ON chsp.id_sanpham = sp.id_sanpham
						INNER JOIN tbl_thongsochitiet tsct ON tsct.id_thongsochitiet = chsp.id_thongsochitiet
						inner join tbl_thongso ts ON ts.id_thongso = tsct.id_thongso
						WHERE tsct.id_thongsochitiet = '$idTSCT'";

				//lay gia tri thong so chi tiet
				$stmt = $this->db->prepare($queryTSCT);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$TSCTValue = isset($resultObject->giatri)?$resultObject->giatri:""; 
				$product->TSCT = $TSCTValue;

				$queryTenTS= "SELECT  ts.tenthongso
						FROM `tbl_sanpham` sp
						INNER JOIN tbl_cauhinhsanpham chsp ON chsp.id_sanpham = sp.id_sanpham
						INNER JOIN tbl_thongsochitiet tsct ON tsct.id_thongsochitiet = chsp.id_thongsochitiet
						inner join tbl_thongso ts ON ts.id_thongso = tsct.id_thongso
						WHERE tsct.id_thongsochitiet = '$idTSCT'";

				//lay ten thong so
				$stmt = $this->db->prepare($queryTenTS);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$TenTS = isset($resultObject->tenthongso)?$resultObject->tenthongso:""; 
				$product->tenthongso = $TenTS;

				//lay mo ta sp
				$querymota = "SELECT sp.mota
						FROM tbl_sanpham sp

						WHERE sp.id_sanpham = '$idProduct' ";
					
				$stmt = $this->db->prepare($querymota);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$mota = isset($resultObject->mota)?$resultObject->mota:""; 
				$product->mota = $mota;

				array_push($products, $product);
			}
			return $products;
		}

		
		public function getMoreInformation($idProduct='SP008') {
			// TODO

				// //Lay thông tin cơ bản sản phẩm 

			return $this;
		}

		public function getRelativeProducts($idProduct='SP008') {
			// TODO
			
			return $this;
		}

	}