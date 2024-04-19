<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CategoriesController extends Controller
{
    //
    function buildTree(array $categories, $parent_id = 0)
    {
        
        $tree = [];
        foreach ($categories as $category) {
            
            if ($category['parent'] == $parent_id) {
                
                $children = $this->buildTree($categories, $category['id']);
               
                if ($children) {
                    $category['children'] = $children;
                    
                }
                $tree[] = $category;
            }

        }

       
        return $tree;
    }


    public function index()
    {
        $function = "core_course_get_categories";

        $categories = Http::get('https://plataforma-arrow.online/webservice/rest/server.php', [
            'wstoken' => env('APP_KEY_URL'),
            'moodlewsrestformat' => 'json',
            'wsfunction' => $function,


        ])->json();

        $tree = $this->buildTree($categories);

        return view('categories.treeView', compact('tree'));
    }
}