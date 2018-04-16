<?php
/**
 * Created by PhpStorm.
 * User: Start
 * Date: 4/7/2018
 * Time: 10:18 AM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function showDashboard()
    {
        if (Session::has('username')) {
            return view('layouts.dashboard');
        } else {
            return view('loginForm');
        }
    }

    public function showLogInForm()
    {
        return view('loginForm');
    }

    public function showHome()
    {
        return view('welcome');
    }

    public function showMyDetails()
    {
        if (Session::has('username')) {
            return view('myDetails');
        } else {
            return view('loginForm');
        }
    }

    public function showChangePasswordForm()
    {
        if (Session::has('username')) {
            return view('changePassword');
        } else {
            return view('loginForm');
        }
    }

    public function showUploadPhotosForm(Request $request)
    {
        if (Session::has('username')) {
            Session::put('category', $request['category_name']);
            return view('uploadPhotos');
        } else {
            return view('loginForm');
        }

    }

    public function showCategories()
    {
        if (Session::has('username')) {
            return view('categories');
        } else {
            return view('loginForm');
        }
    }

    public function showSelectCategory()
    {
        if (Session::has('username')) {
            return view('selectCategory');
        } else {
            return view('loginForm');
        }
    }

    public function showPhotoView()
    {
        if (Session::has('username')) {
            return view('viewPhotos');
        } else {
            return view('loginForm');
        }
    }

    public function showGallery()
    {
        return view('gallery');
    }

    public function showServices(){
        return view('services');
    }

    public function showContact(){
        return view('contact');
    }

}