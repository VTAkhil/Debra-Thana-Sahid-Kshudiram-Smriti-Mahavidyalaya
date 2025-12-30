@extends('admin.resource.main')
@section('title', 'List Faculty Book Chapter')
@section('content')
<style>
    tr th,
    tr td{
        text-align: center;
    }
</style>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Faculty Book Chapter</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-chapter') }}">Faculty Book Chapter</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Faculty Book Chapter</a></li>
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
                                <h4 class="card-title me-2">All Faculty Book Chapter List </h4>
                                <a href="{{ url('/vtadmin/add-chapter') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table ">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Faculty Name</th>
                                                <th>Faculty Department</th>
                                                <th>Book Title</th>
                                                <th>Chapter Name</th>
                                                <th>Publications Date</th>
                                                <th>Category</th>
                                                <th>Publisher Name</th>
                                                <th>Volume</th>
                                                <th>ISBN NO</th>
                                                <th>Book File</th>
                                                <th>Book Link</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $bookChapters = DB::table('book_chapters')
                                            ->leftJoin('subjects', 'subjects.id', '=', 'book_chapters.subject_id')
                                            ->leftJoin('faculty_registrations', 'faculty_registrations.id', '=', 'book_chapters.faculty_id')
                                            ->select('book_chapters.*','subjects.subject as subject_name','faculty_registrations.faculty_name')
                                            ->where("book_chapters.status", "!=", "2")->orderBy("book_chapters.id","desc")->paginate(10);
                                            if(empty($request->page) || $request->page=='1'){
                                            $i=1;
                                            }else{
                                                $i=(10*($request->page-1))+1;
                                            }
                                            foreach ($bookChapters as $chapter) { ?>
                                            <tr>
                                                <td><strong>{{ $i }}</strong></td>
                                                <td>{{ $chapter->faculty_name }}</td>
                                                <td>{{ $chapter->subject_name }}</td>
                                                <td>{{ $chapter->paper_title }}</td>
                                                <td>{{ $chapter->chapter_name }}</td>
                                                <td>{{ date('Y', strtotime($chapter->publications_date)) }}</td>
                                                <td>{{ $chapter->category }}</td>
                                                <td>{{ $chapter->publisher_name }}</td>
                                                <td>{{ $chapter->volume }}</td>
                                                <td>{{ $chapter->isbn_no }}</td>
                                                <td>
                                                    @php
                                                        $ext = strtolower(pathinfo($chapter->chapter_file, PATHINFO_EXTENSION),);
                                                    @endphp
                                                    @if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp']))
                                                        <img src="{{ url('/public/uploads/chapter/' . $chapter->chapter_file) }}"style="width:80px;height:80px">
                                                    @elseif ($ext === 'pdf')
                                                        <a href="{{ url('/public/uploads/chapter/' . $chapter->chapter_file) }}"class="btn btn-sm btn-primary" download><i class="la la-download"></i></a>
                                                    @else
                                                        NA
                                                    @endif
                                                </td>
                                                <td>
                                                    @if(!empty($chapter->chapter_link))
                                                        <a href="{{ $chapter->chapter_link }}" target="_blank"><i class="fa-solid fa-link"></i></a>
                                                    @else
                                                        NA
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="tab-pane active" id="kt_builder_toolbar">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xl-9">
                                                                <form action="{{ url('/vtadmin/ChapterStatusChanger/' . $chapter->id) }}" id="sstc{{ $chapter->id }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-check form-check-custom form-check-solid form-switch mt-2">
                                                                        <input class="form-check-input" type="checkbox" id="status{{ $chapter->id }}" {{ $chapter->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $chapter->id }}');">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('vtadmin/edit-chapter', $chapter->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ url('vtadmin/deleteChapter', $chapter->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                    {{ $bookChapters->links() }}
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
@endsection
