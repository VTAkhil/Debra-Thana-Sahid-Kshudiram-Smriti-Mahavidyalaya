@extends('front.resource.main')
@section('content')

<main>
        

    <div class="it-breadcrumb-area fix z-index-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="it-breadcrumb-content z-index-1">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">Academic Calender</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Academics</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Academic Calender</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-area z-index-1">
        <div class="container page">
            <div class="row">
                <div class="col-xl-12 col-lg-12 wow itfadeLeft" style="visibility: visible; animation-name: itfadeLeft;">

                    <div class="it-about-2-section-title-box mb-20">
                        <h2 class="site-title">Academic <span>Calender</span></h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Title</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Academic Calendar Odd Sem (2025-26)</td>
                                    <td><a href="Pdf/Academic-calendar/Academic_Calendar_Odd_Sem_2025-26.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Academic Calendar 2024-25</td>
                                    <td><a href="Pdf/Academic-calendar/Academic_Calendar_2024-25.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Academic Calendar Even Sem (2023-24)</td>
                                    <td><a href="Pdf/Academic-calendar/Academic_Calendar_2023-24.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Academic Calendar of Sem-I, Sem-III, Sem-V (2020-21)</td>
                                    <td><a href="Pdf/Academic-calendar/Academic_Calendar_2020_21.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Academic Calendar of Sem-I, Sem-III, Sem-V (2019-20)</td>
                                    <td><a href="Pdf/Academic-calendar/Academic_Calendar_2019_20.pdf" target="_blank">Download</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    </div>
                
            </div>
        </div>
    </section>


    </main>

@endsection