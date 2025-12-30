@extends('admin.resource.main')
@section('title', 'List Notice')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Notice</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-notice') }}">Notice</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Notice</a></li>
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
                                <h4 class="card-title me-2">All Notice List </h4>
                                <a href="{{ url('/vtadmin/add-notice') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-plus"></i> Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table ">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Notice Tilte</th>
                                                <th>Subject</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Notice File</th>
                                                <th>Notice Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $notices = DB::table('notices')
                                            ->leftJoin('subjects', 'subjects.id', '=', 'notices.subject_id')
                                            ->select('notices.*', 'subjects.subject as subject_name')
                                            ->where("notices.status", "!=", "2")->orderBy("notices.id","desc")->paginate(10);
                                            if(empty($request->page) || $request->page=='1'){
                                            $i=1;
                                            }else{
                                                $i=(10*($request->page-1))+1;
                                            }
                                            foreach ($notices as $notice) { ?>
                                            <tr>
                                                <td><strong>{{ $i }}</strong></td>
                                                <td>{{ $notice->notice_title }}</td>
                                                <td>{{ $notice->subject_name }}</td>
                                                <td>{{ date('d M Y', strtotime($notice->start_date)) }}</td>
                                                <td>{{ date('d M Y', strtotime($notice->end_date)) }}</td>
                                                <td>
                                                    @php
                                                        $ext = strtolower(
                                                            pathinfo($notice->notice_file, PATHINFO_EXTENSION),
                                                        );
                                                    @endphp

                                                    @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']))
                                                        <img src="{{ url('/public/uploads/notice/' . $notice->notice_file) }}"style="width:80px;height:80px">
                                                    @elseif ($ext === 'pdf')
                                                        <a href="{{ url('/public/uploads/notice/' . $notice->notice_file) }}"class="btn btn-sm btn-primary" download><i class="la la-download"></i></a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!empty($notice->notice_link))
                                                        <a href="{{ $notice->notice_link }}" target="_blank"><i class="fa-solid fa-link"></i></a>
                                                    @else
                                                        NA
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="tab-pane active" id="kt_builder_toolbar">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xl-9">
                                                                <form
                                                                    action="{{ url('/vtadmin/Noticestatuschanger/' . $notice->id) }}"
                                                                    id="sstc{{ $notice->id }}" method="POST">
                                                                    @csrf
                                                                    <div
                                                                        class="form-check form-check-custom form-check-solid form-switch mt-2">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="status{{ $notice->id }}"
                                                                            {{ $notice->status == 1 ? 'checked' : '' }}
                                                                            onchange="statusActivInact('{{ $notice->id }}');">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('vtadmin/edit-notice', $notice->id) }}"
                                                        class="btn btn-xs sharp btn-primary"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="{{ url('vtadmin/deleteNotice', $notice->id) }}"
                                                        class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                    {{ $notices->links() }}
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
