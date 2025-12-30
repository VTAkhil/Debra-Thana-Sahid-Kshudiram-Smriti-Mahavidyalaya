@extends('admin.resource.main')
@section('title', 'Edit Notice')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Edit Notice</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-notice') }}">Notice</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Notice</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    @if (session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
                    @if (session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
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
                            <h5 class="card-title me-3">Edit Notice</h5>
                            <a href="{{ url('/vtadmin/list-notice') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url("/vtadmin/editNotice", $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Enter_First_Name">Enter Title</label>
                                            <input id="Enter_First_Name" name="notice_title" placeholder="Enter Title"
                                                type="text" class="form-control" value="{{ $data->notice_title }}"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="datepicker">Enter Start Date</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <!--<input type="date" name="start_date" class="datepicker-default form-control" id="datepicker" value="{{ $data->start_date }}" required="">-->
                                                <input class="form-control mb-xl-0 mb-3 bt-datepicker" value="{{ $data->start_date }}" type="text" id="datepicker" name="start_date">
                                                <div class="icon"><i class="far fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="datepicker">Enter End Date</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                {{-- <input type="date" name="end_date" class="datepicker-default form-control" id="datepicker" value="{{ $data->end_date }}" required=""> --}}
                                                <input class="form-control mb-xl-0 mb-3 bt-datepicker" value="{{ $data->end_date }}" type="text" id="datepicker" name="end_date" required>
                                                <div class="icon"><i class="far fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
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
                                    @php
                                        $hasFile = !empty($data->notice_file);
                                        $hasLink = !empty($data->notice_link);
                                    @endphp
                                    <div class="col-sm-4">
                                        <!-- File Upload Box -->
                                        <div class="mb-3" id="fileBox" style="{{ $hasFile ? '' : 'display:none;' }}">
                                            <label class="form-label">Choose File</label>
                                            <input type="file" name="notice_file" class="form-control">
                                            @php
                                                $ext = strtolower(pathinfo($data->notice_file, PATHINFO_EXTENSION));
                                            @endphp
                                            @if (in_array($ext, ['jpg','jpeg','png','webp']))
                                                <img src="{{ asset('uploads/notice/'.$data->notice_file) }}" style="width:80px;height:80px">
                                            @elseif ($ext === 'pdf')
                                                <a href="{{ asset('uploads/notice/'.$data->notice_file) }}" class="btn btn-sm btn-primary" download>
                                                    <i class="la la-download"></i>
                                                </a>
                                            @endif
                                        </div>

                                        <!-- Link Input Box -->
                                        <div class="mb-3" id="linkBox" style="{{ $hasLink && !$hasFile ? '' : 'display:none;' }}">
                                            <label class="form-label">Enter URL Link</label>
                                            <input type="text" name="notice_link" class="form-control" value="{{ $data->notice_link }}" placeholder="https://example.com/file.pdf"> 
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Add in Which Notice ?</label>
                                            <select class="form-control" name="notice_value">
                                                <option selected disabled>Select Any Option</option>
                                                <option value="General Notice" {{ $data->notice_value == 'General Notice' ? 'selected' : '' }}>General Notice</option>
                                                <option value="Examination Notifications" {{ $data->notice_value == 'Examination Notifications' ? 'selected' : '' }}>Examination Notifications</option>
                                                <option value="Tender Notice" {{ $data->notice_value == 'Tender Notice' ? 'selected' : '' }}>Tender Notice</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="form-label">Blink Effect</label>
                                            <select class="form-control" name="blink_effect">
                                                <option disabled>Select Any Option</option>
                                                <option value="Yes" {{ $data->blink_effect == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="No" {{ $data->blink_effect == 'No' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>
                                    </div>
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
        document.addEventListener('DOMContentLoaded', function () {
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
        });
    </script>
@endsection
