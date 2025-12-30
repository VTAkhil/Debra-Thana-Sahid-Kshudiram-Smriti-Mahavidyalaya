@extends('admin.resource.main')
@section('title', 'Add Subject')
@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add Subject</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Subject</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Subject</a></li>
                </ol>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-8 col-xxl-8 col-sm-12">
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
                        <h5 class="card-title me-3">Add Subject</h5>
                        <a href="{{ url('/vtadmin/list-subject') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("/vtadmin/addSubject") }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="Enter_First_Name">Enter Subject Title</label>
                                        <input type="text" name="subject" id="Enter_First_Name" placeholder="Enter Title"  class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Category</label>
                                        <select class="form-control" name="category_id">
                                            <option selected disabled>Select Category</option>
                                            <?php $categories = DB::table('categories')->where("status","1")->orderBy("id","Desc")->get(); ?>
                                            @foreach($categories as $Category)
                                                <option value="{{ $Category->id }}">{{$Category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
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