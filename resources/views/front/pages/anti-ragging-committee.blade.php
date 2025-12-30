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
                            <h3 class="it-breadcrumb-title">Anti-ragging Committee</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Activities</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Anti-ragging Committee</span>
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
                        <h2 class="site-title">Anti-ragging <span>Committee</span></h2>
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

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/105.jpg"></td><td>Dr. Rupa Dasgupta</td><td>Principal, Chairperson, Mob-9733846160</td><td><a href="FacultyProfile.aspx?id=105">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/1217.jpg"></td><td>BDO, Debra</td><td>Members</td><td><a href="FacultyProfile.aspx?id=1217">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/1218.jpg"></td><td>OC, Debra</td><td>Members</td><td><a href="FacultyProfile.aspx?id=1218">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/1219.jpg"></td><td>Reporter, Ananda bazar Patrika (Midnapur-Kharagpur)</td><td>Members</td><td><a href="FacultyProfile.aspx?id=1219">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/61.jpg"></td><td>Dr. Arpita Tripathy</td><td>TS, Convener Mob: - 9874638067</td><td><a href="FacultyProfile.aspx?id=61">View Profile</a></td></tr><tr><th>6</th><td><img class="staff" src="../FacultyImage/57.jpg"></td><td>Dr. Mithun Banerjee</td><td>TS</td><td><a href="FacultyProfile.aspx?id=57">View Profile</a></td></tr><tr><th>7</th><td><img class="staff" src="../FacultyImage/70.jpeg"></td><td>Sk Sarfaraj Ali</td><td>TS</td><td><a href="FacultyProfile.aspx?id=70">View Profile</a></td></tr><tr><th>8</th><td><img class="staff" src="../FacultyImage/41.jpg"></td><td>Dr. Mrinal Kanti Saren</td><td>TS</td><td><a href="FacultyProfile.aspx?id=41">View Profile</a></td></tr><tr><th>9</th><td><img class="staff" src="../FacultyImage/146.jpg"></td><td>Sri Pradip Kr. Paul</td><td>NTS</td><td><a href="FacultyProfile.aspx?id=146">View Profile</a></td></tr><tr><th>10</th><td><img class="staff" src="../FacultyImage/162.jpg"></td><td>Smt Chandrani Das (Day) (NTS Casual)</td><td>NTS</td><td><a href="FacultyProfile.aspx?id=162">View Profile</a></td></tr><tr><th>11</th><td><img class="staff" src="../FacultyImage/1220.jpg"></td><td>Representatives of Parents of 1st Sem-Two each from BA &amp; Bsc Hons, BA &amp; BSC Gen</td><td>Members</td><td><a href="FacultyProfile.aspx?id=1220">View Profile</a></td></tr><tr><th>12</th><td><img class="staff" src="../FacultyImage/1221.jpg"></td><td>Representatives of Students of 1st Sem-Two each from BA &amp; Bsc Hons, BA &amp; BSC Gen</td><td>Members</td><td><a href="FacultyProfile.aspx?id=1221">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>

@endsection