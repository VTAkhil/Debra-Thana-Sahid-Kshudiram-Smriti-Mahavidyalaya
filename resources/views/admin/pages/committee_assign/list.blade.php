@extends('admin.resource.main')
@section('title', 'List Committee Assign')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Committee Assign</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-committee-assign') }}">Committee
                                Assign</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Committee Assign</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="filter cm-content-box box-primary">
                        <div class="content-title SlideToolHeader">
                            <div class="cpa">
                                <i class="fa-sharp fa-solid fa-filter me-2"></i>Filter
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="handle expand"><i class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body form excerpt">
                            <div class="card-body">
                                <form method="GET" action="{{ url()->current() }}">
                                    <div class="row">
                                        {{-- Teacher --}}
                                        <div class="col-xl-3 col-sm-6 mb-3">
                                            <label class="form-label">Select Teacher</label>
                                            <select class="form-control" name="faculty_id">
                                                <option value="">Select Teacher</option>
                                                <?php $facultyRegistrations = DB::table('faculty_registrations')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($facultyRegistrations as $faculty)
                                                    <option value="{{ $faculty->id }}"
                                                        {{ request('faculty_id') == $faculty->id ? 'selected' : '' }}>
                                                        {{ $faculty->faculty_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        {{-- Department --}}
                                        <div class="col-xl-3 col-sm-6 mb-3">
                                            <label class="form-label">Select Department</label>
                                            <select class="form-control" name="subject_id">
                                                <option value="">Select Department</option>
                                                <?php $subjects = DB::table('subjects')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}"
                                                        {{ request('subject_id') == $subject->id ? 'selected' : '' }}>
                                                        {{ $subject->subject }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        {{-- Committee --}}
                                        <div class="col-xl-3 col-sm-6 mb-3">
                                            <label class="form-label">Select Committee</label>
                                            <select class="form-control" name="committee_id">
                                                <option value="">Select Committee</option>
                                                <?php $committees = DB::table('committees')->where('status', '1')->orderBy('id', 'Desc')->get(); ?>
                                                @foreach ($committees as $committee)
                                                    <option value="{{ $committee->id }}"
                                                        {{ request('committee_id') == $committee->id ? 'selected' : '' }}>
                                                        {{ $committee->committee }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-sm-6 align-self-end mb-3">
                                            <button class="btn btn-primary me-1" type="submit">
                                                <i class="fa fa-filter me-1"></i> Filter
                                            </button>
                                            <a href="{{ url()->current() }}" class="btn btn-danger">
                                                Reset
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <div class="row tab-content">
                        {{-- <div id="list-view" class="tab-pane fade active show col-lg-12"> --}}
                        <div class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header justify-content-start">
                                    <h4 class="card-title me-2">All Faculty Assign List </h4>
                                    <a href="{{ url('/vtadmin/add-committee-assign') }}" class="btn btn-primary"><i
                                            class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Faculty Name</th>
                                                    <th>Faculty Department</th>
                                                    <th>Faculty New Designation</th>
                                                    <th>Sl No</th>
                                                    <th>Committee Name</th>
                                                    <th>Committee Type</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $committeeAssigns = DB::table('committee_assigns')
                                                ->leftJoin('subjects','subjects.id','=','committee_assigns.subject_id')
                                                ->leftJoin('faculty_registrations','faculty_registrations.id','=','committee_assigns.faculty_id')
                                                ->leftJoin('committees','committees.id','=','committee_assigns.committee_id')
                                                ->select('committee_assigns.*','subjects.subject as subject_name','faculty_registrations.faculty_name','committees.committee as committee_name')
                                                ->where('committee_assigns.status','!=',"2")
                                                ->when($request->faculty_id, function ($q) use ($request) {$q->where('committee_assigns.faculty_id', $request->faculty_id);})
                                                ->when($request->subject_id, function ($q) use ($request) {$q->where('committee_assigns.subject_id', $request->subject_id);})
                                                ->when($request->committee_id, function ($q) use ($request) {$q->where('committee_assigns.committee_id', $request->committee_id);})
                                                ->orderBy('committee_assigns.id','desc')
                                                ->paginate(10)
                                                ->withQueryString();
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($committeeAssigns as $committeeAssign) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $committeeAssign->faculty_name }}</td>
                                                    <td>{{ $committeeAssign->subject_name }}</td>
                                                    <td>{{ $committeeAssign->faculty_new_designation }}</td>
                                                    <td>{{ $committeeAssign->committee_sl_no }}</td>
                                                    <td>{{ $committeeAssign->committee_name }}</td>
                                                    <td>{{ $committeeAssign->committee_type }}</td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                    <form action="{{ url('/vtadmin/CommitteeAssignStatusChanger/' . $committeeAssign->id) }}" id="sstc{{ $committeeAssign->id }}" method="POST">
                                                                        @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2">
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $committeeAssign->id }}" {{ $committeeAssign->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $committeeAssign->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-committee-assign', $committeeAssign->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deleteCommitteeAssign', $committeeAssign->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $committeeAssigns->links() }}
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
