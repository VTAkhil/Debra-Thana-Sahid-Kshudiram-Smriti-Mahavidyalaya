@extends('front.resource.main')
@section('content')
<?php 
    $subjects = DB::table('subjects')->where("id",$faculty->subject_id)->first(); 
    $qualification = DB::table('faculty_qualifications')->where("faculty_id",$faculty->id)->first();
?>
    <main>
        <style>
            .thumb.teacher {
                text-align: center;
                padding: 15px 0;
                border-radius: 25px 25px 25px 0;
                border: 2px solid #116e63;
                box-shadow: 0 5px 10px #c4d8db;
                transition: var(--transition);
            }
        </style>
        <div class="it-breadcrumb-area fix z-index-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="it-breadcrumb-content z-index-1">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">{{ $faculty->faculty_name }}</h3>
                            </div>
                            <div class="it-breadcrumb-list-wrap">
                                <div class="it-breadcrumb-list">
                                    <span><a href="Index.aspx">Home</a></span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>{{ $subjects->subject }}</span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>{{ $faculty->faculty_name }}</span>
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
                    <div class="col-xl-12 col-lg-12 wow itfadeLeft">
                        <div class="it-about-2-section-title-box mb-20">
                            <h2 class="site-title"><span id="ctl00_Body_lblFacultyName">{{ $faculty->faculty_name }}</span></h2>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumb teacher">
                                    <img id="ctl00_Body_Image1" src="{{ url('/public/uploads/faculty/' . $faculty->faculty_image) }}" style="height:240px;width:220px;border-width:0px;" />
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="table-responsive mt-10">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="width: 30%">Designation :</td>
                                                <td style="width: 70%"><span id="ctl00_Body_lblDesignation">{{ $faculty->faculty_designation }}</span></td>
                                            </tr>
                                            <tr>
                                                <td>Department :</td>
                                                <td><span id="ctl00_Body_lblDepartment"></span>{{ $subjects->subject }}</td>
                                            </tr>
                                            <tr>
                                                <td>Educational Qualifications :</td>
                                                <td><span id="ctl00_Body_lblQualification">
                                                    @if(!empty($qualification->faculty_qualification))
                                                        {{ $qualification->faculty_qualification }}
                                                    @endif
                                                </span></td>
                                            </tr>
                                            <tr>
                                                <td>Area of Specialization :</td>
                                                <td><span id="ctl00_Body_lblSpecialization"></span>{{ $faculty->faculty_specialization }}</td>
                                            </tr>
                                            <tr>
                                                <td>Area of Research:</td>
                                                <td><span id="ctl00_Body_lblAreaOfResearch"></span>{{ $faculty->area_of_research }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile No :</td>
                                                <td><span id="ctl00_Body_lblMobileNo"></span>{{ $faculty->faculty_mobile }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email :</td>
                                                <td><span id="ctl00_Body_lblEmail"></span>{{ $faculty->faculty_email }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php
                                    $qualifications = DB::table('faculty_qualifications')->where("faculty_id",$faculty->id)->where("subject_id",$subjects->id)->where("status","1")->get();
                                    if($qualifications->isNotEmpty()){
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="4">Qualifications</th>
                                            </tr>
                                            <tr>
                                                <th style="width: 10%">Sl. no.</th>
                                                <th style="width: 25%">Qualification</th>
                                                <th style="width: 15%">Year of Passing</th>
                                                <th style="width: 50%">Institute</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                foreach ($qualifications as $qualification) {
                                            ?>
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $qualification->faculty_qualification }}</td>
                                                    <td>{{ $qualification->year_of_passing }}</td>
                                                    <td>{{ $qualification->institute_name }}</td>
                                                </tr>
                                            <?php $i++;} ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                    } 

                                    $experiences = DB::table('faculty_experiences')->where("faculty_id",$faculty->id)->where("subject_id",$subjects->id)->where("status","1")->get();
                                    if($experiences->isNotEmpty()){
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Experience</th>
                                            </tr>
                                            <tr>
                                                <th style="width: 15%">Sl. no.</th>
                                                <th style="width: 85%">Experience</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                foreach ($experiences as $experience) {
                                            ?>
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $experience->faculty_experience }}</td>
                                                </tr>
                                            <?php $i++;} ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                    }
                                    
                                    $publications = DB::table('publications')->where("faculty_id",$faculty->id)->where("subject_id",$subjects->id)->where("status","1")->get();
                                    if($publications->isNotEmpty()){
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="10">Paper Publication</th>
                                            </tr>
                                            <tr>
                                                <th style="width: 8%">Sl. no.</th>
                                                <th style="width: 20%">Title of Paper</th>
                                                <th style="width: 15%">Publication / Journal Name</th>
                                                <th style="width: 7%">Date</th>
                                                <th style="width: 8%">Category</th>
                                                <th style="width: 10%">Published In</th>
                                                <th style="width: 8%">Volume</th>
                                                <th style="width: 8%">ISSN No.</th>
                                                <th style="width: 8%">Link</th>
                                                <th style="width: 8%">Download</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                foreach ($publications as $publication) {
                                            ?>
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $publication->publications_paper_title }}</td>
                                                    <td>{{ $publication->publications_name }}</td>
                                                    <td>{{ date('d M Y', strtotime($publication->publications_date)) }}</td>
                                                    <td>{{ $publication->publications_category }}</td>
                                                    <td>{{ $publication->published_in }}</td>
                                                    <td>{{ $publication->volume }}</td>
                                                    <td>{{ $publication->issn_no }}</td>
                                                    <td> 
                                                        @if(!empty($publication->publications_link))
                                                            <a href="{{ $publication->publications_link }}" target="_blank"><i class="fa-solid fa-link"></i></a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!empty($publication->publications_file))
                                                            <a href="{{ url('/public/uploads/publication/' . $publication->publications_file) }}" target="_blank">Download</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            <?php $i++;} ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                    } 
                                    $i = 1;
                                    $seminars = DB::table('seminars')->where("faculty_id",$faculty->id)->where("subject_id",$subjects->id)->where("status","1")->get();
                                    if($seminars->isNotEmpty()){
                                ?>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="8">Seminar / Workshop attainded by teacher</th>
                                            </tr>
                                            <tr>
                                                <th style="width: 10%">Sl. no.</th>
                                                <th style="width: 25%">Title of the seminar / Workshop</th>
                                                <th style="width: 15%">Organized by</th>
                                                <th style="width: 10%">Level</th>
                                                <th style="width: 10%">Invited Speaker</th>
                                                <th style="width: 10%">Wheather Present Paper</th>
                                                <th style="width: 10%">Title of the Paper</th>
                                                <th style="width: 10%">Download Certificate</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                foreach ($seminars as $seminar) {
                                            ?>
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $seminar->seminar_title }}</td>
                                                    <td>{{ $seminar->organiser }}</td>
                                                    <td>{{ $seminar->enter_level }}</td>
                                                    <td>{{ $seminar->invited_speaker }}</td>
                                                    <td>{{ $seminar->wheather_present_paper }}</td>
                                                    <td>{{ $seminar->paper_title }}</td>
                                                    <td>
                                                        @if(!empty($seminar->seminar_file))
                                                            <a href="{{ url('/public/uploads/seminar/' . $seminar->seminar_file) }}" target="_blank">Download</a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection