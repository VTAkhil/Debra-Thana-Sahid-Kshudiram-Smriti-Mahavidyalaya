@extends('admin.resource.main')
@section('title', 'Faculty Assign to Other Deprtment')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Faculty Assign to Other Deprtment</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-assign') }}">Faculty
                                Assign</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Faculty Assign to Other
                                Deprtment</a></li>
                    </ol>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header justify-content-start">
                            <h5 class="card-title me-3">Faculty Assign to Other Deprtment</h5>
                            <a href="{{ url('/vtadmin/list-faculty-assign') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/addFacultyAssign') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- Select Teacher -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Teacher</label>
                                            <select class="form-control" name="faculty_id" id="faculty_id">
                                                <option value="" selected disabled>Select Teacher</option>
                                                @php
                                                    $facultyRegistrations = DB::table('faculty_registrations')->where('status', '1')->orderBy('id', 'desc')->get();
                                                @endphp
                                                @foreach ($facultyRegistrations as $faculty)
                                                    <option value="{{ $faculty->id }}">{{ $faculty->faculty_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Faculty Department*</label>
                                            <input type="text" id="subject_name" class="form-control" placeholder="Faculty Department" readonly>
                                            <input type="hidden" name="subject_id" id="subject_id">
                                        </div>
                                    </div>
                                    <!-- jQuery -->
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        $(document).ready(function () {
                                            $("#faculty_id").change(function () {
                                                let faculty = $(this).val();
                                                $.ajax({
                                                    url: "{{ url('/get-subject-by-faculty') }}",
                                                    type: "POST",
                                                    data: {
                                                        faculty: faculty,
                                                        _token: "{{ csrf_token() }}"
                                                    },
                                                    success: function (result) {
                                                        $('#subject_name').val(result.subject_name); // show name
                                                        $('#subject_id').val(result.subject_id);     // store id
                                                    },
                                                    error: function () {
                                                        alert("Something went wrong while fetching faculty department.");
                                                    }
                                                });
                                            });
                                        });
                                    </script>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Enter New Designation</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="faculty_new_designation"
                                                    placeholder="Enter New Designation" class="form-control"
                                                    value="{{ old('faculty_new_designation') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select New Department</label>
                                            <select class="form-control" name="another_subject_id" id="another_subject_id">
                                                <option selected disabled>Select Subject</option>
                                                <?php $subjects = DB::table('subjects')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
