@extends('admin.resource.main')
@section('title', 'List Placement & Progression')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Placement Progression</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-placement-progression') }}">Placement Progression</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Placement Progression</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <div class="row tab-content">
                    <div class="tab-pane fade active show col-lg-12">
                        <div class="card">
                            <div class="card-header justify-content-start">
                                <h4 class="card-title me-2">Placement Progression List </h4>
                                <a href="{{ url('/vtadmin/add-placementProgression') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table ">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Department Name</th>
                                                <th>Student Name</th>
                                                <th>Year</th>
                                                <th>Placement Progression</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $i = 1;
                                                $placementProgressions = DB::table("placement_progressions")
                                                ->leftJoin('subjects','subjects.id', '=', 'placement_progressions.subject_id')
                                                ->select('placement_progressions.*','subjects.subject as subject_name')
                                                ->where("placement_progressions.status", "!=", "2")->orderBy("placement_progressions.id","desc")->paginate(10);
                                                foreach ($placementProgressions as $placementProgression) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $placementProgression->subject_name }}</td>
                                                    <td>{{ $placementProgression->student_name }}</td>
                                                    <td>{{ $placementProgression->year }}</td>
                                                    <td>{{ $placementProgression->placement_progression }}</td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                    <form action="{{ url('/vtadmin/PlacementProgressionStatusChange/' . $placementProgression->id) }}" id="sstc{{ $placementProgression->id }}" method="POST"> 
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2">
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $placementProgression->id }}" {{ $placementProgression->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $placementProgression->id }}');"> 
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-placementProgression', $placementProgression->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deletePlacementProgression', $placementProgression->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a> 
                                                    </td>
                                                </tr>
                                            <?php
                                                $i++;
                                                } 
                                            ?>
                                        </tbody>
                                    </table>
                                    {{ $placementProgressions->links() }}
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
