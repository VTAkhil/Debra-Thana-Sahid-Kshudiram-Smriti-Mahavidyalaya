@extends('admin.resource.main')
@section('title', 'List User')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All User</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-user') }}">User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All User</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
                @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
                    <div class="row tab-content">
                        {{-- <div id="list-view" class="tab-pane fade active show col-lg-12"> --}}
                        <div class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header justify-content-start">
                                    <h4 class="card-title me-2">All User List </h4>
                                    <a href="{{ url('/vtadmin/add-user') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table ">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>UserName</th>
                                                    <th>Phone</th>
                                                    <th>Designation</th>
                                                    <th>Image</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $users = DB::table('admins')->where("status", "!=", "2")->orderBy("id","desc")->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($users as $user) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->phone }}</td>
                                                    <td>{{ $user->designation }}</td>
                                                    <td><img src="{{ url('/public/uploads/profile/' . $user->profile_image) }}"style="width:80px;height:80px"></td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                   <form action="{{ url('/vtadmin/UserStatusChanger/' . $user->id) }}" id="sstc{{ $user->id }}" method="POST">
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $user->id }}" {{ $user->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $user->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-user', $user->id) }}" class="btn btn-warning btn-sm content-icon"><i class="fa-solid fa-pen-to-square"></i></a>
                                                        <a href="{{ url('vtadmin/deleteUser', $user->id) }}" class="btn btn-danger btn-sm content-icon me-0"><i class="fa-solid fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function statusActivInact(id) {
            var checkbox = document.getElementById('status' + id);
            var formId = "sstc" + id;
            var result = confirm("Are you sure you want to change the status?");
            if (result) {
                document.getElementById(formId).submit();
            } else {
                checkbox.checked = !checkbox.checked; // Revert if cancelled
            }
        }
    </script>
    <script>
        setTimeout(function() {
            $(".alert").fadeOut("slow");
        }, 3000);
    </script>
@endsection
