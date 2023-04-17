<!DOCTYPE html>
<html>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- /Added by HTTrack -->
    @include('layout/head')
    <body>
        <header role="banner" class="site-header">
            <div id="site-header__top" class="site-header__top">
                <div class="site-header__top-callus">
                    <!-- <span class="opening-hour-status-icon">
                        <span class="icon icon-check-circle"></span>
                        </span>
                        <span class="opening-hour-status-text">WE ARE HERE FOR YOU</span> <span class="opening-hours-sign">-</span> <span class="time-container">16:26 CET</span> -->
                </div>
                <div class="site-header__top-center">
                    <div class="site-header__top-contacts">
                        <a href="tel:+1231212"><span class="icon-phone"></span>12 123 123 3</a>
                        <a href="mailto:info@bms.com"><span class="icon-Path-10"></span>info@bmsautos.com</a>
                    </div>
                    <div class="site-header__top-openhours">
                        <!-- <span class="icon-time"></span>
                            Open:
                            MO - FR / 08:00 am - 05:00 pm CET |
                            Weekend - closed -->
                    </div>
                </div>
                <!-- <div class="site-header__top-right">
                    <div class="site-header__top-country">
                        <a href="#changeCountryModal" class="open-popup open-changecountry">Pakistan</a>
                    </div>
                    <div class="site-header__top-currency">
                        <ul class="like-select">
                            <li class="like-select__item">USD
                                <ul class="like-select__submenu">
                                <li class="like-select__item"><a href="en0307.html?currency=USD">USD</a></li>
                                <li class="like-select__item"><a href="enbfa2.html?currency=GBP">GBP</a></li>
                                <li class="like-select__item"><a href="ende9d.html?currency=EUR">EUR</a></li>
                                <li class="like-select__item"><a href="en60cf.html?currency=CZK">CZK</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="site-header__top-language">
                        <ul class="like-select">
                            <li class="like-select__item"><img src="images/flag/gb.png" title="$languages[$currentLang]->langNam">
                                <ul class="like-select__submenu">
                                    <li class="like-select__item"><a href="en.html"><img src="images/flag/gb.png" alt="english"></a></li>
                                    <li class="like-select__item"><a href="de.html"><img src="images/flag/de.png" alt="deutsch"></a></li>
                                    <li class="like-select__item"><a href="cs.html"><img src="images/flag/cz.png" alt="česky"></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    </div> -->
            </div>
            @include('layout.site-nav')
        </header>
        <main class="site-main" role="main">
            <div id="snippet--hierarchy"></div>
            <div class="flashmessage__container">
                <div id="snippet--flashMessages"></div>
            </div>
            <section role="region">
                <div class="container">
                    <h1 class="heading-brand">Contact</h1>
                </div>
            </section>
            <div class="container">
                <div class="content">
                    <div class="contact__container">
                        <div class="contact__info">
                            <!-- <h1>K MOTORSHOP s.r.o.</h1> -->
                            <h1>BMS Automotive s.r.o.</h1>
                            <p class="contact__info-address">My address<br />
                                403 39 Lorem
                            </p>
                            <!-- <p class="contact__info-company">Company ID No.: 25028448<br />
                                VAT no.: CZ25028448</p> -->
                            <p class="contact__info-company">Company ID No.: 00000000<br />
                                VAT no.: 000000000
                            </p>
                            <!-- <p class="contact__info-contacts"><span class="icon icon-phone"></span> <a href="tel:+420475209033">00420 475 209 033</a><br />
                                <span class="icon icon-Path-10"></span> <a href="mailto:info@kmotorshop.com">INFO@KMOTORSHOP.COM</a><br />
                                <span class="icon icon--blue icon-Group-10"></span> <a href="http://www.facebook.com/pages/KS-Motor-Servis/219553348071297" target="_blank">KMOTORSHOP</a></p> -->
                            <p class="contact__info-contacts"><span class="icon icon-phone"></span> <a href="tel:+132123122">1233 123 123</a><br />
                                <span class="icon icon-Path-10"></span> <a href="mailto:info@kmotorshop.com">INFO@BMSAUTOMOBILE.COM</a><br />
                                <span class="icon icon--blue icon-Group-10"></span> <a href="#" target="_blank">BMS AUTOMOTIVE</a>
                            </p>
                            <h2>Opening hours</h2>
                            <p class="contact__info-opening">Monday - Friday<br />
                                08:00 - 17:00
                            </p>
                        </div>
                        <!-- <div class="contact__map"><iframe allowfullscreen="" frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d550583.1910339087!2d14.430238438015687!3d50.13034056855774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4709900b66bf3a2f%3A0x81ab6b9052148a1c!2sKS+Motor+Servis+Van%2C+s.r.o.!5e0!3m2!1scs!2scz!4v1529660228551" style="border:0" width="100%"></iframe></div> -->
                        <div class="contact__map"><iframe allowfullscreen="" frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=?" style="border:0" width="100%"></iframe></div>
                    </div>
                </div>
            </div>
            <div class="popup mfp-hide" id="changeCountryModal" aria-hidden="true">
                <h3 class="popup__heading" id="changeCountryModalLabel">Choose country for delivery</h3>
                <div id="snippet--changeCountryModal">
                    <form action="https://www.kmotorshop.com/en/content/contact" method="post" id="frm-changeCountry">
                        <div class="site-form__section-content">
                            <div class="site-form__line site-form__line--pack">
                                <label class="col-form-label col-form-label--select" for="frm-changeCountry-countryId">Country:</label>
                                <select name="countryId" class="js-select change-country-select" id="frm-changeCountry-countryId" disabled>
                                    <option value="">Loading...</option>
                                </select>
                            </div>
                            <div class="site-form__line site-form__line--pack">
                                <input type="submit" name="save" class="btn btn-primary w100" value="Change">
                            </div>
                        </div>
                        <input type="hidden" name="_do" value="changeCountry-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                    </form>
                </div>
            </div>
        </main>
        <footer class="site-footer" role="contentinfo">
            <section class="site-footer__top">
                <div class="site-footer__top-container container">
                    <div class="site-footer__column">
                        <a class="site-footer__logo" href="../../../WWW.BMS.COM/en.html">
                            <!-- <span class="icon-logo"></span>
                                <span class="logotyp">KMOTORSHOP</span> -->
                            <span><img src="../../../WWW.BMS.COM/images/logo_bms.png">
                        <a href="../../../WWW.BMS.COM/en.html"></a></span>
                        </a>
                    </div>
                    <div class="site-footer__column">
                        <h3 class="site-footer__main-heading">Company</h3>
                        <ul class="site-footer__main-list">
                            <li><a href="../../../WWW.BMS.COM/en.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Certificates</a></li>
                            <li><a href="#">Cooperation</a></li>
                            <li><a href="#">Impressum</a></li>
                            <li><a href="../../en/content/contact.html">Contact Us</a></li>
                        </ul>
                        <!-- <a class="site-footer__top-link" href="tel:+123123123">
                            <span class="icon icon-phone"></span>123123 123
                            </a> -->
                    </div>
                    <div class="site-footer__column">
                        <h3 class="site-footer__main-heading">Information</h3>
                        <ul class="site-footer__main-list">
                            <li><a href="#">Shipping and payment</a></li>
                            <li><a href="../../en/content/detail/14.html">FAQ</a></li>
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
                        <a href="#" target="_blank"><span class="icon icon-Group-10"></span></a></li>
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
            <form action="https://www.kmotorshop.com/en/content/contact" method="post" id="frm-stockStatusMail-sendEmailForm">
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
                <input type="hidden" name="formArticleId" value="1671463589"><input type="hidden" name="_do" value="stockStatusMail-sendEmailForm-submit">
            </form>
        </div>
        <script src="../../scripts/js-cookie/src/js.cookie.js"></script>
        <script src="../../scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script src="../../scripts/nette-live-form-validation/live-form-validation.js"></script>
        <script src="../../scripts/nette.ajax.js/nette.ajax.js"></script>
        <script src="../../scripts/nette.ajax.js/extensions/fidRemove.ajax.js"></script>
        <script src="../../scripts/nette.ajax.js/extensions/confirm.ajax.js"></script>
        <script src="../../scripts/slick-carousel/slick/slick.min.js"></script>
        <script src="../../scripts/tippy/popper.js"></script>
        <script src="../../scripts/tippy/tippy.umd.js"></script>
        <script src="../../scripts/xzoom/src/xzoom.js"></script>
        <script src="../../scripts/nette_live_form_init.js"></script>
        <script src="../../scripts/openingHours.js"></script>
        <script src="../../scripts/reInit.ajax.js"></script>
        <script src="../../scripts/scrollTo.ajax.js"></script>
        <script src="../../scripts/spinner.ajax.js"></script>
        <script src="../../scripts/main841a.js?_v=e39fd6d4a22e72cd6c600a071d9aecec"></script>
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
        <div id="snippet--searchPageScripts"></div>
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
            var serverDateInit = new Date("2022-12-19T16:26:29+01:00");
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
                    url: "/en/content/contact?do=changeCountryForm"
                });
            });
            
            initEventsOnce();
            initEventsWithReload();
            
        </script>
    </body>
</html>
