<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
class Cart_Detail extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
       'id',
       'shopping_cart_id',
       'product_id',
       'total_quantity',
       'total_price'
   ];
}
