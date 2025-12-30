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
                            <h3 class="it-breadcrumb-title">Internship Cell</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Activities</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Internship Cell</span>
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
                        <h2 class="site-title">Internship <span>Cell</span></h2>
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

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/105.jpg"></td><td>Dr. Rupa Dasgupta</td><td>Principal, Chairperson</td><td><a href="FacultyProfile.aspx?id=105">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/79.jpeg"></td><td>Partha Pratim Pramanik</td><td>Convener</td><td><a href="FacultyProfile.aspx?id=79">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/89.jpeg"></td><td>Dr. Amit Kumar Jana</td><td>Members</td><td><a href="FacultyProfile.aspx?id=89">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/107.jpg"></td><td>Dr. Barnali Das</td><td>Members</td><td><a href="FacultyProfile.aspx?id=107">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/102.jpg"></td><td>Dr. Subhankar Manna</td><td>Members</td><td><a href="FacultyProfile.aspx?id=102">View Profile</a></td></tr><tr><th>6</th><td><img class="staff" src="../FacultyImage/73.jpg"></td><td>Sandipan Maity</td><td>Jt Convener</td><td><a href="FacultyProfile.aspx?id=73">View Profile</a></td></tr><tr><th>7</th><td><img class="staff" src="../FacultyImage/22.jpg"></td><td>Sunirmal Dolai</td><td>Members</td><td><a href="FacultyProfile.aspx?id=22">View Profile</a></td></tr><tr><th>8</th><td><img class="staff" src="../FacultyImage/92.jpg"></td><td>Dr. Joydev De</td><td>Members</td><td><a href="FacultyProfile.aspx?id=92">View Profile</a></td></tr><tr><th>9</th><td><img class="staff" src="../FacultyImage/55.jpg"></td><td>Subhadip Pal</td><td>Members</td><td><a href="FacultyProfile.aspx?id=55">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>

@endsection