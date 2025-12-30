@extends('admin.resource.main')
@section('title', 'Edit Faculty Experience')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Faculty Experience</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-faculty-experience') }}">Faculty Experience</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Faculty Experience</a></li>
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
                            <h5 class="card-title me-3">Edit Faculty Experience</h5>
                            <a href="{{ url('/vtadmin/list-faculty-experience') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/editFacultyExperience', $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Select Teacher</label>
                                            <select class="form-control" name="faculty_id">
                                                <option selected disabled>Select Teacher</option>
                                                <?php $facultyRegistrations = DB::table('faculty_registrations')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($facultyRegistrations as $facultyRegistration)
                                                    <option value="{{ $facultyRegistration->id }}"
                                                        @selected($facultyRegistration->id == $data->faculty_id)>
                                                        {{ $facultyRegistration->faculty_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Select Department</label>
                                            <select class="form-control" name="subject_id">
                                                <option selected disabled>Select Department</option>
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
                                            <label class="form-label">Enter Faculty Experience</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="type" name="faculty_experience" placeholder="Enter Faculty Experience" class="form-control" value="{{ $data->faculty_experience }}" required="">
                                            </div>
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
