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
                            <h3 class="it-breadcrumb-title">Placement Cell</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Activities</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Placement Cell</span>
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
                        <h2 class="site-title">Placement <span>Cell</span></h2>
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

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/105.jpg"></td><td>Dr. Rupa Dasgupta</td><td>Principal, Chairperson</td><td><a href="FacultyProfile.aspx?id=105">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/73.jpg"></td><td>Sandipan Maity</td><td>Convener</td><td><a href="FacultyProfile.aspx?id=73">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/115.png"></td><td>Mr. Prasanta Dutta</td><td>Members</td><td><a href="FacultyProfile.aspx?id=115">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/114.jpg"></td><td>Dr. Amita Samanta Adhya</td><td>Convener</td><td><a href="FacultyProfile.aspx?id=114">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/78.jpg"></td><td>Rabisankar Pramanik</td><td>Members</td><td><a href="FacultyProfile.aspx?id=78">View Profile</a></td></tr><tr><th>6</th><td><img class="staff" src="../FacultyImage/104.jpg"></td><td>Sumana Paul</td><td>Members</td><td><a href="FacultyProfile.aspx?id=104">View Profile</a></td></tr><tr><th>7</th><td><img class="staff" src="../FacultyImage/92.jpg"></td><td>Dr. Joydev De</td><td>Members</td><td><a href="FacultyProfile.aspx?id=92">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>


@endsection