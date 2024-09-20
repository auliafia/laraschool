@extends('layouts.frontend.app',[
	'title' => 'Baca Artikel',
])
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{ asset($artikel->getThumbnail()) }});">
    <div class="blog-details-headline">
        <h3>{{ $artikel->judul }}</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="#">{{ $artikel->user->author }}</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">{{ $artikel->kategoriArtikel->nama_kategori }}</a>
        </div>
    </div>
</div>
<!-- Catagory Area End -->

<!-- Blog Details Content -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    {!! $artikel->deskripsi !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop