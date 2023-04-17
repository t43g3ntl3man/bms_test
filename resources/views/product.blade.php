<!doctype html>
<html lang="en"> @include('layout/head')

<body>
	<header role="banner" class="site-header">
		<div id="site-header__top" class="site-header__top">
			<div class="site-header__top-callus">
				<!-- <span class="opening-hour-status-icon">
                  <span class="icon icon-check-circle"></span>
                  </span>
                  <span class="opening-hour-status-text">WE ARE HERE FOR YOU</span> <span class="opening-hours-sign">-</span> <span class="time-container">16:26 CET</span> --></div>
			<div class="site-header__top-center">
				<div class="site-header__top-contacts"> <a href="tel:+1231212"><span class="icon-phone"></span>12 123 123 3</a> <a href="mailto:info@bms.com"><span class="icon-Path-10"></span>info@bmsautos.com</a> </div>
			</div>
		</div> @include('layout/site-nav')
	</header>
	@if(isset($flag) && $flag === 1)
    	<div class="alert alert-success">add record successful</div>
	@endif
	<main class="site-main" role="main">
		<div id="snippet--hierarchy">
			<section class="site-breadcrumbs" role="region">
				<div class="container">
					<ul class="site-breadcrumbs__list">
						<li class="site-breadcrumbs__list-item"> <a href="../../../../en.html"><span class="icon-garage"></span></a> </li>
						<!-- <li class="site-breadcrumbs__list-item">                    <a href="../../../article-list/list/0/0/tree-shop_267.html">Spare parts from category Universal parts</a> -->
						<li class="site-breadcrumbs__list-item"> <a href="#">Spare parts from category Universal parts</a></li>
						<!-- <li class="site-breadcrumbs__list-item site-breadcrumbs__list-item--mobile">                    <a href="../../../content/detail/217/timing-chain-kits-in-kolbenschmidt-range.html">Timing chain kits in Kolbenschmidt range</a> -->
						<li class="site-breadcrumbs__list-item site-breadcrumbs__list-item--mobile"> <a href="#">Timing chain kits in Kolbenschmidt range</a></li>
						<li class="site-breadcrumbs__list-item site-breadcrumbs__list-item--active">VV0034 - Rocker Arm, engine timing ET ENGINETEAM</li>
					</ul>
				</div>
			</section>
		</div>
		<div class="flashmessage__container">
			<div id="snippet--flashMessages"></div>
		</div>
		</section>
		<section class="product-detail">
			<section id="description" class="product-detail__top" role="region">
				<div class="container">
					<div class="product-detail__top-container">
						<div class="product-detail__imageinfo">
							<div class="product-detail__image">
								<div class="product-detail__image-main">
									<div class="xzoom-container"> <img class="xzoom-desktop xzoom-main-image" id="xzoom-magnific-desktop" src="http://localhost:8001/storage/{{$return_data['product']->image}}" xoriginal="http://localhost:8001/storage/{{$return_data['product']->image}}" title="Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481" alt="Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481">
										<div class="xzoom-thumbs">
											<a href="http://localhost:8001/storage/{{$return_data['product']->image}}" title="Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481"> <img class="xzoom-gallery-desktop" src="/images/nophoto.jpg" xpreview="/images/nophoto.jpg" xtitle="Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481"> </a>
										</div>
									</div>
								</div>
							</div>
							<div class="product-detail__info">
								<div class="product-detail__info-logo"> <img src="/{{$return_data['product']->brand->image}}" alt="{{$return_data['product']->brand->name}}" title="{{$return_data['product']->brand->name}}" class="brand-logo " />&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Code:&nbsp;{{$return_data['product']->code}} </div>
								<h1>{{$return_data['product']->title}} - {{$return_data['product']->code}} {{$return_data['product']->brand->name}} </h1>
								<table class="product-detail__data">
									<tbody>
										<tr>
											<td>Brand:</td>
											<td>{{$return_data['product']->brand->name}}</td>
										</tr>
										<tr>
											<td>Title:</td>
											<td>{{$return_data['product']->title}}</td>
										</tr>
										<tr>
											<td>Car:</td>
											<td>{{$return_data['car_name']}}</td>
										</tr>
										<tr>
											<td>EAN:</td>
											<td> {{$return_data['product']->EAN}} </td>
										</tr>
										<tr>
											<td>Weight&nbsp;<span data-tippy-content="Weight is indicative only. The weight is taken from the data provider&apos;s database."><i class="icon-circle-question-regular"></i></span>&nbsp;:</td>
											<td>{{$return_data['product']->weight}}&nbsp;kg</td>
										</tr>
									</tbody>
								</table>
								<h4>Criteria</h4>
								<table class="product-detail__data">
									<tbody>
                              @for ($i = 0; $i < sizeof($return_data[ 'criteria_name']); $i++) 
                              <tr>
											<td>{{$return_data['criteria_name'][$i]}}</td>
											<td>{{$return_data['criteria_value'][$i]}}</td>
										</tr>
                              @endfor
                           </tbody>
								</table>
							</div>
						</div>
						<div class="product-detail__price">
							<div class="product-detail__price-content">
								<div class="product-detail__price-item">
									<div class="product-detail__price-badges"> <span class="badge badge-success">We recommend!</span>&nbsp; </div> <span class="product-detail__price-heading">Netto price</span> <span class="product-detail__price-retail">
                           <del>${{$return_data['product']->price}}
                           </del></span> <span class="product-detail__price-vat"><del>(${{$return_data['product']->price}}
                           without VAT 0%)</del></span> </div>
								<div class="product-detail__price-item"> <span class="product-detail__price-heading">Your price
                           -40%
                           </span> <span class="product-detail__price-main">${{$return_data['product_price_after_vat']}}
                           </span> <span class="product-detail__price-vat">(${{$return_data['product_price_after_vat']}}
                           <span class="price-vat">without VAT 0%)</span></span>
								</div>
								<div class="product-detail__price-item">
									<div id="snippet-articleStockFull-">
										<table class="product-detail__buy-stock" style="border-color: black; border-style: solid; border-width: 10px">
											<tr>
												<th> <span class="secondary" data-tippy-content="In Stock">
                                       <i class="icon-check-circle"></i></span> </th>
												<td class="d-none d-sm-table-cell">Stock:</td>
												<td> &gt; 25 pcs </td>
												@if(Session::get('cart-added'))
												<p>cart-added</p>
												@php session(['cart-added' => false]); @endphp
												@endif
											</tr>
										</table>
									</div>
									<div class="product-detail__buy">
										<div class="product-item__buy">
											
											<form action="/add-to-cart" method="post" class="product-detail__buy-form ajax" id="">
												{{ csrf_field() }}
												<div class="product-detail__buy-input">
													<input type="number" name="articleQuantity" placeholder="quantity:" min="1" step="1" pattern="\d*" id="frm-articleBuy-addToCart-articleQuantity" required data-nette-rules='[{"op":":filled","msg":"Quantity is required."},{"op":":integer","msg":"Please enter a valid integer."},{"op":":integer","msg":"Quantity must be a whole number."}]' value="1"> 
												</div>
												<input type="hidden" name="articleId" value="{{$return_data['product']->id}}">
												<input type="hidden" name="increaseQuantity" value="1">
												<button onclick="cartAdded()" type="submit" name="buy_button" class="pro duct-detail__buy-button buy-button btn btn-primary btn-addtocart hasCaptionAndNoIcon"><span class="caption">Add to cart</span></button>
												<!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
											</form>
										</div>
										<script>
										LiveFormOptions = {
											messageParentClass: 'product-item__buy'
										};
										</script>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>
			<nav class="product-nav" role="navigation">
				<div class="container">
					<ul class="product-nav__container">
						<li class="product-nav__item product-nav__item--active" id="articleDetailNavbarBase"> <a href="#description" title="General information">General information</a> </li>
						<li class="product-nav__item"> <a href="#reference">Reference Numbers</a> </li>
						<li class="product-nav__item"> <a href="#categories">Categories</a> </li>
						<li class="product-nav__item"> <a href="#usedin">Used&nbsp;in</a> </li>
						<li class="product-nav__item"> <a href="#alternatives">
                        Alternatives
                        </a>
							<div class="product-nav__item-stock product-nav__item-stock--outstock" data-tippy-content="not available alternatives">{{sizeof($return_data['alternatives'])}}</div>
						</li>
					</ul>
				</div>
			</nav>
			<section class="product-detail__content">
				<div class="container">
					<div class="product-detail__content-container">
						<div class="product-detail__content-left">
							<div class="product-detail__content-text">
								<p>Unfortunately, there is no additional description available for this product.</p>
							</div>
							<div id="categories" class="product-detail__box">
								<div class="product-detail__box-header">
									<h2>Categories</h2> </div>
								<div class="product-detail__box-body"> <a href="#">{{$return_data['product']->category->name}}</a> <span class="text-primary">></span> <a href="#">{{$return_data['product']->sub_category->name}}</a> </div>
							</div>
						</div>
						<div class="product-detail__content-right"  role="region">
							<section class="product-detail__box" role="region" id="usedin">
								<div class="product-detail__box-header">
									<h2>Used&nbsp;in</h2> </div>
								<div class="product-detail__box-body product-detail__box-body--nopadding">
									<div id="snippet-articleDetailConnection-">
										<div class="usedin__buttons">
											<button class="usedin__buttons-item btn" data-number="1"> Vehicles </button>
											<button class="usedin__buttons-item btn" data-number="2"> Engines </button>
										</div>
                              <div class="usedin__content">
                                 <ul class="usedin__main" data-number="1">
                                    @for ($i = 0; $i < sizeof($return_data['used_in']['vehicles']); $i++) 
                                    <li class="usedin__main-item"> 
                                       <a class="usedin__main-link togglelink">{{$return_data['used_in']['vehicles'][$i]['car_title']}}</a>
                                       <ul class="usedin__submenu">
                                          <li class="usedin__submenu-item"> 
                                             <a class="usedin__submenu-link togglelink">{{$return_data['used_in']['vehicles'][$i]['vehs_brands']['veh_brand_name']}}</a>
                                             <ul class="usedin__model">
                                                @for ($j = 0; $j < sizeof($return_data['used_in']['vehicles'][$i]['vehs_brands']['vehs']); $j++)
                                                <li class="usedin__model-item">
                                                   <a href="../../../article-list/list/car/16933.html"> <a href="#">
                                                      {{$return_data['used_in']['vehicles'][$i]['vehs_brands']['vehs'][$j]['name']}}
                                                   </a>
                                                   <div class="usedin__model-properties"> 
                                                      <span>{{$return_data['used_in']['vehicles'][$i]['vehs_brands']['vehs'][$j]['kw_hp']}}</span>
                                                      <span>{{$return_data['used_in']['vehicles'][$i]['vehs_brands']['vehs'][$j]['ccm']}}</span>
                                                      <span>{{$return_data['used_in']['vehicles'][$i]['vehs_brands']['vehs'][$j]['cylinders']}}</span>
                                                      <span>{{$return_data['used_in']['vehicles'][$i]['vehs_brands']['vehs'][$j]['valves']}}</span>
                                                      <span>{{$return_data['used_in']['vehicles'][$i]['vehs_brands']['vehs'][$j]['gas']}}</span>
                                                   </div>
                                                </li>
                                                @endfor
                                             </ul>
                                          </li>
                                       </ul>
                                    </li>
                                    @endfor
                                 </ul>
                                 <ul class="usedin__main" data-number="2">
                                    @for ($i = 0; $i < sizeof($return_data['used_in']['engines']); $i++)
                                    <li class="usedin__main-item"> 
                                       <a class="usedin__main-link togglelink">{{$return_data['used_in']['engines'][$i]['car']}}</a>
                                       <ul class="usedin__model">
                                          @for ($j = 0; $j < sizeof($return_data['used_in']['engines'][$i]['engines']); $j++)
                                          <li class="usedin__model-item-motor">
                                             <a href="#" class="usedin__model-link">{{$return_data['used_in']['engines'][$i]['engines'][$j]['name']}}</a>
                                             <div class="usedin__model-properties"> 
                                                <span>{{$return_data['used_in']['engines'][$i]['engines'][$j]['kw_hp']}}</span>
                                                <span>{{$return_data['used_in']['engines'][$i]['engines'][$j]['ccm']}}</span>
                                                <span>{{$return_data['used_in']['engines'][$i]['engines'][$j]['cylinders']}}</span>
                                                <span>{{$return_data['used_in']['engines'][$i]['engines'][$j]['valves']}}</span>
                                             </div>
                                          </li>
                                          @endfor
                                       </ul>
                                    </li>
                                    @endfor
                                 </ul>
                              </div>
									</div>
								</div>
							</section>
							<section class="product-detail__box" role="region" id="reference">
								<div class="product-detail__box-header">
									<h2>Reference Numbers</h2> </div>
								<div class="product-detail__box-body product-detail__box-body--list">
									<ul class="product-detail__box-list product-detail__box-list--columns">
                              @for ($i = 0; $i < sizeof($return_data['references']); $i++)
										<li class="product-detail__box-item product-detail__box-item--columns">
											<!-- <a href="../../../article-list/oe-list/2453142880.html"> -->
											<a href="#"> 
                                    <span class="badge-table badge-gold">{{$return_data['references'][$i]['ref_of']}} # </span>
                                    <span class="nobreak">{{$return_data['references'][$i]['ref']}}</span>
                                 </a>
										</li>
                              @endfor
									</ul>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section class="page-detail__alternatives"  role="region" id="alternatives">
				<div class="container">

               @if(sizeof($return_data['alternatives']) > 0)
					<h2>Alternatives</h2>
					<div id="snippet-articleAlternatives-">
						<section class="product-line__item">
							<div class="product-line__item-left">
								<div class="product-line__heading"> <img src="/{{$return_data['alternatives'][0]->brand->image}}" alt="{{$return_data['alternatives'][0]->brand->name}}" title="{{$return_data['alternatives'][0]->brand->name}}" class="brand-logo " />
									<h3>
                              <a href="/product/{{$return_data['alternatives'][0]['id']}}">{{$return_data['alternatives'][0]['code']}} {{$return_data['alternatives'][0]->brand['name']}} {{$return_data['alternatives'][0]['title']}}</a>
                           </h3> 
                        </div>
								<div class="product-line__content">
									<div class="product-line__image">
										<a href="#"> <img src="http://localhost:8001/storage/{{$return_data['alternatives'][0]['image']}}" title="Finger Follower, engine timing - 50006481 KOLBENSCHMIDT - MD352127" alt="50006481, Finger Follower, engine timing, Rocker Arm, KOLBENSCHMIDT, MD352127" onerror="this.onerror=null; this.src='../../../../images/nophoto.jpg'" loading="lazy"> </a>
									</div>
									<div class="product-line__allproperties">
										<div class="product-line__basic">
											<h4>General information</h4>
											<table class="product-detail__data">
												<tbody>
													<tr>
														<td>Code:</td>
														<td>{{$return_data['alternatives'][0]['code']}}</td>
													</tr>
													<tr>
														<td>Brand:</td>
														<td>{{$return_data['alternatives'][0]->brand['name']}}</td>
													</tr>
													<tr>
														<td>Title:</td>
														<td>{{$return_data['alternatives'][0]['title']}}</td>
													</tr>
													<tr>
														<td>Car:</td>
														<td>{{$return_data['alternatives'][0]['car_name']}}</td>
													</tr>
													<tr>
														<td>Weight&nbsp;<span data-tippy-content="Weight is indicative only. The weight is taken from the data provider&apos;s database."><i class="icon-circle-question-regular"></i></span>&nbsp;:</td>
														<td>{{$return_data['alternatives'][0]['weight']}}&nbsp;kg</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="product-line__properties-outer">
											<div class="product-line__properties product-line__properties--full">
												<h4>Criteria</h4>
												<table class="product-detail__data">
													<tbody>
														<tr>
															<td>{{$return_data['alternatives'][0]['criteria_names'][0]}}</td>
															<td>{{$return_data['alternatives'][0]['criteria_value'][0]}}</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-line__item-right">
								<div class="product-detail__price-item"> <span class="product-detail__price-heading">Netto price:</span> <span class="product-detail__price-retail">
                              <del>${{$return_data['alternatives'][0]['price']}}
                              </del></span> <span class="product-detail__price-vat"><del>(${{$return_data['alternatives'][0]['price']}} without VAT 0%)</del></span> </div>
								<div class="product-detail__price-item"> <span class="product-detail__price-heading">Your price:
                              -40%
                              </span> <span class="product-detail__price-main">${{$return_data['alternatives'][0]['after_vat']}}
                              </span> <span class="product-detail__price-vat">(${{$return_data['alternatives'][0]['after_vat']}} with VAT 40%)</span> </div>
								<div class="product-detail__price-item">
									<div id="snippet-articleAlternatives-articleStockFull-35639-">
										<table class="product-detail__buy-stock" style="border-color: black; border-style: solid; border-width: 10px">
											<tr>
												<th>
													<a href="#sendStockEmailForm" data-description="KOLBENSCHMIDT 50006481" class="send-stock-popup-link open-popup no-underline"> <span class="red" data-tippy-content="Out of Stock">
                                          		<i class="icon-circle-xmark"></i></span> </a>
												</th>
												<td class="d-none d-sm-table-cell">Stock:</td>
												<td> 0 pcs </td>
											</tr>
											<tr>
												<th>
													<a href="#sendStockEmailForm" data-description="KOLBENSCHMIDT 50006481" class="send-stock-popup-link open-popup no-underline"> <span class="red" data-tippy-content="Out of Stock">
                                          <i class="icon-circle-xmark"></i></span> </a>
												</th>
												<td class="d-none d-sm-table-cell"> External stock: </td>
												<td> 0 pcs </td>
											</tr>
										</table>
									</div>
									<div class="product-detail__buy">
										<div class="product-item__buy">
											<form action="/add-to-cart" method="post" class="product-detail__buy-form ajax" id="frm-articleAlternatives-articleBuy-35639-addToCart">
												{{ csrf_field() }}
												<div class="product-detail__buy-input">
													<input type="number" name="articleQuantity" placeholder="quantity:" min="1" step="1" pattern="\d*" id="frm-articleAlternatives-articleBuy-35639-addToCart-articleQuantity" required data-nette-rules='[{"op":":filled","msg":"Quantity is required."},{"op":":integer","msg":"Please enter a valid integer."},{"op":":integer","msg":"Quantity must be a whole number."}]' value="1"> 
												</div>
												<input type="hidden" name="articleId" value="{{$return_data['alternatives'][0]['id']}}">
												<input type="hidden" name="increaseQuantity" value="1">
												<button onclick="cartAdded()"  type="submit" name="buy_button" class="product-detail__buy-button buy-button btn btn-primary btn-addtocart hasCaptionAndNoIcon"><span class="caption">Add to cart</span></button>
												<!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
											</form>
										</div>
										<script>
										LiveFormOptions = {
											messageParentClass: 'product-item__buy'
										};
										</script>
									</div>
								</div>
							</div>
						</section>
					</div>
               @endif
				</div>
			</section>
		</section>
		<div class="popup mfp-hide" id="changeCountryModal" aria-hidden="true">
			<h3 class="popup__heading" id="changeCountryModalLabel">Choose country for delivery</h3>
			<div id="snippet--changeCountryModal">
				<form action="https://www.kmotorshop.com/en/article-detail/view/61596" method="post" id="frm-changeCountry">
					<div class="site-form__section-content">
						<div class="site-form__line site-form__line--pack">
							<label class="col-form-label col-form-label--select" for="frm-changeCountry-countryId">Country:</label>
							<select name="countryId" class="js-select change-country-select" id="frm-changeCountry-countryId" disabled>
								<option value="">Loading...</option>
							</select>
						</div>
						<div class="site-form__line site-form__line--pack">
							<input type="submit" name="save" class="btn btn-primary w100" value="Change"> </div>
					</div>
					<input type="hidden" name="_do" value="changeCountry-submit">
					<!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
				</form>
			</div>
		</div>
	</main>
	<footer class="site-footer" role="contentinfo">
		<section class="site-footer__top">
			<div class="site-footer__top-container container">
				<div class="site-footer__column">
					<a class="site-footer__logo" href="en.html">
						<!-- <span class="icon-logo"></span>
                        <span class="logotyp">KMOTORSHOP</span> --><span><img src="../../../../images/logo_bms.png">
                  <a href="en.html"></a></span> </a>
				</div>
				<div class="site-footer__column">
					<h3 class="site-footer__main-heading">Company</h3>
					<ul class="site-footer__main-list">
						<li><a href="../../../../en.html">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Certificates</a></li>
						<li><a href="#">Cooperation</a></li>
						<li><a href="#">Impressum</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
					<!-- <a class="site-footer__top-link" href="tel:+123123123">
                     <span class="icon icon-phone"></span>123123 123
                     </a> --></div>
				<div class="site-footer__column">
					<h3 class="site-footer__main-heading">Information</h3>
					<ul class="site-footer__main-list">
						<li><a href="#">Shipping and payment</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy</a></li>
					</ul>
					<!-- <a class="site-footer__top-link" href="mailto:info@bmsautomobile.com">
                     <span class="icon icon-Path-10"></span>INFO@BMSAUTOMOBILE.COM
                     </a> --></div>
				<div class="site-footer__column">
					<a class="site-footer__top-link" href="tel:+123123123"> <span class="icon icon-phone"></span>123123 123 </a>
					<a class="site-footer__top-link" href="mailto:info@bmsautomobile.com"> <span class="icon icon-Path-10"></span>INFO@BMSAUTOMOBILE.COM </a>
					<a class="site-footer__top-link" href="en/content/contact.html"> <span class="icon icon-Path-64"></span></span>ÚSTECKÁ 408 </a>
				</div>
			</div>
		</section>
		<!-- <section class="site-footer__main">
            <div class="site-footer__main-container container">
                <div class="site-footer__column">
                    <h3 class="site-footer__main-heading">Company</h3>
                    <ul class="site-footer__main-list">
                        <li><a href="en/content/detail/15.html">About Us</a></li>
                        <li><a href="en/content/detail/12.html">Certificates</a></li>
                        <li><a href="en/content/detail/19.html">Cooperation</a></li>
                        <li><a href="en/content/detail/16.html">Impressum</a></li>
                        <li><a href="en/content/contact.html">Contacts</a></li>
                    </ul>
                </div>
                <div class="site-footer__column">
                    <h3 class="site-footer__main-heading">Information</h3>
                    <ul class="site-footer__main-list">
                        <li><a href="en/content/delivery.html">Shipping and payment</a></li>
                        <li><a href="en/content/detail/14.html">FAQ</a></li>
                        <li><a href="en/content/terms-and-conditions.html">Terms and conditions</a></li>
                        <li><a href="en/content/privacy.html">Privacy</a></li>
            
                    </ul>
                </div>
                <div class="site-footer__column">
                    <h3 class="site-footer__main-heading">Solution</h3>
                    <ul class="site-footer__main-list">
                        <li><a href="en/content/detail/17.html">KMS Data sharing</a></li>
                        <li><a href="en/content/detail/36.html">Complaints</a></li>
                        <li><a href="en/content/detail/35.html">Returns</a></li>
                    </ul>
                </div>
                <div class="site-footer__column">
                    <h3 class="site-footer__main-heading">Odkazy</h3>
                    <ul class="site-footer__main-list">
                        <li><a href="en/content/list/2.html">News</a></li>
                        <li><a href="en/content/detail/18.html">Manufacturers’ catalogues</a></li>
                    </ul>
                </div>
            </div>
            </section> -->
		<section class="site-footer__copy">
			<div class="site-footer__copy-container container">
				<div class="site-footer__copy-left"> <a href="http://www.facebook.com/pages/KS-Motor-Servis/219553348071297" target="_blank"><span class="icon icon-Group-10"></span></a></li> All Rights Reserved © Copyrights BMS Automobile 2022 </div>
				<!-- <div class="site-footer__copy-right">
                  <img src="images/tca_tecdoc-inside_logo_rgb_1200dpi.png" alt="TecDoc Inside" title="TecDoc"></a>
                  </div> --></div>
		</section>
	</footer>
	<!-- <footer class="site-footer" role="contentinfo">
         <section class="site-footer__top">
             <div class="site-footer__top-container container">
                 <div class="site-footer__column">
                     <a class="site-footer__logo" href="../../../../en.html">
                         <span class="icon-logo"></span>
                         <span class="logotyp">KMOTORSHOP</span>
                     </a>
                 </div>
                 <div class="site-footer__column">
                     <a class="site-footer__top-link" href="tel:+420475209033">
                         <span class="icon icon-phone"></span>00420 475 209 033
                     </a>
                 </div>
                 <div class="site-footer__column">
                     <a class="site-footer__top-link" href="mailto:info@kmotorshop.com">
                         <span class="icon icon-Path-10"></span>INFO@KMOTORSHOP.COM
                     </a>
                 </div>
                 <div class="site-footer__column">
                     <a class="site-footer__top-link" href="../../../content/contact.html">
                         <span class="icon icon-Path-64"></span></span>ÚSTECKÁ 408, CHLUMEC 403 39
                     </a>
                 </div>
             </div>
         </section>
         <section class="site-footer__main">
             <div class="site-footer__main-container container">
                 <div class="site-footer__column">
                     <h3 class="site-footer__main-heading">Company</h3>
                     <ul class="site-footer__main-list">
                         <li><a href="../../../content/detail/15.html">About Us</a></li>
                         <li><a href="../../../content/detail/12.html">Certificates</a></li>
                         <li><a href="../../../content/detail/19.html">Cooperation</a></li>
                         <li><a href="../../../content/detail/16.html">Impressum</a></li>
                         <li><a href="../../../content/contact.html">Contacts</a></li>
                     </ul>
                 </div>
                 <div class="site-footer__column">
                     <h3 class="site-footer__main-heading">Information</h3>
                     <ul class="site-footer__main-list">
                         <li><a href="../../../content/delivery.html">Shipping and payment</a></li>
                         <li><a href="../../../content/detail/14.html">FAQ</a></li>
                         <li><a href="../../../content/terms-and-conditions.html">Terms and conditions</a></li>
                         <li><a href="../../../content/privacy.html">Privacy</a></li>
         
                     </ul>
                 </div>
                 <div class="site-footer__column">
                     <h3 class="site-footer__main-heading">Solution</h3>
                     <ul class="site-footer__main-list">
                         <li><a href="../../../content/detail/17.html">KMS Data sharing</a></li>
                         <li><a href="../../../content/detail/36.html">Complaints</a></li>
                         <li><a href="../../../content/detail/35.html">Returns</a></li>
                     </ul>
                 </div>
                 <div class="site-footer__column">
                     <h3 class="site-footer__main-heading">Odkazy</h3>
                     <ul class="site-footer__main-list">
                         <li><a href="../../../content/list/2.html">News</a></li>
                         <li><a href="../../../content/detail/18.html">Manufacturers’ catalogues</a></li>
                     </ul>
                 </div>
             </div>
         </section>
         <section class="site-footer__copy">
             <div class="site-footer__copy-container container">
                 <div class="site-footer__copy-left">
                 <a href="http://www.facebook.com/pages/KS-Motor-Servis/219553348071297" target="_blank"><span class="icon icon-Group-10"></span></a></li>
                 © 2022 K MOTORSHOP s.r.o.
                 </div>
                 <div class="site-footer__copy-right">
                     <img src="../../../../images/tca_tecdoc-inside_logo_rgb_1200dpi.png" alt="TecDoc Inside" title="TecDoc"></a>
                 </div>
             </div>
         </section>
         </footer> -->
	<div class="ajax-loading">
		<div class="loader-container">
			<div class="cssload-thecube">
				<div class="cssload-cube cssload-c1"></div>
				<div class="cssload-cube cssload-c2"></div>
				<div class="cssload-cube cssload-c4"></div>
				<div class="cssload-cube cssload-c3"></div>
			</div>
		</div>
	</div>
	<style>
	.custom-file-label::after {
		content: "Browse" !important;
	}
	</style>
	<div id="sendStockEmailForm" class="mfp-hide popup" tabindex="-1" role="dialog" aria-labelledby="emailStockStatusLabel" aria-hidden="true">
		<form action="https://www.kmotorshop.com/en/article-detail/view/61596" method="post" id="frm-stockStatusMail-sendEmailForm">
			<h2 id="emailStockStatusLabel">Ask for item availability:</h2>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionArticle">Item&nbsp;<span class="text-danger">*</span></label>
				<input type="text" name="questionArticle" class="form-control" readonly id="frm-stockStatusMail-sendEmailForm-questionArticle" required data-nette-rules='[{"op":":filled","msg":"This field is required."}]'> </div>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionName">Name&nbsp;<span class="text-danger">*</span></label>
				<input type="text" name="questionName" class="form-control" autocomplete="name" id="frm-stockStatusMail-sendEmailForm-questionName" required data-nette-rules='[{"op":":filled","msg":"Enter your name."}]'> </div>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionEmail">E-mail&nbsp;<span class="text-danger">*</span></label>
				<input type="email" name="questionEmail" class="form-control" autocomplete="email" id="frm-stockStatusMail-sendEmailForm-questionEmail" required data-nette-rules='[{"op":":filled","msg":"Please enter your e-mail address."},{"op":":email","msg":"Please enter a valid e-mail address.."}]'> </div>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionPhone">Phone</label>
				<input type="text" name="questionPhone" autocomplete="phone" class="form-control" id="frm-stockStatusMail-sendEmailForm-questionPhone"> </div>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-email">Email (leave empty)</label>
				<input type="text" name="email" autocomplete="no" class="form-control frm-text-hp-important form-control" id="frm-stockStatusMail-sendEmailForm-email"> </div>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-phone">Phone (leave empty)</label>
				<input type="text" name="phone" autocomplete="no" class="form-control frm-text-hp-important form-control" id="frm-stockStatusMail-sendEmailForm-phone"> </div>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-www">WWW (leave empty)</label>
				<input type="text" name="www" autocomplete="no" class="form-control frm-text-hp-important form-control" id="frm-stockStatusMail-sendEmailForm-www"> </div>
			<div class="site-form__line site-form__line--pack">
				<label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionText">Message&nbsp;<span class="text-danger">*</span></label>
				<textarea name="questionText" class="form-control" id="frm-stockStatusMail-sendEmailForm-questionText" required data-nette-rules='[{"op":":filled","msg":"Fill in the Message!"}]'>What is the scheduled delivery date?</textarea>
			</div>
			<div class="g-recaptcha" type="text" name="recaptcha" id="frm-stockStatusMail-sendEmailForm-recaptcha" required data-nette-rules='[{"op":":filled","msg":"Anti-spam verification failed. Please try again."}]' data-sitekey="6Ld6HkMhAAAAAIvTxVx4S7LRZqyLYCHRmdmNbzkq"></div>
			<br>
			<input type="submit" name="send" class="btn btn-primary ajax" value="Send">
			<input type="hidden" name="formArticleId" value="1671463644">
			<input type="hidden" name="_do" value="stockStatusMail-sendEmailForm-submit"> </form>
	</div>
	<script src="../../../../scripts/js-cookie/src/js.cookie.js"></script>
	<script src="../../../../scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<script src="../../../../scripts/nette-live-form-validation/live-form-validation.js"></script>
	<script src="../../../../scripts/nette.ajax.js/nette.ajax.js"></script>
	<script src="../../../../scripts/nette.ajax.js/extensions/fidRemove.ajax.js"></script>
	<script src="../../../../scripts/nette.ajax.js/extensions/confirm.ajax.js"></script>
	<script src="../../../../scripts/slick-carousel/slick/slick.min.js"></script>
	<script src="../../../../scripts/tippy/popper.js"></script>
	<script src="../../../../scripts/tippy/tippy.umd.js"></script>
	<script src="../../../../scripts/xzoom/src/xzoom.js"></script>
	<script src="../../../../scripts/nette_live_form_init.js"></script>
	<script src="../../../../scripts/openingHours.js"></script>
	<script src="../../../../scripts/reInit.ajax.js"></script>
	<script src="../../../../scripts/scrollTo.ajax.js"></script>
	<script src="../../../../scripts/spinner.ajax.js"></script>
	<script src="../../../../scripts/main841a.js?_v=e39fd6d4a22e72cd6c600a071d9aecec"></script>
	<script>
	function initMailStockScript() {
		$('.send-stock-popup-link').on("click", function() {
			if($(this).data('description')) {
				$('input[name="questionArticle"]').val($(this).data('description'));
				$('input[name="questionArticle"]').parent().addClass('js-focused');
			}
		});
	}
	initMailStockScript();
	$.nette.ext({
		start: function() {
			$('#sendStockEmailForm').magnificPopup('close');
		},
		complete: function() {
			initMailStockScript();
		}
	});
	</script>
	<script type="text/javascript">
	if(!$("#breadcrumb-desktop").length) {
		$("#search-article-desktop-input-container").addClass("border-bottom");
	}
	</script>
	<div id="snippet--searchPageScripts"></div>
	<script type="text/javascript">
	
	function initBuyButtons() {
		var buyButton = $(".buy-button");
		buyButton.off('click');
		buyButton.on("click", function(e) {
			e.preventDefault();
			buy($(this).closest("form"), "/en/cart/buy-info");
		});
		var buyFormInput = $('.buy-form-container form input, .recalc-form-container form input');
		buyFormInput.off("keydown");
		buyFormInput.on("keydown", function(e) {
			if(e.keyCode === 10 || e.keyCode === 13) {
				e.preventDefault();
				buy($(this).closest("form"), "/en/cart/buy-info");
			}
		});
	}
	var gaEnabled = 0;
	var gtmEnabled = 1;
	var serverDateInit = new Date("2022-12-19T16:27:24+01:00");
	var serverTimeStringInit = "16:27 CET";
	var serverTimeZone = "Europe/Prague";
	var serverTimeZoneAbrev = "CET";
	var openingHoursFrom = 8;
	var openingHoursTo = 17;
	var openingHoursTextOpen = "WE ARE HERE FOR YOU";
	var openingHoursTextClosed = "OUT OF OFFICE";
	var statusReloadInHour = new Date().getUTCHours();
	openingHoursReload();
	var userLoggedIn = false;
	registerReminder();
	$('.open-changecountry').on('click', function() {
		$.nette.ajax({
			type: 'GET',
			off: ['spinner'],
			url: "/en/article-detail/view/61596?do=changeCountryForm"
		});
	});
	initEventsOnce();
	initEventsWithReload();
	</script>
	<script type="application/javascript">
	$.nette.ext({
		start: function() {
			$('.stock-tooltip').attr('data-tippy-showoncreate', false);
		}
	});
	</script>
	<script type="application/ld+json"> { "@context": "http://schema.org/", "@type": "Product", "productID": "{{$return_data['product']->id}}", "url": "https://www.kmotorshop.com/en/article-detail/view/{{$return_data['product']->id}}?currency=CZK&country=PK", "name": "VV0034 ET ENGINETEAM, Rocker Arm, engine timing", "description": "Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481", "brand": { "@type": "Brand", "name": "ET ENGINETEAM" }, "mpn": "VV0034", "sku": "VV0034", "offers": { "@type": "Offer", "priceCurrency": "CZK", "price": "187.20", "availability": "https://schema.org/InStock", "itemCondition": "https://schema.org/NewCondition" }, "image": "https://www.kmotorshop.com/document/shop/VV0034/VV0034A.jpg", "category": "Rocker Arm", "gtin13": "8592779001484" } </script>
	<script type="text/plain" data-consent="marketing"> dataLayer.push({ "ecomm_pagetype": "product", "ecomm_prodid": "{{$return_data['product']->id}}", "ecomm_totalvalue": "187.20", "category_name": "2820" }); dataLayer.push({ "event": "trackViewContent", "ecommerce": { "currencyCode": "CZK", "detail": { "products": [ { "name": "VV0034", "id": "61596", "price": "187.20", "brand": "ET ENGINETEAM", "category": "Valves > Rocker Arm" } ] } } }); </script>
</body>
<!-- Mirrored from www.kmotorshop.com/en/article-detail/view/61596/rocker-arm-engine-timing-vv0034-et-engineteam-2453142880-md352127-50006481 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 15:18:30 GMT -->

</html>