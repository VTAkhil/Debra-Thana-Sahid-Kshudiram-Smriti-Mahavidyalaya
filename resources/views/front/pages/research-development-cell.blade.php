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
                            <h3 class="it-breadcrumb-title">Research Development Cell</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Activities</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Research Development Cell</span>
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
                        <h2 class="site-title">Research <span> Development Cell</span></h2>
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

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/105.jpg"></td><td>Dr. Rupa Dasgupta</td><td>Principal, Chairperson</td><td><a href="FacultyProfile.aspx?id=105">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/9.jpeg"></td><td>Dr. Biplab Dutta</td><td>Conveners</td><td><a href="FacultyProfile.aspx?id=9">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/49.jpg"></td><td>Dr. Pankoj Kanti Sarkar</td><td>Conveners</td><td><a href="FacultyProfile.aspx?id=49">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/57.jpg"></td><td>Dr. Mithun Banerjee</td><td>Members</td><td><a href="FacultyProfile.aspx?id=57">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/"></td><td>BEETOSHOK SINGHA</td><td>Members</td><td><a href="FacultyProfile.aspx?id=172">View Profile</a></td></tr><tr><th>6</th><td><img class="staff" src="../FacultyImage/9.jpeg"></td><td>Dr. Biplab Dutta</td><td>Members</td><td><a href="FacultyProfile.aspx?id=9">View Profile</a></td></tr><tr><th>7</th><td><img class="staff" src="../FacultyImage/41.jpg"></td><td>Dr. Mrinal Kanti Saren</td><td>Members</td><td><a href="FacultyProfile.aspx?id=41">View Profile</a></td></tr><tr><th>8</th><td><img class="staff" src="../FacultyImage/137.jpg"></td><td>Dr. Sanjukta Sahoo</td><td>(Librarian)</td><td><a href="FacultyProfile.aspx?id=137">View Profile</a></td></tr><tr><th>9</th><td><img class="staff" src="../FacultyImage/11.jpg"></td><td>Dr. Udayan Bhattacharya</td><td>Members</td><td><a href="FacultyProfile.aspx?id=11">View Profile</a></td></tr><tr><th>10</th><td><img class="staff" src="../FacultyImage/42.jpeg"></td><td>Dr. Shatrughan Kahar</td><td>Members</td><td><a href="FacultyProfile.aspx?id=42">View Profile</a></td></tr><tr><th>11</th><td><img class="staff" src="../FacultyImage/1.jpg"></td><td>Dr. Soumya Kanti Hota</td><td>Members</td><td><a href="FacultyProfile.aspx?id=1">View Profile</a></td></tr><tr><th>12</th><td><img class="staff" src="../FacultyImage/92.jpg"></td><td>Dr. Joydev De</td><td>Members</td><td><a href="FacultyProfile.aspx?id=92">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>

@endsection