<!doctype html>
<html lang="en">
    <!-- Mirrored from www.kmotorshop.com/en/category/detail/2 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 15:17:05 GMT -->
    <!-- Added by HTTrack -->
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
                    <!-- <div class="site-header__top-contacts">
                        <a href="tel:+1231212"><span class="icon-phone"></span>12 123 123 3</a>
                        <a href="mailto:info@bms.com"><span class="icon-Path-10"></span>info@bmsautos.com</a>
                    </div> -->
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
            @include('layout.admin-site-nav')
        </header>
        <main class="site-main" role="main">
            <div id="snippet--hierarchy">
                <section class="site-breadcrumbs" role="region">
                    <div class="container">
                        <ul class="site-breadcrumbs__list">
                            <li class="site-breadcrumbs__list-item">
                                <a href="../../../en.html"><span class="icon-garage"></span></a>
                            </li>
                            <li class="site-breadcrumbs__list-item site-breadcrumbs__list-item--active">Products</li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="flashmessage__container">
                <div id="snippet--flashMessages"></div>
            </div>
            <section class="homepage-bookmark__body-item homepage-bookmark__body-item--active new-products" role="region" data-number="1">
                <div class="container">
                    <h2 class="homepage-heading">All products</h2>
                    <div id="snippet-articleListTop-">
                        <div id="article-list-carousel-63a082981248f" class="news-carousel" data-interval="false">
                            <div class="news-carousel__container">
                                @foreach ($recomended as $item)
                                    <div>
                                        <div class="product-item product-item--slider">
                                            <div class="product-item__image">
                                                <a class="product-item__link" href="/product/{{$item->id}}"></a>
                                                @if($item->image)
                                                    <img class="card-img-top p-2" src="http://localhost:8001/storage/{{$item->image}}" title="Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481" onerror="this.onerror=null; this.src='images/nophoto.jpg'" alt="VV0034, Rocker Arm, engine timing, Rocker Arm, ET ENGINETEAM, Mitsubishi 2,5D/TD 1983+, 2453142880, MD352127, 50006481, 2453142501, 24531-42501, 2453142801, 24531-42801, 24531-42880, 95M0502HYU, BZ-MI002, MD153990, MD307724, MD324966, MD352128">
                                                @else
                                                    <img class="card-img-top p-2" src="/images/nophoto.jpg" title="Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481" onerror="this.onerror=null; this.src='images/nophoto.jpg'" alt="VV0034, Rocker Arm, engine timing, Rocker Arm, ET ENGINETEAM, Mitsubishi 2,5D/TD 1983+, 2453142880, MD352127, 50006481, 2453142501, 24531-42501, 2453142801, 24531-42801, 24531-42880, 95M0502HYU, BZ-MI002, MD153990, MD307724, MD324966, MD352128">
                                                @endif
                                                <!-- <div class="product-item__badges">
                                                    <span class="badge badge-success">We recommend!</span>
                                                </div> -->
                                            </div>
                                            <div class="product-item__text product-item--slider__text">
                                                <img src="/{{$item->brand->image}}" alt="{{$item->brandName}}" title="{{$item->brandName}}" class="brand-logo "/>
                                                <a class="product-item__name" href="/product/{{$item->id}}">
                                                {{ $item->code }} - {{$item->brandName}} {{$item->categoryName}}, {{$item->subCategoryName}}
                                                </a>
                                                <div class="product-item__vehicles">
                                                    {{$item->carName}}
                                                </div>
                                                <div class="product-item__properties" >
                                                    <div class="product-item__properties-content">
                                                        <table class="product-detail__data product-detail__data--full">
                                                            <tbody>

                                                                @for ($i = 0; $i < sizeof($item->criteria_names); $i++)
                                                                @if ($i==0 || $i==1)
                                                                    <tr>
                                                                @else
                                                                    <tr class="articleCriteriaArea-318050 class-collapse collapse bg-light" data-button="articleCriteriaAreaBtn-318050" id="articleCriteriaArea-318050-3">
                                                                @endif
                                                                        <td>{{$item->criteria_names[$i]}}</td>
                                                                        <td>{{$item->criteria_value[$i]}}</td>
                                                                    </tr>
                                                                @endfor
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- @if (sizeof($item->criteria_names)==2 )
                                                    <div class="product-item__properties-header">
                                                        <span>Show all</span>
                                                        <span>Show less</span>
                                                    </div>
                                                    @endif -->
                                                </div>
                                            </div>
                                            <div class="product-item__pricebox">
                                                <div class="product-item__pricebox-left">
                                                    <span class="product-item__pricebox-main">
                                                    ${{$item->price - (($item->price * 40)/ 100)}}
                                                    </span>
                                                    <span class="product-item__pricebox-vat">
                                                    (${{$item->price - (($item->price * 40)/ 100)}} without VAT 0%)
                                                    </span>
                                                </div>
                                                <!-- <div class="product-item__pricebox-right">
                                                    <div id="snippet-articleListTop-articleStockInternal-61596-">
                                                        <table class="product-detail__buy-stock" style="border-color: black; border-style: solid; border-width: 10px">
                                                            <tr>
                                                                <th>
                                                                    <span class="secondary" data-tippy-content="In Stock">
                                                                    <i class="icon-check-circle"></i></span>
                                                                </th>
                                                                <td class="d-none d-sm-table-cell">Stock:</td>
                                                                <td>
                                                                    &gt; 25 pcs
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="site-footer" role="contentinfo">
            <section class="site-footer__top">
                <div class="site-footer__top-container container">
                    <div class="site-footer__column">
                        <a class="site-footer__logo" href="../../../en.html">
                            <!-- <span class="icon-logo"></span>
                                <span class="logotyp">KMOTORSHOP</span> -->
                            <span><img src="images/logo_bms.png">
                        <a href=""></a></span>
                        </a>
                    </div>
                    <div class="site-footer__column">
                        <h3 class="site-footer__main-heading">Company</h3>
                        <ul class="site-footer__main-list">
                            <li><a href="../../../en.html">Home</a></li>
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
            <form action="https://www.kmotorshop.com/en/category/detail/2" method="post" id="frm-stockStatusMail-sendEmailForm">
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
                <input type="hidden" name="formArticleId" value="1671463588"><input type="hidden" name="_do" value="stockStatusMail-sendEmailForm-submit">
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
                            url: "/en/category/detail/2?searchByCar-id=__DEVICE_ID__&do=searchByCar-manufacturerChange".replace("__DEVICE_ID__", $(this).val()),
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
                            url: "/en/category/detail/2?searchByCar-id=__DEVICE_ID__&do=searchByCar-modelChange".replace("__DEVICE_ID__", $(this).val()),
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
                            url: "/en/category/detail/2?searchByCar-id=__DEVICE_ID__&do=searchByCar-carChange".replace("__DEVICE_ID__", $(this).val()),
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
                            url: "/en/category/detail/2?searchByMotor-id=__DEVICE_ID__&do=searchByMotor-manufacturerChange".replace("__DEVICE_ID__", $(this).val()),
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
                            url: "/en/category/detail/2?searchByMotor-id=__DEVICE_ID__&do=searchByMotor-motorChange".replace("__DEVICE_ID__", $(this).val()),
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
            var serverDateInit = new Date("2022-12-19T16:26:28+01:00");
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
                    url: "/en/category/detail/2?do=changeCountryForm"
                });
            });
            
            initEventsOnce();
            initEventsWithReload();
            
        </script>
    </body>
</html>
