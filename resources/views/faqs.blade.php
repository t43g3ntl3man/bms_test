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
                    <h1 class="heading-brand">FAQ</h1>
                </div>
            </section>
            <div class="container">
                <div class="content">
                    <h3>Lorem Ipsum Dolor</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                    </ul>
                    <h3>Lorem Ipsum Dolor</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                    </ul>
                    <h3>Lorem Ipsum Dolor</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                    </ul>
                    <!-- 
                        <h3>Shipping</h3>
                        
                        <ul>
                        <li>Delivery within EU and free shipping limits - see the price list <a href="../delivery.html">here</a> - DPD service as a standard method</li>
                        <li>Delivery outside EU - TNT Economy Express service as a standard method. Delivery to worldwide locations between 2 - 7 days. The price is determined by the shipment weight and the destination. During the ordering procedure, you will be required to fill in a form with information such as state, city and a ZIP code. The form will be used for price and delivery time calculation. The price offer will be later displayed on your profile or sent to you via e-mail (as you prefer).</li>
                        <li>Personal collection of goods at our premises in Chlumec u Ústí nad Labem - FREE OF CHARGE.</li>
                        <li>The speed of delivery depends on the selected transport service and place of delivery.</li>
                        </ul>
                        
                        <h3>Payment Methods</h3>
                        
                        <ul>
                        <li>In cash. You pay for the goods upon acceptance at the company premises.</li>
                        <li>Cashless transfer based on a pro-forma invoice (you will receive the pro-forma invoice with payment instructions based on which you will make the payment. As soon as the sum is credited to our account, the shipment will be dispatched).</li>
                        <li>Paypal</li>
                        </ul>
                        
                        <h3>Order</h3>
                        
                        <ul>
                        <li>The state of your order can be monitored in the Order menu upon signing in. The order summary and current state of processing is always presented.</li>
                        <li>If the ordered item is in stock and it is ordered before 12 o&#39;clock, it will be dispatched the same day.</li>
                        </ul>
                        
                        <h3>Warranty</h3>
                        
                        <ul>
                        <li>All our goods are warranted for the period of 24 months.</li>
                        </ul>
                        
                        <h3>Goods Returns</h3>
                        
                        <ul>
                        <li>End users (physical persons) can return the goods within 14 days from the date of purchase. The goods must be without any damage and it cannot be returned if it has already been fitted in a vehicle. It should be returned in the original packaging (preferably).</li>
                        <li>Companies may return the goods within 14 days from the date of purchase. Items which are marked as OMV (limited return option) can only be returned upon previous arrangement with the vendor. With such items, a return charge in the amount of 0 - 50% of the purchase price may apply (the charge includes costs for the initial shipment or re-packing of the product and related administrative expenses). Items which are damaged or have already been fitted in a vehicle cannot be returned.</li>
                        <li>Please send us a filled in Goods Return Form together with the returned goods. The information required in this form includes your identification and identification of the returned goods (purchase invoice number, reason for returning the item). This will significantly facilitate the identification of the purchase order. You can download the document from the website footer.</li>
                        <li>In case that the reason for the goods return lies with the buyer, the goods return costs are the buyer&#39;s expense.</li>
                        </ul>
                        
                        <h3>Warranty Complaints</h3>
                        
                        <ul>
                        <li>Complaints are processed in a standard manner. It is necessary to fill in the Warranty Claim Form (can be downloaded from the website footer) and provide all necessary information (fault description, detailed information on the vehicle, diagnostics report - if possible). The more detailed information you provide, the better we can solve the complaint.</li>
                        <li>Remember to specify your contact information and the purchase document number (or enclose a copy).</li>
                        </ul>
                        
                        <h3>What are the advantages of registration?</h3>
                        
                        <ul>
                        <li>Registered users have access to the Order History and related documents.</li>
                        <li>In many cases, better prices apply to registered users.</li>
                        </ul>
                        
                        <h3>Should the fact that I am buying goods from the Czech Republic worry me?</h3>
                        
                        <ul>
                        <li>Of course not. We have been active on the market for over 20 years and we only supply high-quality parts of proven manufacturers which are also in compliance with the provisions of so called Block Exemption (in the sense...). This Block Exemption, in simplified words, grants &ldquo;equal rights&rdquo; to aftermarket parts so that they have the same status as the parts supplied in the networks of OE manufacturers. It means that the part supplied by us will be of the same quality as the part which is fitted into a newly purchased vehicle.  </li>
                        <li>The Czech Republic is an EU member state and a developed, western-type economy. It is situated in the middle of Europe which makes it logistically an ideal place for purchase and resale.</li>
                        <li>The K MOTORSHOP&nbsp;own warehouse is situated near German borders. Therefore, it is easy to provide everyday logistics for the EU market, for the purpose of which the nearby situated DPD logistics centre in Kesselsdorf (Germany) can be used. Every day, a TNT courier collects deliveries for destinations all over the world in our warehouse.</li>
                        <li>We use state-of-the-art technologies and modern trends of e-commerce. All our processes are managed by the Microsoft Dynamics ERP system and they are in compliance with ISO 9001.</li>
                        </ul>
                        
                        <h3>Purchase without VAT</h3>
                        
                        <p>The e-shop prices indicate whether they include or exclude the VAT. The customers are obliged to pay the VAT. The exceptions are:</p>
                        
                        <ul>
                        <li><strong>Companies with VAT registration in EU:</strong> When you specify your VAT number, we can invoice you the price without VAT. Please provide the VAT number already during your registration. When we receive your registration, your VAT number is checked in the EU register to verify that your company is VAT registered. (Subsequent requirements for changes in the documentation and refund claims complicate the entire process to a large degree).</li>
                        <li><strong>Customers outside EU:</strong> Customers from outside EU buy goods without VAT. The tax and customs duties are then determined and paid in the particular country based on the valid local laws and regulations.</li>
                        </ul>
                        
                        <h3>What is the customs duty that I have to pay?</h3>
                        
                        <ul>
                        <li>The duty is paid only in case that the goods are shipped to locations outside EU. The shipments are cleared as they leave the EU territory. The clearance costs are included in the TNT transport price. You will obtain the information on the transport price from us. </li>
                        <li>The VAT and customs duty charges which are to be paid in the country of destination are not included in the price. These charges shall be paid by the recipient in compliance with the laws and regulations in force in the recipient&#39;s country. When the shipment arrives, you have to pay the charges for VAT and customs duties based on the tariffs as applicable in your country. Please contact the respective authorities in your country and ask them for this information.</li>
                        </ul>
                        
                        <h3>Have you not found the part you need?</h3>
                        
                        <ul>
                        <li>In case you have not found what you need, do not hesitate and get in touch with us. We will do our best to obtain the required part for you.</li>
                        <li>In case you have any doubts about the compatibility of a particular part or if you are unable to identify the correct part, do not hesitate and get in touch with us. Let us know what part you are looking for and detailed information about your vehicle (VIN code, motor code, model-type-cubic capacity).</li>
                        </ul> -->
                </div>
            </div>
            <div class="popup mfp-hide" id="changeCountryModal" aria-hidden="true">
                <h3 class="popup__heading" id="changeCountryModalLabel">Choose country for delivery</h3>
                <div id="snippet--changeCountryModal">
                    <form action="https://www.kmotorshop.com/en/content/detail/14" method="post" id="frm-changeCountry">
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
                            <li><a href="../../../en/content/contact.html">Contact Us</a></li>
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
            <form action="https://www.kmotorshop.com/en/content/detail/14" method="post" id="frm-stockStatusMail-sendEmailForm">
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
                    url: "/en/content/detail/14?do=changeCountryForm"
                });
            });
            
            initEventsOnce();
            initEventsWithReload();
            
        </script>
    </body>
</html>
