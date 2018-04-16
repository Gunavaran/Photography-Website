<?php
/**
 * Created by PhpStorm.
 * User: Start
 * Date: 4/11/2018
 * Time: 9:36 AM
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'photo_name',
        'photo_path',
        'category',
        'thumbnail_path',
        'gallerythumb_path'
    ];
    protected $table ="photo";
    protected $primaryKey = 'photo_id';
}