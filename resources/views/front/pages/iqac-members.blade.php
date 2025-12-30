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
                            <h3 class="it-breadcrumb-title">Internal Quality Assurance Cell (IQAC)</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Accreditation</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>About IQAC</span>
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
                        <h2 class="site-title">IQAC <span>Members</span></h2>
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

                                <tr><th>1</th><td><img class="staff" src="../FacultyImage/105.jpg"></td><td>Dr. Rupa Dasgupta</td><td>Principal &amp; Chairperson</td><td><a href="FacultyProfile.aspx?id=105">View Profile</a></td></tr><tr><th>2</th><td><img class="staff" src="../FacultyImage/40.jpg"></td><td>Saikat Chakrabarti</td><td>Jt Coordinator</td><td><a href="FacultyProfile.aspx?id=40">View Profile</a></td></tr><tr><th>3</th><td><img class="staff" src="../FacultyImage/49.jpg"></td><td>Dr. Pankoj Kanti Sarkar</td><td>Jt Coordinator</td><td><a href="FacultyProfile.aspx?id=49">View Profile</a></td></tr><tr><th>4</th><td><img class="staff" src="../FacultyImage/166.jpg"></td><td>Bipasha Majumder (De)</td><td>Teacher Representative</td><td><a href="FacultyProfile.aspx?id=166">View Profile</a></td></tr><tr><th>5</th><td><img class="staff" src="../FacultyImage/61.jpg"></td><td>Dr. Arpita Tripathy</td><td>Teacher Representative</td><td><a href="FacultyProfile.aspx?id=61">View Profile</a></td></tr><tr><th>6</th><td><img class="staff" src="../FacultyImage/92.jpg"></td><td>Dr. Joydev De</td><td>Teacher Representative</td><td><a href="FacultyProfile.aspx?id=92">View Profile</a></td></tr><tr><th>7</th><td><img class="staff" src="../FacultyImage/57.jpg"></td><td>Dr. Mithun Banerjee</td><td>Teacher Representative</td><td><a href="FacultyProfile.aspx?id=57">View Profile</a></td></tr><tr><th>8</th><td><img class="staff" src="../FacultyImage/1.jpg"></td><td>Dr. Soumya Kanti Hota</td><td>Teacher Representative</td><td><a href="FacultyProfile.aspx?id=1">View Profile</a></td></tr><tr><th>9</th><td><img class="staff" src="../FacultyImage/107.jpg"></td><td>Dr. Barnali Das</td><td>Teacher Representative</td><td><a href="FacultyProfile.aspx?id=107">View Profile</a></td></tr><tr><th>10</th><td><img class="staff" src="../FacultyImage/89.jpeg"></td><td>Dr. Amit Kumar Jana</td><td>Teacher Representative</td><td><a href="FacultyProfile.aspx?id=89">View Profile</a></td></tr><tr><th>11</th><td><img class="staff" src="../FacultyImage/146.jpg"></td><td>Sri Pradip Kr. Paul</td><td>Administrative officer</td><td><a href="FacultyProfile.aspx?id=146">View Profile</a></td></tr><tr><th>12</th><td><img class="staff" src="../FacultyImage/150.jpg"></td><td>Sri Barun Chakraborty</td><td>Administrative officer</td><td><a href="FacultyProfile.aspx?id=150">View Profile</a></td></tr><tr><th>13</th><td><img class="staff" src="../FacultyImage/147.jpg"></td><td>Sri Subrata Panda</td><td>Administrative officer</td><td><a href="FacultyProfile.aspx?id=147">View Profile</a></td></tr><tr><th>14</th><td><img class="staff" src="../FacultyImage/1204.jpg"></td><td>Prof. Ramkrishna Maiti</td><td>Member from Management</td><td><a href="FacultyProfile.aspx?id=1204">View Profile</a></td></tr><tr><th>15</th><td><img class="staff" src="../FacultyImage/1209.jpg"></td><td>Prof. Madhumangal Pal</td><td>External Expert as Representative from local society (Professor)</td><td><a href="FacultyProfile.aspx?id=1209">View Profile</a></td></tr><tr><th>16</th><td><img class="staff" src="../FacultyImage/1210.jpg"></td><td>Prof. Pinaki Ranjan Das</td><td>External Expert as Representative from local society (Professor)</td><td><a href="FacultyProfile.aspx?id=1210">View Profile</a></td></tr><tr><th>17</th><td><img class="staff" src="../FacultyImage/1211.jpg"></td><td>Sri Chandan Bose</td><td>General Secretary, Chamber of Commerce, Paschim Medinipur, Representative from Industry</td><td><a href="FacultyProfile.aspx?id=1211">View Profile</a></td></tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>

@endsection