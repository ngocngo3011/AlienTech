

<?php
require_once("./core/Model.php"); 
require_once("./models/BasicProduct.php");

	/**
	 * 
	 */
	class ProductAttribute
	{
		public $tenthongso;
		public $giatri; 
	}
	
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
		public function getDetailProduct($idProduct='SP008') {
			// TODO
			$query = "SELECT tensanpham, price
						FROM tbl_sanpham 
						WHERE id_loaisanpham = '".$idProduct."' ";

				// //Lay thông tin cơ bản sản phẩm 
				$product = new BasicProduct();
				// $stmt = $this->db->prepare($query);
				// $stmt->execute();
				// $resultObject = $stmt->fetchObject();
				// $ramValue = isset($resultObject->giatri)?$resultObject->giatri:"";
				// $product->brand = $brandValue;
				// // $product->id = $resultSetProduct[$i]->id_sanpham;
				// $product->productName = $resultSetProduct[$i]->tensanpham;
				// $product->price = number_format($resultSetProduct[$i]->giaban);
				// $product->categoryType = $resultSetProduct[$i]->id_loaisanpham;
				// $product->salePrice = number_format($resultSetProduct[$i]->giagiam);
				
				// //Lay hinh anh
				// $productId = $resultSetProduct[$i]->id_sanpham;
				// $queryPicture = "SELECT *
				// 			FROM tbl_hinhanh ha 
				// 			WHERE id_sanpham = '$productId' 
				// 				and ha.hinh_anh_chinh = 1";

				// $stmt = $this->db->prepare($queryPicture);
				// $stmt->execute();
				// $resultObject = $stmt->fetchObject();
				// while ($resultObject = $stmt->fetchObject()) {
					
				// }
				// $product->mainPicture = isset($resultObject->hinhanh_url)?$resultObject->hinhanh_url:"/assets/img/Missing_Image.jpg";


				// 	// Lấy thương hiệu (Tên thương hiệu)
				// 	$queryBrand = "SELECT tenthuonghieu
				// 					FROM tbl_thuonghieu th, tbl_sanpham sp
				// 					WHERE id_sanpham = '$productId'
				// 						and th.id_thuonghieu = sp.id_thuonghieu;
				// 					";

				// 	$stmt = $this->db->prepare($queryBrand);
				// 	$stmt->execute();
				// 	$resultObject = $stmt->fetchObject();
				// 	$ramValue = isset($resultObject->giatri)?$resultObject->giatri:"";
				// 	$product->brand = $brandValue;


					// CHI LAY THONG SO SẢN PHẨM
					$queryTSSP = "SELECT ts.tenthongso, tsct.giatri, sp.tensanpham, sp.giaban, th.tenthuonghieu
							FROM `tbl_sanpham` sp
							INNER JOIN tbl_cauhinhsanpham chsp ON chsp.id_sanpham = sp.id_sanpham
							INNER JOIN tbl_thongsochitiet tsct ON tsct.id_thongsochitiet = chsp.id_thongsochitiet
							inner join tbl_thongso ts ON ts.id_thongso = tsct.id_thongso
							INNER JOIN tbl_thuonghieu th ON th.id_thuonghieu = sp.id_thuonghieu
							WHERE chsp.id_sanpham = 'SP008'";

					// $queryTSCT= "SELECT  tsct.giatri
					// 		FROM `tbl_sanpham` sp
					// 		INNER JOIN tbl_cauhinhsanpham chsp ON chsp.id_sanpham = sp.id_sanpham
					// 		INNER JOIN tbl_thongsochitiet tsct ON tsct.id_thongsochitiet = chsp.id_thongsochitiet
					// 		inner join tbl_thongso ts ON ts.id_thongso = tsct.id_thongso
					// 		WHERE chsp.id_sanpham = '$productId';"


// $stmt = $this->db->prepare($query);
// 			$stmt->execute();
// 			$resultSetProduct = $stmt->fetchAll(PDO::FETCH_CLASS);





					$stmt = $this->db->prepare($queryTSSP);
					$stmt->execute();
					$productAttributes = array();
					$resultObjects = $stmt->fetchAll();

					foreach ($resultObjects as $resultObject) {
						// var_dump($resultObject);
						$productAttribute = new ProductAttribute();
						$productAttribute->tenthongso = $resultObject['tenthongso'];
						$productAttribute->giatri = $resultObject['giatri'];
						array_push($productAttributes, $productAttribute);
						$product->productName=  $resultObject['tensanpham'];
						$product->price=  $resultObject['giaban'];
						$product->brand=  $resultObject['tenthuonghieu'];

					}
					// while ($resultObject = $stmt->fetchObject()) {
					// 	// var_dump($resultObject);
					// 	$productAttribute->tenthongso = isset($resultObject->tenthongso)?$resultObject->tenthongso:"";
					// 	$productAttribute->giatri = isset($resultObject->giatri)?$resultObject->giatri:"";
					// 	array_push($productAttributes, $productAttribute);
					// }

					$product->specs = $productAttributes;

			return $product;
		}

		
		public function getMoreInformation($idProduct='SP008') {
			// TODO
			$products = array();
			$productId = $resultSetProduct[$i]->id_sanpham;
			$querymota = "SELECT mota
						FROM tbl_sanpham 
						WHERE id_sanpham = 'SP008' ";
					
					$stmt = $this->db->prepare($querymota);
					$stmt->execute();
					$resultObject = $stmt->fetchObject();
					$mota = isset($resultObject->mota)?$resultObject->mota:""; 
					$product->mota = $mota;
				// //Lay thông tin cơ bản sản phẩm 

			return $this;
		}

		// HÌNH ẢNH DETAIL
		public function getPicture($ProductID='SP008') {
			// TODO

			$products= array();
						
			$queryPicture = "SELECT hinhanh_url 
							FROM tbl_hinhanh 
							WHERE id_sanpham='".$ProductID."' LIMIT 5";
					
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

	}