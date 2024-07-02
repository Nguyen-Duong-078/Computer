<?php

namespace Power\Computer\Controllers\Client;

use Power\Computer\Commons\Controller;
use Power\Computer\Models\Product;

class HomeController extends Controller
{
    private Product $post;

    public function __construct()
    {
        $this->post = new Product;
    }

    public function index()
    {
        return $this->renderViewClient('home');
    }
}
