@extends('admin.resource.main')
@section('title', 'List Download')
@section('content')
<style>
    tr th,
    tr td{
        text-align: center;
    }
</style>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Download</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-download') }}">Download</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Download</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="row tab-content">
                    <div class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header justify-content-start">
                                <h4 class="card-title me-2">All Download List </h4>
                                <a href="{{ url('/vtadmin/add-download') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table ">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Download Tilte</th>
                                                <th>Subject</th>
                                                <th>Date</th>
                                                <th>Download File</th>
                                                <th>Download Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $downloads = DB::table('downloads')
                                            ->leftJoin('subjects', 'subjects.id', '=', 'downloads.subject_id')
                                            ->select('downloads.*', 'subjects.subject as subject_name')
                                            ->where("downloads.status", "!=", "2")->orderBy("downloads.id","desc")->paginate(10);
                                            if(empty($request->page) || $request->page=='1'){
                                            $i=1;
                                            }else{
                                                $i=(10*($request->page-1))+1;
                                            }
                                            foreach ($downloads as $download) { ?>
                                            <tr>
                                                <td><strong>{{ $i }}</strong></td>
                                                <td>{{ $download->download_title }}</td>
                                                <td>{{ $download->subject_name }}</td>
                                                <td>{{ date('d M Y', strtotime($download->download_date)) }}</td>
                                                <td>
                                                    @php
                                                        $ext = strtolower(pathinfo($download->download_file, PATHINFO_EXTENSION),);
                                                    @endphp
                                                    @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']))
                                                        <img src="{{ url('/public/uploads/download/' . $download->download_file) }}"style="width:80px;height:80px">
                                                    @elseif ($ext === 'pdf')
                                                        <a href="{{ url('/public/uploads/download/' . $download->download_file) }}"class="btn btn-sm btn-primary" download><i class="la la-download"></i></a>
                                                    @else
                                                        NA
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!empty($download->download_link))
                                                        <a href="{{ $download->download_link }}" target="_blank"><i class="fa-solid fa-link"></i></a>
                                                    @else
                                                        NA
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="tab-pane active" id="kt_builder_toolbar">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xl-9">
                                                                <form action="{{ url('/vtadmin/DownloadStatusChanger/' . $download->id) }}" id="sstc{{ $download->id }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-check form-check-custom form-check-solid form-switch mt-2">
                                                                        <input class="form-check-input" type="checkbox" id="status{{ $download->id }}" {{ $download->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $download->id }}');">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('vtadmin/edit-download', $download->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ url('vtadmin/deleteDownload', $download->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                    {{ $downloads->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function statusActivInact(id) {
            var checkbox = document.getElementById('status' + id);
            var formId = "sstc" + id;
            var result = confirm("Are you sure you want to change the status?");
            if (result) {
                document.getElementById(formId).submit();
            } else {
                checkbox.checked = !checkbox.checked; // Revert if cancelled
            }
        }
    </script>
    <script>
        setTimeout(function() {
            $(".alert").fadeOut("slow");
        }, 3000);
    </script>
@endsection
