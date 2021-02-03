<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantPrice;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //  SEND PAGINATED DATA + ALL PRODUCT DATA
        $products= Product::paginate(10);
        // dd($products);

        $allproducts = Product::all();

        //  FETCH PRODUCT PRICE
        $productVariantPrice = ProductVariantPrice::all();
        $productVariantPrice = $productVariantPrice->toArray();
        $productPrice = array_column($productVariantPrice, 'price', 'product_id');
        $productStock = array_column($productVariantPrice, 'stock', 'product_id');
        //dd($productVariantPrice);

        //  FETCH PRODUCT COLOR
        $productVariantColor = DB::table('product_variants')->where('variant_id',1)->get();

        //  FETCH PRODUCT SIZE
        $productVariantSize = DB::table('product_variants')->where('variant_id',2)->get();

        //  FETCH PRODUCT STYLE
        $productVariantStyle = DB::table('product_variants')->where('variant_id',3)->get();
        
        return view('products.index')->with('products', $products)
                ->with('allproducts', $allproducts)
                ->with('productVariantPrice', $productVariantPrice)
                ->with('productVariantColor', $productVariantColor)
                ->with('productVariantSize', $productVariantSize)
                ->with('productPrice', $productPrice)
                ->with('productStock', $productStock)
                ->with('productVariantStyle', $productVariantStyle);
    }
    public function search(Request $request)
    {
        // $request->title
        // $request->variant
        // $request->price_from
        // $request->price_to
        // $request->date)
        //  FETCH SIMILAR RESULTS BY INPUT TITILE
        $productTitle = DB::table('products')->where('title', $request->title)->get();
        // ->where('title', '=', $request->title)
        // ->orWhere(function ($query) {
        //     $query->where('', '>', 100)
        //           ->where('title', '<>', 'Admin');
        // })

        //  SEND ALL PRODUCT DATA
        $allproducts = Product::all();

        //  FETCH PRODUCT PRICE
        $productVariantPrice = ProductVariantPrice::all();

        //  FETCH PRODUCT COLOR
        $productVariantColor = DB::table('product_variants')->where('variant_id',1)->get();

        //  FETCH PRODUCT SIZE
        $productVariantSize = DB::table('product_variants')->where('variant_id',2)->get();

        //  FETCH PRODUCT STYLE
        $productVariantStyle = DB::table('product_variants')->where('variant_id',3)->get();
        
        return view('products.show')->with('allproducts', $allproducts)->with('productTitle', $productTitle)->with('productVariantPrice', $productVariantPrice)->with('productVariantColor', $productVariantColor)->with('productVariantSize', $productVariantSize)->with('productVariantStyle', $productVariantStyle);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $variants = Variant::all();
        return view('products.create', compact('variants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $variants = Variant::all();
        return view('products.edit', compact('variants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
