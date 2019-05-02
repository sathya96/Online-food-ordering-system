<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product; 
use Illuminate\Support\Facades\Input;
use DB;
use \Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $products = Product::all();
       return view ('admin_product')->with('products', $products);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validator (array $products){
        return Validator ::make($products,[
            'id'=> 'required',
         'name'=> 'required',
         'price'=> 'required',
         'description'=> 'required',
     ]);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addproductform(){
        $products = DB::select('select * from products');
        return view('view_add_product')->with('products', $products);
    }

    public function addproduct(Request $request){
        $cover = $request->file('img');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));


        $products = Input::all();
        $products = new Product;
        //$products->id = Input::get('id');
        $products->name = Input::get('name');
        $products->price = Input::get('price');
        $products->description = Input::get('description');
        $products->img = $cover->getFilename().'.'.$extension;
        
        $products->save();
        return redirect('products')->with('products', $products);
    }
    
    public function destroyproduct($id) {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect('products');
    }
    public function updateproductsform($id = null){
        $products = DB::table('products')->where('id',$id)->first();
        return view('view_edit_product', compact('products'));
    }
    public function updateproducts(Request $request) {
        $cover = $request->file('img');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $products = Product::find(Input::get('id'));
        $products->name = Input::get('name');
        $products->price = Input::get('price');
        $products->description = Input::get('description');
        $products->img = $cover->getFilename().'.'.$extension;
        $products->save();
        
        return redirect('products')->with('products', $products);
    }


}
