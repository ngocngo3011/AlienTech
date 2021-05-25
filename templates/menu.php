<!--header navigation-->
<nav class="navbar navbar-expand-md navbar-light" style="margin:0px;padding: 0px;">
  <a class="navbar-brand" href="/PHPDEMO"><img class="d-none d-md-flex" style="width: 205px;height: 60px;" src="./assets/img/logo/logo1.png"></a>
  <div class="container">

    <!--search khi màn hình nhỏ-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><img class=" img-fluid d-flex d-md-none" style="width: 120px;height: 60px;" src="./assets/img/logo/logo1.png"></a>
    <div class="header-wrap-icon  d-flex d-md-none">
      <form class="col-sm-8" id="searchbox">
        <input type="search" placeholder="Search">
      </form>
    </div>



    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item mx-3">
          <div class="dropdown show">
            <a class="btn " href="?controller=FilterPage&action=allLaptopProduct" role="button" id="dropdownMenuLink">
              <span style="font-size: 80%"><i class="fas1 fas fa-laptop"></i></span>
              <span style="font-size: 120%">Laptop</span><a href=""></a>
            </a>
            <div class="dropdown-menu">
              <div class="dropright">
                <button type="button" onclick="laptopApple()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Apple</button>
              </div>
              <div class="dropright">
                <button type="button" onclick="laptopDell()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Dell</button>
              </div>
              <div class="dropright">
                <button type="button" onclick="laptopHP()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">HP</button>
              </div>
              <div class="dropright">
                <button type="button" onclick="laptopAsus()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Asus</button>
              </div>
              <div class="dropright">
                <button type="button" onclick="laptopLenovo()" class="btn btn-outline-warning col-12" style="color:black; border: 0px;" data-toggle="dropdown">Lenovo</button>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item mx-3">
          <div class="dropdown show">
            <a class="btn " href="./?controller=FilterPage&action=allPCProduct" role="button" id="dropdownMenuLink">
              <span style="font-size: 80%"><i class="fas1 fas fa-desktop"></i></span>
              <span style="font-size: 120%">Máy tính - PC</span>
            </a>
            <div class="dropdown-menu">
              <div class="dropright">
                <button type="button" onclick="PCApple()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Apple</button>
              </div>
              <div class="dropright">
                <button type="button" onclick="PCDell()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Dell</button>
              </div>
              <div class="dropright">
                <button type="button" onclick="PCHP()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">HP</button>
              </div>
                <!-- <div class="dropdown-menu">
                  <button type="button" onclick="xem_sp()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Elitedesk</button>
                  <button type="button" onclick="xem_sp()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Workstation</button>
                  <button type="button" onclick="xem_sp()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Pavilion</button>
                </div> -->
              <div class="dropright">
                <button type="button" onclick="PCAsus()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Asus</button>
              </div>
              <div class="dropright">
                <button type="button" onclick="PCLenovo()" class="btn btn-outline-warning col-12" style="color:black;border: 0px;" data-toggle="dropdown">Lenovo</button>
              </div>              

            </div>
          </div>
        </li>
        <li class="nav-item button mx-3">
          <div class="dropdown show">
            <a class="btn " href="./?controller=FilterPage&action=allAccessoryProduct" role="button" id="dropdownMenuLink">
              <span style="font-size: 80%"><i class="fas1 fas fa-headphones"></i></span>
              <span style="font-size: 120%">Phụ kiện</span>
            </a>
          </div>
        </li>

        <li class="nav-item button mx-3">
          <div class="dropdown show">
            <a class="btn " href="./?controller=Homepage&action=New" role="button" id="dropdownMenuLink">
              <span style="font-size: 80%"><i class="fas1 fas fa-newspaper"></i></span>
              <span style="font-size: 120%">Trang tin</span>
            </a>
          </div>
        </li>
      </ul>
      <hr>
      <!--đường gạch ngang-->
      <!--search khi màn hình >md-->
      <ul class="navbar-nav">
        <div class="header-wrap-icon d-none d-md-flex">
          <form class="col-sm-8" id="searchbox">
            <input type="search" id="myInput">
          </form>
        </div>
      </ul>

      <ul class="navbar-nav d-none d-md-flex">
        <li class="nav-item mx-3">
          <a class="nav-link" href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </li>
      </ul>
      <!--hiện trong button khi màn hình nhỏ-->
      <ul class="navbar-nav d-flex d-md-none">
        <li class="nav-item">
          <div class="col-12 text-center">
            <i class="fab fa-facebook mr-3"></i>
            <i class="fab fa-instagram "></i>
          </div>
          <div class="col-12 text-center">
            <i class="fa fa-phone" aria-hidden="true"></i> 0123456789
          </div>
          <div class="col-12 text-center">
            <i class="fas fa-map-marker-alt"></i> 279 Nguyễn Tri Phương
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>