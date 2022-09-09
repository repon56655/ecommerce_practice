<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\ProductModel;
use Intervention\Image\Facades\Image;
use File;

class AdminController extends Controller
{
    public function index(){

        return view("backend.dashboard");
    }
    public function addproduct(){

        return view("backend.pages.add");

    }
    public function storeproduct(Request $request){

        if($request->image){

            $image = $request->file('image');
            $CustomeName = rand().".".$image->getClientOriginalExtension();
            $location = public_path('Backend/image/'.$CustomeName);
            Image::make($image)->save($location);
        }

        $product = new ProductModel;
        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->image = $CustomeName;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();

        //return redirview("backend.pages.manage");

        return redirect()->route("backend.showproduct");

        

    }

    public function showproduct(){
        $products = ProductModel::all();
        return view("backend.pages.manage",compact("products"));
    }

    public function deleteproduct($id){
        $product = ProductModel::find($id);
        if(File::exists("backend/image/".$product->image)){
            File::delete("backend/image/".$product->image);
        }
        $product->delete();

        return redirect()->route("backend.showproduct");
    }

    public function editproduct($id){

        $product = ProductModel::find($id);
        return view("backend.pages.edit",compact("product"));
    }
    public function updateproduct(Request $request, $id){

        if($request->image){

            $image = $request->file('image');
            $CustomeName = rand().".".$image->getClientOriginalExtension();
            $location = public_path('Backend/image/'.$CustomeName);
            Image::make($image)->save($location);
        }

        $product = ProductModel::find($id);

        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->image = $CustomeName;
        $product->status = $request->status;
        $product->update();

        return redirect()->route("backend.showproduct")->with('message','Branch Updated Successfully');
    }
    
}
