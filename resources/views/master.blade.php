<!doctype html>
<html lang="zxx">

@include('partials.head')

<body>
@include('partials.header')

   @yield('content')

    <!--::footer_part start::-->
    <footer>

        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-center">
                 <div class="col-lg-12">
                     <div class="footer-copy-right">
                         <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                            All rights reserved | <i class="ti-heart" aria-hidden="true"></i>
                            by <a href="https://denisyashop.com" target="_blank">Denisya</a>
                        </p>                
                    </div>
                 </div>                             
                </div>
            </div>
        </div>
    </footer>
        <!-- Footer End-->
 
    {{-- </footer>
    <footer class="footer_part">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-lg-2">
                    <div class="single_footer_part">
                        <h4>Kategori Produk</h4>
                        <ul class="list-unstyled" style="color: white">
                            <li>Pria</li>
                            <li>Wanita</li>
                            <li>Sepatu</li>
                            <li>Tas</li>
                            <li>Aksesoris</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_footer_part">
                        <h4>Alamat</h4>
                        <ul class="list-unstyled" style="color: white">
                            <li>Desa Ujungaris</li>
                            <li>+10 456 267 1678</li>
                            <li><span>contact89@winter.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_footer_part">
                        <div class="social_icon">
                            <a href="facebook.com/Denisya Tri Buana"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_text">
                        <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Denisya-Shop</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                    </div>
                </div>
            </div>
        </div>
    {{-- --}}
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>