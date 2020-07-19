<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Elegant Restaurant & Cafe Html5 Template by zytheme">
    <link href="assets/images/favicon/favicon.png" rel="icon">

    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Changa:200,300,400,500,600,700&amp;subset=arabic" rel="stylesheet">

    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" href="assets/css/style-rtl.css" rel="stylesheet" />
    <link type="text/css" href="assets/css/style-arabic.css" rel="stylesheet" />

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>ستيك | قالب مخصص للمطاعم و الكافيهات</title>
</head>

<style>

.navbar-nav > li.active > a:after {
	/*update
	position: absolute;
	right: 0;
	top: 50%;
	margin-top: 12px;
	width: 2px;
	height: 13px;
	content: "";
	background-color: rgba(255, 255, 255, 0.5);
	*/
	position: absolute;
    right: -20px;
    top: 25%;
    margin-top: 12px;
    width: 2px;
    height: 30px;
    content: "";
    background-color: rgba(255, 255, 255, 0.5);
}

</style>
<body>

	<div class="preloader">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

    <!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="wrapper clearfix">
<header id="navbar-spy" class="header header-1 header-transparent header-fixed">
    <nav id="primary-menu" class="navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
                <a class="logo" href="index.html">
					<img class="logo-light" src="assets/images/logo/logo-light.png" alt="Steakin Logo" draggable="false">
					<img class="logo-dark" src="assets/images/logo/logo-dark.png" alt="Steakin Logo" draggable="false">
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="navbar-collapse-1">
                <ul class="nav navbar-nav nav-pos-right navbar-left" style=" display: flex;">
                    <!-- Home Menu -->
                    <li class="has-dropdown mega-dropdown ">
    <a href="{{route('indexEN')}}" class="menu-item">اللغة الإنجليزية</a>
  
    <!-- .mega-dropdown-menu end -->
</li>
<li class="has-dropdown mega-dropdown active">
    <a href="{{route('index')}}" class="menu-item">الرئيسية</a>
  
    <!-- .mega-dropdown-menu end -->
</li>
<!-- li end -->
<!-- About Menu -->
<li class="has-dropdown">
    <a href="{{route('about')}}" class="menu-item">من نحن</a>
 
</li>
<!-- li end -->

<!-- About Menu -->
<li class="has-dropdown">
    <a href="{{route('product')}}" class="menu-item">منتجاتنا</a>
 
</li>
<!-- li end -->
<!-- Features Menu-->
<li class="has-dropdown">
    <a href="{{route('news')}}" class="menu-item">الأخبار</a>
   
</li>
<!-- li end -->
<!-- Blog Menu-->
<li class="has-dropdown">
    <a href="{{route('contact')}}" class="menu-item">تواصل معنا</a>
   
</li>
<!-- li end -->

<!-- Elements Menu -->

                </ul>

                <!-- Module Cart -->

<!-- .module-cart end -->
                <!-- Module Search -->

<!-- .module-search end -->
      
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>

        @yield('content')
      


<!-- footer#1
============================================= -->
<footer id="footer" class="footer footer-1 text-center">
    <div class="divider--shape-dark"></div>
    <!-- Widget Section
	============================================= -->
    <div class="footer--widget text--center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="footer--widget-content">
                        <h3>تابعنا</h3>
                        <div class="footer--social-icons">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                        </div>
                        <!-- .social-icons end -->
                    </div>
                </div>
                <!-- .col-md-4 end -->
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="footer--widget-content">
                        <img class="mb-20" src="assets/images/logo/logo-light.png" alt="logo">
                        <p>ستيك إن لديه المكان المثالي للتمتع بالمأكولات الراقية والكوكتيلات الرائعة مع خدمة ممتازة، في محيط مريح في الغلاف الجوي. لدينا غرفة طعام ناعمة، جنبا إلى جنب مع مطبخ مفتوح، القهوة إخراج شريط.</p>
                    </div>
                </div>
                <!-- .col-md-3 end -->

             
                <!-- .col-md-3 end -->
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-widget end -->
    <!-- Copyrights
	============================================= -->
    <div class="footer--copyright text-center">
        <div class="divider--shape-dark2"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-12">
                    <div class="contact-info">
                        <span>طنطا- مصر </span> -
                        <span>02 01065370701</span> -
                        <span>7oroof@7oroof.com</span>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 col-md-12">
                    <span>&copy; الحقوق محفوظة ، صنعت بحب </span> <a href="http://themeforest.net/user/7oroof/portfolio?ref=zytheme">7oroof.com</a>
                </div>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- .footer-copyright end -->
</footer>
</div>
<!-- #wrapper end -->

<!-- Footer Scripts
============================================= -->
<script src="assets/js/jquery-2.2.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/functions.js"></script>
<!-- RS5.0 Core JS Files -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<!-- RS Configration JS Files -->
<script src="assets/js/rsconfig.js"></script>
</body>

</html>
