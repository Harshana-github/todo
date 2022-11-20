@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Home Page</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @forelse ($banners as $banner)
            <div class="col-lg-4 mt-5">
                <div class="card home-cart">
                <img src="{{ config('images.access_path') }}/{{ $banner->images->name }}" alt="banner image" class="banner-image card-img-top">

                    <div class="card-body">
                      <h5 class="card-title text-center">{{ $banner->title }}</h5>
                    </div>
                  </div>
            </div>
        @empty
            <div class="col-lg-12">
                <h2 class="text-danger">No Banner Found</h2>
            </div>
        @endforelse
    </div>
@endsection

@push('css')
<style>
    .page-title{
        padding-top: 5vh;
        font-size: 4rem;
        color: #4b85bf;
    }

    .home-cart{
        max-height: 15rem;
    }

    .banner-image{
        max-height: 15rem;
    }
</style>
@endpush
