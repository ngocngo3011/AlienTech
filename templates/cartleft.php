<link href="./assets/css/GioHang_CSS.css" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/GioHang_CSS.css">

<!-- body trang giỏ hàng	-->
	<div class="mt-2 GioHang">
		<div class="container" style="padding-left: 0px"> <!-- Chỉnh CSS -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
				</ol>
			</nav>
	  </div>
	
	<!-- Chia cột -->
	<div class="container">
		<div class="row">
	<!--Cột hiển thị sản phẩm trong giỏ hàng-->
			<div class="col-xl-9 p-0">
	<form action="./?controller=CartPageProduct&action=updatecart" method="$_POST">			
	<table class="table table-bordered">
		<tbody>

		<!--Dòng sản phẩm 1-->
		
		   <?php 
			if(isset($data['products'])) { 
		   		foreach ($data['products'] as $product) { ?> 	   	
		  <tr><td class="p-2">
			  <div class="row m-0">
				  <div class="col-4"><p><img src=".<?= $product['mainPicture'] ?>" alt="" class="img-fluid" ></p></div>
				  <div class="col-6">
				  	<!-- thông tin giỏ hàng -->
						<b class="Pname"><h4> <?= $product['productName']  ?></h4></b>
						<b class="price"><h5><strong style="color:red";>Giá bán: <?= number_format($product['salePrice']) ?></strong>  ₫ 
						<p class="old-price" style="text-decoration: line-through;display: inline; font-size: 13px; color: gray;">
                            <?= number_format($product['price']) ?> ₫
						</p>
						</h5> </b>					
						

						<!-- <h class="price"  style="color:black;"> <strong>Giá gốc: </strong><strike> </strike> ₫<h>	 -->
						</p> 

						<!-- Gán cứng -->
						<p class="mb-1"><b><i class="fa fa-gift" style="font-size:20px"></i> Khuyến Mãi</b><ul class="khuyenmai">
						<li>Chuột không dây Logitech B175</li>
						<li>Tặng PMH 500k</li>
						<li>Mua Office Home & Student 2019 chỉ còn 1,990,000</li>
						</ul></p>	
		  	</div>

				  <div class="col-xl-2">
				  	<!-- Nút tăng giảm sản phẩm -->
					<div class="buttons_added my-2">
					 <!-- <input class="minus is-form" type="button" value="-">  -->
					 <input aria-label="quantity" class="input-qty" min="1" name="quantity[<?= $product['productId']?>]" type="number" value="<?= $product['quantity'] ?>">
					  <!-- <input class="plus is-form" type="button" value="+"> -->
					</div>	
					
				<p>
				<a href="./?controller=CartPageProduct&action=deleteProduct&idProduct=<?=$product['productId']?>"> Xóa </a></p>
				</div>
			  </div>
			</td>
		  </tr> <?php }} ?>
	 		</tbody>
		</table>
		</form>
		<p align="right" class="mr-2">
		 <a href="./?controller=CartPageProduct&action=updatecart"> <button class="btn btn-primary">Cập nhập giỏ hàng</button> </a>
		</p> 

		</div>