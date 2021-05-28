<!-- <link rel="stylesheet" href="./assets/css/Detailed_Product.css"> -->

<!-- B: Content Container--> 
<div class="container">
<div class="card" style="background-color: white">
<div class ="container-fluid">
 	
<!-- I: col12 - Giới thiệu sản phẩm-->
<!-- I: col12 - Giới thiệu sản phẩm-->
 <div class ="wrapper row">
	<!-- I.1.1: col6 - Hình ảnh sản phẩm: Fullsize + thumnails--> 
    <div class="col-md-6 ">
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


      	</div>
     
      	<p> <strong style="color: indianred">Xem thêm hình ảnh sản phẩm </strong></p>
      	<div class="Detailed_Images">
      	  
		  <ul class="preview-thumbnail nav nav-tabs"> 
		  	<?php 
		  		$i=0;
		  	
		  	foreach ($data['pictureProduct'] as $products) { 
		  	if ($i==0){	?>
			  <li class="active"><a data-target="#pic" data-toggle="tab"><img src=".<?= $products->picture ?>" alt=""></a>
			  </li> 
			  <?php }
			  else { ?>
			  	 <li><a data-target="#pic_<?=$i ?>" data-toggle="tab"><img src=".<?= $products->picture ?>" alt=""></a>
			  </li> 
			  <?php }$i++;}  ?>
		 </ul>
		 </div> 
	 
	</div>
	<!-- I.1.2: col6 - Mô tả sản phẩm: Tên + Option + Buttons--> 
	<div class="details col-md-6 "> <br>
		 <h3 class="product-title"> <?= $data['MoreInformation']->tensanpham ?> </h3> 
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

		 <h4 class="price"> <strong style="color:red";>Giá bán: </strong> <?= $data['MoreInformation']->giagiam ?> ₫</h4> 
			<!-- <p class="vote"><strong>91%</strong> người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong> -->
			</p> 
				<!-- <div class="action">
					 <button type="button" class="option" data-toggle="tooltip" title="16GB-512GB" style =" border-style: solid;">16GB-512GB</button> 
					 <button type="button" class="option" data-toggle="tooltip" title="16GB-254GB" style = "border-style: solid;">16GB-254GB</button> 
					 <button type="button" class="option" data-toggle="tooltip" title="8GB-512GB" style = "border-style: solid;">8GB-512GB</button> 
				<div class="action"><br> -->
			
			
				<br>
				
				<div class="action" align="center">
				
				 <span class="action" align="center" > 
					 <a  href="./?controller=CartPageProduct&action=index&idProduct=<?= $idProduct ?>">            
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