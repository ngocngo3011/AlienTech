<link href="./assets/css/GioHang_CSS.css" rel="stylesheet">

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
			<table class="table table-bordered">
		<tbody>
		<!--Dòng sản phẩm 1-->
		
		  <tr><td class="p-2">
			  <div class="row m-0">
				  <div class="col-4"><p><img src="./assets/img/LAPTOP/SP003.png" alt="Sản phẩm 1" class="img-fluid" ></p></div>
				  <div class="col-6">
						  <b class="Pname"><?= $data['MoreInformation']->tensanpham ?> </b><br>
						<!-- <h class="masp">SKU: YogaSlim7C01CF - Moon White</h> -->
						<p class="price"><b><?= $data['MoreInformation']->giagiam ?> ₫</b></p>
						<p class="mb-1"><b><i class="fa fa-gift" style="font-size:20px"></i> Khuyến Mãi</b><ul class="khuyenmai">
						<li>Chuột không dây Logitech B175</li>
						<li>Tặng PMH 500k</li>
						<li>Mua Office Home & Student 2019 chỉ còn 1,990,000</li>
						</ul></p>	
			  	</div>
				  <div class="col-xl-2">
					<div class="buttons_added my-2">
					  <input class="minus is-form" type="button" value="-">
					  <input aria-label="quantity" class="input-qty" max="999999999" min="1" name="" type="number" value="1">
					  <input class="plus is-form" type="button" value="+">
					</div>	  
				<br>
				<button class="btn btn-danger btn-sm btn-block"><i class="fa fa-trash-o"></i> Xóa </button></div>
			  </div>
			</td>
		  </tr>
			

	 		</tbody>
		</table>
		</div>