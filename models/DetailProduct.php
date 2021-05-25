<?php
require_once("./core/Model.php"); 
require_once("./models/BasicProduct.php");

	class ProductAttribute
	{
		public $tenthongso;
		public $giatri; 
	}
	
	
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

				

				array_push($products, $product);
			}
			return $products;
		}

		//lay mo ta sp			
		public function getMoreInformation($idProduct) {
			// TODO
			// $products = array();
			$product = new BasicProduct();
			//$productId = $resultSetProduct[$i]->id_sanpham;
			$querymota = "SELECT *
						FROM tbl_sanpham 
						WHERE id_sanpham = '$idProduct' ";
					
					$stmt = $this->db->prepare($querymota);
					$stmt->execute();
					$resultObject = $stmt->fetchObject();
					$mota = isset($resultObject->mota)?$resultObject->mota:""; 
					$product->mota = $mota;

					$tensanpham = isset($resultObject->tensanpham)?$resultObject->tensanpham:"";
					$product->tensanpham = $tensanpham;

					$giaban = number_format(isset($resultObject->giaban)?$resultObject->giaban:"");
					$product->giaban = $giaban;
				// //Lay thông tin cơ bản sản phẩm 

					

			return $product;
		}
		public function getPicture($idProduct) {
			// TODO

			$products= array();
						
			$queryPicture = "SELECT hinhanh_url 
							FROM tbl_hinhanh 
							WHERE id_sanpham='".$idProduct."' LIMIT 5";
					
					$stmt = $this->db->prepare($queryPicture);
					$stmt->execute();
					while ( $resultObject = $stmt->fetchObject()) 
					{
						$product = new BasicProduct();
						$picture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:""; 
						$product->picture = $picture;
						array_push($products,$product);
					}
					
				return $products;
		}

		public function getRelativeProducts($idProduct='SP008') {
			// TODO
			
			return $this;
		}


				// HAM LAY NHUNG SAN PHAM DAI DIEN THEO DANH MUC[LAPTOP, PC, PHUKIEN]
		public function getProducts($limit, $category='LSP001', $brandId="") {
			$query = "SELECT * 
						FROM tbl_sanpham 
						WHERE id_loaisanpham = '$category' ";
			
			if($brandId != "") {
				$query.= " AND id_thuonghieu = '$brandId' ";
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

				//Lay hinh anh slider
				$productId = $resultSetProduct[$i]->id_sanpham;
				$queryPicture = "SELECT *
							FROM tbl_hinhanh ha 
							WHERE id_sanpham = '$productId' 
								and ha.hinh_anh_chinh = 2";

				$stmt = $this->db->prepare($queryPicture);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$sliderPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg"; 
				$product->sliderPicture = $sliderPicture;

				//Lay hinh anh brand
				$productId = $resultSetProduct[$i]->id_sanpham;
				$queryPicture = "SELECT *
							FROM tbl_hinhanh ha 
							WHERE id_sanpham = '$productId' 
								and ha.hinh_anh_chinh = 3";

				$stmt = $this->db->prepare($queryPicture);
				$stmt->execute();
				$resultObject = $stmt->fetchObject();
				$brandPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:""; 
				$product->brandPicture = $brandPicture;


				


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
	}