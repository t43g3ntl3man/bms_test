
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
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create-product">Create Product</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create_car">Create Car</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create_category">Create Category</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create_sub_category">Create Sub Category</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create_engine">Create Engine</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create_engine">Create Engine</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create_vehicle_brand_model">Create Vehicle Brand</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="create-vehicle">Create Vehicle</a></li>
                    <li class="site-nav__list-item"><a class="site-nav__list-link" href="product-list">All Products</a></li>
                    <li class="site-nav__list-item site-nav__list-item--smaller">
                        <a class="site-nav__list-link"  href="category-list">Category List</a>
                    </li>
                    <li class="site-nav__list-item site-nav__list-item--smaller">
                        <a class="site-nav__list-link"  href="sub-category-list">Sub Category List</a>
                    </li>
                    <li class="site-nav__list-item site-nav__list-item--smaller">
                        <a class="site-nav__list-link"  href="all-cars-list">Cars List</a>
                    </li>
                    <li class="site-nav__list-item site-nav__list-item--smaller">
                        <a class="site-nav__list-link"  href="all-engs-list">Engines List</a>
                    </li>
                    <li class="site-nav__list-item site-nav__list-item--smaller">
                        <a class="site-nav__list-link"  href="all-vehicle-brand-model-list">Vehicle Brand Model List</a>
                    </li>
                    <li class="site-nav__list-item site-nav__list-item--smaller">
                        <a class="site-nav__list-link"  href="all-vehs-list">Vehicle List</a>
                    </li>
                    <li class="site-nav__list-item site-nav__list-item--smaller">
                        <a class="site-nav__list-link"  href="reference-list">Reference List</a>
                    </li>
                    <li class="site-nav__list-item site-nav__list-item--smaller"><a class="site-nav__list-link" href="#">Complaints</a>
                </li>
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
        
        <div class="site-header__main-right" style="flex: 0 auto;width:100%">
            
            @if(!Auth::user())
            <div class="site-header__user">
                <!-- <a class="site-header__user-login" title="" href="en/sign/in.html"><span class="icon-user"></span></a> -->
                <a class="site-header__user-lognin" style="font-size:1.6rem"  href="category-list"><span>Category List</span></a>
                <a class="site-header__user-lognin" style="font-size:1.6rem"  href="sub-category-list"><span>Sub Category List</span></a>
                <a class="site-header__user-lognin" style="font-size:1.6rem"  href="all-cars-list"><span>Cars List</span></a>
                <a class="site-header__user-lognin" style="font-size:1.6rem"  href="all-engs-list"><span>Engines List</span></a>
                <a class="site-header__user-lognin" style="font-size:1.6rem"  href="all-vehicle-brand-model-list"><span>Vehicle Brand Model List</span></a>
                <a class="site-header__user-lognin" style="font-size:1.6rem"  href="all-vehs-list"><span>Vehicle List</span></a>
                <a class="site-header__user-lognin" style="font-size:1.6rem"  href="reference-list"><span>Reference List </span></a>

               
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
