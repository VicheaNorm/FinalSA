<?php

namespace App\Http\Controllers;
use App\AddProduct;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    public function order()
    {
        $title = 'Create Order';
        return view('pages.order')->with('title', $title);
    }
    public function ui()
    {
        $title = 'Dashboard New';
        return view('pages.ui')->with('title', $title);
    }
    public function addproduct()
    {
        $title = 'Add Products';
        return view('pages.addproduct')->with('title', $title);
    }

    public function product()
    {
        $title = 'Product List';
        return view('pages.product')->with('title', $title);
    }
    public function user()
    {
        $title = 'User List';
        return view('pages.user')->with('title', $title);
    }
    public function expense()
    {
        $title = 'Expense Page';
        return view('pages.expense')->with('title', $title);
    }
    public function customer()
    {
        $title = 'Customer Page';
        return view('pages.customer')->with('title', $title);
    }
    public function stock()
    {
        $title = 'Stock Page';
        return view('pages.stock')->with('title', $title);
    }
    public function setupuser()
    {
        $title = 'Setup User Page';
        return view('pages.setupuser')->with('title', $title);
    }
    public function staff()
    {
        $title = 'Staff Page';
        return view('pages.staff')->with('title', $title);
    }
    public function userprofile()
    {
        $title = 'User Profile Page';
        return view('pages.userprofile')->with('title', $title);
    }
    public function supplier()
    {
        $title = 'Supplier Page';
        return view('pages.supplier')->with('title', $title);
    }
}
