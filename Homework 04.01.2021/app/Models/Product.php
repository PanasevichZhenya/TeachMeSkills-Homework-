<?php


namespace App\Models;


use App\core\Model;

class Product extends Model
{
    protected static $tableName = 'products';

    protected static $fillable = ['name', 'category', 'brand_id'];
}
