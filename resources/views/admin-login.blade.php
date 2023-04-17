<!doctype html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    @include('layout/head')
    <body>
        <header role="banner" class="site-header">
            <div id="site-header__top" class="site-header__top">
                <div class="site-header__top-callus">
                </div>
                <div class="site-header__top-center">
                    <div class="site-header__top-contacts">
                        <a href="tel:+1231212"><span class="icon-phone"></span>12 123 123 3</a>
                        <a href="mailto:info@bms.com"><span class="icon-Path-10"></span>info@bmsautos.com</a>
                    </div>
                    <div class="site-header__top-openhours">
                    </div>
                </div>
            </div>
            @include('layout/site-nav')
        </header>
        <main class="site-main" role="main">
            <div id="snippet--hierarchy">
                <section class="site-breadcrumbs" role="region">
                    <div class="container">
                        <ul class="site-breadcrumbs__list">
                            <li class="site-breadcrumbs__list-item">
                                <a href="../../en.html"><span class="icon-garage"></span></a>
                            </li>
                            <li class="site-breadcrumbs__list-item site-breadcrumbs__list-item--active">Cart</li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="flashmessage__container">
                <div id="snippet--flashMessages"></div>
            </div>
            <section role="region" id="snippet--customerForm">
                <div class="container">
                    <div class="site-form site-form--register">
                        <h1 class="text-center">Admin Login</h1>
                    </div>
                </div>
            </section>
            <div id="snippet-customerPersonFormRegister-">
                <form action="/admin/login" method="post" id="frm-customerPersonFormRegister-customerRegisterForm" novalidate="">
                    {{ csrf_field() }}
                    <h2 class="site-form__section-heading"></h2>
                    <div class="site-form__section-content">
                        <div class="site-form__line site-form__line--pack">
                            <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail">E-mail&nbsp;<span class="text-danger">*</span></label>
                            <input type="email" name="adminLogin[userEmail]" maxlength="80" autocomplete="email" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Fill in the email!&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;Invalid e-mail address.&quot;},{&quot;op&quot;:&quot;:maxLength&quot;,&quot;msg&quot;:&quot;Input must have max 80 characters&quot;,&quot;arg&quot;:80}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail_message">
                            <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail_message"></div>
                        </div>
                        <div class="site-form__line site-form__line--pack">
                            <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword">Password&nbsp;<span class="text-danger">*</span></label>
                            <input type="password" name="adminLogin[userPassword]" autocomplete="new-password" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter password&quot;},{&quot;op&quot;:&quot;:minLength&quot;,&quot;msg&quot;:&quot;Password must have at least 6 characters&quot;,&quot;arg&quot;:6}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword_message">
                            <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword_message"></div>
                        </div>
                        <div class="site-form__section-content">
                            
                            <div class="site-form__line site-form__line--pack js-focused">
                                <input type="submit" name="login" class="btn btn-primary w100" value="Login" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-register_message">
                                <div id="frm-customerPersonFormRegister-customerRegisterForm-register_message"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>       
        <footer class="site-footer" role="contentinfo">
            <section class="site-footer__top">
                <div class="site-footer__top-container container">
                    <div class="site-footer__column">
                        <a class="site-footer__logo" href="/">
                            <!-- <span class="icon-logo"></span>
                                <span class="logotyp">KMOTORSHOP</span> -->
                            <span><img src="/images/logo_bms.png">
                        <a href="/"></a></span>
                        </a>
                    </div>
                    <div class="site-footer__column">
                        <h3 class="site-footer__main-heading">Company</h3>
                        <ul class="site-footer__main-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Certificates</a></li>
                            <li><a href="#">Cooperation</a></li>
                            <li><a href="#">Impressum</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                        <!-- <a class="site-footer__top-link" href="tel:+123123123">
                            <span class="icon icon-phone"></span>123123 123
                            </a> -->
                    </div>
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
                            </a> -->
                    </div>
                    <div class="site-footer__column">
                        <a class="site-footer__top-link" href="tel:+123123123">
                        <span class="icon icon-phone"></span>123123 123
                        </a>
                        <a class="site-footer__top-link" href="mailto:info@bmsautomobile.com">
                        <span class="icon icon-Path-10"></span>INFO@BMSAUTOMOBILE.COM
                        </a>
                        <a class="site-footer__top-link" href="en/content/contact.html">
                        <span class="icon icon-Path-64"></span></span>ÚSTECKÁ 408
                        </a>
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
                    <div class="site-footer__copy-left">
                        <a href="http://www.facebook.com/pages/KS-Motor-Servis/219553348071297" target="_blank"><span class="icon icon-Group-10"></span></a></li>
                        All Rights Reserved © Copyrights BMS Automobile 2022
                    </div>
                    <!-- <div class="site-footer__copy-right">
                        <img src="images/tca_tecdoc-inside_logo_rgb_1200dpi.png" alt="TecDoc Inside" title="TecDoc"></a>
                        </div> -->
                </div>
            </section>
        </footer>
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
            .custom-file-label::after { content: "Browse" !important;}
        </style>
        <div id="sendStockEmailForm" class="mfp-hide popup" tabindex="-1" role="dialog" aria-labelledby="emailStockStatusLabel" aria-hidden="true">
            <form action="https://www.kmotorshop.com/en" method="post" id="frm-stockStatusMail-sendEmailForm">
                <h2 id="emailStockStatusLabel">Ask for item availability:</h2>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionArticle">Item&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" name="questionArticle" class="form-control" readonly id="frm-stockStatusMail-sendEmailForm-questionArticle" required data-nette-rules='[{"op":":filled","msg":"This field is required."}]'>
                </div>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionName">Name&nbsp;<span class="text-danger">*</span></label>
                    <input type="text" name="questionName" class="form-control" autocomplete="name" id="frm-stockStatusMail-sendEmailForm-questionName" required data-nette-rules='[{"op":":filled","msg":"Enter your name."}]'>
                </div>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionEmail">E-mail&nbsp;<span class="text-danger">*</span></label>
                    <input type="email" name="questionEmail" class="form-control" autocomplete="email" id="frm-stockStatusMail-sendEmailForm-questionEmail" required data-nette-rules='[{"op":":filled","msg":"Please enter your e-mail address."},{"op":":email","msg":"Please enter a valid e-mail address.."}]'>
                </div>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionPhone">Phone</label>
                    <input type="text" name="questionPhone" autocomplete="phone" class="form-control" id="frm-stockStatusMail-sendEmailForm-questionPhone">
                </div>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-email">Email (leave empty)</label>
                    <input type="text" name="email" autocomplete="no" class="form-control frm-text-hp-important form-control" id="frm-stockStatusMail-sendEmailForm-email">
                </div>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-phone">Phone (leave empty)</label>
                    <input type="text" name="phone" autocomplete="no" class="form-control frm-text-hp-important form-control" id="frm-stockStatusMail-sendEmailForm-phone">
                </div>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-www">WWW (leave empty)</label>
                    <input type="text" name="www" autocomplete="no" class="form-control frm-text-hp-important form-control" id="frm-stockStatusMail-sendEmailForm-www">
                </div>
                <div class="site-form__line site-form__line--pack">
                    <label class="col-form-label" for="frm-stockStatusMail-sendEmailForm-questionText">Message&nbsp;<span class="text-danger">*</span></label>
                    <textarea name="questionText" class="form-control" id="frm-stockStatusMail-sendEmailForm-questionText" required data-nette-rules='[{"op":":filled","msg":"Fill in the Message!"}]'>What is the scheduled delivery date?</textarea>
                </div>
                <div class="g-recaptcha" type="text" name="recaptcha" id="frm-stockStatusMail-sendEmailForm-recaptcha" required data-nette-rules='[{"op":":filled","msg":"Anti-spam verification failed. Please try again."}]' data-sitekey="6Ld6HkMhAAAAAIvTxVx4S7LRZqyLYCHRmdmNbzkq"></div>
                <br>
                <input type="submit" name="send" class="btn btn-primary ajax" value="Send">
                <input type="hidden" name="formArticleId" value="1671463576"><input type="hidden" name="_do" value="stockStatusMail-sendEmailForm-submit">
            </form>
        </div>
        <script src="{{asset('scripts/js-cookie/src/js.cookie.js')}}"></script>
        <script src="{{asset('scripts/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('scripts/nette-live-form-validation/live-form-validation.js')}}"></script>
        <script src="{{asset('scripts/nette.ajax.js/nette.ajax.js')}}"></script>
        <script src="{{asset('scripts/nette.ajax.js/extensions/fidRemove.ajax.js')}}"></script>
        <script src="{{asset('scripts/nette.ajax.js/extensions/confirm.ajax.js')}}"></script>
        <script src="{{asset('scripts/slick-carousel/slick/slick.min.js')}}"></script>
        <script src="{{asset('scripts/tippy/popper.js')}}"></script>
        <script src="{{asset('scripts/tippy/tippy.umd.js')}}"></script>
        <script src="{{asset('scripts/xzoom/src/xzoom.js')}}"></script>
        <script src="{{asset('scripts/nette_live_form_init.js')}}"></script>
        <script src="{{asset('scripts/openingHours.js')}}"></script>
        <script src="{{asset('scripts/reInit.ajax.js')}}"></script>
        <script src="{{asset('scripts/scrollTo.ajax.js')}}"></script>
        <script src="{{asset('scripts/spinner.ajax.js')}}"></script>
        <script src="{{asset('scripts/main841a.js?_v=e39fd6d4a22e72cd6c600a071d9aecec')}}"></script>
        <script>
            function initMailStockScript() {
            	$('.send-stock-popup-link').on("click", function () {
            		if($(this).data('description')) {
            			$('input[name="questionArticle"]').val($(this).data('description'));
            			$('input[name="questionArticle"]').parent().addClass('js-focused');
            		}
            	});
            }
            initMailStockScript();
            $.nette.ext({
            	start: function () {
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
        <div id="snippet--searchPageScripts">
            <script>
                initSearchByCarJs();
                $.nette.ext({
                	complete: function() {
                		initSearchByCarJs();
                	}
                });
                
                function initSearchByCarJs() {
                	var manuSelect = $('select[name="manu_car"]');
                	var modelSelect = $('select[name="model"]');
                	var carSelect = $('select[name="car"]');
                
                //init ajax
                	$('#' + "frm-searchByCar-searchByCarForm-manu_car").off('change').on('change', function () {
                		$(this).blur();
                		var manuId = $(this).val();
                		if(manuId == -1) {
                			$('.ajax-loading').show(0);
                		} else {
                			modelSelect.select2('destroy');
                			$('.site-skeleton-model').show(0);
                			carSelect.select2('destroy');
                			$('.site-skeleton-type').show(0);
                		}
                
                		$.nette.ajax({
                			type: 'GET',
                			url: "/en?searchByCar-id=__DEVICE_ID__&do=searchByCar-manufacturerChange".replace("__DEVICE_ID__", $(this).val()),
                			off: ['spinner'],
                			complete: function() {
                				toggleNumber();
                			}
                		});
                	});
                	$('#' + "frm-searchByCar-searchByCarForm-model").off('change').on('change', function () {
                		$(this).blur();
                		var modelId = $(this).val();
                		if(modelId == -1) {
                			$('.ajax-loading').show(0);
                		} else {
                			carSelect.select2('destroy');
                			$('.site-skeleton-type').show(0);
                		}
                
                		$.nette.ajax({
                			type: 'GET',
                			url: "/en?searchByCar-id=__DEVICE_ID__&do=searchByCar-modelChange".replace("__DEVICE_ID__", $(this).val()),
                			off: ['spinner'],
                			complete: function() {
                				toggleNumber();
                			}
                		});
                	});
                	$('#' + "frm-searchByCar-searchByCarForm-car").off('change').on('change', function () {
                		$(this).blur();
                		var carId = $(this).val();
                		if(carId) {
                			$('.ajax-loading').show(0);
                		}
                
                		$.nette.ajax({
                			type: 'GET',
                			url: "/en?searchByCar-id=__DEVICE_ID__&do=searchByCar-carChange".replace("__DEVICE_ID__", $(this).val()),
                			off: ['spinner'],
                			complete: function() {
                				toggleNumber();
                			}
                		});
                	});
                }
                
            </script>
            <script>
                initSearchByMotorJs();
                $.nette.ext({
                	complete: function() {
                		initSearchByMotorJs();
                	}
                });
                function initSearchByMotorJs() {
                	var manuSelect = $('select[name="manu_motor"]');
                	var motorSelect = $('select[name="motor"]');
                
                //init ajax
                	$('#' + "frm-searchByMotor-searchByMotorForm-manu_motor").off('change').on('change', function () {
                		$(this).blur();
                		$('input[name=motorCode]').val(null);
                		var manuId = $(this).val();
                		if(manuId == -1) {
                			$('.ajax-loading').show(0);
                		} else {
                			motorSelect.select2('destroy');
                			$('.site-skeleton-motor').show(0);
                		}
                
                		$.nette.ajax({
                			type: 'GET',
                			url: "/en?searchByMotor-id=__DEVICE_ID__&do=searchByMotor-manufacturerChange".replace("__DEVICE_ID__", $(this).val()),
                			off: ['spinner'],
                			complete: function() {
                				toggleNumber();
                			}
                		});
                
                	});
                	$('#' + "frm-searchByMotor-searchByMotorForm-motor").off('change').on('change', function () {
                		$(this).blur();
                		$('input[name=motorCode]').val(null);
                		var motorId = $(this).val();
                		if(motorId) {
                			$('.ajax-loading').show(0);
                		}
                
                		$.nette.ajax({
                			type: 'GET',
                			url: "/en?searchByMotor-id=__DEVICE_ID__&do=searchByMotor-motorChange".replace("__DEVICE_ID__", $(this).val()),
                			off: ['spinner'],
                			complete: function() {
                				toggleNumber();
                			}
                		});
                
                	});
                
                	$("input[name=motorCode]").on("keydown", function () {
                		manuSelect.val(null);
                		manuSelect.select2({
                			width: '100%',
                			placeholder: function(){
                				$(this).data('placeholder');
                			}
                		});
                		motorSelect.val(null);
                		motorSelect.select2({
                			width: '100%',
                			placeholder: function(){
                				$(this).data('placeholder');
                			}
                		});
                	});
                }
                
                
            </script>
            <script>
                initSearchByNumbersJs();
                $.nette.ext({
                	complete: function() {
                		initSearchByNumbersJs();
                	}
                });
                function initSearchByNumbersJs() {
                	const kbaCode1 = $("input[name='kbaCode1']");
                	const kbaCode2 = $("input[name='kbaCode2']");
                	kbaCode1.on("keyup", function () {
                		if(kbaCode1.val().length === 4) {
                			kbaCode2.focus();
                		}
                	});
                }
            </script>
        </div>
        <script type="text/javascript">
            function initBuyButtons() {
            	var buyButton = $(".buy-button");
            	buyButton.off('click');
            	buyButton.on("click", function (e) {
            		e.preventDefault();
            		buy($(this).closest("form"), "/en/cart/buy-info");
            	});
            
            	var buyFormInput = $('.buy-form-container form input, .recalc-form-container form input');
            	buyFormInput.off("keydown");
            	buyFormInput.on("keydown", function (e) {
            		if (e.keyCode === 10 || e.keyCode === 13) {
            			e.preventDefault();
            			buy($(this).closest("form"), "/en/cart/buy-info");
            		}
            	});
            }
            
            var gaEnabled = 0;
            var gtmEnabled = 1;
            var serverDateInit = new Date("2022-12-19T16:26:16+01:00");
            var serverTimeStringInit = "16:26 CET";
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
            
            $('.open-changecountry').on('click', function () {
            	$.nette.ajax({
            		type: 'GET',
            		off: ['spinner'],
            		url: "/en?do=changeCountryForm"
            	});
            });
            
            initEventsOnce();
            initEventsWithReload();
            
        </script>
        <script type="text/plain" data-consent="marketing">
            dataLayer.push({
            	"ecomm_pagetype": "home"
            });
        </script>
    </body>
    <!-- Mirrored from www.kmotorshop.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 15:16:47 GMT -->
</html>
