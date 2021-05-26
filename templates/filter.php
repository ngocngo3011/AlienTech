<link href="./assets/css/style-alllaptop.css" rel="stylesheet">

  <div class="container" style="margin-bottom: 10px">
      <div class="container-fluid breadcrumb1" style="padding: 0px">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#" style=" color: #cc5801">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> 
                    <?= $data["category_name"] ?>
                  </li>
              </ol>
          </nav>
      </div>
  </div>

  <div class="container" style="margin-bottom: 20px">
      <h2 style="font-weight: bold">
            <?= $data["category_name"] ?>
      </h2>
  </div>


  <div class="container" style="padding-right:0px;margin-bottom: 20px;">
      <div class="row">
          <div class="col-3sapxeptheo">
              <p style="margin-bottom:2px; padding-left: 15px; font-weight: bold;">Sắp xếp theo:</p>
          </div>
          <div class="col-3" style="padding-left:35px">
              <div>
                  <select name="calc_shipping_provinces" style="text-align: right;">
                      <option> None</option>
                      <option> Giá giảm dần</option>
                      <option> Giá tăng dần</option>
                  </select>
              </div>
          </div>
      </div>
  </div>




  <div class="container imgsp body">
      <div class="row">
          <div class="col-md-3 col-12" style="padding-left: 0px">

              <div class="container-fluid " style="padding-left: 0px">
                  <div class="row">
                      <div class="col-7">
                          <h3 style="display: inline;">Bộ lọc</h3>
                      </div>
                      <div class="col-5 boloc1"><a href="">Bỏ lọc</a></div>
                  </div>

              </div>


              <nav class="navbar navbar-expand-md navbar-light boloc" style="padding-left: 0px">


                  <div class="container">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarNav">

                          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                              <!--Tìm theo tiêu chí Thương hiệu-->

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingTwo">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Thương hiệu
                                          </a>
                                      </h5>
                                  </div>

                                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Lenovo</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Razer</label>
                                              </div>
                                              <div class="checkbox ">
                                                  <label><input type="checkbox" value=""> Asus</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" checked="yes" value=""> Dell</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> HP</label>
                                              </div>
                                              <div class="checkbox ">
                                                  <label><input type="checkbox" value=""> Microsoft</label>
                                                  <div class="checkbox ">
                                                  </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>


                              <!--Lọc theo tiêu chí-->
                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingThree">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              Khoảng giá</a>
                                      </h5>
                                  </div>

                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Trên 50 triệu</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 40-50 triệu</label>
                                              </div>
                                              <div class="checkbox ">
                                                  <label><input type="checkbox" value=""> 30-40 triệu</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 20-30 triệu</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 15-20 triệu</label>
                                              </div>
                                              <div class="checkbox ">
                                                  <label><input type="checkbox" value=""> 10-15 triệu</label>
                                              </div>
                                              <div class="checkbox ">
                                                  <label><input type="checkbox" value=""> Dưới 10 triệu</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>


                              <!--Kết thúc lọc-->

                              <!--Lọc theo tiêu chí-->
                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingFour">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                              Loại hàng</a>
                                      </h5>
                                  </div>

                                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Chính hãng</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Nhập khẩu</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                              <!--Kết thúc lọc-->

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingFive">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                              Tình trạng</a>
                                      </h5>
                                  </div>

                                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> New Sealed</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> New, Fullbox</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> New, Outlet</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Uesed</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingSix">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                              CPU</a>
                                      </h5>
                                  </div>

                                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel Dual Core</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel Core i3</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel Core i5</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel Core i7</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel Core i9</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel Xeon</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> AMD Ryzen 3</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> AMD Ryzen 5</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> AMD Ryzen 7</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>



                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingSeven">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsSeven" aria-expanded="false" aria-controls="collapsSeven">
                                              RAM</a>
                                      </h5>
                                  </div>

                                  <div id="collapsSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 4GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 8GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 16GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 32GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 64GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 128GB</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading8">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                              Ổ cứng</a>
                                      </h5>
                                  </div>

                                  <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> SSG</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> HDD</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>



                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading9">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9" style="padding-right: 80px">
                                              Số ổ cứng hỗ trợ</a>
                                      </h5>
                                  </div>

                                  <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 1</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 2</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 3</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 4</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 5</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading10">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                              Kích thước màn hình</a>
                                      </h5>
                                  </div>

                                  <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value="">
                                                      < 13"</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 13 - 14"</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 14 - 15.6"</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> > 15.6"</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading11">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                              Tỉ lệ màn hình</a>
                                      </h5>
                                  </div>

                                  <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 16:9</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 16:10</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 3:2</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading12">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                              Loại màn hình</a>
                                      </h5>
                                  </div>

                                  <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Nhám</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Gương</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Cảm ứng</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading13">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                              Dải màu hiển thị</a>
                                      </h5>
                                  </div>

                                  <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Trên 90% sRGB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 70 - 90% sRGB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Dưới 70% sRGBg</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading14">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                              Tấm nền màn hình</a>
                                      </h5>
                                  </div>

                                  <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> IPS</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> TN</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> OLED</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading15">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                              Tần số quét</a>
                                      </h5>
                                  </div>

                                  <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 60HZ</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 75HZ</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 120HZ</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading16">
                                      <h5 class="panel-title">
                                          <a class="collapse16" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                              Độ phân giải</a>
                                      </h5>
                                  </div>

                                  <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 1366 x 768 (HD)</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 1600 x 900 (HD+)</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 1920 x 1080 (FHD)</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 2560 x 1440 (2K)</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 3840 x 2160 (4K)</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>


                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading17">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                              Card đồ họa</a>
                                      </h5>
                                  </div>

                                  <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel HD</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Intel Iris</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Nvidia Geforce</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Nvidia Quadro</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> AMD Radeon</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>



                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading18">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                              Bộ nhớ đồ họa</a>
                                      </h5>
                                  </div>

                                  <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 2GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 4GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 6GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 8GB</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 16GB</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>

                              <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading19">
                                      <h5 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                              Trọng lượng</a>
                                      </h5>
                                  </div>

                                  <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                                      <div class="container-fluid " style="padding-left: 0px">
                                          <form>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Dưới 1kg</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 1 - 1.5kg</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 1.5 - 2kg</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> 2 - 2.5kg</label>
                                              </div>
                                              <div class="checkbox">
                                                  <label><input type="checkbox" value=""> Trên 2.5kg</label>
                                              </div>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </nav>



</form></div>
