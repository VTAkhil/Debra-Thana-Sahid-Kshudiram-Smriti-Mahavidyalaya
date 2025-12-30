@extends('admin.resource.main')
@section('title', 'Edit Faculty Registration')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Faculty Registration</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-registration') }}">Faculty
                                Registration</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Faculty Registration</a></li>
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
                            <h5 class="card-title me-3">Edit Faculty Registration</h5>
                            <a href="{{ url('/vtadmin/list-faculty-registration') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/editFacultyRegistration', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Faculty Name</label>
                                            <input name="faculty_name" placeholder="Enter Faculty Name" type="text"
                                                class="form-control" value="{{ $data->faculty_name }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Faculty Email</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_email" placeholder="Enter Faculty Email"
                                                    class="form-control" value="{{ $data->faculty_email }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Faculty Mobile</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_mobile"
                                                    placeholder="Enter Faculty Mobile" class="form-control"
                                                    value="{{ $data->faculty_mobile }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Specialization</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_specialization"
                                                    placeholder="Enter Specialization" class="form-control"
                                                    value="{{ $data->faculty_specialization }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Qualification</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_qualification" placeholder="Enter Qualification" class="form-control" value="{{  $data->faculty_qualification }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Area of Research</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="area_of_research"
                                                    placeholder="Enter Area of Research" class="form-control"
                                                    value="{{ $data->area_of_research }}" required="">
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
                                                    <option value="{{ $subject->id }}" @selected($subject->id == $data->subject_id)>
                                                        {{ $subject->subject }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Faculty Designation</label>
                                            <select class="form-control" name="faculty_designation">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="Principal"
                                                    {{ $data->faculty_designation == 'Principal' ? 'selected' : '' }}>
                                                    Principal
                                                </option>
                                                <option value="Associate Professor"
                                                    {{ $data->faculty_designation == 'Associate Professor' ? 'selected' : '' }}>
                                                    Associate Professor
                                                </option>
                                                <option value="Assistant Professor"
                                                    {{ $data->faculty_designation == 'Assistant Professor' ? 'selected' : '' }}>
                                                    Assistant Professor
                                                </option>
                                                <option value="Assistant Professor (Contractual)"
                                                    {{ $data->faculty_designation == 'Assistant Professor (Contractual)' ? 'selected' : '' }}>
                                                    Assistant Professor (Contractual)
                                                </option>
                                                <option value="Library Assistant"
                                                    {{ $data->faculty_designation == 'Library Assistant' ? 'selected' : '' }}>
                                                    Library Assistant
                                                </option>
                                                <option value="State Aided College Teacher (SACT)"
                                                    {{ $data->faculty_designation == 'State Aided College Teacher (SACT)' ? 'selected' : '' }}>
                                                    State Aided College Teacher (SACT)
                                                </option>
                                                <option value="Casual Non-Teaching Staff"
                                                    {{ $data->faculty_designation == 'Casual Non-Teaching Staff' ? 'selected' : '' }}>
                                                    Casual Non-Teaching Staff
                                                </option>
                                                <option value="Office Staff"
                                                    {{ $data->faculty_designation == 'Office Staff' ? 'selected' : '' }}>
                                                    Office Staff
                                                </option>
                                                <option value="Laboratory Attendant"
                                                    {{ $data->faculty_designation == 'Laboratory Attendant' ? 'selected' : '' }}>
                                                    Laboratory Attendant
                                                </option>
                                                <option value="Head Clerk"
                                                    {{ $data->faculty_designation == 'Head Clerk' ? 'selected' : '' }}>
                                                    Head Clerk
                                                </option>
                                                <option value="Accounts Section"
                                                    {{ $data->faculty_designation == 'Accounts Section' ? 'selected' : '' }}>
                                                    Accounts Section
                                                </option>
                                                <option value="Cash Section"
                                                    {{ $data->faculty_designation == 'Cash Section' ? 'selected' : '' }}>
                                                    Cash Section
                                                </option>
                                                <option value="University and Scholarship Section"
                                                    {{ $data->faculty_designation == 'University and Scholarship Section' ? 'selected' : '' }}>
                                                    University and Scholarship Section
                                                </option>
                                                <option value="Visiting Teacher"
                                                    {{ $data->faculty_designation == 'Visiting Teacher' ? 'selected' : '' }}>
                                                    Visiting Teacher
                                                </option>
                                                <option value="Contractual Teacher"
                                                    {{ $data->faculty_designation == 'Contractual Teacher' ? 'selected' : '' }}>
                                                    Contractual Teacher
                                                </option>
                                                <option value="Others"
                                                    {{ $data->faculty_designation == 'Others' ? 'selected' : '' }}>
                                                    Others
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Faculty Type</label>
                                            <select class="form-control" name="faculty_type">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="Teaching Staff" {{ $data->faculty_type == 'Teaching Staff' ? 'selected' : '' }}>Teaching Staff</option>
                                                <option value="Non Teaching Staff" {{ $data->faculty_type == 'Non Teaching Staff' ? 'selected' : '' }}>Non Teaching Staff</option>
                                                <option value="Librarian" {{ $data->faculty_type == 'Librarian' ? 'selected' : '' }}>Librarian </option>
                                                <option value="Others" {{ $data->faculty_type == 'Others' ? 'selected' : '' }}>Others </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Employee Id</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="faculty_employee_id"
                                                    placeholder="Enter Employee Id" class="form-control"
                                                    value="{{ $data->faculty_employee_id }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Choose File</label>
                                            <input type="file" name="faculty_image" class="form-control" value="{{ $data->faculty_image }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="{{ url('/public/uploads/faculty/' . $data->faculty_image) }}"style="width:80px;height:80px">
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
