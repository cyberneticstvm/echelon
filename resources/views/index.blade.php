@extends("base")
@section("content")
<div role="main" class="main">

    <div class="owl-carousel-wrapper" style="height: 845px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md nav-style-1 nav-inside nav-inside-plus nav-light nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1, 'dots': true}, '768': {'items': 1, 'dots': true}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': false, 'dotsVerticalOffset': '-235px', 'nav': true, 'navVerticalOffset': '70px', 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 7000, 'autoplayHoverPause': true, 'rewind': true}">

            <!-- Carousel Slide 1 -->
            <div class="position-relative overlay overlay-show overlay-op-9 overflow-hidden pt-4" data-dynamic-height="['845px','845px','845px','750px','750px']" style="height: 845px;">
                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url({{ asset('/assets/img/demos/law-firm-2/slides/slide-1.webp') }}); background-size: cover; background-position: center;"></div>
                <div class="container position-relative z-index-3 pb-5 h-100">
                    <div class="row justify-content-center align-items-center pb-5 h-100">
                        <div class="col-lg-8 text-center pb-5 mb-5">
                            <img src="{{ asset('/assets/img/demos/law-firm-2/slides/ec-logo-png.png') }}" alt="" />
                            <h2 class="alternative-font-4 text-color-light font-weight-semibold line-height-3 text-5 positive-ls-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1300" data-plugin-options="{'minWindowWidth': 0}"><span class="text-color-primary">Legal and Corporate Consultants in</span> <span class="opacity-9">UAE, Colombo and Singapore</span></h2>
                            <p class="text-color-light opacity-6 text-3-5 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 2200, 'minWindowWidth': 0}">More Than 20 Years Combined Experience Serving Businesses</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3300">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-9 overflow-hidden pt-4" data-dynamic-height="['845px','845px','845px','750px','750px']" style="height: 845px;">
                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToLeft" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url({{ asset('/assets/img/demos/law-firm-2/slides/slide-2.webp') }}); background-size: cover; background-position: center;"></div>
                <div class="container position-relative z-index-3 pb-5 h-100">
                    <div class="row justify-content-center align-items-center pb-5 h-100">
                        <div class="col-lg-8 text-center pb-5 mb-5">
                            <h1 class="text-color-light font-weight-bold line-height-1 text-12 text-md-14 positive-ls-3 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}">SOLID EXPERIENCE</h1>
                            <h2 class="alternative-font-4 text-color-light font-weight-semibold line-height-3 text-5 positive-ls-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1300" data-plugin-options="{'minWindowWidth': 0}"><span class="opacity-9">Extensive Resources And Commitment To Client</span></h2>
                            <p class="text-color-light opacity-6 text-3-5 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 2200, 'minWindowWidth': 0}">More Than 20 Years Combined Experience Serving Businesses</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary font-weight-bold text-3-5 px-5 py-3 mt-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3300">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="owl-carousel-wrapper position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2000" style="margin-top: -222px; height: 470px;">
        <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-dark mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 3}, '1200': {'items': 4}, '1440': {'items': 5}}, 'margin': 20, 'stagePadding': 20, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
            <div class="py-5">
                <a href="{{ route('services') }}" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <div class="card-body text-center px-4 py-5">
                            <img width="60" height="60" src="{{ asset('/assets/img/demos/law-firm-2/icons/icon-group.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-2 mb-4 pb-3'}" />
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">Corporate Law & Business Setup</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">We assist in the formation of companies, providing legal guidance on the best structures...</p>
                            <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                READ MORE
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="py-5">
                <a href="{{ route('services') }}" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <div class="card-body text-center px-4 py-5">
                            <img width="60" height="60" src="{{ asset('/assets/img/demos/law-firm-2/icons/icon-exchange.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary mt-2 mb-4 pb-3'}" />
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">Mergers & Acquisitions</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Our team has extensive experience in advising on complex M&A transactions, helping businesses ...</p>
                            <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                READ MORE
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="py-5">
                <a href="{{ route('services') }}" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <div class="card-body text-center px-4 py-5">
                            <img width="60" height="60" src="{{ asset('/assets/img/demos/law-firm-2/icons/icon-magnific-dollar.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary mt-2 mb-4 pb-3'}" />
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">Dispute Resolution</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Echelon Consultants specializes in resolving disputes efficiently through arbitration, mediation, and litigation.</p>
                            <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                READ MORE
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="py-5">
                <a href="{{ route('services') }}" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <div class="card-body text-center px-4 py-5">
                            <img width="60" height="60" src="{{ asset('/assets/img/demos/law-firm-2/icons/icon-car-accident.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-2 mb-4 pb-3'}" />
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">Intellectual Property Protection</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">We understand the value of your intellectual property and offer a full range of services to protect it.</p>
                            <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                READ MORE
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="py-5">
                <a href="{{ route('services') }}" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <div class="card-body text-center px-4 py-5">
                            <img width="60" height="60" src="{{ asset('/assets/img/demos/law-firm-2/icons/icon-heart-hands.svg') }}" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-stroke-color-primary custom-stroke-width-1 mt-2 mb-4 pb-3'}" />
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-3">Immigration & Visa Services</h2>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Navigating immigration laws can be challenging, but our experts make the process seamless.</p>
                            <span class="custom-read-more d-inline-flex justify-content-center align-items-center text-3 font-weight-medium svg-fill-color-primary">
                                READ MORE
                                <svg class="ms-2" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <polygon stroke="#777" stroke-width="0.1" fill="#777" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container py-5 mt-3">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="text-color-dark font-weight-extra-bold text-10 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200"><em>Echelon Consultants – Your Legal and Corporate Service Experts in Dubai, Colombo, and Singapore</em></h2>
                <p class="font-weight-light text-color-dark mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Echelon Consultants is a distinguished legal and corporate services firm with a strong presence in Dubai, Colombo, and Singapore. Our firm was established with a clear vision: to provide businesses and individuals with the highest quality legal services that are both accessible and effective.</p>
                <!--<p class="positive-ls-3 text-color-grey mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">JOHN DOE - CEO & FOUNDER</p>
                <img src="{{ asset('/assets/img/demos/law-firm-2/signature.png') }}" class="img-fluid appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" alt="" />-->
            </div>
            <div class="col-md-9 col-lg-6 ps-lg-5">
                <div class="position-relative">
                    <div class="custom-shape-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1100">
                        <div class="position-absolute top-0 left-0 right-0 bottom-0 bg-primary" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}"></div>
                    </div>
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                        <img src="{{ asset('/assets/img/demos/law-firm-2/generic/generic-1.webp') }}" class="img-fluid position-relative z-index-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="900" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section overlay overlay-show overlay-op-9 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="background-image: url({{ asset('/assets/img/demos/law-firm-2/backgrounds/background-1.jpg') }}); background-size: cover; background-position: center;">
        <div class="container pt-5 pb-3">
            <div class="row">
                <div class="col text-center">
                    <h2 class="alternative-font-4 text-color-primary font-weight-semibold text-4 mb-2">TESTIMONIALS & REVIEWS</h2>
                    <h3 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 pb-3 mb-5">Satisfied Client Stories</h3>
                    <p class="custom-font-secondary text-color-light custom-font-size-1 font-weight-extra-bold">“</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center px-lg-0">
                    <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 dots-light mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': true, 'autoplay': false, 'autoplayTimeout': 7000}">
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"Echelon Consultants provided exceptional legal advice for our international trade agreements. Their attention to detail and expertise in UAE corporate law ensured our contracts were watertight and compliant with all regulations. We couldn't have navigated the complexities of the legal landscape without their guidance."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- David Albright, CEO, Global Trade Inc.</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"The team at Echelon Consultants is nothing short of extraordinary. They handled our company’s business setup in Dubai with precision and efficiency, making what seemed like a daunting process seamless. Their expertise gave us the confidence to move forward swiftly and with full compliance."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- Fatima Khalid, Founder, Tech Innovators LLC</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"Working with Echelon Consultants was a game-changer for our expansion into the Middle East. Their in-depth knowledge of Dubai's corporate regulations and proactive approach helped us establish our presence quickly and smoothly. We highly recommend their services to any company looking to do business in the region."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- Michael Wang, Director, Green Energy Solutions</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"We were impressed by Echelon Consultants' professionalism and expertise. They assisted us with complex legal issues that could have severely impacted our operations. Thanks to their comprehensive solutions and strategic advice, we avoided potential risks and strengthened our business foundation."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- Priya Menon, CFO, FinTech Innovations</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"Echelon Consultants provided unparalleled support during our corporate restructuring. Their legal team guided us through every step, ensuring that all legal aspects were meticulously handled. The result was a more streamlined and efficient corporate structure, setting us up for long-term success."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- - Ahmed Al Saeed, Managing Director, Al Saeed Holdings</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"I cannot recommend Echelon Consultants enough. Their team was instrumental in helping us secure the necessary licenses and permits for our new venture in Dubai. Their expertise and connections within the local government made the process straightforward, allowing us to launch on time."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- Emily Thompson, COO, Thompson Hospitality Group</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"Echelon Consultants exceeded our expectations with their corporate legal services. Their ability to navigate the intricacies of Dubai's legal framework saved us time and money. The level of satisfaction we experienced with their services is unmatched in our industry."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- Rajesh Kumar, CEO, Innovate Engineering</strong>
                        </div>
                        <div>
                            <p class="text-color-light text-6 custom-font-secondary line-height-4 opacity-8 pb-2 mb-0">"The legal expertise and strategic advice we received from Echelon Consultants were crucial in our successful market entry in Dubai. Their team was responsive, knowledgeable, and always had our best interests at heart. We’re incredibly satisfied with the outcome and look forward to continuing our partnership."</p>
                            <div class="divider divider-primary divider-small mt-2 mb-4 pb-2">
                                <hr class="my-4 mx-auto">
                            </div>
                            <strong class="d-block text-color-light text-4 mb-4">- Sarah Wilson, Director of Operations, HealthTech Solutions</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row counters counters-sm py-5">
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="20" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Business Year</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="3500" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Satiesfied Clients</label>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="2000" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Successfull Cases</label>
                    </div>
                </div>
                <!--<div class="col-sm-6 col-lg-3">
                    <div class="counter">
                        <strong class="text-color-light font-weight-bold line-height-1 text-13 mb-1" data-to="20" data-append="+" data-plugin-options="{'appendWrapper': '<span class=text-color-primary></span>'}">0</strong>
                        <label class="text-color-light font-weight-bold text-4 mb-0">Professional Attorneys</label>
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <section class="section section-height-3 bg-primary-darken border-0 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container py-3">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-3 text-center text-xl-start mb-5 mb-xl-0">
                    <ul class="list list-unstyled d-lg-flex d-xl-block align-items-center justify-content-lg-center mb-0 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1600">
                        <li class="mb-lg-0 mb-xl-3">
                            <i class="icons icon-phone text-color-primary text-5-5 position-relative top-2 me-2"></i>
                            <a href="tel:+971555425513" class="text-color-light font-weight-bold text-decoration-none text-5 hover-effect-2">+971 55 542 5513</a>
                        </li>
                        <li class="mx-lg-5 mx-xl-0 mb-3 mb-lg-0 mb-xl-3">
                            <i class="icons icon-envelope text-color-primary text-6 position-relative top-6 me-2"></i>
                            <a href="mailto:info@echelonconsultant.com" class="text-color-light text-decoration-none text-4 hover-effect-2">info@echelonconsultant.com</a>
                        </li>
                        <li class="text-color-light text-4 mb-0">
                            <i class="icons icon-calendar text-color-primary text-5 position-relative top-3 me-2"></i>
                            Mon - Sat 9am - 6pm
                        </li>
                    </ul>
                </div>
                <div class="col-xl-5 text-center mb-5 mb-xl-0">
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500">
                        <h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 opacity-9 mb-1">ARE YOU LOOKING FOR</h3>
                    </div>
                    <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="750">Experienced Attorneys?</h2>
                    <div class="appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="950">
                        <p class="text-color-light text-3-5 opacity-8 mb-0">Get a free initial consultation right now</p>
                    </div>
                </div>
                <div class="col-xl-3 text-center text-xl-end">
                    <a href="{{ route('contact') }}" data-hash data-hash-offset="0" data-hash-offset-lg="100" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1600">REQUEST CONSULTATION</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section parallax bg-transparent border-0 py-0 m-0" data-plugin-parallax data-image-src="{{ asset('/assets/img/demos/law-firm-2/backgrounds/background-3.webp') }}" data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 8, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}">
        <div class="d-flex justify-content-center">
            <div class="scrollable-parallax-wrapper overflow-hidden">
                <div class="container custom-container-style-1 custom-container-position-1 py-5 my-5 mx-0">
                    <div class="row justify-content-center py-4">
                        <div class="col-lg-9 text-center">
                            <p class="custom-font-secondary text-9 text-color-light line-height-3 opacity-9 mb-0">"Happiness is the meaning and the purpose of life, the whole aim and end of human existence."</p>
                            <div class="d-inline-block divider divider-primary divider-small my-4">
                                <hr class="my-0">
                            </div>
                            <strong class="d-block text-color-light line-height-1 text-4">- Aristotle</strong>
                            <p class="text-color-light opacity-3 text-2 mb-0">(Greek Philosopher)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection("content")