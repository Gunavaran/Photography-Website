<?php
/**
 * Created by PhpStorm.
 * User: Start
 * Date: 4/9/2018
 * Time: 9:23 AM
 */

namespace App\Http\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends  Model
{
    protected $fillable = [
        'category_name',
        'status'
    ];

    protected  $table  = 'category';
    protected $primaryKey = 'category_name';
    public $incrementing = false;
}