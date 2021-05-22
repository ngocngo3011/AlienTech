<!-- Cột hiển thị tiền, PP mua hàng -->
		<div class="col-xl-3 p-0">
<!--			Khuyến mãi/Tổng tiền		-->
			<table class="table table-bordered mb-0">
			<tbody>
				<tr><td class="p-2">
					<!-- Form nhập mã khuyến mãi -->
			<form class="row m-0 text-center">
			  <div class="col-7 py-1 px-0">
				
				<input type="text" class="form-control" id="KM" placeholder="Khuyến mãi">
			  </div>
			  <div class="col-5 p-1 text-center">
				<button type="submit" class="btn btn-primary btn-block mb-3">Áp dụng</button>
			  </div>
			</form>
				</td></tr>
				<tr>
					<td  class="p-2">
					<div class="row m-0">
					<div class="col-5"><b>Tạm tính:</b></div>
					<div class="col-7"><p class="text-right">123456789 đ</p></div>
					</div>
					</td>
				</tr>
				<tr>
					<td  class="p-2">
					<div class="row m-0">
					<div class="col-5"><b>Giảm giá:</b></div>
					<div class="col-7"><p class="text-right">123456789 đ</p></div>
					</div>
					</td>
				</tr>
				<tr>
					<td  class="p-2">
					<div class="row m-0">
					<div class="col-5"><b>Tổng tiền:</b></div>
					<div class="col-7"><p class="text-right text-danger"><b>123456789 đ</b></p></div>
					</div>
					</td>
				</tr>
			</tbody>
			</table>
<!--			Phương thức đặt hàng		-->
			<a  class="btn btn-light btn-block text-center m-0" data-toggle="collapse"  data-target="#inforkh"><h5>Nhập thông tin mua hàng</h5></a>
							<div id="inforkh" class="collapse">
			<table class="table">
<!--			Radio PP giao hàng	-->			
				<tr><td> 
					<form>
					  <div class="form-group">
						  <lable for="emailkh">Nhập Email:</lable>
						<input type="email" class="form-control" id="emailkh" placeholder="Email: quangle@gmail.com">
					  </div>
						<div class="form-group">
							<lable for="phonenumber">Nhập SĐT:</lable>					
						<input type="number" class="form-control" id="phonenumber" placeholder="0123456789" >
					  </div>
						<div class="form-group">
							<lable for="tenkh">Nhập tên:</lable>
							<input type="text" class="form-control" id="tenkh" placeholder="Lê Ngọc A">
						</div>				
					</form>	
				</td></tr>
				<tr><td><div class="mx-2">
							<p><b>Vui lòng chọn cách nhận hàng</b></p>
							<input type="radio" id="ship1" name="ship" value="store" data-toggle="collapse"  data-target="#shipcollapse1">
							<label for="ship1">Giao hàng tận nơi</label>
							<div id="shipcollapse1" class="collapse">
								<select name="calc_shipping_provinces" class="form-control form-control-sm" required="">
								  <option value="">Tỉnh / Thành phố</option>
								</select>
								<select name="calc_shipping_district" class="form-control form-control-sm" required="">
								  <option value="">Quận / Huyện</option>
								</select>
								<input class="billing_address_1" name="" type="hidden" value="">
								<input class="billing_address_2" name="" type="hidden" value="">
								<label for="addressship">Địa chỉ giao hàng</label>
								<input class="form-control form-control-sm" type="text" id="addressship" placeholder="279 Nguyễn Tri Phương">
							</div>
					
						<br><input type="radio" id="ship2" name="ship" value="store" data-toggle="collapse"  data-target="#shipcollapse2">
							<label for="ship2">Giữ tại cửa hàng</label>
							<div id="shipcollapse2" class="collapse">
								<label for="addressstore">Chọn cửa hàng</label>
								<select class="form-control form-control-sm" id="addressstore">
								  <option>279 Nguyễn Tri Phương</option>
								<option>21 Nguyễn Xí</option>
								</select>
							</div>
				</div></td></tr>
				</table>
				</div>				
<!--			Button đặt hàng		-->
				<table class="table">
				<tr><td class="text-center">
						<button class="btn btn-primary btn-block" id="paymentafter"><b>ĐẶT HÀNG THANH TOÁN SAU</b></button>
				</td></tr>
				<tr><td> 
					<input type="radio" id="payonl1" name="ship" value="store">
							<label for="payonl1"><img src="../img/Hình/Logo/ZaloPay_Logo.png" width="50"> Cổng thanh toán ZaloPay</label><br>
					<input type="radio" id="payonl2" name="ship" value="store">
							<label for="payonl2"><img src="../img/Hình/Logo/Logo-VNPAYQR-update.png" width="50"> Cổng thanh toán VNPay</label>
						<button class="btn btn-warning btn-block"><b>THANH TOÁN ONLINE</b></button>
					<br>
					<input type="checkbox" id="dk" name="dk" value="dongydk">
							<label for="dk">Tôi đồng ý với các <a href="#">điều khoản</a></label>
				</td></tr>
			</table>
		</div>
		</div>
	</div>	
	</div>
