<!-- --------------------- Blog Carousel ----------------- -->
        <main>
            <section>
                <div class="blog">

                    <div class="container">

                        <div class="col-12"><br>
                            <h3><i style="color: #ef3f23; font-size: 30px;">DEAL</i>
                                <img class="cpslazy loaded" data-src="./assets/img/flash.gif" data-ll-status="loaded" src="./assets/img/flash.gif" style="width: 30px">
                                <i style="color: #ff8a00;font-size: 30px;">ZONE</i>
                            </h3>
                        </div>
                        <img class="ml-3" src="./assets/img/toplaptop.png" alt="">

                        <div class="owl-carousel owl-theme blog-post m-0">

                            <!-- vòng lặp -->
                            <?php foreach ($data['purchasbleProducts'] as $product) { ?>

                                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                                    <img class="cpslazy loaded mt-3 ml-3" data-src="./assets/img/sale.gif" data-ll-status="loaded" src="./assets/img/sale.gif" style="width: 60px">
                                    <!-- get img của product -->
                                    <img src=".<?= $product->mainPicture ?>" style="height: 250px; ">

                                    <div class="blog-title">
                                        <!-- get name product -->
                                        <h5><?= $product->productName ?></h5>
                                        <div class="rating text-warning" style="font-size:13px">
                                            <span>
                                        <!-- get điểm star của đánh giá -->
                                        <!-- 0<điểm<5 => số star hiển thị  -->
                                                <?php for ($i = 0; $i < $product->starNumbers; $i++) { ?>
                                                    <i class="fas fa-star"></i>
                                                <?php } ?>
                                                <?php for ($i = $product->starNumbers; $i < 5; $i++) { ?>
                                                    <i class="far fa-star"></i>
                                                <?php } ?>
                                            </span>
                                        </div>
                                        <a href="?controller=CartPageProduct&action=index&idProduct='<?= $product->id ?>"> <!---link tới CartPageProduct-->
                                            <button class="btn btn-blog bg-warning" type="button">MUA NGAY</button>
                                        </a>
                                        <span style="font-weight: bold; color: red;"> <?= $product->salePrice ?> ₫</span>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>

                        <div class="owl-navigation">
                            <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                            <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- ----------x---------- Blog Carousel --------x-------- -->