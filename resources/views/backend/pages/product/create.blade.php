@extends('backend.layout.master')
@section('b-content')
    <div class="row">
        <h4 class="h4" style="text-align: center;">Category Table</h4>
        <a href="{{ route('product.index') }}" class="btn_item">Back</a>
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
        <div class="col-md-12 col-12">
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                        placeholder="Name..">
                    @error('name')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Slug</label>
                    <input type="text" name="slug" class="form-control" id="exampleFormControlInput1"
                        placeholder="Slug..">
                    @error('slug')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Image</label>
                    <input type="file" name="image" class="form-control" id="exampleFormControlInput1">
                    @error('image')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                    <input type="number" name="price" class="form-control" id="exampleFormControlInput1"
                        placeholder="Price..">
                    @error('price')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input name="featured" class="form-check-input" type="checkbox" value="t" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Is Featured?
                    </label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category List</label>
                    <select name="category_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Choose</option>
                        <?php
                        $category = App\Models\Category::all();
                        ?>
                        @foreach ($category as $data)
                            <option value="{{ $data->id }}">{{ $data->category }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input class="form-check-input discount_btn" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Discount
                    </label>
                </div>
                <div class="mb-3 discount-wrapper dis-box">
                    <label for="exampleFormControlInput1" class="form-label">Product Discount</label>
                    <input type="number" name="discount" class="form-control" id="exampleFormControlInput1"
                        placeholder="Discount...">
                </div>
                <div class="mb-3">
                    <textarea id="summernote" name="description"></textarea>
                    @error('description')
                        <span class="text text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection
