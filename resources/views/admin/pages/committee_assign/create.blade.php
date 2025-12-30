@extends('admin.resource.main')
@section('title', 'Faculty Assign to Committee')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Faculty Assign to Committee</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-committee-assign') }}">Faculty Committee</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Faculty Assign to Committee</a></li>
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
                            <h5 class="card-title me-3">Faculty Assign to Committee</h5> 
                            <a href="{{ url('/vtadmin/list-committee-assign') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/addCommitteeAssign') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Teacher</label>
                                            <select class="form-control" name="faculty_id">
                                                <option selected disabled>Select Teacher</option>
                                                <?php $facultyRegistrations = DB::table('faculty_registrations')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($facultyRegistrations as $facultyRegistration)
                                                    <option value="{{ $facultyRegistration->id }}">{{ $facultyRegistration->faculty_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Department</label>
                                            <select class="form-control" name="subject_id" id="subject_id">
                                                <option selected disabled>Select Subject</option>
                                                <?php $subjects = DB::table('subjects')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->subject }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Enter New Designation</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="faculty_new_designation" placeholder="Enter New Designation" class="form-control" value="{{ old('faculty_new_designation') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Enter Sl. No</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="committee_sl_no" placeholder="Enter Sl. No" class="form-control" value="{{ old('committee_sl_no') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select New Committee</label>
                                            <select class="form-control" name="committee_id">
                                                <option selected disabled>Select Committee</option>
                                                <?php $committees = DB::table('committees')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($committees as $committee)
                                                    <option value="{{ $committee->id }}">{{ $committee->committee }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Type</label>
                                            <select class="form-control" name="committee_type">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="Chairperson">Chairperson</option>
                                                <option value="All Heads of the Department">All Heads of the Department</option>
                                                <option value="Four Senior Teachers">Four Senior Teachers</option>
                                                <option value="Four Experts / academicians">Four Experts / academicians</option>
                                                <option value="University Nominee">University Nominee</option>
                                                <option value="Controller of Examination">Controller of Examination</option>
                                                <option value="A Faculty member nominated by Principal">A Faculty member nominated by Principal</option>
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
