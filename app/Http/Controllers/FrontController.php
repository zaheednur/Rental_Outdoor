<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Store;
use App\Models\Spot;


class FrontController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $latest_products = Product::latest()->take(6)->get();
        $random_products = Product::inRandomOrder()->take(15)->get();
        return view('front.index', compact('categories', 'latest_products', 'random_products'));
    }

    public function category(Category $category){
        session()->put('category_id', $category->id);
        return view('front.brands',compact('category'));
    }

    public function brand(Brand $brand){
        $category_id = session()->get('category_id');

        $products = Product::where('brand_id', $brand->id)
        ->where('category_id', $category_id)
        ->latest()
        ->get();

        return view('front.gadgets',compact('brand','products'));
    }

    public function details(Product $product) {
        $random_products = Product::inRandomOrder()->take(3)->get();
        return view('front.details', compact('product', 'random_products'));
    }    

    public function booking(Product $product){
        $stores = Store::all();
        return view('front.booking', compact('product','stores'));
    }

    public function booking_save(StoreBookingRequest $request, Product $product){
        $bookingData = $request->only(['duration', 'started_at', 'address']);
        session($bookingData);
        return redirect()->route('front.checkout', $product->slug);
    }

    public function spots(Category $category) {
        $spots = Spot::all(); // atau Anda bisa memfilter data Spot jika perlu
        return view('front.spots', compact('spots'));
    }

    public function contacts()
    {
        // Logika atau view yang akan ditampilkan di halaman kontak
        return view('front.contacts'); // pastikan 'front.contacts' mengarah ke view yang sesuai
    }
    

}
