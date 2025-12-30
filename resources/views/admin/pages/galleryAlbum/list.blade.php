@extends('admin.resource.main')
@section('title', 'List Gallery Album')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>All Gallery</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('/vtadmin/list-galleryAlbum') }}">Gallery Album</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">All Gallery Album</a></li>
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
                                <h4 class="card-title me-2">All Gallery Album List </h4>
                                <a href="{{ url('/vtadmin/add-galleryAlbum') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add new</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="table ">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Gallery Album Tilte</th>
                                                <th>Department</th>
                                                <th>Gallery Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $galleryAlbums = DB::table('gallery_albums')
                                                ->leftJoin('galleries', 'galleries.id', '=', 'gallery_albums.gallery_id')
                                                ->leftJoin('subjects', 'subjects.id', '=', 'galleries.subject_id')
                                                ->select('gallery_albums.*','subjects.subject as subject_name','galleries.gallery_title')
                                                ->where('gallery_albums.status', '!=', "2")
                                                ->orderBy('gallery_albums.id', 'desc')
                                                ->paginate(10);
                                                if(empty($request->page) || $request->page=='1'){
                                                $i=1;
                                                }else{
                                                    $i=(10*($request->page-1))+1;
                                                }
                                                foreach ($galleryAlbums as $galleryAlbum) { ?>
                                            <tr>
                                                <td><strong>{{ $i }}</strong></td>
                                                <td>{{ $galleryAlbum->gallery_title }}</td>
                                                <td>{{ $galleryAlbum->subject_name }}</td>  
                                                <td>
                                                    <img src="{{ url('/public/uploads/galleryAlbum/' . $galleryAlbum->album_image) }}"style="width:80px;height:80px">
                                                </td>
                                                <td>
                                                    <div class="tab-pane active" id="kt_builder_toolbar">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-xl-9">
                                                                <form
                                                                    action="{{ url('/vtadmin/GalleryAlbumStatusChanger/' . $galleryAlbum->id) }}"
                                                                    id="sstc{{ $galleryAlbum->id }}" method="POST">
                                                                    @csrf
                                                                    <div class="form-check form-check-custom form-check-solid form-switch mt-2"> 
                                                                        <input class="form-check-input" type="checkbox" id="status{{ $galleryAlbum->id }}" {{ $galleryAlbum->status == 1 ? 'checked' : '' }} onchange="statusActivInact('{{ $galleryAlbum->id }}');">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ url('vtadmin/edit-galleryAlbum', $galleryAlbum->id) }}" class="btn btn-xs sharp btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{ url('vtadmin/deleteGalleryAlbum', $galleryAlbum->id) }}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $i++;
                                            } ?>
                                        </tbody>
                                    </table>
                                    {{ $galleryAlbums->links() }}
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
