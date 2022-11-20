@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">My Banner List</h1>
            </div>
            <div class="col-lg-12 mt-5">
                <form role="form" action={{ route('banner.store') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" placeholder="Enter Banner Title">
                            </div>
                            <div class="form-group mt-3">
                                <input class="form-control dropify" type="file" name="images" accept="image/jpg, image/jpeg, image/png">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 mt-5">
                <div>
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $key => $banner)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $banner->title }}</td>
                                <td><img src="{{ config('images.access_path') }}/{{ $banner->images->name }}" alt="" width="100px"></td>
                                <td>
                                    @if ($banner->status == 0)
                                        <span class="badge bg-secondary">Draft</span>
                                    @else
                                        <span class="badge bg-success">Publish</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('banner.delete', $banner->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>

                                    @if ($banner->status == 0)
                                        <a href="{{ route('banner.status', $banner->id) }}" class="btn btn-success"><i class="fas fa-check-circle"></i>Publish</a>
                                    @else
                                        <a href="{{ route('banner.status', $banner->id) }}" class="btn btn-success"><i class="fas fa-check-circle"></i>Draft</a>
                                    @endif


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $('.dropify').dropify();
    </script>
@endpush
@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            font-size: 4rem;
            color: #14a333;
        }

        .dropify-message p{
            font-size: 2rem;
        }

        .dropify-render img{
            margin: auto;
        }
    </style>
@endpush


