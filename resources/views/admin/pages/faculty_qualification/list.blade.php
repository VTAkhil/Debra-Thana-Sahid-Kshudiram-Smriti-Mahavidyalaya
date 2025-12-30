@extends('admin.resource.main')
@section('title', 'List Faculty Qualification')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Faculty Qualification</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-qualification') }}">Faculty Qualification</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Faculty Qualification</a></li>
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
                                    <h4 class="card-title me-2">All Faculty Qualification List </h4>
                                    <a href="{{ url('/vtadmin/add-faculty-qualification') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Faculty Name</th>
                                                    <th>Faculty Department</th>
                                                    <th>Faculty Qualification</th>
                                                    <th>Year of Passing</th>
                                                    <th>Institute Name</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $facultyQualifications = DB::table('faculty_qualifications')
                                                ->leftJoin('subjects','subjects.id', '=', 'faculty_qualifications.subject_id')
                                                ->leftJoin('faculty_registrations', 'faculty_registrations.id', '=', 'faculty_qualifications.faculty_id')
                                                ->select('faculty_qualifications.*','subjects.subject as subject_name','faculty_registrations.faculty_name','faculty_registrations.faculty_image')
                                                ->where("faculty_qualifications.status", "!=", "2")->orderBy("faculty_qualifications.id","desc")->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($facultyQualifications as $facultyQualification) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $facultyQualification->faculty_name }}</td>
                                                    <td>{{ $facultyQualification->subject_name }}</td>
                                                    <td>{{ $facultyQualification->faculty_qualification }}</td>
                                                    <td>{{ $facultyQualification->year_of_passing }}</td>
                                                    <td>{{ $facultyQualification->institute_name }}</td>
                                                    <td>
                                                        <img src="{{ url('/public/uploads/faculty/' . $facultyQualification->faculty_image) }}"style="width:80px;height:80px">
                                                    </td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                   <form action="{{ url('/vtadmin/facultyQualificationStatusChanger/' . $facultyQualification->id) }}" id="sstc{{ $facultyQualification->id }}" method="POST">
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $facultyQualification->id }}" {{ $facultyQualification->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $facultyQualification->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-faculty-qualification', $facultyQualification->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deleteFacultyQualification', $facultyQualification->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $facultyQualifications->links() }}
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
