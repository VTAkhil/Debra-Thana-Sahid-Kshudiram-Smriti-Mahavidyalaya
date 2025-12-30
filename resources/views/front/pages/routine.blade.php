@extends('front.resource.main')
@section('content')
    <main>
        <div class="it-breadcrumb-area fix z-index-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="it-breadcrumb-content z-index-1">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">Class Routine</h3>
                            </div>
                            <div class="it-breadcrumb-list-wrap">
                                <div class="it-breadcrumb-list">
                                    <span><a href="Index.aspx">Home</a></span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>Academics</span>
                                    <span class="dvdr"><i class="fa fa-arrow-right-long"></i></span>
                                    <span>Class Routine</span>
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
                            <h2 class="site-title">Class <span>Routine</span></h2>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                        <div class="table-responsive">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table class="table table-striped table-bordered first dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Sl.No.: activate to sort column descending" style="width: 55.1406px;">Sl.No. </th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 117.844px;">Date</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 504.5px;">Title</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Department: activate to sort column ascending" style="width: 138.75px;">Department</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Download: activate to sort column ascending" style="width: 138.766px;">Download</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $i = 1;
                                                                $routines = DB::table('routines')
                                                                ->leftJoin('subjects','subjects.id','=','routines.subject_id')
                                                                ->select('routines.*','subjects.subject as subject_name')
                                                                ->where('routines.status', '1')->orderBy('routines.id', 'desc')->get();
                                                            @endphp
                                                            @foreach ($routines as $routine)
                                                                <tr role="row" class="odd">
                                                                    <td style="width: 7%" class="sorting_1">{{ $i }}</td>
                                                                    <td style="width: 13%">{{ date('d M Y', strtotime($routine->routine_date)) }}</td>
                                                                    <td style="width: 50%">{{ $routine->routine_title }}</td>
                                                                    <td style="width: 15%">{{ $routine->subject_name }}</td>
                                                                    <td style="width: 15%">
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
                </div>
            </div>
        </section>
    </main>
@endsection
