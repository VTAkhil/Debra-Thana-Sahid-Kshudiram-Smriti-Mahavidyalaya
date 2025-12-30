@extends('admin.resource.main')
@section('title', 'Edit Faculty Seminar')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Faculty Seminar</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-seminar') }}">Faculty Seminar</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Faculty Seminar</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
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
                            <h5 class="card-title me-3">Edit Faculty Seminar</h5>
                            <a href="{{ url('/vtadmin/list-seminar') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/editSeminar', $data->id) }}" method="post" enctype="multipart/form-data"> 
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
                                            <label class="form-label">Select Subject</label>
                                            <select class="form-control" name="subject_id" required>
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Seminar / Workshop Title</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="seminar_title"
                                                    placeholder="Enter Seminar / Workshop Title" class="form-control"
                                                    value="{{ $data->seminar_title }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Level</label>
                                            <select class="form-control" name="enter_level">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="College Level" {{ $data->enter_level == 'College Level' ? 'selected' : '' }}>College Level</option>
                                                <option value="State Level" {{ $data->enter_level == 'State Level' ? 'selected' : '' }}>State Level</option>
                                                <option value="National Level" {{ $data->enter_level == 'National Level' ? 'selected' : '' }}>National Level</option>
                                                <option value="International Level" {{ $data->enter_level == 'International Level' ? 'selected' : '' }}>International Level</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Organiser</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="organiser" placeholder="Enter Organiser"
                                                    class="form-control" value="{{ $data->organiser }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Invited Speaker</label>
                                            <select class="form-control" name="invited_speaker">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="Yes" {{ $data->invited_speaker == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="NO" {{ $data->invited_speaker == 'NO' ? 'selected' : '' }}>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Wheather Present Paper</label>
                                            <select class="form-control" name="wheather_present_paper">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="Yes" {{ $data->wheather_present_paper == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="NO" {{ $data->wheather_present_paper == 'NO' ? 'selected' : '' }}>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Enter Title of the Paper</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <input type="text" name="paper_title"placeholder="Enter Title of the Paper" class="form-control" value="{{ $data->paper_title }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    @php
                                        $hasFile = !empty($data->seminar_file);
                                        $hasLink = !empty($data->seminar_link);
                                    @endphp
                                    <div class="col-sm-4">
                                        <!-- File Upload Box -->
                                        <div class="mb-3" id="fileBox" style="{{ $hasFile ? '' : 'display:none;' }}">
                                            <label class="form-label">Choose File</label>
                                            <input type="file" name="seminar_file" class="form-control" value="{{ $data->seminar_file }}">
                                            @php
                                                $ext = strtolower(pathinfo($data->seminar_file, PATHINFO_EXTENSION));
                                            @endphp
                                            @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']))
                                                <img src="{{ url('/public/uploads/seminar/' . $data->seminar_file) }}" style="width:80px;height:80px">
                                            @elseif ($ext === 'pdf')
                                                <a href="{{ url('/public/uploads/seminar/' . $data->seminar_file) }}" class="btn btn-sm btn-primary" download>
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
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-4">
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
                                    <div class="mb-3"></div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const fileBox = document.getElementById("fileBox");
            const linkBox = document.getElementById("linkBox");

            document.getElementById("uploadFile").addEventListener("change", function() {
                fileBox.style.display = "block";
                linkBox.style.display = "none";
            });

            document.getElementById("uploadLink").addEventListener("change", function() {
                fileBox.style.display = "none";
                linkBox.style.display = "block";
            });
        });
    </script>
@endsection
