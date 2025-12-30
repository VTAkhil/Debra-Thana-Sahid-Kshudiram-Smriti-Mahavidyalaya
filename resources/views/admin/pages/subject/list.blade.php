@extends('admin.resource.main')
@section('title', 'List Subject')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All ggggggggggggggggg</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-subject') }}">Subject</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Subject</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                {{-- <div class="col-lg-12">
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item"><a href="#list-view" data-bs-toggle="tab"
                                class="nav-link me-1 show active">List View</a></li>
                        <li class="nav-item"><a href="#grid-view" data-bs-toggle="tab" class="nav-link">Grid View</a></li>
                    </ul>
                </div> --}}
                <div class="col-lg-12">
                    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
                    @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
                    <div class="row tab-content">
                        {{-- <div id="list-view" class="tab-pane fade active show col-lg-12"> --}}
                        <div class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header justify-content-start">
                                    <h4 class="card-title me-2">All Subject List </h4>
                                    <a href="{{ url('/vtadmin/add-subject') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table ">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Subject Name</th>
                                                    <th>Category Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $subjects = DB::table('subjects')
                                                ->leftJoin('categories', 'categories.id', '=', 'subjects.category_id')
                                                ->select('subjects.*', 'categories.category_name as category_name')
                                                ->where("subjects.status", "!=", "2")->orderBy("subjects.id","desc")->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($subjects as $subject) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $subject->subject }}</td>
                                                    <td>{{ $subject->category_name }}</td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                   <form action="{{ url('/vtadmin/SubjectStatusChanger/' . $subject->id) }}" id="sstc{{ $subject->id }}" method="POST">
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $subject->id }}" {{ $subject->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $subject->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-subject', $subject->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deleteSubject', $subject->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $subjects->links() }}
                                    </div>
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
