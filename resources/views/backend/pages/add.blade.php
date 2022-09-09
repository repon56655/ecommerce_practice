@extends('backend.template.template')                       
@section('contents')                
     <div class="col-md-6 offset-md-3">
        <span class="alert alert-success msg" style="display: none"></span>

        <a href="{{ route('backend.showproduct') }}" class="btn btn-primary">Show Product</a>

        <h4 class="mt-3">Product Information</h4>

        <form action="{{ route('backend.storeproduct') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control mt-3" name="name" placeholder="Enter Product Name">

            <input type="text" class="form-control mt-3" name="category_name" placeholder="Enter Category Name">

            <input type="text" class="form-control mt-3" name="brand_name" placeholder="Enter Brand Name">

            <input type="number" class="form-control mt-3" name="price" placeholder="Enter Price">

            <textarea type="text" class="form-control mt-3" name="description" placeholder="Enter Product Description"></textarea>

            <input type="file" class="form-control mt-3" name="image">

            <select name="status" class="form-control mt-3">
                <option value="0">-----Select Status-----</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>

            <button class="btn-add btn btn-success form-control mt-3">Add Product</button>
        </form>

        <!-- <div class="card-body">
            <a href="{{ route('backend.showproduct') }}" class="btn btn-primary">Show Product</a>

            <h4 class="mt-3">Product Information</h4>
            <form action="{{ route('backend.storeproduct') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" name="name" placeholder="Product Name"/>
                    <label for="name">Product Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="category" type="text" name="category_name" placeholder="Category" />
                    <label for="category">Category</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="brand" type="text" name="brand_name" placeholder="Brand" />
                    <label for="brand">Brand</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea type="text" id="description" class="form-control mt-3" name="description" placeholder="Description"></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="file" name="image" />
                </div>
                <div class="form-floating mb-3">
                    <select name="status" class="form-control mt-3">
                        <option value="0">-----Select Status-----</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="mt-4 mb-0">
                    <div class="d-grid"><a class="btn btn-success btn-block">Add Product</a></div>
                </div>
            </form>
        </div> -->
    </div>

@endsection

