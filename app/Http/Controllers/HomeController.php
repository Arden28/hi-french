<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Course;
use App\Models\LibraryArticle;
use App\Services\CartService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the home page.
     */
    public function index(){
        $blogs = BlogPost::where('status', 'published')
        ->latest() // orders by created_at DESC
            ->take(2)
                ->get();
        return view('home', compact('blogs'));
    }

    /**
     * Show the course index page.
     */
    public function course(Request $request){
        if($request->get('type')){
            $type = $request->get('type');
            $courses = Course::where('type', $type)->where('status', 'published')->get();
        }
        $courses = Course::where('status', 'published')->get();

        return view('course.index', compact('courses'));
    }

    /**
     * Show the course detail page for a specific post.
     *
     * @param string $slug
     */
    public function courseDetail($slug){

        $course = Course::findBySlug($slug);

        return view('course.detail', compact('course'));
    }

    /**
     * Show the blog index page.
     */
    public function blog(){
        $blogs = BlogPost::where('status', 'published')->get();
        $categories = BlogCategory::all();

        return view('blog.index', compact('blogs', 'categories'));
    }

    /**
     * Show the blog detail page for a specific post.
     *
     * @param string $slug
     */
    public function blogDetail($slug){

        $blog = BlogPost::findBySlug($slug);

        return view('blog.detail', compact('blog'));
    }

    /**
     * Show the library index page.
     */
    public function library(){
        $books = LibraryArticle::all();
        return view('library.index', compact('books'));
    }

    /**
     * Show the shopping cart page.
     */
    public function cart(){
        return view('shop.cart');
    }

    /**
     * Show the checkout page.
     */
    public function checkout(CartService $cart){
        if($cart->count() < 1){
            return redirect()->route('home');
        }
        return view('shop.checkout');
    }

    /**
     * Show the thank you page after checkout.
     */
    public function thankYou(){
        return view('shop.thank-you');
    }

    /**
     * Show the user's account page.
     */
    public function myAccount(){
        return view('my-account.index');
    }
}
