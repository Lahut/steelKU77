<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        $productsDeleted = Product::onlyTrashed()->get();
       // dd($posts); //dump and die
        return view('products.index', ['products' => $products,
        'productsDeleted' => $productsDeleted]);
    }

    public function deleted()
    {
        $products = Product::get();
        $productsDeleted = Product::onlyTrashed()->get();
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
            'detail' => ['required', 'max:500'],
            'price' => ['required', 'numeric']
        ]);
        if ($request->hasFile('img') ) {
            $fileName = $_FILES['img']['name'];
            $fileTmpName  = $_FILES['img']['tmp_name'];
            // echo $fileName;
            $fileError = $_FILES['img']['error'];
            $fileSize = $_FILES['img']['size'];
            $fileEX =   explode('.', $fileName);
            $fileAE = strtolower(end($fileEX));
            $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'gif');
            //    echo $fileError;
            if (in_array($fileAE, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 10000000) {
                    $fileNameNew = uniqid('', true) . "." . $fileAE;
                    $fileDestinstion = 'img_product/' . $fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestinstion);
                    $img = $fileNameNew;
                } else {
                    return "<script>
        alert('ไฟล์รูป ใหญ่เกินไป');
        window.history.back();
    </script>";
                }
                } else {
                    return "<script>
            alert('ไฟล์ ERROR');
            window.history.back();
        </script>";
                }
            } else {
                $img = 'image.png';
            }
        } else {
            $img = 'image.png';
        }
        $product = new Product();
        $product->image = $img;
        $product->title = $validatedData['title'];
        $product->detail = $validatedData['detail'];
        $product->price = $validatedData['price'];
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

    public function showEdit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
            'detail' => ['required', 'max:500'],
            'price' => ['required']
        ]);

        $title = $validatedData['title'];
        $detail = $validatedData['detail'];
        $price = $validatedData['price'];
        $product->title = $title;
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
        
        $product->delete();
        $products = Product::get();
        return redirect()->route('products.index' , ['products' => $products]);
    }

    public function restore(Product $product)
    {
        $product->restore();        
        return $this->index();
    }
}
