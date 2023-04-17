<!doctype html>
<html lang="en">
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
            @include('layout/site-nav')
        </header>
        <form action="#" method="post" id="frm-combinedFilterForm" class="d-flex flex-row w-100 bg-primary text-white header-search p-0 m-0" role="search">
            <div class="site-search">
                <div class="site-search__input" id="search-article-desktop-input-container">
                    <input type="text" name="searchString" placeholder="Search by Brand, category or part number..." class="h-100 w-100 px-3 m-0 border-0 no-live-validation" id="frm-searchArticleDesktop-searchForm-searchString" required data-nette-rules='[{"op":":filled","msg":"Enter your search text!"},{"op":":minLength","msg":"The text must contain at least 4 characters!","arg":4}]'>
                </div>
                <div class="site-search__button">
                    <button type="submit" name="searchButton" title="Search" rel="search" class="btn btn-primary"><i class="icon-find"></i><span class="caption"></span></button>
                </div>
            </div>
            <input type="hidden" name="_do" value="searchArticleDesktop-searchForm-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
        </form>
        <!-- searchForm -->
        </div>
        <div class="site-header__main-right">
            <div class="site-header__cart" id="snippet--cartPanel">
                <!-- <a href="en/cart/show.html"><span class="icon-cart"></span></a> -->
                <a href="#"><span class="icon-cart"></span></a>
                <div class="itemscart">
                    <!-- <a class="itemscart__link" href="en/cart/show.html"> -->
                    <a class="itemscart__link" href="#"></a>
                    <div class="text-center">
                        Items: 0 | Pcs: 0 | &#36;0.00
                    </div>
                    </a>
                </div>
                <div class="site-header__cart-summary">
                    &#36;0.00
                </div>
            </div>
            <div class="site-header__icon">
                <!--<a n:href="Content:home"><span class="icon-garage"></span></a>-->
            </div>
            <div class="site-header__user">
                <!-- <a class="site-header__user-login" title="" href="en/sign/in.html"><span class="icon-user"></span></a> -->
                <a class="site-header__user-login" title="" href="#"><span class="icon-user"></span></a>
                <div class="site-header__user-popup">
                    <div class="site-header__user-heading"> <span class="icon icon-user"></span> <span>Sign in</span></div>
                    <div id="snippet-signInForm-">
                        <form action="https://www.kmotorshop.com/en" method="post" id="frm-signInForm-signInForm">
                            <div class="site-form__line">
                                <input type="email" name="username" autocomplete="email" placeholder="Username (e-mail)" class="site-form__input w100" id="frm-signInForm-signInForm-username" required data-nette-rules='[{"op":":filled","msg":"Enter your user name."},{"op":":email","msg":"Please enter a valid email address."},{"op":":email","msg":"Invalid e-mail address."}]'>
                            </div>
                            <div class="site-form__line">
                                <input type="password" name="password" autocomplete="current-password" placeholder="password" class="site-form__input w100" id="frm-signInForm-signInForm-password" required data-nette-rules='[{"op":":filled","msg":"Enter the password"}]'>
                            </div>
                            <div class="site-form__line">
                                <div class="form-check">
                                    <label for="frm-signInForm-signInForm-remember" class=" site-check"><span class="site-check__text"> Keep me signed in</span><input type="checkbox" name="remember" id="frm-signInForm-signInForm-remember" checked><span class="site-check__checkmark"></span></label>
                                </div>
                            </div>
                            <input type="submit" name="send" class="btn btn-primary w100" value="Sign in">
                            <!-- <p><a href="en/sign/new-password.html">Forgot password?</a></p> -->
                            <p><a href="#">Forgot password?</a></p>
                            <!-- <p>Don't have an account? <a href="en/customer/register.html">Register</a></p> -->
                            <p>Don't have an account? <a href="#">Register</a></p>
                            <input type="hidden" name="_do" value="signInForm-signInForm-submit">
                        </form>
                    </div>
                </div>
                <div class="site-header__user-reminder">
                    <span class="site-header__user-reminderclose" title="I´m not interested. Don´t show me this message again."><i class="icon-circle-xmark"></i></span>
                    <h3 class="mt-0">Sign in</h3>
                    <p>As a registered user, you automatically get even better prices.</p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </header>
        <main class="site-main" role="main">
            <div id="snippet--hierarchy"></div>
            <div class="flashmessage__container">
                <div id="snippet--flashMessages"></div>
            </div>
            <section role="region">
                <div class="container">
                    <h1 class="heading-brand">Returns</h1>
                </div>
            </section>
            <div class="container">
                <div class="content">
                    <h3>Return of goods</h3>
                    <!-- <p>If you wish to return goods for a specific reason, please clarify this in any case first with the staff of the customer service department and agree on the conditions. When returning goods, please always fill in the return form. This will make it much easier for us to identify the returned goods. If we receive a package without the completed form, we will be forced to deduct the costs incurred by the goods identification from the refunded amount.</p> -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </li>
                        <!-- <li>The buyer can return the goods within 14 days of receipt.</li>
                            <li>The goods can be returned only undamaged and in original packaging.</li>
                            <li>Damaged or already installed goods cannot be returned.</li>
                            <li>A fully completed <strong>Return delivery protocol</strong> must be enclosed in the package together with the returned goods.
                            <ul>
                                <li>Return delivery protocol&nbsp;<a href="../../../files/ks-product-return-protocol-en.docx" target="_blank">Word-DOC</a> / <a href="../../../files/ks-product-return-protocol-en.pdf" target="_blank">PDF-Format</a>.</li>
                            </ul>
                            </li>
                            <li>Upon receipt of the return delivery, the seller will issue a corrected sales tax invoice (credit note) and the buyer will be refunded the amount.Versandkosten der Rücklieferung trägt der Käufer, falls die Rückgabegründe beim Käufer liegen (z.B. Ersatzteil wurde für die Reparatur nicht genutzt).</li>
                            <li>Shipping costs of the return delivery will be borne by the buyer if the reasons for the return lie with the buyer (e.g. spare part was not used for the repair).</li>
                            <li>Shipping costs of the return delivery are borne by the seller, if the reasons for the return lie with the seller (e.g. wrong item delivered).</li> -->
                    </ul>
                    <p>
                        <strong>Address for return of goods:</strong><br />
                        <!-- K MOTORSHOP s.r.o.<br />
                            Ústecká 408<br />
                            Chlumec<br />
                            40339<br />
                            Czech Republic<br />
                            Tel: 00420 475 209 033<br />
                            E-mail: info@kmotorshop.com</p> -->
                        BMS AUTOMOTIVE s.r.o.<br />
                        LOREM IPSUM<br />
                        DOLOR<br />
                        40339<br />
                        Hello World<br />
                        Tel: 1233 123 123<br />
                        E-mail: info@bmsautomotive.com
                    </p>
                </div>
            </div>
            <div class="popup mfp-hide" id="changeCountryModal" aria-hidden="true">
                <h3 class="popup__heading" id="changeCountryModalLabel">Choose country for delivery</h3>
                <div id="snippet--changeCountryModal">
                    <form action="https://www.kmotorshop.com/en/content/detail/35" method="post" id="frm-changeCountry">
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
                        <a class="site-footer__logo" href="../../../../WWW.BMS.COM/en.html">
                            <!-- <span class="icon-logo"></span>
                                <span class="logotyp">KMOTORSHOP</span> -->
                            <span><img src="../../../../WWW.BMS.COM/images/logo_bms.png">
                        <a href="../../../../WWW.BMS.COM/en.html"></a></span>
                        </a>
                    </div>
                    <div class="site-footer__column">
                        <h3 class="site-footer__main-heading">Company</h3>
                        <ul class="site-footer__main-list">
                            <li><a href="../../../../WWW.BMS.COM/en.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Certificates</a></li>
                            <li><a href="#">Cooperation</a></li>
                            <li><a href="#">Impressum</a></li>
                            <li><a href="../../../en/content/contact.html">Contacts</a></li>
                        </ul>
                        <!-- <a class="site-footer__top-link" href="tel:+123123123">
                            <span class="icon icon-phone"></span>123123 123
                            </a> -->
                    </div>
                    <div class="site-footer__column">
                        <h3 class="site-footer__main-heading">Information</h3>
                        <ul class="site-footer__main-list">
                            <li><a href="#">Shipping and payment</a></li>
                            <li><a href="../../../en/content/detail/14.html">FAQ</a></li>
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
            <form action="https://www.kmotorshop.com/en/content/detail/35" method="post" id="frm-stockStatusMail-sendEmailForm">
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
                <input type="hidden" name="formArticleId" value="1671463590"><input type="hidden" name="_do" value="stockStatusMail-sendEmailForm-submit">
            </form>
        </div>
        <script src="../../../scripts/js-cookie/src/js.cookie.js"></script>
        <script src="../../../scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <script src="../../../scripts/nette-live-form-validation/live-form-validation.js"></script>
        <script src="../../../scripts/nette.ajax.js/nette.ajax.js"></script>
        <script src="../../../scripts/nette.ajax.js/extensions/fidRemove.ajax.js"></script>
        <script src="../../../scripts/nette.ajax.js/extensions/confirm.ajax.js"></script>
        <script src="../../../scripts/slick-carousel/slick/slick.min.js"></script>
        <script src="../../../scripts/tippy/popper.js"></script>
        <script src="../../../scripts/tippy/tippy.umd.js"></script>
        <script src="../../../scripts/xzoom/src/xzoom.js"></script>
        <script src="../../../scripts/nette_live_form_init.js"></script>
        <script src="../../../scripts/openingHours.js"></script>
        <script src="../../../scripts/reInit.ajax.js"></script>
        <script src="../../../scripts/scrollTo.ajax.js"></script>
        <script src="../../../scripts/spinner.ajax.js"></script>
        <script src="../../../scripts/main841a.js?_v=e39fd6d4a22e72cd6c600a071d9aecec"></script>
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
            var serverDateInit = new Date("2022-12-19T16:26:30+01:00");
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
                    url: "/en/content/detail/35?do=changeCountryForm"
                });
            });
            
            initEventsOnce();
            initEventsWithReload();
            
        </script>
    </body>
</html>
