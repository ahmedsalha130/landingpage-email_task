<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')

<body>

<!--====== NAVBAR NINE PART START ======-->

@include('frontend.layouts.navbar')
<!--====== NAVBAR NINE PART ENDS ======-->


<!-- Start header Area -->
@include('frontend.main_section')
<!-- End header Area -->

<!--====== ABOUT FIVE PART START ======-->

@include('frontend.about_as')
<!--====== ABOUT FIVE PART ENDS ======-->

<!-- ===== service-area start ===== -->
@include('frontend.services')
<!-- ===== service-area end ===== -->


<!-- Start Latest News Area -->
@include('frontend.blogs')
<!-- End Latest News Area -->


<!-- ========================= contact-section start ========================= -->
@include('frontend.contact')
<!-- ========================= contact-section end ========================= -->

<!-- Start Footer Area -->
@include('frontend.layouts.footer')
<!--/ End Footer Area -->


<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

<!--====== js ======-->
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script src="{{asset('frontend/assets/js/tiny-slider.js')}}"></script>

<script>

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
        ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
        navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
        sidebarLeft.classList.toggle("open");
        overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
        sidebarLeft.classList.remove("open");
        overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
        sidebarLeft.classList.add("open");
        overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });

</script>

@yield('scripts')
</body>

</html>
