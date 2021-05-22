 <!-- Footer -->
 <footer id="footer">
   <!-- Tạo backgroud Full, màu dark, chữ trắng -->
   <div class="container-fluid bg-dark text-white">
     <!-- panding top = 3 -->
     <div class="container pt-2">

       <div class="row">
         <!--mất khi màn hình < xl -->
         <div class="mb-2 col-xl-3 m-2"> <img src="./assets/img/Logo/alien-logo.png" width="200"></div>
         <div class="col-2 m-2 d-xl-block d-none"></div>
         <div class="col-sm-2 m-2 ">
           <div class="phone mb-3"><br>
             <a href="tel:12345678"><i class="fa fa-phone"></i> 123.456.789</a>
           </div>
         </div>
         <div class="col-sm-4 m-2">
           <ul class="heading Fitem navbar-nav mr-auto">
             <div class="logo-social my-3 d-flex justify-content-start">
               <a href="#" class="mr-2">
                 <img src="./assets/img/Logo/gmail-logo.png" width="35" height="28">
               </a>
               <a href="#" class="mr-2">
                 <img src="./assets/img/Logo/youtube-logo.png" width="35" height="25">
               </a>

               <a href="#" class="mr-2">
                 <img src="./assets/img/Logo/facebook-logo.png" width="30" height="30">
               </a>

               <a href="#" class="mr-2">
                 <img src="./assets/img/Logo/instagram-logo.png" width="30" height="30">
               </a>
             </div>

           </ul>
         </div>
         <!--Hiện khi màn hình < XL -->


       </div>

       <!-- Tạo dòng đầu tiên chứa Logo, Social -->
       <div class="row">


         <!-- Các dịch vụ và About us Chỉ hiện khi display>md-->
         <div class="col-3 m-2 d-none d-md-block">
           <p class="heading">SẢN PHẨM VÀ DỊCH VỤ</p>
           <ul class=" Fitem navbar-nav mb-3 mr-auto">
             <li class=" nav-item d-none d-md-block">
               <a class="nav-link" href="#">LAPTOP</a>
               <a class="nav-link" href="#">MÁY TÍNH-PC</a>
               <a class="nav-link" href="#">PHỤ KIỆN</a>
               <a class="nav-link" href="#">TRANG TIN</a>
             </li>
           </ul>

         </div>
         <div class="col-2 m-2 d-none d-md-block">
           <p class="heading">CHÍNH SÁCH</p>
           <ul class=" Fitem navbar-nav mb-3 mr-auto">
             <li class=" nav-item p-1 d-none d-md-block">
               <a class="nav-link" href="#">Thanh toán</a>
               <a class="nav-link" href="#">Giao hàng</a>
               <a class="nav-link" href="#">Bảo hành</a>
               <a class="nav-link" href="#">Đổi trả</a>
             </li>
           </ul>
         </div>
         <div class="col-2 m-2 d-none d-md-block">
           <p class="heading">VỀ CHÚNG TÔI</p>
           <ul class=" Fitem navbar-nav mb-3 mr-auto">
             <li class=" nav-item p-1 d-none d-md-block">
               <a class="nav-link" href="#">Alien Tech</a>
               <a class="nav-link" href="#">Lịch sử thành lập</a>
               <a class="nav-link" href="#">Giá trị cốt lõi</a>
               <a class="nav-link" href="#">Tầm nhìn, sứ mệnh</a>
             </li>
           </ul>
         </div>

         <!-- Navbar "Chính sách & About us" chỉ chạy khi display < md  -->
         <nav class="container navbar navbar-expand-md bg-dark navbar-dark d-block d-md-none ml-2 d-flex">
           <b class="navbar-brand">
             <p id="headingnavft">XEM THÊM</p>
           </b>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
               <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path>
             </svg>
             <span class="visually-hidden"></span>
           </button>
           <div class="collapse navbar-collapse" id="collapsibleNavbar">
             <ul class="navbar-nav">
               <div class="row m-0">
                 <div class="col">
                   <p class="heading">SẢN PHẨM VÀ DỊCH VỤ</p>
                   <ul class=" Fitem navbar-nav mb-3 mr-auto">
                     <li class=" nav-item d-block d-md-none">
                       <a class="nav-link" href="#">LAPTOP</a>
                       <a class="nav-link" href="#">MÁY TÍNH-PC</a>
                       <a class="nav-link" href="#">PHỤ KIỆN</a>
                       <a class="nav-link" href="#">TRANG TIN</a>
                     </li>
                   </ul>
                 </div>
                 <div class="col">
                   <p class="heading">CHÍNH SÁCH</p>
                   <ul class=" Fitem navbar-nav mb-3 mr-auto">
                     <li class=" nav-item d-block d-md-none">
                       <a class="nav-link" href="#">Thanh toán</a>
                       <a class="nav-link" href="#">Giao hàng</a>
                       <a class="nav-link" href="#">Bảo hành</a>
                       <a class="nav-link" href="#">Đổi trả</a>
                     </li>
                   </ul>

                 </div>
                 <div class="col">
                   <p class="heading">VỀ CHÚNG TÔI</p>
                   <ul class=" Fitem navbar-nav mb-3 mr-auto">
                     <li class=" nav-item d-block d-md-none">
                       <a class="nav-link" href="#">Alien Tech</a>
                       <a class="nav-link" href="#">Lịch sử thành lập</a>
                       <a class="nav-link" href="#">Giá trị cốt lõi</a>
                       <a class="nav-link" href="#">Tầm nhìn, sứ mệnh</a>
                     </li>
                   </ul>

                 </div>
               </div>
             </ul>
           </div>
         </nav>

         <!--Row Contact  -->
         <div class="col-md m-2">

           <p class="heading">HỆ THỐNG CỬA HÀNG</p>

           <div class="row m-0">
             <div class="imgclock mt-2 ml-1"><i class="fa fa-clock-o" style="font-size:24px"></i></div>
             <div class="ml-1">Mon.-Sun. <br>9:00am-22.00pm</div>
           </div>
           <br>
           <div class="row">
             <div class="col">
               <p>TP. Hồ Chí Minh:</p>
               <p class="addressft">279 Nguyễn Tri Phương, Phường 1, Quận 10 <br><a href="#" class="maps">Chỉ đường</a></p>
             </div>
             <div class="col">
               <p>Hà Nội: </p>
               <p class="addressft">105/562 Đường Láng, P. Láng Hạ, Q. Đống Đa<br><a href="#" class="maps">Chỉ đường</a></p>
             </div>
           </div>

         </div>
       </div>
     </div>
   </div>
 </footer>
 <!-- Dòng cuối cùng -->
 <div class="strip justify-content-between px-4  d-none d-md-flex">
   <p class="font-rale font-size-12 text-black-50 mt-1 ">Sản phẩm được tạo bởi Group 6_BI_001_K44</p>
   <div class="font-rale font-size-14">
     <a href="#" class="px-3 border-right border-left text-black-50">UEH</a>
   </div>
 </div>





 <!-- Jquery Library file -->
 <script src="./assets/js/js-trangchu/Jquery3.4.1.min.js"></script>

 <!-- --------- Owl-Carousel js ------------------->
 <script src="./assets/js/js-trangchu/owl.carousel.min.js"></script>

 <!-- ------------ AOS js Library  ------------------------- -->
 <script src="./assets/js/js-trangchu/aos.js"></script>

 <!-- Custom Javascript file -->





 <script src="./assets/js/js-trangchu/main.js"></script>
 <script>
   $(document).ready(function() {
     $(".g-scrolling-carousel .items").gScrollingCarousel();
   });
 </script>

 <script>
               function mua_ngay($idProduct){
                 var_dump($idProduct);
                location.assign("./?controller=CartPageConttroller&action=index");
            }

   function xem_all() {
     location.assign("./assets/HTML/index-alllaptop.html");
   }

   function xem_sp() {
     location.assign("./assets/HTML/Detailed_Product.html");
   }

   // Brand
   function laptopApple() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH001");
   }

   function laptopDell() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH002");
   }

   function laptopHP() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH003");
   }

   function laptopAsus() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH004");
   }

   function laptopLenovo() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH005");
   }
   function laptopMicrosoft() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH006");
   }

   function laptopLG() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH007");
   }

   function laptopRazer() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH007");
   }

   function laptopAcer() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH009");
   }

   function laptopMsi() {
     location.assign("./?controller=FilterPage&action=allLaptopProduct&brandId=TH010");
   }





   function trangtin() {
     location.assign("./assets/HTML/Trang Tin.HTML");
   }
 </script>

 <script>
   document.getElementById("myInput").addEventListener("search", myFunction);

   function myFunction() {

     location.assign("./assets/HTML/Ket qua tim kiem.html");
   }
 </script>


 </body>

 </html>