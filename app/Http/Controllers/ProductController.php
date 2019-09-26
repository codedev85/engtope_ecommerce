<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use App\Models\CategorySub;


class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
     //  dd($request);
        
            $product_name = $request->input('name');
            $product_desc = $request->input('description');
            $product_amount = $request->input('amount');
            $product_category = $request->input('category_sub_id');
            $specs = $request->input('specification');
     
        if($request->hasFile('image')){
                $path = [];
               

                $product_image = $request->file('image')[0];
                $product_image2 = $request->file('image')[1];
                $product_image3 = $request->file('image')[2];
             
                // dd($path);
                // dd($product_image2);
                $store_product_img = Storage::putfile('products', $product_image);
                $store_product_img2 = Storage::putfile('products',$product_image2); 
                $store_product_img3 = Storage::putfile('products',$product_image3);

                array_push($path,   $store_product_img);
                array_push($path,   $store_product_img2);
                array_push($path,   $store_product_img3);
                // dd($path);
                $product_array = json_encode($path);
                $new_product = new Product();
                $new_product->name = $product_name;
                $new_product->description = $product_desc;
                $new_product->amount = $product_amount;
                $new_product->category_sub_id = $product_category;
                $new_product->image  = $product_image;
                $new_product->specification = $specs;
                $new_product->image =  $product_array ;
                $new_product->save();
            
        }
    

        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $product = $this->productRepository->update($request->all(), $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }


    public function homePage(){
   
         $products = Product::paginate(12);
         $categories = CategorySub::all();
    
          return view('welcome')->with('categories',$categories)->with('products',$products);
    }


    public function productPage($id){
   
        $find_product = Product::where('id',$id)->first();

        return view('products.product-page')->with('find_product',$find_product);
    }
  

    public function productCategory($id){
         if($id == 1){
             $products = Product::orderBy('created_at','DESC')->paginate(!2);
             $related_categories = Product::where('id',$id) ->inRandomOrder()->limit(4);
          
         }else{
            $products = Product::where('category_sub_id',$id)->paginate(12);
            $related_categories = Product::where('id',$id) ->inRandomOrder()->get();
           
         }
        
      
     
    
        $categories = CategorySub::all();

        return view('products.products-cat')->with('related_categories',$related_categories)->with('categories',$categories)->with('products',$products);
    }



    public function hotDeals(){
  
        $products = Product::orderBy('created_at','DESC')->get();

        return view('products.hot-deals')->with('products',$products);
    }


    public function activateHotDeals($id){


      Product::where('id',$id)->update([
           'hotdeals'=> 1,
       ]);
     
       return back ();
    }


    public function DeActivateHotDeals($id){


        Product::where('id',$id)->update([
             'hotdeals'=> 0,
         ]);
       
         return back ();
      }


    public function topSelling(){
  
        $products = Product::orderBy('created_at','DESC')->get();

        return view('products.top-selling')->with('products',$products);
    }


    public function ActivateTopSelling($id){

        Product::where('id',$id)->update([
            'topselling'=> 1,
        ]);
        return back();

    }



    public function DeActivateTopSelling($id){

        Product::where('id',$id)->update([
            'topselling'=> 0,
        ]);
        return back();

    }
}
