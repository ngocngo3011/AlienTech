<!-- <link rel="stylesheet" href="./assets/css/Detailed_Product.css"> -->

<!-- B: Content Container--> 
<div class="container">
<div class="card" style="background-color: white">
<div class ="container-fluid">
 	
<!-- I: col12 - Giới thiệu sản phẩm-->
 <div class ="wrapper row">
	<!-- I.1.1: col6 - Hình ảnh sản phẩm: Fullsize + thumnails--> 
    <div class="col-md-6 ">
  		<div class="preview-pic tab-content">
  			<?php 
  			 $i=0;

  			foreach ($data['pictureProduct'] as $products) { 
  			 if ($i==0){  ?>
  				<div class ="tab-pane active" id="pic" > <img src=".<?= $products->picture ?>" alt ="">
   			 </div>
  			<?php }
  			else { ?> 
  				<div class ="tab-pane" id="pic_<?=$i ?>" > <img src=".<?= $products->picture ?>" alt ="">
   			 	</div>
   			<?php  } $i++; } ?>


      	</div>
      	<br> 
      	<p> <strong style="color: indianred">Xem thêm hình ảnh sản phẩm </strong></p>
      	<div class="Detailed_Images">
      	  <br>
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
	<div class="details col-md-6 "> 
		 <h3 class="product-title"> Apple MacBook Air M1 256GB 2020 I I Chính hãng Apple Việt Nam </h3> 
		 <div class="rating"> 
		  <div class="stars"> 
			<span class="fa fa-star checked"></span> 
			<span class="fa fa-star checked"></span> 
			<span class="fa fa-star checked"></span> 
			<span class="fa fa-star"></span> 
			<span class="fa fa-star"></span> 
		  </div>
		   <span class="review-no">123 đánh giá</span> 
		 </div> 
    
		 <p class="product-description">
		  <p> <strong>Thương hiệu:</strong> Apple </p>
			<p> <strong>Vi xử lý:</strong> Intel Core i5 7th, 2 nhân / 4 luồng </p>
			<p> <strong>Màn hình:</strong> 13.3" Retina (2560 x 1600), gương </p>
			<p> <strong>RAM:</strong> 8GB LPDDR3 bus 1866 MHz (Nâng cấp tối đa 8GB) </p>
			<p> <strong>Card đồ họa:</strong> Intel Iris Plus 640</p>
			<p> <strong>Lưu trữ:</strong> 256GB NVMe(Nâng cấp tối đa 2TB)</p>
			<p> <strong>Pin:</strong> 54.5Wh </p>
			<p> <strong>Kết nối chính:</strong> 2 x USB-C with Thunderbolt 3 </p>
			<p> <strong>Hệ điều hành:</strong> Mac OS X! </p>
		  </p>

		 <h4 class="price"> <strong style="color:red";>Giá bán: </strong> 25,00,000 VNĐ </h4> 
			<p class="vote"><strong>91%</strong> người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
			</p> 
				<div class="action">
					 <button type="button" class="option" data-toggle="tooltip" title="16GB-512GB" style =" border-style: solid;">16GB-512GB</button> 
					 <button type="button" class="option" data-toggle="tooltip" title="16GB-254GB" style = "border-style: solid;">16GB-254GB</button> 
					 <button type="button" class="option" data-toggle="tooltip" title="8GB-512GB" style = "border-style: solid;">8GB-512GB</button> 
				<div class="action">
			<br>
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
					 <a href="../HTML/GioHang.html" target="_blank">            
					 <button class="add-to-cart" type="button" >
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