@extends('admin.resource.main')
@section('title', 'Add Faculty Registration')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Add Faculty Registration</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-registration') }}">Faculty
                                Registration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Faculty Registration</a></li>
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
                            <h5 class="card-title me-3">Add Faculty Registration</h5> 
                            <a href="{{ url('/vtadmin/list-faculty-registration') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/addFacultyRegistration') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Faculty Name</label>
                                            <input name="faculty_name" placeholder="Enter Faculty Name" type="text" class="form-control" value="{{ old('faculty_name') }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Faculty Email</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_email" placeholder="Enter Faculty Email" class="form-control" value="{{ old('faculty_email') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Faculty Mobile</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_mobile" placeholder="Enter Faculty Mobile" class="form-control" value="{{ old('faculty_mobile') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Specialization</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_specialization" placeholder="Enter Specialization" class="form-control" value="{{ old('faculty_specialization') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Qualification</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_qualification" placeholder="Enter Qualification" class="form-control" value="{{ old('faculty_qualification') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Area of Research</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="area_of_research" placeholder="Enter Area of Research" class="form-control" value="{{ old('area_of_research') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Select Subject</label>
                                            <select class="form-control" name="subject_id">
                                                <option selected disabled>Select Subject</option>
                                                <?php $subjects = DB::table('subjects')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Faculty Designation</label>
                                            <select class="form-control" name="faculty_designation">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="Principal">Principal</option>
                                                <option value="Associate Professor">Associate Professor</option>
                                                <option value="Assistant Professor">Assistant Professor</option>
                                                <option value="Assistant Professor (Contractual)">Assistant Professor (Contractual)</option>
                                                <option value="Library Assistant">Library Assistant</option>
                                                <option value="State Aided College Teacher (SACT)">State Aided College Teacher (SACT)</option>
                                                <option value="Casual Non-Teaching Staff">Casual Non-Teaching Staff</option>
                                                <option value="Office Staff">Office Staff</option>
                                                <option value="Laboratory Attendant">Laboratory Attendant</option>
                                                <option value="Head Clerk">Head Clerk</option>
                                                <option value="Accounts Section">Accounts Section</option>
                                                <option value="Cash Section">Cash Section</option>
                                                <option value="University and Scholarship Section">University and Scholarship Section</option>
                                                <option value="Visiting Teacher">Visiting Teacher</option>
                                                <option value="Contractual Teacher">Contractual Teacher</option>
                                                <option value="Others">Others</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Faculty Type</label>
                                            <select class="form-control" name="faculty_type">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="Teaching Staff">Teaching Staff</option>
                                                <option value="Non Teaching Staff">Non Teaching Staff</option>
                                                <option value="Librarian">Librarian</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Employee Id</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="faculty_employee_id" placeholder="Enter Employee Id" class="form-control" value="{{ old('faculty_employee_id') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Choose File</label>
                                            <input type="file" name="faculty_image" class="form-control">
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
    <script>
        setTimeout(function() {
            $(".alert").fadeOut("slow");
        }, 5000);
    </script>

@endsection
