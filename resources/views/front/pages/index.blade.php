@extends('front.resource.main')
@section('content')

<style>
.it-tuition-list-box ul li span{
    padding-left: 10px;
    height: fit-content;
}

</style>


    <main>
        <section class="it-slider-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="it-slider-wrap p-relative">
                        <div class="swiper it-slider-active p-relative">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/Pop-up/PG-Admission.jpg') }}" alt=""></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/images/Slider6.jpg') }}" alt="image"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/images/Slider5.jpg') }}" alt="image"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/images/LoA.jpg') }}" alt="image"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/images/Slider4.jpg') }}" alt="image"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/images/Slider1.jpg') }}" alt="image"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/images/Slider2.jpg') }}" alt="image"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="it-slider-box it-slider-overlay z-index-1">
                                        <div class="it-slider-bg"><img src="{{ url('public/images/Slider3.jpg') }}" alt="image"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="it-slider-arrow-wrap">
                                <button class="arrow-next"><i class="fa fa-arrow-right-long"></i></button>
                                <button class="arrow-next"><i class="fa fa-arrow-left-long"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="top-news">
                    <div class="top-news-wrap">
                        <div class="header-top-right">
                            <div class="header-top-menu">
                                <a href="{{ route('upcoming-event') }}">Upcoming Events <span
                                        class="label label-danger blink">New</span></a>
                                <a href="http://www.debracollege.ac.in/studentportal/login/index.aspx">Student Portal
                                    (LMS)</a>
                                <a href="https://dbcl-cloud.co.in/StudentPortal/Login.aspx">Fees Payment</a>
                                <a href="Pdf/Admission/Full_fees_structure_2022_2023.pdf" target="_blank">Fees Structure</a>
                                <a href="Master-routine.aspx" target="_blank">Master Routine</a>
                                <a href="https://nlist.inflibnet.ac.in/">N-list</a>
                                <a href="AllNotice.aspx">Notice</a>
                                <a href="NIRF.aspx">NIRF</a>
                                <a href="Download.aspx">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-area z-index-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 wow itfadeLeft">
                        <div class="p-relative">
                            <div class="it-about-2-thumb border-radius-20 mb-20">
                                <img src="{{url('public/images/Slider2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 wow itfadeRight">
                        <div class="it-about-2-right">
                            <div class="it-about-2-section-title-box mb-20">
                                <h2 class="site-title">About <span>College</span></h2>
                                <div class="double-line-bottom-theme-colored-2"></div>
                            </div>
                            <div class="it-about-2-text">
                                <p class="justify">
                                    Debra Thana Sahid Kshudiram Smriti Mahavidyalaya was established with a motto
                                    ‘education, enlightenment and character’. Its
                                    chief objective is to kindle a light in the darkness of mere being.
                                </p>
                            </div>
                            <a href="About-college.aspx" class="it-btn-yellow theme-bg border-radius-100">
                                <span>
                                    <span class="text-1">Read More</span>
                                    <span class="text-2">Read More</span>
                                </span>
                                <i class="fa fa-arrow-right-long pl-10"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="it-tuition-area about-area">
            <div class="container">
                <div class="row gx-35">
                    <div class="col-xl-6 col-lg-6 col-md-6 wow itfadeRight">
                        <div class="it-tuition-item active">
                            <h5 class="it-tuition-title-sm">About Kshudiram Bose</h5>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <div class="it-tuition-list-box mb-10">
                                <div class="wrapingimage">
                                    <img class="img-fullwidth" src="{{ url('public/images/Kshudiram.jpg') }}"
                                        alt="image">
                                </div>
                                <p class="justify text-white">
                                    Kshudiram Bose was born on December 3, 1889 in the small village named "Habibpur"
                                    situated under Keshpur Police
                                    Station in Midnapore district of Bengal. His father was a Tehsildar in the Nerajol.
                                    Kshudiram was the fourth child in a family of three
                                    daughters. His parents, Trailokyanath Bose and Lakshmipriya Devi had two sons before the
                                    birth of Kshudiram but both of them died prematurely.
                                    Following the traditional believes and customs, the new born child was symbolically sold
                                    to his eldest sister in exchange of three handful of
                                    food grains locally known as Khud,
                                </p>
                                <a href="About-khudiram-bose.aspx" class="it-btn-yellow">
                                    <span>
                                        <span class="text-1">Read More</span>
                                        <span class="text-2">Read More</span>
                                    </span>
                                    <i class="fa fa-arrow-right-long pl-10"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 wow itfadeRight">
                        <div class="it-tuition-item">
                            <h5 class="it-tuition-title-sm">Message from the desk of Principal</h5>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <div class="it-tuition-list-box mb-10">
                                <div class="wrapingimage">
                                    <img class="img-fullwidth" src="{{ url('public/images/Principal.jpg') }}"
                                        alt="image">
                                </div>
                                <p class="justify">
                                    Welcome to the official website of Debra Thana Sahid Kshudiram Smriti Mahavidyalaya. Our
                                    college was established in 2006 and
                                    has been named after the famous Bengali revolutionary and martyr Kshudiram Bose (1889 –
                                    1908). The College has committed itself to the goal
                                    of providing quality education to the students who are generally coming from a
                                    relatively backward region. The College is also keen to give
                                    equal attention to the all-round improvement of the students and to provide them with
                                    the adequate opportunities to develop their creative and
                                    artistic talents, scientific excellence and sportsmanship.
                                </p>
                                <p style="float: right;"> <strong>Dr. Rupa Dasgupta <br> Principal, DTSKSM ( M. Phil, Ph. D
                                        )</strong></p>
                                <a href="Principal-message.aspx" class="it-btn-yellow theme-bg">
                                    <span>
                                        <span class="text-1">Read More</span>
                                        <span class="text-2">Read More</span>
                                    </span>
                                    <i class="fa fa-arrow-right-long pl-10"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="it-feature-area">
            <div class="container">
                <div class="it-feature-wrap z-index-2">
                    <div class="row gx-0">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="it-feature-item d-flex justify-content-center">
                                <div class="it-feature-icon">
                                    <span><img src="images/icons/graduate.png" alt=""></span>
                                </div>
                                <div class="it-feature-content">
                                    <h5 class="it-feature-title">Alumni</h5>
                                    <p>Click below to register and submit your feedback.</p>
                                    <a href="https://dbcl-cloud.co.in/alumni/alumnilogin.aspx">Click Here <i
                                            class="fa fa-arrow-right-long pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="it-feature-item d-flex justify-content-center">
                                <div class="it-feature-icon">
                                    <span><img src="{{ url('public/images/icons/Feedback.png') }}" alt="image"></span>
                                </div>
                                <div class="it-feature-content">
                                    <h5 class="it-feature-title">Student Feedback</h5>
                                    <p>Click below to submit your feedback.</p>
                                    <a href="https://dbcl-cloud.co.in/StudentPortal/Login.aspx">Submit Feedback <i
                                            class="fa fa-arrow-right-long pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="it-feature-item d-flex justify-content-center">
                                <div class="it-feature-icon">
                                    <span><img src="{{ url('public/images/icons/Grievance.png') }}"
                                            alt="image"></span>
                                </div>
                                <div class="it-feature-content">
                                    <h5 class="it-feature-title">Grievance Redressal</h5>
                                    <p>Click below to submit your grievances.</p>
                                    <a href="https://forms.gle/9hF4cXmngMxZPD19A">Submit Grievances <i
                                            class="fa fa-arrow-right-long pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="it-feature-item d-flex justify-content-center">
                                <div class="it-feature-icon">
                                    <span><img src="{{ url('public/images/icons/Scholarship.png') }}"
                                            alt="image"></span>
                                </div>
                                <div class="it-feature-content">
                                    <h5 class="it-feature-title">SC ST Cell</h5>
                                    <p>Lodge complaint against caste based discrimination.</p>
                                    <a href="https://forms.gle/FqmkZs28fxBvxpvv8">Lodge Complaint <i
                                            class="fa fa-arrow-right-long pl-10"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="it-testimonial-area z-index-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="it-testimonial-wrapper p-relative">
                            <div class="swiper it-testimonial-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="it-testimonial-item">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="it-testimonial-content">
                                                        <div class="it-testimonial-quote mb-15">
                                                            <i class="fa-regular fa-quote-left"></i>
                                                        </div>
                                                        <div class="it-testimonial-text">
                                                            <h5 class="mb-30">
                                                                The highest purpose of education is to unlearn what we once
                                                                took for granted, to replace certainty
                                                                with subtlety, prejudice with compassion, and destiny with
                                                                possibility.
                                                            </h5>
                                                        </div>
                                                        <div
                                                            class="it-testimonial-bottom d-flex align-items-center justify-content-between">
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name">- Neel Burton</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="it-testimonial-item">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="it-testimonial-content">
                                                        <div class="it-testimonial-quote mb-15">
                                                            <i class="fa-regular fa-quote-left"></i>
                                                        </div>
                                                        <div class="it-testimonial-text">
                                                            <h5 class="mb-30">
                                                                Knowledge is power. Information is liberating. Education is
                                                                the premise of progress, in every society,
                                                                in every family.
                                                            </h5>
                                                        </div>
                                                        <div
                                                            class="it-testimonial-bottom d-flex align-items-center justify-content-between">
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name">- Kofi Annan</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="it-testimonial-item">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="it-testimonial-content">
                                                        <div class="it-testimonial-quote mb-15">
                                                            <i class="fa-regular fa-quote-left"></i>
                                                        </div>
                                                        <div class="it-testimonial-text">
                                                            <h5 class="mb-30">Education is not the learning of facts, but
                                                                the training of the mind to think.</h5>
                                                        </div>
                                                        <div
                                                            class="it-testimonial-bottom d-flex align-items-center justify-content-between">
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name">- Albert Einstein
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="it-testimonial-item">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="it-testimonial-content">
                                                        <div class="it-testimonial-quote mb-15">
                                                            <i class="fa-regular fa-quote-left"></i>
                                                        </div>
                                                        <div class="it-testimonial-text">
                                                            <h5 class="mb-30">Education is not filling a pail but the
                                                                lighting of a fire.</h5>
                                                        </div>
                                                        <div
                                                            class="it-testimonial-bottom d-flex align-items-center justify-content-between">
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name">- William Butler
                                                                    Yeats</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="it-testimonial-item">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="it-testimonial-content">
                                                        <div class="it-testimonial-quote mb-15">
                                                            <i class="fa-regular fa-quote-left"></i>
                                                        </div>
                                                        <div class="it-testimonial-text">
                                                            <h5 class="mb-30">
                                                                Now we are not merely to stick knowledge on to the soul: we
                                                                must incorporate it into her; the soul should
                                                                not be sprinkled with knowledge but steeped in it.
                                                            </h5>
                                                        </div>
                                                        <div
                                                            class="it-testimonial-bottom d-flex align-items-center justify-content-between">
                                                            <div class="it-testimonial-avatar-info">
                                                                <h5 class="it-testimonial-avatar-name">- Seneca</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="it-testimonial-arrow-wrap">
                                <button class="arrow-prev">
                                    <i class="fa fa-arrow-left-long"></i>
                                </button>
                                <button class="arrow-next">
                                    <i class="fa fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="it-funfact-area it-funfact-style-3 z-index-2"
            data-background="{{ url('public/images/Slider1.jpg') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 center">
                        <span class="it-section-subtitle2">COLLEGE AT A GLANCE</span>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="it-funfact-item style-1 d-flex align-items-center">
                            <div class="it-funfact-icon">
                                <span><i class="fa-light fa-face-smile"></i></span>
                            </div>
                            <div class="it-funfact-content">
                                <h6 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="4728">0</i>+</h6>
                                <span>Happy Students</span>
                            </div>
                        </div>
                        <div class="it-funfact-item style-1 d-flex align-items-center">
                            <div class="it-funfact-icon">
                                <span><i class="fa-regular fa-solid fa-users"></i></span>
                            </div>
                            <div class="it-funfact-content">
                                <h6 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="108">0</i>+</h6>
                                <span>Our Teacher</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="it-funfact-item style-1 d-flex align-items-center">
                            <div class="it-funfact-icon">
                                <span><i class="fa-regular fa-graduation-cap"></i></span>
                            </div>
                            <div class="it-funfact-content">
                                <h6 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="22">0</i>+</h6>
                                <span>Departments</span>
                            </div>
                        </div>
                        <div class="it-funfact-item style-1 d-flex align-items-center">
                            <div class="it-funfact-icon">
                                <span><i class="fa-solid fa-books"></i></span>
                            </div>
                            <div class="it-funfact-content">
                                <h6 class="it-funfact-number"><i class="purecounter" data-purecounter-duration="1"
                                        data-purecounter-end="19138">0</i>+</h6>
                                <span>Books in Library</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="p-20 bg-dark-transparent">
                            <h3 class="title-pattern mt-0"><span class="text-white">College <span
                                        class="text-theme-colored2">Information</span></span></h3>
                            <table class="table table-bordered" style="color: #fff;">
                                <tbody>
                                    <tr>
                                        <td>Establishment</td>
                                        <td>2006 Vide G.O. No 618 Edn(CS), DT 24 Aug'2006 and No 855 Edn(CS) , DT
                                            27.10.2006.</td>
                                    </tr>
                                    <tr>
                                        <td>VU Affiliation</td>
                                        <td>VU/R/5EC/50/Affi/(New College)/851/06 DT 6.9.06.</td>
                                    </tr>
                                    <tr>
                                        <td>UGC Recognition</td>
                                        <td>
                                            a) 2(f) Memo No- F.No. 8-367/2011(CPP-I/C) December 2012.<br>
                                            b) 12(B) Memo No- F.No-8-367/2011(CPP-I/C) December 2013.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Campus Area</td>
                                        <td>
                                            College Campus - 5.23 acres and<br>
                                            Play Ground - 2.43 acres
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="it-tuition-area about-area">
            <div class="container">
                <div class="row gx-35">
                    <div class="col-xl-4 col-lg-4 col-md-4 wow itfadeRight">
                        <div class="it-tuition-item active">
                            <h5 class="it-tuition-title-sm">General Notice</h5>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <div class="it-tuition-list-box Notice mb-10">
                                <div class="marquee">
                                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();"
                                        scrollamount="3">
                                        <ul class="notice-board">
                                            <?php $notices = DB::table("notices")->where("status","1")->where('notice_value', 'General Notice')->orderBy("id","desc")->get(); ?>
                                            @foreach ($notices as $notice)
                                                <li>
                                                    @if ($notice->notice_title)
                                                  <a class="d-flex" href="{{ url('/public/uploads/notice/' . $notice->notice_file) }}" target="_blank">
                                                        
                                                        
                                                       @if ($notice->blink_effect = "yes")
                                                         <span class="label new-badge label-danger blink blink-notice">
                                                                New
                                                            </span>
                                                       @endif
                                                      <span>{{ $notice->notice_title }}</span> </a>
                                                        
                                                    @else
                                                        No File
                                                    @endif
                                                    <p class="post-details">
                                                        <a class="author" href="#"><i class="fa fa-pencil"></i> SELECT </a>
                                                        <a class="date" href="#"><i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($notice->start_date)) }}</a>
                                                    </p>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </marquee>
                                </div>
                                <a href="#" class="it-btn-yellow">
                                    <span>
                                        <span class="text-1">View All</span>
                                        <span class="text-2">View All</span>
                                    </span>
                                    <i class="fa fa-arrow-right-long pl-10"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 wow itfadeRight">
                        <div class="it-tuition-item">
                            <h5 class="it-tuition-title-sm">Examination Notifications</h5>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <div class="it-tuition-list-box Notice Notice2 mb-10">
                                <div class="marquee">
                                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();"
                                        scrollamount="3">
                                        <ul class="notice-board">
                                        <?php $notices = DB::table("notices")->where("status","1")->where('notice_value', 'Examination Notifications')->orderBy("id","desc")->get(); ?>
                                         @foreach ($notices  as $notice)
                                            <li>
                                                @if ($notice->notice_title)
                                                <a href="{{ url('/public/uploads/notice/' . $notice->notice_file) }}" target="_blank">{{ $notice->notice_title }}</a>
                                                @else
                                                    No File
                                                @endif
                                                <p class="post-details">
                                                    <a class="author" href="#"><i class="fa fa-pencil"></i> SELECT
                                                    </a>
                                                    <a class="date" href="#"><i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($notice->start_date)) }}</a>
                                                </p>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </marquee>
                                </div>
                                <a href="#" class="it-btn-yellow theme-bg">
                                    <span>
                                        <span class="text-1">View All</span>
                                        <span class="text-2">View All</span>
                                    </span>
                                    <i class="fa fa-arrow-right-long pl-10"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 wow itfadeRight">
                        <div class="it-tuition-item active">
                            <h5 class="it-tuition-title-sm">Tender Notice</h5>
                            <div class="double-line-bottom-theme-colored-2"></div>
                            <div class="it-tuition-list-box Notice mb-10">
                                <div class="marquee">
                                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();"
                                        scrollamount="3">
                                        <ul class="notice-board">
                                            <?php $notices = DB::table("notices")->where("status","1")->where('notice_value', 'Tender Notice')->orderBy("id","desc")->get(); ?>
                                            @foreach ($notices  as $notice)
                                            <li>
                                                 @if ($notice->notice_title)
                                                <a href="{{ url('/public/uploads/notice/' . $notice->notice_file) }}" target="_blank">{{ $notice->notice_title }}</a>
                                                 @else
                                                    No File
                                                @endif
                                                <p class="post-details">
                                                    <a class="author" href="#"><i class="fa fa-pencil"></i> SELECT
                                                    </a>
                                                    <a class="date" href="#"><i class="fa fa-calendar"></i> {{ date('d M Y', strtotime($notice->start_date)) }}</a>
                                                </p>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </marquee>
                                </div>
                                <a href="#" class="it-btn-yellow">
                                    <span>
                                        <span class="text-1">View All</span>
                                        <span class="text-2">View All</span>
                                    </span>
                                    <i class="fa fa-arrow-right-long pl-10"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="it-blog-2-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow itfadeUp">
                        <div class="it-blog-2-item mb-35">
                            <div class="it-blog-2-content z-index-2">
                                <div class="it-blog-meta">
                                    <h4 class="pointer">Students' Zone</h4>
                                    <ul class="box">
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="http://vidyasagar.ac.in/Result/">University Result</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="http://vidyasagar.ac.in/Student/Examination.aspx">University Exam
                                                Notice</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="http://apps.vidyasagar.ac.in/DownloadCenter/?cat=21">UG Syllabus</a>
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="Data/Files/StaticDocs/Academic_Calender_2018_2019.pdf"
                                                target="_blank">Academic Calender 2018-2019</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="http://cpsms.nic.in/Scholarship/Default.aspx">Central Sector
                                                Scholarship Scheme</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow itfadeUp">
                        <div class="it-blog-2-item mb-35">
                            <div class="it-blog-2-content z-index-2">
                                <div class="it-blog-meta">
                                    <h4 class="pointer">E-References</h4>
                                    <ul class="box">
                                        <li><i class="fa fa-hand-o-right"></i><a href="https://ndl.iitkgp.ac.in/">E-Books
                                                @ NDL</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="http://nlist.inflibnet.ac.in/eresource.php">E-Books @ N-List</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="http://nlist.inflibnet.ac.in/eresource.php">E-Journals @ N-List</a>
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i><a href="http://nptel.ac.in/">E-Lectures</a>
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i><a
                                                href="https://ndl.iitkgp.ac.in/account/registration">New User Registration
                                                @ NDL</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow itfadeUp">
                        <div class="it-blog-2-item mb-35">
                            <div class="it-blog-2-content z-index-2">
                                <div class="it-blog-meta">
                                    <h4 class="pointer">Other Links</h4>
                                    <ul class="box">
                                        <li><i class="fa fa-hand-o-right"></i><a href="Download.aspx">Downloads</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a href="#">IPR</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a href="#">Code of Conduct</a></li>
                                        <li><i class="fa fa-hand-o-right"></i><a href="#">Code of Core Values</a>
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i><a href="#">Placement</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <div class="it-offcanvas-area">
        <div class="itoffcanvas">
            <div class="itoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="itoffcanvas__logo">
                <a href="Index.aspx"><img src="images/Logo.jpg" alt=""></a>
            </div>
            <div class="it-menu-mobile d-xl-none"></div>
        </div>
    </div>
    <div class="body-overlay"></div>
    
    <script>
    //   setTimeout(function () {
    //     document.querySelectorAll('.blink-notice').forEach(function (el) {
    //         el.classList.remove('blink');
    //         el.remove(); // optional: remove "New" label completely
    //     });
    // }, 2000); // 30 seconds
    
        document.addEventListener("DOMContentLoaded", function () {
        
            const SEVEN_DAYS = 1 * 24 * 60 * 60 * 1000; // 7 days in ms
            const now = new Date().getTime();
        
            document.querySelectorAll('.blink-notice').forEach(function (el) {
        
                const noticeId = el.dataset.noticeId;
                const storageKey = 'notice_blink_' + noticeId;
        
                let startTime = localStorage.getItem(storageKey);
        
                // First time → save start time
                if (!startTime) {
                    localStorage.setItem(storageKey, now);
                    startTime = now;
                }
        
                // If 7 days passed → stop blinking
                if (now - startTime > SEVEN_DAYS) {
                    el.classList.remove('blink');
                    el.remove(); // optional: completely hide "New"
                }
            });
        
        });


    </script>
@endsection
