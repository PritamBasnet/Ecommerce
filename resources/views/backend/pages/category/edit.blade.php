@extends('backend.layout.master')
@section('b-content')
    <div class="row">
        <h4 class="h4" style="text-align: center;">Category Table</h4>
        <a href="{{ route('category.index') }}" class="btn_item">Back</a>
    </div>
    @if (session('oops'))
        <div style="margin: 20px 0;" class="alert alert-primary bg-primary text-light border-0 alert-dismissible fade show"
            role="alert">
            {{ session('oops') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('success'))
        <div style="margin: 20px 0;" class="alert alert-success bg-success text-light border-0 alert-dismissible fade show"
            role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row" style="padding: 30px 0;">
        <div class="col-md-8 col-12">
            <form action="{{ route('category.update',$category->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                    <input type="text" name="category" value="{{ $category->category }}" class="form-control" id="exampleFormControlInput1"
                        placeholder="Category..">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category Slug</label>
                    <input type="text" name="slug" value="{{ $category->category }}" class="form-control" id="exampleFormControlInput1"
                        placeholder="Slug..">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-4 col-12"></div>
    </div>
@endsection
