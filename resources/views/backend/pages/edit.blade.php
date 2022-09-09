@extends('backend.template.template')                       
@section('contents')                
    <div class="col-md-6 offset-md-3">

        <h4 class="mt-3">Update Information</h4>

        <form action="{{ route('backend.updateproduct',$product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control mt-3" value="{{ $product->name }}" name="name" placeholder="Enter Product Name">

            <input type="text" class="form-control mt-3" value="{{ $product->category_name }}" name="category_name" placeholder="Enter Category Name">

            <input type="text" class="form-control mt-3" value="{{ $product->brand_name }}" name="brand_name" placeholder="Enter Brand Name">

            <textarea type="text" class="form-control mt-3" name="description" placeholder="Enter Product Description">{{ $product->description }}</textarea>

            <input type="file" value="{{ $product->image }}" class="form-control mt-3" name="image" required>

            <input type="text" class="form-control mt-3" value="{{ $product->price }}" name="price">

            <select name="status" class="form-control mt-3">
                <option value="0">-----Select Status-----</option>
                <option value="1" @if($product->status = 1)selected @endif>Active</option>
                <option value="2" @if($product->status = 2)selected @endif>Inactive</option>
            </select>

            <button class="btn-add btn btn-success form-control mt-3">Update Product</button>
        </form>
    </div>

@endsection

