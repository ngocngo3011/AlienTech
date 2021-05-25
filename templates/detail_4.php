<!-- V: Sản phẩm liên quan-->
<div id="Sanphamlienquan">
    
    <!--V.1: Text box Sản phẩm liên quan-->       
    <div class="container padding">
      <div class="row laptop">
        <div class="col-12 col-6 p-0"><h4>Sản phẩm liên quan </h4></div>
      </div>
    </div>
    <!--V.2: Product List--> 
    <div class="row padding" id="di">
        <?php foreach ($data['relatedLaptopProducts'] as $product) { ?>

                              <div class="col-md-3 col-6 tovar_wrapper p-0" data-appear-top-offset='-100' data-animated='fadeInUp'>
                                  <div class="card  tovar_item padbot40 filter ">
                                      <div class="tovar_img">
                                          <div class="tovar_img_wrapper">
                                             <!--  <label class="baohanh badge-warning" style="color: black; margin:10px; font-size: 12px;">Trả góp 0%</label> -->
                                              <img class="card-img-top" src=".<?= $product->mainPicture ?>" alt="">
                                              <div class="card-body">
                                                  <p class="card-title text-center" style="font-weight: bold;"><?= $product->productName ?></p>
                                                  <p class="special-price card-text text-danger my-2" style="font-weight: bold;display: inline;">
                                                      <?= $product->salePrice ?> ₫</p>
                                                  <p class="old-price" style="text-decoration: line-through;display: inline; font-size: 13px; color: gray;">
                                                      <?= $product->price ?> ₫</p>
                                                  <br>
                                                  <div class="rating text-warning my-2">
                                                      <span>
                                                          <?php for ($i = 0; $i < $product->starNumbers; $i++) { ?>
                                                              <i class="fas fa-star"></i>
                                                          <?php } ?>
                                                          <?php for ($i = $product->starNumbers; $i < 5; $i++) { ?>
                                                              <i class="far fa-star"></i>
                                                          <?php } ?>
                                                          <span style="color: black"><?= $product->rateNumbers ?> đánh giá</span>
                                                      </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="tovar_item_btns">
                                              <div class="open-project-link"><a class="open-project tovar_view" href="./?controller=DetailPage&action=index&idProduct=<?=$product->id?>">Chi tiết</a></div>
                                              <a class="add_bag" href="./?controller=CartPageProduct&action=index&idProduct=<?=$product->id?>"><i class="fa fa-shopping-cart"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          <?php } ?>
</div>
    <!-- V.3: Button xem thêm--> 
    <br>
    <div class="row justify-content-center" id="duy" style="background-color: white">           
        <button onclick="Function()"id="duy" class="btn btn-outline-warning" style="color:black;">Xem thêm </button>
    </div> <br>
    <!--Nút xem thêm = js--> 
<!--Nút xem thêm = js--> 
   <script type="text/javascript">
      function Function() {
        var x = document.getElementById('ProductList');
     var y = document.getElementById('duy');
     var z = document.getElementById('di');
        if (x.style.display === 'none') {
            x.style.display = 'block';  
            y.style.display = 'none';
            z.style.display = 'none';
        } else {
            x.style.display = 'none';
        }
      }
    </script>
    
    <div id="ProductList" style=" display: none;">
       <!-- ProductList1 xem thêm --> 
  <div class="row padding">
        <?php foreach ($data['allrelatedLaptopProducts'] as $key=>$product) { 
            ?>

                              <div class="col-md-3 col-6 tovar_wrapper p-0" data-appear-top-offset='-100' data-animated='fadeInUp'>
                                  <div class="card  tovar_item padbot40 filter ">
                                      <div class="tovar_img">
                                          <div class="tovar_img_wrapper">
                                              <!-- <label class="baohanh badge-warning" style="color: black; margin:10px; font-size: 12px;">Trả góp 0%</label> -->
                                              <img class="card-img-top" src=".<?= $product->mainPicture ?>" alt="">
                                              <div class="card-body">
                                                  <p class="card-title text-center" style="font-weight: bold;"><?= $product->productName ?></p>
                                                  <p class="special-price card-text text-danger my-2" style="font-weight: bold;display: inline;">
                                                      <?= $product->salePrice ?> ₫</p>
                                                  <p class="old-price" style="text-decoration: line-through;display: inline; font-size: 13px; color: gray;">
                                                      <?= $product->price ?> ₫</p>
                                                  <br>
                                                  <div class="rating text-warning my-2">
                                                      <span>
                                                          <?php for ($i = 0; $i < $product->starNumbers; $i++) { ?>
                                                              <i class="fas fa-star"></i>
                                                          <?php } ?>
                                                          <?php for ($i = $product->starNumbers; $i < 5; $i++) { ?>
                                                              <i class="far fa-star"></i>
                                                          <?php } ?>
                                                          <span style="color: black"><?= $product->rateNumbers ?> đánh giá</span>
                                                      </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="tovar_item_btns">
                                              <div class="open-project-link"><a class="open-project tovar_view" href="./?controller=DetailPage&action=index&idProduct=<?=$product->id?>">Chi tiết</a></div>
                                              <a class="add_bag" href="./?controller=CartPageProduct&action=index&idProduct=<?=$product->id?>"><i class="fa fa-shopping-cart"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            
                          <?php } ?>
  
      
 </div>
</div>
</div></div></div></div>

