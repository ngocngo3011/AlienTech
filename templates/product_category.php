<div class="col-md-9 p-0 ">
              <div class="container-fluid tab-content" id="myTabContent">

                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                      <div class="row">

                          <?php foreach ($data['filterProducts'] as $product) { ?>

                              <div class="col-md-4 col-6 tovar_wrapper p-0" data-appear-top-offset='-100' data-animated='fadeInUp'>
                                  <div class="card  tovar_item padbot40 filter ">
                                      <div class="tovar_img">
                                          <div class="tovar_img_wrapper">
                                              <label class="baohanh badge-warning" style="color: black; margin:10px; font-size: 12px;">Trả góp 0%</label>
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
                                              <div class="open-project-link"><a class="open-project tovar_view" href="?controller=DetailPage&action=index&idProduct='<?= $product->id ?>">Chi tiết</a></div>
                                              <a class="add_bag" href="?controller=CartPageProduct&action=index&idProduct='<?= $product->id ?>"><i class="fa fa-shopping-cart"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          <?php } ?>

                      </div>
                  </div>

                      </div>
                  </div>
                   </div>
                 </div>

                    </div>
                     </div>

                    </div>