@extends('admin.resource.main')
@section('title', 'List Publications')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Publications List</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-publications') }}">Publications</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Committee Assign</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
                    @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
                    <div class="row tab-content">
                        {{-- <div id="list-view" class="tab-pane fade active show col-lg-12"> --}}
                        <div class="tab-pane fade active show col-lg-12">
                            <div class="card">
                                <div class="card-header justify-content-start">
                                    <h4 class="card-title me-2">All Publications List </h4>
                                    <a href="{{ url('/vtadmin/add-publications') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example3" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Faculty Name</th>
                                                    <th>Faculty Department</th>
                                                    <th>Paper Title</th>
                                                    <th>Publications Name</th>
                                                    <th>Publications Date</th>
                                                    <th>Publications Category</th>
                                                    <th>Published In</th>
                                                    <th>Volume</th>
                                                    <th>ISSN NO</th>
                                                    <th>Publication File</th>
                                                    <th>Publication Link</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $publications = DB::table('publications')
                                                ->leftJoin('subjects','subjects.id', '=', 'publications.subject_id')
                                                ->leftJoin('faculty_registrations', 'faculty_registrations.id', '=', 'publications.faculty_id')
                                                ->select('publications.*','subjects.subject as subject_name','faculty_registrations.faculty_name')
                                                ->where("publications.status", "!=", "2")->orderBy("publications.id","desc")->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($publications as $publication) { ?>
                                                <tr>
                                                    <td><strong>{{ $i }}</strong></td>
                                                    <td>{{ $publication->faculty_name }}</td>
                                                    <td>{{ $publication->subject_name }}</td>
                                                    <td>{{ $publication->publications_paper_title }}</td>
                                                    <td>{{ $publication->publications_name }}</td>
                                                    <td>{{ date('d M Y', strtotime($publication->publications_date)) }}</td>
                                                    <td>{{ $publication->publications_category }}</td>
                                                    <td>{{ $publication->published_in }}</td>
                                                    <td>{{ $publication->volume }}</td>
                                                    <td>{{ $publication->issn_no }}</td>
                                                    <td>
                                                        @php
                                                            $ext = strtolower(pathinfo($publication->publications_file, PATHINFO_EXTENSION),);
                                                        @endphp
                                                        @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']))
                                                            <img src="{{ url('/public/uploads/publication/' . $publication->publications_file) }}"style="width:80px;height:80px">
                                                        @elseif ($ext === 'pdf')
                                                            <a href="{{ url('/public/uploads/publication/' . $publication->publications_file) }}"class="btn btn-sm btn-primary" download><i class="la la-download"></i></a>
                                                        @else
                                                            NA
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!empty($publication->publications_link))
                                                            <a href="{{ $publication->publications_link }}" target="_blank"><i class="fa-solid fa-link"></i></a>
                                                        @else
                                                            NA
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="tab-pane active" id="kt_builder_toolbar">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-xl-9">
                                                                   <form action="{{ url('/vtadmin/PublicationsStatusChanger/' . $publication->id) }}" id="sstc{{ $publication->id }}" method="POST">
                                                                    @csrf
                                                                        <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                            <input class="form-check-input" type="checkbox" id="status{{ $publication->id }}" {{ $publication->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $publication->id }}');">
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="{{ url('vtadmin/edit-publications', $publication->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ url('vtadmin/deletePublications', $publication->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                $i++;
                                                } ?>
                                            </tbody>
                                        </table>
                                        {{ $publications->links() }}
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
