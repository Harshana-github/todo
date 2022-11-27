@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Relationship Page</h1>
            </div>
        </div>

        {{-- As Product --}}

        {{-- <div class="row justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-6 mt-5">
                    <div class="card  product-box">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->intro }}</p>

                            <div class="row">
                                @foreach ($product->reviews as $review)
                                <div class="col-md-4">
                                    <div class="card category-box">
                                        <div class="card-body">
                                            <h4>{{ $review->comment }}</h4>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}

        {{-- As Category --}}

        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <div class="col-md-6 mt-5">
                    <div class="card  product-box">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            <div class="row">
                                @foreach ($category->reviews as $review)
                                <div class="col-md-4">
                                    <div class="card category-box">
                                        <div class="card-body">
                                            <h4 class="card-title">Product : {{ $review->product->name }}</h4>
                                            <h5 class="card-title">{{ $review->comment }}</h5>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            font-size: 3rem;
            color: #4b85bf;
        }

        .home-cart {
            max-height: 15rem;
        }

        .banner-image {
            max-height: 15rem;
        }

        .product-box {
            background-color: #9bafc4;
        }

        .category-box {
            background-color: #f09968
        }
    </style>
@endpush
