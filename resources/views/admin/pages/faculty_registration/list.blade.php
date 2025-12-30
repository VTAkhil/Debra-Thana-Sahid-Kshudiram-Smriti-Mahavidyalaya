@extends('admin.resource.main')
@section('title', 'List Faculty Registration')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Faculty Registration</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-registration') }}">Faculty Registration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Faculty Registration</a></li>
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
                                    <h4 class="card-title me-2">All Faculty Registration List </h4>
                                    <a href="{{ url('/vtadmin/add-faculty-registration') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Faculty Name</th>
                                                    <th>Faculty Maobile</th>
                                                    <th>Faculty Email</th>
                                                    <th>Faculty Designation</th>
                                                    <th>Faculty Type</th>
                                                    <th>Faculty Department</th>
                                                    <th>Faculty Specialization</th>
                                                    <th>Faculty Qualification</th>
                                                    <th>Area of Research</th>
                                                    <th>Faculty Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $facultyRegistrations = DB::table('faculty_registrations')
                                                ->leftJoin('subjects', 'subjects.id', '=', 'faculty_registrations.subject_id')
                                                ->select('faculty_registrations.*', 'subjects.subject as subject_name')
                                                ->where("faculty_registrations.status", "!=", "2")->orderBy("faculty_registrations.id","desc")->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($facultyRegistrations as $facultyRegistration) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $facultyRegistration->faculty_name }}</td>
                                                    <td>{{ $facultyRegistration->faculty_mobile }}</td>
                                                    <td>{{ $facultyRegistration->faculty_email }}</td>
                                                    <td>{{ $facultyRegistration->faculty_designation }}</td>
                                                    <td>{{ $facultyRegistration->faculty_type }}</td>
                                                    <td>{{ $facultyRegistration->subject_name }}</td>
                                                    <td>{{ $facultyRegistration->faculty_specialization }}</td>
                                                    <td>{{ $facultyRegistration->faculty_qualification }}</td>
                                                    <td>{{ $facultyRegistration->area_of_research }}</td>
                                                    <td>
                                                        <img src="{{ url('/public/uploads/faculty/' . $facultyRegistration->faculty_image) }}"style="width:80px;height:80px">
                                                    </td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                   <form action="{{ url('/vtadmin/facultyRegistrationStatusChanger/' . $facultyRegistration->id) }}" id="sstc{{ $facultyRegistration->id }}" method="POST">
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $facultyRegistration->id }}" {{ $facultyRegistration->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $facultyRegistration->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-faculty-registration', $facultyRegistration->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deleteFacultyRegistration', $facultyRegistration->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $facultyRegistrations->links() }}
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
