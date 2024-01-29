<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Http\Request;
use File;
Use Image;
Use illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $product = Products::orderBy('created_at','desc')->Paginate(10);
        return view('backend.product.index',compact('product'));
    }

    public function createfrom(){

        $category = Category::all();
        return view('backend.product.createfrom', compact('category'));
    }
    public function edit($product_id){
        $pro = Products::find($product_id);
        $cat = Category::all();
        return view('backend.product.edit',compact ('pro','cat'));
    }
    public function insert(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image'=> 'mimes:jpg,jpeg,png',
        ],[
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'price.required'=> 'กรุณากรอกข้อมูลสินค้า',
            'price.max' => 'กรุณากรอกข้อมูลสินค้า',
            'description.required'=>'กรุณากรอกคำอธิบายสินค้า' 
        ]);
        $product = new Products();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasfile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filename);
            Image::make(public_path().'/backend/product/'.$filename)->resize(50, 50)->save(public_path(). '/backend/product/resize/'.$filename);
            $product->image = $filename;
        } else{
            $product->image = 'no_image.jpg';
        };
        $product->save();
        return redirect()->route('p.index');
    }

    public function update(Request $request, $product_id){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image'=> 'mimes:jpg,jpeg,png',
        ],[
            'name.required' => 'กรุณากรอกข้อมูลประเภทสินค้า',
            'name.max' => 'กรอกข้อมูลได้ 255 ตัวอักษร',
            'price.required'=> 'กรุณากรอกข้อมูลสินค้า',
            'price.max' => 'กรุณากรอกข้อมูลสินค้า',
            'description.required'=>'กรุณากรอกคำอธิบายสินค้า' 
        ]);
        $product = Products::find($product_id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        if ($request->hasfile('image')){
            if ($product->image != 'no_image.jpg') {
                File::delete(public_path().'/backend/product/'.$product->image);
                File::delete(public_path().'/backend/product/resize/'.$product->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filename);
            Image::make(public_path().'/backend/product/'.$filename)->resize(50, 50)->save(public_path(). '/backend/product/resize/'.$filename);
            $product->image = $filename;
        };
        $product->save();
        return redirect()->route('p.index');
    }

    public function delete($product_id){
        $product = Products::find($product_id);
        if ($product->image != 'no_image.jpg') {
            File::delete(public_path().'/backend/product/'.$product->image);
            File::delete(public_path().'/backend/product/resize/'.$product->image);
        };
        $product ->delete();
        alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลถูกลบแล้ว');
        return redirect()->route('p.index');
    }
}