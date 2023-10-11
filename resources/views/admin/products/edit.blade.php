<x-admin.layouts.admin_master>
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Product</h1>
        <div class="card-header">
            Edit product <a href="{{route('products.index')}}" class="btn btn-info">List</a>
        </div>
        <div class="card-body">
        <form action="{{route('products.update',['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3 row">
            <div class="mb-3">
                <label for="inputTitle" class="col-sm-3 col-form-label">Product Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputTitle" name="product_name" value="{{$product->product_name}}"> 
                </div>
            </div>
            {{-- <div class="mb-3">
                <label for="mytextarea" class="col-sm-3 col-form-label">
                Long Description
                </label>
                <textarea class="from-control col-sm-9"
                id="mytextarea" name="long_descp">
                {!! $product->short_descp !!}</textarea>
            </div> --}}
            
            <div class="mb-3">
                <label for="inputTitle" class="col-sm-3 col-form-label">picture</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" id="inputTitle" name="product_image" value="{{$product->product_image}}">
                </div>
            </div>


            <div class="mb-3 row">
                <label for="inputTitle" class="col-sm-3 col-form-label">
                    Description
                </label>
                <div class="col-sm-9">
                    <input type="text"
                    class="form-control"
                    id="inputTitle"
                    name="short_descp"
                    value="{{$product->short_descp}}">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputTitle" class="col-sm-3 col-form-label">
                    Price
                </label>
                <div class="col-sm-9">
                    <input type="text"
                    class="form-control"
                    id="inputTitle"
                    name="price"
                    value="{{$product->price}}">
                </div>
            </div>


            <div class="mb-3">
                <label for="inputTitle" class="col-sm-3 col-form-label">
                    Brand
                </label>
                <div class="col-sm-9">
                    <select name="brand_id" class="form-select" aria-label="Brand select">
                        <option></option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}"{{$brand->id== $product->brand_id ? 'selected':''}}>{{ $brand->brand_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        </div>

        <div class="mb-3 row">
            <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
        </div>

        </form>
        </div>
    
    </div>
</x-admin.layouts.admin_master>