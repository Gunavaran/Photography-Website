<?php
/**
 * Created by PhpStorm.
 * User: Start
 * Date: 4/7/2018
 * Time: 8:34 PM
 */

namespace App\Http\Controllers;


use App\Http\Models\Category;
use App\Http\Models\Photo;
use App\Http\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class FormController extends Controller
{
    public function changePassword(Request $request)
    {
        $password = DB::table('user')->where('username', Session::get('username'))->value('password');

        if (Hash::check($request['old_password'], $password)) {
            $this->validate($request, [
                'new_password' => 'required|confirmed'
            ]);

            $user = User::where('username', Session::get('username'))->first();
            $user->password = bcrypt($request['new_password']);
            $user->save();

            Session::flash('success', 'Password is Changed Successfully');
            return redirect()->route('changePasswordForm');
        } else {
            Session::flash('error', "Incorrect Old Password");
            return redirect()->route('changePasswordForm');
        }
    }

    public function updateMyDetails(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'contact_no' => 'required|alpha_num',
            'email' => 'required|max:50',
            'address' => 'max:100',
            'username' => 'required|max:50'
        ]);

        $user = User::where('username', Session::get('username'))->first();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->contact_no = $request['contact_no'];
        $user->email = $request['email'];
        $user->address = $request['address'];
        $user->username = $request['username'];
        $user->save();
        Session::flash('success', 'Details are Changed Successfully');
        return redirect()->route('myDetails');

    }

    public function storeCategory(Request $request)
    {

        $this->validate($request, [
            'category_name' => 'required|unique:category,category_name'
        ]);

        $category = new Category();
        $category->category_name = $request['category_name'];
        $category->save();
        Session::flash('success', 'New category is added successfully');
        return redirect()->route('showCategories');
    }

    public function removeCategory(Request $request)
    {
        $category = Category::where('category_name', $request['category_name']);
//        Storage::deleteDirectory('public/'.$request['category_name']);
        $category->delete();
        $photos = Photo::where('category',$request['category_name'])->get();
        foreach($photos as $photo){
            $photoPath = $photo->photo_path;
            $thumbnailPath = $photo -> thumbnail_path;
            $galleryPath = $photo->gallerythumb_path;

            $file = Photo::where('photo_path',$photoPath);
            $file -> delete();
            File::delete($galleryPath);
            File::delete($thumbnailPath);
            unlink(public_path($photoPath));
        }
        Session::flash('removeSuccess', 'Category ' . $request['category_name'] . ' is removed successfully');

        return redirect()->route('showCategories');
    }

    public function search(Request $request){
        Session::put('searchCategory',$request['searchCategory']);
        return redirect() -> route('viewPhotos');
    }

}