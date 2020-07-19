@extends('layouts.masterEN')

@section('content')
<!-- Hero Section
====================================== -->
<section id="slider" class="slider slide-overlay-dark">
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				<!-- slide 1 -->
				<li data-transition="zoomout"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/2.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-130" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">baraka company</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						>
						<div class="slide--headline extend">Fresh & Tasty Meals</div>
					</div>
										
				    <!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="20" 
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'	 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--bio text--center">Steak In has the perfect place to enjoy fine food and great cocktails with <br>excellent service, in comfortable atmospheric surroundings. </div>
					</div>
					
					<!-- LAYER NR. 4 -->
		
				</li>
				
				<!-- slide 2 -->
				<li data-transition="incube-horizontal"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/7.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Unique Food</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="0" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline extend">For Unique Occasions</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="100" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
                        data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
						data-basealign="slide" 
						data-responsive_offset="on" 
						data-responsive="off">
						<div class="slide-action">
							<a class="btn btn--white btn--bordered btn--rounded btn--lg" href="#">Book Your Table Now</a>
						</div>
					</div>
				</li>
				
				<!-- slide 3 -->
				<li data-transition="cube-horizontal"
					data-slotamount="default" 
					data-easein="Power4.easeInOut" 
					data-easeout="Power4.easeInOut" 
					data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/slide-bg/3.jpg" alt="Slide Background Image"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-130" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--subheadline">Made With Love</div>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-65" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":1750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--headline">We Serve Quality Food</div>
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="20" 
						data-width="none"
						data-height="none"
                        data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on">
						<div class="slide--bio text--center">Steak In has the perfect place to enjoy fine food and great cocktails with <br>excellent service, in comfortable atmospheric surroundings. </div>
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
                    <p class="heading--subtitle">Hello Dear</p>
                    <h2 class="heading--title mb-0">We Are Steak In!</h2>
                    <div class="divider--shape-4"></div>
                    <p class="heading--desc">Steak In has the perfect place to enjoy fine food and great cocktails with excellent service, in comfortable atmospheric surroundings. We have a soft dining room, combined with an open kitchen, coffee take out bar and alovely awesome on site coffee roastery.</p>
                </div>
                <div class="signiture-img mb-100 mb-x50">
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
<div  class="menu menu-grid text-center">
	<div class="dishes-bg">
		<div class="bg-section">
			<img src="assets/images/background/9.jpg" alt="bg">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
			
			<div class="dishes-wrapper">
			<div class="row">
				<!-- Dish #1 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pr-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
						<div class="dish--content">
							<span class="dish--price">$24.95</span>
							<h3 class="dish--title">Grilled American Fillet</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">Pork fillet, ginger, garlic, honey, pepper & canola oil.creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
						</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
						<div class="dish--img">
							<div class="divider--shape-left"></div>
							<img src="assets/images/menu/menu-grid/25.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/specials/popup/1.jpg" alt="dish popup">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Grilled American Fillet</h3>
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
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #2 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pl-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
						<div class="dish--content">
							<span class="dish--price">$34.95</span>
							<h3 class="dish--title">Grilled Seafood Paella</h3>
							<div class="divider--shape-4"></div>
							<p class="dish--desc">Monkfish, onion, paella rice, garlic & smoked paprika, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
						</div>
						</div>
					<div class="col-xs-12 col-sm-12 col-md-6 p-0">
						<div class="dish--img">
							<div class="divider--shape-left"></div>
							<img src="assets/images/menu/menu-grid/26.jpg" alt="dish img">
							<div class="dish--overlay">
								<a class="dish-popup" data-toggle="modal" data-target="#dishPopup2"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/26.jpg" alt="dish popup">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$34.95</div>
                                <h3 class="popup--title">Grilled Seafood Paella</h3>
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
						</div>
					
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #3 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pr-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--img">
								<div class="divider--shape-right"></div>
								<img src="assets/images/menu/menu-grid/27.jpg" alt="dish img">
								<div class="dish--overlay">
									<a class="dish-popup" data-toggle="modal" data-target="#dishPopup3"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup3">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/27.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$38.95</div>
                                <h3 class="popup--title">Roast Sea Trout</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
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
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--content">
								<span class="dish--price">$38.95</span>
								<h3 class="dish--title">Roast Sea Trout</h3>
								<div class="divider--shape-4"></div>
								<p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
							</div>
						</div>
 					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #4 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pl-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--img">
								<div class="dish--tag">Recommended</div>
								<div class="divider--shape-right"></div>
								<img src="assets/images/menu/menu-grid/28.jpg" alt="dish img">
								<div class="dish--overlay">
									<a class="dish-popup" data-toggle="modal" data-target="#dishPopup4"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup4">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/28.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$18.95</div>
                                <h3 class="popup--title">Smoked Paprika</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
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
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--content">
								<span class="dish--price">$18.95</span>
								<h3 class="dish--title">Smoked Paprika</h3>
								<div class="divider--shape-4"></div>
								<p class="dish--desc">Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #5 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pr-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--content">
								<span class="dish--price">$13.95</span>
								<h3 class="dish--title">Smoked  Hummus</h3>
								<div class="divider--shape-4"></div>
								<p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--img">
								<div class="dish--tag">Chef Selection</div>
								<div class="divider--shape-left"></div>
								<img src="assets/images/menu/menu-grid/29.jpg" alt="dish img">
								<div class="dish--overlay">
									<a class="dish-popup" data-toggle="modal" data-target="#dishPopup5"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup5">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/29.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$12.95</div>
                                <h3 class="popup--title">Smoked Hummus</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread. </p>
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
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #6 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pl-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--content">
								<span class="dish--price">$33.95</span>
								<h3 class="dish--title">Chicken Breast</h3>
								<div class="divider--shape-4"></div>
								<p class="dish--desc">Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. </p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--img">
								<div class="divider--shape-left"></div>
								<img src="assets/images/menu/menu-grid/30.jpg" alt="dish img">
								<div class="dish--overlay">
									<a class="dish-popup" data-toggle="modal" data-target="#dishPopup6"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup6">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/30.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$33.95</div>
                                <h3 class="popup--title">Chicken Breast</h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="content-popup">
                            <p>Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping. </p>
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
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #7 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pr-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--img">
								<div class="divider--shape-right"></div>
								<img src="assets/images/menu/menu-grid/31.jpg" alt="dish img">
								<div class="dish--overlay">
									<a class="dish-popup" data-toggle="modal" data-target="#dishPopup7"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup7">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/31.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
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
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--content">
								<span class="dish--price">$29.95</span>
								<h3 class="dish--title">Roasted Steak Roulade</h3>
								<div class="divider--shape-4"></div>
								<p class="dish--desc">Roast trout, English asparagus, watercress & royals, creamy chesapeake crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread.</p>
							</div>
						</div>
					 </div>
				</div>
				<!-- .col-md-3 end -->
				<!-- Dish #8 -->
				<div class="col-xs-12 col-sm-6 col-md-6 pl-0">
					<div class="dish-panel">
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--img">
								<div class="divider--shape-right"></div>
								<img src="assets/images/menu/menu-grid/32.jpg" alt="dish img">
								<div class="dish--overlay">
									<a class="dish-popup" data-toggle="modal" data-target="#dishPopup8"><i class="fa fa-search-plus"></i></a>
