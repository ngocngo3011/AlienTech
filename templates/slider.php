
<!--MAIN-->
<!--Carousel-->
<!--indicators-->
  <div id="slides" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1" ></li>
        <li data-target="#slides" data-slide-to="2" ></li>
        <li data-target="#slides" data-slide-to="3" ></li>
      </ul>
    <!--the slideshow-->
      <div class="carousel-inner">
<?php foreach ($data['SliderPicture'] as $key=>$product) { ?>

        <div class="carousel-item <?php echo ($key == 0) ? "active" : ""; ?> ">
          <img src=".<?= $product->sliderPicture ?>">
        </div>

<?php } ?></div>
    <!--left and right controls-->
      <a class="carousel-control-prev" href="#slides" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#slides" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
  </div>
<br>

        <!-- --------------------- Blog Carousel ----------------- -->