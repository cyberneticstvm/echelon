@extends("base")
@section("content")
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url({{ asset('/assets/img/demos/law-firm-2/backgrounds/background-4.webp') }}); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="{{ route('index') }}" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">CONTACT US</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-4">
        <div class="row py-2">
            <div class="col">
                <h2 class="text-color-dark font-weight-bold text-10 mb-4"><em>Echelon Consultants – Contact Us</em></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="row py-5 my-5">
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get In Touch</h2>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Work Inquiries</h3>
                            <a href="tel:+971555425513" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">+971 55 542 5513</a>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                            <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Careers & Press</h3>
                            <a href="tel:+971555425513" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">+971 55 542 5513</a>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                            <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Assistance Hours</h3>
                            <p>Mon - Sat 9:00am - 6:00pm<br> Sunday - CLOSED</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Address and Mail</h2>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
                            <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Address</h3>
                            <p>Baysquare,. <br>Business Bay <br>Dubai, UAE</p>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
                            <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Email</h3>
                            <a href="mailto:info@echelonconsultant.com" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">info@echelonconsultant.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="requestConsultation" class="col-lg-5">
                <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 text-lg mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">LET'S TALK</h3>
                <h2 class="text-color-dark font-weight-bold text-9 text-lg pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Request Consultation</h2>

                <form class="custom-form-style-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    @session('success')
                    <div class="contact-form-success alert alert-success mt-4">
                        {{ session('success') }}
                    </div>
                    @endsession
                    @session('error')
                    <div class="contact-form-error alert alert-danger mt-4">
                        {{ session('error') }}
                    </div>
                    @endsession
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *" value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-radius-0" name="email" id="email" required placeholder="E-mail *" value="{{ old('email') }}">
                        </div>
                        @error('email')
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *" value="{{ old('phone') }}">
                        </div>
                        @error('phone')
                        <small class="text-danger">{{ $errors->first('phone') }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="9" class="form-control border-radius-0" name="message" id="message" required placeholder="Message *">{{ old('message') }}</textarea>
                        </div>
                        @error('message')
                        <small class="text-danger">{{ $errors->first('message') }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-6 mb-4">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha" required>
                        </div>
                        <div class="form-group col-6 mb-4 captcha">
                            <span>{!! captcha_img('math') !!}</span>
                            <a class="btn btn-success btn-refresh"><i class="fa fa-refresh"></i></a>
                        </div>
                        @error('captcha')
                        <small class="text-danger">{{ $errors->first('captcha') }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col text-lg-end mb-0">
                            <button type="submit" class="btn btn-primary btn-submit">REQUEST CONSULTATION</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection("content")