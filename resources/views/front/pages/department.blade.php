@extends('front.resource.main')
@section('content')
    <?php $subjects = DB::table('subjects')->where('subject', $request->id)->first(); ?>
    <div class="main-content">
        <div class="it-breadcrumb-area fix z-index-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="it-breadcrumb-content z-index-1">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">Department of {{ $subjects->subject }}</h3>
                            </div>
                            <div class="it-breadcrumb-list-wrap">
                                <div class="it-breadcrumb-list">
                                    <span><a href="Index.aspx">Home</a></span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>College</span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>Department of {{ $subjects->subject }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="about-area z-index-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 wow itfadeLeft"
                        style="visibility: visible; animation-name: itfadeLeft;">
                        <div class="it-course-details">
                            <div class="it-course-details-left">
                                <div class="it-course-details-nav-box">
                                    <nav>
                                        <ul class="course-details2-nav" id="course_details2_nav">
                                            <li class="current"><a href="#section1">Date of Initiation</a></li>
                                            <li class=""><a href="#section2">Programs Offered</a></li>
                                            <li class=""><a href="#section3">PSO &amp; CO</a></li>
                                            <li class=""><a href="#section4">Course Structure</a></li>
                                            <li class=""><a href="#section12">Syllabus</a></li>
                                            <li class=""><a href="#section5">Lesson Plan</a></li>
                                            <li class=""><a href="#section7">Available Infrastructure</a></li>
                                            <li class=""><a href="#section6">Results</a></li>
                                            <li class=""><a href="#section8">Notice Board</a></li>
                                            <li class=""><a href="#section9">Placement and Progression</a></li>
                                            <li class=""><a href="#section10">Our Staff</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="it-course-details-right page">
                                <div id="section1" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">About the <span>Department</span></h2>
                                        <div class="double-line-bottom-theme-colored-2"></div>
                                    </div>
                                    <p><strong>Date Of Initiation Of The Department:</strong> 2006</p>
                                    <p><strong>Programme Offered:</strong></p>
                                    <ol class="disk">
                                        <li>B.A. Hons in Bengali (Since 2007)</li>
                                        <li>B.A. General in Bengali (Since 2006)</li>
                                        <li>M.A in Bengali (Since 2024)</li>
                                    </ol>
                                </div>

                                <div id="section2" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">Details of <span>Programs Offered</span> by the Department:
                                        </h2>
                                        <div class="double-line-bottom-theme-colored-2"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Program Level</th>
                                                    <td>Under Graduate</td>
                                                </tr>
                                                <tr>
                                                    <th>Duration in Months</th>
                                                    <td>48</td>
                                                </tr>
                                                <tr>
                                                    <th>Eligibility</th>
                                                    <td><a href="Pdf/Admission/2024/Eligibility_Criteria_2024.pdf"
                                                            target="_blank">Download</a></td>
                                                </tr>
                                                <tr>
                                                    <th>Medium of Instruction</th>
                                                    <td>Bengali</td>
                                                </tr>
                                                <tr>
                                                    <th>Course structure</th>
                                                    <td>According to the CBCS system under VU</td>
                                                </tr>
                                                <tr>
                                                    <th>Student sanctioned Strength</th>
                                                    <td><a href="Pdf/Admission/2024/Intake_Capacity_2024-25.pdf"
                                                            target="_blank">Download</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="section3" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">Program-Specific Outcome &amp; <span>Course Outcome</span>
                                        </h2>
                                        <div class="double-line-bottom-theme-colored-2"></div>
                                    </div>
                                    <a class="btn theme-btn2" href="Pdf/CO/Hons/Bengali.pdf" target="_blank">PSO &amp; CO of
                                        Bengali Hons</a>
                                    <a class="btn theme-btn" href="Pdf/CO/General/Bengali.pdf" target="_blank">PSO &amp; CO
                                        of Bengali General</a>
                                </div>

                                <div id="section4" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">Course <span>Structure</span></h2>
                                        <div class="double-line-bottom-theme-colored-2"></div>
                                    </div>
                                    <a class="btn theme-btn2" href="UGCourseStructure.aspx" target="_blank">Click here <i
                                            class="fa fa-arrow-right-long pl-10"></i></a>
                                </div>

                                <div id="section14" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title"><span>Routine</span></h2>
                                    </div>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="table-responsive">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="DataTables_Table_0_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table
                                                                    class="table table-striped table-bordered first dataTable no-footer"
                                                                    id="DataTables_Table_0" role="grid"
                                                                    aria-describedby="DataTables_Table_0_info">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_asc" tabindex="0"
                                                                                aria-controls="DataTables_Table_0"
                                                                                rowspan="1" colspan="1"
                                                                                aria-sort="ascending"
                                                                                aria-label="Sl.No.: activate to sort column descending">
                                                                                Sl.No.</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_0"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Date: activate to sort column ascending">
                                                                                Date</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_0"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Title: activate to sort column ascending">
                                                                                Title</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_0"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Download: activate to sort column ascending">
                                                                                Download</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                            $i = 1;
                                                                            $routines = DB::table('routines')->where('subject_id', $subjects->id)->where('status', '1')->orderBy('id', 'desc')->get();
                                                                        @endphp
                                                                        @foreach ($routines as $routine)
                                                                            <tr>
                                                                                <td class="sorting_1 fw-bold">{{ $i }}</td>
                                                                                <td>{{ date('d M Y', strtotime($routine->routine_date)) }}</td>
                                                                                <td>{{ $routine->routine_title }}</td>
                                                                                <td>
                                                                                    @if (!empty($routine->routine_file))
                                                                                        <a href="{{ url('public/uploads/routine/' . $routine->routine_file) }}" target="_blank">Download</a>
                                                                                    @elseif(!empty($routine->routine_link))
                                                                                        <a href="{{ $routine->routine_link }}" target="_blank">Open Link</a>
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                            @php $i++; @endphp
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="section12" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title"><span>Syllabus</span></h2>
                                    </div>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="table-responsive">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="DataTables_Table_1_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table
                                                                    class="table table-striped table-bordered first dataTable no-footer"
                                                                    id="DataTables_Table_1" role="grid"
                                                                    aria-describedby="DataTables_Table_1_info">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_asc" tabindex="0"
                                                                                aria-controls="DataTables_Table_1"
                                                                                rowspan="1" colspan="1"
                                                                                aria-sort="ascending"
                                                                                aria-label="Sl.No.: activate to sort column descending">
                                                                                Sl.No.</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_1"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Date: activate to sort column ascending">
                                                                                Date</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_1"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Title: activate to sort column ascending">
                                                                                Title</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_1"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Download: activate to sort column ascending">
                                                                                Download</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                            $i = 1;
                                                                            $syllabi = DB::table('syllabi')->where('subject_id', $subjects->id)->where('status', '1')->orderBy('id', 'desc')->get();
                                                                        @endphp
                                                                        @foreach ($syllabi as $syllabus)
                                                                            <tr role="row" class="odd">
                                                                                <td class="sorting_1 fw-bold">{{ $i }}</td>
                                                                                <td>{{ date('d M Y', strtotime($syllabus->syllabus_date)) }}</td>
                                                                                <td>{{ $syllabus->syllabus_title }}</td>
                                                                                <td>
                                                                                    @if (!empty($syllabus->syllabus_file))
                                                                                        <a href="{{ url('public/uploads/syllabus/' . $syllabus->syllabus_file) }}" target="_blank">Download</a>
                                                                                    @elseif(!empty($syllabus->syllabus_link))
                                                                                        <a href="{{ $syllabus->syllabus_link }}" target="_blank">Open Link</a>
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                            @php $i++; @endphp
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="section5" class="mb-50"></div>
                                <div id="section6" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">Results <span>(Last 5 years)</span></h2>
                                    </div>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Year</th>
                                                    <th>Appeared</th>
                                                    <th>Passed</th>
                                                    <th>Pass Percentage</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                    $results = DB::table('results')->where('subject_id', $subjects->id)->where('status', '1')->orderBy('id', 'desc')->get();
                                                @endphp
                                                @foreach ($results as $result)
                                                    <tr>
                                                        <td class="fw-bold">{{ $result->session }}</td>
                                                        <td>{{ $result->student_appeared }}</td>
                                                        <td>{{ $result->student_passed }}</td>
                                                        <td>{{ $result->pass_percentage }}</td>
                                                    </tr>
                                                    @php $i++; @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="section7" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title"><span>Infrastructure Available </span>In The Department:
                                        </h2>
                                        <div class="double-line-bottom-theme-colored-2"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th>Total number of ICT enables classrooms</th>
                                                    <td>02</td>
                                                </tr>
                                                <tr>
                                                    <th>Total Number of classrooms</th>
                                                    <td>03</td>
                                                </tr>
                                                <tr>
                                                    <th>Departmental library</th>
                                                    <td>Present</td>
                                                </tr>
                                                <tr>
                                                    <th>Total number of Books in Departmental Library</th>
                                                    <td>237</td>
                                                </tr>
                                                <tr>
                                                    <th>Total number of Bengali Books in Central Library</th>
                                                    <td>1950</td>
                                                </tr>
                                                <tr>
                                                    <th>Book Bank</th>
                                                    <td>Present</td>
                                                </tr>
                                                <tr>
                                                    <th>Number of books in Book Bank</th>
                                                    <td>42</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="section8" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">Seminars / Conferences / <span> Workshops / Events
                                                organized</span></h2>
                                    </div>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sl. No.</th>
                                                    <th>Date</th>
                                                    <th>Title of Seminars / Workshops</th>
                                                    <th>Level</th>
                                                    <th>Type</th>
                                                    <th>Speakers</th>
                                                    <th>Duration</th>
                                                    <th>Download</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                    $upseminars = DB::table('up_seminars')->where('subject_id', $subjects->id)->where('status', '1')->orderBy('id', 'desc')->get();
                                                @endphp
                                                @foreach ($upseminars as $upseminar)
                                                    <tr>
                                                        <td class="fw-bold">{{ $i }}</td>
                                                        <td>{{ date('d M Y', strtotime($upseminar->seminar_date)) }}</td>
                                                        <td>{{ $upseminar->seminar_titile }}</td>
                                                        <td>{{ $upseminar->Seminar_level }}</td>
                                                        <td>{{ $upseminar->seminar_type }}</td>
                                                        <td>{{ $upseminar->speakers_name }}</td>
                                                        <td>{{ $upseminar->enter_duration }}</td>
                                                        <td>
                                                            @if (!empty($upseminar->seminar_file))
                                                                <a href="{{ url('public/uploads/upseminar/' . $upseminar->seminar_file) }}" target="_blank">Download</a>
                                                            @elseif (!empty($upseminar->seminar_link))
                                                                <a href="{{ $upseminar->seminar_link }}" target="_blank">Open Link</a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @php $i++; @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="section9" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">Departmental <span> Notice Board</span></h2>
                                    </div>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="table-responsive">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div id="DataTables_Table_2_wrapper"
                                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <table
                                                                    class="table table-striped table-bordered first dataTable no-footer"
                                                                    id="DataTables_Table_2" role="grid"
                                                                    aria-describedby="DataTables_Table_2_info">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="sorting_asc" tabindex="0"
                                                                                aria-controls="DataTables_Table_2"
                                                                                rowspan="1" colspan="1"
                                                                                aria-sort="ascending"
                                                                                aria-label="Sl.No.: activate to sort column descending">
                                                                                Sl.No.</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_2"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Start Date: activate to sort column ascending">
                                                                                Start Date</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_2"rowspan="1"
                                                                                colspan="1"aria-label="End Date: activate to sort column ascending">
                                                                                End Date</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_2"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Title: activate to sort column ascending">
                                                                                Title</th>
                                                                            <th class="sorting" tabindex="0"
                                                                                aria-controls="DataTables_Table_2"
                                                                                rowspan="1" colspan="1"
                                                                                aria-label="Download: activate to sort column ascending">
                                                                                Download</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @php
                                                                            $i = 1;
                                                                            $notices = DB::table('notices')->where('subject_id', $subjects->id)->where('status', '1')->orderBy('id', 'desc')->get();
                                                                        @endphp
                                                                        @foreach ($notices as $notice)
                                                                            <tr role="row" class="odd">
                                                                                <td class="fw-bold">{{ $i }}
                                                                                </td>
                                                                                <td>{{ date('d M Y', strtotime($notice->start_date)) }}
                                                                                </td>
                                                                                <td>{{ date('d M Y', strtotime($notice->end_date)) }}
                                                                                </td>
                                                                                <td>{{ $notice->notice_title }}</td>
                                                                                <td>
                                                                                    @if (!empty($notice->notice_file))
                                                                                        <a href="{{ url('public/uploads/notice/' . $notice->notice_file) }}" target="_blank">Download</a>
                                                                                        @elseif(!empty($notice->notice_link))
                                                                                        <a href="{{ $notice->notice_link }}" target="_blank">Open Link</a>
                                                                                    @endif
                                                                                </td>
                                                                            </tr>
                                                                            @php $i++; @endphp
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="it-about-2-section-title-box mt-30 mb-20">
                                        <h2 class="site-title">Placement &amp; Progression <span> of Students</span></h2>
                                    </div>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name of Student</th>
                                                    <th>Year</th>
                                                    <th>Placement / Progression</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                    $placementProgressions = DB::table('placement_progressions')->where('subject_id', $subjects->id)->where('status', '1')->orderBy('id', 'desc')->get();
                                                @endphp
                                                @foreach ($placementProgressions as $placementProgression)
                                                    <tr>
                                                        <td>{{ $placementProgression->student_name }}</td>
                                                        <td>{{ $placementProgression->year }}</td>
                                                        <td>{{ $placementProgression->placement_progression }}</td>
                                                    </tr>
                                                    @php $i++; @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div id="section10" class="mb-50">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title">Our <span> Staff</span></h2>
                                        <div class="double-line-bottom-theme-colored-2"></div>
                                    </div>
                                    <div class="dept-teacher">
                                        <div class="container p-0">
                                            <div class="row">
                                                @php
                                                    $i = 1;
                                                    $facultyRegistrations = DB::table('faculty_registrations')
                                                    ->leftJoin('subjects', 'subjects.id', '=', 'faculty_registrations.subject_id')
                                                    ->leftJoin('faculty_assigns', 'faculty_assigns.faculty_id', '=', 'faculty_registrations.id')
                                                    ->select(
                                                        'faculty_registrations.*',
                                                        'subjects.subject as subject_name',
                                                        'faculty_assigns.another_subject_id'
                                                    )
                                                    ->where('faculty_registrations.status', '1')
                                                    ->where(function ($query) use ($subjects) {
                                                        $query->where('faculty_registrations.subject_id', $subjects->id)
                                                            ->orWhere(function ($q) use ($subjects) {
                                                                $q->where('faculty_assigns.another_subject_id', $subjects->id)
                                                                    ->where('faculty_assigns.status', '1');
                                                            });
                                                    })
                                                    ->orderBy('faculty_registrations.id', 'desc')
                                                    ->get();

                                                @endphp
                                                @foreach ($facultyRegistrations as $facultyRegistration)
                                                    <div class="col-lg-4 col-md-4 wow itfadeUp"
                                                        style="visibility: visible; animation-name: itfadeUp;">
                                                        <div class="it-team-item text-center">
                                                            <div class="it-team-thumb p-relative">
                                                                <img src="{{ url('/public/uploads/faculty/' . $facultyRegistration->faculty_image) }}">
                                                            </div>
                                                            <div class="it-team-content">
                                                                <h4 class="it-team-title">
                                                                    <a class="border-line" href="{{ url('FacultyProfile/' . $facultyRegistration->id) }}"> 
                                                                        {{ $facultyRegistration->faculty_name }}
                                                                    </a>
                                                                </h4>
                                                                <span>{{ $facultyRegistration->faculty_designation }}</span>
                                                                <div class="it-course-meta">
                                                                    <span>{{ $facultyRegistration->faculty_qualification }}</span>
                                                                    <span><a class="cv-view" target="_blank" href="{{ url('FacultyProfile/' . $facultyRegistration->id) }}">View Profile &gt;&gt;</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $i++; @endphp
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="section11" class="mb-0">
                                    <div class="it-about-2-section-title-box mb-20">
                                        <h2 class="site-title"><span>Gallery</span></h2>
                                        <div class="double-line-bottom-theme-colored-2"></div>
                                    </div>
                                    <div class="department">
                                        <div class="row">
                                            @php
                                                $i = 1;
                                                $galleries = DB::table('galleries')->where('subject_id', $subjects->id)->where('status', '1')->orderBy('id', 'desc')->get();
                                            @endphp
                                            @foreach ($galleries as $gallery)
                                                <div class="col-sm-4 p-5">
                                                    <div class="gallery">
                                                        <a class="fancybox" data-fancybox="gallery" data-caption="{{ $subjects->subject }} Department" href="{{ url('/public/uploads/gallery/' . $gallery->gallery_image) }}">
                                                            <img src="{{ url('/public/uploads/gallery/' . $gallery->gallery_image) }}" alt="image">
                                                        </a>
                                                        <div class="gallery-title">
                                                            <p>{{ $gallery->gallery_title }}</p>
                                                            <p><a href="{{ url("/PhotoImages/".$gallery->id) }}">View Album</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php $i++; @endphp
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
