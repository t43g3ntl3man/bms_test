<!doctype html>
<html lang="en"> @include('layout/head')

<body>
    <header role="banner" class="site-header">
        <div id="site-header__top" class="site-header__top">
            <div class="site-header__top-callus">
               
            </div>
            <div class="site-header__top-center">
                <div class="site-header__top-contacts"> <a href="tel:+1231212"><span class="icon-phone"></span>12 123 123 3</a> <a href="mailto:info@bms.com"><span class="icon-Path-10"></span>info@bmsautos.com</a> </div>
                <div class="site-header__top-openhours">

                </div>
            </div>
            
        </div> @include('layout/site-nav')
    </header>

    <main class="site-main" role="main">
        <div id="snippet--hierarchy">
            <section class="site-breadcrumbs" role="region">
                <div class="container">
                    <ul class="site-breadcrumbs__list">
                        <li class="site-breadcrumbs__list-item">
                            <a href="/en"><span class="icon-garage"></span></a>
                        </li>
                        <li class="site-breadcrumbs__list-item site-breadcrumbs__list-item--active">Search result - {{$keyword}}</li>
                    </ul>
                </div>
            </section>

        </div>
        <div class="flashmessage__container">
            <div id="snippet--flashMessages"></div>
        </div>
        <section class="category" role="region">
            <div class="container">
                <div class="category__container">
                    <!-- <div class="category-sidebar">
                        <div class="category-sidebar__inner">
                            <div id="snippet-articleFilter-">
                                <div id="filter-container">
                                    <span class="category-sidebar__close"><span class="icon-x-circle"></span></span>
                                    <form action="/en/article-list/search-list/pm006900" method="post" class="filter-data" id="frm-articleFilter-filter">
                                        <span class="category-sidebar__heading">Category</span>
                                        <div class="category-sidebar__content">
                                            <ul class="category-sidebar__list" id="category-sidebar__categories_tree" data-source="tree-shop">
                                                <li class="category-sidebar__item" data-id="263">
                                                    <div class="category-sidebar__item-haschild">
                                                        <label class="site-check">
                                                            <span class="site-check__text">
                                                                <a href="#" class="category_tree--href" data-id="263">Pistons / liners / rings</a>
                                                            </span>
                                                            <input type="checkbox" data-id="263" class="category_tree--checkbox" name="categoryTree[263]" id="category_tree--checkbox-263" ""="">
                                                            <span class="site-check__checkmark"></span>
                                                        </label>
                                                        <span class="category-sidebar__item-switch">+</span>
                                                    </div>
                                                    <ul id="category_tree--ul-263" data-id="263" class="category-sidebar__submenu">
                                                        <li class="category-sidebar__item" data-id="394">
                                                            <div class="category-sidebar__item-plain">
                                                                <label class="site-check">
                                                                    <span class="site-check__text">
                                                                        <a href="#" class="category_tree--href" data-id="394">Repair set - complete piston with rings and pin (for 1 engine)</a>
                                                                    </span>
                                                                    <input type="checkbox" data-id="394" class="category_tree--checkbox" name="categoryTree[394]" id="category_tree--checkbox-394" ""="">
                                                                    <span class="site-check__checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="category-sidebar__item" data-id="319">
                                                            <div class="category-sidebar__item-plain">
                                                                <label class="site-check">
                                                                    <span class="site-check__text">
                                                                        <a href="#" class="category_tree--href" data-id="319">Complete piston with rings and pin</a>
                                                                    </span>
                                                                    <input type="checkbox" data-id="319" class="category_tree--checkbox" name="categoryTree[319]" id="category_tree--checkbox-319" ""="">
                                                                    <span class="site-check__checkmark"></span>
                                                                </label>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="filter-bits">
                                            <span class="category-sidebar__heading">Labels</span>
                                            <div class="category-sidebar__content category-sidebar__content--tags">

                                                <div class="site-form__line site-form__line--pack">


                                                    <label for="frm-articleFilter-filter-filterCheckbox-1" class="site-check js-focused"><span class="site-check__text">In stock</span><input type="checkbox" name="filterCheckbox[1]" class="custom-control-input" data-filter-bit="1" id="frm-articleFilter-filter-filterCheckbox-1"><span class="site-check__checkmark"></span></label>
                                                </div>


                                                <div class="site-form__line site-form__line--pack">


                                                    <label for="frm-articleFilter-filter-filterCheckbox-2" class="site-check js-focused"><span class="site-check__text">We recommend</span><input type="checkbox" name="filterCheckbox[2]" class="custom-control-input" data-filter-bit="2" id="frm-articleFilter-filter-filterCheckbox-2"><span class="site-check__checkmark"></span></label>
                                                </div>


                                                <div class="site-form__line site-form__line--pack">


                                                    <label for="frm-articleFilter-filter-filterCheckbox-4" class="site-check js-focused"><span class="site-check__text">Sale</span><input type="checkbox" name="filterCheckbox[4]" class="custom-control-input" data-filter-bit="4" id="frm-articleFilter-filter-filterCheckbox-4" disabled=""><span class="site-check__checkmark"></span></label>
                                                </div>


                                                <div class="site-form__line site-form__line--pack">


                                                    <label for="frm-articleFilter-filter-filterCheckbox-32" class="site-check js-focused"><span class="site-check__text">Unboxed</span><input type="checkbox" name="filterCheckbox[32]" class="custom-control-input" data-filter-bit="32" id="frm-articleFilter-filter-filterCheckbox-32" disabled=""><span class="site-check__checkmark"></span></label>
                                                </div>


                                                <div class="site-form__line site-form__line--pack">


                                                    <label for="frm-articleFilter-filter-filterCheckbox-64" class="site-check js-focused"><span class="site-check__text">OE</span><input type="checkbox" name="filterCheckbox[64]" class="custom-control-input" data-filter-bit="64" id="frm-articleFilter-filter-filterCheckbox-64" disabled=""><span class="site-check__checkmark"></span></label>
                                                </div>

                                            </div>

                                            <span class="category-sidebar__heading">Product group</span>
                                            <div class="category-sidebar__content category-sidebar__content--select">
                                                <div class="site-skeleton site-skeleton--select_low site-skeleton-filter" style="display: none;"><span class="site-skeleton-text">Loading</span></div>

                                                <div class="site-form__line site-form__line--pack">
                                                    <label class="col-form-label" for="frm-articleFilter-filter-filterSelectbox-256"></label>

                                                    <select name="filterSelectbox[256][]" class="js-multiselect select2-hidden-accessible" multiple="" data-filter-bit="256" data-placeholder="Select" id="frm-articleFilter-filter-filterSelectbox-256" data-select2-id="select2-data-frm-articleFilter-filter-filterSelectbox-256" tabindex="-1" aria-hidden="true">
                                                        <option value="443">Piston</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-9-yo3o" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                                <ul class="select2-selection__rendered" id="select2-frm-articleFilter-filter-filterSelectbox-256-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-frm-articleFilter-filter-filterSelectbox-256-container" placeholder="Select" style="width: 100%;"></textarea></span>
                                                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>

                                            </div>

                                            <span class="category-sidebar__heading">Brand</span>
                                            <div class="category-sidebar__content category-sidebar__content--select">
                                                <div class="site-skeleton site-skeleton--select_low site-skeleton-filter" style="display: none;"><span class="site-skeleton-text">Loading</span></div>

                                                <div class="site-form__line site-form__line--pack">
                                                    <label class="col-form-label" for="frm-articleFilter-filter-filterSelectbox-128"></label>

                                                    <select name="filterSelectbox[128][]" class="js-multiselect select2-hidden-accessible" multiple="" data-filter-bit="128" data-placeholder="Select" id="frm-articleFilter-filter-filterSelectbox-128" data-select2-id="select2-data-frm-articleFilter-filter-filterSelectbox-128" tabindex="-1" aria-hidden="true">
                                                        <option value="4514">ET ENGINETEAM</option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-10-skg1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                                <ul class="select2-selection__rendered" id="select2-frm-articleFilter-filter-filterSelectbox-128-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-frm-articleFilter-filter-filterSelectbox-128-container" placeholder="Select" style="width: 100%;"></textarea></span>
                                                            </span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>

                                            </div>
                                            <span class="category-sidebar__heading">New item</span>
                                            <div class="category-sidebar__content category-sidebar__content--select">
                                                <div class="site-skeleton site-skeleton--select_low site-skeleton-filter" style="display: none;"><span class="site-skeleton-text">Loading</span></div>

                                                <div class="site-form__line site-form__line--pack js-focused">
                                                    <label class="col-form-label" for="frm-articleFilter-filter-filterSelectbox-8"></label>

                                                    <input type="text" name="filterSelectbox[8]" class="empty-selectbox form-control" id="frm-articleFilter-filter-filterSelectbox-8" disabled="" value="No results">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="category-sidebar__buttons">
                                            <a href="/en/article-list/search-list/pm006900" class="btn ord-process-control filter-buttons">Clear filters</a>
                                        </div>
                                        <input type="hidden" name="_do" value="articleFilter-filter-submit">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="category-content" id="snippet--listHeader">
                        <!-- <section class="site-filter" role="region">
                            <div class="site-filter__container">
                                <div class="site-filter__main site-filter__main--category">
                                    <div class="site-filter__header site-filter__header--category">
                                        <div class="site-filter__header-left">
                                            <span data-number="1" class="site-filter__header-item site-filter__header-item--category site-filter__header-item--active"><i class="icon-car"></i><span>Search by vehicle</span></span>
                                            <span class="site-filter__header-item site-filter__header-item--category" data-number="2"><i class="icon-car"></i><span>Search by KBA</span></span>
                                            <span data-number="3" class="site-filter__header-item site-filter__header-item--category"><i class="icon-settings"></i><span>Search by engine</span></span>
                                        </div>
                                        <div class="site-filter__header-right">
                                            <div class="site-filter__header-text site-filter-header-text--help site-filter__header-text--active" data-number="1">
                                                <p>Choose your car manufacturer, model and engine type. This will allow our system to find parts for your vehicle.</p>
                                            </div>
                                            <div class="site-filter__header-text" data-number="2">
                                                <p>Choose a car by KBA.</p>
                                            </div>
                                            <div class="site-filter__header-text" data-number="3">
                                                <p>Choose an engine.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="site-filter__content site-filter__content--category">
                                        <div data-number="1" class="site-filter__content-item site-filter__content-item--opened" id="snippet-searchByCar-searchByCarForm">

                                            <form action="/en/article-list/search-list/pm006900" method="post" id="frm-searchByCar-searchByCarForm">
                                                <div class="site-filter__content-box site-filter__content-box--company">
                                                    <span class="site-filter__content-number">1</span>
                                                    <select name="manu_car" data-placeholder="Select manufacturer..." class="js-select select2-hidden-accessible" id="frm-searchByCar-searchByCarForm-manu_car" data-select2-id="select2-data-frm-searchByCar-searchByCarForm-manu_car" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="select2-data-2-rls0"></option>
                                                        <option value="-1">... all manufacturers</option>
                                                        <optgroup label="Favourite vehicles">
                                                            <option value="2">ALFA ROMEO</option>
                                                            <option value="5">AUDI</option>
                                                            <option value="16">BMW</option>
                                                            <option value="21">CITROËN</option>
                                                            <option value="24">DAF</option>
                                                            <option value="35">FIAT</option>
                                                            <option value="36">FORD</option>
                                                            <option value="45">HONDA</option>
                                                            <option value="183">HYUNDAI</option>
                                                            <option value="55">IVECO</option>
                                                            <option value="184">KIA</option>
                                                            <option value="69">MAN</option>
                                                            <option value="72">MAZDA</option>
                                                            <option value="74">MERCEDES-BENZ</option>
                                                            <option value="77">MITSUBISHI</option>
                                                            <option value="80">NISSAN</option>
                                                            <option value="84">OPEL</option>
                                                            <option value="88">PEUGEOT</option>
                                                            <option value="93">RENAULT</option>
                                                            <option value="95">ROVER</option>
                                                            <option value="103">SCANIA</option>
                                                            <option value="104">SEAT</option>
                                                            <option value="106">SKODA</option>
                                                            <option value="1138">SMART</option>
                                                            <option value="111">TOYOTA</option>
                                                            <option value="120">VOLVO</option>
                                                            <option value="121">VW</option>
                                                        </optgroup>
                                                        <optgroup label="All vehicles">
                                                            <option value="3854">ABARTH</option>
                                                            <option value="609">AC</option>
                                                            <option value="1505">ACURA</option>
                                                            <option value="1">AEBI</option>
                                                            <option value="127">AEC</option>
                                                            <option value="5487">AEOLUS</option>
                                                            <option value="1033">AGCO</option>
                                                            <option value="128">AGRALE</option>
                                                            <option value="1480">AIXAM</option>
                                                            <option value="130">ALCATEL</option>
                                                            <option value="5440">ALEXANDER DENNIS</option>
                                                            <option value="2">ALFA ROMEO</option>
                                                            <option value="3687">ALLGAIER</option>
                                                            <option value="4414">ALPHEON</option>
                                                            <option value="866">ALPINA</option>
                                                            <option value="810">ALPINE</option>
                                                            <option value="2246">AMC</option>
                                                            <option value="2775">AM GENERAL</option>
                                                            <option value="4489">AMW</option>
                                                            <option value="3526">ANADOL</option>
                                                            <option value="2847">ANCHI</option>
                                                            <option value="3971">ANDORIA</option>
                                                            <option value="2848">ANFINI</option>
                                                            <option value="2524">APRILIA</option>
                                                            <option value="3829">ARMATRAC</option>
                                                            <option value="1360">ARO</option>
                                                            <option value="3495">ARTEGA</option>
                                                            <option value="2241">ASHOK LEYLAND</option>
                                                            <option value="879">ASIA MOTORS</option>
                                                            <option value="2242">ASKAM</option>
                                                            <option value="881">ASTON MARTIN</option>
                                                            <option value="131">ASTRA</option>
                                                            <option value="5">AUDI</option>
                                                            <option value="2858">AUDI (FAW)</option>
                                                            <option value="6400">AUDI (SAIC)</option>
                                                            <option value="6">AUSTIN</option>
                                                            <option value="1538">AUSTIN-HEALEY</option>
                                                            <option value="799">AUTOBIANCHI</option>
                                                            <option value="3">AUTO UNION</option>
                                                            <option value="3842">AUTOZAM</option>
                                                            <option value="2845">AUVERLAND</option>
                                                            <option value="2707">AVANTI</option>
                                                            <option value="132">AVIA</option>
                                                            <option value="133">AVIA (MISA)</option>
                                                            <option value="2162">AYATS</option>
                                                            <option value="4626">BAHMAN</option>
                                                            <option value="3773">BAIC</option>
                                                            <option value="4036">BAIC HUANSU</option>
                                                            <option value="5671">BAIC-ORV</option>
                                                            <option value="6302">BAIC RUIXIANG</option>
                                                            <option value="4266">BAIC WEIWANG</option>
                                                            <option value="3190">BAIYUN</option>
                                                            <option value="2849">BAJAJ TEMPO</option>
                                                            <option value="3764">BAOJUN (SGMW)</option>
                                                            <option value="2906">BAOLONG</option>
                                                            <option value="134">BARKAS</option>
                                                            <option value="9">BARREIROS</option>
                                                            <option value="3960">BASAK</option>
                                                            <option value="1039">BAUTZ</option>
                                                            <option value="3071">BAW</option>
                                                            <option value="1040">BCS</option>
                                                            <option value="10">BEDFORD</option>
                                                            <option value="5670">BEIJING</option>
                                                            <option value="3915">BELARUS</option>
                                                            <option value="4446">BENDE</option>
                                                            <option value="2532">BENELLI</option>
                                                            <option value="815">BENTLEY</option>
                                                            <option value="865">BERKHOF</option>
                                                            <option value="11">BERLIET</option>
                                                            <option value="1485">BERTONE</option>
                                                            <option value="3762">BESTURN (FAW)</option>
                                                            <option value="4315">BETA</option>
                                                            <option value="3729">BHARATBENZ</option>
                                                            <option value="4368">BIMOTA</option>
                                                            <option value="1486">BITTER</option>
                                                            <option value="5738">BIZZARRINI</option>
                                                            <option value="2243">BMC</option>
                                                            <option value="3830">BM TRACTORS</option>
                                                            <option value="16">BMW</option>
                                                            <option value="3124">BMW (BRILLIANCE)</option>
                                                            <option value="4439">BOGDAN</option>
                                                            <option value="5173">BOLWELL</option>
                                                            <option value="1537">BOND</option>
                                                            <option value="136">BORGWARD</option>
                                                            <option value="137">BOVA</option>
                                                            <option value="4161">BRABUS</option>
                                                            <option value="3831">BRANSON</option>
                                                            <option value="2395">BREDAMENARINIBUS</option>
                                                            <option value="2749">BREMACH</option>
                                                            <option value="3076">BRILLIANCE</option>
                                                            <option value="1487">BRISTOL</option>
                                                            <option value="3688">BUCHER</option>
                                                            <option value="4048">BUELL</option>
                                                            <option value="18">BUESSING</option>
                                                            <option value="788">BUGATTI</option>
                                                            <option value="816">BUICK</option>
                                                            <option value="3136">BUICK (SGM)</option>
                                                            <option value="3122">BYD</option>
                                                            <option value="819">CADILLAC</option>
                                                            <option value="3528">CADILLAC (SGM)</option>
                                                            <option value="2554">CAGIVA</option>
                                                            <option value="1488">CALLAWAY</option>
                                                            <option value="3770">C.A.M</option>
                                                            <option value="1489">CARBODIES</option>
                                                            <option value="3194">CARLARKY</option>
                                                            <option value="1048">CARRARO</option>
                                                            <option value="661">CASE IH</option>
                                                            <option value="1490">CATERHAM</option>
                                                            <option value="937">CATERPILLAR</option>
                                                            <option value="3678">CHAMONIX</option>
                                                            <option value="4609">CHANA</option>
                                                            <option value="2852">CHANGAN</option>
                                                            <option value="2889">CHANGFENG</option>
                                                            <option value="2853">CHANGHE</option>
                                                            <option value="1491">CHECKER</option>
                                                            <option value="3038">CHENGLONG</option>
                                                            <option value="2887">CHERY</option>
                                                            <option value="138">CHEVROLET</option>
                                                            <option value="3527">CHEVROLET (SGM)</option>
                                                            <option value="3651">CHEVROLET (SGMW)</option>
                                                            <option value="20">CHRYSLER</option>
                                                            <option value="3646">CHRYSLER (BBDC)</option>
                                                            <option value="5521">CHRYSLER (SOUEAST)</option>
                                                            <option value="4177">CHTC AUTO</option>
                                                            <option value="5596">CIIMO</option>
                                                            <option value="21">CITROËN</option>
                                                            <option value="2891">CITROËN (DF-PSA)</option>
                                                            <option value="750">CLAAS</option>
                                                            <option value="3772">CMC</option>
                                                            <option value="5338">CNJ</option>
                                                            <option value="23">COMMER</option>
                                                            <option value="4214">COWIN</option>
                                                            <option value="716">CUMMINS</option>
                                                            <option value="4896">CUPRA</option>
                                                            <option value="139">DACIA</option>
                                                            <option value="2901">DADI</option>
                                                            <option value="3872">DAEDONG</option>
                                                            <option value="4052">DAELIM</option>
                                                            <option value="185">DAEWOO</option>
                                                            <option value="24">DAF</option>
                                                            <option value="25">DAIHATSU</option>
                                                            <option value="3274">DAIHATSU (FAW)</option>
                                                            <option value="26">DAIMLER</option>
                                                            <option value="1493">DALLAS</option>
                                                            <option value="807">DATSUN</option>
                                                            <option value="4267">DAYUN</option>
                                                            <option value="1494">DE LOREAN</option>
                                                            <option value="140">DENNIS</option>
                                                            <option value="4071">DERBI</option>
                                                            <option value="3069">DERWAYS</option>
                                                            <option value="2784">DESOTO</option>
                                                            <option value="1495">DE TOMASO</option>
                                                            <option value="751">DEUTZ-FAHR</option>
                                                            <option value="4269">DFSK</option>
                                                            <option value="29">DODGE</option>
                                                            <option value="5507">DODGE (SOUEAST)</option>
                                                            <option value="3659">DONGFENG</option>
                                                            <option value="2854">DONGFENG (DFAC)</option>
                                                            <option value="4264">DONGFENG FENGDU</option>
                                                            <option value="3152">DONGFENG XIAOKANG</option>
                                                            <option value="2855">DONGNAN (SOUEAST)</option>
                                                            <option value="4658">DONKERVOORT</option>
                                                            <option value="5141">DORCEN</option>
                                                            <option value="3497">DR</option>
                                                            <option value="30">DRÖGMÖLLER</option>
                                                            <option value="4468">DS</option>
                                                            <option value="3999">DS (CAPSA)</option>
                                                            <option value="2759">DUCATI</option>
                                                            <option value="824">EAGLE</option>
                                                            <option value="142">EBRO</option>
                                                            <option value="4288">ECM</option>
                                                            <option value="3652">EFFA</option>
                                                            <option value="3618">EFFEDI</option>
                                                            <option value="1057">EICHER</option>
                                                            <option value="3332">EMGRAND</option>
                                                            <option value="165">ENASA</option>
                                                            <option value="3704">ENGLON</option>
                                                            <option value="4259">ENRANGER</option>
                                                            <option value="143">ERF</option>
                                                            <option value="2857">EUNOS</option>
                                                            <option value="5522">EVERUS</option>
                                                            <option value="5190">FAC</option>
                                                            <option value="1060">FAHR</option>
                                                            <option value="2924">FAP</option>
                                                            <option value="6089">FARGO</option>
                                                            <option value="145">FAUN</option>
                                                            <option value="3610">FAW</option>
                                                            <option value="5808">FAW (HONGTA)</option>
                                                            <option value="2909">FAW (JILIN)</option>
                                                            <option value="2890">FAW (TIANJIN)</option>
                                                            <option value="6276">FEIDI</option>
                                                            <option value="752">FENDT</option>
                                                            <option value="5486">FENGON</option>
                                                            <option value="2862">FENGSHEN</option>
                                                            <option value="2863">FENGXING</option>
                                                            <option value="700">FERRARI</option>
                                                            <option value="3821">FERRARI AGRI</option>
                                                            <option value="35">FIAT</option>
                                                            <option value="2381">FIATAGRI</option>
                                                            <option value="3761">FIAT (GAC)</option>
                                                            <option value="3131">FIAT (NANJING)</option>
                                                            <option value="3738">FISKER</option>
                                                            <option value="3771">FODAY</option>
                                                            <option value="829">FODEN TRUCKS</option>
                                                            <option value="2850">FORCE</option>
                                                            <option value="36">FORD</option>
                                                            <option value="5998">FORD AFRICA</option>
                                                            <option value="2864">FORD ASIA &amp; OCEANIA</option>
                                                            <option value="1496">FORD AUSTRALIA</option>
                                                            <option value="3125">FORD (CHANGAN)</option>
                                                            <option value="3656">FORD (JMC)</option>
                                                            <option value="808">FORD OTOSAN</option>
                                                            <option value="776">FORD USA</option>
                                                            <option value="4189">FORLAND</option>
                                                            <option value="2865">FORTA</option>
                                                            <option value="6363">FORTHING</option>
                                                            <option value="2867">FOTON</option>
                                                            <option value="147">FREIGHTLINER</option>
                                                            <option value="775">FSO</option>
                                                            <option value="2875">FUQI</option>
                                                            <option value="3741">FUSO (MITSUBISHI)</option>
                                                            <option value="3196">GAC</option>
                                                            <option value="5475">GALLOPER</option>
                                                            <option value="2791">GARDNER</option>
                                                            <option value="4289">GASGAS</option>
                                                            <option value="148">GAZ</option>
                                                            <option value="2590">GEELY</option>
                                                            <option value="4473">GENESIS</option>
                                                            <option value="831">GEO</option>
                                                            <option value="4054">GILERA</option>
                                                            <option value="832">GINAF</option>
                                                            <option value="1498">GINETTA</option>
                                                            <option value="5209">GIOTTI VICTORIA</option>
                                                            <option value="812">GLAS</option>
                                                            <option value="3697">GLEAGLE</option>
                                                            <option value="39">GMC</option>
                                                            <option value="5208">GME</option>
                                                            <option value="3158">GOLDEN DRAGON</option>
                                                            <option value="1063">GOLDONI</option>
                                                            <option value="2902">GONOW</option>
                                                            <option value="3997">GONOW (GAC)</option>
                                                            <option value="2903">GREAT WALL</option>
                                                            <option value="4640">GROZ</option>
                                                            <option value="3500">GRUAU</option>
                                                            <option value="1025">GUELDNER</option>
                                                            <option value="4608">GÜLERYÜZ</option>
                                                            <option value="2249">GURGEL</option>
                                                            <option value="2866">HAFEI</option>
                                                            <option value="3036">HAIMA (FAW)</option>
                                                            <option value="3913">HAIMA (ZHENGZHOU)</option>
                                                            <option value="42">HANOMAG HENSCHEL</option>
                                                            <option value="4610">HANTENG</option>
                                                            <option value="4055">HARLEY-DAVIDSON</option>
                                                            <option value="4692">HATTAT</option>
                                                            <option value="3968">HAVAL</option>
                                                            <option value="3562">HAWTAI</option>
                                                            <option value="4450">HEIBAO</option>
                                                            <option value="4268">HENGTONG</option>
                                                            <option value="44">HENSCHEL</option>
                                                            <option value="4087">HERCULES</option>
                                                            <option value="150">HEULIEZ</option>
                                                            <option value="4773">HICOM</option>
                                                            <option value="4176">HIGER</option>
                                                            <option value="2794">HILLMAN</option>
                                                            <option value="1499">HINDUSTAN</option>
                                                            <option value="151">HINO</option>
                                                            <option value="4314">HMRacing</option>
                                                            <option value="1500">HOBBYCAR</option>
                                                            <option value="801">HOLDEN</option>
                                                            <option value="45">HONDA</option>
                                                            <option value="3126">HONDA (DONGFENG)</option>
                                                            <option value="3129">HONDA (GAC)</option>
                                                            <option value="2871">HONGQI</option>
                                                            <option value="4488">HOREX</option>
                                                            <option value="3276">HSV</option>
                                                            <option value="2872">HUALI</option>
                                                            <option value="4258">HUANGHAI</option>
                                                            <option value="4255">HUASONG</option>
                                                            <option value="4320">HUAYANG</option>
                                                            <option value="3155">HUIZHONG</option>
                                                            <option value="1506">HUMMER</option>
                                                            <option value="4287">HUSABERG</option>
                                                            <option value="4241">HUSQVARNA</option>
                                                            <option value="4056">HYOSUNG</option>
                                                            <option value="183">HYUNDAI</option>
                                                            <option value="3123">HYUNDAI (BEIJING)</option>
                                                            <option value="3128">HYUNDAI (HUATAI)</option>
                                                            <option value="3507">ICML</option>
                                                            <option value="50">IKARUS</option>
                                                            <option value="152">IME</option>
                                                            <option value="4542">INBUS</option>
                                                            <option value="1507">INDIGO</option>
                                                            <option value="6576">INEOS</option>
                                                            <option value="1526">INFINITI</option>
                                                            <option value="4211">INFINITI (DFAC)</option>
                                                            <option value="52">INNOCENTI</option>
                                                            <option value="3677">INOKOM</option>
                                                            <option value="2460">INTERNATIONAL</option>
                                                            <option value="53">INTERNATIONAL HARV.</option>
                                                            <option value="3084">IRAN KHODRO</option>
                                                            <option value="2115">IRISBUS</option>
                                                            <option value="2927">IRIZAR</option>
                                                            <option value="1508">IRMSCHER</option>
                                                            <option value="1509">ISDERA</option>
                                                            <option value="5736">ISORIVOLTA</option>
                                                            <option value="54">ISUZU</option>
                                                            <option value="4393">ISUZU (JIANGXI)</option>
                                                            <option value="3139">ISUZU (QINGLING)</option>
                                                            <option value="55">IVECO</option>
                                                            <option value="4683">IZH</option>
                                                            <option value="2873">JAC</option>
                                                            <option value="56">JAGUAR</option>
                                                            <option value="4614">JAGUAR (CHERY)</option>
                                                            <option value="4074">JAWA</option>
                                                            <option value="837">JCB</option>
                                                            <option value="5599">JDMC</option>
                                                            <option value="882">JEEP</option>
                                                            <option value="2851">JEEP (BJC)</option>
                                                            <option value="4454">JEEP (GAC FCA)</option>
                                                            <option value="1511">JENSEN</option>
                                                            <option value="5398">JETTA</option>
                                                            <option value="2908">JIANGNAN</option>
                                                            <option value="2907">JIEFANG</option>
                                                            <option value="3849">JIEFANG (FAW)</option>
                                                            <option value="2888">JINBEI</option>
                                                            <option value="4179">JINCHENG</option>
                                                            <option value="3040">JMC</option>
                                                            <option value="755">JOHN DEERE</option>
                                                            <option value="3993">JONWAY</option>
                                                            <option value="5699">JOYFUN AUTO</option>
                                                            <option value="4180">JOYLONG</option>
                                                            <option value="4265">KAMA</option>
                                                            <option value="2453">KAMAZ</option>
                                                            <option value="153">KAROSA</option>
                                                            <option value="3286">KARRY</option>
                                                            <option value="4445">KARSAN</option>
                                                            <option value="59">KÄSSBOHRER</option>
                                                            <option value="4182">KAVZ</option>
                                                            <option value="1131">KAWASAKI</option>
                                                            <option value="4181">KAWEI AUTO</option>
                                                            <option value="4495">KEEWAY</option>
                                                            <option value="60">KHD</option>
                                                            <option value="184">KIA</option>
                                                            <option value="3127">KIA (DYK)</option>
                                                            <option value="3805">KING LONG</option>
                                                            <option value="3716">KINGSTAR</option>
                                                            <option value="3833">KIOTI</option>
                                                            <option value="4163">KOENIGSEGG</option>
                                                            <option value="976">KRAMER</option>
                                                            <option value="4070">KREIDLER</option>
                                                            <option value="2760">KTM</option>
                                                            <option value="977">KUBOTA</option>
                                                            <option value="2621">KYMCO</option>
                                                            <option value="63">LADA</option>
                                                            <option value="701">LAMBORGHINI</option>
                                                            <option value="64">LANCIA</option>
                                                            <option value="979">LANDINI</option>
                                                            <option value="1820">LAND ROVER</option>
                                                            <option value="4282">LAND ROVER (CHERY)</option>
                                                            <option value="2589">LANDWIND (JMC)</option>
                                                            <option value="4075">LAVERDA MOTORCYCLES</option>
                                                            <option value="3804">LAZ</option>
                                                            <option value="1380">LDV</option>
                                                            <option value="5530">LEOPAARD</option>
                                                            <option value="5194">LEVC</option>
                                                            <option value="842">LEXUS</option>
                                                            <option value="65">LEYLAND</option>
                                                            <option value="156">LEYLAND DAF</option>
                                                            <option value="2407">LEYLAND-INNOCENTI</option>
                                                            <option value="66">LIAZ</option>
                                                            <option value="3086">LIFAN</option>
                                                            <option value="1513">LIGIER</option>
                                                            <option value="1200">LINCOLN</option>
                                                            <option value="5512">LINCOLN (CHANGAN)</option>
                                                            <option value="3679">LOBINI</option>
                                                            <option value="5672">LORINSER</option>
                                                            <option value="802">LOTUS</option>
                                                            <option value="3661">LOTUS (YOUNGMAN)</option>
                                                            <option value="3047">LTI</option>
                                                            <option value="1515">LUAZ</option>
                                                            <option value="3742">LUXGEN</option>
                                                            <option value="4612">LYNK &amp; CO</option>
                                                            <option value="67">MACK</option>
                                                            <option value="68">MAGIRUS-DEUTZ</option>
                                                            <option value="1280">MAHINDRA</option>
                                                            <option value="3554">MAHINDRA RENAULT</option>
                                                            <option value="4060">MALAGUTI</option>
                                                            <option value="69">MAN</option>
                                                            <option value="2905">MAPLE (SMA)</option>
                                                            <option value="2601">MARBUS</option>
                                                            <option value="1516">MARCOS</option>
                                                            <option value="5170">MARTIN MOTORS</option>
                                                            <option value="908">MARUTI</option>
                                                            <option value="3549">MARUTI SUZUKI</option>
                                                            <option value="771">MASERATI</option>
                                                            <option value="669">MASSEY FERGUSON</option>
                                                            <option value="2105">MATRA</option>
                                                            <option value="3300">MAXUS</option>
                                                            <option value="2164">MAYBACH</option>
                                                            <option value="2245">MAZ</option>
                                                            <option value="72">MAZDA</option>
                                                            <option value="3532">MAZDA (CHANGAN)</option>
                                                            <option value="3138">MAZDA (FAW)</option>
                                                            <option value="3551">MAZ-MAN</option>
                                                            <option value="4061">MBK</option>
                                                            <option value="3914">MCCORMICK</option>
                                                            <option value="1518">MCLAREN</option>
                                                            <option value="843">MCW</option>
                                                            <option value="845">MEGA</option>
                                                            <option value="74">MERCEDES-BENZ</option>
                                                            <option value="3645">MERCEDES-BENZ (BBDC)</option>
                                                            <option value="3522">MERCEDES-BENZ (FJDA)</option>
                                                            <option value="161">MERCURY</option>
                                                            <option value="1520">METROCAB</option>
                                                            <option value="75">MG</option>
                                                            <option value="3133">MG (NANJING)</option>
                                                            <option value="3838">MG (SAIC)</option>
                                                            <option value="4219">MICROCAR</option>
                                                            <option value="1521">MIDDLEBRIDGE</option>
                                                            <option value="1522">MINELLI</option>
                                                            <option value="1523">MINI</option>
                                                            <option value="5257">MINICORD</option>
                                                            <option value="77">MITSUBISHI</option>
                                                            <option value="3648">MITSUBISHI (BBDC)</option>
                                                            <option value="3650">MITSUBISHI (BJC)</option>
                                                            <option value="3837">MITSUBISHI (GAC)</option>
                                                            <option value="3658">MITSUBISHI (SOUEAST)</option>
                                                            <option value="2904">MITSUOKA</option>
                                                            <option value="803">MORGAN</option>
                                                            <option value="78">MORRIS</option>
                                                            <option value="813">MOSKVICH</option>
                                                            <option value="4062">MOTO GUZZI</option>
                                                            <option value="5204">MPM MOTORS</option>
                                                            <option value="79">MULTICAR</option>
                                                            <option value="2761">MV AGUSTA</option>
                                                            <option value="670">MWM</option>
                                                            <option value="4063">MZ</option>
                                                            <option value="3132">NAC IVECO (NAVECO)</option>
                                                            <option value="2227">NAVISTAR</option>
                                                            <option value="3070">NAZA</option>
                                                            <option value="4277">NDY</option>
                                                            <option value="162">NEOPLAN</option>
                                                            <option value="5525">NEW BAOJUN</option>
                                                            <option value="2637">NEW HOLLAND</option>
                                                            <option value="80">NISSAN</option>
                                                            <option value="3141">NISSAN (DFAC)</option>
                                                            <option value="2910">NISSAN (ZHENGZHOU)</option>
                                                            <option value="3625">NOBLE</option>
                                                            <option value="81">NSU</option>
                                                            <option value="1141">OLDSMOBILE</option>
                                                            <option value="1527">OLTCIT</option>
                                                            <option value="83">OM</option>
                                                            <option value="84">OPEL</option>
                                                            <option value="849">OPTARE</option>
                                                            <option value="1529">OSCA</option>
                                                            <option value="2929">OTOKAR</option>
                                                            <option value="164">PADANE</option>
                                                            <option value="4164">PAGANI</option>
                                                            <option value="1530">PANOZ</option>
                                                            <option value="1531">PANTHER</option>
                                                            <option value="3820">PASQUALI</option>
                                                            <option value="2256">PEGASO</option>
                                                            <option value="1533">PERODUA</option>
                                                            <option value="88">PEUGEOT</option>
                                                            <option value="3531">PEUGEOT (DF-PSA)</option>
                                                            <option value="4392">PFANZELT</option>
                                                            <option value="4659">PGO</option>
                                                            <option value="4078">PGO MOTORCYCLES</option>
                                                            <option value="181">PIAGGIO</option>
                                                            <option value="3046">PININFARINA</option>
                                                            <option value="3282">PLAXTON</option>
                                                            <option value="850">PLYMOUTH</option>
                                                            <option value="5152">POLARIS</option>
                                                            <option value="3154">POLARSUN</option>
                                                            <option value="4817">POLESTAR</option>
                                                            <option value="774">PONTIAC</option>
                                                            <option value="92">PORSCHE</option>
                                                            <option value="851">PREMIER</option>
                                                            <option value="778">PROTON</option>
                                                            <option value="1580">PUCH</option>
                                                            <option value="880">PUMA</option>
                                                            <option value="3740">PYEONGHWA (PMC)</option>
                                                            <option value="3839">QOROS</option>
                                                            <option value="3689">RAM</option>
                                                            <option value="1534">RANGER</option>
                                                            <option value="4660">RAVON</option>
                                                            <option value="1536">RAYTON FISSORE</option>
                                                            <option value="773">RELIANT</option>
                                                            <option value="3284">RELY</option>
                                                            <option value="93">RENAULT</option>
                                                            <option value="4538">RENAULT (DFAC)</option>
                                                            <option value="694">RENAULT TRUCKS</option>
                                                            <option value="4290">REX</option>
                                                            <option value="3285">RIICH</option>
                                                            <option value="1539">RILEY</option>
                                                            <option value="3202">ROEWE (SAIC)</option>
                                                            <option value="705">ROLLS-ROYCE</option>
                                                            <option value="4708">ROMANITAL</option>
                                                            <option value="95">ROVER</option>
                                                            <option value="4386">ROYAL ENFIELD</option>
                                                            <option value="4152">RUF</option>
                                                            <option value="99">SAAB</option>
                                                            <option value="4064">SACHS</option>
                                                            <option value="1543">SAFRAR</option>
                                                            <option value="4592">SAIPA</option>
                                                            <option value="674">SAME</option>
                                                            <option value="4260">SAMSUNG</option>
                                                            <option value="1544">SAN</option>
                                                            <option value="171">SANTANA</option>
                                                            <option value="1545">SAO</option>
                                                            <option value="1497">SATURN</option>
                                                            <option value="101">SAURER</option>
                                                            <option value="102">SAVIEM</option>
                                                            <option value="103">SCANIA</option>
                                                            <option value="2714">SCION</option>
                                                            <option value="104">SEAT</option>
                                                            <option value="4763">SEAZ</option>
                                                            <option value="2488">SETRA</option>
                                                            <option value="3848">SHAANXI</option>
                                                            <option value="5133">SHERCO</option>
                                                            <option value="2942">SHIBAURA</option>
                                                            <option value="3156">SHUANGHUAN</option>
                                                            <option value="105">SIMCA</option>
                                                            <option value="3855">SINOTRUK (CNHTC)</option>
                                                            <option value="174">SISU</option>
                                                            <option value="106">SKODA</option>
                                                            <option value="3530">SKODA (SVW)</option>
                                                            <option value="5259">SKYWELL (KAIWO)</option>
                                                            <option value="1138">SMART</option>
                                                            <option value="2931">SOLARIS</option>
                                                            <option value="675">SOLO</option>
                                                            <option value="3657">SOUEAST</option>
                                                            <option value="3153">SOYAT</option>
                                                            <option value="1549">SPECTRE</option>
                                                            <option value="4627">SPERANZA</option>
                                                            <option value="2755">SPYKER</option>
                                                            <option value="4010">SRT</option>
                                                            <option value="175">SSANGYONG</option>
                                                            <option value="1550">STANDARD AUTOMOBILE</option>
                                                            <option value="2810">STANGUELLINI</option>
                                                            <option value="1540">STERLING</option>
                                                            <option value="176">STEYR</option>
                                                            <option value="107">SUBARU</option>
                                                            <option value="109">SUZUKI</option>
                                                            <option value="3143">SUZUKI (CHANGAN)</option>
                                                            <option value="3199">SUZUKI (CHANGHE)</option>
                                                            <option value="4245">SYM</option>
                                                            <option value="3680">TAC</option>
                                                            <option value="4292">TAGAZ</option>
                                                            <option value="110">TALBOT</option>
                                                            <option value="177">TAM</option>
                                                            <option value="178">TATA</option>
                                                            <option value="179">TATRA</option>
                                                            <option value="3443">TAZZARI</option>
                                                            <option value="6175">TD Cars</option>
                                                            <option value="2667">TEMSA</option>
                                                            <option value="860">TERBERG-BENSCHOP</option>
                                                            <option value="3328">TESLA</option>
                                                            <option value="4644">THAIRUNG</option>
                                                            <option value="3048">TIANMA</option>
                                                            <option value="3157">TIANQI MEIYA</option>
                                                            <option value="6119">TIMOR</option>
                                                            <option value="5999">T-KING</option>
                                                            <option value="1551">TOFAS</option>
                                                            <option value="4449">TONGBAO</option>
                                                            <option value="4448">TONGJIAFU</option>
                                                            <option value="2913">TONGTIAN</option>
                                                            <option value="111">TOYOTA</option>
                                                            <option value="3137">TOYOTA (FAW)</option>
                                                            <option value="3130">TOYOTA (GAC)</option>
                                                            <option value="187">TRABANT</option>
                                                            <option value="112">TRIUMPH</option>
                                                            <option value="4421">TROLIGA BUS</option>
                                                            <option value="3681">TROLLER</option>
                                                            <option value="861">TVR</option>
                                                            <option value="1553">UAZ</option>
                                                            <option value="3620">UD TRUCKS</option>
                                                            <option value="3159">UFO</option>
                                                            <option value="1554">UMM</option>
                                                            <option value="115">UNIC-SIMCA</option>
                                                            <option value="3763">URAL</option>
                                                            <option value="4762">UZ-DAEWOO</option>
                                                            <option value="2671">VALTRA</option>
                                                            <option value="116">VAN HOOL</option>
                                                            <option value="117">VAUXHALL</option>
                                                            <option value="3750">VDL</option>
                                                            <option value="2166">VEB FZ.-WERKE</option>
                                                            <option value="4636">VENIRAUTO</option>
                                                            <option value="3799">VENUCIA</option>
                                                            <option value="4069">VESPA</option>
                                                            <option value="4256">VICTORY</option>
                                                            <option value="3806">VISEON</option>
                                                            <option value="2144">VM</option>
                                                            <option value="120">VOLVO</option>
                                                            <option value="4167">VOLVO ASIA</option>
                                                            <option value="5735">VOLVO BM</option>
                                                            <option value="3533">VOLVO (CHANGAN)</option>
                                                            <option value="3752">VPG</option>
                                                            <option value="4607">VUHL</option>
                                                            <option value="121">VW</option>
                                                            <option value="2859">VW (FAW)</option>
                                                            <option value="3035">VW (SVW)</option>
                                                            <option value="3191">WANFENG</option>
                                                            <option value="186">WARTBURG</option>
                                                            <option value="182">WESTERN STAR</option>
                                                            <option value="907">WESTFIELD</option>
                                                            <option value="1558">WIESMANN</option>
                                                            <option value="1541">WOLSELEY</option>
                                                            <option value="2874">WULING</option>
                                                            <option value="3140">WULING (SGMW)</option>
                                                            <option value="3186">XINKAI</option>
                                                            <option value="3819">YAGMUR</option>
                                                            <option value="1021">YAMAHA</option>
                                                            <option value="3796">YCACO</option>
                                                            <option value="4002">YEMA</option>
                                                            <option value="3193">YUEJIN</option>
                                                            <option value="2816">YUGO</option>
                                                            <option value="1559">YULON</option>
                                                            <option value="4740">ZAMYAD</option>
                                                            <option value="4788">ZAROOQ</option>
                                                            <option value="124">ZASTAVA</option>
                                                            <option value="1139">ZAZ</option>
                                                            <option value="4604">ZENOS CARS</option>
                                                            <option value="1111">ZETOR</option>
                                                            <option value="2736">ZHONGHUA (BRILLIANCE)</option>
                                                            <option value="2911">ZHONGXING (ZX AUTO)</option>
                                                            <option value="4033">ZINORO</option>
                                                            <option value="3160">ZOTYE</option>
                                                            <option value="678">ZUENDAPP</option>
                                                        </optgroup>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-bx77" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-frm-searchByCar-searchByCarForm-manu_car-container" aria-controls="select2-frm-searchByCar-searchByCarForm-manu_car-container"><span class="select2-selection__rendered" id="select2-frm-searchByCar-searchByCarForm-manu_car-container" role="textbox" aria-readonly="true" title="Select manufacturer..."><span class="select2-selection__placeholder">Select manufacturer...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <span class="site-skeleton site-skeleton--select site-skeleton-manu" style="display: none;"><span class="site-skeleton-device">Loading...</span></span>
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--serial" id="snippet-searchByCar-modelsSnippet">
                                                    <span class="site-filter__content-number">2</span>
                                                    <select name="model" data-placeholder="Select manufacturer first..." class="js-select select2-hidden-accessible" id="frm-searchByCar-searchByCarForm-model" disabled="" data-select2-id="select2-data-frm-searchByCar-searchByCarForm-model" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="select2-data-3-ni0o" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-frm-searchByCar-searchByCarForm-model-container" aria-controls="select2-frm-searchByCar-searchByCarForm-model-container"><span class="select2-selection__rendered" id="select2-frm-searchByCar-searchByCarForm-model-container" role="textbox" aria-readonly="true" title="Select manufacturer first..."><span class="select2-selection__placeholder">Select manufacturer first...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <span class="site-skeleton site-skeleton--select site-skeleton-model" style="display: none;"><span class="site-skeleton-device">Loading...</span></span>
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--type" id="snippet-searchByCar-carsSnippet">
                                                    <span class="site-filter__content-number">3</span>
                                                    <select name="car" data-placeholder="Select model first..." class="js-select select2-hidden-accessible" id="frm-searchByCar-searchByCarForm-car" disabled="" data-select2-id="select2-data-frm-searchByCar-searchByCarForm-car" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" data-select2-id="select2-data-4-hczl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="true" aria-labelledby="select2-frm-searchByCar-searchByCarForm-car-container" aria-controls="select2-frm-searchByCar-searchByCarForm-car-container"><span class="select2-selection__rendered" id="select2-frm-searchByCar-searchByCarForm-car-container" role="textbox" aria-readonly="true" title="Select model first..."><span class="select2-selection__placeholder">Select model first...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <span class="site-skeleton site-skeleton--select site-skeleton-type" style="display: none;"><span class="site-skeleton-device">Loading...</span></span>
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--button">
                                                    <button type="submit" name="sendSearchByCar" class="btn btn-primary w-100 hasCaptionAndIcon"><span class="caption">Search</span>&nbsp;&nbsp;<i class="icon icon-find"></i></button>
                                                </div>
                                                <input type="hidden" name="_do" value="searchByCar-searchByCarForm-submit">
                                            </form>

                                        </div>

                                        <div data-number="2" class="site-filter__content-item">
                                            <form action="/en/article-list/search-list/pm006900" method="post" id="frm-searchByCarNumbers-searchByCarNumbersForm" novalidate="">
                                                <div class="site-filter__content-box site-filter__content-box--kba">
                                                    <input type="text" name="kbaCode1" maxlength="4" placeholder="KBA-4" class="site-filter__content-input no-live-validation w-50 inputs-auto-switch" id="frm-searchByCarNumbers-searchByCarNumbersForm-kbaCode1" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;},{&quot;op&quot;:&quot;:filled&quot;,&quot;rules&quot;:[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter both parts of KBA number.&quot;}],&quot;control&quot;:&quot;kbaCode2&quot;}]" data-lfv-message-id="frm-searchByCarNumbers-searchByCarNumbersForm-kbaCode1_message">
                                                    <div id="frm-searchByCarNumbers-searchByCarNumbersForm-kbaCode1_message"></div>
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--codeand">
                                                    +
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--kba">
                                                    <input type="text" name="kbaCode2" maxlength="3" placeholder="KBA-3" class="site-filter__content-input no-live-validation w-50 inputs-auto-switch" id="frm-searchByCarNumbers-searchByCarNumbersForm-kbaCode2" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;},{&quot;op&quot;:&quot;:filled&quot;,&quot;rules&quot;:[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter both parts of KBA number.&quot;}],&quot;control&quot;:&quot;kbaCode1&quot;}]" data-lfv-message-id="frm-searchByCarNumbers-searchByCarNumbersForm-kbaCode2_message">
                                                    <div id="frm-searchByCarNumbers-searchByCarNumbersForm-kbaCode2_message"></div>
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--smallbutton">
                                                    <button type="submit" name="send" class="btn btn-primary w-100 hasCaptionAndIcon" data-lfv-initialized="true" data-lfv-message-id="frm-searchByCarNumbers-searchByCarNumbersForm-send_message"><span class="caption">Search</span>&nbsp;&nbsp;<i class="icon icon-find"></i></button>
                                                    <div id="frm-searchByCarNumbers-searchByCarNumbersForm-send_message"></div>
                                                </div>
                                                <input type="hidden" name="_do" value="searchByCarNumbers-searchByCarNumbersForm-submit" data-lfv-initialized="true" data-lfv-message-id="frm-searchByCarNumbers-searchByCarNumbersForm-_do_message">
                                                <div id="frm-searchByCarNumbers-searchByCarNumbersForm-_do_message"></div>
                                            </form>

                                        </div>
                                        <div data-number="3" class="site-filter__content-item" id="snippet-searchByMotor-searchByMotorForm">

                                            <form action="/en/article-list/search-list/pm006900" method="post" class="w-100" id="frm-searchByMotor-searchByMotorForm">
                                                <div class="site-filter__content-box site-filter__content-box--motornumber">
                                                    <input type="text" name="motorCode" class="site-filter__content-input" placeholder="Enter engine code" id="frm-searchByMotor-searchByMotorForm-motorCode">
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--motorseparator">
                                                    <span class="sign">/</span>
                                                    <span>Or</span>
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--motormanu">
                                                    <span class="site-filter__content-number">1</span>
                                                    <select name="manu_motor" class="js-select select2-hidden-accessible" data-placeholder="Select manufacturer..." id="frm-searchByMotor-searchByMotorForm-manu_motor" data-select2-id="select2-data-frm-searchByMotor-searchByMotorForm-manu_motor" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="select2-data-6-qrui"></option>
                                                        <option value="0">...all manufacturers</option>
                                                        <optgroup label="Favourite vehicles">
                                                            <option value="2">ALFA ROMEO</option>
                                                            <option value="5">AUDI</option>
                                                            <option value="16">BMW</option>
                                                            <option value="21">CITROËN</option>
                                                            <option value="24">DAF</option>
                                                            <option value="35">FIAT</option>
                                                            <option value="36">FORD</option>
                                                            <option value="45">HONDA</option>
                                                            <option value="183">HYUNDAI</option>
                                                            <option value="55">IVECO</option>
                                                            <option value="184">KIA</option>
                                                            <option value="69">MAN</option>
                                                            <option value="72">MAZDA</option>
                                                            <option value="74">MERCEDES-BENZ</option>
                                                            <option value="77">MITSUBISHI</option>
                                                            <option value="80">NISSAN</option>
                                                            <option value="84">OPEL</option>
                                                            <option value="88">PEUGEOT</option>
                                                            <option value="93">RENAULT</option>
                                                            <option value="95">ROVER</option>
                                                            <option value="103">SCANIA</option>
                                                            <option value="104">SEAT</option>
                                                            <option value="106">SKODA</option>
                                                            <option value="1138">SMART</option>
                                                            <option value="111">TOYOTA</option>
                                                            <option value="120">VOLVO</option>
                                                            <option value="121">VW</option>
                                                        </optgroup>
                                                        <optgroup label="All vehicles">
                                                            <option value="3854">ABARTH</option>
                                                            <option value="609">AC</option>
                                                            <option value="1505">ACURA</option>
                                                            <option value="5172">ADE</option>
                                                            <option value="1">AEBI</option>
                                                            <option value="127">AEC</option>
                                                            <option value="5487">AEOLUS</option>
                                                            <option value="3701">AGCO SISU POWER</option>
                                                            <option value="128">AGRALE</option>
                                                            <option value="1480">AIXAM</option>
                                                            <option value="130">ALCATEL</option>
                                                            <option value="2">ALFA ROMEO</option>
                                                            <option value="3687">ALLGAIER</option>
                                                            <option value="4414">ALPHEON</option>
                                                            <option value="866">ALPINA</option>
                                                            <option value="810">ALPINE</option>
                                                            <option value="2246">AMC</option>
                                                            <option value="2775">AM GENERAL</option>
                                                            <option value="4489">AMW</option>
                                                            <option value="3526">ANADOL</option>
                                                            <option value="2847">ANCHI</option>
                                                            <option value="3971">ANDORIA</option>
                                                            <option value="2848">ANFINI</option>
                                                            <option value="2524">APRILIA</option>
                                                            <option value="1360">ARO</option>
                                                            <option value="3495">ARTEGA</option>
                                                            <option value="2241">ASHOK LEYLAND</option>
                                                            <option value="879">ASIA MOTORS</option>
                                                            <option value="2242">ASKAM</option>
                                                            <option value="881">ASTON MARTIN</option>
                                                            <option value="5">AUDI</option>
                                                            <option value="2858">AUDI (FAW)</option>
                                                            <option value="6400">AUDI (SAIC)</option>
                                                            <option value="6">AUSTIN</option>
                                                            <option value="1538">AUSTIN-HEALEY</option>
                                                            <option value="799">AUTOBIANCHI</option>
                                                            <option value="3">AUTO UNION</option>
                                                            <option value="3842">AUTOZAM</option>
                                                            <option value="2845">AUVERLAND</option>
                                                            <option value="2707">AVANTI</option>
                                                            <option value="132">AVIA</option>
                                                            <option value="133">AVIA (MISA)</option>
                                                            <option value="4626">BAHMAN</option>
                                                            <option value="3773">BAIC</option>
                                                            <option value="4036">BAIC HUANSU</option>
                                                            <option value="5671">BAIC-ORV</option>
                                                            <option value="6302">BAIC RUIXIANG</option>
                                                            <option value="4266">BAIC WEIWANG</option>
                                                            <option value="3190">BAIYUN</option>
                                                            <option value="2849">BAJAJ TEMPO</option>
                                                            <option value="3764">BAOJUN (SGMW)</option>
                                                            <option value="2906">BAOLONG</option>
                                                            <option value="134">BARKAS</option>
                                                            <option value="9">BARREIROS</option>
                                                            <option value="3071">BAW</option>
                                                            <option value="10">BEDFORD</option>
                                                            <option value="5670">BEIJING</option>
                                                            <option value="3915">BELARUS</option>
                                                            <option value="4446">BENDE</option>
                                                            <option value="2532">BENELLI</option>
                                                            <option value="815">BENTLEY</option>
                                                            <option value="11">BERLIET</option>
                                                            <option value="1485">BERTONE</option>
                                                            <option value="3762">BESTURN (FAW)</option>
                                                            <option value="4315">BETA</option>
                                                            <option value="3729">BHARATBENZ</option>
                                                            <option value="4368">BIMOTA</option>
                                                            <option value="1486">BITTER</option>
                                                            <option value="5738">BIZZARRINI</option>
                                                            <option value="16">BMW</option>
                                                            <option value="3124">BMW (BRILLIANCE)</option>
                                                            <option value="4439">BOGDAN</option>
                                                            <option value="5173">BOLWELL</option>
                                                            <option value="1537">BOND</option>
                                                            <option value="136">BORGWARD</option>
                                                            <option value="4161">BRABUS</option>
                                                            <option value="3831">BRANSON</option>
                                                            <option value="2749">BREMACH</option>
                                                            <option value="3076">BRILLIANCE</option>
                                                            <option value="1487">BRISTOL</option>
                                                            <option value="4048">BUELL</option>
                                                            <option value="18">BUESSING</option>
                                                            <option value="788">BUGATTI</option>
                                                            <option value="816">BUICK</option>
                                                            <option value="3136">BUICK (SGM)</option>
                                                            <option value="3122">BYD</option>
                                                            <option value="819">CADILLAC</option>
                                                            <option value="3528">CADILLAC (SGM)</option>
                                                            <option value="2554">CAGIVA</option>
                                                            <option value="1488">CALLAWAY</option>
                                                            <option value="3770">C.A.M</option>
                                                            <option value="1489">CARBODIES</option>
                                                            <option value="3194">CARLARKY</option>
                                                            <option value="1490">CATERHAM</option>
                                                            <option value="937">CATERPILLAR</option>
                                                            <option value="3678">CHAMONIX</option>
                                                            <option value="4609">CHANA</option>
                                                            <option value="2852">CHANGAN</option>
                                                            <option value="2889">CHANGFENG</option>
                                                            <option value="2853">CHANGHE</option>
                                                            <option value="1491">CHECKER</option>
                                                            <option value="3038">CHENGLONG</option>
                                                            <option value="2887">CHERY</option>
                                                            <option value="138">CHEVROLET</option>
                                                            <option value="3527">CHEVROLET (SGM)</option>
                                                            <option value="3651">CHEVROLET (SGMW)</option>
                                                            <option value="20">CHRYSLER</option>
                                                            <option value="3646">CHRYSLER (BBDC)</option>
                                                            <option value="5521">CHRYSLER (SOUEAST)</option>
                                                            <option value="4177">CHTC AUTO</option>
                                                            <option value="5596">CIIMO</option>
                                                            <option value="21">CITROËN</option>
                                                            <option value="2891">CITROËN (DF-PSA)</option>
                                                            <option value="3772">CMC</option>
                                                            <option value="5338">CNJ</option>
                                                            <option value="23">COMMER</option>
                                                            <option value="4214">COWIN</option>
                                                            <option value="716">CUMMINS</option>
                                                            <option value="4896">CUPRA</option>
                                                            <option value="139">DACIA</option>
                                                            <option value="2901">DADI</option>
                                                            <option value="3872">DAEDONG</option>
                                                            <option value="4052">DAELIM</option>
                                                            <option value="185">DAEWOO</option>
                                                            <option value="24">DAF</option>
                                                            <option value="25">DAIHATSU</option>
                                                            <option value="3274">DAIHATSU (FAW)</option>
                                                            <option value="26">DAIMLER</option>
                                                            <option value="1493">DALLAS</option>
                                                            <option value="807">DATSUN</option>
                                                            <option value="4267">DAYUN</option>
                                                            <option value="5347">DCEC</option>
                                                            <option value="1494">DE LOREAN</option>
                                                            <option value="140">DENNIS</option>
                                                            <option value="4071">DERBI</option>
                                                            <option value="3069">DERWAYS</option>
                                                            <option value="2784">DESOTO</option>
                                                            <option value="1495">DE TOMASO</option>
                                                            <option value="2482">DETROIT DIESEL</option>
                                                            <option value="2276">DEUTZ</option>
                                                            <option value="4269">DFSK</option>
                                                            <option value="29">DODGE</option>
                                                            <option value="5507">DODGE (SOUEAST)</option>
                                                            <option value="3659">DONGFENG</option>
                                                            <option value="2854">DONGFENG (DFAC)</option>
                                                            <option value="4264">DONGFENG FENGDU</option>
                                                            <option value="3152">DONGFENG XIAOKANG</option>
                                                            <option value="2855">DONGNAN (SOUEAST)</option>
                                                            <option value="4658">DONKERVOORT</option>
                                                            <option value="3523">DOOSAN</option>
                                                            <option value="5141">DORCEN</option>
                                                            <option value="3497">DR</option>
                                                            <option value="4468">DS</option>
                                                            <option value="3999">DS (CAPSA)</option>
                                                            <option value="2759">DUCATI</option>
                                                            <option value="824">EAGLE</option>
                                                            <option value="142">EBRO</option>
                                                            <option value="4288">ECM</option>
                                                            <option value="3652">EFFA</option>
                                                            <option value="3618">EFFEDI</option>
                                                            <option value="1057">EICHER</option>
                                                            <option value="3852">EMAC</option>
                                                            <option value="3332">EMGRAND</option>
                                                            <option value="165">ENASA</option>
                                                            <option value="3704">ENGLON</option>
                                                            <option value="4259">ENRANGER</option>
                                                            <option value="143">ERF</option>
                                                            <option value="2857">EUNOS</option>
                                                            <option value="5522">EVERUS</option>
                                                            <option value="5190">FAC</option>
                                                            <option value="1060">FAHR</option>
                                                            <option value="6089">FARGO</option>
                                                            <option value="145">FAUN</option>
                                                            <option value="3610">FAW</option>
                                                            <option value="5808">FAW (HONGTA)</option>
                                                            <option value="2909">FAW (JILIN)</option>
                                                            <option value="2890">FAW (TIANJIN)</option>
                                                            <option value="6276">FEIDI</option>
                                                            <option value="5486">FENGON</option>
                                                            <option value="2862">FENGSHEN</option>
                                                            <option value="2863">FENGXING</option>
                                                            <option value="700">FERRARI</option>
                                                            <option value="35">FIAT</option>
                                                            <option value="2381">FIATAGRI</option>
                                                            <option value="3761">FIAT (GAC)</option>
                                                            <option value="3131">FIAT (NANJING)</option>
                                                            <option value="3738">FISKER</option>
                                                            <option value="2248">FISSORE</option>
                                                            <option value="3771">FODAY</option>
                                                            <option value="2850">FORCE</option>
                                                            <option value="36">FORD</option>
                                                            <option value="5998">FORD AFRICA</option>
                                                            <option value="2864">FORD ASIA &amp; OCEANIA</option>
                                                            <option value="1496">FORD AUSTRALIA</option>
                                                            <option value="3125">FORD (CHANGAN)</option>
                                                            <option value="3656">FORD (JMC)</option>
                                                            <option value="808">FORD OTOSAN</option>
                                                            <option value="776">FORD USA</option>
                                                            <option value="4189">FORLAND</option>
                                                            <option value="2865">FORTA</option>
                                                            <option value="6363">FORTHING</option>
                                                            <option value="2867">FOTON</option>
                                                            <option value="5349">FOTON CUMMINS</option>
                                                            <option value="3809">FPT</option>
                                                            <option value="147">FREIGHTLINER</option>
                                                            <option value="775">FSO</option>
                                                            <option value="2875">FUQI</option>
                                                            <option value="3741">FUSO (MITSUBISHI)</option>
                                                            <option value="3196">GAC</option>
                                                            <option value="5475">GALLOPER</option>
                                                            <option value="2791">GARDNER</option>
                                                            <option value="4289">GASGAS</option>
                                                            <option value="148">GAZ</option>
                                                            <option value="2590">GEELY</option>
                                                            <option value="4473">GENESIS</option>
                                                            <option value="831">GEO</option>
                                                            <option value="4054">GILERA</option>
                                                            <option value="1498">GINETTA</option>
                                                            <option value="5209">GIOTTI VICTORIA</option>
                                                            <option value="812">GLAS</option>
                                                            <option value="3697">GLEAGLE</option>
                                                            <option value="39">GMC</option>
                                                            <option value="5208">GME</option>
                                                            <option value="3158">GOLDEN DRAGON</option>
                                                            <option value="2902">GONOW</option>
                                                            <option value="3997">GONOW (GAC)</option>
                                                            <option value="2903">GREAT WALL</option>
                                                            <option value="4640">GROZ</option>
                                                            <option value="1025">GUELDNER</option>
                                                            <option value="2249">GURGEL</option>
                                                            <option value="2866">HAFEI</option>
                                                            <option value="3036">HAIMA (FAW)</option>
                                                            <option value="3913">HAIMA (ZHENGZHOU)</option>
                                                            <option value="42">HANOMAG HENSCHEL</option>
                                                            <option value="4610">HANTENG</option>
                                                            <option value="4055">HARLEY-DAVIDSON</option>
                                                            <option value="3968">HAVAL</option>
                                                            <option value="3562">HAWTAI</option>
                                                            <option value="4450">HEIBAO</option>
                                                            <option value="4268">HENGTONG</option>
                                                            <option value="44">HENSCHEL</option>
                                                            <option value="4087">HERCULES</option>
                                                            <option value="150">HEULIEZ</option>
                                                            <option value="4176">HIGER</option>
                                                            <option value="2794">HILLMAN</option>
                                                            <option value="1499">HINDUSTAN</option>
                                                            <option value="151">HINO</option>
                                                            <option value="5361">HINO (SHANGHAI)</option>
                                                            <option value="4314">HMRacing</option>
                                                            <option value="801">HOLDEN</option>
                                                            <option value="45">HONDA</option>
                                                            <option value="3126">HONDA (DONGFENG)</option>
                                                            <option value="3129">HONDA (GAC)</option>
                                                            <option value="2871">HONGQI</option>
                                                            <option value="4488">HOREX</option>
                                                            <option value="3276">HSV</option>
                                                            <option value="5366">HUACHAI</option>
                                                            <option value="2872">HUALI</option>
                                                            <option value="4258">HUANGHAI</option>
                                                            <option value="4255">HUASONG</option>
                                                            <option value="4320">HUAYANG</option>
                                                            <option value="3155">HUIZHONG</option>
                                                            <option value="1506">HUMMER</option>
                                                            <option value="4287">HUSABERG</option>
                                                            <option value="4056">HYOSUNG</option>
                                                            <option value="183">HYUNDAI</option>
                                                            <option value="3123">HYUNDAI (BEIJING)</option>
                                                            <option value="3128">HYUNDAI (HUATAI)</option>
                                                            <option value="3507">ICML</option>
                                                            <option value="50">IKARUS</option>
                                                            <option value="152">IME</option>
                                                            <option value="4542">INBUS</option>
                                                            <option value="1507">INDIGO</option>
                                                            <option value="6576">INEOS</option>
                                                            <option value="1526">INFINITI</option>
                                                            <option value="4211">INFINITI (DFAC)</option>
                                                            <option value="52">INNOCENTI</option>
                                                            <option value="3677">INOKOM</option>
                                                            <option value="2460">INTERNATIONAL</option>
                                                            <option value="53">INTERNATIONAL HARV.</option>
                                                            <option value="3084">IRAN KHODRO</option>
                                                            <option value="1508">IRMSCHER</option>
                                                            <option value="1509">ISDERA</option>
                                                            <option value="5736">ISORIVOLTA</option>
                                                            <option value="54">ISUZU</option>
                                                            <option value="4393">ISUZU (JIANGXI)</option>
                                                            <option value="3139">ISUZU (QINGLING)</option>
                                                            <option value="55">IVECO</option>
                                                            <option value="4683">IZH</option>
                                                            <option value="2873">JAC</option>
                                                            <option value="56">JAGUAR</option>
                                                            <option value="4614">JAGUAR (CHERY)</option>
                                                            <option value="4074">JAWA</option>
                                                            <option value="837">JCB</option>
                                                            <option value="5599">JDMC</option>
                                                            <option value="882">JEEP</option>
                                                            <option value="2851">JEEP (BJC)</option>
                                                            <option value="4454">JEEP (GAC FCA)</option>
                                                            <option value="2250">JEEP VIASA</option>
                                                            <option value="5202">JENBACHER</option>
                                                            <option value="1511">JENSEN</option>
                                                            <option value="5398">JETTA</option>
                                                            <option value="2908">JIANGNAN</option>
                                                            <option value="2907">JIEFANG</option>
                                                            <option value="3849">JIEFANG (FAW)</option>
                                                            <option value="2888">JINBEI</option>
                                                            <option value="4179">JINCHENG</option>
                                                            <option value="3040">JMC</option>
                                                            <option value="755">JOHN DEERE</option>
                                                            <option value="3993">JONWAY</option>
                                                            <option value="5699">JOYFUN AUTO</option>
                                                            <option value="4180">JOYLONG</option>
                                                            <option value="4265">KAMA</option>
                                                            <option value="2453">KAMAZ</option>
                                                            <option value="153">KAROSA</option>
                                                            <option value="3286">KARRY</option>
                                                            <option value="4445">KARSAN</option>
                                                            <option value="59">KÄSSBOHRER</option>
                                                            <option value="4182">KAVZ</option>
                                                            <option value="1131">KAWASAKI</option>
                                                            <option value="4181">KAWEI AUTO</option>
                                                            <option value="4495">KEEWAY</option>
                                                            <option value="60">KHD</option>
                                                            <option value="184">KIA</option>
                                                            <option value="3127">KIA (DYK)</option>
                                                            <option value="3805">KING LONG</option>
                                                            <option value="3716">KINGSTAR</option>
                                                            <option value="3833">KIOTI</option>
                                                            <option value="4163">KOENIGSEGG</option>
                                                            <option value="976">KRAMER</option>
                                                            <option value="4070">KREIDLER</option>
                                                            <option value="2760">KTM</option>
                                                            <option value="977">KUBOTA</option>
                                                            <option value="2621">KYMCO</option>
                                                            <option value="63">LADA</option>
                                                            <option value="701">LAMBORGHINI</option>
                                                            <option value="64">LANCIA</option>
                                                            <option value="1820">LAND ROVER</option>
                                                            <option value="4282">LAND ROVER (CHERY)</option>
                                                            <option value="2589">LANDWIND (JMC)</option>
                                                            <option value="4075">LAVERDA MOTORCYCLES</option>
                                                            <option value="3804">LAZ</option>
                                                            <option value="1380">LDV</option>
                                                            <option value="5530">LEOPAARD</option>
                                                            <option value="5194">LEVC</option>
                                                            <option value="842">LEXUS</option>
                                                            <option value="65">LEYLAND</option>
                                                            <option value="156">LEYLAND DAF</option>
                                                            <option value="2407">LEYLAND-INNOCENTI</option>
                                                            <option value="66">LIAZ</option>
                                                            <option value="679">LIEBHERR</option>
                                                            <option value="3086">LIFAN</option>
                                                            <option value="1513">LIGIER</option>
                                                            <option value="1200">LINCOLN</option>
                                                            <option value="5512">LINCOLN (CHANGAN)</option>
                                                            <option value="3679">LOBINI</option>
                                                            <option value="2152">LOMBARDINI</option>
                                                            <option value="5672">LORINSER</option>
                                                            <option value="802">LOTUS</option>
                                                            <option value="3661">LOTUS (YOUNGMAN)</option>
                                                            <option value="5364">LOVOL</option>
                                                            <option value="3047">LTI</option>
                                                            <option value="1515">LUAZ</option>
                                                            <option value="3742">LUXGEN</option>
                                                            <option value="4612">LYNK &amp; CO</option>
                                                            <option value="67">MACK</option>
                                                            <option value="68">MAGIRUS-DEUTZ</option>
                                                            <option value="1280">MAHINDRA</option>
                                                            <option value="3554">MAHINDRA RENAULT</option>
                                                            <option value="4060">MALAGUTI</option>
                                                            <option value="69">MAN</option>
                                                            <option value="2905">MAPLE (SMA)</option>
                                                            <option value="1516">MARCOS</option>
                                                            <option value="5170">MARTIN MOTORS</option>
                                                            <option value="908">MARUTI</option>
                                                            <option value="3549">MARUTI SUZUKI</option>
                                                            <option value="771">MASERATI</option>
                                                            <option value="669">MASSEY FERGUSON</option>
                                                            <option value="2105">MATRA</option>
                                                            <option value="3300">MAXUS</option>
                                                            <option value="4291">MAXXFORCE</option>
                                                            <option value="2164">MAYBACH</option>
                                                            <option value="72">MAZDA</option>
                                                            <option value="3532">MAZDA (CHANGAN)</option>
                                                            <option value="3138">MAZDA (FAW)</option>
                                                            <option value="3551">MAZ-MAN</option>
                                                            <option value="4061">MBK</option>
                                                            <option value="1518">MCLAREN</option>
                                                            <option value="845">MEGA</option>
                                                            <option value="74">MERCEDES-BENZ</option>
                                                            <option value="3645">MERCEDES-BENZ (BBDC)</option>
                                                            <option value="3522">MERCEDES-BENZ (FJDA)</option>
                                                            <option value="161">MERCURY</option>
                                                            <option value="6534">MERCURY MARINE</option>
                                                            <option value="1520">METROCAB</option>
                                                            <option value="75">MG</option>
                                                            <option value="3133">MG (NANJING)</option>
                                                            <option value="3838">MG (SAIC)</option>
                                                            <option value="4219">MICROCAR</option>
                                                            <option value="1521">MIDDLEBRIDGE</option>
                                                            <option value="1522">MINELLI</option>
                                                            <option value="1523">MINI</option>
                                                            <option value="5257">MINICORD</option>
                                                            <option value="77">MITSUBISHI</option>
                                                            <option value="3648">MITSUBISHI (BBDC)</option>
                                                            <option value="3650">MITSUBISHI (BJC)</option>
                                                            <option value="3837">MITSUBISHI (GAC)</option>
                                                            <option value="3658">MITSUBISHI (SOUEAST)</option>
                                                            <option value="2904">MITSUOKA</option>
                                                            <option value="803">MORGAN</option>
                                                            <option value="78">MORRIS</option>
                                                            <option value="813">MOSKVICH</option>
                                                            <option value="4062">MOTO GUZZI</option>
                                                            <option value="5204">MPM MOTORS</option>
                                                            <option value="3517">MTU</option>
                                                            <option value="79">MULTICAR</option>
                                                            <option value="2761">MV AGUSTA</option>
                                                            <option value="670">MWM</option>
                                                            <option value="3075">MWM INTERNATIONAL</option>
                                                            <option value="4063">MZ</option>
                                                            <option value="3132">NAC IVECO (NAVECO)</option>
                                                            <option value="2227">NAVISTAR</option>
                                                            <option value="3070">NAZA</option>
                                                            <option value="4277">NDY</option>
                                                            <option value="162">NEOPLAN</option>
                                                            <option value="5525">NEW BAOJUN</option>
                                                            <option value="2637">NEW HOLLAND</option>
                                                            <option value="80">NISSAN</option>
                                                            <option value="3141">NISSAN (DFAC)</option>
                                                            <option value="2910">NISSAN (ZHENGZHOU)</option>
                                                            <option value="3625">NOBLE</option>
                                                            <option value="81">NSU</option>
                                                            <option value="1141">OLDSMOBILE</option>
                                                            <option value="1527">OLTCIT</option>
                                                            <option value="83">OM</option>
                                                            <option value="84">OPEL</option>
                                                            <option value="2929">OTOKAR</option>
                                                            <option value="4164">PAGANI</option>
                                                            <option value="1530">PANOZ</option>
                                                            <option value="1531">PANTHER</option>
                                                            <option value="2256">PEGASO</option>
                                                            <option value="723">PERKINS</option>
                                                            <option value="1533">PERODUA</option>
                                                            <option value="88">PEUGEOT</option>
                                                            <option value="3531">PEUGEOT (DF-PSA)</option>
                                                            <option value="4392">PFANZELT</option>
                                                            <option value="4659">PGO</option>
                                                            <option value="4078">PGO MOTORCYCLES</option>
                                                            <option value="181">PIAGGIO</option>
                                                            <option value="3046">PININFARINA</option>
                                                            <option value="850">PLYMOUTH</option>
                                                            <option value="5152">POLARIS</option>
                                                            <option value="3154">POLARSUN</option>
                                                            <option value="4817">POLESTAR</option>
                                                            <option value="774">PONTIAC</option>
                                                            <option value="92">PORSCHE</option>
                                                            <option value="851">PREMIER</option>
                                                            <option value="778">PROTON</option>
                                                            <option value="1580">PUCH</option>
                                                            <option value="880">PUMA</option>
                                                            <option value="3740">PYEONGHWA (PMC)</option>
                                                            <option value="3839">QOROS</option>
                                                            <option value="3689">RAM</option>
                                                            <option value="1534">RANGER</option>
                                                            <option value="4660">RAVON</option>
                                                            <option value="1536">RAYTON FISSORE</option>
                                                            <option value="773">RELIANT</option>
                                                            <option value="3284">RELY</option>
                                                            <option value="93">RENAULT</option>
                                                            <option value="4538">RENAULT (DFAC)</option>
                                                            <option value="694">RENAULT TRUCKS</option>
                                                            <option value="4290">REX</option>
                                                            <option value="3285">RIICH</option>
                                                            <option value="1539">RILEY</option>
                                                            <option value="3202">ROEWE (SAIC)</option>
                                                            <option value="705">ROLLS-ROYCE</option>
                                                            <option value="4708">ROMANITAL</option>
                                                            <option value="95">ROVER</option>
                                                            <option value="4386">ROYAL ENFIELD</option>
                                                            <option value="4152">RUF</option>
                                                            <option value="99">SAAB</option>
                                                            <option value="4064">SACHS</option>
                                                            <option value="1543">SAFRAR</option>
                                                            <option value="4592">SAIPA</option>
                                                            <option value="674">SAME</option>
                                                            <option value="4260">SAMSUNG</option>
                                                            <option value="1544">SAN</option>
                                                            <option value="171">SANTANA</option>
                                                            <option value="1545">SAO</option>
                                                            <option value="1497">SATURN</option>
                                                            <option value="101">SAURER</option>
                                                            <option value="102">SAVIEM</option>
                                                            <option value="103">SCANIA</option>
                                                            <option value="2714">SCION</option>
                                                            <option value="104">SEAT</option>
                                                            <option value="4763">SEAZ</option>
                                                            <option value="5362">SFH</option>
                                                            <option value="3848">SHAANXI</option>
                                                            <option value="5133">SHERCO</option>
                                                            <option value="2942">SHIBAURA</option>
                                                            <option value="3156">SHUANGHUAN</option>
                                                            <option value="105">SIMCA</option>
                                                            <option value="3855">SINOTRUK (CNHTC)</option>
                                                            <option value="174">SISU</option>
                                                            <option value="106">SKODA</option>
                                                            <option value="3530">SKODA (SVW)</option>
                                                            <option value="5259">SKYWELL (KAIWO)</option>
                                                            <option value="1138">SMART</option>
                                                            <option value="675">SOLO</option>
                                                            <option value="3657">SOUEAST</option>
                                                            <option value="3153">SOYAT</option>
                                                            <option value="1549">SPECTRE</option>
                                                            <option value="4627">SPERANZA</option>
                                                            <option value="2755">SPYKER</option>
                                                            <option value="4010">SRT</option>
                                                            <option value="175">SSANGYONG</option>
                                                            <option value="2810">STANGUELLINI</option>
                                                            <option value="1540">STERLING</option>
                                                            <option value="176">STEYR</option>
                                                            <option value="107">SUBARU</option>
                                                            <option value="109">SUZUKI</option>
                                                            <option value="3143">SUZUKI (CHANGAN)</option>
                                                            <option value="3199">SUZUKI (CHANGHE)</option>
                                                            <option value="3680">TAC</option>
                                                            <option value="4292">TAGAZ</option>
                                                            <option value="110">TALBOT</option>
                                                            <option value="177">TAM</option>
                                                            <option value="178">TATA</option>
                                                            <option value="179">TATRA</option>
                                                            <option value="3443">TAZZARI</option>
                                                            <option value="6175">TD Cars</option>
                                                            <option value="2667">TEMSA</option>
                                                            <option value="3328">TESLA</option>
                                                            <option value="4644">THAIRUNG</option>
                                                            <option value="3048">TIANMA</option>
                                                            <option value="3157">TIANQI MEIYA</option>
                                                            <option value="6119">TIMOR</option>
                                                            <option value="5999">T-KING</option>
                                                            <option value="1551">TOFAS</option>
                                                            <option value="4449">TONGBAO</option>
                                                            <option value="4448">TONGJIAFU</option>
                                                            <option value="2913">TONGTIAN</option>
                                                            <option value="111">TOYOTA</option>
                                                            <option value="3137">TOYOTA (FAW)</option>
                                                            <option value="3130">TOYOTA (GAC)</option>
                                                            <option value="187">TRABANT</option>
                                                            <option value="112">TRIUMPH</option>
                                                            <option value="3681">TROLLER</option>
                                                            <option value="861">TVR</option>
                                                            <option value="1553">UAZ</option>
                                                            <option value="3620">UD TRUCKS</option>
                                                            <option value="3159">UFO</option>
                                                            <option value="1554">UMM</option>
                                                            <option value="115">UNIC-SIMCA</option>
                                                            <option value="3763">URAL</option>
                                                            <option value="4762">UZ-DAEWOO</option>
                                                            <option value="2671">VALTRA</option>
                                                            <option value="116">VAN HOOL</option>
                                                            <option value="117">VAUXHALL</option>
                                                            <option value="3750">VDL</option>
                                                            <option value="2166">VEB FZ.-WERKE</option>
                                                            <option value="4636">VENIRAUTO</option>
                                                            <option value="3799">VENUCIA</option>
                                                            <option value="4069">VESPA</option>
                                                            <option value="4256">VICTORY</option>
                                                            <option value="2144">VM</option>
                                                            <option value="120">VOLVO</option>
                                                            <option value="4167">VOLVO ASIA</option>
                                                            <option value="5735">VOLVO BM</option>
                                                            <option value="3533">VOLVO (CHANGAN)</option>
                                                            <option value="5051">VOLVO PENTA</option>
                                                            <option value="3752">VPG</option>
                                                            <option value="4607">VUHL</option>
                                                            <option value="121">VW</option>
                                                            <option value="2859">VW (FAW)</option>
                                                            <option value="3035">VW (SVW)</option>
                                                            <option value="3191">WANFENG</option>
                                                            <option value="186">WARTBURG</option>
                                                            <option value="2145">WAUKESHA</option>
                                                            <option value="3816">WEICHAI</option>
                                                            <option value="907">WESTFIELD</option>
                                                            <option value="1558">WIESMANN</option>
                                                            <option value="1541">WOLSELEY</option>
                                                            <option value="2874">WULING</option>
                                                            <option value="3140">WULING (SGMW)</option>
                                                            <option value="3073">XINCHEN ENGINE</option>
                                                            <option value="3186">XINKAI</option>
                                                            <option value="1021">YAMAHA</option>
                                                            <option value="5739">YAMZ</option>
                                                            <option value="3796">YCACO</option>
                                                            <option value="4002">YEMA</option>
                                                            <option value="3193">YUEJIN</option>
                                                            <option value="2270">YUE LOONG</option>
                                                            <option value="2816">YUGO</option>
                                                            <option value="1559">YULON</option>
                                                            <option value="4740">ZAMYAD</option>
                                                            <option value="4788">ZAROOQ</option>
                                                            <option value="124">ZASTAVA</option>
                                                            <option value="1139">ZAZ</option>
                                                            <option value="4604">ZENOS CARS</option>
                                                            <option value="1111">ZETOR</option>
                                                            <option value="2736">ZHONGHUA (BRILLIANCE)</option>
                                                            <option value="2911">ZHONGXING (ZX AUTO)</option>
                                                            <option value="4033">ZINORO</option>
                                                            <option value="4029">ZMZ</option>
                                                            <option value="3160">ZOTYE</option>
                                                            <option value="678">ZUENDAPP</option>
                                                        </optgroup>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-wp30" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-frm-searchByMotor-searchByMotorForm-manu_motor-container" aria-controls="select2-frm-searchByMotor-searchByMotorForm-manu_motor-container"><span class="select2-selection__rendered" id="select2-frm-searchByMotor-searchByMotorForm-manu_motor-container" role="textbox" aria-readonly="true" title="Select manufacturer..."><span class="select2-selection__placeholder">Select manufacturer...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <span class="site-skeleton site-skeleton--select site-skeleton-manu" style="display: none;"><span class="site-skeleton-device">Loading...</span></span>
                                                </div>
                                                <div class="site-filter__content-box site-filter__content-box--motorserial" id="snippet-searchByMotor-motorsSnippet">
                                                    <span class="site-filter__content-number">2</span>
                                                    <select name="motor" class="js-select select2-hidden-accessible" data-placeholder="Select manufacturer first..." id="frm-searchByMotor-searchByMotorForm-motor" data-select2-id="select2-data-frm-searchByMotor-searchByMotorForm-motor" tabindex="-1" aria-hidden="true">
                                                        <option value="" data-select2-id="select2-data-8-w62m"></option>
                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-7-d6qs" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-frm-searchByMotor-searchByMotorForm-motor-container" aria-controls="select2-frm-searchByMotor-searchByMotorForm-motor-container"><span class="select2-selection__rendered" id="select2-frm-searchByMotor-searchByMotorForm-motor-container" role="textbox" aria-readonly="true" title="Select manufacturer first..."><span class="select2-selection__placeholder">Select manufacturer first...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                    <span class="site-skeleton site-skeleton--select site-skeleton-motor" style="display: none;"><span class="site-skeleton-device">Loading...</span></span>
                                                </div>
                                                <div class="site-filter__content-box  site-filter__content-box--smallbutton">
                                                    <button type="submit" name="sendSearchByMotor" class="btn btn-primary w-100 hasCaptionAndIcon"><span class="caption">Search</span>&nbsp;&nbsp;<i class="icon icon-find"></i></button>
                                                </div>
                                                <input type="hidden" name="_do" value="searchByMotor-searchByMotorForm-submit">
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="site-filter__minimizer">
                                <span class="site-filter__minimizer-item site-filter__minimizer-item--show"> <span>View search</span></span>
                                <span class="site-filter__minimizer-item site-filter__minimizer-item--hide"> <span>Hide search</span></span>
                            </div>
                        </section> -->

                        <h1>Search result - {{$keyword}}</h1>

                        <div class="category__controls">
                            <button class="category__controls-filters btn btn-primary"><i class="icon-filtering"></i>Filters</button>
                            <!-- <div class="category__switch">
                                <a href="/en/article-list/search-list/pm006900?style=2&amp;do=changeStyleView" data-toggle="tooltip" title="Gallery" class=" d-none d-sm-inline-block btn btn-sm btn-outline-primary ajax">
                                    <i class="icon-th-large"></i>
                                </a>
                                <a href="/en/article-list/search-list/pm006900?style=1&amp;do=changeStyleView" data-toggle="tooltip" title="Table" class="btn btn-sm btn-outline-primary ajax active">
                                    <i class="icon-th-list"></i>
                                </a>
                                <a href="/en/article-list/search-list/pm006900?style=3&amp;do=changeStyleView" data-toggle="tooltip" title="Price list" class="btn btn-sm btn-outline-primary ajax">
                                    <i class="icon-bars"></i>
                                </a>
                            </div> -->
                        </div>
                        <div id="snippet-articleList-">


                            <!-- <h2>Exact match</h2> -->
                            @foreach ($return_data as $item)
                            <section class="product-line__item">
                                <div class="product-line__item-left">
                                    <div class="product-line__heading">
                                        <img src="{{$item->brand->image}}" alt="{{$item->brandName}}" title="{{$item->brandName}}"  class="brand-logo ">

                                        <h3>
                                            <a href="/product/{{$item->id}}">
                                                {{ $item->code }} - {{$item->brandName}} {{$item->categoryName}}, {{$item->subCategoryName}}
                                            </a>
                                        </h3>
                                        <span class="badge badge-success">We recommend!</span>
                                    </div>
                                    <div class="product-line__content">
                                        <div class="product-line__image product-line__image--full">
                                            <a href="/product/{{$item->id}}">
                                                <img src="/document/shop/PM006900/tn_600_PM006900A.jpg" title="Piston - PM006900 ET ENGINETEAM - 06H107065DL, 06H107065BS, 06H107065BF" alt="PM006900, Piston, Complete piston with rings and pin, ET ENGINETEAM, Skoda Superb Octavia Yeti, VW Passat Sharan, Seat Audi CDAA CDAB 2008+, 06H107065DL, 06H107065BS, 06H107065BF, 06H107065DF, 06H107065CP, 41197600" onerror="this.onerror=null; this.src='/images/nophoto.jpg'" loading="lazy">
                                            </a>
                                        </div>
                                        <div class="product-line__allproperties product-line__allproperties--full">
                                            <div class="product-line__basic">
                                                <h4>General information</h4>
                                                <table class="product-detail__data">
                                                    <tbody>
                                                        <tr>
                                                            <td>Code:</td>
                                                            <td>{{$item->code}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Brand:</td>
                                                            <td>{{$item->brandName}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Title:</td>
                                                            <td>{{$item->title}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Car:</td>
                                                            <td>{{$item->carName}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Weight&nbsp;<span data-tippy-content="Weight is indicative only. The weight is taken from the data provider's database."><i class="icon-circle-question-regular"></i></span>&nbsp;:</td>
                                                            <td>{{$item->weight}}&nbsp;kg</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="product-line__properties">
                                                <h4>Criteria</h4>
                                                <table class="product-detail__data">
                                                    <tbody>
                                                        @for ($i = 0; $i < sizeof($item->criteria_names); $i++)
                                                            <tr>
                                                                <td>{{$item->criteria_names[$i]}}</td>
                                                                <td>{{$item->criteria_value[$i]}}</td>
                                                            </tr>
                                                        @endfor
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-line__item-right">
                                    <div class="product-detail__price-item">
                                        <span class="product-detail__price-heading">Netto price:</span>
                                        <span class="product-detail__price-retail">
                                            <del>£{{$item->price}}
                                            </del></span>
                                        <span class="product-detail__price-vat"><del>(£{{$item->price}} without VAT 0%)</del></span>
                                    </div>
                                    <div class="product-detail__price-item">
                                        <span class="product-detail__price-heading">Your price:
                                            -40%
                                        </span>
                                        <span class="product-detail__price-main">£{{$item->price - (($item->price * 40)/ 100)}}
                                        </span>
                                        <span class="product-detail__price-vat">(£{{$item->price - (($item->price * 40)/ 100)}} without VAT 0%)</span>
                                    </div>
                                    <div class="product-detail__price-item">
                                        <div id="snippet-articleList-articleStockFull-134787-">
                                            <table class="product-detail__buy-stock">
                                                <tbody>
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

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="product-detail__buy">
                                            <div class="product-item__buy">
                                                <form action="/en/article-list/search-list/pm006900" method="post" class="product-detail__buy-form ajax" id="frm-articleList-articleBuy-134787-addToCart" novalidate="">
                                                    <div class="product-detail__buy-input">
                                                        <input type="number" name="articleQuantity" placeholder="quantity:" min="1" step="1" pattern="\d*" id="frm-articleList-articleBuy-134787-addToCart-articleQuantity" required="" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Quantity is required.&quot;},{&quot;op&quot;:&quot;:integer&quot;,&quot;msg&quot;:&quot;Please enter a valid integer.&quot;},{&quot;op&quot;:&quot;:integer&quot;,&quot;msg&quot;:&quot;Quantity must be a whole number.&quot;}]" value="1" data-lfv-initialized="true" data-lfv-message-id="frm-articleList-articleBuy-134787-addToCart-articleQuantity_message">
                                                    </div>
                                                    <button type="button" name="buy_button" class="product-detail__buy-button buy-button btn btn-primary btn-addtocart hasCaptionAndNoIcon" data-lfv-initialized="true" data-lfv-message-id="frm-articleList-articleBuy-134787-addToCart-buy_button_message"><span class="caption">Add to cart</span></button>
                                                    <input type="hidden" name="articleId" value="134787" data-lfv-initialized="true" data-lfv-message-id="frm-articleList-articleBuy-134787-addToCart-articleId_message"><input type="hidden" name="increaseQuantity" value="1" data-lfv-initialized="true" data-lfv-message-id="frm-articleList-articleBuy-134787-addToCart-increaseQuantity_message"><input type="hidden" name="_do" value="articleList-articleBuy-134787-addToCart-submit" data-lfv-initialized="true" data-lfv-message-id="frm-articleList-articleBuy-134787-addToCart-_do_message"><!--[if IE]><input type=IEbug disabled style="display:none"><![endif]-->
                                                </form>


                                                <div id="frm-articleList-articleBuy-134787-addToCart-articleQuantity_message"></div>
                                                <div id="frm-articleList-articleBuy-134787-addToCart-buy_button_message"></div>
                                                <div id="frm-articleList-articleBuy-134787-addToCart-articleId_message"></div>
                                                <div id="frm-articleList-articleBuy-134787-addToCart-increaseQuantity_message"></div>
                                                <div id="frm-articleList-articleBuy-134787-addToCart-_do_message"></div>
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
	



</body>

</html>