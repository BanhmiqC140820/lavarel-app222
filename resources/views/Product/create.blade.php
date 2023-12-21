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
                   
                    <form  method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">Tên Sản Phẩm</label>
                          <input type="text" class="form-control" name="productName" placeholder="Nhập tên sản phẩm" required>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Xuất xứ</label>
                            <input type="text" class="form-control" name="productOrigin" placeholder="Nhập xuất xứ sản phẩm" required>
                          </div>
                      
                        <div class="mb-3">
                          <label class="form-label">Mô Tả</label>
                          <textarea class="form-control" name="productDescription" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Số lượng</label>
                            <input type="text" class="form-control" name="productCount" placeholder="Nhập số lượng sản phẩm" required>
                          </div>
                        <div class="mb-3">
                          <label  class="form-label">Giá</label>
                          <input type="number" class="form-control" name="productPrice" placeholder="Nhập giá sản phẩm" required>
                        </div>
                    
                        <div class="mb-3">
                          <label  class="form-label">Ảnh Sản Phẩm</label>
                          <input type="file" class="form-control" name="productImage" accept="image/*">
                        </div>
                    
                        <div class="mb-3">
                          <label for="productCategory" class="form-label">Danh Mục</label>
                          <select class="form-select" id="productCategory" name="productCategory" required>
                            <option value="0" disabled selected>Chọn danh mục</option>
                            @foreach($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                            <!-- Thêm các danh mục khác nếu cần -->
                          </select>
                        </div>
                
                        <button type="submit" class="btn btn-primary">Thêm Sản Phẩm</button>
                      </form>
                </div>
            </div>
            @include('Product.layouts.footer')
        </div>
    </div>
    @include('Product.layouts.bottom')
</body>
</html>