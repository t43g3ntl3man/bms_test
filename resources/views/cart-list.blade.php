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
            <div class="container">
                <div id="snippet--cartList" style="margin-top: 5%;">
                    @foreach ($prods as $item)
                    <div class="cart-table">
                        <div class="cart-table__row">
                            <div class="cart-table__pic">
                                <img id="main_image" class="img-responsive" src="{{$item->brand->image}}" alt="{{$item->brandName}}" title="{{$item->brandName}}" >
                            </div>
                            <div class="cart-table__productmain">
                                <div class="cart-table__name">
                                    <a href="/product/{{$item->id}}">
                                    {{ $item->code }} - {{$item->brandName}} {{$item->categoryName}}, {{$item->subCategoryName}}
                                    </a>
                                </div>
                            </div>
                            <div class="cart-table__price">
                                <span class="cart-table__price-main">
                                ${{$item->price - (($item->price * 40)/ 100)}}
                                </span>
                                <span class="cart-table__price-vart">
                                (${{$item->price - (($item->price * 40)/ 100)}} without VAT 0%)
                                </span>
                            </div>
                            <div class="cart-table__remove">
                                <a href="/en/cart/show?articleId=94849&amp;do=removeFromCart" class="ajax remove-cart-row" data-gtm-remove="{&quot;event&quot;:&quot;removeFromCart&quot;,&quot;ecommerce&quot;:{&quot;currencyCode&quot;:&quot;USD&quot;,&quot;remove&quot;:{&quot;products&quot;:[{&quot;name&quot;:&quot;ED0009&quot;,&quot;id&quot;:&quot;94849&quot;,&quot;price&quot;:&quot;67.49&quot;,&quot;brand&quot;:&quot;ET ENGINETEAM&quot;,&quot;category&quot;:&quot;Electric parts > Other electric parts&quot;,&quot;quantity&quot;:1}]}}}" data-confirm="Do you really want to delete this item?">
                                <i class="icon-circle-xmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cart-undertable">
                       
                        <div class="cart-undertable__buttons">
                            <a href="/en/cart/show?do=clearCart" class="text-secondary text-nowrap ajax" id="clear-cart-button" data-confirm="Do you wish to delete the complete cart?">
                            </a>
                        </div>
                        <div class="cart-undertable__totals">
                            <div class="cart-totals__line cart-totals-line--first">
                                <span class="cart-totals__text">Total price excl. VAT</span>
                                <span class="cart-totals__price">${{$total - (($item->price * 40)/ 100)}}</span>
                            </div>
                            <div class="cart-totals__line cart-totals__line--second">
                                <span class="cart-totals__text">VAT</span>
                                <span class="cart-totals__price">$0.00</span>
                            </div>
                            <div class="cart-totals__line cart-totals__line--third">
                                <span class="cart-totals__text">Amount to pay</span>
                                <span class="cart-totals__price">${{$total - (($item->price * 40)/ 100)}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="cart-buttons cart-buttons--right">
                        <a href="/en/cart/customer" class="btn btn-secondary btn-arrowright">Continue to order</a>
                    </div>
                </div>
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
    </body>
    <!-- Mirrored from www.kmotorshop.com/en by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2022 15:16:47 GMT -->
</html>
