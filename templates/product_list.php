<!--LAPTOP-->
<div class="container padding">
    <div class="row laptop mt-5">
        <div class="col-12">
            <br>
            <h3>
                <img class="cpslazy loaded" data-src="./assets/img/flash.gif" data-ll-status="loaded" src="./assets/img/flash.gif" style="width: 20px">
                <i style="color: #ef3f23;font-size: 25px;">LAPTOP</i>
                <img class="cpslazy loaded" data-src="img/flash.gif" data-ll-status="loaded" src="./assets/img/flash.gif" style="width: 20px">
            </h3>
        </div>
    </div>
</div>
<!--  Brand -->
<DIV class="container d-none d-md-flex">
    <div class="row m-0">
        <?php foreach ($data['brandPicture'] as $product) { ?>

        <div class="col px-1"><a href="./?controller=FilterPage&action=allLaptopProduct&brandId=<?=$product->brandId?>">
            <button type="button" class="btn btn-light container-fluid" >
                <img src=".<?= $product->brandPicture ?>" width="50" height="50"></button>
        </div></a>

         <?php } ?>


    </div>
</DIV>
<!----x---  Brand --x-->
<div class="container padding">
    <div class="row padding">
        <?php foreach ($data['laptopProducts'] as $product) { ?>
            <div class="col-md-3 col-6 tovar_wrapper p-0" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <div class="card  tovar_item padbot40 filter ">
                    <div class="tovar_img">
                        <div class="tovar_img_wrapper">
                            <!-- <label class="baohanh badge-warning" style="color: black; margin:10px; font-size: 12px;">Trả góp 0%</label> -->
                            <img class="card-img-top" src=".<?=$product->mainPicture?>" alt="">
                            <div class="card-body">
                                <p class="card-title text-center" style="font-weight: bold;"><?= $product->productName ?></p>
                                <div class="props my-2">
                                    <span class="dotted"><?= $product->ram ?></span>
                                    <span class="dotted"><?= $product->disk ?></span>
                                </div>
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
                            <a class="add_bag" href="./?controller=CartPageProduct&action=index&idProduct=<?= $product->id ?>"><i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>

<div class="row justify-content-center">
    <a href="./?controller=FilterPage&action=allLaptopProduct">
        <p class="btn btn-outline-warning">Xem tất cả</p>
    </a>
</div>


<!--PC-->
<div class="container padding">
    <div class="row laptop mt-5">
        <div class="col-12">
            
            <h3>
                <img class="cpslazy loaded" data-src="./assets/img/flash.gif" data-ll-status="loaded" src="./assets/img/flash.gif" style="width: 20px">
                <i style="color: #ef3f23;font-size: 25px;">MÁY TÍNH - PC</i>
                <img class="cpslazy loaded" data-src="img/flash.gif" data-ll-status="loaded" src="./assets/img/flash.gif" style="width: 20px">
            </h3>
        </div>
    </div>
</div>
<!--  Brand -->
<DIV class="container d-none d-md-flex">
    <div class="row m-0">


        <?php foreach ($data['brandPicture'] as $product) { ?>

        <div class="col px-1"><a href="./?controller=FilterPage&action=allpcProduct&brandId=<?=$product->brandId?>">
            <button type="button" class="btn btn-light container-fluid" >
                <img src=".<?= $product->brandPicture ?>" width="50" height="50"></button>
        </div></a>

         <?php } ?>




    </div>
</DIV>
<!----x---  Brand --x-->
<div class="container padding">
    <div class="row padding">
       <?php foreach ($data['pcProducts'] as $product) { ?>
            <div class="col-md-3 col-6 tovar_wrapper p-0" data-appear-top-offset='-100' data-animated='fadeInUp'>
                <div class="card  tovar_item padbot40 filter ">
                    <div class="tovar_img">
                        <div class="tovar_img_wrapper">
                            <!-- <label class="baohanh badge-warning" style="color: black; margin:10px; font-size: 12px;">Trả góp 0%</label> -->
                            <img class="card-img-top" src=".<?=$product->mainPicture?>" alt="">
                            <div class="card-body">
                                <p class="card-title text-center" style="font-weight: bold;"><?= $product->productName ?></p>
<!--                                 <div class="props my-2">
                                    <span class="dotted"><?= $product->ram ?></span>
                                    <span class="dotted"><?= $product->disk ?></span>
                                </div> -->
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
<div class="row justify-content-center">
    <a href="./?controller=FilterPage&action=allPCProduct">
        <p class="btn btn-outline-warning">Xem tất cả</p>
    </a>
</div>


<!--PHU KIEN-->
<div class="container padding">
    <div class="row laptop mt-5">
        <div class="col-12">
            
            <h3>
                <img class="cpslazy loaded" data-src="./assets/img/flash.gif" data-ll-status="loaded" src="./assets/img/flash.gif" style="width: 20px">
                <i style="color: #ef3f23;font-size: 25px;">PHỤ KIỆN</i>
                <img class="cpslazy loaded" data-src="img/flash.gif" data-ll-status="loaded" src="./assets/img/flash.gif" style="width: 20px">
            </h3>
        </div>
    </div>
</div>

<div class="container padding">
    <div class="row padding">
        <?php foreach ($data['accessoryProducts'] as $product) { ?>
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

<div class="row justify-content-center">
    <a href="./?controller=FilterPage&action=allAccessoryProduct">
        <p class="btn btn-outline-warning">Xem tất cả</p>
    </a>
</div>