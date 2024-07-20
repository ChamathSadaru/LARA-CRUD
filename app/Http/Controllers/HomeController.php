<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{

    public function index(){
        return view ('home');
    }

    public function add_Product(Request $request){

        $request->validate([
            'image' => 'required',
            'pd' => 'required',
            'pt' => 'required',

        ], [
            'pt.required' => 'Product title is required',
            'pd.required' => 'Product description is required',
            'image.required' => 'Product image is required',
        ]);
        

        $data =new Product;
        $data->title = $request->pt;
        $data->discriptions = $request->pd;
        $image = $request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product' , $imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back()->with('success', 'Product added successfully');
    }

    public function show_product(){

        $data = Product::all();

        return view('product' , compact('data'));

    }

    public function delete_product($id){

        $data = product::find($id);

        $data->delete();


        return redirect()->back();


    }


    public function update_product($id){


        $product = Product::find($id);

        return view('product_update', compact('product'));

    }


    public function edit_Product(Request $request , $id){

        $data = Product::find($id);

        $data->title = $request->pt;
        $data->discriptions = $request->pd;

        $image = $request->img;
        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->img->move('product' , $imagename);
            $data->image = $imagename;
        }

        $data->save();
  
        return redirect()->back();


    }


    public function go_addProduct(){

        return view ('home');
    }


}
