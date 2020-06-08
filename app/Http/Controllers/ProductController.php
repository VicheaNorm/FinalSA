<?php

namespace App\Http\Controllers;

use App\AddProduct;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $addproduct = new AddProduct();

        $addproduct->productcode = $request->input('productcode');
        $addproduct->name = $request->input('name');
        $addproduct->category = $request->input('category');
        $addproduct->price = $request->input('price');
        $addproduct->date = $request->input('date');
        $addproduct->qty = $request->input('qty');
        $addproduct->cost = $request->input('cost');
        $addproduct->unit = $request->input('unit');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
            $file->move('uploads/addproduct/', $filename);
            $addproduct->image = $filename;
        }else{
            return $request;
            $addproduct->image = '';
        }

        $addproduct->save();
        Alert::success('Successful.', 'Done');

        return view('pages.addProduct')->with('pages.addproduct',$addproduct);
    }
    public function productDisplay()
    {
        $addproducts = AddProduct::all();
        return view('pages.product')->with('addproducts',$addproducts);
    }

    public function productEdit($id)
    {
        $addproducts = AddProduct::find($id);
        return view('pages.productupdate')->with('addproducts',$addproducts);
    }

    public function productUpdate(Request $request, $id)
    {
        $addproducts = AddProduct::find($id);

        $addproducts->productcode = $request->input('productcode');
        $addproducts->name = $request->input('name');
        $addproducts->category = $request->input('category');
        $addproducts->price = $request->input('price');
        $addproducts->date = $request->input('date');
        $addproducts->qty = $request->input('qty');
        $addproducts->cost = $request->input('cost');
        $addproducts->unit = $request->input('unit');
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'. $extension;
            $file->move('uploads/addproduct/', $filename);
            $addproducts->image = $filename;
        }

        $addproducts->save();
        Alert::success('Update Successful.', 'Done');
        return redirect('product')->with('product',$addproducts);
        // return redirect('pages.addProduct')->with('pages.addproduct',$addproducts);
    }

    public function productDelete($id)
    {
        $addproducts = AddProduct::find($id);
        $addproducts->delete();
        Alert::success('Delete Successful.', 'Delete');
        return redirect('product')->with('product',$addproducts);
    }
}
