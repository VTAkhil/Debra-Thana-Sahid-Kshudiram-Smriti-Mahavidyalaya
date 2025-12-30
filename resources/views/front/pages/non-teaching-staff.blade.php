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
                            <h3 class="it-breadcrumb-title">Non-Teaching Staff</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Organization</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Non-Teaching Staff</span>
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
                        <h2 class="site-title">Non-Teaching <span> Staff</span></h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl.No.</th>
                                    <th>Photo</th>
                                    <th>Department</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/126.jpeg"></td><td>Automobile</td><td>Mr. Somnath Manna</td><td>Technical Assistant</td><td><a href="FacultyProfile.aspx?id=126">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/118.jpeg"></td><td>BCA</td><td>Mr. Partha Adhikary</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=118">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/182.jpg"></td><td>Botany</td><td>Sudipta Bhunia</td><td>Casual Non-Teaching Staff</td><td><a href="FacultyProfile.aspx?id=182">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/38.jpg"></td><td>Chemistry</td><td>Santanu Samai</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=38">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/39.jpg"></td><td>Chemistry</td><td>Sk Mahammad Rofi</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=39">View Profile</a></td></tr><tr><th>6</th><td><img class="staff" src="../FacultyImage/"></td><td>Computer Science</td><td>Mrs. Krishna Bhattacharya</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=170">View Profile</a></td></tr><tr><th>7</th><td><img class="staff" src="../FacultyImage/"></td><td>Computer Science</td><td>Basudeb Bala</td><td>Casual Non-Teaching Staff</td><td><a href="FacultyProfile.aspx?id=171">View Profile</a></td></tr><tr><th>8</th><td><img class="staff" src="../FacultyImage/37.jpg"></td><td>English</td><td>Dilip Kumar Mandal</td><td>Office Staff</td><td><a href="FacultyProfile.aspx?id=37">View Profile</a></td></tr><tr><th>9</th><td><img class="staff" src="../FacultyImage/85.jpg"></td><td>Geography</td><td>Mahadev Murmu</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=85">View Profile</a></td></tr><tr><th>10</th><td><img class="staff" src="../FacultyImage/6.jpeg"></td><td>Mathematics</td><td>Sarat Hemram</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=6">View Profile</a></td></tr><tr><th>11</th><td><img class="staff" src="../FacultyImage/146.jpg"></td><td>Non Teaching Staff</td><td>Sri Pradip Kr. Paul</td><td>Head Clerk</td><td><a href="FacultyProfile.aspx?id=146">View Profile</a></td></tr><tr><th>12</th><td><img class="staff" src="../FacultyImage/147.jpg"></td><td>Non Teaching Staff</td><td>Sri Subrata Panda</td><td>Accounts Section</td><td><a href="FacultyProfile.aspx?id=147">View Profile</a></td></tr><tr><th>13</th><td><img class="staff" src="../FacultyImage/148.jpg"></td><td>Non Teaching Staff</td><td>Sri Tapas Paria (NTS Casual)</td><td>Accounts Section</td><td><a href="FacultyProfile.aspx?id=148">View Profile</a></td></tr><tr><th>14</th><td><img class="staff" src="../FacultyImage/149.jpg"></td><td>Non Teaching Staff</td><td>Sri Avijit Samanta (NTS Casual)</td><td>Accounts Section</td><td><a href="FacultyProfile.aspx?id=149">View Profile</a></td></tr><tr><th>15</th><td><img class="staff" src="../FacultyImage/150.jpg"></td><td>Non Teaching Staff</td><td>Sri Barun Chakraborty</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=150">View Profile</a></td></tr><tr><th>16</th><td><img class="staff" src="../FacultyImage/151.jpg"></td><td>Non Teaching Staff</td><td>Sri Debabrata Maity (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=151">View Profile</a></td></tr><tr><th>17</th><td><img class="staff" src="../FacultyImage/152.jpg"></td><td>Non Teaching Staff</td><td>Sri Haraprasad Jana (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=152">View Profile</a></td></tr><tr><th>18</th><td><img class="staff" src="../FacultyImage/153.jpg"></td><td>Non Teaching Staff</td><td>Sri Avijit Das (Typist)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=153">View Profile</a></td></tr><tr><th>19</th><td><img class="staff" src="../FacultyImage/154.jpg"></td><td>Non Teaching Staff</td><td>Sri Debasish Chakraborty (Clerk)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=154">View Profile</a></td></tr><tr><th>20</th><td><img class="staff" src="../FacultyImage/155.jpg"></td><td>Non Teaching Staff</td><td>Sri Arup Dolai (Clerk)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=155">View Profile</a></td></tr><tr><th>21</th><td><img class="staff" src="../FacultyImage/156.jpg"></td><td>Non Teaching Staff</td><td>Sri Soumendra Nath Dey (Peon)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=156">View Profile</a></td></tr><tr><th>22</th><td><img class="staff" src="../FacultyImage/157.jpg"></td><td>Non Teaching Staff</td><td>Sri Sridam Patar (Peon)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=157">View Profile</a></td></tr><tr><th>23</th><td><img class="staff" src="../FacultyImage/158.jpg"></td><td>Non Teaching Staff</td><td>Sri Jugal Kishore Adhikary (Contractual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=158">View Profile</a></td></tr><tr><th>24</th><td><img class="staff" src="../FacultyImage/159.jpg"></td><td>Non Teaching Staff</td><td>Sri Partha Adhikary (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=159">View Profile</a></td></tr><tr><th>25</th><td><img class="staff" src="../FacultyImage/160.jpg"></td><td>Non Teaching Staff</td><td>Sri Rudra Prasad Mondal (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=160">View Profile</a></td></tr><tr><th>26</th><td><img class="staff" src="../FacultyImage/161.jpg"></td><td>Non Teaching Staff</td><td>Sri Susanta Dey (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=161">View Profile</a></td></tr><tr><th>27</th><td><img class="staff" src="../FacultyImage/162.jpg"></td><td>Non Teaching Staff</td><td>Smt Chandrani Das (Day) (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=162">View Profile</a></td></tr><tr><th>28</th><td><img class="staff" src="../FacultyImage/163.jpg"></td><td>Non Teaching Staff</td><td>Sri Anindya Das (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=163">View Profile</a></td></tr><tr><th>29</th><td><img class="staff" src="../FacultyImage/164.jpg"></td><td>Non Teaching Staff</td><td>Ohida Bibi (NTS Casual)</td><td>Cash Section</td><td><a href="FacultyProfile.aspx?id=164">View Profile</a></td></tr><tr><th>30</th><td><img class="staff" src="../FacultyImage/179.jpeg"></td><td>Nutrition</td><td>Tapas Kumar Samanta</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=179">View Profile</a></td></tr><tr><th>31</th><td><img class="staff" src="../FacultyImage/1192.jpeg"></td><td>Nutrition</td><td>Susanta Chakraborty</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=1192">View Profile</a></td></tr><tr><th>32</th><td><img class="staff" src="../FacultyImage/56.jpg"></td><td>Physical Education</td><td>Purna Samanta</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=56">View Profile</a></td></tr><tr><th>33</th><td><img class="staff" src="../FacultyImage/177.png"></td><td>Physical Education</td><td>Haraprasad Jana</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=177">View Profile</a></td></tr><tr><th>34</th><td><img class="staff" src="../FacultyImage/99.jpeg"></td><td>Physics</td><td>Abhishek Maity</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=99">View Profile</a></td></tr><tr><th>35</th><td><img class="staff" src="../FacultyImage/100.jpeg"></td><td>Physics</td><td>Nepal Dolai</td><td>Laboratory Attendant</td><td><a href="FacultyProfile.aspx?id=100">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>

@endsection