@extends('admin.resource.main')
@section('title', 'Edit Profile')
@section('content')
	@php
		if (Auth::guard('admin')->check()) {
			$user = Auth::guard('admin')->user();
		} elseif (Auth::guard('web')->check()) {
			$user = Auth::guard('web')->user();
		} else {
			$user = null;
		}
	@endphp

    <div class="content-body default-height">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi {{ explode(' ', $user->name)[0] }}, welcome back!</h4>
                        <p class="mb-0">Your business dashboard template</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
			<form action="{{ url('/vtadmin/editProfile', $user->id) }}" method="post" enctype="multipart/form-data"> 
                @csrf
				<div class="row">
					<div class="col-xl-3 col-lg-4">
						<div class="clearfix">
							<div class="card card-bx profile-card author-profile m-b30">
								<div class="card-body">
									<div class="p-5">
										<div class="author-profile">
											<div class="author-media">
												<img src="{{ url('/public/uploads/profile/' . $user->profile_image) }}" height="130px">
												<div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
													<input type="file" name="profile_image" class="update-flie">
													<i class="fa fa-camera"></i>
												</div>
											</div>
											<div class="author-info">
												<h6 class="title">{{ $user->name}}</h6>
												<span>{{ $user->designation }}</span>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<a href="{{ url('/vtadmin/log-out') }}" target="_blank" class="btn btn-primary">Log Out</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8">
						<div class="card profile-card card-bx m-b30">
							<div class="card-header">
								<h4 class="card-title">Account setup</h4>
								 @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
								</div>
								<div class="card-body">
									<div class="row">
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
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label" for="Name">Name</label>
											<input type="text" class="form-control" name="name" value="{{ $user->name }}" id="Name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label">Phone</label>
											<input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label" for="email">Email address</label>
											<input type="text" class="form-control" value="{{ $user->email }}" name="email" id="email">
										</div>
									</div>
									@if(Auth::guard('admin')->check())
										<div class="col-sm-6">
											<div class="mb-3">
												<label class="form-label">New Password</label>
												<input type="password" class="form-control" name="password" placeholder="Leave blank to keep current password">
											</div>
										</div>

										<div class="col-sm-6">
											<div class="mb-3">
												<label class="form-label">Confirm Password</label>
												<input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">
											</div>
										</div>
									@endif
									<div class="col-sm-6">
										<div class="mb-3">
											<label class="form-label" for="Designation">Designation</label>
											<input type="text" class="form-control" name="designation" value="{{ $user->designation }}" id="Designation">
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">UPDATE</button>
							</div>
						</div>
					</div>
				</div>
			</form>
        </div>
    </div>

@endsection
