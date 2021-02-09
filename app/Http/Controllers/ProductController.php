<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantPrice;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

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

        
        return view('products.index',compact('products'));
    }
    public function search(Request $request)
    {   
        $products = Product::paginate(10);
        if ($request->title){
            $searchedProducts = Product::where('title', 'like', "%{$request->title}%")
                                        ->whereHas('comments', function($query)
        {
            $query->where('in_user_id', Auth::user()->in_user_id);
        });
                                        // ->orWhere('city_id', $city_id)
                                        ->get();
                dd($searchedProducts);
            }
        
        //     echo "Product: " . $product->title;
        // for($i = 0; $i > count($products); $i++){

        //     $searchedProducts = Product::where('title, 'like' '$reuqest->title)
        //                             ->where('this', '=', 1)
        //                             ->where('that', '=', 1)
        //                             ->get();
                
        //     }
        // }
        //  SEND PAGINATED DATA
        
        // $request->price_from
        // $request->price_to
        // $request->date
        // $productDetails = Product::all();
        // if ($request->price_from) {
        //     $productDetails->whereHas('productVariantPrices', function($q) use($request){
        //         $q->where('price', ">" ,$request->price_from);
        //     });
        // }
        

        // $fetchProductVariant = Product::find(1)->productVariants;
        // $fetchProductVariant = Product::where('product_id', 3)->productVariants;
        // dd($fetchProductVariant);
        //     Project::with(['clients', 'tasks', 'status' => function($q) use($value) {
        //         // Query the name field in status table
        //         $q->where('name', '=', $value); // '=' is optional
        //     }])

        // if ($request->title) {
        //     $productTitle = DB::table('products')->where('title', 'like', "%{$request->title}%")->get();
        //     $productTitle = $productTitle->toArray();
        //     $productId = array_column($productTitle, 'id');
        // }
        
        


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
