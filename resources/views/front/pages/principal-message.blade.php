@extends('front.resource.main')
@section('content')
        <div class="main-content">
            <div class="it-breadcrumb-area fix z-index-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="it-breadcrumb-content z-index-1">
                                    <div class="it-breadcrumb-title-box">
                                        <h3 class="it-breadcrumb-title">Message from Principal</h3>
                                    </div>
                                    <div class="it-breadcrumb-list-wrap">
                                        <div class="it-breadcrumb-list">
                                            <span><a href="Index.aspx">Home</a></span>
                                            <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                            <span>College</span>
                                            <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                            <span>Message from Principal</span>
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
                                <h3 class="text-uppercase mt-0">Message <span class="text-theme-colored2">from Principal </span></h3>
                                <div class="double-line-bottom-theme-colored-2"></div>
                                <div class="wrapingimage">
                                    <p><img src="{{ url('public/images/Principal.jpg') }}" alt="Img"></p>
                                </div>
                                <p class="text-justify">
                                    Welcome to the official website of Debra Thana Sahid Kshudiram Smriti Mahavidyalaya. Our college was established in 2006 and has been named after the famous Bengali revolutionary and martyr Kshudiram Bose (1889 – 1908). The College has committed itself to the goal of providing quality education to the students who are generally coming from a relatively backward region. The College is also keen to give equal attention to the all-round improvement of the students and to provide them with the adequate opportunities to develop their creative and artistic talents, scientific excellence and sportsmanship. 

                                </p>

                                <p class="text-justify">
                                   Our motto is to impart holistic education to our students, to make a complete person of a student who enters this institution. The task is especially challenging to us since a majority of our students are not only economically backward but are also first generation learners. Apart from formal education emphasis is given on Skill Development, Employability skill enhancement and extra-curricular and co-curricular activities. We believe that our students are a store house of talents and to polish and nurture this potential a lot of activities are arranged throughout the year. Our dedicated faculty members attempt whole-heartedly to inspire the present and future generation of students because we believe that one lamp can light several others.
                                </p>
                                <p class="text-justify">
                                    We are determined to help our future generation to build a ‘brave new world’ where compassion, harmony, fraternity and empathy will rule. I wish all the students a fruitful stay in the College and extend the ‘Debra College Family’ with the support of faculty members, members of the administrative staff, alumni, parents and other academic bodies with whom we collaborate.
                                </p>
                                <div class="row justify-content-center align-items-center ">
                                    <div class="col-lg-6">
                                        <a href="images/Principal_bio_data.pdf" target="_blank">
                                            <button class="profile_btn">View Profile</button>
                                        </a>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                        <div class="principal_name">
                                            <h5>Dr. Rupa Dasgupta</h5>
                                            <p>Principal, Principal, DTSKSM ( M. Phil, Ph. D )</p>
                                            <p></p>
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