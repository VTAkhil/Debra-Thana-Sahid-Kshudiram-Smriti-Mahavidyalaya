@extends('admin.resource.main')
@section('title', 'Add User')
@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add User</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-user') }}">User</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Add User</a></li>
                </ol>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
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
                        <h5 class="card-title me-3">Add User</h5>
                        <a href="{{ url('/vtadmin/list-user') }}" class="btn btn-primary"><i class="fa-solid fa-angles-left"></i> Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ url("/vtadmin/AddUser") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Enter Name</label>
                                        <input type="text" name="name" placeholder="Enter Category Name" value="{{ old('name') }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Enter Email</label>
                                        <input type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Enter Username</label>
                                        <input type="text" name="username" placeholder="Enter Username" value="{{ old('username') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Enter Phone</label>
                                        <input type="text" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Enter Designation</label>
                                        <input type="text" name="designation" placeholder="Enter Designation" value="{{ old('designation') }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Enter Password</label>
                                        <input type="password" name="password" placeholder="Enter password" value="{{ old('password') }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="form-label">Upload Profile Image</label>
                                        <input type="file" name="profile_image" value="{{ old('profile_image') }}" class="form-control">
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