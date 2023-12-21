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
                   
                    <form  method="POST" action="{{route('categories.show',['category'=>$categories->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <h1 class="h3 mb-2 text-gray-800">Category Detail</h1>
                    
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Category Information</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Id: {{ $categories->id }}</p>
                                            <p>Name: {{ $categories->name }}</p>
                                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Category List</a>
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
