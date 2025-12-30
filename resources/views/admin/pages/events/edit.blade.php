@extends('admin.resource.main')
@section('title', 'Edit Events')
@section('content')

    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Add Events</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-events') }}">Events</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Events</a></li>
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
                            <h5 class="card-title me-3">Edit Events</h5>
                            <a href="{{ url('/vtadmin/list-events') }}" class="btn btn-primary"><i
                                    class="fa-solid fa-angles-left"></i> Back</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('/vtadmin/editEvents', $data->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="Enter_First_Name">Enter Title</label>
                                            <input id="Enter_First_Name" name="events_title" placeholder="Enter Title" type="text" class="form-control" value="{{ $data->events_title }}" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="datepicker">Enter Events Date</label>
                                            <div class="input-hasicon mb-xl-0 mb-3">
                                                <!--<input type="date" name="events_date" class="datepicker-default form-control" id="datepicker" value="{{ $data->events_date }}" required="">-->
                                                <input class="form-control mb-xl-0 mb-3 bt-datepicker" value="{{ old('events_date') }}" type="text" id="datepicker" name="events_date" required>
                                                <div class="icon"><i class="far fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $hasFile = !empty($data->events_file);
                                        $hasLink = !empty($data->events_link);
                                    @endphp
                                    <div class="col-sm-6">
                                        <!-- File Upload Box -->
                                        <div class="mb-3" id="fileBox" style="{{ $hasFile ? '' : 'display:none;' }}">
                                            <label class="form-label">Choose File</label>
                                            <input type="file" name="events_file" class="form-control">
                                            @php
                                                $ext = strtolower(pathinfo($data->events_file, PATHINFO_EXTENSION));
                                            @endphp
                                            @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']))
                                                <img src="{{ url('/public/uploads/events/' . $data->events_file) }}" style="width:80px;height:80px">
                                            @elseif ($ext === 'pdf')
                                                <a href="{{ url('/public/uploads/events/' . $data->events_file) }}" class="btn btn-sm btn-primary" download>
                                                    <i class="la la-download"></i>
                                                </a>
                                            @endif
                                        </div>

                                        <!-- Link Input Box -->
                                        <div class="mb-3" id="linkBox" style="{{ $hasLink && !$hasFile ? '' : 'display:none;' }}">
                                            <label class="form-label">Enter URL Link</label>
                                            <input type="text" name="events_link" class="form-control" value="{{ $data->events_link }}" placeholder="https://example.com/file.pdf">
                                        </div>
                                    </div>
                                    <div class="col-sm-6"></div>
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
