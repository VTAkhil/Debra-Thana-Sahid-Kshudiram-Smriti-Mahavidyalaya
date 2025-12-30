@extends('admin.resource.main')
@section('title', 'Edit University Result')
@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit University Result</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-result') }}">University Result</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit University Result</a></li>
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
                        <h5 class="card-title me-3">Edit University Result</h5>
                        <a href="{{ url('/vtadmin/list-result') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("/vtadmin/editResult",$data->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                       <div class="form-group">
                                        <label class="form-label">Select Subject</label>
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
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Select Session</label>
                                        <select class="form-control" name="session">
                                            <option value="2024-2025" {{ $data->session == '2024-2025' ? 'selected' : '' }}>2024 - 2025</option>
                                            <option value="2023-2024" {{ $data->session == '2023-2024' ? 'selected' : '' }}>2023 - 2024</option>
                                            <option value="2022-2023" {{ $data->session == '2022-2023' ? 'selected' : '' }}>2022 - 2023</option>
                                            <option value="2021-2022" {{ $data->session == '2021-2022' ? 'selected' : '' }}>2021 - 2022</option>
                                            <option value="2020-2021" {{ $data->session == '2020-2021' ? 'selected' : '' }}>2020 - 2021</option>
                                            <option value="2019-2020" {{ $data->session == '2019-2020' ? 'selected' : '' }}>2019 - 2020</option>
                                            <option value="2018-2019" {{ $data->session == '2018-2019' ? 'selected' : '' }}>2018 - 2019</option>
                                            <option value="2017-2018" {{ $data->session == '2017-2018' ? 'selected' : '' }}>2017 - 2018</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-lg-4">
                                    <label class="form-label">Enter No of Students Appeared</label>
                                    <input id="Enter_First_Name" name="student_appeared" placeholder="Enter No of Students Appeared" type="text" class="form-control" value="{{ $data->student_appeared }}" required="">
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Enter No of Students Passed</label>
                                    <input id="Enter_First_Name" name="student_passed" placeholder="Enter No of Students Passed" type="text" class="form-control" value="{{ $data->student_passed }}" required="">
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