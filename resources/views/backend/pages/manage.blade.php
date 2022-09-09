@extends('backend.template.template')                       
@section('contents')                
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
        <div class="col-md-6 offset-md-3">
            <a href="{{ route('backend.addproduct') }}" class="btn btn-success"><i class="fa-sharp fa-solid fa-plus"></i>Add Product</a>
        </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#Sl</th>
                    <th>Name</th>
                    <th>Category Name</th>
                    <th>Brand Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#Sl</th>
                    <th>Name</th>
                    <th>Category Name</th>
                    <th>Brand Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            <?php $sl=1; ?>
                
                @foreach($products as $product)
                <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category_name }}</td>
                    <td>{{ $product->brand_name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <img height="50" width="75" src="{{ asset('backend/image/'.$product->image) }}" alt="product image">
                    </td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->status }}</td>
                    <td>
                        <a href="{{ route('backend.editproduct',$product->id) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a><a href="{{route('backend.deleteproduct',$product->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                <?php $sl++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