<div class="modal fade" tabindex="-1" role="dialog" id="dishPopup8">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                <div class="row reservation">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="popup--img">
                            <img src="assets/images/menu/menu-grid/32.jpg" alt="dish img">
                            <div class="img-popup-overlay">
                                <div class="popup--price">$29.95</div>
                                <h3 class="popup--title">Roasted Steak Roulade</h3>
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
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 p-0">
							<div class="dish--content">
								<span class="dish--price">$29.95</span>
								<h3 class="dish--title">Roasted Steak Roulade</h3>
								<div class="divider--shape-4"></div>
								<p class="dish--desc">Red peppers, roasted garlic, lemon slices, olives & mint, creamy crab dip with artichoke, baked and topped with cheddar cheese, with crusty bread for dipping.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
			</div>
			<!-- .dishes-wrapper end -->
				</div>
			</div>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</div>
            </div>
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
                    <p class="heading--subtitle">Don’t miss</p>
                    <h2 class="heading--title mb-0">Our News & Events</h2>
                    <div class="divider--shape-4"></div>
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
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Fall</a> , <a href="#">Side Dish</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Simple Recipes for Spring</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="assets/images/blog/grid/1.jpg" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                My favorite form of cold-weather exercise is snow-shoeing, but by chance I haven’t been able to go this year. Too busy working at the computer
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #2 -->
                    <div class="blog-entry">
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Apple</a> , <a href="#">Stuffing And Dressing</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Dinner Party for a Chef!</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="assets/images/blog/grid/2.jpg" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                I began my career as a recipe tester for cookbooks, and I did that work for two years. I loved cookbooks and loved browsing for them...
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #3 -->
                    <div class="blog-entry">
                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Food</a> , <a href="#">Cheese</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Cake with Cream Cheese</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
								<img src="assets/images/blog/grid/3.jpg" alt="entry image"/>
							</a>
                            </div>
                            <div class="entry--bio">
                                I’ve been baking this cake for many years, and have experimented with making it into cupcakes, as a layer cake, serving it dusted with
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #4 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Green</a> , <a href="#">Casserole</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">The Best Side Dishes</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
							<img src="assets/images/blog/grid/4.jpg" alt="entry image"/>
						</a>
                            </div>
                            <div class="entry--bio">
                                From green bean casserole to mashed potatoes and cranberry sauce, find standout Thanksgiving sides from Food Network chefs find standout.
                            </div>
                        </div>
                        <!-- .entry-content end -->
                    </div>
                    <!-- .blog-entry end -->

                    <!-- Blog Entry #5 -->
                    <div class="blog-entry">

                        <div class="entry--content">
                            <div class="entry--meta">
                                <span class="entry--date">Feb 22, 2017</span> / <span><a href="#">Casserole</a></span>
                            </div>
                            <div class="entry--title">
                                <h4><a href="#">Cornbread Stuffing Apples</a></h4>
                            </div>
                            <div class="entry--img">
                                <a href="#">
							<img src="assets/images/blog/grid/5.jpg" alt="entry image"/>
						</a>
                            </div>
                            <div class="entry--bio">
                                Cook sausage for 5 to 7 minutes until browned. Add onions and celery and saute until softened. Add salt and pepper, to taste. Mix in apples, thyme
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