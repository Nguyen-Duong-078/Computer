<?php

namespace Power\Computer\Controllers\Client;

use Power\Computer\Commons\Controller;
use Power\Computer\Models\Category;
use Power\Computer\Models\Post;

class CategoryController extends Controller
{

     protected $post;
     private Category $category;

     public function __construct()
     {
          $this->post = new Post;

     }
     public function show($category_id)
     {
          // $categories = $this->category->getByID($category_id);    
          $getPostsByCategory = $this->post->getPostsByCategory($category_id);

          //debug($getPostsByCategory);
          return $this->renderViewClient(
               'category',
               [
                    'getPostsByCategory' => $getPostsByCategory
               ]
          );
     }

}
