<?php


namespace App\Models;


use App\core\Model;

class Category extends Model
{
    protected static $tableName = 'categories_products';

    protected static $fillable = ['name'];
}
