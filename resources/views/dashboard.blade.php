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
            </div>
            <div class="flashmessage__container">
                <div id="snippet--flashMessages"></div>
            </div>
            <section class="site-filter" role="region">
                <img class="site-filter__bg" src="images/home-bg.jpg">
                <h1>Select Your Vehicle</h1>
                <h2>Over 100,000 Auto and Truck Parts</h2>
                <div class="container site-filter__container">
                    <div class="site-filter__main">
                        <div class="site-filter__header">
                            <span data-number="1" class="site-filter__header-item site-filter__header-item--active"><i class="icon-car"></i><span>Search by vehicle</span></span>
                            <!-- <span class="site-filter__header-item" data-number="2"><i class="icon-car"></i><span>Search by KBA</span></span> -->
                            <span data-number="3" class="site-filter__header-item"><i class="icon-settings"></i><span>Search by engine</span></span>
                            <span class="site-filter__header-mobile"></span>
                        </div>
                        <div class="site-filter__content">
                            <div data-number="1" class="site-filter__content-item site-filter__content-item--opened" id="snippet-searchByCar-searchByCarForm">
                                <!-- <form action="https://www.kmotorshop.com/en" method="post" id="frm-searchByCar-searchByCarForm"> -->
                                <form action="/search-data-vehicle" method="post" method="post" id="frm-searchByCar-searchByCarForm">
                                    {{ csrf_field() }}
                                    <div class="site-filter__content-box site-filter__content-box--company">
                                        <span class="site-filter__content-number">1</span>
                                        <select name="manu_car" data-placeholder="Select manufacturer..." class="js-select" id="frm-searchByCar-searchByCarForm-manu_car">
                                            @foreach ($cars_search as $id => $car)
                                                <option id="car_{{$car->id}}" value="{{$car->id}}">{{$car->name}}</option>
                                            @endforeach
                                        </select>
                                        <span class="site-skeleton site-skeleton--select site-skeleton-manu"><span class="site-skeleton-device">Loading...</span></span>
                                    </div>
                                    <div class="site-filter__content-box site-filter__content-box--serial" id="snippet-searchByCar-modelsSnippet">
                                        <span class="site-filter__content-number">2</span>
                                        <select name="model" data-placeholder="Select manufacturer first..." class="js-select" id="frm-searchByCar-searchByCarForm-model" >

                                        </select>
                                        <span class="site-skeleton site-skeleton--select site-skeleton-model"><span class="site-skeleton-device">Loading...</span></span>
                                    </div>
                                    <div class="site-filter__content-box site-filter__content-box--type" id="snippet-searchByCar-carsSnippet">
                                        <span class="site-filter__content-number">3</span>
                                        <select name="car" data-placeholder="Select model first..." class="js-select" id="frm-searchByCar-searchByCarForm-car" >

                                        </select>
                                        <span class="site-skeleton site-skeleton--select site-skeleton-type"><span class="site-skeleton-device">Loading...</span></span>
                                    </div>
                                    <div class="site-filter__content-box site-filter__content-box--button">
                                        <button type="submit" name="sendSearchByCar" class="btn btn-primary w-100 hasCaptionAndIcon"><span class="caption">Search</span>&nbsp;&nbsp;<i class="icon icon-find"></i></button>
                                    </div>
                                    <input type="hidden" name="_do" value="searchByCar-searchByCarForm-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                                </form>
                            </div>
                            
                            <div data-number="3" class="site-filter__content-item" id="snippet-searchByMotor-searchByMotorForm">
                                <form action="/search-by-engine" method="post" class="w-100" id="frm-searchByMotor-searchByMotorForm">
                                    {{ csrf_field() }}
                                    <div class="site-filter__content-box site-filter__content-box--motornumber">
                                        <input type="text" name="motorCode" class="site-filter__content-input" placeholder="Enter engine code" id="frm-searchByMotor-searchByMotorForm-motorCode">
                                    </div>
                                    <div class="site-filter__content-box site-filter__content-box--motorseparator">
                                        <span class="sign">/</span>
                                        <span>Or</span>
                                    </div>
                                    <div class="site-filter__content-box site-filter__content-box--motormanu">
                                        <span class="site-filter__content-number">1</span>
                                        <select name="manu_motor" class="js-select" data-placeholder="Select manufacturer..." id="frm-searchByMotor-searchByMotorForm-manu_motor">
                                            <option value=""></option>
                                            <optgroup label="All vehicles">
                                            @foreach ($eng_car_list as $id => $car)
                                                <option id="car_{{$car->id}}" value="{{$car->id}}">{{$car->name}}</option>
                                            @endforeach
                                            </optgroup>
                                        </select>
                                        <span class="site-skeleton site-skeleton--select site-skeleton-manu"><span class="site-skeleton-device">Loading...</span></span>
                                    </div>
                                    <div class="site-filter__content-box site-filter__content-box--motorserial" id="snippet-searchByMotor-motorsSnippet">
                                        <span class="site-filter__content-number">2</span>
                                        <select name="motor" class="js-select" data-placeholder="Select manufacturer first..." id="frm-searchByMotor-searchByMotorForm-motor">
                                            <option value=""></option>
                                        </select>
                                        <span class="site-skeleton site-skeleton--select site-skeleton-motor"><span class="site-skeleton-device">Loading...</span></span>
                                    </div>
                                    <div class="site-filter__content-box  site-filter__content-box--smallbutton">
                                        <button type="submit" name="sendSearchByMotor" class="btn btn-primary w-100 hasCaptionAndIcon"><span class="caption">Search</span>&nbsp;&nbsp;<i class="icon icon-find"></i></button>
                                    </div>
                                    <input type="hidden" name="_do" value="searchByMotor-searchByMotorForm-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
            <h2 class="homepage-heading">Category</h2>
            <section class="all-categories" role="region">
                <div class="all-categories__container">
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-rozvody.png" alt="Timing parts" title="Timing parts" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Timing parts
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-vacky.png" alt="Camshafts" title="Camshafts" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Camshafts
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-pist-vv-pk.png" alt="Pistons / liners / rings" title="Pistons / liners / rings" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Pistons / liners / rings
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-pumpy.png" alt="Pumps" title="Pumps" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Pumps
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-hlavy.png" alt="Cylinder heads" title="Cylinder heads" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Cylinder heads
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-elektro.png" alt="Electric parts" title="Electric parts" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Electric parts
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-filtry.png" alt="Filters" title="Filters" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Filters
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-kliky.png" alt="Crankshafts" title="Crankshafts" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Crankshafts
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                    </div>
                    <div class="all-categories__item all-categories__item--homepage">
                        <div class="all-categories__item-content all-categories__item-content--homepage">
                            <a href="#">
                            <img src="images/products/category-tesneni.png" alt="Gaskets / screws" title="Gaskets / screws" class="all-categories__item-image all-categories__item-image--homepage">
                            </a>
                            <div class="all-categories__item-text all-categories__item-text--homepage">
                                <a href="#">
                                Gaskets / screws
                                </a>
                            </div>
                            <div class="all-categories__item-more">
                                <span class="icon icon-th-large"></span>
                                <span>Show all</span>
                            </div>
                        </div>
                        <div class="all-categories__item all-categories__item--homepage">
                            <div class="all-categories__item-content all-categories__item-content--homepage">
                                <a href="#">
                                <img src="images/products/category-ventily.png" alt="Valves" title="Valves" class="all-categories__item-image all-categories__item-image--homepage">
                                </a>
                                <div class="all-categories__item-text all-categories__item-text--homepage">
                                    <a href="#">
                                    Valves
                                    </a>
                                </div>
                                <div class="all-categories__item-more">
                                    <span class="icon icon-th-large"></span>
                                    <span>Show all</span>
                                </div>
                            </div>
                        </div>
                        <div class="all-categories__item all-categories__item--homepage">
                            <div class="all-categories__item-content all-categories__item-content--homepage">
                                <a href="#">
                                <img src="images/products/category-ostatni.png" alt="Other" title="Other" class="all-categories__item-image all-categories__item-image--homepage">
                                </a>
                                <div class="all-categories__item-text all-categories__item-text--homepage">
                                    <a href="#">
                                    Other
                                    </a>
                                </div>
                                <div class="all-categories__item-more">
                                    <span class="icon icon-th-large"></span>
                                    <span>Show all</span>
                                </div>
                            </div>
                        </div>
                        <div class="all-categories__item all-categories__item--homepage">
                            <div class="all-categories__item-content all-categories__item-content--homepage">
                                <a href="#">
                                <img src="images/products/category-uni.png" alt="Universal parts" title="Universal parts" class="all-categories__item-image all-categories__item-image--homepage">
                                </a>
                                <div class="all-categories__item-text all-categories__item-text--homepage">
                                    <a href="#">
                                    Universal parts
                                    </a>
                                </div>
                                <div class="all-categories__item-more">
                                    <span class="icon icon-th-large"></span>
                                    <span>Show all</span>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            </div>
            <section class="blog-feed" role="region" style="border-color: #273628; border-style: solid; border-width: 40px;">
                <div class="container">
                    <div id="snippet-sliderWidget-sliderWidget">
                        <div class="blog-feed__slider">
                            <div class="blog-feed__item">
                                <div class="blog-feed__item-content">
                                    <a class="blog-feed__item-link" href="#"></a>
                                    <img class="blog-feed__item-bg" src="images/slider/crankshafts.png">
                                </div>
                            </div>
                            <div class="blog-feed__item">
                                <div class="blog-feed__item-content">
                                    <a class="blog-feed__item-link" href="#"></a>
                                    <img class="blog-feed__item-bg" src="images/slider/GASKET.png">
                                </div>
                            </div>
                            <div class="blog-feed__item">
                                <div class="blog-feed__item-content">
                                    <a class="blog-feed__item-link" href="#"></a>
                                    <img class="blog-feed__item-bg" src="images/slider/piston-Copy.png">
                                </div>
                            </div>
                            <div class="blog-feed__item">
                                <div class="blog-feed__item-content">
                                    <a class="blog-feed__item-link" href="#"></a>
                                    <img class="blog-feed__item-bg" src="images/slider/piston-ring.png">
                                </div>
                            </div>
                            <div class="blog-feed__item">
                                <div class="blog-feed__item-content">
                                    <a class="blog-feed__item-link" href="#"></a>
                                    <img class="blog-feed__item-bg" src="images/slider/rebuilt-kit-Copy.png">
                                </div>
                            </div>
                            <div class="blog-feed__item">
                                <div class="blog-feed__item-content">
                                    <a class="blog-feed__item-link" href="#"></a>
                                    <img class="blog-feed__item-bg" src="images/slider/TIMING-CHAIN-KIT.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="homepage-bookmark" role="region">
                <div class="homepage-bookmark__header">
                    <div class="container">
                        <ul class="homepage-bookmark__header-container">
                        </ul>
                    </div>
                </div>
                <div class="homepage-bookmark__body">
                <section class="homepage-bookmark__body-item homepage-bookmark__body-item--active new-products" role="region" data-number="1">
                    <div class="container">
                        <h2 class="homepage-heading">Chosen for you</h2>
                        <div id="snippet-articleListTop-">
                            <div id="article-list-carousel-63a082981248f" class="news-carousel" data-interval="false">
                                <div class="news-carousel__container">
                                	@foreach ($recomended as $item)
                                        <div>
                                            <div class="product-item product-item--slider">
                                                <div class="product-item__image">
                                                    <a class="product-item__link" href="/product/{{$item->id}}"></a>
                                                    <img class="card-img-top p-2" src="http://localhost:8001/storage/{{$item->image}}" title="Rocker Arm, engine timing - VV0034 ET ENGINETEAM - 2453142880, MD352127, 50006481" onerror="this.onerror=null; this.src='images/nophoto.jpg'" alt="VV0034, Rocker Arm, engine timing, Rocker Arm, ET ENGINETEAM, Mitsubishi 2,5D/TD 1983+, 2453142880, MD352127, 50006481, 2453142501, 24531-42501, 2453142801, 24531-42801, 24531-42880, 95M0502HYU, BZ-MI002, MD153990, MD307724, MD324966, MD352128">
                                                    <div class="product-item__badges">
                                                        <span class="badge badge-success">We recommend!</span>
                                                    </div>
                                                </div>
                                                <div class="product-item__text product-item--slider__text">
                                                    <img src="{{$item->brand->image}}" alt="{{$item->brandName}}" title="{{$item->brandName}}" class="brand-logo "/>
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
                                                        @if (sizeof($item->criteria_names)==2 )
                                                        <div class="product-item__properties-header">
                                                            <span>Show all</span>
                                                            <span>Show less</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="product-item__pricebox">
                                                    <div class="product-item__pricebox-left text-center">
                                                        <span class="product-item__pricebox-main">
                                                        ${{$item->price - (($item->price * 40)/ 100)}}
                                                        </span>
                                                        <span class="product-item__pricebox-vat">
                                                        (${{$item->price - (($item->price * 40)/ 100)}} without VAT 0%)
                                                        </span>
                                                    </div>
                                                    <!-- <div class="product-item__pricebox-right">
                                                        <div id="snippet-articleListTop-articleStockInternal-61596-">
                                                            <table class="product-detail__buy-stock" >
                                                                <tr>
                                                                    <th>
                                                                        
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
                                                <div class="product-item__bottom">
                                                    @if(Auth::user())
                                                    <div class="product-item__buy">
                                                        <form action="/add-to-cart" method="post" class="product-detail__buy-form ajax" id="frm-articleListTop-articleBuy-61596-addToCart">
                                                            {{ csrf_field() }}
                                                            <div class="product-detail__buy-input">
                                                                <input type="number" name="articleQuantity" placeholder="quantity:" min="1" step="1" pattern="\d*" id="frm-articleListTop-articleBuy-61596-addToCart-articleQuantity" required data-nette-rules='[{"op":":filled","msg":"Quantity is required."},{"op":":integer","msg":"Please enter a valid integer."},{"op":":integer","msg":"Quantity must be a whole number."}]' value="1">
                                                            </div>
                                                            <input type="hidden" name="articleId" value="{{$item->id}}"><input type="hidden" name="increaseQuantity" value="1"><input type="hidden" name="_do" value="articleListTop-articleBuy-61596-addToCart-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                                                            <button onclick="cartAdded()" type="submit" name="buy_button" class="product-detail__buy-button buy-button btn btn-primary btn-addtocart hasCaptionAndNoIcon"><span class="caption">Add to cart</span></button>
                                                        </form>
                                                    </div>
                                                    @else
                                                    <div class="product-item__buy">
                                                        <div class="product-detail__buy-form ajax" >
                                                            <div class="product-detail__buy-input">
                                                                <input type="number" name="articleQuantity" placeholder="quantity:" min="1" step="1" pattern="\d*" id="frm-articleListTop-articleBuy-61596-addToCart-articleQuantity" required data-nette-rules='[{"op":":filled","msg":"Quantity is required."},{"op":":integer","msg":"Please enter a valid integer."},{"op":":integer","msg":"Quantity must be a whole number."}]' value="1">
                                                            </div>
                                                            <input type="hidden" name="articleId" value="{{$item->id}}"><input type="hidden" name="increaseQuantity" value="1"><input type="hidden" name="_do" value="articleListTop-articleBuy-61596-addToCart-submit"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                                                            <a href="login" class="product-detail btn btn-primary btn-addtocart hasCaptionAndNoIcon">Add to cart</a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <script>
                                                        LiveFormOptions = {
                                                        	messageParentClass: 'product-item__buy'
                                                        };
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <section class="advantages" role="region">
                <div class="container">
                    <h1 class="advantages__heading">More than 100.000 spare parts in stock!</h1>
                </div>
                <div class="container">
                    <div class="advantages__container">
                        <div class="advantages__item">
                            <span class="icon icon-quality" title="Original quality"></span>
                            <div class="advantages__item-content">
                                <h2 class="advantages__item-heading">Original quality</h2>
                                <p class="advantages__item-text">Most of our suppliers sell their products also to OE. This means, the newly produced car is equipped with an identical part, as we supply through aftermarket channels.</p>
                            </div>
                        </div>
                        <div class="advantages__item">
                            <span class="icon icon-Group-41" title="Next day delivery"></span>
                            <div class="advantages__item-content">
                                <h2 class="advantages__item-heading">Next day delivery</h2>
                                <p class="advantages__item-text">Within CZ, SK and DE, goods in stock are delivered the next day.</p>
                            </div>
                        </div>
                        <div class="advantages__item">
                            <span class="icon icon-package" title="Wide range"></span>
                            <div class="advantages__item-content">
                                <h2 class="advantages__item-heading">Wide range</h2>
                                <p class="advantages__item-text">Over 100&nbsp;000 items in range. 15&nbsp;000 items in stock.</p>
                            </div>
                        </div>
                        <div class="advantages__item">
                            <span class="icon icon-places" title="We deliver worldwide"></span>
                            <div class="advantages__item-content">
                                <h2 class="advantages__item-heading">We deliver worldwide</h2>
                                <p class="advantages__item-text">We will deliver your order wherever you need</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="popup mfp-hide" id="changeCountryModal" aria-hidden="true">
                <h3 class="popup__heading" id="changeCountryModalLabel">Choose country for delivery</h3>
                <div id="snippet--changeCountryModal">
                    <form action="https://www.kmotorshop.com/en" method="post" id="frm-changeCountry">
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
                    const carModelsById = {!! json_encode($cars_search) !!};
                    
                	$('#' + "frm-searchByCar-searchByCarForm-manu_car").off('change').on('change', function () {
                        var manuId = $(this).val();
                        let carModels = [];
                        for(i=0; i<carModelsById.length; i++){
                            console.log(carModelsById[i].id, manuId)
                            if(carModelsById[i].id == manuId){
                                carModels = carModelsById[i];
                                console.log(carModelsById[i])
                                break;
                            }
                        }
                        const optionHtml = carModels['veh_list'].map(carModel => `<option value="${carModel.id}">${carModel.name}</option>`).join('');
                        for(i=0; i<carModels['veh_list'].length; i++){
                            mod = carModels['veh_list'][i].veh_names
                            carHtml = ''
                            for(j=0; j<mod.length; j++){
                                console.log('mod[j]')
                                console.log(mod[j])
                                carHtml = carHtml+`<option value="${mod[j].id}">${mod[j].name}</option>`
                            }
                        }
                        document.getElementById('frm-searchByCar-searchByCarForm-model').innerHTML  = optionHtml;
                        document.getElementById('frm-searchByCar-searchByCarForm-car').innerHTML  = carHtml;
                        
                        $(modelSelect).select2({
                            width: '100%'
                        });
                
                		
                	});
                	$('#' + "frm-searchByCar-searchByCarForm-model").off('change').on('change', function () {

                        var manuId = $('#frm-searchByCar-searchByCarForm-manu_car').val();
                        let carModels = [];
                        for(i=0; i<carModelsById.length; i++){
                            console.log(carModelsById[i].id, manuId)
                            if(carModelsById[i].id == manuId){
                                carModels = carModelsById[i];
                                console.log(carModelsById[i])
                                break;
                            }
                        }
                        var modelId = $(this).val()
                        console.log('1')
                        console.log('2')
                        mod = carModels['veh_list']
                        carHtml = ''
                        let id_to_save = 0;
                        for(x=0; x<mod.length; x++){
                            if(mod[x].id == modelId){
                                id_to_save = x;
                            }
                        }
                        for(j=0; j<mod[id_to_save]['veh_names'].length; j++){
                            console.log(modelId, manuId, carModels['veh_list'][j])
                            console.log('mod[j]')
                            console.log(mod[j])
                            carHtml = carHtml+`<option value="${mod[id_to_save]['veh_names'][j].id}">${mod[id_to_save]['veh_names'][j].name}</option>`
                                                              
                        }
                        // for(i=0; i<carModels['veh_list'].length; i++){
                        // }
                        // document.getElementById('frm-searchByCar-searchByCarForm-model').innerHTML  = optionHtml;
                        console.log(carHtml)
                        document.getElementById('frm-searchByCar-searchByCarForm-car').innerHTML  = carHtml;
                        
                        $(modelSelect).select2({
                            width: '100%'
                        });
            
                		
                	});
                	// $('#' + "frm-searchByCar-searchByCarForm-car").off('change').on('change', function () {
                	// 	$(this).blur();
                    //     var bla = $('#').val();
                	// 	var carId = $(this).val();
                	// 	if(carId) {
                	// 		$('.ajax-loading').show(0);
                	// 	}
                
                	// 	$.nette.ajax({
                	// 		type: 'GET',
                	// 		url: "/en?searchByCar-id=__DEVICE_ID__&do=searchByCar-carChange".replace("__DEVICE_ID__", $(this).val()),
                	// 		off: ['spinner'],
                	// 		complete: function() {
                	// 			toggleNumber();
                	// 		}
                	// 	});
                	// });
                    // const modelSelect = document.querySelector('#frm-searchByCar-searchByCarForm-manu_car');
                    // const carModelDropdown = $('select[name="model"]');

                    // // Define the car models options as an object
                    // const carModelsById = {!! json_encode($cars_search) !!};

                    // // Add an event listener to the car-dropdown that listens for changes in its selected value
                    // $('#' + "frm-searchByCar-searchByCarForm-manu_car").off('change').on('change', function () {
                    //     const selectedValue = modelSelect.value;
                    //     console.log('carModelsById');
                    //     console.log(carModelsById);
                    //     const carModels = carModelsById[selectedValue] || [];
                    //     const optionHtml = carModels.map(carModel => `<option value="${carModel.id}">${carModel.name}</option>`).join('');
                    //     carModelDropdown.innerHTML = optionHtml;
                    //     $(carModelDropdown).select2({
                    //         width: '100%'
                    //     });
                    // });
                    // $('#' + "frm-searchByCar-searchByCarForm-manu_car").off('change').on('change', function () {
                        
                    // });

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
                    const carModelsById = {!! json_encode($eng_car_list) !!};
                	$('#' + "frm-searchByMotor-searchByMotorForm-manu_motor").off('change').on('change', function () {
                		var manuId = $(this).val();
                        let carModels = [];
                        for(i=0; i<carModelsById.length; i++){
                            console.log(carModelsById[i].id, manuId)
                            if(carModelsById[i].id == manuId){
                                carModels = carModelsById[i];
                                console.log(carModelsById[i])
                                break;
                            }
                        }
                        // console.log(carModels['all_eng_list'])
                        const optionHtml = carModels['all_eng_list'].map(carModel => `<option value="${carModel.id}">${carModel.name}</option>`).join('');
                        carHtml = ''
                        for(i=0; i<carModels['all_eng_list'].length; i++){
                            mod = carModels['all_eng_list'][i]
                            console.log('mod[j]')
                            console.log(mod)
                            carHtml = carHtml+`<option value="${mod.id}">${mod.name}</option>`
                            // for(j=0; j<mod.length; j++){
                            // }
                        }
                        // document.getElementById('frm-searchByMotor-searchByMotorForm-manu_motor').innerHTML  = optionHtml;
                        document.getElementById('frm-searchByMotor-searchByMotorForm-motor').innerHTML  = carHtml;
                        
                	});
                	// $('#' + "frm-searchByMotor-searchByMotorForm-motor").off('change').on('change', function () {
                	// 	$(this).blur();
                	// 	$('input[name=motorCode]').val(null);
                	// 	var motorId = $(this).val();
                	// 	if(motorId) {
                	// 		$('.ajax-loading').show(0);
                	// 	}
                
                	// 	$.nette.ajax({
                	// 		type: 'GET',
                	// 		url: "/en?searchByMotor-id=__DEVICE_ID__&do=searchByMotor-motorChange".replace("__DEVICE_ID__", $(this).val()),
                	// 		off: ['spinner'],
                	// 		complete: function() {
                	// 			toggleNumber();
                	// 		}
                	// 	});
                
                	// });
                
                	// $("input[name=motorCode]").on("keydown", function () {
                	// 	manuSelect.val(null);
                	// 	manuSelect.select2({
                	// 		width: '100%',
                	// 		placeholder: function(){
                	// 			$(this).data('placeholder');
                	// 		}
                	// 	});
                	// 	motorSelect.val(null);
                	// 	motorSelect.select2({
                	// 		width: '100%',
                	// 		placeholder: function(){
                	// 			$(this).data('placeholder');
                	// 		}
                	// 	});
                	// });
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
