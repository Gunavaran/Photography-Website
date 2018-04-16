<?php
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: Start
 * Date: 4/7/2018
 * Time: 2:18 PM
 */
class User extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_no',
        'address',
        'username',
        'password'
    ];
    protected $table ="user";
    protected $primaryKey = 'user_id';
}