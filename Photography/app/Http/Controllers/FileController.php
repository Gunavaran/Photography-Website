<?php
/**
 * Created by PhpStorm.
 * User: Start
 * Date: 4/12/2018
 * Time: 1:59 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\Photo;
use Intervention\Image\Facades\Image;


class FileController extends Controller
{
    public function uploadPhotos(Request $request)
    {
        if ($request->hasFile('images')) {
            foreach ($request->images as $file) {

                $fileName = $file->getClientOriginalName();
                $file->storeAs('public/', $fileName);
                $filePath = Storage::url($fileName);

                if (!is_dir('storage/thumbs/')) {
                    Storage::makeDirectory('public/thumbs');
                }

                if (!is_dir('storage/gallery/')) {
                    Storage::makeDirectory('public/gallery');
                }

                if (Session::get('category')!= 'Slider'){
                    Image::make('storage/' . $fileName)->resize(1600, 1200)->save('storage/thumbs/' . $fileName, 100);
                    Image::make('storage/' . $fileName)->resize(940, 567)->save('storage/gallery/' . $fileName, 100);
                } else{
                    Image::make('storage/' . $fileName)->resize(1600, 1200)->save('storage/thumbs/' . $fileName, 100);
                }


                $photo = new Photo();
                $photo->photo_name = $fileName;
                $photo->photo_path = $filePath;
                $photo->category = Session::get('category');
                $photo->thumbnail_path = 'storage/thumbs/' . $fileName;
                $photo->gallerythumb_path = 'storage/gallery/'. $fileName;
                $photo->save();
            }
            Session::forget('category');
            Session::flash('success', 'Your files are uploaded successfully');
            return redirect()->route('uploadPhotos_selectCategory');

        } else {
            Session::flash('failure', 'No files has been chosen');
            return view('uploadPhotos');
        }

    }

    public function removePhotos()
    {
        $photoPath = Input::get('photo_path');
        $thumbnailPath = Input::get('thumbnail_path');
        $galleryPath = Input:: get('gallery_path');
        $photo = Photo::where('photo_path', $photoPath);
        $photo->delete();
        File::delete($thumbnailPath);
        File::delete($galleryPath);
        unlink(public_path($photoPath));


        return redirect()->route('viewPhotos');
    }
}