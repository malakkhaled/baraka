@extends('layouts.masterAR')

@section('content')

<!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-dark ltr">
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <!-- slide 1 -->
                <li data-transition="zoomin" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/sliders/slide-bg/1.jpg" alt="Slide Background Image" width="1920" height="1280">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--subheadline">أهلا بك في شركة البركة</div>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--headline">الخاصة بإستيراد المواد الغذائية</div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="20" data-width="none" data-height="none" data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--bio text--center">نقدم العديد من المنتجات المميزة وذو جودة عالية في السوق الليبي ونسعى دائما لنكون الأفضل. </div>
                    </div>

                
                </li>

                <!-- slide 2 -->
                <li data-transition="slideoverdown" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/sliders/slide-bg/3.jpg" alt="Slide Background Image" width="1920" height="1280">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-130" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--subheadline">نحن مميزين</div>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--headline">نقدم أفخر الأطعمة</div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="20" data-width="none" data-height="none" data-frames='[{"delay":2000,"speed":300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--bio text--center">ستيك هو مطعم وبار ومقهى القهوة تقع على مصر. لدينا <br> وصفات رهيبة والطهاة الأكثر موهبة في المدينة!</div>
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-width="none" data-height="none" data-whitespace="nowrap" data-frames='[{"delay":2250,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]' data-basealign="slide" data-responsive_offset="on" data-responsive="off">
                        <div class="slide-action">
                            <a class="btn btn--primary btn--inverse" href="#">شاهد القائمة</a>
                        </div>
                    </div>
                </li>

                <!-- slide 3 -->
                <li data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/sliders/slide-bg/12.jpg" alt="Slide Background Image" width="1920" height="1280">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-65" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--subheadline">عروض اليوم</div>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="0" data-whitespace="nowrap" data-width="none" data-height="none" data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--headline">وجبات الطازة</div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-width="none" data-height="none" data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-splitin="none" data-splitout="none" data-responsive_offset="on">
                        <div class="slide--bio text--center">ستيك إن لديه المكان المثالي للتمتع الطعام الجيد والكوكتيلات كبيرة مع <br> خدمة ممتازة، في محيط مريح في الغلاف الجوي. </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- END OF SLIDER WRAPPER -->
</section>
<!-- Menu Grid
============================================= -->
<section id="menuGrid">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">بدء تناول الطعام بشكل أفضل</p>
                    <h2 class="heading--title mb-0">وجبات جديدة طازجة يوميا</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">ستيك إن لديه المكان المثالي للتمتع بالمأكولات الراقية والكوكتيلات الرائعة مع خدمة ممتازة، في محيط مريح في الغلاف الجوي. لدينا غرفة طعام ناعمة، جنبا إلى جنب مع مطبخ مفتوح، القهوة شريط الخروج و ألوفيلي رهيبة في الموقع المحمصة القهوة.</p>
                </div>
                <div class="signiture-img mb-100">
                    <img class="center-block" src="assets/images/heading/signiture.png" alt="signiture">
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
    <div class="container-fluid pr-0 pl-0 tabs">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- Menu #6
