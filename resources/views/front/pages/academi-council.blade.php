@extends('front.resource.main')
@section('content')
    <div class="main-content">
        <div class="it-breadcrumb-area fix z-index-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="it-breadcrumb-content z-index-1">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">Academic Council</h3>
                            </div>
                            <div class="it-breadcrumb-list-wrap">
                                <div class="it-breadcrumb-list">
                                    <span><a href="Index.aspx">Home</a></span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>College</span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>Academic Council</span>
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
                            <h3 class="text-uppercase mt-0">Academic <span class="text-theme-colored2"> Council</span></h3>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <div class="col-xl-12 col-lg-12 wow itfadeLeft"
                                style="visibility: visible; animation-name: itfadeLeft;">
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
                                                <td>Resolution of Academic Council</td>
                                                <td><a href="Pdf/Autonomous/Resolution_of_Academic_Council.pdf" target="_blank">Download</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h4 class="widget-title line-bottom mt-30">Chairperson:-</h4>
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
                                            <?php 
                                                $chairperson = DB::table('faculty_registrations')
                                                ->leftJoin('committee_assigns','faculty_registrations.id','=','committee_assigns.faculty_id')
                                                ->select('faculty_registrations.id','faculty_registrations.faculty_designation','faculty_registrations.faculty_name','committee_assigns.faculty_new_designation','faculty_registrations.faculty_image')
                                                ->where('faculty_registrations.faculty_designation', 'Principal')
                                                ->first();
                                            ?>
                                            <tr>
                                                <th>1</th>
                                                <td>
                                                    <img class="staff" src="{{ url('/public/uploads/faculty/' . $chairperson->faculty_image) }}" style="width:80px;height:80px">
                                                </td>
                                                <td>{{ $chairperson->faculty_name }}</td>
                                                <td>{{ $chairperson->faculty_designation }},{{ $chairperson->faculty_new_designation }}</td>
                                                <td><a target="_blank" href="{{ url('FacultyProfile/' . $chairperson->id) }}">View Profile</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="widget-title line-bottom mt-30">All Heads of the Department in the Autonomous College:-</h4>
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
                                            <tr>
                                                <th>1</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Prof. Anilava Kaviraj</td>
                                                <td>Academic Advisor, Former Professor , Kalyani University</td>
                                                <td><a href="FacultyProfile.aspx?id=1225">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Avishek Musib</td>
                                                <td>Head/ Incharge, Department of Bengali</td>
                                                <td><a href="FacultyProfile.aspx?id=8">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Sunirmal Dolai</td>
                                                <td>Head/ Incharge, Department of Education</td>
                                                <td><a href="FacultyProfile.aspx?id=22">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Bipasha Majumder (De)</td>
                                                <td>Head/ Incharge, Department of English (UG&amp; PG)</td>
                                                <td><a href="FacultyProfile.aspx?id=166">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Mr.Saikat Chakrabarti</td>
                                                <td>Head/ Incharge, Department of History</td>
                                                <td><a href="FacultyProfile.aspx?id=46">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Koyel Ghosh</td>
                                                <td>Head/ Incharge, Department of Philosophy</td>
                                                <td><a href="FacultyProfile.aspx?id=48">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>7</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Mithun Banerjee</td>
                                                <td>Head/ Incharge, Department of Political Science</td>
                                                <td><a href="FacultyProfile.aspx?id=57">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>8</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Arpita Tripathy</td>
                                                <td>Head/ Incharge, Department of Sanskrit</td>
                                                <td><a href="FacultyProfile.aspx?id=61">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>9</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Bipin Murmu</td>
                                                <td>Head/ Incharge, Department of Santali</td>
                                                <td><a href="FacultyProfile.aspx?id=68">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>10</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Pritam Patra</td>
                                                <td>Head/ Incharge, Department of Music</td>
                                                <td><a href="FacultyProfile.aspx?id=47">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>11</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Subhadip Pal</td>
                                                <td>Head/ Incharge, Department of Phy. Education</td>
                                                <td><a href="FacultyProfile.aspx?id=55">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>12</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dibyendu B Samanta</td>
                                                <td>Head/ Incharge, Department of Phy. Education</td>
                                                <td><a href="FacultyProfile.aspx?id=54">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>13</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Rakesh Paul</td>
                                                <td>Head/ Incharge, Department of Computer Science</td>
                                                <td><a href="FacultyProfile.aspx?id=75">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>14</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Sk Sarfaraj Ali</td>
                                                <td>Head/ Incharge, Department of Chemistry</td>
                                                <td><a href="FacultyProfile.aspx?id=70">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>15</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Partha Pratim Pramanik</td>
                                                <td>Head/ Incharge, Department of Geography</td>
                                                <td><a href="FacultyProfile.aspx?id=79">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>16</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Soumya Kanti Hota</td>
                                                <td>Head/ Incharge, Department of Mathematics</td>
                                                <td><a href="FacultyProfile.aspx?id=1">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>17</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Amit Kumar Jana</td>
                                                <td>Head/ Incharge, Department of Nutrition.</td>
                                                <td><a href="FacultyProfile.aspx?id=89">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>18</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Joydev De</td>
                                                <td>Head/ Incharge, Department of Physics</td>
                                                <td><a href="FacultyProfile.aspx?id=92">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>19</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Subhankar Manna</td>
                                                <td>Head/ Incharge, Department of Physiology</td>
                                                <td><a href="FacultyProfile.aspx?id=102">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>20</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Sk. Khairul Basar</td>
                                                <td>Head/ Incharge, Department of Botany</td>
                                                <td><a href="FacultyProfile.aspx?id=71">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>21</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Barnali Das</td>
                                                <td>Head/ Incharge, Department of BMLT.</td>
                                                <td><a href="FacultyProfile.aspx?id=107">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>22</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Mr. Prasanta Dutta</td>
                                                <td>Head/ Incharge, Department of B.C.A</td>
                                                <td><a href="FacultyProfile.aspx?id=115">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>23</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Mr. Somnath Manna</td>
                                                <td>Head/ Incharge, Department of Automobile( B.Voc)</td>
                                                <td><a href="FacultyProfile.aspx?id=126">View Profile</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="widget-title line-bottom mt-30">Four Senior Teachers Members:-</h4>
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
                                            <tr>
                                                <th>1</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Pankoj Kanti Sarkar</td>
                                                <td>Asst. Professor, Department of Philosophy.</td>
                                                <td><a href="FacultyProfile.aspx?id=49">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Gobinda Das</td>
                                                <td>Asst. Professor, Department of Philosophy.</td>
                                                <td><a href="FacultyProfile.aspx?id=62">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Debabrata Ghosh</td>
                                                <td>SACT, Department of Mathematics .</td>
                                                <td><a href="FacultyProfile.aspx?id=2">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Tanushri Maity</td>
                                                <td>SACT, Department of Geography</td>
                                                <td><a href="FacultyProfile.aspx?id=80">View Profile</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="widget-title line-bottom mt-30">Four Experts / academicians outside the Autonomous College:-</h4>
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
                                            <tr>
                                                <th>1</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Prof. Debidas Ghosh</td>
                                                <td>Professor, Vidyasagar University</td>
                                                <td><a href="FacultyProfile.aspx?id=1226">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Gopal Chandra Bera</td>
                                                <td>Former Principal, Midnapore College( Autonomous)</td>
                                                <td><a href="FacultyProfile.aspx?id=1227">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Partha Pratim Chakravorty</td>
                                                <td>, Associtate Professor R.N.L.K.Womens’College</td>
                                                <td><a href="FacultyProfile.aspx?id=1228">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Sri.Chandan Bose</td>
                                                <td>General Secretary, Paschim Medinipur Chamber of Commerce</td>
                                                <td><a href="FacultyProfile.aspx?id=1229">View Profile</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="widget-title line-bottom mt-30">University Nominee:-</h4>
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
                                            <tr>
                                                <th>1</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Prof. Sruajit Ghosh</td>
                                                <td>Professor, Dept. of Physics, Vidyasagar University.</td>
                                                <td><a href="FacultyProfile.aspx?id=1230">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Prof. Pinaki Das</td>
                                                <td>Professor, Department of Economics, Vidyasagr University .</td>
                                                <td><a href="FacultyProfile.aspx?id=1231">View Profile</a></td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Prof. Subir Chandra Dasgupta</td>
                                                <td>Former Professor, Department of Zoology, Moulana Azad College</td>
                                                <td><a href="FacultyProfile.aspx?id=1232">View Profile</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="widget-title line-bottom mt-30">Controller of Examination:-</h4>
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

                                            <tr>
                                                <th>1</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Dr. Rupa Dasgupta</td>
                                                <td>Principal, Chairperson</td>
                                                <td><a href="FacultyProfile.aspx?id=105">View Profile</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h4 class="widget-title line-bottom mt-30">A Faculty member nominated by Principal ( Member Secretary):-</h4>
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
                                            <tr>
                                                <th>1</th>
                                                <td><img class="staff" src="images/profile-image.jpg"></td>
                                                <td>Mr.Saikat Chakrabarti</td>
                                                <td>Head/ Incharge, Department of History</td>
                                                <td><a href="FacultyProfile.aspx?id=46">View Profile</a></td>
                                            </tr>
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
