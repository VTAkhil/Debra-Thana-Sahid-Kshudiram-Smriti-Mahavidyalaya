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
                            <h3 class="it-breadcrumb-title">Right to Information (RTI)</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Activities</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>RTI</span>
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
                        <h2 class="site-title">RTI <span>Act</span></h2>
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

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/49.jpg"></td><td>Dr. Pankoj Kanti Sarkar</td><td>Asst. Professor in Philosophy (SPIO)</td><td><a href="FacultyProfile.aspx?id=49">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/40.jpg"></td><td>Saikat Chakrabarti</td><td>Asst. Professor in History (Apellate authority)</td><td><a href="FacultyProfile.aspx?id=40">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>



                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Quarterly Return</th>
                                    <td><a href="Pdf/RTI/WBIC_Quarterly_Returns.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>Statutory Declaration of RTI Act 2005</th>
                                    <td><a href="Pdf/RTI/Statutory_Declaration_RTI_Act_2005.pdf" target="_blank">Download</a></td>
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