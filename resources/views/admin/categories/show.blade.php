<x-admin.layouts.admin_master>
<div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    show Category <a href="{{route('categories.index')}}" class="btn btn-info">List</a>
                </div>
                <h2>Title: <span class="text-info ms-4">{{$category->category_name}}</span> </h2>
                <h2>Image <img src="/storage/category/{{$category->category_image}}" class="ms-3" width="300px" height="200px" alt=""></h2>

                    
            </div>
        </div>

    </div>
</x-admin.layouts.admin_master>