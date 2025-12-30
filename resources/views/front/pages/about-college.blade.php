@extends('front.resource.main')
@section('content')
        <div class="main-content">

            <div class="it-breadcrumb-area fix z-index-1">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                            <div class="it-breadcrumb-content z-index-1">
                                <div class="it-breadcrumb-title-box">
                                    <h3 class="it-breadcrumb-title">About the College</h3>
                                </div>
                                <div class="it-breadcrumb-list-wrap">
                                    <div class="it-breadcrumb-list">
                                        <span><a href="Index.aspx">Home</a></span>
                                        <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                        <span>College</span>
                                        <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                        <span>About the College</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section>
                <div class="container pt-70 pb-40 page mt-50 mb-50">
                    <div class="section-title">
                        <div class="row">
                            <div class="col-md-12">
                                 <h3 class="text-uppercase mt-0">About <span class="text-theme-colored2"> the College</span></h3>
                                    <div class="double-line-bottom-theme-colored-2"></div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="wrapingimage about_image">
                                            <img src="{{url('public/images/About-college.jpg')}}" alt="Img">
                                        </div>
                                        <div class="about_text_one">
                                            <p>Debra Thana Sahid Kshudiram Smriti Mahavidyalaya was established with a motto ‘education, enlightenment and character’. Its chief objective is to kindle a light in the darkness of mere being:</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                       
                                    <p class="text-justify">
                                        <span class="college_about_title">College at a Glance</span> <br>
                                         <div class="double-line-bottom-theme-colored-2"></div>
                                    </p>
                                    <ul class="list_dashed">
                                        <li>Established : 2006 Vide G.O. No 618 Edn(CS), DT 24 Aug'2006 and No 855 Edn(CS) , DT 27.10.2006.</li>
                                        <li>Vidyasagar University affiliation : VU/R/5EC/50/Affi/(New College)/851/06 DT 6.9.06.</li>
                                        <li>UGC Recognition :
                                            a) 2(f) Memo No- F.No. 8-367/2011(CPP-I/C) December 2012.
                                            b) 12(B) Memo No- F.No-8-367/2011(CPP-I/C) December 2013.
                                        </li>
                                        <li>Area of the College Campus : 5.23 Acres.</li>
                                        <li>Area of College Play Ground : 2.43 Acres.</li>
                                        <li>Number of Teaching posts sanctioned : 01 (Principal) + 18 (Teachers).</li>
                                        <li>Number of existing full time teachers : Principal and 17 Assistant Professors & 01 Librarian</li>
                                        <li>Number of Permanent N.T.S. : 18</li>
                                        <li>Number of State Aided College Teachers : 74</li>
                                        <li>Number of temporary N.T.S. : 37</li>
                                        <li>Number of books in Library : 16122</li>
                                        <li>Student strength 2022-23 : 4326</li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endsection