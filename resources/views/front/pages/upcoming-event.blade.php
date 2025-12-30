@extends('front.resource.main')
@section('content')

<main>
        

    <div class="it-breadcrumb-area fix z-index-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="it-breadcrumb-content z-index-1">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">Upcoming Events</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Upcoming Events</span>
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
                        <h2 class="site-title">Upcoming <span>Events</span></h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>


                    <div class="table-responsive">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                               <div class="card-body">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-striped table-bordered first dataTable no-footer" id="DataTables_Table_0"
                                                role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" aria-sort="ascending"
                                                            aria-label="Sl.No.: activate to sort column descending" style="width: 86.5px;">
                                                            Sl.No.</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" aria-label="Date: activate to sort column ascending"
                                                            style="width: 138.75px;">Date</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" aria-label="Title: activate to sort column ascending"
                                                            style="width: 609px;">Title</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                                            colspan="1" aria-label="Download: activate to sort column ascending"
                                                            style="width: 138.75px;">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row" class="odd">
                                                        <td style="width: 10%" class="sorting_1">1<!-- td --></td>
                                                        <td style="width: 15%">02 Nov 2025</td>
                                                        <td style="width: 60%">8th Regional Science and Technology Congress</td>
                                                        <td style="width: 15%"><a
                                                                href="https://www.debracollege.ac.in/UpcomingEvents/19425Regional Science Congress 2025.pdf"
                                                                target="_blank">Download</a></td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td style="width: 10%" class="sorting_1">2<!-- td --></td>
                                                        <td style="width: 15%">23 Oct 2025</td>
                                                        <td style="width: 60%">Call for Abstract 8th Regional Science &amp; Technology Congress
                                                            2025</td>
                                                        <td style="width: 15%"><a
                                                                href="https://www.debracollege.ac.in/UpcomingEvents/1027Call for Abstract _RSC.pdf"
                                                                target="_blank">Download</a></td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td style="width: 10%" class="sorting_1">3<!-- td --></td>
                                                        <td style="width: 15%">20 Oct 2025</td>
                                                        <td style="width: 60%">Call for Abstracts</td>
                                                        <td style="width: 15%"><a
                                                                href="https://www.debracollege.ac.in/UpcomingEvents/93759Call for Abstract.pdf"
                                                                target="_blank">Download</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
    </section>


    </main>

@endsection