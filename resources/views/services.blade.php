@extends("base")
@section("content")
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url({{ asset('/assets/img/demos/law-firm-2/backgrounds/background-4.webp') }}); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="{{ route('index') }}" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">PRACTICE AREAS</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Practice Areas</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-4">
        <div class="row py-2">
            <div class="col">
                <h2 class="text-color-dark font-weight-bold text-10 mb-4"><em>Echelon Consultants – Our Core Practice Areas</em></h2>
            </div>
        </div>
        <div class="row row-gutter-sm">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-body text-center p-4 py-5">
                        <strong class="d-block text-color-primary text-7 mb-2">Corporate Law & Business Setup</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">700+ Cases</p>
                        <p class="mb-0">We assist in the formation of companies, providing legal guidance on the best structures and jurisdictions for your business. Our services include company registration, drafting legal documents, obtaining licenses, and ensuring full compliance with local regulations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-body text-center p-4 py-5">
                        <strong class="d-block text-color-primary text-7 mb-2">Mergers & Acquisitions</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">550+ Cases</p>
                        <p class="mb-0">Our team has extensive experience in advising on complex M&A transactions, helping businesses grow through strategic acquisitions and mergers. We provide end-to-end support, from due diligence to closing the deal.</p>
                        <br />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-body text-center p-4 py-5">
                        <strong class="d-block text-color-primary text-7 mb-2">Dispute<br /> Resolution</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">250+ Cases</p>
                        <p class="mb-0">Echelon Consultants specializes in resolving disputes efficiently through arbitration, mediation, and litigation. Our legal experts are adept at finding the most effective solutions to safeguard your interests.</p>
                        <br /><br />
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-body text-center p-4 py-5">
                        <strong class="d-block text-color-primary text-7 mb-2">Intellectual Property Protection</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">180+ Protections</p>
                        <p class="mb-0">We understand the value of your intellectual property and offer a full range of services to protect it. From trademarks to patents, we ensure that your innovations and brands are legally safeguarded.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-body text-center p-4 py-5">
                        <strong class="d-block text-color-primary text-7 mb-2">Immigration & Visa Services</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">400+ Customers</p>
                        <p class="mb-0">Navigating immigration laws can be challenging, but our experts make the process seamless. We assist with all types of visa applications, residency permits, and citizenship processes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="card border-0 border-radius-0 custom-box-shadow-1">
                    <div class="card-body text-center p-4 py-5">
                        <strong class="d-block text-color-primary text-7 mb-2">Corporate Services</strong>
                        <p class="custom-font-secondary font-weight-bold text-color-dark text-4 mb-4">100+ Customers</p>
                        <p class="mb-0">Getting a trade license in Dubai is essential for starting your business. Our expert team simplifies the complex process, helping you choose the right license, guiding you through registration, and managing the paperwork. With our support, you can focus on growing your business while we handle the rest.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection("content")