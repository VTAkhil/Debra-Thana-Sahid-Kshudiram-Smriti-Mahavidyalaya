@extends('admin.resource.main')
@section('title', 'List Faculty Assign')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Faculty Assign</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-assign') }}">Faculty Assign</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Faculty Assign</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
                    @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
                    <div class="row tab-content">
                        {{-- <div id="list-view" class="tab-pane fade active show col-lg-12"> --}}
                        <div class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header justify-content-start">
                                    <h4 class="card-title me-2">All Faculty Assign List </h4>
                                    <a href="{{ url('/vtadmin/add-faculty-assign') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Faculty Name</th>
                                                    <th>Faculty Department</th>
                                                    <th>Faculty New Designation</th>
                                                    <th>Faculty New Department</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $facultyAssigns = DB::table('faculty_assigns')
                                                ->leftJoin('subjects as s1', 's1.id', '=', 'faculty_assigns.subject_id')
                                                ->leftJoin('subjects as s2', 's2.id', '=', 'faculty_assigns.another_subject_id')
                                                ->leftJoin('faculty_registrations', 'faculty_registrations.id', '=', 'faculty_assigns.faculty_id')
                                                ->select('faculty_assigns.*','s1.subject as subject_name','s2.subject as another_subject_name','faculty_registrations.faculty_name')
                                                ->where("faculty_assigns.status", "!=", "2")->orderBy("faculty_assigns.id","desc")->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($facultyAssigns as $facultyAssign) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $facultyAssign->faculty_name }}</td>
                                                    <td>{{ $facultyAssign->subject_name }}</td>
                                                    <td>{{ $facultyAssign->faculty_new_designation }}</td>
                                                    <td>{{ $facultyAssign->another_subject_name  }}</td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                   <form action="{{ url('/vtadmin/FacultyAssignStatusChanger/' . $facultyAssign->id) }}" id="sstc{{ $facultyAssign->id }}" method="POST">
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $facultyAssign->id }}" {{ $facultyAssign->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $facultyAssign->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-faculty-assign', $facultyAssign->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deleteFacultyAssign', $facultyAssign->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $facultyAssigns->links() }}
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
