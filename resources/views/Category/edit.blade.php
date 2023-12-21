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
                   
                    <form  method="POST" action="{{route('categories.update',['category' => $categories->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Tên loại</label>
                          <input type="text" class="form-control" name="categoryName" placeholder="Nhập tên loại" value="{{ $categories->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                      </form>
                </div>
            </div>
            @include('Product.layouts.footer')
        </div>
    </div>
    @include('Product.layouts.bottom')
</body>
</html>