<?php


namespace App\Controllers;


use App\core\BaseController;
use App\Helpers\Debugger;
use App\Models\Product;
use App\Models\User;

class HomeController extends BaseController
{
    public function index()
    {
        $user = User::findById(1);
       //$product = Product::getAll(15);
        $product = Product::create([
            'name' => 'Product',
            'category' => 2,
            'price' => 1220,
            'brand_id' => 2
        ]);

        $product->name = 'Product 2';
        $product->save();
        $prod2 = new Product();
        $prod2->save();

//        $this->render('home.main', [
//            'user' => $user,
//            'product' => $product
//        ]);
    }
}
