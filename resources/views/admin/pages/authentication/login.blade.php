<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
	<title>{{ config('app.name') }} - Log In</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="dexignlabs">
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="">   
	<meta name="description" content="Welcome to Debra Thana Sahid Kshudiram Smriti Mahavidyalaya Administrator Portal">
	<meta property="og:title" content="Welcome to Debra Thana Sahid Kshudiram Smriti Mahavidyalaya Administrator Portal">
	<meta property="og:description" content="Welcome to Debra Thana Sahid Kshudiram Smriti Mahavidyalaya Administrator Portal">
	<meta name="format-detection" content="telephone=no">
	<meta name="twitter:title" content="Welcome to Debra Thana Sahid Kshudiram Smriti Mahavidyalaya Administrator Portal">
	<meta name="twitter:description" content="Welcome to Debra Thana Sahid Kshudiram Smriti Mahavidyalaya Administrator Portal">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/public/admin_assets/images/favicon.png')}}">
	<!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{url('/public/admin_assets/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{url('/public/admin_assets/vendor/chartist/css/chartist.min.css')}}">
	<link rel="stylesheet" href="{{url('/public/admin_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{url('/public/admin_assets/css/style.css')}}">
	<link rel="stylesheet" href="{{url('/public/admin_assets/vendor/datatables/css/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{url('/public/admin_assets/vendor/datatables/css/responsive.bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{url('/public/admin_assets/vendor/vendor/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{url('/public/admin_assets/vendor/vendor/pickadate/themes/default.date.css')}}">
</head>
<body>

    <div class="fix-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card mb-0 h-auto">
                        <div class="card-body">
                            @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
                            @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="text-center mb-2">
                                <a href="index.html">
                                    <img src="{{url('/public/admin_assets/images/favicon.png')}}" alt="image" >
                                </a>
                            </div>
                            <h4 class="text-center mb-4">Sign in your account</h4>
                            <form action="{{ url('/vtadmin/login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="email">Username</label>
                                    {{-- <input type="email" class="form-control" name="email" placeholder="dtsksmjhondoe" id="email"> --}}
                                    <input type="text" name="username" class="form-control" placeholder="dtsksmjhondoe">
                                </div>
                                <div class="mb-4 position-relative">
                                    <label class="form-label" for="dlabPassword">Password</label>
                                    <input type="password" id="dlabPassword" name="password" class="form-control" placeholder="XYZ123@">
                                    <span class="show-pass eye">
                                        <i class="fa fa-eye-slash"></i>
                                        <i class="fa fa-eye"></i>
                                    </span>
                                </div>
                                <div class="form-row d-flex flex-wrap justify-content-between mt-4 mb-2">
                                    <div class="form-group">
                                        {{-- <div class="form-check custom-checkbox ms-1">
                                            <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                            <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="form-group ms-2">
                                        <a href="{{ url('/vtadmin/change-password') }}" class="btn-link" href="page-forgot-password.html">Forgot Password?</a>
                                    </div> --}}
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                </div>
                            </form>
                            {{-- <div class="new-account mt-3">
                                <p>Don't have an account? <a class="text-primary" href="{{ url('/vtadmin/register') }}">Sign up</a></p>
                            </div> --}}
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

    <script src="{{url('/public/admin_assets/vendor/global/global.min.js')}}"></script>
	<script src="{{url('/public/admin_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/vendor/ckeditor/ckeditor.js')}}"></script>
	<!-- Chart sparkline plugin files -->
    <script src="{{url('/public/admin_assets/vendor/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{url('/public/admin_assets/js/plugins-init/sparkline-init.js')}}"></script>
	<!-- Chart Morris plugin files -->
    <script src="{{url('/public/admin_assets/vendor/raphael/raphael.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/vendor/morris/morris.min.js')}}"></script>
    <!-- Init file -->
    <script src="{{url('/public/admin_assets/js/plugins-init/widgets-script-init.js')}}"></script>
	<!-- Svganimation scripts -->
    <script src="{{url('/public/admin_assets/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/vendor/svganimation/svg.animation.js')}}"></script>
	<!-- Demo scripts -->
    <script src="{{url('/public/admin_assets/js/dashboard/dashboard.js')}}"></script>
	<script src="{{url('/public/admin_assets/js/custom.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/js/dlabnav-init.js')}}"></script>
    <script src="{{url('/public/admin_assets/js/demo.js')}}"></script>
    <script src="{{url('/public/admin_assets/js/styleSwitcher.js')}}"></script>
    <script src="{{url('/public/admin_assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('/public/admin_assets/js/plugins-init/datatables.init.js')}}"></script>
</body>
</html>