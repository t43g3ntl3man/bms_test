<!doctype html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            @include('layout/admin-site-nav')
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
                <div id="snippet--flashMessages">
                
                </div>
            </div>
            <section role="region" id="snippet--customerForm">
                <div class="container">
                    @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                    {{$errors->first()}}
                    </div>
                    @endif
                    <div class="site-form site-form--register">
                        <h1 class="text-center">Create Product</h1>
                        <div id="snippet-customerPersonFormRegister-">
                            <form action="create_product" method="post" id="frm-customerPersonFormRegister-customerRegisterForm" enctype="multipart/form-data" novalidate="">
								{{ csrf_field() }}
								<h2 class="site-form__section-heading">General</h2>
                                <div class="site-form__section-content">
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify">Image&nbsp;<span class="text-danger">*</span></label>
                                        <input type="file" name="image" autocomplete="new-password" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter password again&quot;},{&quot;op&quot;:&quot;:equal&quot;,&quot;msg&quot;:&quot;Entered passwords are not identical&quot;,&quot;arg&quot;:{&quot;control&quot;:&quot;userSignUp[userPassword]&quot;}}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message"></div>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail">Title&nbsp;<span class="text-danger">*</span></label>
                                        <input type="text" name="title" maxlength="80" autocomplete="email" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Fill in the email!&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;Invalid e-mail address.&quot;},{&quot;op&quot;:&quot;:maxLength&quot;,&quot;msg&quot;:&quot;Input must have max 80 characters&quot;,&quot;arg&quot;:80}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail_message"></div>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword">Price&nbsp;<span class="text-danger">*</span></label>
                                        <input type="text" name="price" autocomplete="new-password" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter password&quot;},{&quot;op&quot;:&quot;:minLength&quot;,&quot;msg&quot;:&quot;Password must have at least 6 characters&quot;,&quot;arg&quot;:6}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPassword_message"></div>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify">SKU&nbsp;<span class="text-danger">*</span></label>
                                        <input type="text" name="code" autocomplete="new-password" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter password again&quot;},{&quot;op&quot;:&quot;:equal&quot;,&quot;msg&quot;:&quot;Entered passwords are not identical&quot;,&quot;arg&quot;:{&quot;control&quot;:&quot;userSignUp[userPassword]&quot;}}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message"></div>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify">EAN&nbsp;<span class="text-danger">*</span></label>
                                        <input type="text" name="ean" autocomplete="new-password" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter password again&quot;},{&quot;op&quot;:&quot;:equal&quot;,&quot;msg&quot;:&quot;Entered passwords are not identical&quot;,&quot;arg&quot;:{&quot;control&quot;:&quot;userSignUp[userPassword]&quot;}}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message"></div>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify">Weight&nbsp;<span class="text-danger">*</span></label>
                                        <input type="text" name="weight" autocomplete="new-password" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter password again&quot;},{&quot;op&quot;:&quot;:equal&quot;,&quot;msg&quot;:&quot;Entered passwords are not identical&quot;,&quot;arg&quot;:{&quot;control&quot;:&quot;userSignUp[userPassword]&quot;}}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message"></div>
                                    </div>
                                    
                                </div>
                                <h2 class="site-form__section-heading">Category / Sub Category</h2>
                                <div class="site-form__section-content">
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">Category&nbsp;<span class="text-danger">*</span></label>
                                        <select name="category" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['categories'] as $cat)
                                                <option value="{{$cat['id']}}">{{$cat['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">Sub Category&nbsp;<span class="text-danger">*</span></label>
                                        <select name="sub_category" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['sub_categories'] as $sub)
                                                <option value="{{$sub['id']}}">{{$sub['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <h2 class="site-form__section-heading">Other Relations</h2>
                                <div class="site-form__section-content">
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">Brand&nbsp;<span class="text-danger">*</span></label>
                                        <select name="brand" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['brands'] as $brand)
                                                <option value="{{$brand['id']}}">{{$brand['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">Vehicle&nbsp;<span class="text-danger">*</span></label>
                                        <select name="vehicle" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['vehicles'] as $vehicle)
                                                <option value="{{$vehicle['id']}}">{{$vehicle['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">References&nbsp;<span class="text-danger">*</span></label>
                                        <select name="ref" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['refs'] as $ref)
                                                <option value="{{$ref['id']}}">{{$ref['ref_name'].' '.$ref['reference_number']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">Engine&nbsp;<span class="text-danger">*</span></label>
                                        <select name="eng" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['engs'] as $eng)
                                                <option value="{{$eng['id']}}">{{$eng['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">Car&nbsp;<span class="text-danger">*</span></label>
                                        <select name="car" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['cars'] as $car)
                                                <option value="{{$car['id']}}">{{$car['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label col-form-label--select" for="frm-customerPersonFormRegister-customerRegisterForm-address-countryId">Car Model&nbsp;<span class="text-danger">*</span></label>
                                        <select name="model" class="js-select select2-hidden-accessible"  required="required"  tabindex="1" aria-hidden="false">
                                            @foreach ($return_data['models'] as $model)
                                                <option value="{{$model['id']}}">{{$model['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <h2 class="site-form__section-heading">Criteria</h2>
                                <div class="site-form__section-content" id="new_chq">
                                    <!-- <div class="site-form__line site-form__line--pack">
                                        <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify">Code&nbsp;<span class="text-danger">*</span></label>
                                        <input type="text" name="code" autocomplete="new-password" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Enter password again&quot;},{&quot;op&quot;:&quot;:equal&quot;,&quot;msg&quot;:&quot;Entered passwords are not identical&quot;,&quot;arg&quot;:{&quot;control&quot;:&quot;userSignUp[userPassword]&quot;}}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message"></div>
                                    </div> -->
                                    <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify">Criteria Name&nbsp;<span class="text-danger">*</span></label>
                                    <div class="site-form__line site-form__line--pack">
                                        <input type="text" name="criteria[0][name]" maxlength="80" autocomplete="email" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Fill in the email!&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;Invalid e-mail address.&quot;},{&quot;op&quot;:&quot;:maxLength&quot;,&quot;msg&quot;:&quot;Input must have max 80 characters&quot;,&quot;arg&quot;:80}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message"></div>
                                    </div>
                                    <label class="col-form-label" for="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify">Criteria Value&nbsp;<span class="text-danger">*</span></label>
                                    <div class="site-form__line site-form__line--pack">
                                        <input type="text" name="criteria[0][value]" maxlength="80" autocomplete="email" id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail" required="required" data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Fill in the email!&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;Invalid e-mail address.&quot;},{&quot;op&quot;:&quot;:maxLength&quot;,&quot;msg&quot;:&quot;Input must have max 80 characters&quot;,&quot;arg&quot;:80}]" class="form-control" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userEmail_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message"></div>
                                    </div>
                                    <!-- <div class="site-form__line site-form__line--pack" id="new_chq">

                                    </div> -->
                                    <input type="hidden" value="1" id="total_chq">
                                </div>
                                <button class="btn btn-primary" type="button" onclick="add()">Add</button>
                                <button class="btn btn-primary" type="button" onclick="del()">remove</button>
                                <div class="site-form__section-content " style="width:100%">
                                    <div class="site-form__line site-form__line--pack js-focused">
                                        <input type="submit" name="register" class="btn btn-primary w100" value="Create Product" data-lfv-initialized="true" data-lfv-message-id="frm-customerPersonFormRegister-customerRegisterForm-register_message">
                                        <div id="frm-customerPersonFormRegister-customerRegisterForm-register_message"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </section>
            <div class="popup mfp-hide" id="changeCountryModal" aria-hidden="true">
                <h3 class="popup__heading" id="changeCountryModalLabel">Choose country for delivery</h3>
                <div id="snippet--changeCountryModal">
                    <form action="https://www.kmotorshop.com/en/customer/register" method="post" id="frm-changeCountry">
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
        <!-- <input type="text" name="title"  required="required" class="form-control" id='new_"+new_chq_no+"'>" -->
        <script>
            function add(){
                var new_chq_no = parseInt($('#total_chq').val())+1;
                var new_arr_index = new_chq_no - 1
                var new_input= "<label class='col-form-label' id='new3_"+new_chq_no+"'>Criteria Name&nbsp;<span class='text-danger'>*</span></label><div id='new1_"+new_chq_no+"' class='site-form__line site-form__line--pack'><input type='text' name='criteria["+new_arr_index+"][name]' class='form-control' required><div id='frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message'></div></div>";
                var new_input2="<label class='col-form-label' id='new4_"+new_chq_no+"'>Criteria Name&nbsp;<span class='text-danger'>*</span></label><div id='new2_"+new_chq_no+"' class='site-form__line site-form__line--pack'><input type='text' name='criteria["+new_arr_index+"][value]' class='form-control' required><div id='frm-customerPersonFormRegister-customerRegisterForm-userSignUp-userPasswordVerify_message'></div></div>";
                $('#new_chq').append(new_input);
                $('#new_chq').append(new_input2);
                $('#total_chq').val(new_chq_no)
            }
            function del(){
                var last_chq_no = $('#total_chq').val();
                if(last_chq_no>1){
                    $('#new1_'+last_chq_no).remove();
                    $('#new2_'+last_chq_no).remove();
                    $('#new3_'+last_chq_no).remove();
                    $('#new4_'+last_chq_no).remove();
                    $('#total_chq').val(last_chq_no-1);
                }
             }
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
