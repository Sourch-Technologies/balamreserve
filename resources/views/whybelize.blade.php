@extends('components.Community')

@section('content')
    <div class="page-heading header-text villa">
        <div class="container">
            <div class="row">
                <img class="col-lg-12"
                                                src="{{ asset('assets/images/image2.png') }}" alt="">
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

                            <h2>BELIZE BEYOND</h2>
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
                                                KEY ADVANTAGES
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
                                                src="{{ asset('assets/images/image9.png') }}" alt="">
                                            {{-- </div> --}}

                                            <div class="col-lg-3">
                                                <h4>A growth oriented project with several further phases to come</h4>
                                                <p>
                                                Belize is a world-renowned tourism destination.
                                                 No other project in Belize offers all these amenities:
                                                 airport, hospital, world class restaurants, spas,
                                                 marina, fitness facilities, art park, school, church, etc.
                                                </p>
                                                <p>
                                                Prime Square completed a hospitality study, suggesting that the hotel project would be very 
                                                profitable with an average daily rate in year 3 of $635 per night
                                                </p>
                                                <p>
                                                Several global brand-name flags have indicated
                                                interest in the first hotel.
                                                 Belize pegged its currency to the USD and adopted English as its official language.
                                                </p>
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
                

          
    
    <div class="section best-deal">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-heading">

                            <h2>ABOUT THE PROJECT</h2>
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
                                                Amenities
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
                                                src="{{ asset('assets/images/image7.png') }}" alt="">
                                            {{-- </div> --}}

                                            <div class="col-lg-3">
                                                <h4>Small Hospital</h4>
                                                <h4>Tele Medicine</h4>
                                                <h4>Professional Healing</h4>
                                                <h4>Non denominational Church</h4>
                                                <h4>Security Building</h4>
                                                <h4>Art Park</h4>
                                                <h4>The Conrad Net-Zero Institute</h4>
                                                <h4>Marina</h4>
                                                <h4>Golf Course</h4>
                                                <h4>High speed WiFi</h4>
                                                <h4>Organic Farming</h4>
                                                
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
        </div>
    </div>
</div>
</div>
        </div>

        <div class="featured section">
        <div class="container-fluid">
            <div class="row">



                <div class="col-lg-5">
                    
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item" style="padding: 8px; ">
                        <ul>
                                <h6>
                                Location
                                </h6>
                                <li>9,500 Acres of owned and titled land, located opposite Ambergris Cay <br></li>
                                <li>5 miles of oceanfront</li>
                                <li>Land value at 46 million USD</li>
                                <h6>
                                Net-Zero Achievement 
                                </h6>
                                <li>1,000 acres standing forest maintained</li>
                                <li>1.5 million trees to be planted on 3,000 acres</li>
                                <li>600 acres of protected mangroves</li>
                                <li>300,000 + tons of CO2 absorbed</li><h6>
                                Task
                                </h6>
                                <li>Up to 3,500 homes/condos</li>
                                <li>Up to 1,500 hotel rooms, which will create thousands of new jobs</li>
                                <li>Estimated IRR 20% +</li>
                            </ul>

                        </div>
                    </div>

                </div>

                <div class="col-lg-7">
                    <div class="info-table">

                        <img src="{{ asset('assets/images/image8.png') }}" style="width: 100%; height: 400px;"
                            alt="" />

                    </div>
                </div>
            </div>
        </div>


 
@endsection
