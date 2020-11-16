<?php
$hal = $this->uri->segment(1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AFQOZ Collection+</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/backend/images/afqoz.png') ?>" rel="icon">
    <link href="<?php echo base_url('assets/backend/images/afqoz.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/frondend/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/font-awesome/css/font-awesome.min.css') ?>"
        rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/venobox/venobox.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/owl.carousel/assets/owl.carousel.min.css') ?>"
        rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/slick/slick.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/frondend/vendor/slick/slick-theme.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/frondend/css/style.css') ?>" rel="stylesheet">

<!-- style tambahan buat nav mobile -->
<link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/afqoz.png') ?>">
<link href="<?php echo base_url('assets/backend/css/icons.css') ?>" rel="stylesheet" type="text/css">
<!-- <script src="<?php echo base_url('assets/backend/js/app.js') ?>"></script> -->
<link href="<?php echo base_url('assets/frondend/css/cart.css') ?>" rel="stylesheet">
<script src="<?php echo base_url('assets/frondend/js/cart.js') ?>"></script>
<link href="<?php echo base_url('assets/frondend/css/prettyPhoto.css') ?>" rel="stylesheet">



</head>
<!-- ======= Header ======= -->
<header id="header" >

    <div class="container">
    <div class="logo float-left">
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="text-light"><a href="<?php echo base_url() ?>" class="scrollto"><span>AFQOZ+</span></a></h1>
            <!-- <a href="<?php echo base_url() ?>" class="scrollto"><img src="<?php echo base_url('assets/backend/images/afqoz.png') ?>" alt="logo Afqoz" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block">
            <ul>
                <li class="<?=($hal=='member/beranda')?'active':'';?>"><a
                        href="<?php echo base_url('member/beranda') ?>">Beranda</a></li>
                <li class="<?=($hal=='member/produk')?'active':'';?>"><a
                        href="<?php echo base_url('member/produk') ?>">Produk</a></li>
                <li class="<?=($hal=='member/artikel')?'active':'';?>"><a
                        href="<?php echo base_url('member/artikel') ?>">Artikel</a></li>
                <li><a href="#" class=" waves-effect waves-light" data-toggle="modal" data-target="#tentang-kami">Tentang</a>
                </li>
                <li class="<?=($hal=='member/keranjang')?'active':'';?>">
                    <a  class="btn" data-fsc-item-path-value="base" data-fsc-item-path="base" 
                    data-fsc-addthis="base" data-fsc-cart="Right" >
                        <i class="mdi mdi-shopping noti-icon "></i> CHART
                        <!-- <span class="badge badge-success badge-pill noti-icon-badge">New</span> -->
                    </a>
                </li>

                <?php 
					if ($this->session->userdata('user')) {
					?>
						<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!-- <?php echo "($this->session->userdata('user'))" ?> -->
                            <i class="fa fa-user-circle"></i> My Account
                            
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item text-dark" href="<?php echo base_url('member/akunku') ?>"><i class="mdi mdi-camera-front-variant"></i> <?=@$_SESSION['user'];?></a>
                            <a class="text-dark" href="<?=site_url('member/pesanan')?>"><i class="mdi mdi-paper-cut-vertical"></i> Pesanan Saya</a>
                            <a class="dropdown-item text-dark" href="<?php echo base_url('member/riwayat') ?>"><i class="mdi mdi-bulletin-board"></i> Riwayat Pesan</a>
                            <a class="text-dark" href="<?=site_url('login/logout')?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
						</div>
					</li>
				<?php
					}else{
				?>
				<li class="nav-item">
					 <a href="<?php echo base_url('login') ?>" class="btn btn-sm btn-primary mr-2 ml-2 mb-1 mt-1" style="color: white;">
                     <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>LogIn</a></li>
				</li>
				<?php
				}
				?>
                </li>
                

            </ul>
        </nav><!-- .main-nav -->
    
    </div>
</header><!-- #header -->


<!--  Modal content for the above example -->
<div id="tentang-kami"  class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true"> <br><br>
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Informasi Singkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <h4>Info Sistem</h4>
                <p>Cras mattis consectetur purus sit amet fermentum.
                    Cras justo odio, dapibus ac facilisis in,
                    egestas eget quam. Morbi leo risus, porta ac
                    consectetur ac, vestibulum at eros.</p>
                    
                    <h4>Info Metode </h4>
                <p>Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Vivamus sagittis lacus vel
                    augue laoreet rutrum faucibus dolor auctor.</p>
                    
                    <h4>Info Perusahaan</h4>
                <p>Aenean lacinia bibendum nulla sed consectetur.
                    Praesent commodo cursus magna, vel scelerisque
                    nisl consectetur et. Donec sed odio dui. Donec
                    ullamcorper nulla non metus auctor
                    fringilla.</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<!-- modal cart -->
<div id="fsb-modal" class="fsb-modal">
	<div class="fsb-modal-content" id="fsb-modal-content">
		<div class="fsb-modal-header" style="background: #28a745; color: #ffffff;">
			<span id="fsb-close" class="fsb-close">&times;</span>
			<span class="fsb-cart_title">Shopping Cart</span>
		</div>
		<div class="fsb-modal-body">
			<div id="fsb_error" class="fsb-alert fsb-alert-danger" role="alert">
				<p class="fsb-alert-heading"><strong>I'm sorry, there was an issue.</strong></p>
				<p id="fsb_error_msg"></p>
			</div>
			<div id="fsb" data-fsc-selections-smartdisplay>
				<div data-fsc-selections-smartdisplay data-fsc-items-container='fastspring_shopping_cart' data-fsc-filter="selected=true" class="fsb-container-fluid px-5 py5">
				</div>
			</div>
			<div data-fsc-selections-smartdisplay-inverse>
				<p class="fsb-emptyCart">Your cart is empty.</p>
			</div>
		</div>
	</div>
</div>

		<!--
		Initialize the Store Builder Library
		Callbacks are located in fullcart.js
		-->
		<script
			id="fsc-api"
			src="https://d1f8f9xcsvx3ha.cloudfront.net/sbl/0.8.1/fastspring-builder.min.js" type="text/javascript"
			data-storefront="fastspringexamples.test.onfastspring.com/popup-fastspringexamples"
			data-markup-helpers-callback="markupHelpersCallback"
			data-before-requests-callback="beforeRequestsCallbackFunction"
			data-after-markup-callback="afterMarkupCallbackFunction"
			data-popup-closed="popupClosed"
			/*uncomment the following line if using Google Analytics*/
			/*data-decorate-callback="decorateCallback"*/
			data-error-callback="errorCallback"
			data-data-callback="dataCallback"
			data-continuous="true">
		</script>

		<!--
		   fsb_shopping_cart handlebars template
		   This is the base shopping cart template and will loop through the items currently in the shopping cart.
		-->
		<script data-fsc-template-for="fastspring_shopping_cart" type="text/x-handlebars-template">
			<div class="fsb-row fsb-align-items-center fsb-mb-4">
				<!--start cart item row-->
				{{#each items}}
					{{#each items}}
						{{#iff path '!=' 'SystemExtension.shippingcalculation'}}
						<div class="fsb-col-lg-12 fsb-border fsb-mb-4 fsb-rounded">
							{{#if removable}}
								<p class="fsb-removeX" style="position: absolute; top: 0px; right: 5px;">
									<a href="#" class="fsb-remove fsb-d-md-none" data-fsc-action="Remove" data-fsc-item-path-value="{{path}}" style="line-height:75%;"> &times;</a>
								</p>
							{{/if}}
							<div class="fsb-row  fsb-mt-4 fsb-mb-4">
								<div class="fsb-col-lg-1 fsb-col-md-1 fsb-col-4 fsb-offset-4 fsb-offset-sm-0 fsb-text-center fsb-pr-0">
									{{#if image}}
										<img src="{{image}}" class="fsb-img-fluid fsb-cartimage" />
									{{/if}}
								</div>
								<div class="fsb-col-lg-6 fsb-col-md-4 fsb-col-sm-8 fsb-col-12 fsb-text-center fsb-text-sm-left">
									<p class="fsb-display">{{display}}</p>
									{{#if description.summary}}
										{{{description.summary}}}
									{{/if}}
								</div>
								<div class="fsb-col-lg-3 fsb-col-md-4 fsb-col-12 fsb-text-center fsb-align-top fsb-mt-4 fsb-mt-sm-2">
									{{>pricing}}
									{{>quantity}}
								</div>
								<div class="fsb-d-none fsb-d-md-block fsb-col-lg-2 fsb-col-md-3 fsb-col-12 fsb-text-center fsb-text-md-right fsb-align-top  fsb-mt-4 fsb-mt-sm-2">
									<p class="fsb-extPrice fsb-text-nowrap">
										{{#iff totalValue '>' '0'}}
											{{total}}
										{{else}}
											FREE
										{{/iff}}
										{{#if removable}}
											<a href="#" class="fsb-d-none fsb-d-md-inline-block fsb-remove" data-fsc-action="Remove" data-fsc-item-path-value="{{path}}"> &times;</a>
										{{/if}}
									</p>
								</div>
							</div>
							
							{{#each groups}}
								<!--Up-Sells-->
								{{#iff type '==' 'replace'}}
									{{#iff selectableReplacements '==' true}}
										{{>upsell}}
									{{/iff}}
								{{/iff}}
								<!--Bundle-->
								{{#iff type '==' 'bundle'}}
									<div class="fsb-row">
										<div class="fsb-col fsb-offset-md-1">
											<div class="fsb-card fsb-mt-2 fsb-mb-3">
												<div class="fsb-card-header" style="background: #28a745; color: #ffffff;">
													{{display}} includes the following:
												</div>
												<div class="fsb-card-body fsb-pb-4">
													{{#each items}}
														{{#if image}}
															<img src='{{image}}' class="fsb-bundleimage" alt='{{display}}' />
														{{/if}}
													{{/each}}
												</div>
											</div>
										</div>
									</div>
								{{/iff}}
								<!--Alternatives-->
								{{#iff type '==' 'options'}}
									<div class="fsb-row">
										<div class="fsb-col-md-11 fsb-offset-md-1">
											<div class="fsb-card fsb-mt-2 fsb-mb-3">
												<div class="fsb-card-header" style="background: #28a745; color: #ffffff;">
													{{display}}&nbsp;
												</div>
												<div class="fsb-card-body fsb-pb-0">
													{{#each items}}
													<div class="fsb-row fsb-mb-4">
														<div class="fsb-col-1">
															<input class="fsb-option-input fsb-radio" type="radio" {{#if selected}} checked{{/if}} name="{{display}}" id="{{path}}" data-fsc-action="Add" data-fsc-item-path-value="{{path}}" >
														</div>
														<div class="fsb-col-lg-1 fsb-col-md-1 fsb-col-12 fsb-text-center fsb-pr-0">
															{{#if image}}
																<img src="{{image}}" class="fsb-img-fluid fsb-ximage"  alt="{{display}}" />														
															{{/if}}
														</div>
														<div class=" fsb-col-12 fsb-col-md-7 fsb-col-9  fsb-text-center fsb-text-md-left">
															<p class="fsb-display">{{display}}</p>
															{{#if description.summary}}
																{{{description.summary}}}
															{{/if}}
															<div class="fsb-d-md-none fsb-row fsb-mt-4  fsb-text-center fsb-text-md-left">
																<div class=" fsb-col-md-7 fsb-col-12">
																	{{>pricing2}}
																	{{>volume-discount}}
																</div>
															</div>
														</div>
														<div class=" fsb-col-12 fsb-col-md-3 fsb-d-none fsb-d-md-block fsb-text-center">
															{{>pricing2}}
														</div>
													</div>
													<hr />
													{{/each}}
												</div>
											</div>
										</div>
									</div>
								{{/iff}}
								<!--Single Choice Option-->
								{{#iff type '==' 'config-one'}}
									{{>singlechoice}}
								{{/iff}}
								<!--Multiple Choice Option-->
								{{#iff type '==' 'config-many'}}
									{{>multichoice}}
								{{/iff}}
								<!--Single Choice Subscription Addon-->
								{{#iff type '==' 'addon-one'}}
									{{>singlechoice}}
								{{/iff}}
								<!--Multiple Choice Subscription Addon-->
								{{#iff type '==' 'addon-many'}}
									{{>multichoice}}
								{{/iff}}
							{{/each}}							
							<!--Cross Sells-->
							{{#each @root.groups}}
								{{#iff type '==' 'add'}}
									{{#iff driver '==' ../../path}}
										{{#iff selectableAdditions '==' true}}
											{{#iff driverType '==' 'product'}}
												{{>xsell}}
											{{/iff}}
										{{/iff}}
									{{/iff}}
								{{/iff}}
							{{/each}}
						</div>
						{{/iff}}
					{{/each}}
				{{/each}}
				<!--end cart item row-->
				<div class="fsb-col-12">
					<div class="fsb-row">
						<div class="fsb-col-12 fsb-col-md-6 fsb-order-md-12 fsb-order-1 fsb-mb-4">
							{{#each items}}
								{{#each items}}
									{{#iff path '==' 'SystemExtension.shippingcalculation'}}
										<div class="fsb-row">
											<div class="fsb-col-8 fsb-text-right">
												<p class="fsb-shipping">Shipping:</p>
											</div>
											<div class="fsb-col-4 fsb-text-right">
												<p class="fsb-shipping">{{total}}</p>
											</div>
										</div>
									{{/iff}}
								{{/each}}
							{{/each}}
							<div class="fsb-row">
								<div class="fsb-col-8 fsb-text-right">
									<p class="fsb-total">Total:</p>
								</div>
								<div class="fsb-col-4 fsb-text-right">
									{{#each order}}
										{{#iff totalValue '>' '0'}}
											<p class="fsb-total" data-fsc-order-total ></p>
										{{else}}
											<p class="fsb-total">FREE</p>
										{{/iff}}
										{{#if discountTotalValue}}
											<p class="fsb-text-success">You save {{discountTotal}}!</p>
										{{/if}}
									{{/each}}
								</div>
							</div>
							<div class="fsb-row">
								<div class="fsb-col-12 mt-2">
									<button id="checkout" data-fsc-selections-smartdisplay class="fastspring_btn fastspring_btn-success" style="float:right;" data-fsc-action="Checkout">
										Checkout 
									</button>
								</div>
							</div>
						</div>						
						<div class="fsb-col-md-6 fsb-col-12 fsb-order-md-1 fsb-order-12">
							<div class="fsb-col-12 fsb-text-nowrap fsb-text-center fsb-text-md-left">
								<label for="couponcode" class="fsb-promocode">Have a promo code?</label><br />
								<input type="text" id="couponcode" data-fsc-order-promocode class="fsb-form-control" placeholder="Coupon ID" style="display:inline-block; width:200px;">
								<button class="fastspring_btn fastspring_btn-success" onclick="applycoupon();">Apply</button>
							</div>							
						</div>
					</div>
					{{#each groups}}
						{{#iff driverType '==' 'storefront'}}
							{{#each items}}
								{{#iff path '==' 'SystemExtension.eds'}}
									{{#iff selected '==' false}}
										<div class="fsb-row">
											<div class="fsb-col-md-12 fsb-mt-4">
												<div class="fsb-card fsb-mt-2 fsb-mb-3">
													<div class="fsb-card-header" style="background: #28a745; color: #ffffff;">
														{{display}}&nbsp;
													</div>
													<div class="fsb-card-body fsb-pb-0">
														<div class="fsb-row fsb-mb-4">
															<div class="fsb-col-lg-1 fsb-col-md-1 fsb-col-4 fsb-offset-4 fsb-offset-sm-0 fsb-text-center fsb-pr-0">
																{{#if image}}
																	<img src="{{image}}" class="fsb-img-fluid fsb-ximage"  alt="{{display}}" />
																{{/if}}
															</div>
															<div class="fsb-col-lg-6 fsb-col-md-4 fsb-col-sm-8 fsb-col-12 fsb-text-center fsb-text-sm-left">
																<p class="fsb-display">{{display}}</p>
																{{#if description.summary}}
																	{{{description.summary}}}
																{{/if}}
																<div class="fsb-d-md-none fsb-row fsb-mt-4">
																	<div class=" fsb-col-sm-7 fsb-col-12 fsb-text-center fsb-text-sm-left">
																		{{>pricing}}
																		{{>volume-discount}}
																	</div>
																	<div class="fsb-col-sm-5 fsb-col-12 fsb-text-center fsb-text-sm-right">
																		 <button type="button" class="fastspring_btn fastspring_btn-success" data-fsc-item-path-value="{{path}}" data-fsc-item-path="{{path}}" data-fsc-action="Add" data-fsc-item-description-action>Add to Order</button>
																	</div>
																</div>
															</div>
															<div class="fsb-col-lg-3 fsb-col-md-4 fsb-d-none fsb-d-md-block fsb-text-center">
																{{>pricing}}
															</div>
															<div class="fsb-col-lg-2 fsb-col-md-3 fsb-d-none fsb-d-md-block fsb-text-right">
																<button type="button" class="fastspring_btn fastspring_btn-success" data-fsc-item-path-value="{{path}}" data-fsc-action="Add">Add to Order</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									{{/iff}}
								{{/iff}}
							{{/each}}
						{{/iff}}
					{{/each}}
				</div>
			</div>
		</script>

		<!--
			pricing-partial handlebars partial
			This partial controls how line item prices are displayedin the shopping cart.
		-->
		<script id="pricing-partial" type='text/x-handlebars-template'>
			<span class='pricing'>
				{{#if discountTotalValue}}
					<p class="fsb-price fsb-inline-item"><s>{{price}}</s></p>
				{{/if}}
				{{#iff totalValue '>' '0'}}
					<p class="fsb-price fsb-inline-item">{{unitPrice}}</p>
				{{else}}
					<p class="fsb-price fsb-inline-item fsb-text-success"> Free </p>
				{{/iff}}
			</span>
		</script>

		<!--
			pricing-partial handlebars partial
			This partial controls how line item prices are displayedin the shopping cart.
		-->
		<script id="pricing-partial2" type='text/x-handlebars-template'>
			<span class='pricing'>
				{{#if discountTotalValue}}
					<p class="fsb-price fsb-inline-item"><s>{{price}}</s></p>
				{{/if}}
				{{#iff totalValue '>' '0'}}
					<p class="fsb-price fsb-inline-item">{{unitPrice}}</p>
				{{else}}
					<p class="fsb-price fsb-inline-item fsb-text-success"> Free </p>
				{{/iff}}
				{{#if subscription}}
					<div>
						<em style="font-size:75%;">
							{{#iff subscription.intervalUnit '==' 'adhoc'}}
								Renews automatically by the seller
							{{else}}
								Renews every
							{{#iff subscription.intervalLength '>=' '2' }}
								{{subscription.intervalLength}} {{subscription.intervalUnit}}s
							{{/iff}}
							{{#iff subscription.intervalLength '==' '1' }}
								{{subscription.intervalUnit}}
							{{/iff}}.
							<br />Next charge: {{subscription.nextChargeTotal}} on {{subscription.nextChargeDate}}
							{{/iff}}
						</em>
					</div>
				{{/if}}
			</span>
		</script>

		<!--
			quantity-partial handlebars partial
			This partial controls how the quantity fields are displayed on the shopping cart.
		-->
		<script id="quantity-partial" type='text/x-handlebars-template'>
			{{#if selected}}
				{{#iff pricing.quantity '==' 'allow'}}
					{{#iff selected '==' true}}
						<strong>&times</strong>
					{{/iff}}
					<div class="fsb-number">
						<span class="fsb-minus">&minus;</span>
							<input class="fsb-qtyinput" type="text" value="{{quantity}}"  data-fsc-autoapply  data-fsc-item-quantity-value data-fsc-item-quantity data-fsc-item-path-value="{{path}}" data-fsc-item-path="{{path}}" data-fsc-action="Update"/>
						<span class="fsb-plus">&plus;</span>
					</div>
					<p class="fsb-qtyPrice fsb-d-inline-block fsb-d-md-none fsb-ml-2">
						{{#iff totalValue '>' '0'}}
							- {{total}}
						{{else}}
							- FREE
						{{/iff}}
					</p>
				{{/iff}}
				{{#iff pricing.quantity '==' 'lock'}}
					<p class="fsb-multiply fsb-inline-item">&times {{quantity}}</p>
				{{/iff}}
				{{#if subscription}}
					<div>
						<em style="font-size:75%;">
							{{#iff subscription.intervalUnit '==' 'adhoc'}}
								Renews automatically by the seller
							{{else}}
								Renews every
							{{#iff subscription.intervalLength '>=' '2' }}
								{{subscription.intervalLength}} {{subscription.intervalUnit}}s
							{{/iff}}
							{{#iff subscription.intervalLength '==' '1' }}
								{{subscription.intervalUnit}}
							{{/iff}}.
							<br />Next charge: {{subscription.nextChargeTotal}} on {{subscription.nextChargeDate}}
							{{/iff}}
						</em>
					</div>
				{{/if}}
				{{>volume-discount}}
			{{/if}}
		</script>

		<!--
			volume-discount handlebars partial
			This partial controls how volume discounts are displayed in the shopping cart.
		-->
		<script id="volume-discount" type='text/x-handlebars-template'>
			{{#if discountTotalValue}}
				<div class="fsb-text-success">
					You save {{discountTotal}} ({{discountPercent}})
				</div>
			{{/if}}
			{{#if discount.data.tiers}}
				<div style="font-size:75%;">
					<strong>Volume Discounts Available</strong>
					{{#each discount.data.tiers}}
						<div>
							{{quantity}}+ : {{percent}}{{amount}} off
						</div>
					{{/each}}
				</div>
			{{/if}}
		</script>

		<!--
			multichoice handlebars partial
			This partial is used to display multiple choice options or subscription addons.
		-->
		<script id="multichoice" type='text/x-handlebars-template'>
			<div class="fsb-row">
				<div class="fsb-col-md-11 fsb-offset-md-1">
					<div class="fsb-card fsb-mt-2 fsb-mb-3">
						<div class="fsb-card-header" style="background: #28a745; color: #ffffff;">
							{{display}}&nbsp;
						</div>
						<div class="fsb-card-body fsb-pb-0">
							{{#each items}}
								<div class="fsb-row fsb-mb-4">
									<div class="fsb-col-1">
										{{#if selected}}
											<input class="fsb-option-input fsb-checkbox" type="checkbox" name="{{display}}" id="{{path}}" checked data-fsc-action="Remove" data-fsc-item-path-value="{{path}}">
										{{else}}
											<input class="fsb-option-input fsb-checkbox" type="checkbox" name="{{display}}" id="{{path}}" data-fsc-action="Add" data-fsc-item-path-value="{{path}}">
										{{/if}}
									</div>
									<div class="fsb-col-lg-1 fsb-col-md-1 fsb-col-12 fsb-text-center fsb-pr-0 fsb-d-md-none fsb-d-lg-block">
										{{#if image}}
											<img src="{{image}}" class="fsb-img-fluid fsb-ximage"  alt="{{display}}" />
										{{/if}}	
									</div>
									<div class="fsb-col-md-4 fsb-col-12  fsb-text-center fsb-text-md-left">
										<p class="fsb-display">{{display}}</p>
										{{#if description.summary}}
											{{{description.summary}}}
										{{/if}}
									</div>
									<div class="fsb-col-md-4 fsb-col-12 fsb-text-center fsb-mt-3">
										{{>pricing}}
										{{>quantity}}
									</div>
									<div class="fsb-d-none fsb-d-md-block fsb-col-md-3  fsb-col-lg-2 fsb-col-6 fsb-text-left fsb-text-md-right fsb-mt-3">
										{{#if selected}}
											<p class="fsb-qtyPrice">
												{{#iff totalValue '>' '0'}}
													{{total}}
												{{else}}
													FREE
												{{/iff}}
											</p>
										{{else}}
											---
										{{/if}}
									</div>
								</div>
								<hr />
							{{/each}}
						</div>
					</div>
				</div>
			</div>
		</script>

		<!--
			singlechoice handlebars partial
			This partial is used to display single choice options or subscription addons.
		-->
		<script id="singlechoice" type='text/x-handlebars-template'>
			<div class="fsb-row">
				<div class="fsb-col-md-11 fsb-offset-md-1">
					<div class="fsb-card fsb-mt-2 fsb-mb-3">
						<div class="fsb-card-header" style="background: #28a745; color: #ffffff;">
							{{display}}&nbsp;
						</div>
						<div class="fsb-card-body fsb-pb-0">
							{{#each items}}
								<div class="fsb-row fsb-mb-4">
									<div class="fsb-col-1">
										<input class="fsb-option-input fsb-radio" type="radio" {{#if selected}} checked{{/if}} name="{{display}}" id="{{path}}" data-fsc-action="Add" data-fsc-item-path-value="{{path}}" >
									</div>
									<div class="fsb-col-lg-1 fsb-col-md-1 fsb-col-12 fsb-text-center fsb-pr-0 fsb-d-md-none fsb-d-lg-block">
										{{#if image}}
											<img src="{{image}}" class="fsb-img-fluid fsb-ximage"  alt="" />
										{{/if}}
									</div>
									<div class="fsb-col-md-4 fsb-col-12 fsb-text-center fsb-text-md-left">
										<p class="fsb-display">{{display}}</p>
										{{#if description.summary}}
											{{{description.summary}}}
										{{/if}}
									</div>
									<div class="fsb-col-md-4 fsb-col-12 fsb-text-center fsb-mt-3">
										{{>pricing}}
										{{>quantity}}
									</div>
									<div class="fsb-d-none fsb-d-md-block fsb-fsb-col-md-3 fsb-fsb-col-lg-2 fsb-fsb-col-6 fsb-text-left fsb-text-md-right fsb-mt-3">
										{{#if selected}}
											<p class="fsb-qtyPrice">
												{{#iff totalValue '>' '0'}}
													{{total}}
												{{else}}
													FREE
												{{/iff}}
											</p>
										{{else}}
													---
										{{/if}}
									</div>
								</div>
								<hr />
							{{/each}}
						</div>
					</div>
				</div>
			</div>
		</script>

		<!--
			upsell handlebars partial
			This partial controls how upsells are displayed in the shopping cart.
		-->
		<script id="upsell" type='text/x-handlebars-template'>
			<div class="fsb-row">
				<div class="fsb-col-md-11 fsb-offset-md-1">
					<div class="fsb-card fsb-mt-2 fsb-mb-3">
						<div class="fsb-card-header" style="background: #28a745; color: #ffffff;">
							{{display}}&nbsp;
						</div>
						<div class="fsb-card-body fsb-pb-0">
							{{#each items}}
								{{#iff selected '==' false}}
									<div class="fsb-row fsb-mb-4">
										<div class="fsb-col-lg-1 fsb-col-md-1 fsb-col-3 fsb-offset-sm-0 fsb-text-center fsb-pr-0">
											{{#if image}}
												<img src="{{image}}" class="fsb-img-fluid fsb-ximage"  alt="" />
											{{/if}}
										</div>
										<div class="fsb-col-lg-5 fsb-col-md-4 fsb-col-sm-9 fsb-col-12 fsb-text-center fsb-text-sm-left">
											<p class="fsb-display">{{display}}</p>
											{{#if description.summary}}
												{{{description.summary}}}
											{{/if}}
											<div class="fsb-d-md-none fsb-row">
												<div class=" fsb-col-sm-6 fsb-col-12 fsb-text-center fsb-text-sm-left">
													{{>pricing}}
													{{>volume-discount}}
												</div>
												<div class="fsb-col-sm-6 fsb-col-12 fsb-text-center fsb-text-sm-right">
													<button type="button" class="fastspring_btn fastspring_btn-success" data-fsc-item-path-value="{{path}}" data-fsc-action="Add">Upgrade Now</button>
												</div>
											</div>
										</div>
										<div class="fsb-col-lg-3 fsb-col-md-3 fsb-d-none fsb-d-md-block fsb-text-center">
											{{>pricing}}
										</div>
										<div class="fsb-col-lg-3 fsb-col-md-4 fsb-d-none fsb-d-md-block fsb-text-right">
											<button type="button" class="fastspring_btn fastspring_btn-success" data-fsc-item-path-value="{{path}}" data-fsc-action="Add">Upgrade Now</button>
										</div>
									</div>
									<hr />
								{{/iff}}
							{{/each}}
						</div>
					</div>
				</div>
			</div>
		</script>

		<!--
			upsell handlebars partial
			This partial controls how cross sells are displayed in the shopping cart.
		-->
		<script id="xsell" type='text/x-handlebars-template'>
			<div class="fsb-row">
				<div class="fsb-col-md-11 fsb-offset-md-1">
					<div class="fsb-card fsb-mt-2 fsb-mb-3">
						<div class="fsb-card-header" style="background: #28a745; color: #ffffff;">
							{{display}}&nbsp;
						</div>
						<div class="fsb-card-body fsb-pb-0">
							{{#each items}}
								{{#iff selected '==' false}}
									<div class="fsb-row fsb-mb-4">
										<div class="fsb-col-lg-1 fsb-col-md-1 fsb-col-3 fsb-offset-sm-0 fsb-text-center fsb-pr-0">
											{{#if image}}
												<img src="{{image}}" class="fsb-img-fluid fsb-ximage"  alt="" />
											{{/if}}
										</div>
										<div class="fsb-col-lg-5 fsb-col-md-4 fsb-col-sm-9 fsb-col-12 fsb-text-center fsb-text-sm-left">
											<p class="fsb-display">{{display}}</p>
											{{#if description.summary}}
												{{{description.summary}}}
											{{/if}}
											<div class="fsb-d-md-none fsb-row">
												<div class=" fsb-col-sm-6 fsb-col-12 fsb-text-center fsb-text-sm-left">
													{{>pricing}}
													{{>volume-discount}}
												</div>
												<div class="fsb-col-sm-6 fsb-col-12 fsb-text-center fsb-text-sm-right">
													<button type="button" class="fastspring_btn fastspring_btn-success" data-fsc-item-path-value="{{path}}" data-fsc-action="Add">Add to Order</button>
												</div>
											</div>
										</div>
										<div class="fsb-col-lg-3 fsb-col-md-3 fsb-d-none fsb-d-md-block fsb-text-center">
											{{>pricing}}
										</div>
										<div class="fsb-col-lg-3 fsb-col-md-4 fsb-d-none fsb-d-md-block fsb-text-right">
											<button type="button" class="fastspring_btn fastspring_btn-success" data-fsc-item-path-value="{{path}}" data-fsc-action="Add">Add to Order</button>
										</div>
									</div>
									<hr />
								{{/iff}}
							{{/each}}
						</div>
					</div>
				</div>
			</div>
		</script>
        <script src="<?php echo base_url('assets/frondend/js/cart.js') ?>"></script>