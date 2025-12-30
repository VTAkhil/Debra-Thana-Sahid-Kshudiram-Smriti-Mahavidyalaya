@extends('admin.resource.main')
@section('title', 'Edit Upload Seminar')
@section('content')

<div class="content-body">
    
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit Upload Seminar</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-upseminar') }}">Edit Upload Seminar</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Upload Seminar</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
                @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
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
                        <h5 class="card-title me-3">Edit Upload Seminar</h5>
                        <a href="{{ url('/vtadmin/upseminar-list') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("/vtadmin/editUpSeminar", $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Enter_First_Name">Enter Title of the Seminar / Webinar / Workshop / Events / Conferences</label>
                                        <input id="Enter_First_Name" name="seminar_titile" placeholder="Enter the Seminar Titile" type="text" class="form-control" value="{{ $data->seminar_titile }}"  required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Level</label>
                                        <select class="form-control" name="Seminar_level">
                                            <option selected disabled>Select Level</option>
                                            <option value="College Level" {{ $data->Seminar_level == 'College Level' ? 'selected' : '' }}>College Level</option>
                                            <option value="State Level" {{ $data->Seminar_level == 'State Level' ? 'selected' : '' }}>State Level</option>
                                            <option value="National Level" {{ $data->Seminar_level == 'National Level' ? 'selected' : '' }}>National Level</option>
                                            <option value="International Level" {{ $data->Seminar_level == 'International Level' ? 'selected' : '' }}>International Level</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="datepicker">Select Type</label>
                                        <select class="form-control" name="seminar_type">
                                            <option selected disabled>Select Type</option>
                                            <option value="Seminar" {{ $data->seminar_type == 'Seminar' ? 'selected' : '' }}>Seminar</option>
                                            <option value="Webinar" {{ $data->seminar_type == 'Webinar' ? 'selected' : '' }}>Webinar</option>
                                            <option value="Workshop" {{ $data->seminar_type == 'Workshop' ? 'selected' : '' }}>Workshop</option>
                                            <option value="Events" {{ $data->seminar_type == 'Events' ? 'selected' : '' }}>Events</option>
                                            <option value="Conferences" {{ $data->seminar_type == 'Conferences' ? 'selected' : '' }}>Conferences</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Enter_First_Name">Enter Speakers</label>
                                        <input id="Enter_First_Name" name="speakers_name" placeholder="Enter Speakers" type="text" class="form-control" value="{{ $data->speakers_name }}" required="">
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Enter_First_Name">Enter Duration</label>
                                        <input id="Enter_First_Name" name="enter_duration" placeholder="Enter Duration" type="text" class="form-control" value="{{ $data->enter_duration }}" required="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Department</label>
                                        <select class="form-control" name="subject_id">
                                            <option value="" selected disabled>Select Subject</option>
                                            <?php $subjects = DB::table('subjects')->where('status', '1')->orderBy('id', 'desc')->get(); ?>
                                            @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}" @selected($subject->id == $data->subject_id)>
                                                    {{ $subject->subject }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- @php
                                    $hasFile = !empty($data->seminar_file);
                                    $hasLink = !empty($data->seminar_link);
                                @endphp
                                <div class="col-sm-6">
                                    <!-- File Upload Box -->
                                    <div class="mb-3" id="fileBox">
                                        <label class="form-label">Choose File</label>
                                        <input type="file" name="seminar_file" class="form-control" value="{{ $data->seminar_file }}">
                                        @php
                                            $ext = strtolower(pathinfo($data->seminar_file, PATHINFO_EXTENSION));
                                        @endphp
                                        @if (in_array($ext, ['jpg','jpeg','png','webp']))
                                            <img src="{{ url('public/uploads/upseminar/'.$data->seminar_file) }}" style="width:80px;height:80px">
                                        @elseif ($ext === 'pdf')
                                            <a href="{{ url('public/uploads/upseminar/'.$data->seminar_file) }}" class="btn btn-sm btn-primary" download>
                                               <i class="la la-download"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <!-- Link Input Box -->
                                    <div class="mb-3" id="linkBox" style="display: none;">
                                        <label class="form-label">Enter URL Link</label>
                                        <input type="text" name="seminar_link" class="form-control" value="{{ $data->seminar_link }}" placeholder="https://example.com/file.pdf">
                                    </div>
                                </div> --}}


                                @php
                                    $hasFile = !empty($data->seminar_file);
                                    $hasLink = !empty($data->seminar_link);
                                @endphp
                                <div class="col-sm-6">
                                    <!-- File Upload Box -->
                                    <div class="mb-3" id="fileBox" style="{{ $hasFile ? '' : 'display:none;' }}">
                                        <label class="form-label">Choose File</label>
                                        <input type="file" name="seminar_file" class="form-control">
                                        @php
                                            $ext = strtolower(pathinfo($data->seminar_file, PATHINFO_EXTENSION));
                                        @endphp
                                        @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']))
                                            <img src="{{ url('/public/uploads/syllabus/' . $data->seminar_file) }}" style="width:80px;height:80px">
                                        @elseif ($ext === 'pdf')
                                            <a href="{{ url('/public/uploads/syllabus/' . $data->seminar_file) }}" class="btn btn-sm btn-primary" download>
                                                <i class="la la-download"></i>
                                            </a>
                                        @endif
                                    </div>
                                    <!-- Link Input Box -->
                                    <div class="mb-3" id="linkBox" style="{{ $hasLink && !$hasFile ? '' : 'display:none;' }}">
                                        <label class="form-label">Enter URL Link</label>
                                        <input type="text" name="seminar_link" class="form-control" value="{{ $data->seminar_link }}" placeholder="https://example.com/file.pdf">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="datepicker">Select Date</label>
                                        <div class="input-hasicon mb-xl-0 mb-3">
                                            <input class="form-control mb-xl-0 mb-3 bt-datepicker" name="seminar_date" value="{{ $data->seminar_date }}" type="text" id="datepicker">
                                            <div class="icon"><i class="far fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="upload_type" id="uploadFile" value="file" {{ $hasFile ? 'checked' : '' }}>
                                                <label class="form-check-label" for="uploadFile">File</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="upload_type" id="uploadLink" value="link" {{ !$hasFile && $hasLink ? 'checked' : '' }}>
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