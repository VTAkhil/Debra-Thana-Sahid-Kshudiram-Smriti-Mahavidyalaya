@extends('admin.resource.main')
@section('title', 'Add Upload Placement & Progression')
@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add Upload Placement & Progression</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-placementProgression') }}">Placement & Progression</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Upload Placement & Progression</a></li>
                </ol>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
                @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
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
                        <h5 class="card-title me-3">Add Upload Placement & Progression</h5>
                        <a href="{{ url('/vtadmin/list-placementProgression') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i>Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("/vtadmin/editPlacementProgression", $data->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                       <div class="form-group">
                                            <label class="form-label">Select Departments</label>
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
                                </div>
                                
                                 <div class="col-lg-6">
                                    <label class="form-label">Enter Student Name</label>
                                    <input id="Enter_First_Name" name="student_name" placeholder="Enter Student Name" type="text" class="form-control" value="{{ $data->student_name }}" required="">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Enter Year</label>
                                    <input id="Enter_First_Name" name="year" placeholder="Enter Year" type="text" class="form-control" value="{{ $data->year }}" required="">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Enter Placement / Progression</label>
                                    <input id="Enter_First_Name" name="placement_progression" placeholder="Enter Placement / Progression" type="text" class="form-control" value="{{ $data->placement_progression }}" required="">
                                </div>
                                <div class="mb-3">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-warning">Submit</button>
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
    }, 3000);
</script>

@endsection