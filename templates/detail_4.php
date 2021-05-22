<!-- V: Sản phẩm liên quan-->
    <div class="container" id="Sanphamlienquan">
    
    <!--V.1: Text box Sản phẩm liên quan-->       
    <div class="container padding">
      <div class="row laptop">
        <div class="col-12 col-6 p-0"><h4>Sản phẩm liên quan </h4></div>
      </div>
    </div>
    <!--V.2: Product List--> 
    <div class="row padding">
        <div class="col-md-3 col-6 tovar_wrapper p-0" data-appear-top-offset='-100' data-animated='fadeInUp'>
              <div class="card  tovar_item padbot40 filter "style="background-color: white">
                <div class="tovar_img">
                  <div class="tovar_img_wrapper">        
                          <label class="baohanh badge-warning" style="color: black; margin:10px; font-size: 12px;">Trả góp 0%</label>
                          <img class="card-img-top" src="./assets/img/prolist1_1.jpg" alt="">
                        <div class="card-body">
                          <p class="card-title text-center"style="font-weight: bold;">Apple MacBook Pro 13 2020</p>
                          <div class="props my-2">
                            <span class="dotted">RAM: 8G</span>
                            <span class="dotted">- SSD: 256G</span>
                          </div> 
                          <p class="special-price card-text text-danger my-2" style="font-weight: bold;display: inline;">24.490.000 ₫</p>
                          <div class="rating text-warning my-2" >
                            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> <span style="color: black">23 đánh giá</span></span>
                          </div>  
                        </div>
                  </div>

                  <div class="tovar_item_btns">
                      <div class="open-project-link"><a class="open-project tovar_view" href="Detailed_Product.html" data-url="#" >Chi tiết</a></div>
                      <a class="add_bag" href="GioHang.html" ><i class="fa fa-shopping-cart"></i></a> 
                  </div>

                </div>  
              </div>
          </div>
</div>
    <!-- V.3: Button xem thêm--> 
    <br>
    <div class="row justify-content-center" id="duy" style="background-color: white">           
        <button onclick="Function()" class="btn btn-outline-warning" style="color:black;">Xem thêm </button>
    </div> 
    <!--Nút xem thêm = js--> 
     <script type="text/javascript">
      function Function() {
        var x = document.getElementById('ProductList');
         var y = document.getElementById('duy');
        if (x.style.display === 'none') {
            x.style.display = 'block';  
            y.style.display = 'none';
        } else {
            x.style.display = 'none';
        }
      }
    </script>
    
    <div id="ProductList" style=" display: none;">
       <!-- ProductList1 xem thêm --> 
  <div class="row padding">
<div class="col-md-3 col-6 tovar_wrapper p-0" data-appear-top-offset='-100' data-animated='fadeInUp'>
      <div class="card  tovar_item padbot40 filter "style="background-color: white">
        <div class="tovar_img">
          <div class="tovar_img_wrapper">        
                  <label class="baohanh badge-warning" style="color: black; margin:10px; font-size: 12px;">Trả góp 0%</label>
                  <img class="card-img-top" src="./assets/img/aio5400bl-1.jpg" alt="">
                <div class="card-body">
                  <p class="card-title text-center"style="font-weight: bold;">Dell Inspiron All in One 24</p>
                  <div class="props my-2">
                    <span class="dotted">RAM 8G</span>
                    <span class="dotted">SSD 256G</span>
                  </div> 
                  <p class="special-price card-text text-danger my-2" style="font-weight: bold;display: inline;">14.490.000 ₫</p>
                  <div class="rating text-warning my-2" >
                    <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> <span style="color: black">12 đánh giá</span></span>
                  </div>  
                </div>
          </div>

          <div class="tovar_item_btns">
              <div class="open-project-link"><a class="open-project tovar_view" href="Detailed_Product.html" data-url="#" >Chi tiết</a></div>
              <a class="add_bag" href="GioHang.html" ><i class="fa fa-shopping-cart"></i></a> 
          </div>

        </div>  
      </div>
    </div>
  
      
 </div>
</div>
</div></div></div></div>

