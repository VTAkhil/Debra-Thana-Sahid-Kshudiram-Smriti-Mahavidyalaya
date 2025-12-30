@extends('admin.resource.main')
@section('title', 'List Faculty Experience')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Faculty Experience</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-experience') }}">Faculty Experience</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Faculty Experience</a></li>
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
                                    <h4 class="card-title me-2">All Faculty Experience List </h4>
                                    <a href="{{ url('/vtadmin/add-faculty-experience') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Faculty Name</th>
                                                    <th>Faculty Experience</th>
                                                    <th>Faculty Department</th>
                                                    <th>Faculty Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $facultyExperiences = DB::table('faculty_experiences')
                                                ->leftJoin('subjects','subjects.id', '=', 'faculty_experiences.subject_id')
                                                ->leftJoin('faculty_registrations', 'faculty_registrations.id', '=', 'faculty_experiences.faculty_id')
                                                ->select('faculty_experiences.*','subjects.subject as subject_name','faculty_registrations.faculty_name','faculty_registrations.faculty_image')
                                                ->where("faculty_experiences.status", "!=", "2")->orderBy("faculty_experiences.id","desc")->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($facultyExperiences as $facultyExperience) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $facultyExperience->faculty_name }}</td>
                                                    <td>{{ $facultyExperience->subject_name }}</td>
                                                    <td>{{ $facultyExperience->faculty_experience }}</td>
                                                    <td>
                                                        <img src="{{ url('/public/uploads/faculty/' . $facultyExperience->faculty_image) }}"style="width:80px;height:80px">
                                                    </td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                   <form action="{{ url('/vtadmin/facultyExperienceStatusChanger/' . $facultyExperience->id) }}" id="sstc{{ $facultyExperience->id }}" method="POST">
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $facultyExperience->id }}" {{ $facultyExperience->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $facultyExperience->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-faculty-experience', $facultyExperience->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deleteFacultyExperience', $facultyExperience->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $facultyExperiences->links() }}
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
