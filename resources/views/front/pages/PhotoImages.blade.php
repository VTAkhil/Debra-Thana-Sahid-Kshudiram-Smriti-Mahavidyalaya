@extends('front.resource.main')
@section('content')
    <main>
        <div class="it-breadcrumb-area fix z-index-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                        <div class="it-breadcrumb-content z-index-1">
                            <div class="it-breadcrumb-title-box">
                                <h3 class="it-breadcrumb-title">{{ $gallery->gallery_title }}</h3>
                            </div>
                            <div class="it-breadcrumb-list-wrap">
                                <div class="it-breadcrumb-list"><span><a href="Index.aspx">Home</a></span><span class="dvdr"><i class="fa fa-arrow-right-long"></i></span><span>{{ $gallery->gallery_title }}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about-area z-index-1">
            <div class="container page">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 wow itfadeLeft">
                        <div class="site-heading mb-3">
                            <h2 class="site-title"><span>{{ $gallery->gallery_title }}</span></h2>
                            <div class="double-line-bottom-theme-colored-2"></div>
                        </div>
                        <div class="row">
                            <?php
                                $galleryAlbums = DB::table('gallery_albums')->where('gallery_id', $gallery->id)->get();
                                foreach ($galleryAlbums as $galleryAlbum) {
                            ?>
                            <div class="col-sm-3">
                                <a class="fancybox" data-fancybox="gallery" data-caption="{{ $gallery->gallery_title }}" href="{{ url('/public/uploads/galleryAlbum/' . $galleryAlbum->album_image) }}">
                                    <img class="Album" src="{{ url('/public/uploads/galleryAlbum/' . $galleryAlbum->album_image) }}" />
                                </a>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
