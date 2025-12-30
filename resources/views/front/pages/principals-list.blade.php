@extends('front.resource.main')
@section('content')
        <div class="main-content">
            <div class="it-breadcrumb-area fix z-index-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                <div class="it-breadcrumb-content z-index-1">
                                    <div class="it-breadcrumb-title-box">
                                        <h3 class="it-breadcrumb-title">List of Principals</h3>
                                    </div>
                                    <div class="it-breadcrumb-list-wrap">
                                        <div class="it-breadcrumb-list">
                                            <span><a href="Index.aspx">Home</a></span>
                                            <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                            <span>College</span>
                                            <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                            <span>List of Principals</span>
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
                                <h3 class="text-uppercase mt-0">List of   <span class="text-theme-colored2">Principals  </span></h3>
                                <div class="double-line-bottom-theme-colored-2"></div>
                               

                               <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sl.No.</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>From</th>
                                                <th>To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Prof. Prabhakar Sengupta</td>
                                                <td>In – Charge</td>
                                                <td>11-09-2006</td>
                                                <td>23-04-2008</td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Dr. Gopal Chandra Bera</td>
                                                <td>Principal</td>
                                                <td>24-04-2008</td>
                                                <td>01-07-2015</td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Dr. Sutapa Pal</td>
                                                <td>Teacher in Charge</td>
                                                <td>02-07-2015</td>
                                                <td>12-09-2018</td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Dr. Rupa Dasgupta</td>
                                                <td>Principal</td>
                                                <td>13-09-2018</td>
                                                <td></td>
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