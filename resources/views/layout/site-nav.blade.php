<div class="site-header__main" id="site-header__main">
    <div class="site-nav" role="navigation">
        <span class="site-nav__title">
        <span class="icon-menu"></span>Menu
        </span>
        <div class="site-nav__main">
            <span class="site-nav__main-close"><span class="icon-chevron-left"></span></span>
            <nav class="site-nav__list" role="navigation">
                <ul class="site-nav__list-container">
                    <!-- <li class="site-nav__list-item"><a class="site-nav__list-link" href="en/content/brands.html">Brands</a></li>
                        <li class="site-nav__list-item"><a class="site-nav__list-link" href="en/category/detail/2.html">Products</a></li>
                        <li class="site-nav__list-item"><a class="site-nav__list-link" href="en/content/list/2.html">News</a></li>
                        <li class="site-nav__list-item"><a class="site-nav__list-link" href="en/content/list/3.html">Tech. info</a></li>
                        <li class="site-nav__list-item"><a class="site-nav__list-link" href="en/content/contact.html">Contacts</a></li> -->
                    <!-- <li class="site-nav__list-item site-nav__list-item--smaller"><a class="site-nav__list-link" href="en/content/detail/17.html">KMS Data sharing</a></li> -->
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="/brands">Brands</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="/products">Products</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="/contact-us">Contact us</a></li>
                    <li class="site-nav__list-item site-nav__list-item--smaller"><a class="site-nav__list-link" href="/faqs">FAQ</a></li>
                    <li class="site-nav__list-item site-nav__list-item--smaller"><a class="site-nav__list-link" href="/terms-and-condition">Terms And Condition</a></li>
                    <li class="site-nav__list-item site-nav__list-item--smaller"><a class="site-nav__list-link" href="/abput-us">About Us</a></li>
                    @if(Auth::user())
                        <li class="site-nav__list-item site-nav__list-item--smaller"><a class="site-nav__list-link" href="logout">Logout</a></li>
                    @endif
                    <li class="site-nav__list-item"><span class="site-nav__main-country">
                        <a href="#changeCountryModal" class="open-popup open-changecountry">Pakistan</a>
                        </span>
                    </li>
                </ul>
            </nav>
            <!-- <div class="site-nav__main-bottom">
                <div class="site-nav__main-logo">
                    <span class="icon icon-logo"></span> <span class="logotyp">KMOTORSHOP</span>
                </div>
                <p class="site-nav__main-address">K MOTORSHOP s.r.o.<br>
                    Ústecká 408, 403 39 Chlumec
                </p>
                <div class="site-nav__main-contacts">
                    <span><span class="icon icon-phone"></span><a href="tel:+420475209033">00420 475 209 033</a></span>
                    <span><span class="icon icon-Path-10"></span><a href="mailto:info@kmotorshop.com" class="text-reset" >info@kmotorshop.com</a></span>
                </div>
                </div> -->
        </div>
    </div>
    <div class="container site-header__main-container">
        <a class="site-header__main-logo" href="/">
            <!-- <span class="icon-logo"><img src="../www.kmotorshop.com/images/logo_bms.png"></span>
                <span class="logotyp">KMOTOR<wbr>SHOP</span> -->
            <span><img src="../../../images/logo_bms.png">
        <a href="../../../en.html"></a></span>
        <!-- <span class="logotyp">KMOTOR<wbr>SHOP</span> -->
        </a>
        <div class="site-header__main-search">
            <form action="/search" method="post" id="frm-combinedFilterForm" class="" role="search">
                {{ csrf_field() }}
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
                <a href="/cart"><span class="icon-cart"></span></a>
                <div class="itemscart">
                    @php
                    if(Auth::user()){
                        $cart_list = DB::table('carts')->where('user_id', Auth::user()->id)->get();
                        $total = 0;
                        if(sizeof($cart_list)>0){
                            foreach($cart_list as $item){
                                $prod = DB::table('products')->where('id', $item->product_id)->first();
                                $total = (int)$prod->price + $total;
                            }
                            $pcs = sizeof($cart_list);
                        }
                        $pcs = 0;
                    } else {
                        $total = 0; $pcs = 0;
                    }
                    @endphp
                    <div class="text-center">
                        Pcs: {{$pcs}} | Total: ${{$total}}
                    </div>
                    </a>
                </div>
                <div class="incartAlert" id="incartAlert">
                    <span onclick="closeIncartAlert()" class="incart__close js-incartclose"><i class="icon-circle-xmark"></i></span>
                    <span class="incart__heading"><i class="secondary icon-check-circle"></i> Added to cart</span>
                </div>
                <div class="site-header__cart-summary">
                    &#36;0.00
                </div>
            </div>
            <div class="site-header__icon">
                <!--<a n:href="Content:home"><span class="icon-garage"></span></a>-->
            </div>
            @if(!Auth::user())
            <div class="site-header__user">
                <!-- <a class="site-header__user-login" title="" href="en/sign/in.html"><span class="icon-user"></span></a> -->
                <a class="site-header__user-login" title="" href="#"><span class="icon-user"></span></a>
                <div class="site-header__user-popup">
                    <div class="site-header__user-heading"> <span class="icon icon-user"></span> <span>Sign in</span></div>
                    <div id="snippet-signInForm-">
                        <form action="custom-login" method="post" id="frm-signInForm-signInForm">
                            {{ csrf_field() }}
                            <div class="site-form__line">
                                <input type="email" name="email" autocomplete="email" placeholder="Username (e-mail)" class="site-form__input w100" id="frm-signInForm-signInForm-username" required data-nette-rules='[{"op":":filled","msg":"Enter your user name."},{"op":":email","msg":"Please enter a valid email address."},{"op":":email","msg":"Invalid e-mail address."}]'>
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
                            <p>Don't have an account? <a href="/register">Register</a></p>
                            <input type="hidden" name="_do" value="signInForm-signInForm-submit">
                        </form>
                    </div>
                </div>
                <div class="site-header__user-reminder">
                    <span class="site-header__user-reminderclose" title="I´m not interested. Don´t show me this message again."><i class="icon-circle-xmark"></i></span>
                    <h3 class="mt-0">Sign in</h3>
                    <p>As a registered user, you automatically get even better prices.</p>
                </div>
                <div class="site-header__cartAlert" >
                    <span class="site-header__cartAlertclose" title="I´m not interested. Don´t show me this message again."><i class="icon-circle-xmark"></i></span>
                    <h3 class="mt-0">Alert</h3>
                    <p>Cart updated successfully</p>
                </div>
            </div>
            @else
            <div class="site-header__user">
                @php
                    $words = explode(" ", Auth::user()->name);
                    $acronym = "";

                    foreach ($words as $w) {
                    $acronym .= mb_substr($w, 0, 1);
                    }
                @endphp
                <a href="#" title="{{Auth::user()->name}}">
                    <span class="site-header__user-name">
                        {{$acronym}}
                    </span>
                </a>
            </div>
            @endif
        </div>
        
    </div>
</div>
<script type="text/javascript">
    function cartAdded(){
        document.getElementById('incartAlert').style.display = "block"
    }
    function closeIncartAlert(){
        document.getElementById('incartAlert').style.display = "none"
    }
</script>
