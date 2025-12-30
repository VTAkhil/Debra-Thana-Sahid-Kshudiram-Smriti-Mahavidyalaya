@extends('front.resource.main')
@section('content')

<main>
        

    <style>
        .staff{
            height: 100px;
            width: 100px;
        }
        @media screen and (max-width: 992px) {
            .staff{
                height: 100px;
                width: 100px;
            }
         }
    </style>

    <div class="it-breadcrumb-area fix z-index-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="it-breadcrumb-content z-index-1">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">Abouse</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Activities</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Aboutose</span>
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
                        <h2 class="site-title">About <span>KshudiramBose</span></h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Photo</th>
                                    <th>Members Name</th>
                                    <th>Designation</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/55.jpg"></td><td>Subhadip Pal</td><td>SACT I in Physical Education, PROGRAMME OFFICER, (UNIT- 1)</td><td><a href="FacultyProfile.aspx?id=55">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/152.jpg"></td><td>Sri Haraprasad Jana (NTS Casual)</td><td>NTS (UNIT- 1)</td><td><a href="FacultyProfile.aspx?id=152">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/22.jpg"></td><td>Sunirmal Dolai</td><td>Assistant Professor in Education, PROGRAMME OFFICER (UNIT- 2)</td><td><a href="FacultyProfile.aspx?id=22">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/1.jpg"></td><td>Dr. Soumya Kanti Hota</td><td>Assistant Professor in Mathematics, PROGRAMME OFFICER (UNIT- 3)</td><td><a href="FacultyProfile.aspx?id=1">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/118.jpeg"></td><td>Mr. Partha Adhikary</td><td>NTS (UNIT- 3)</td><td><a href="FacultyProfile.aspx?id=118">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>



                    <div class="it-about-2-section-title-box mb-20">
                        <h2 class="site-title">Different Activities <span>of the NSS Units</span></h2>
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
                                    <td>Different Activities of the NSS Units 2023-2024</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2023-24.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Different Activities of the NSS Units 2022-2023</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2022-23.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Different Activities of the NSS Units 2021-2022</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2021-22.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Different Activities of the NSS Units 2020-2021</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2020-21.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Different Activities of the NSS Units 2019-2020</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2019-20.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>Different Activities of the NSS Units 2018-2019</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2018-19.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>7</th>
                                    <td>Different Activities of the NSS Units 2017-2018</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2017-18.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>8</th>
                                    <td>Different Activities of the NSS Units 2016-2017</td>
                                    <td><a href="Pdf/Activities/NSS/NSS_Activities_2016-17.pdf" target="_blank">Download</a></td>
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
