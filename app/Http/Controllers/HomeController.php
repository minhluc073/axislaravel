<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function index_v2()
    {
        return view('pages.index-v2');
    }

    public function index_v3()
    {
        return view('pages.index-v3');
    }
    public function index_v4()
    {
        return view('pages.index-v4');
    }
    public function index_v5()
    {
        return view('pages.index-v5');
    }
    public function index_v6()
    {
        return view('pages.index-v6');
    }
    public function index_v7()
    {
        return view('pages.index-v7');
    }
    public function index_v8()
    {
        return view('pages.index-v8');
    }
    
    public function slider_typer_text()
    {
        return view('pages.slider-typer-text');
    }
    public function slider_scroll_text()
    {
        return view('pages.slider-scroll-text');
    }
    public function slider_rotate_text()
    {
        return view('pages.slider-rotate-text');
    }

    public function explore_v1()
    {
        $page_title = 'Explore 1';
        $page_sub = 'Explore';
        return view('pages.explore-v1', compact('page_title','page_sub'));
    }

    public function explore_v2()
    {
        $page_title = 'Explore 2';
        $page_sub = 'Explore';
        return view('pages.explore-v2', compact('page_title','page_sub'));
    }
    public function explore_v3()
    {
        $page_title = 'Explore 3';
        $page_sub = 'Explore';
        return view('pages.explore-v3', compact('page_title','page_sub'));
    }
    public function explore_v4()
    {
        $page_title = 'Explore 4';
        $page_sub = 'Explore';
        return view('pages.explore-v4', compact('page_title','page_sub'));
    }
    public function auctions()
    {
        $page_title = 'Auctions';
        $page_sub = 'Explore';
        return view('pages.auctions', compact('page_title','page_sub'));
    }
    public function item_details_v1()
    {
        $page_title = 'Item Details 1';
        $page_sub = 'Explore';
        return view('pages.item-details-v1', compact('page_title','page_sub'));
    }
    public function item_details_v2()
    {
        $page_title = 'Item Details 2';
        $page_sub = 'Explore';
        return view('pages.item-details-v2', compact('page_title','page_sub'));
    }
    public function activity_v1()
    {
        $page_title = 'Activity 1';
        $page_sub = 'Activity';
        return view('pages.activity-v1', compact('page_title','page_sub'));
    }
    public function activity_v2()
    {
        $page_title = 'Activity 2';
        $page_sub = 'Activity';
        return view('pages.activity-v2', compact('page_title','page_sub'));
    }
    public function blog()
    {
        $page_title = 'Blog';
        $page_sub = 'Community';
        return view('pages.blog', compact('page_title','page_sub'));
    }
    public function blog_details()
    {
        $page_title = 'Blog Details';
        $page_sub = 'Community';
        return view('pages.blog-details', compact('page_title','page_sub'));
    }
    public function help_center()
    {
        $page_title = 'Help Center';
        $page_sub = 'Community';
        return view('pages.help-center', compact('page_title','page_sub'));
    }
    public function authors_v1()
    {
        $page_title = 'Authors';
        $page_sub = 'Pages';
        return view('pages.authors-v1', compact('page_title','page_sub'));
    }
    public function authors_v2()
    {
        $page_title = 'Authors 2';
        $page_sub = 'Pages';
        return view('pages.authors-v2', compact('page_title','page_sub'));
    }
    public function connect_wallet()
    {
        $page_title = 'Connect Wallet';
        $page_sub = 'Pages';
        return view('pages.wallet-connect', compact('page_title','page_sub'));
    }
    public function create_item()
    {
        $page_title = 'Create Item';
        $page_sub = 'Pages';
        return view('pages.create-item', compact('page_title','page_sub'));
    }
    public function profile()
    {
        $page_title = 'Edit Profile';
        $page_sub = 'Pages';
        return view('pages.profile', compact('page_title','page_sub'));
    }
    public function ranking()
    {
        $page_title = 'Ranking';
        $page_sub = 'Pages';
        return view('pages.ranking', compact('page_title','page_sub'));
    }
    public function login()
    {
        $page_title = 'Login';
        $page_sub = 'Pages';
        return view('pages.login', compact('page_title','page_sub'));
    }
    public function signup()
    {
        $page_title = 'Signup';
        $page_sub = 'Pages';
        return view('pages.signup', compact('page_title','page_sub'));
    }
    public function no_result()
    {
        $page_title = 'No Result';
        $page_sub = 'Pages';
        return view('pages.noresult', compact('page_title','page_sub'));
    }
    public function faq()
    {
        $page_title = 'FAQ';
        $page_sub = 'Pages';
        return view('pages.faq', compact('page_title','page_sub'));
    }
    public function contact_v1()
    {
        $page_title = 'Contact 1';
        $page_sub = 'Contact';
        return view('pages.contact-v1', compact('page_title','page_sub'));
    }
    public function contact_v2()
    {
        $page_title = 'Contact 2';
        $page_sub = 'Contact';
        return view('pages.contact-v2', compact('page_title','page_sub'));
    }
}
