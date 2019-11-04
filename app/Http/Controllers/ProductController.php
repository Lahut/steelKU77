<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(9);
       // dd($posts); //dump and die
        return view('products.index', ['products' => $products]);
    }

    public function manage()
    {
        //$this->authorize('create');
        $products = Product::orderBy('created_at', 'desc')->paginate(9);
        $productsDeleted = Product::onlyTrashed()->paginate(9);
       // dd($posts); //dump and die
        return view('products.manage', ['products' => $products,
        'productsDeleted' => $productsDeleted]);
    }

    public function deleted()
    {
        $products = Product::get();
        $productsDeleted = Product::onlyTrashed()->orderBy('created_at', 'desc')->get();
       // dd($posts); //dump and die
        return view('products.deleted', ['products' => $products,
        'productsDeleted' => $productsDeleted]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Product::class);
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required' , 'min:5', 'max:255'],
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'detail' => ['required', 'max:500'],
            'price' => ['required', 'numeric']
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img_product'), $imageName);
        $product = new Product();
        $product->title = $validatedData['title'];
        $product->image = $imageName;
        $product->category_id = $validatedData['category'];
        $product->detail = $validatedData['detail'];
        $product->price = $validatedData['price'];
        $product->user_id = Auth::id();
        $product->save();

        return redirect()->route('products.show', ['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       /* if (Gate::allows('update-product', $product)) {
            return redirect()->route('products.show', ['product' => $product->id]);
        }*/
        $this->authorize('update', $product);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'title' => ['required' , 'min:5', 'max:255'],
            'category' => 'required',
            'detail' => ['required', 'max:500'],
            'price' => ['required', 'numeric']
        ]);

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->image == NULL) {
            $imageName = $product->image;
        } else {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img_product'), $imageName);
        }

        $title = $validatedData['title'];
        $category = $validatedData['category'];
        $detail = $validatedData['detail'];
        $price = $validatedData['price'];
        $product->title = $title;
        $product->category_id = $category;
        $product->image = $imageName;
        $product->detail = $detail;
        $product->price = $price;
        $product->save();
        return redirect()->route('products.show', ['product' => $product->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        $products = Product::get();
        //$productsDeleted = Product::onlyTrashed()->get();
        return redirect('/manage');
    }

    public function restore(Product $product)
    {
        $product->restore();
        return $this->index();
    }
}
