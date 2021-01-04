<?php


namespace App\Controllers;


use App\core\BaseController;
use App\Helpers\Debugger;
use App\Router;

class BlogController extends BaseController
{
    public function index()
    {
        echo 'Blog Controller';
    }

    public function show()
    {
        $arguments = Router::getRouteArgs();
        $person = [
            'id' => 1,
            'name' => 'Eugenij',
            'lastName' => 'Panasevich'
        ];
        $this->render('blog.category', [
            'main' => $person,
            'id' => 123
        ]);

    }

    public function showPage()
    {
        Debugger::debug(Router::getRouteArgs());
        echo "<h1>News page</h1>";
    }
}
