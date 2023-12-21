<!DOCTYPE html>
<html lang="en">
@include('Product.layouts.head')
<body id="page-top">
    <div id="wrapper">
       @include('Product.layouts.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
              @include('Product.layouts.navbar')
                <div class="container-fluid">
                   
                    <form  method="POST" action="{{route('product.show',['product'=>$product->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <h1 class="h3 mb-2 text-gray-800">Product Details</h1>
                    
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Product Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img height="75" src="{{ asset('images/' . $product->img) }}" alt="Product Image" class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Name: {{ $product->name }}</h4>
                                            <p>Description: {{ $product->description }}</p>
                                            <p>Price: {{ $product->price }}</p>
                                            <p>Quantity: {{ $product->quantity }}</p>
                                            <p>Origin: {{ $product->origin }}</p>
                    
                                            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back to Product List</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
            @include('Product.layouts.footer')
        </div>
    </div>
    @include('Product.layouts.bottom')
</body>
</html>
