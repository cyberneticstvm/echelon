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
                <a href="#" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <img src="{{ asset('/assets/img/team/shihan.png') }}" class="card-img-top border-radius-0" alt="Mr. Shihan Wijayagunawardane Image" />
                        <div class="card-body px-4 py-5">
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Mr. Shihan Wijayagunawardane, LLB (Hons), London</h2>
                            <p class="text-color-grey positive-ls-3 mb-3">PARTNER</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-9">
                <p class="font-weight-light text-color-dark line-height-7 mb-2">
                    Mr. Shihan Wijayagunawardane is a seasoned Attorney-at-Law and Legal Consultant, boasting more than 15 years of comprehensive experience in litigation, arbitration, counseling, and contract drafting within the legal domain. His notable proficiency spans a broad spectrum of legal disciplines, notably in commercial/company law and intellectual property law/patent law.
                </p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">Mr. Wijayagunawardane obtained his legal qualifications from esteemed institutions, including Sri Lanka Law College, where he attained his Attorney-at-Law qualification, and the University of London, where he earned a Bachelor of Law (HONS) degree in 2008, followed by a Diploma in Law in 2006.</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">His professional journey encompasses a significant tenure as a private legal practitioner, commencing in 2009, during which he has adeptly represented clients in a myriad of legal forums, ranging from the Supreme Court and Appellate Courts to lower courts in Sri Lanka. Throughout his tenure, he has exhibited prowess in litigation and arbitration, securing favorable outcomes for numerous clients across diverse legal spheres, including commercial disputes, intellectual property disputes, property disputes, family law matters, and criminal law matters.</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">In his capacity as Senior Partner at Echelon Consultants since 2020, Mr. Wijayagunawardane has augmented his legal acumen by providing tailored legal consultancy services to various corporate entities and groups. His responsibilities encompass the drafting of articles of association, agreements, and provision of legal opinions.</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">Additionally, he offers strategic guidance to clients on a spectrum of legal intricacies, encompassing regulatory compliance, contract disputes, intellectual property issues, and employment law matters. Noteworthy among his clientele are prominent groups of companies, indicative of his esteemed reputation within the legal fraternity.</p>
            </div>
            <!-- <div class="col-md-3 col-lg-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
                <a href="#" class="text-decoration-none">
                    <div class="card custom-card-style-1 border-0 border-radius-0 custom-box-shadow-1">
                        <img src="{{ asset('/assets/img/team/yogesh.png') }}" class="card-img-top border-radius-0" alt="Mr. Yogesh Bhola Image" />
                        <div class="card-body px-4 py-5">
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">Mr. Yogesh Bhola</h2>
                            <p class="text-color-grey positive-ls-3 mb-3">PARTNER</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-9">
                <p class="font-weight-light text-color-dark line-height-7 mb-2">Mr. Yogesh Bhola, brings forth a wealth of expertise amassed over more than 22 years of diverse professional experience. His proficiency extends to offering specialized advice on critical aspects of business, including Company Formation, Business set up, Branch/representative office establishment, Offshore incorporation, and the Registration of Trade Marks, Patents, and Copyrights. Additionally, Mr. Bhola is adept at overseeing the incorporation and setup of companies, as well as the dissolution and deregistration of companies, with a specific focus on DIFC Family Office services.</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">Yogesh's membership in BNI (Business Network International) since 2021 indicates his involvement in a professional networking organization aimed at facilitating referrals and business connections among its members and for his clients. BNI operates through structured weekly meetings where members gather to build relationships, exchange referrals, and support each other's businesses. By being a BNI member, Yogesh benefits from access to a diverse network of professionals across various industries, opportunities for business growth, and a platform for enhancing his professional reputation and credibility within his local business community.</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">Mr. Yogesh Bhola emerges as a seasoned professional with a diverse skill set, contributing significantly to the success of Aurega Group. His extensive experience and specialized knowledge in various facets of business set him apart as a strategic advisor and facilitator in the complex landscape of corporate services, intellectual property, and business establishment.</p>
                <p class="font-weight-light text-color-dark line-height-7 mb-2">Expertise: Business Setup in UAE (Mainland & Freezone) § Offshore Company Setup & International Bank Account Solutions § Business Plan & Market Research § Family Office Setup § Government Liaising, PRO & UAE Visa services § Intellectual Property Rights(Trademark, Copyrights & Patents) § Business Advisory Service & BPO Solutions § Mystery Shopping Services § Accounting, bookkeeping and Auditing services. We also deal in a wide range of Corporate Consulting Services for High Net-Worth Individuals and MNCs who would like to expand in UAE as well as internationally. With strong relations with many free zones & our repute with the local authorities, we exclusively deal with a wide range of benefits for free-zone and mainland incorporations both for local as well as international clients. Offshore agents for JAFZA, RAK IBC & AFZA</p>
            </div> -->
        </div>
    </div>
</div>
@endsection("content")