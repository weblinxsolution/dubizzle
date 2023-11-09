<!-- Header Start -->
<?php include('header.php'); ?>
<!-- Header End -->

<!-- Banner Start -->
<section>
    <div class="wrapper">
        <!-- For Desktop -->
        <div class="home-banner my-4 d-lg-block d-none">
            <img src="https://dbzstatic-a.akamaihd.net/dist_9c46920/images/vertical_homepages/motors_bg/Image27.png" class="banner-img" alt="">
            <div class="col-lg-8 mx-auto">
                <h1 class="text-center banner-title text-white">About Us</h1>
            </div>
        </div>

        <!-- For Mobile -->
        <div class="row mx-0 px-2 d-lg-none d-flex">
            <div class="mobile-search mb-4">
                <input type="text">
                <i class="fa fa-search"></i>
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->



<!-- Footer Start -->
<?php include('footer.php'); ?>
<!-- Footer End -->

<!-- Slick Slider CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">

<script>
    $('.product_slider').slick({
        infinite: true,
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>

<!-- Custom Js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="assets/js/main.js"></script>
</body>

</html>