============================================= -->
<div id="menu6" class="menu menu-grid text-center">
	<div class="dishes-bg">
		<div class="bg-section">
			<img src="assets/images/background/9.jpg" alt="bg">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="dishes-wrapper">
				<!-- Dish #1 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--content">
							<span class="dish--price">24.95 ريال</span>
							<h3 class="dish--title">شوي، أمريكي، فيليه</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
						<div class="dish--img">
							<div class="divider--shape-right"></div>
							<img src="assets/images/menu/menu-grid/25.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup25"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup25">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/25.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">24.95 ريال</div>
                                <h3 class="popup--title">شوي، أمريكي، فيليه</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #2 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--img">
							<div class="divider--shape-left"></div>
							<img src="assets/images/menu/menu-grid/26.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup26"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup26">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/26.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">23 ريال</div>
                                <h3 class="popup--title">مشوي الأطعمة البحرية بايلا</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
						<div class="dish--content">
							<span class="dish--price">23 ريال</span>
							<h3 class="dish--title">مشوي الأطعمة البحرية بايلا</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #3 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--content">
							<span class="dish--price">38.99 ريال</span>
							<h3 class="dish--title">تروتة البحر المشوي</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
						<div class="dish--img">
							<div class="divider--shape-right"></div>
							<img src="assets/images/menu/menu-grid/27.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup27"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup27">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/27.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">38.99 ريال</div>
                                <h3 class="popup--title">تروتة البحر المشوي</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #4 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--img">
							<div class="divider--shape-left"></div>
							<img src="assets/images/menu/menu-grid/28.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup28"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup28">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/28.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">18.95 ريال</div>
                                <h3 class="popup--title">الفلفل الأحمر المدخن</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
						<div class="dish--content">
							<span class="dish--price">18.95 ريال</span>
							<h3 class="dish--title">الفلفل الأحمر المدخن</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #5 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--content">
							<span class="dish--price">13.95 ريال</span>
							<h3 class="dish--title">مدخن حمص</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
						<div class="dish--img">
							<div class="divider--shape-right"></div>
							<img src="assets/images/menu/menu-grid/29.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup29"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup29">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/29.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">13.95 ريال</div>
                                <h3 class="popup--title">مدخن حمص</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #6 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--img">
							<div class="divider--shape-left"></div>
							<img src="assets/images/menu/menu-grid/30.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup30"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup30">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/30.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">33.95 ريال</div>
                                <h3 class="popup--title">صدر دجاج</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
						<div class="dish--content">
							<span class="dish--price">33.95 ريال</span>
							<h3 class="dish--title">صدر دجاج</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #7 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--content">
							<span class="dish--price">29 ريال</span>
							<h3 class="dish--title">مشوي ستيك رولاد</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
						<div class="dish--img">
							<div class="divider--shape-right"></div>
							<img src="assets/images/menu/menu-grid/31.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup31"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup31">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/31.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">29 ريال</div>
                                <h3 class="popup--title">مشوي ستيك رولاد</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #8 -->
				<div class="col-xs-12 col-sm-6 col-md-3 p-0">
					<div class="dish-panel">
						<div class="dish--img">
							<div class="divider--shape-left"></div>
							<img src="assets/images/menu/menu-grid/32.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup32"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup32">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/32.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">29 ريال</div>
                                <h3 class="popup--title">مشوي ستيك رولاد</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
							</div>
						</div>
						<div class="dish--content">
							<span class="dish--price">29 ريال</span>
							<h3 class="dish--title">مشوي ستيك رولاد</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">سمك السلمون المرقط المحمص، الهليون الإنجليزية، الجرجير و رويالز، دسم السلطعون تشيزابيك تراجع مع الخرشوف، خبز وتصدرت مع جبنة شيدر، مع الخبز القشور.</p>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
			</div>
			<!-- .dishes-wrapper end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</div>            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #menuGrid end -->

<!-- Blog Carousel
============================================= -->
<section id="blog" class="blog blog-carousel pb-100">
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">تابعنا</p>
                    <h2 class="heading--title mb-0">أحدث الأخبار</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">اتبع آخر الأخبار لدينا لمعرفة المزيد عن عروضنا، وصفات والأحداث. لا يمكن للمرء أن يفكر جيدا، والحب جيدا، والنوم جيدا، إذا كان واحد لم تناول الطعام بشكل جيد.</p>
                </div>
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="800">

                    <!-- Blog Entry #1 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">22 فبراير 2017</span> / <span><a href="#">طبق جانبي</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">وصفات بسيطة لربيع</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="assets/images/blog/grid/1.jpg" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                طهي السجق لمدة 5 إلى 7 دقائق حتى براون. إضافة البصل والكرفس ومخفف حتى خففت. إضافة الملح والفلفل حسب الذوق. مزيج في التفاح والزعتر
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #2 -->
                    <div class="blog-entry">
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">22 فبراير 2017</span> / <span><a href="#">تفاح</a> , <a href="#">أكلات صحية</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">حفل عشاء لشيف!</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="assets/images/blog/grid/2.jpg" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                طهي السجق لمدة 5 إلى 7 دقائق حتى براون. إضافة البصل والكرفس ومخفف حتى خففت. إضافة الملح والفلفل حسب الذوق. مزيج في التفاح والزعتر
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #3 -->
                    <div class="blog-entry">
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">22 فبراير 2017</span> / <span><a href="#">طعام</a> , <a href="#">جبنة</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">كيك جبنة بالكريمة</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="assets/images/blog/grid/3.jpg" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                طهي السجق لمدة 5 إلى 7 دقائق حتى براون. إضافة البصل والكرفس ومخفف حتى خففت. إضافة الملح والفلفل حسب الذوق. مزيج في التفاح والزعتر
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #4 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">22 فبراير 2017</span> / <span><a href="#">أخضر</a> , <a href="#">كروسو</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">أفضل طبق جانبي</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
							<img src="assets/images/blog/grid/4.jpg" alt="entry image"/>
						</a>
                            </div>
                            <div class="entry--bio">
                                طهي السجق لمدة 5 إلى 7 دقائق حتى براون. إضافة البصل والكرفس ومخفف حتى خففت. إضافة الملح والفلفل حسب الذوق. مزيج في التفاح والزعتر
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #5 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">22 فبراير 2017</span> / <span><a href="#">كروسو</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">كورنبريد حشو التفاح</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
							<img src="assets/images/blog/grid/5.jpg" alt="entry image"/>
						</a>
                            </div>
                            <div class="entry--bio">
                                طهي السجق لمدة 5 إلى 7 دقائق حتى براون. إضافة البصل والكرفس ومخفف حتى خففت. إضافة الملح والفلفل حسب الذوق. مزيج في التفاح والزعتر
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                </div>
                <!-- .carousel end -->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #blog end -->


@endsection