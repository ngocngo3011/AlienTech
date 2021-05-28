<!-- <link rel="stylesheet" href="./assets/css/Detailed_Product.css"> -->

<!-- II: col12 - Thông tin sản phẩm--> 
 	<!-- II.1: Tab bar của sản phẩm--> 
 	<div class="span9" id="Tabbar" >
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item" >
		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" ><h5>Mô tả chung </h5></a>
		</li>
		<li class="nav-item">
		<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><h5>Thông số kỹ thuật</h5></a> 
		</li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><h5>Đánh giá </h5>
    </a>
  </li>
</ul>
	</div>	 
	<!-- II.2. Nội dung thông tin sản phẩm  --> 
	<div class="tab-content" id="myTabContent" >  
	  		<!-- Nội dung tab 1: Mô tả chung--> 
		  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 

-------------------------------------------------
					

		  	</div>
		  	<!-- Nội dung tab 2: Thông số kỹ thuật--> 
		  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<br> 
				<div class="Technical_info" id="Techinfo" style ="margin-top: 0px;">
					<div class="sub_content">					  
					<table class="table table-striped shop_attributes">	
						<tbody>


						<?php foreach ($data['DetailProduct'] as $product) { ?>
							<tr class="">
								<th><?= $product->tenthongso ?> </th>
								<td><?= $product->TSCT ?> </td>
							</tr>		
						<?php } ?>
						</tbody>
					</table>
					</div>
			  </div>
	    </div>
	  		  
<!-- Nội dung tab 3: Đánh giá--> 
		  	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
			  <br>
			  <div id="box_comment" class="box-comment">
					<h4 class ="title_cate">
						<span>Hỏi & Đáp (0 bình luận) </span>   	
					</h4>
					<br>
					
					
									
					<form id="form1" action="/action_page.php" >
						<h6> Bình luận của bạn</h6>
						<p class="comment_wrap">
							<textarea name="name" class="comment" id="comment" cols="45px" rows="10px" aria-required="true" placeholder="Hãy để lại bình luận của bạn"></textarea>
						</p>
						<p class="author_wrap">
							<span> <lable> Tên của bạn   </lable></span>
							<input name="author" class="author" id="author" type="text" value size ="45px" aria-required="true" placeholder="Tên của bạn (*)"/>
						</p>
						<p class="email-wrap">
							<span> <lable> Email của bạn </lable></span>
							<input name="email" class="email" id="email" type="text" value size="43" placeholder="Email của bạn là (*)"/>
						</p>
						<p class="tel-wrap">
							<span> <lable> Số điện thoại của bạn </lable></span>
							<input name="tel" class="tel" id="tel" type="text" value size="35" placeholder="Số điện thoại của bạn là (*)"/>
						</p>
						<button type="submit" onclick="myFunctiondau()" value="Submit" style="font:bold; padding:10px; border-radius: 10px; background:orange;"> Gửi Bình Luận </button>
					</form>
					
							  	
				  	<script>
						function myFunctiondau() {
						alert('Đã gửi bình luận thành công');
						}
				  </script>
				  
				  <script>
						$(document).ready(function(){
  						$("button").click(function(){
    					$("#form1").html("<i>Cảm ơn bạn đã bình luận. QTV sẽ phản hồi bạn sớm nhất có thể</i>");
  						});
						});
				  </script>
				  	
			  </div>
		</div>						
</div>
	<hr>
  	<br>