@extends('Product.children')

@section('page content')
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="{{route('product.create')}}" class="btn btn-primary">add</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>price</th>
                                <th>quantity</th>
                                <th>origin</th>
                                <th>img</th>
                                <th>detail</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->origin}}</td>
                                <td><img height="75" src="{{asset('images/'.$item->img)}}"></td>
                                <td><a href="{{route('product.show',['product' => $item->id])}}" class="btn btn-info">detail</a></td>
                                <td><a href="{{route('product.edit',['product' => $item->id])}}" class="btn btn-success">edit</a></td>
                                <td>
                                    <form action="{{route('product.destroy',['product' => $item->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

    
            <hr class="sidebar-divider d-none d-md-block">

                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection


    

