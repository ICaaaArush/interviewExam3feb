<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantPrice;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        //  SEND PAGINATED DATA WITH ESTABLISHED ELOQUENT RELATIONSHIP
        $products = Product::paginate(10);
       // dd($products);
        $variants = Variant::all();


       

        // foreach($products->items() as $product){
        //     echo "Product: " . $product->title;
        //     echo "<br>";
        //     $variantPrices = $product->productVariantPrices;
        //     foreach($variantPrices as $variantPrice){

        //         echo $variantPrice->variant_one->detail->title . " : " . $variantPrice->variant_one->variant . ', ' . $variantPrice->variant_two->detail->title . " : " . $variantPrice->variant_two->variant . ', ' . $variantPrice->variant_three->detail->title . " : " . $variantPrice->variant_three->variant . ', Price: ' . $variantPrice->price . ", Stock: " . $variantPrice->stock;
        //         echo "<br><br>";
        //     }
        // }
        // exit;

        
        return view('products.index',compact('products' , 'variants' ));
    }
    public function search(Request $request)
    {   

        //  SEND PRODUCT DATA WITH RELATIONS                    
        $searchedProducts = Product::with(['productVariantPrices','productVariant']);

        //  IF USER INPUTS TITLE FETCH RELATED DATA 
        if ($request->title) {
            $searchedProducts->where('title', 'like', "$request->title%");
        }

        //  IF USER INPUTS PRICE_FROM FETCH RELATED DATA
        if ($request->price_from) {
            $searchedProducts->whereHas('productVariantPrices', function(Builder $query) use($request){
                $query->where('price', '>=', "$request->price_from%");
            });
        }

        //  IF USER INPUTS PRICE_TO FETCH RELATED DATA
        if ($request->price_to) {
            $searchedProducts->whereHas('productVariantPrices', function(Builder $query) use($request){
                $query->where('price', '<=', "$request->price_to%");
            });
        }

        //  IF USER INPUTS VARIANT FETCH RELATED DATA
        if ($request->variant) {
            $searchedProducts->whereHas('productVariant', function(Builder $query) use($request){
                $query->where('variant', 'like', "$request->variant%");
            });
        }

        //  IF USER INPUTS DATE FETCH RELATED DATA
        if ($request->date) {
            $searchedProducts->where('created_at', '>', "$request->date");
        }

        //  FETCH RELATED DATA
        $searchedProducts = $searchedProducts->get();

        if ($searchedProducts) {
            //  RETRUN VIEW WITH SEARCHED DATA
            return view('products.show', compact('searchedProducts'));

        }else{
            //  RETURN BACK
            return back();
        }
        
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
