@extends('backend.layout.master')
@section('b-content')
    <div class="row">
        <h4 class="h4" style="text-align: center;">Product Table</h4>
        <a href="{{ route('product.create') }}" class="btn_item">+ Add Item</a>
        @if (session('oops'))
            <div style="margin: 20px 0;"
                class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show" role="alert">
                {{ session('oops') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div style="margin: 20px 0;"
                class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
        @endif
        @if (session('success'))
            <div style="margin: 20px 0;"
                class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                    aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Featured</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @isset($product)
                    @foreach ($product as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->category->category }}</td>
                        <td>
                            <img src="{{ asset('product/images/'.$data->image) }}" class="backend_image" alt="">
                        </td>
                        <td>
                            @if ($data->featured == 't')
                                {{ "Yes" }}
                            @else
                                {{ "No" }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('product.edit',$data->id) }}" class="btn btn-info">
                                <i class="bi bi-pencil-square" style="color: white;"></i>
                            </a>
                            <a href="{{ route('product.delete',$data->id) }}" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                @endisset
            </tbody>
        </table>
    </div>
@endsection
