<x-layout>




    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <span class="category"><em></em></span>
                    <h2><br /></h2>
                </div>
            </div>

        </div>
    </div>



    <div class="featured section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>| CLIMATE CHANGE</h6>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">

                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                    The <strong>planet is on fire</strong> and the consequences are on us.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    NO PLANET, NO PEOPLE, NO PROFIT
                                </button>
                            </h2>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Let's put, our mind together and create a net zero world where our children can live
                                    sustainably.
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing
                                    elit, sed doesn't eiusmod tempor incididunt ut labore
                                    consectetur <code>adipiscing</code> elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="info-table">

                        <img src="{{ asset('assets/images/fire.png') }}" alt="" />


                        <img src="{{ asset('assets/images/flood.png') }}" alt="" />


                        <img src="{{ asset('assets/images/bear.png') }}" alt="" />


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="featured section">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-7">
                    <div class="info-table">

                        <img src="{{ asset('assets/images/porch.png') }}" style="width: 300px; height: 400px;"
                            alt="" />


                        <img src="{{ asset('assets/images/tortuse.png') }} " style="width: 300px; height: 400px;"
                            alt="" />


                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>| Highlights of our technical / environmental solutions</h6>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item" style="padding: 10px; ">



                            <strong style="line-height: 50px">
                                “I am excited to bring over 30 years of relevant experience in global real estate
                                development to this new and exciting venture in Belize. With what I have learned,
                                combined
                                with the latest green technologies, we will make this community a showcase for
                                post-covid
                                eco-developments.”

                                Dr. Hart Porsch
                            </strong>


                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="section best-deal">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading">

                            <h2>Project Roadmap</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tabs-content">
                            <div class="row">
                                <div class="nav-wrapper">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="appartment-tab"
                                                data-bs-toggle="tab" data-bs-target="#appartment" type="button"
                                                role="tab" aria-controls="appartment" aria-selected="true">
                                                Predevelopment Phase
                                            </button>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="appartment" role="tabpanel"
                                        aria-labelledby="appartment-tab">
                                        <div class="row">
                                            {{-- <div class="col-lg-9"> --}}
                                            <img class="col-lg-9"
                                                src="{{ asset('assets/images/balmRoadmap.png') }}" alt="">
                                            {{-- </div> --}}

                                            <div class="col-lg-3">
                                                <h4>Extra Info About Property</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, do eiusmod tempor pack incididunt ut labore et
                                                    dolore magna aliqua quised ipsum suspendisse.
                                                    <br /><br />When you need free CSS templates, you can
                                                    simply type TemplateMo in any search engine website.
                                                    In addition, you can type TemplateMo Portfolio,
                                                    TemplateMo One Page Layouts, etc.
                                                </p>
                                                <div class="icon-button">
                                                    <a href="property-details.html"><i class="fa fa-calendar"></i>
                                                        Learn More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</x-layout>
