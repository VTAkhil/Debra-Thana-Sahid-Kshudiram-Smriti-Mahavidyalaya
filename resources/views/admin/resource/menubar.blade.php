<?php
$status = request()->segment(2);
?>
<style>
    /*a.active {*/
    /*    text-decoration: none;*/
    /*    color: white !important;*/
    /*    background: #6a73fa2b;*/
    /*}*/
    /*ul li .active{*/
    /*    text-decoration: none;*/
    /*    color: white !important;*/
    /*    background: #6a73fa2b;*/
    /*}*/
</style>
<!-- Sidebar start -->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="{{ $status == 'dashboard' ? 'active' : '' }}" href="{{ url('/vtadmin/dashboard') }}" aria-expanded="false"> <i class="la la-home"></i><span class="nav-text">Dashboard</span></a>
            </li>
            
            {{-- General --}}
            @php
                $generalStatuses = ['list-subject','add-subject','edit-subject','list-committee','add-committee','edit-committee','list-department','add-department','edit-department','list-faculty','add-faculty','edit-faculty','list-category','add-category','edit-category'];
                $isGeneralActive = in_array($status, $generalStatuses);
            @endphp

            <li class="{{ $isGeneralActive ? 'mm-active' : '' }}">
                <a class="has-arrow {{ $isGeneralActive ? 'active' : '' }}" href="javascript:void(0);" aria-expanded="{{ $isGeneralActive ? 'true' : 'false' }}"> <i class="la la-user"></i> <span class="nav-text">General</span> </a>
                <ul class="{{ $isGeneralActive ? 'mm-show' : '' }}" aria-expanded="{{ $isGeneralActive ? 'true' : 'false' }}">
                    <li class="{{ in_array($status, ['list-category','add-category','edit-category']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-category') }}" class="{{ in_array($status, ['list-category','add-category','edit-category']) ? 'mm-active' : '' }}">Category</a>
                    </li>
                    <li class="{{ in_array($status, ['list-subject','add-subject','edit-subject']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-subject') }}" class="{{ in_array($status, ['list-subject','add-subject','edit-subject']) ? 'mm-active' : '' }}">Subject</a>
                    </li>
                    <li class="{{ in_array($status, ['list-committee','add-committee','edit-committee']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-committee') }}" class="{{ in_array($status, ['list-committee','add-committee','edit-committee']) ? 'mm-active' : '' }}">Committee</a>
                    </li>
                    {{-- <li class="{{ in_array($status, ['list-faculty','add-faculty','edit-faculty']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-faculty') }}" class="{{ in_array($status, ['list-faculty','add-faculty','edit-faculty']) ? 'mm-active' : '' }}">Faculty</a>
                    </li> --}}
                </ul>
            </li>

            {{-- Notice & Tender --}}
            @php
                $NoticeStatuses = ['list-notice','add-notice','edit-notice'];
                $isNoticeActive = in_array($status, $NoticeStatuses);
            @endphp

            <li class="{{ $isNoticeActive ? 'mm-active' : '' }}">
                <a class="has-arrow {{ $isNoticeActive ? 'active' : '' }}" href="javascript:void(0);" aria-expanded="{{ $isNoticeActive ? 'true' : 'false' }}"><i class="la la-user"></i><span class="nav-text">Notice & Tender</span></a>
                <ul class="{{ $isNoticeActive ? 'mm-show' : '' }}" aria-expanded="{{ $isNoticeActive ? 'true' : 'false' }}">
                    <li class="{{ in_array($status, ['list-notice','add-notice','edit-notice']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-notice') }}" class="{{ in_array($status, ['list-notice','add-notice','edit-notice']) ? 'mm-active' : '' }}">Notice</a>
                    </li>
                </ul>
            </li>

            {{-- Academic --}}
            @php
                $AcademicStatuses = ['list-routine','add-routine','edit-routine','list-syllabus','add-syllabus','edit-syllabus','list-lesson','add-lesson','edit-lesson'];
                $isAcademicActive = in_array($status, $AcademicStatuses);
            @endphp

            <li class="{{ $isAcademicActive ? 'mm-active' : '' }}">
                <a class="has-arrow {{ $isAcademicActive ? 'active' : '' }}" href="javascript:void(0);" aria-expanded="{{ $isAcademicActive ? 'true' : 'false' }}"><i class="la la-users"></i><span class="nav-text">Academic</span></a>
                <ul class="{{ $isAcademicActive ? 'mm-show' : '' }}" aria-expanded="{{ $isAcademicActive ? 'true' : 'false' }}">
                    <li class="{{ in_array($status, ['list-routine','add-routine','edit-routine']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-routine') }}" class="{{ in_array($status, ['list-routine','add-routine','edit-routine']) ? 'mm-active' : '' }}">Routine</a>
                    </li>
                    <li class="{{ in_array($status, ['list-syllabus','add-syllabus','edit-syllabus']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-syllabus') }}" class="{{ in_array($status, ['list-syllabus','add-syllabus','edit-syllabus']) ? 'mm-active' : '' }}">Syllabus</a>
                    </li>
                    <li class="{{ in_array($status, ['list-lesson','add-lesson','edit-lesson']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-lesson') }}" class="{{ in_array($status, ['list-lesson','add-lesson','edit-lesson']) ? 'mm-active' : '' }}">Lesson Plan</a>
                    </li>
                </ul>
            </li>

            {{-- Downloads & Events --}}
            @php
                $AcademicStatuses = ['list-download','add-download','edit-download','list-events','add-events','edit-events'];
                $isAcademicActive = in_array($status, $AcademicStatuses);
            @endphp
            <li>
                <a class="has-arrow {{ $isAcademicActive ? 'active' : '' }}" href="javascript:void(0);" aria-expanded="{{ $isAcademicActive ? 'true' : 'false' }}"><i class="la la-graduation-cap"></i><span class="nav-text">Downloads & Events</span></a>
                <ul class="{{ $isAcademicActive ? 'mm-show' : '' }}" aria-expanded="{{ $isAcademicActive ? 'true' : 'false' }}">
                    <li class="{{ in_array($status, ['list-download','add-download','edit-download']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-download') }}" class="{{ in_array($status, ['list-download','add-download','edit-download']) ? 'mm-active' : '' }}">Download</a>
                    </li>
                    <li class="{{ in_array($status, ['list-events','add-events','edit-events']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-events') }}" class="{{ in_array($status, ['list-events','add-events','edit-events']) ? 'mm-active' : '' }}"> Upcoming Events</a>
                    </li>
                </ul>
            </li>
            
            {{-- Department --}}
             @php
                $AcademicStatuses = ['list-result','add-result','edit-result','list-upseminar','add-upseminar','edit-upseminar','list-upseminar','add-upseminar','edit-upseminar','list-placementProgression','add-placementProgression','edit-placementProgression','list-achivement','add-achivement','edit-achivement'];
                $isAcademicActive = in_array($status, $AcademicStatuses);
            @endphp
            <li>
                <a class="has-arrow {{ $isAcademicActive ? 'active' : '' }}" href="javascript:void(0);" aria-expanded="{{ $isAcademicActive ? 'true' : 'false' }}"><i class="la la-book"></i><span class="nav-text">Department</span></a>
                <ul class="{{ $isAcademicActive ? 'mm-show' : '' }}" aria-expanded="{{ $isAcademicActive ? 'true' : 'false' }}">

                    <li class="{{ in_array($status, ['list-result','add-result','edit-result']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-result') }}" class="{{ in_array($status, ['list-result','add-result','edit-result']) ? 'mm-active' : '' }}">University Result</a>
                    </li>

                    <li class="{{ in_array($status, ['list-upseminar','add-upseminar','edit-upseminar']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-upseminar') }}" class="{{ in_array($status, ['list-upseminar','add-upseminar','edit-upseminar']) ? 'mm-active' : '' }}">Upload Seminar</a>
                    </li>

                    <li class="{{ in_array($status, ['list-placementProgression','add-placementProgression','edit-placementProgression']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-placementProgression') }}" class="{{ in_array($status, ['list-placementProgression','add-placementProgression','edit-placementProgression']) ? 'mm-active' : '' }}">Upload Placement & Progression</a>
                    </li>

                    <li class="{{ in_array($status, ['list-achivement','add-achivement','edit-achivement']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-achivement') }}" class="{{ in_array($status, ['list-achivement','add-achivement','edit-achivement']) ? 'mm-active' : '' }}">Upload Scholarship</a>
                    </li>
                </ul>
            </li>

            {{-- Faculty --}}
            @php
                $FacultyStatuses = ['list-faculty-registration','add-faculty-registration','edit-faculty-registration','list-faculty-assign','add-faculty-assign','edit-faculty-assign','list-committee-assign','add-committee-assign','edit-committee-assign','list-publications','add-publications','edit-publications','list-book','add-book','edit-book','list-chapter','add-chapter','edit-chapter','list-seminar','add-seminar','edit-seminar','list-qualification','add-qualification','edit-qualification','list-experience','add-experience','edit-experience'];
                $isFacultyActive = in_array($status, $FacultyStatuses);
            @endphp
            <li>
                <a class="has-arrow {{ $isFacultyActive ? 'active' : '' }}" href="javascript:void(0);" aria-expanded="{{ $isFacultyActive ? 'true' : 'false' }}"><i class="la la-users"></i><span class="nav-text">Faculty</span></a>
                <ul class="{{ $isFacultyActive ? 'mm-show' : '' }}" aria-expanded="{{ $isFacultyActive ? 'true' : 'false' }}">
                    <li class="{{ in_array($status, ['list-faculty-registration','add-faculty-registration','edit-faculty-registration']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-faculty-registration') }}" class="{{ in_array($status, ['list-faculty-registration','add-faculty-registration','edit-faculty-registration']) ? 'mm-active' : '' }}">Faculty Registration</a>
                    </li>
                    <li class="{{ in_array($status, ['list-faculty-assign','add-faculty-assign','edit-faculty-assign']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-faculty-assign') }}" class="{{ in_array($status, ['list-faculty-assign','add-faculty-assign','edit-faculty-assign']) ? 'mm-active' : '' }}">Faculty Assign</a>
                    </li>
                    <li class="{{ in_array($status, ['list-faculty-qualification','add-faculty-qualification','edit-faculty-qualification']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-faculty-qualification') }}" class="{{ in_array($status, ['list-faculty-qualification','add-faculty-qualification','edit-faculty-qualification']) ? 'mm-active' : '' }}">Faculty Qualification</a>
                    </li>
                    <li class="{{ in_array($status, ['list-faculty-experience','add-faculty-experience','edit-faculty-experience']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-faculty-experience') }}" class="{{ in_array($status, ['list-faculty-experience','add-faculty-experience','edit-faculty-experience']) ? 'mm-active' : '' }}">Faculty Experience</a>
                    </li>
                    <li class="{{ in_array($status, ['list-committee-assign','add-committee-assign','edit-committee-assign']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-committee-assign') }}" class="{{ in_array($status, ['list-committee-assign','add-committee-assign','edit-committee-assign']) ? 'mm-active' : '' }}">Committee Assign</a>
                    </li>
                    <li class="{{ in_array($status, ['list-publications','add-publications','edit-publications']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-publications') }}" class="{{ in_array($status, ['list-publications','add-publications','edit-publications']) ? 'mm-active' : '' }}">Publications</a>
                    </li>
                    <li class="{{ in_array($status, ['list-book','add-book','edit-book']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-book') }}" class="{{ in_array($status, ['list-book','add-book','edit-book']) ? 'mm-active' : '' }}">Book</a>
                    </li>
                    <li class="{{ in_array($status, ['list-chapter','add-chapter','edit-chapter']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-chapter') }}" class="{{ in_array($status, ['list-chapter','add-chapter','edit-chapter']) ? 'mm-active' : '' }}">Book Chapter</a>
                    </li>
                    <li class="{{ in_array($status, ['list-seminar','add-seminar','edit-seminar']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-seminar') }}" class="{{ in_array($status, ['list-seminar','add-seminar','edit-seminar']) ? 'mm-active' : '' }}">Seminar Attended</a>
                    </li>
                </ul>
            </li>

            {{-- Gallery --}}
            @php
                $FacultyStatuses = ['list-gallery','add-gallery','edit-gallery','list-galleryAlbum','add-galleryAlbum','edit-galleryAlbum'];
                $isFacultyActive = in_array($status, $FacultyStatuses);
            @endphp
            <li>
                <a class="has-arrow {{ $isFacultyActive ? 'active' : '' }}" href="javascript:void(0);" aria-expanded="{{ $isFacultyActive ? 'true' : 'false' }}"><i class="la la-gift"></i><span class="nav-text">Gallery </span></a>
                <ul class="{{ $isFacultyActive ? 'mm-show' : '' }}" aria-expanded="{{ $isFacultyActive ? 'true' : 'false' }}">
                    <li class="{{ in_array($status, ['list-gallery','add-gallery','edit-gallery']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-gallery') }}" class="{{ in_array($status, ['list-gallery','add-gallery','edit-gallery']) ? 'mm-active' : '' }}">New Gallery</a>
                    </li>

                    <li class="{{ in_array($status, ['list-galleryAlbum','add-galleryAlbum','edit-galleryAlbum']) ? 'active' : '' }}">
                        <a href="{{ url('/vtadmin/list-galleryAlbum') }}" class="{{ in_array($status, ['list-galleryAlbum','add-galleryAlbum','edit-galleryAlbum']) ? 'mm-active' : '' }}">Gallery Album</a>
                    </li>
                </ul>
            </li>

            <li>
               <a class="{{ in_array($status, ['list-user','add-user','edit-user']) ? 'mm-active' : '' }}" href="{{ url('/vtadmin/list-user') }}" aria-expanded="false"> <i class="la la-home"></i><span class="nav-text">Register Usre</span></a>
           </li>
            
        </ul>

        <!-- <div class="copyright">
     <p>DSKSM © 2025 </p>
     <p class="fs-12">Made by Mart Technology. </p>
    </div> -->
    </div>
</div>
<!-- Sidebar end -->
