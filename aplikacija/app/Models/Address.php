<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
*@property $country
*@property $city
*@property $post_code
*@property $street
*@property $house
*@property $flat
*/
class Address extends Model
{
    use HasFactory;
}
