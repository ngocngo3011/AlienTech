<!-- <link rel="stylesheet" href="./assets/css/Detailed_Product.css"> -->

<!-- B: Content Container--> 
<div class="container">
<div class="card" style="background-color: white">
<div class ="container-fluid">
 	
<!-- I: col12 - Giới thiệu sản phẩm-->
 <div class ="wrapper row">
	<!-- I.1.1: col6 - Hình ảnh sản phẩm: Fullsize + thumnails--> 
    <div class="col-md-6 ">
<<<<<<< HEAD
  		<div class="preview-pic tab-content">
   			 <div class ="tab-pane active" id="pic" > <img src="./assets/img/mac_pic.jpg" alt ="">
   			 </div>
			 <div class="tab-pane" id="pic_1"><img src="./assets/img/mac_pic1.jpg" alt="Anh san pham 1">
			 </div> 
			 <div class="tab-pane" id="pic_2"><img src="./assets/img/mac_pic2.jpg" alt="Anh san pham 2">
			 </div> 
			 <div class="tab-pane" id="pic_3"> <img src="./assets/img/mac_pic6 (2).jpg" alt="Anh san pham 3">
			 </div> 
			 <div class="tab-pane" id="pic_4"><img src="./assets/img/mac_pic3.png" alt="Anh san pham 4">
      		</div> 
=======
  		<div class="preview-pic tab-content " style="height: 450px; ">

  			<?php 
  			 $i=0;

  			foreach ($data['pictureProduct'] as $products) { 
  			 if ($i==0){  ?>
  				<div class ="tab-pane active img-fluid" id="pic" > <img src=".<?= $products->picture ?>" alt ="">
   			 </div>
  			<?php }
  			else { ?> 
  				<div class ="tab-pane img-fluid" id="pic_<?=$i ?>" > <img src=".<?= $products->picture ?>" alt ="">
   			 	</div>
   			<?php  } $i++; } ?>


>>>>>>> 581bbcf15ae66043fe9a92d212f39b6694cc7d7c
      	</div>
     
      	<p> <strong style="color: indianred">Xem thêm hình ảnh sản phẩm </strong></p>
      	<div class="Detailed_Images">
      	  
		  <ul class="preview-thumbnail nav nav-tabs"> 
			  <li class="active"><a data-target="#pic" data-toggle="tab"><img src="../img/mac_pic.jpg" alt=""></a>
			  </li> 
			  <li class="active"><a data-target="#pic_1" data-toggle="tab"><img src="../img/mac_pic1.jpg" alt=""></a>
			  </li> 
			  <li><a data-target="#pic_2" data-toggle="tab"><img src="./assets/img/mac_pic2.jpg" alt=""></a>
			  </li> 
			  <li><a data-target="#pic_3" data-toggle="tab"><img src="./assets/img/mac_pic6 (2).jpg" alt=""></a>
			  </li> 
			  <li><a data-target="#pic_4" data-toggle="tab"><img src="./assets/img/mac_pic3.png" alt=""></a>
			  </li> 
		 </ul>
		 </div> 
	 
	</div>
	<!-- I.1.2: col6 - Mô tả sản phẩm: Tên + Option + Buttons--> 
	<div class="details col-md-6 "> 
		 <h3 class="product-title"> Apple MacBook Air M1 256GB 2020 I I Chính hãng Apple Việt Nam </h3> 
		 <div class="rating"> 

		   <span class="review-no">
	              <?php for ($i = 0; $i < $data['MoreInformation']->starNumbers; $i++) { ?>
	                  <i class="fas fa-star" style="color: #ffc107"></i>
	              <?php } ?>
	              <?php for ($i = $data['MoreInformation']->starNumbers; $i < 5; $i++) { ?>
	                  <i class="far fa-star"style="color: #ffc107"></i>
	              <?php } ?>
	              <span style="color: black"><?= $data['MoreInformation']->rateNumbers ?> đánh giá</span>
	        </span> 
		 </div> 
    
									


		 <p class="product-description">
		  <p> <strong>Thương hiệu:</strong> <?= $data['MoreInformation']->tenthuonghieu ?> </p>

		<?php foreach ($data['DetailProduct'] as $product) { ?>
			<p> <strong><?= $product->tenthongso ?>:</strong> <?= $product->TSCT ?> </p>
		<?php } ?>
		  </p>

<<<<<<< HEAD
		 <h4 class="price"> <strong style="color:red";>Giá bán: </strong> 25,00,000 VNĐ </h4> 
			<p class="vote"><strong>91%</strong> người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
=======
		 <h4 class="price"> <strong style="color:red";>Giá bán: </strong> <?= $data['MoreInformation']->giagiam ?> ₫</h4> 
			<!-- <p class="vote"><strong>91%</strong> người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong> -->
>>>>>>> 581bbcf15ae66043fe9a92d212f39b6694cc7d7c
			</p> 
				<!-- <div class="action">
					 <button type="button" class="option" data-toggle="tooltip" title="16GB-512GB" style =" border-style: solid;">16GB-512GB</button> 
					 <button type="button" class="option" data-toggle="tooltip" title="16GB-254GB" style = "border-style: solid;">16GB-254GB</button> 
					 <button type="button" class="option" data-toggle="tooltip" title="8GB-512GB" style = "border-style: solid;">8GB-512GB</button> 
				<div class="action"><br> -->
			
				<div class="action">
					<h6 class="colors"> Màu: 
						 <button type="button" class="color_silver" style="padding:10px;margin-right: 15px; border-radius: 100px;" > Bạc </button> 
						 <button type="button" class="color_yellow" style="padding:10px; margin-right: 15px; border-radius: 120px"> Vàng </button> 
						 <button type="button" class="color_grey" style="padding:10px; margin-right: 15px; border-radius: 150px"> Xám </button> 
					</h6> 
				</div>
				<br>
				
				<div class="action" align="center">
				
				 <span class="action" align="center" > 
					 <a  >            
					 <button class="add-to-cart"  type="button" onclick="addcart()">
					 <strong> Thêm vào giỏ hàng </strong>
					 </button> 
					 </a> 	    
				</span>
				</div>
		</div>
   
   </div> 
  </div>
 </div>
 <br> 