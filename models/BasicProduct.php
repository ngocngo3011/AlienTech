<?php
require_once("./core/Model.php"); 

	class BasicProduct extends Model
	{
		public $id;
		public $productName; 	// TEN SP
		public $price; 			// GIA 
		public $salePrice; 		// GIA SALE
		public $categoryType; 	// LOAI SAN PHAM [LAPTOP, PC, PK]
		public $ram; 			// THONG SO RAM, id_thong_so = 'TS004'
		public $disk; 			// THONG SO BO NHO, id_thong_so = 'TS005'
		public $mainPicture; 	// HINH ANH CHINH SP
		public $rateNumbers; 	// SO LUOT DANH GIA
		public $starNumbers; 	// SO SAO TRUNG BINH

		// HAM LAY NHUNG SAN PHAM DAI DIEN THEO DANH MUC[LAPTOP, PC, PHUKIEN]
		public function getProducts($limit, $category='LSP001', $brandId="") {
			$query = "SELECT * 
						FROM tbl_sanpham 
						WHERE id_loaisanpham = '$category' ";
			
			if($brandId != "") {
				$query.=" AND id_thuonghieu ='$brandId' ";
			}
			if($limit) {
				$query.=' LIMIT '.$limit;
			}

			$stmt = $this->db->prepare($query);
			$stmt->execute();
			$resultSetProduct = $stmt->fetchAll(PDO::FETCH_CLASS);

			$products = array();
			for($i=0; $i<count($resultSetProduct);$i++){
				$product = new BasicProduct();
				$product->id = $resultSetProduct[$i]->id_sanpham;
				$product->productName = $resultSetProduct[$i]->tensanpham;
				$product->price = number_format($resultSetProduct[$i]->giaban);
				$product->categoryType = $resultSetProduct[$i]->id_loaisanpham;
				$product->salePrice = number_format($resultSetProduct[$i]->giagiam);
				
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

				//Lay hinh anh slider
				// $productId = $resultSetProduct[$i]->id_sanpham;
				// $queryPicture = "SELECT *
				// 			FROM tbl_hinhanh ha 
				// 			WHERE id_sanpham = '$productId' 
				// 			and id_sanpham = 'slider01' ";

				// $stmt = $this->db->prepare($queryPicture);
				// $stmt->execute();
				// $resultObject = $stmt->fetchObject();
				// $sliderPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg"; 
				// $product->sliderPicture = $sliderPicture;
				// }

				// CHI LAY THONG SO RAM VA O DIA O LAPTOP 
				if($product->categoryType == "LSP001" ){
					//Lay thong so RAM
					$queryRam = "SELECT id_thongso, giatri
								FROM tbl_cauhinhsanpham chsp, tbl_thongsochitiet tsct 
								WHERE id_sanpham = '$productId' 
									and chsp.id_thongsochitiet = tsct.id_thongsochitiet
									and tsct.id_thongso = 'TS004'";

					$stmt = $this->db->prepare($queryRam);
					$stmt->execute();
					$resultObject = $stmt->fetchObject();
					$ramValue = isset($resultObject->giatri)?$resultObject->giatri:"";
					$product->ram = $ramValue;

					//Lay thong so DISK
					$queryDisk = "SELECT id_thongso, giatri
									FROM tbl_cauhinhsanpham chsp, tbl_thongsochitiet tsct 
									WHERE id_sanpham = '$productId' 
										and chsp.id_thongsochitiet = tsct.id_thongsochitiet
										and tsct.id_thongso = 'TS005'";

					$stmt = $this->db->prepare($queryDisk);
					$stmt->execute();
					$resultObject = $stmt->fetchObject();
					$diskValue = isset($resultObject->giatri)?$resultObject->giatri:"";

					$product->disk = $diskValue;
				}

				// LAY THONG TIN RATING 
				$queryRating = "SELECT COALESCE(ROUND(AVG(diem))) diemtrungbinh, COUNT(diem) luotdanhgia 
								FROM tbl_danhgia 
								WHERE id_sanpham = '$productId'";

				$stmt = $this->db->prepare($queryRating);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$product->rateNumbers = $resultObject->luotdanhgia;
				$product->starNumbers = $resultObject->diemtrungbinh;


				array_push($products, $product);
			}

			return $products;
		}


		// HAM TIM RA NHUNG SAN PHAM DANG MUA
		// SAN PHAM DANG MUA LA NHUNG SAN PHAM DUOC GIAM GIA > 2O%
		public function getPurchasbleProducts($limit=10, $category='LSP001') {
			$query = "SELECT * 
						FROM tbl_sanpham 
						WHERE id_loaisanpham = '$category' and giagiam <= 0.8*giaban 
						ORDER BY giagiam/giaban";
			if($limit) {
				$query.=' LIMIT '.$limit;
			}
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			$resultSetProduct = $stmt->fetchAll(PDO::FETCH_CLASS);

			$products = array();

			for($i=0; $i<count($resultSetProduct);$i++){
				$product = new BasicProduct();
				$product->id = $resultSetProduct[$i]->id_sanpham;
				$product->productName = $resultSetProduct[$i]->tensanpham;
				$product->price = number_format($resultSetProduct[$i]->giaban);
				$product->categoryType = $resultSetProduct[$i]->id_loaisanpham;
				$product->salePrice = number_format($resultSetProduct[$i]->giagiam);
				
				//Lay hinh anh
				$queryPicture = "SELECT *
							FROM tbl_hinhanh ha 
							WHERE id_sanpham = '$product->id' 
								and ha.hinh_anh_chinh = 1";

				$stmt = $this->db->prepare($queryPicture);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$mainPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg"; 
				$product->mainPicture = $mainPicture;

				// LAY THONG TIN RATING 
				$queryRating = "SELECT COALESCE(ROUND(AVG(diem))) diemtrungbinh, COUNT(diem) luotdanhgia 
								FROM tbl_danhgia 
								WHERE id_sanpham = '$product->id'";

				$stmt = $this->db->prepare($queryRating);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$product->rateNumbers = $resultObject->luotdanhgia;
				$product->starNumbers = $resultObject->diemtrungbinh;
				
				array_push($products, $product);
			}
			return $products;

		}







		// 		public function getimg($limit, $category='LSP004', $brandId="") {
		// 	$query = "SELECT * 
		// 				FROM tbl_sanpham 
		// 				WHERE id_loaisanpham = '$category' ";
			
		// 	if($brandId != "") {
		// 		$query.=" AND id_thuonghieu ='$brandId' ";
		// 	}
		// 	if($limit) {
		// 		$query.=' LIMIT '.$limit;
		// 	}

		// 	$stmt = $this->db->prepare($query);
		// 	$stmt->execute();
		// 	$resultSetProduct = $stmt->fetchAll(PDO::FETCH_CLASS);

		// 	$products = array();
		// 	for($i=0; $i<count($resultSetProduct);$i++){
		// 		$product = new BasicProduct();
		// 		$product->id = $resultSetProduct[$i]->id_sanpham;
		// 		$product->productName = $resultSetProduct[$i]->tensanpham;
		// 		$product->price = number_format($resultSetProduct[$i]->giaban);
		// 		$product->categoryType = $resultSetProduct[$i]->id_loaisanpham;
		// 		$product->salePrice = number_format($resultSetProduct[$i]->giagiam);
				
		// 		//Lay hinh anh
		// 		$productId = $resultSetProduct[$i]->id_sanpham;
		// 		$queryPicture = "SELECT *
		// 					FROM tbl_hinhanh ha 
		// 					WHERE id_sanpham = '$productId' 
		// 						and ha.hinh_anh_chinh = 1";

		// 		$stmt = $this->db->prepare($queryPicture);
		// 		$stmt->execute();
		// 		$resultObject = $stmt->fetchObject();
		// 		$mainPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg"; 
		// 		$product->mainPicture = $mainPicture;

		// 		//Lay hinh anh slider
		// 		$productId = $resultSetProduct[$i]->id_sanpham;
		// 		$queryPicture = "SELECT *
		// 					FROM tbl_hinhanh ha 
		// 					WHERE id_sanpham = '$productId' 
		// 					and id_sanpham = 'slider01' ";

		// 		$stmt = $this->db->prepare($queryPicture);
		// 		$stmt->execute();
		// 		$resultObject = $stmt->fetchObject();
		// 		$sliderPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg"; 
		// 		$product->sliderPicture = $sliderPicture;
		// 		// }



		// 		array_push($products, $product);
		// 	}

		// 	return $products;
		// }
	}
