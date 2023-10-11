<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('admin.products.index',compact('products'));
    }
    public function create()
    {
        // $activeVendor=User::where('status','active')->where('role','vendor')->latest()->get();
        $brands=Brand::latest()->get();
        $categories=Category::latest()->get();
        return view('admin.products.create',compact('brands','categories'));
        // 
    }
    public function store(Request $request)
    {
        // $image= $request->file('product_image');
        // $fileName=hexdec(uniqid()).'.'.
        //     $image->getClientOriginalExtension();
        //     'Image'::make($image)->resize(300,300)->save('upload/product/'.$fileName);
        // $save_url='upload/product/'.$fileName;
        // Product::create([
        //    'brand_id'=>$request->brand_id, 
        //    'category_id'=>$request->category_id, 
        //    'product_name'=>$request->product_name, 
        //    'price'=>$request->price,
        //    'short_descp'=>$request->short_descp,
        //    'status'=>1,
        //    'product_image'=>$save_url,
        //    'created_at'=>Carbon::now()

        // ]);
        // return redirect()->route('products.index');

        try{
            $request->validate([
                'product_name'=>['required'],
                'product_image'=>['required']
            ]);
            Product::create([
                   'brand_id'=>$request->brand_id, 
                   'category_id'=>$request->category_id, 
                   'product_name'=>$request->product_name, 
                   'price'=>$request->price,
                   'short_descp'=>$request->short_descp,
                   'status'=>1,
                   'product_image'=>$this->uploadImage(request()->file('product_image')),
                   'created_at'=>Carbon::now()
            ]);
            return redirect()->route('products.index')->withMessage('Product added successfully!!');
        }catch(QueryException $e){
               return redirect()->back()->withInput()->withErrors($e->getMessage());
            }
    }
    public function show(Product $product)
    {
        return view('admin.products.show',[
            'product'=>$product
        ]);
    }
    public function edit(Product $product)
    {
        // $activeVendor=User::where('status','active')->where('role','vendor')->latest()->get();
        $brands=Brand::latest()->get();
        $categories=Category::latest()->get();
        return view('admin.products.edit',['product'=>$product],compact('brands','categories'));


        // return view('admin.products.edit',[
        //     'product'=>$product
        // ],compact('brands','categories','activeVendor'));
    }
    public function update(Request $request, Product $product)
    {
        // $image= $request->file('product_image');
        // $fileName=hexdec(uniqid()).'.'.
        //     $image->getClientOriginalExtension();
        //     'Image'::make($image)->resize(300,300)->save('upload/product/'.$fileName);
        // $save_url='upload/product/'.$fileName;
        // $product->update([
        //     'product_name'=>$request->product_name,
        //     'brand_id'=>$request->brand_id, 
        //     'short_descp'=>$request->short_descp,
        //     'price'=>$request->price,
        //     'product_image'=>$save_url,
        // ]);
        // return redirect()->route('products.index');

        try {
            $requestData = [
                'brand_id'=>$request->brand_id, 
                'product_name'=>$request->product_name, 
                'price'=>$request->price,
                'short_descp'=>$request->short_descp,
            ];

            if ($request->hasFile('product_image')) {
                $requestData['product_image'] = $this->uploadImage(request()->file('product_image'));
            }

            $product->update($requestData);

            return redirect()->route('products.index')->withMessage('Product updated successfully');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
    public function uploadImage($file)
    {
        $fileName=time().'.'.$file->getClientOriginalExtension();
        'Image'::make($file)->resize(200,200)->save(storage_path().'/app/public/product/'.$fileName);
        return $fileName;

    }

    public function ProductInactive($id)
    {
        Product::findorFail($id)->update(['status'=>0]);
        return redirect()->route('products.index');
    }
    public function ProductActive($id)
    {
        Product::findorFail($id)->update(['status'=>1]);
        return redirect()->route('products.index');
    }
}
