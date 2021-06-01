
<link rel="stylesheet" href="./assets/css/GioHang_CSS.css">
  <link rel="stylesheet" href="./assets/css/TrangChu.Style.css">

  <script language="javascript" src="./assets/js/JS-giohang/GioHangJS.js"></script>
<!--  JS của select district-->
  <script async="async" defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script async="async" defer="defer" src="https://apis.google.com/js/api:client.js" gapi_processed="true"></script>
  <script async="async" defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/vietblogdao/js/districts.min.js"></script>

<?php

require_once('./templates/header.php');

require_once('./templates/menu.php');

require_once('./templates/cartleft.php');

require_once('./templates/cartright.php');
// ADD VIEW DETAIL

require_once('./templates/footer.php');
?>

<script src="./assets/js/JS-giohang/main.js"></script>
<script>
  $(document).ready(function(){
    $(".g-scrolling-carousel .items").gScrollingCarousel();
  });
  </script>
  <!-- Jquery Library file -->
    <script src="./assets/js/JS-giohang/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="./assets/js/JS-giohang/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="./assets/js/JS-giohang/aos.js"></script>

<script>//<![CDATA[
    window.addEventListener('load',function(){
      if(address_2=localStorage.getItem('address_2_saved')){
        $('select[name="calc_shipping_district"] option').each(function(){
          if($(this).text()==address_2){$(this).attr('selected','')}
        })
        $('input.billing_address_2').attr('value',address_2)
      }
      if (district = localStorage.getItem('district')) {
        $('select[name="calc_shipping_district"]').html(district)
        $('select[name="calc_shipping_district"]').on('change', function() {
          var target = $(this).children('option:selected')
          target.attr('selected', '')
          $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
          address_2 = target.text()
          $('input.billing_address_2').attr('value', address_2)
          district = $('select[name="calc_shipping_district"]').html()
          localStorage.setItem('district', district)
          localStorage.setItem('address_2_saved', address_2)
        })
      }
      $('select[name="calc_shipping_provinces"]').each(function() {
        var $this = $(this),
          stc = ''
        c.forEach(function(i, e) {
          e += +1
          stc += '<option value=' + e + '>' + i + '</option>'
          $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
          if (address_1 = localStorage.getItem('address_1_saved')) {
            $('select[name="calc_shipping_provinces"] option').each(function() {
              if ($(this).text() == address_1) {
                $(this).attr('selected', '')
              }
            })
            $('input.billing_address_1').attr('value', address_1)
          }
          $this.on('change', function(i) {
            i = $this.children('option:selected').index() - 1
            var str = '',
              r = $this.val()
            if (r != '') {
              arr[i].forEach(function(el) {
                str += '<option value="' + el + '">' + el + '</option>'
                $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
              })
              var address_1 = $this.children('option:selected').text()
              var district = $('select[name="calc_shipping_district"]').html()
              localStorage.setItem('address_1_saved', address_1)
              localStorage.setItem('district', district)
              $('select[name="calc_shipping_district"]').on('change', function() {
                var target = $(this).children('option:selected')
                target.attr('selected', '')
                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                var address_2 = target.text()
                $('input.billing_address_2').attr('value', address_2)
                district = $('select[name="calc_shipping_district"]').html()
                localStorage.setItem('district', district)
                localStorage.setItem('address_2_saved', address_2)
              })
            } else {
              $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
              district = $('select[name="calc_shipping_district"]').html()
              localStorage.setItem('district', district)
              localStorage.removeItem('address_1_saved', address_1)
            }
          })
        })
      })
    })
    //]]></script>