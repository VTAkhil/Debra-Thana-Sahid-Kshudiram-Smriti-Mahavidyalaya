@extends('front.resource.main')
@section('content')

<main>
        

    <div class="it-breadcrumb-area fix z-index-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="it-breadcrumb-content z-index-1">
                        <div class="it-breadcrumb-title-box">
                            <h3 class="it-breadcrumb-title">Internal Audit Report</h3>
                        </div>
                        <div class="it-breadcrumb-list-wrap">
                            <div class="it-breadcrumb-list">
                                <span><a href="Index.aspx" "="">Home</a></span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Organization</span>
                                <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                <span>Internal Audit Report</span>
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
                        <h2 class="site-title">Internal <span> Audit Report</span></h2>
                        <div class="double-line-bottom-theme-colored-2"></div>
                    </div>


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
                                    <td>Audit Report 2020-2021</td>
                                    <td><a href="Pdf/Organization/Internal-audit/Internal_audit_2020-2021.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Audit Report 2019-2020</td>
                                    <td><a href="Pdf/Organization/Internal-audit/Internal_audit_2019-2020.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Audit Report 2018-2019</td>
                                    <td><a href="Pdf/Organization/Internal-audit/Internal_audit_2018-2019.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Audit Report 2017-2018</td>
                                    <td><a href="Pdf/Organization/Internal-audit/Internal_audit_2017-2018.pdf" target="_blank">Download</a></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Audit Report 2016-2017</td>
                                    <td><a href="Pdf/Organization/Internal-audit/Internal_audit_2016-2017.pdf" target="_blank">Download</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


    </main>

@endsection