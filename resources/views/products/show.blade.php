@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Product</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Name Product</label>
                                <input type="text" class="form-control" name="name_product" value="{{$product->name_product}}"disabled>
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" value="{{$product->price}}"disabled>
                                <label class="form-label">Description</label>
                                <input type="text" class="form-control" name="name_product" value="{{$product->description}}"disabled>
                                <label class="form-label">Name Brand</label>
                                <input type="text" class="form-control" name="name_brand" value="{{$product->brand->name_brand}}"disabled>
                                </div>
                            <a href="{{url('product')}}"class="btn btn-sm btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
