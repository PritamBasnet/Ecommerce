@extends('backend.layout.master')
@section('b-content')
    <div class="row">
        <h4 class="h4" style="text-align: center;">Category Table</h4>
        <a href="{{ route('category.create') }}" class="btn_item">+ Add Item</a>
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
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $data)
                    <tr>
                        <td>{{ $data->category }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>
                            <a href="{{ route('category.edit', $data->id) }}" class="btn btn-info">
                                <i class="bi bi-pencil-square" style="color: white;"></i>
                            </a>
                            <a href="{{ route('category.delete', $data->id) }}" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
