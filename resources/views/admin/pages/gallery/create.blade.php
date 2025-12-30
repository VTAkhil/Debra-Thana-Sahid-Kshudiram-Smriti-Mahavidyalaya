@extends('admin.resource.main')
@section('title', 'Add Gallery')
@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add Gallery</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-gallery') }}">Gallery</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Gallery</a></li>
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
                        <h5 class="card-title me-3">Add Gallery</h5>
                        <a href="{{ url('/vtadmin/list-gallery') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("/vtadmin/addGallery") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label" for="gallery_title">Enter Gallery Title</label>
                                        <input id="gallery_title" name="gallery_title" placeholder="Enter Title" type="text" class="form-control" value="{{ old('gallery_title') }}" required="" >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Select Subject</label>
                                        <select class="form-control" name="subject_id">
                                            <option selected disabled>Select Subject</option>
                                            <?php $subjects = DB::table('subjects')->where("status","1")->orderBy("id","Desc")->get(); ?>
                                            @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{$subject->subject}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Choose File</label>
                                        <input type="file" name="gallery_image" class="form-control" required accept="image/png,image/jpeg,image/jpg">
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