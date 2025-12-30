@extends('front.resource.main')
@section('content')
        <div class="main-content">

         <div class="it-breadcrumb-area fix z-index-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="it-breadcrumb-content z-index-1">
                                    <div class="it-breadcrumb-title-box">
                                        <h3 class="it-breadcrumb-title">Finance Committee</h3>
                                    </div>
                                    <div class="it-breadcrumb-list-wrap">
                                        <div class="it-breadcrumb-list">
                                            <span><a href="Index.aspx">Home</a></span>
                                            <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                            <span>College</span>
                                            <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                            <span>Finance Committee</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <section>
                <div class="container pt-70 pb-40">
                    <div class="section-title">
                        <div class="row">
                            <div class="col-md-12">
                                 <h3 class="text-uppercase mt-0">Finance    <span class="text-theme-colored2"> Committee</span></h3>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                            
                           <div class="col-xl-12 col-lg-12 wow itfadeLeft" style="visibility: visible; animation-name: itfadeLeft;">

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
                                                <td>Resolution of Finance Committee</td>
                                                <td><a href="Pdf/Autonomous/Resolution of Finance Committee.pdf" target="_blank">Download</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                            <tr><th>1</th><td><img class="staff" src="images/profile-image.jpg"></td><td>Dr. Rupa Dasgupta</td><td>Principal, Chairperson</td><td><a href="FacultyProfile.aspx?id=105">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="images/profile-image.jpg"></td><td>Dr. Pankoj Kanti Sarkar</td><td>Bursar (To be nominated by the Governing Body of the college)</td><td><a href="FacultyProfile.aspx?id=49">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="images/profile-image.jpg"></td><td>Bipasha Majumder (De)</td><td>Assiciate Professor, Senior Most Faculty Member</td><td><a href="FacultyProfile.aspx?id=166">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="images/profile-image.jpg"></td><td>Sri Subrata Panda</td><td>Accountant (in charge of Finance and Accounts)</td><td><a href="FacultyProfile.aspx?id=147">View Profile</a></td></tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div> 
                        </div>
                    </div>
                </div>
            </section>

        </div>

        @endsection