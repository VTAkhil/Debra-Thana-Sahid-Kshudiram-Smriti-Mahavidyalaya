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
                            <h3 class="it-breadcrumb-title">Collegiate Student Grievance Redressal Committee</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Activities</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Collegiate Student Grievance Redressal Committee</span>
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
                        <h2 class="site-title">Collegiate Student <span>Grievance Redressal Committee</span></h2>
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

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/105.jpg"></td><td>Dr. Rupa Dasgupta</td><td>Principal, Contact No: 9733846160</td><td><a href="FacultyProfile.aspx?id=105">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/166.jpg"></td><td>Bipasha Majumder (De)</td><td>Assistant Professor, Contact No: 9434454548</td><td><a href="FacultyProfile.aspx?id=166">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/48.jpg"></td><td>Koyel Ghosh</td><td>Assistant Professor, Contact No: 9831657453</td><td><a href="FacultyProfile.aspx?id=48">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/10.jpg"></td><td>Manas Chakraborty</td><td>State Aided College Teacher, Contact No: 9002758926</td><td><a href="FacultyProfile.aspx?id=10">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/1222.jpg"></td><td>Koushiki Karak</td><td>Student, 4th Sem, Physics Dept., Contact No: 7407799441</td><td><a href="FacultyProfile.aspx?id=1222">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>

@endsection