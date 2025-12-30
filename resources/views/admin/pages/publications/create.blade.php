@extends('admin.resource.main')
@section('title', 'Add Publications')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Add Publications</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-publications') }}">Publications</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Publications</a></li>
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
                            <h5 class="card-title me-3">Add Publications</h5> 
                            <a href="{{ url('/vtadmin/list-publications') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/addPublications') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
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
                                    <div class="col-sm-4">
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Title of the Paper</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="publications_paper_title" placeholder="Enter Title of the Paper" class="form-control" value="{{ old('publications_paper_title') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Publications Name</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="publications_name" placeholder="Publications Name" class="form-control" value="{{ old('publications_name') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label" for="datepicker">Publications Date</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <!--<input type="date" name="publications_date" class="datepicker-default form-control" id="datepicker" value="{{ old('publications_date') }}" required="">-->
                                                <input class="form-control mb-xl-0 mb-3 bt-datepicker" value="{{ old('publications_date') }}" type="text" id="datepicker" name="publications_date" required>
                                                <div class="icon"><i class="far fa-calendar"></i></div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Publications Category</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="publications_category" placeholder="Publications Category" class="form-control" value="{{ old('publications_category') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Published In</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="published_in" placeholder="Published In" class="form-control" value="{{ old('published_in') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Volume</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="volume" placeholder="Volume" class="form-control" value="{{ old('volume') }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">ISSN No</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="issn_no" placeholder="ISSN No" class="form-control" value="{{ old('issn_no') }}" required="">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Publications Paper Link</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="publications_paper_link" placeholder="Publications Paper Link" class="form-control" value="{{ old('publications_paper_link') }}" required="">
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Sort by (Descending Order)</label>
                                            <select class="form-control" name="sort_by">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="ASC">ASC</option>
                                                <option value="DESC">DESC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <!-- File Upload Box -->
                                        <div class="mb-3" id="fileBox">
                                            <label class="form-label">Choose File</label>
                                            <input type="file" name="publications_file" class="form-control">
                                        </div>
                                        <!-- Link Input Box -->
                                        <div class="mb-3" id="linkBox" style="display: none;">
                                            <label class="form-label">Enter URL Link</label>
                                            <input type="text" name="publications_link" class="form-control" value="{{ old('publications_link') }}" placeholder="https://example.com/file.pdf">
                                        </div>
                                    </div>
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-4">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="upload_type" id="uploadFile" value="file" checked> 
                                                    <label class="form-check-label" for="uploadFile">File</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="upload_type" id="uploadLink" value="link">
                                                    <label class="form-check-label" for="uploadLink">Link</label>
                                                </div>
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
<script>
    const fileBox = document.getElementById("fileBox");
    const linkBox = document.getElementById("linkBox");

    document.getElementById("uploadFile").addEventListener("change", function () {
        fileBox.style.display = "block";
        linkBox.style.display = "none";
    });

    document.getElementById("uploadLink").addEventListener("change", function () {
        fileBox.style.display = "none";
        linkBox.style.display = "block";
    });
</script>
@endsection
