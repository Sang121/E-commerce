<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- site metas -->
    <title>Eflyer</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('customer/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('customer/css/style.css')}}">

    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset('customer/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('customer/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('customer/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('customer/css/owl.carousel.min.css')}}">
    <link rel="stylesoeet" href="{{asset('customer/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!-- Link CSS của Font Awesome v5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Link JS của Font Awesome v5 (nếu bạn muốn sử dụng các tính năng JavaScript) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <style>
        .login_menu .dropdown-menu {
            display: none;
        }

        .login_menu .dropdown.open .dropdown-menu {
            display: block;
        }

    </style>

</head>
<body>
<!-- banner bg main start -->
<div class="banner_bg_main">
    <!-- header top section start -->
    <div class="container">
        <div class="header_section_top">
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom_menu">
                        <ul>
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">Gift Ideas</a></li>
                            <li><a href="#">New Releases</a></li>
                            <li><a href="#">Today's Deals</a></li>
                            <li><a href="#">Customer Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top section start -->
    <!-- logo section start -->
    <div class="logo_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo"><a href="{{route('home.index')}}"><h1 style="font-weight: bold;font-size: 50px;color: white">TST SPORT</h1></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- logo section end -->
    <!-- header section start -->
    <div class="header_section">
        <div class="container">
            <div class="containt_main">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="{{route('home.index')}}">Home</a>
                    <a href="fashion.html">Fashion</a>
                    <a href="electronic.html">Electronic</a>
                    <a href="jewellery.html">Jewellery</a>
                </div>
                <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="main">
                    <!-- Another variation with a button -->
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="header_box">
                    <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                            <img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                            <a href="#" class="dropdown-item">
                                <img src="images/flag-france.png" class="mr-2" alt="flag">
                                French
                            </a>
                        </div>
                    </div>
                    <div class="login_menu">
                        <ul>
                            <li><a href="{{route('cart.index',auth()->id())}}">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="padding_10">Cart</span>
                                </a>
                            </li>

                            <li>
                                <ul class="dropdown">
                                    <a href="#" class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="padding_10">User</span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <strong>{{auth()->user()->role->name}}</strong>
                                        <a style="color:#f26522" href="{{route('profile.edit')}}">Information</a>
                                        <form action="{{route('logout')}}" method="post">
                                            @csrf
                                            <button onclick="return confirm('are u sure?')" style="color:#f26522;border: none;padding: 0" type="submit" class="btn btn-link">Logout</button>
                                        </form>
                                    </div>
                                </ul>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div class="container">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Welcome to <br>TST SPORT</h1>
                                <div class="buynow_bt"><a href="#">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">your safety<br>my responsibility</h1>
                                <div class="buynow_bt"><a href="#">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                                <div class="buynow_bt"><a href="#">Buy Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
<!-- banner bg main end -->
<!-- fashion section start -->


<!-- jewellery  section start -->
@yield('content')
<!-- jewellery  section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">

    <div class="container">
        <div class="footer_logo"><a href="{{route('home.index')}}"><img src="images/footer-logo.png"></a></div>
        <div class="input_bt">
            <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
            <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
        </div>
        <div class="footer_menu">
            <ul>
                <li><a href="#">Best Sellers</a></li>
                <li><a href="#">Gift Ideas</a></li>
                <li><a href="#">New Releases</a></li>
                <li><a href="#">Today's Deals</a></li>
                <li><a href="#">Customer Service</a></li>
            </ul>
        </div>
        <div class="location_main">Help Line  Number : <a href="#">0352797320</a></div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
    </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{asset('customer/js/jquery.min.js')}}"></script>
<script src="{{asset('customer/js/popper.min.js')}}"></script>
<script src="{{asset('customer/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('customer/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('customer/js/plugin.js')}}"></script>
<script src="{{asset('customer/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('customer/js/custom.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.login_menu .dropdown-toggle').click(function(e) {
            e.preventDefault();
            $(this).parent().toggleClass('open');
        });

        // Đóng danh sách dropdown nếu click bên ngoài nút
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.login_menu .dropdown').length) {
                $('.login_menu .dropdown').removeClass('open');
            }
        });
    });
</script>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
        document.getElementById('checkout-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);

        // Gửi AJAX request tới route 'place.order'
        fetch('/place-order', {
        method: 'POST',
        body: formData,
        headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    })
        .then(response => {
        if (response.ok) {
        // Nếu request thành công, chuyển hướng tới trang thông báo đặt hàng thành công
        window.location.href = '/checkout/success';
    } else {
        // Nếu có lỗi xảy ra, hiển thị thông báo lỗi
        alert('An error occurred while processing your order.');
    }
    })
        .catch(error => {
        // Nếu có lỗi xảy ra, hiển thị thông báo lỗi
        alert('An error occurred while processing your order.');
    });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
