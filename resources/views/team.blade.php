@extends("base")
@section("content")
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url({{ asset('/assets/img/demos/law-firm-2/backgrounds/background-4.webp') }}); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="{{ route('index') }}" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">OUR TEAM</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Our Team</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-4">
        <div class="row py-2">
            <div class="col">
                <h2 class="text-color-dark font-weight-bold text-10 mb-4"><em>Echelon Consultants – Our Team</em></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="mb-0">Our team is our greatest asset. Comprising seasoned legal consultants, each member of Echelon Consultants brings a wealth of knowledge and expertise to the table. We are proud of our diverse team, which includes experts in various areas of law, ensuring that we can address all of our clients' needs. Our consultants are not just legal advisors; they are strategic partners who work closely with clients to achieve their business objectives.</p>
            </div>

        </div>
        <div class="row row-gutter-sm py-2 mt-5">
            <div class="col-md-3 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <img src="{{ asset('/assets/img/team/shihan.png') }}" class="card-img-top border-radius-0" alt="Mr. Shihan Wijayagunawardane Image" />
                        <div class="card-body px-4 py-5">
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Mr. Shihan Wijayagunawardane</h2>
                            <p class="text-color-grey positive-ls-3 mb-3">PARTNER</p>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2"></p>
                            <br />
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
                <a href="demo-law-firm-2-attorney-detail.html" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <img src="{{ asset('/assets/img/team/yogesh.png') }}" class="card-img-top border-radius-0" alt="Mr. Yogesh Bhola Image" />
                        <div class="card-body px-4 py-5">
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Mr. Yogesh Bhola</h2>
                            <p class="text-color-grey positive-ls-3 mb-3">PARTNER</p>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2"></p>
                            <br /><br />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection("content")