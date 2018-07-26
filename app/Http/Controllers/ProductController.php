<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Services\Slug;
use App\User;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show all products
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$categories = Category::where('status', 'active')->get();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	// Required objects
	    $slug = new Slug;
	    $user = new User;
	    if (auth()->check()) $user->id = 1;

	    // Validate

	    // Store
	    $product = new Product;
        $product->title = $request->title;
        $product->slug = $slug->createSlug($request->title);
        $product->body = $request->body;
        $product->category =$request->category;
	    $product->regular_price = $request->regular_price;
	    $product->sales_price = $request->sales_price;
	    //$product->image = $request->image;
	    $product->user_id =1;

	    if ($request->hasFile('image')) {
	    	$image = $request->file('image');
	    	$location = public_path('images/products/');
	    	$imageName = getFileName($image->getClientOriginalName(), $image->getClientOriginalExtension()) .'-'. time();
	    	$imageFull = $imageName .'-full.'. $image->getClientOriginalExtension();
	    	$image50X50 = $imageName .'-50X50.'. $image->getClientOriginalExtension();
		    //Image::make($image)->resize(800, 400)->save($imageFull);
		    //Image::make($image)->resize(50, 50)->save($image50X50);
		    Image::make($image)->resize(50, 50)->save($location.$image50X50);
		    Image::make($image)->resize(800, 600)->save($location.$imageFull);

		    $product->image = $imageFull;
	    }
	    $product->save();

        // Redirect
        return redirect()->back();
        //return redirect()->route('products.show', $product->id)->with('success', 'Created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact($product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        echo "Edit";
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        echo "Destroy";
    }
}
